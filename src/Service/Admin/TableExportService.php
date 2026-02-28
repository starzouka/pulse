<?php

declare(strict_types=1);

namespace App\Service\Admin;

use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

final class TableExportService
{
    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    public function exportPdf(string $title, array $headers, array $rows, string $fileName): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($this->buildPdfHtml($title, $headers, $rows));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));

        return $response;
    }

    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    public function exportExcel(string $sheetTitle, array $headers, array $rows, string $fileName): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle(mb_substr($sheetTitle, 0, 31));

        foreach ($headers as $index => $header) {
            $sheet->setCellValue([$index + 1, 1], $header);
        }

        foreach ($rows as $rowIndex => $row) {
            foreach ($row as $columnIndex => $value) {
                $sheet->setCellValue([$columnIndex + 1, $rowIndex + 2], $this->normalizeCellValue($value));
            }
        }

        $writer = new Xlsx($spreadsheet);
        $response = new StreamedResponse(static function () use ($writer): void {
            $writer->save('php://output');
        });

        $response->headers->set(
            'Content-Type',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }

    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    private function buildPdfHtml(string $title, array $headers, array $rows): string
    {
        $headerHtml = '';
        foreach ($headers as $header) {
            $headerHtml .= sprintf('<th>%s</th>', $this->escape((string) $header));
        }

        $rowsHtml = '';
        foreach ($rows as $row) {
            $cellsHtml = '';
            foreach ($row as $value) {
                $cellsHtml .= sprintf('<td>%s</td>', $this->escape((string) $this->normalizeCellValue($value)));
            }

            $rowsHtml .= sprintf('<tr>%s</tr>', $cellsHtml);
        }

        return sprintf(
            '<html><head><meta charset="utf-8"><style>%s</style></head><body><h2>%s</h2><table><thead><tr>%s</tr></thead><tbody>%s</tbody></table></body></html>',
            $this->getPdfStyles(),
            $this->escape($title),
            $headerHtml,
            $rowsHtml
        );
    }

    private function getPdfStyles(): string
    {
        return '
            body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #0f172a; }
            h2 { margin: 0 0 14px; font-size: 18px; }
            table { width: 100%; border-collapse: collapse; }
            th, td { border: 1px solid #dbe3f0; padding: 8px; text-align: left; vertical-align: top; }
            th { background: #f4f7fb; font-weight: 700; }
            tr:nth-child(even) td { background: #fafcff; }
        ';
    }

    private function escape(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    private function normalizeCellValue(mixed $value): string|int|float
    {
        if (is_bool($value)) {
            return $value ? 'Oui' : 'Non';
        }

        if ($value === null) {
            return '-';
        }

        if (is_int($value) || is_float($value)) {
            return $value;
        }

        return (string) $value;
    }
}
