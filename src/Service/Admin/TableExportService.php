<?php

declare(strict_types=1);

namespace App\Service\Admin;

use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

final class TableExportService
{
    private const EXCEL_ACCENT = 'FF9D2E';
    private const EXCEL_HEADER_BG = '1F172A';
    private const EXCEL_HEADER_TEXT = 'F8FAFC';
    private const EXCEL_ALT_ROW_BG = 'F8FAFC';
    private const EXCEL_BORDER = 'D9E2EF';

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

        $this->styleExcelSheet($sheet, $headers, $rows);

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

        $columnCount = max(1, count($headers));
        if ($rowsHtml === '') {
            $rowsHtml = sprintf(
                '<tr><td class="emptyCell" colspan="%d">Aucune donnee disponible.</td></tr>',
                $columnCount
            );
        }

        $generatedAt = (new \DateTimeImmutable())->format('Y-m-d H:i');
        $metaHtml = sprintf(
            '<div class="metaRow"><span>Lignes: %d</span><span>Genere le %s</span></div>',
            count($rows),
            $this->escape($generatedAt)
        );

        return sprintf(
            '<html><head><meta charset="utf-8"><style>%s</style></head><body><section class="report"><div class="reportHeader"><div class="brand">PULSE</div><h2>%s</h2>%s</div><table><thead><tr>%s</tr></thead><tbody>%s</tbody></table></section></body></html>',
            $this->getPdfStyles(),
            $this->escape($title),
            $metaHtml,
            $headerHtml,
            $rowsHtml
        );
    }

    private function getPdfStyles(): string
    {
        return '
            @page { margin: 20px; }
            body { font-family: DejaVu Sans, sans-serif; font-size: 11px; color: #0f172a; background: #f4f6fb; }
            .report { width: 100%; }
            .reportHeader { margin-bottom: 12px; padding: 12px 14px; border: 1px solid #d9e2ef; border-top: 4px solid #ff9d2e; background: #ffffff; border-radius: 8px; }
            .brand { display: inline-block; font-size: 10px; font-weight: 700; letter-spacing: 1px; color: #ff9d2e; margin-bottom: 4px; }
            h2 { margin: 0; font-size: 18px; color: #0b1220; }
            .metaRow { margin-top: 8px; font-size: 10px; color: #475569; }
            .metaRow span { display: inline-block; margin-right: 14px; }
            table { width: 100%; border-collapse: collapse; table-layout: fixed; }
            thead { display: table-header-group; }
            th, td { border: 1px solid #d9e2ef; padding: 7px; text-align: left; vertical-align: top; word-wrap: break-word; }
            th { background: #1f2937; color: #f8fafc; font-weight: 700; }
            tbody tr:nth-child(even) td { background: #f8fafc; }
            .emptyCell { text-align: center; color: #64748b; font-style: italic; }
        ';
    }

    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    private function styleExcelSheet(Worksheet $sheet, array $headers, array $rows): void
    {
        $columnCount = max(1, count($headers));
        $lastColumn = Coordinate::stringFromColumnIndex($columnCount);
        $lastRow = max(1, count($rows) + 1);
        $fullRange = sprintf('A1:%s%d', $lastColumn, $lastRow);
        $headerRange = sprintf('A1:%s1', $lastColumn);

        if (method_exists($sheet, 'setShowGridlines')) {
            $sheet->setShowGridlines(false);
        }

        $sheet->freezePane('A2');
        $sheet->setAutoFilter($fullRange);
        $sheet->getDefaultRowDimension()->setRowHeight(20);
        $sheet->getRowDimension(1)->setRowHeight(26);
        $sheet->getTabColor()->setRGB(self::EXCEL_ACCENT);

        $sheet->getStyle($headerRange)->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 11,
                'color' => ['rgb' => self::EXCEL_HEADER_TEXT],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => self::EXCEL_HEADER_BG],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_LEFT,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
        ]);

        $sheet->getStyle($fullRange)->applyFromArray([
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => self::EXCEL_BORDER],
                ],
            ],
        ]);

        for ($rowNumber = 2; $rowNumber <= $lastRow; ++$rowNumber) {
            if ($rowNumber % 2 === 0) {
                $sheet->getStyle(sprintf('A%d:%s%d', $rowNumber, $lastColumn, $rowNumber))
                    ->getFill()
                    ->setFillType(Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setRGB(self::EXCEL_ALT_ROW_BG);
            }
        }

        $this->autoSizeExcelColumns($sheet, $headers, $rows);
    }

    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    private function autoSizeExcelColumns(Worksheet $sheet, array $headers, array $rows): void
    {
        $columnCount = max(1, count($headers));

        for ($columnIndex = 1; $columnIndex <= $columnCount; ++$columnIndex) {
            $maxLength = mb_strlen((string) ($headers[$columnIndex - 1] ?? ''), 'UTF-8');
            foreach ($rows as $row) {
                $cellValue = $this->normalizeCellValue($row[$columnIndex - 1] ?? null);
                $cellLength = mb_strlen((string) $cellValue, 'UTF-8');
                if ($cellLength > $maxLength) {
                    $maxLength = $cellLength;
                }
            }

            $columnLetter = Coordinate::stringFromColumnIndex($columnIndex);
            $columnWidth = (float) min(46, max(10, $maxLength + 3));
            $sheet->getColumnDimension($columnLetter)->setWidth($columnWidth);
        }
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
