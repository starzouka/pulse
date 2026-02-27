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
    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    public function exportPdf(string $title, array $headers, array $rows, string $fileName): Response
    {
        return $this->exportPdfHtml(
            $this->buildPdfHtml($title, $headers, $rows),
            $fileName,
            'A4',
            'landscape'
        );
    }

    public function exportPdfHtml(
        string $html,
        string $fileName,
        string $paper = 'A4',
        string $orientation = 'portrait',
    ): Response {
        $dompdf = $this->createDompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
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
        $spreadsheet->getProperties()
            ->setCreator('PULSE')
            ->setLastModifiedBy('PULSE')
            ->setTitle(sprintf('%s - Export', $sheetTitle))
            ->setSubject($sheetTitle)
            ->setDescription('Export admin PULSE');
        $spreadsheet->getDefaultStyle()->getFont()->setName('Segoe UI')->setSize(10);

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
        $columnCount = max(1, count($headers));
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

        if ($rowsHtml === '') {
            $rowsHtml = sprintf(
                '<tr><td colspan="%d" class="emptyCell">Aucune donnee a exporter.</td></tr>',
                $columnCount
            );
        }

        $generatedAt = (new \DateTimeImmutable())->format('d/m/Y H:i');
        $rowCount = count($rows);

        return sprintf(
            '<html><head><meta charset="utf-8"><style>%s</style></head><body><div class="docShell"><div class="docHeader"><div class="docKicker">PULSE ADMIN EXPORT</div><h2 class="docTitle">%s</h2><div class="docMeta"><span class="metaPill">%d colonnes</span><span class="metaPill">%d lignes</span><span class="metaText">Genere le %s</span></div></div><div class="tableCard"><table class="dataTable"><thead><tr>%s</tr></thead><tbody>%s</tbody></table></div><div class="docFooter">PULSE • Export automatique</div></div></body></html>',
            $this->getPdfStyles(),
            $this->escape($title),
            $columnCount,
            $rowCount,
            $this->escape($generatedAt),
            $headerHtml,
            $rowsHtml
        );
    }

    private function getPdfStyles(): string
    {
        return <<<'CSS'
            @page {
                margin: 18px 20px;
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: DejaVu Sans, sans-serif;
                font-size: 10px;
                color: #f7f5ff;
                background: #080712;
            }

            .docShell {
                width: 100%;
            }

            .docHeader {
                background: #110f20;
                border: 1px solid #2d2642;
                border-radius: 14px;
                padding: 14px 16px;
                margin-bottom: 10px;
            }

            .docKicker {
                font-size: 8px;
                letter-spacing: 1.2px;
                text-transform: uppercase;
                color: #ffbe62;
                margin-bottom: 5px;
            }

            .docTitle {
                margin: 0;
                font-size: 18px;
                line-height: 1.2;
                color: #ffffff;
            }

            .docMeta {
                margin-top: 8px;
                font-size: 8.5px;
                color: #b8b2cf;
            }

            .metaPill {
                display: inline-block;
                margin-right: 6px;
                margin-bottom: 4px;
                padding: 3px 7px;
                border-radius: 999px;
                border: 1px solid #3b3158;
                background: #1a1530;
                color: #f4f1ff;
            }

            .metaText {
                color: #a49dbf;
            }

            .tableCard {
                background: #100d1d;
                border: 1px solid #2d2642;
                border-radius: 14px;
                padding: 8px;
            }

            table.dataTable {
                width: 100%;
                border-collapse: collapse;
                table-layout: fixed;
                border: 1px solid #2b2440;
                border-radius: 10px;
                overflow: hidden;
            }

            .dataTable thead th {
                background: #1b1630;
                color: #ffd8a3;
                font-size: 8px;
                font-weight: 700;
                letter-spacing: 0.6px;
                text-transform: uppercase;
                text-align: left;
                padding: 7px 6px;
                border-right: 1px solid #2b2440;
                border-bottom: 1px solid #ff9d2e;
            }

            .dataTable thead th:last-child {
                border-right: none;
            }

            .dataTable tbody td {
                padding: 7px 6px;
                color: #f4f1ff;
                border-right: 1px solid #2b2440;
                border-bottom: 1px solid #24203a;
                vertical-align: top;
                word-wrap: break-word;
            }

            .dataTable tbody td:last-child {
                border-right: none;
            }

            .dataTable tbody tr:nth-child(odd) td {
                background: #120f22;
            }

            .dataTable tbody tr:nth-child(even) td {
                background: #16112a;
            }

            .dataTable tbody tr:last-child td {
                border-bottom: none;
            }

            .emptyCell {
                text-align: center;
                color: #b8b2cf;
                padding: 12px 8px;
            }

            .docFooter {
                margin-top: 8px;
                text-align: right;
                color: #9c95b7;
                font-size: 8px;
            }
        CSS;
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

        $sheet->setShowGridlines(false);
        $sheet->freezePane('A2');
        $sheet->setAutoFilter($fullRange);
        $sheet->getDefaultRowDimension()->setRowHeight(20);
        $sheet->getRowDimension(1)->setRowHeight(26);
        $sheet->getTabColor()->setRGB('FF9D2E');

        $sheet->getStyle($fullRange)->getAlignment()
            ->setVertical(Alignment::VERTICAL_TOP)
            ->setWrapText(true);

        $sheet->getStyle($headerRange)->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 10,
                'color' => ['rgb' => 'FFF5E7'],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '1C1630'],
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => '332B4D'],
                ],
                'bottom' => [
                    'borderStyle' => Border::BORDER_MEDIUM,
                    'color' => ['rgb' => 'FF9D2E'],
                ],
            ],
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
        ]);

        if ($lastRow >= 2) {
            $dataRange = sprintf('A2:%s%d', $lastColumn, $lastRow);

            $sheet->getStyle($dataRange)->applyFromArray([
                'font' => [
                    'color' => ['rgb' => 'F3F0FF'],
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '2A2440'],
                    ],
                ],
            ]);

            for ($row = 2; $row <= $lastRow; ++$row) {
                $rowRange = sprintf('A%d:%s%d', $row, $lastColumn, $row);
                $fillColor = $row % 2 === 0 ? '151127' : '110D1F';

                $sheet->getStyle($rowRange)->getFill()
                    ->setFillType(Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setRGB($fillColor);
            }
        }

        for ($index = 1; $index <= $columnCount; ++$index) {
            $columnLetter = Coordinate::stringFromColumnIndex($index);
            $sheet->getColumnDimension($columnLetter)
                ->setWidth($this->computeExcelColumnWidth($headers, $rows, $index - 1));
        }
    }

    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    private function computeExcelColumnWidth(array $headers, array $rows, int $columnIndex): float
    {
        $maxLength = $this->excelTextLength((string) ($headers[$columnIndex] ?? ''));

        foreach ($rows as $row) {
            $value = $row[$columnIndex] ?? null;
            $text = (string) $this->normalizeCellValue($value);
            $text = str_replace(["\r\n", "\r", "\n", "\t"], ' ', $text);
            $maxLength = max($maxLength, $this->excelTextLength($text));
        }

        $width = max(10, min(42, $maxLength + 2));

        return (float) $width;
    }

    private function excelTextLength(string $value): int
    {
        $normalized = trim(preg_replace('/\s+/', ' ', $value) ?? '');

        return function_exists('mb_strlen') ? mb_strlen($normalized) : strlen($normalized);
    }

    private function createDompdf(): Dompdf
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);

        return new Dompdf($options);
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
