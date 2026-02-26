<?php

declare(strict_types=1);

namespace App\Service\Admin;

use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Process\Process;

final class TableExportService
{
    /**
     * @param list<string> $headers
     * @param list<list<scalar|null>> $rows
     */
    public function exportPdf(string $title, array $headers, array $rows, string $fileName): Response
    {
        return $this->exportPdfHtml($this->buildPdfHtml($title, $headers, $rows), $fileName);
    }

    public function exportPdfHtml(
        string $html,
        string $fileName,
        string $paper = 'A4',
        string $orientation = 'landscape',
    ): Response {
        $browserPdf = $this->renderPdfWithBrowser($html, $paper, $orientation);
        if ($browserPdf !== null) {
            return $this->createPdfResponse($browserPdf, $fileName);
        }

        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();

        return $this->createPdfResponse($dompdf->output(), $fileName);
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

    private function createPdfResponse(string $pdfBinary, string $fileName): Response
    {
        $response = new Response($pdfBinary);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));

        return $response;
    }

    private function renderPdfWithBrowser(string $html, string $paper, string $orientation): ?string
    {
        $renderer = (string) ($_ENV['PULSE_PDF_RENDERER'] ?? $_SERVER['PULSE_PDF_RENDERER'] ?? '');
        if (strtolower(trim($renderer)) === 'dompdf') {
            return null;
        }

        $browserBinary = $this->findBrowserBinary();
        if ($browserBinary === null) {
            return null;
        }

        $tempBase = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'pulse_pdf_' . bin2hex(random_bytes(6));
        $htmlPath = $tempBase . '.html';
        $pdfPath = $tempBase . '.pdf';
        $profileDir = $tempBase . '_profile';

        try {
            if (!@mkdir($profileDir, 0777, true) && !is_dir($profileDir)) {
                return null;
            }

            $htmlWithPageSize = $this->injectBrowserPageSize($html, $paper, $orientation);
            if (@file_put_contents($htmlPath, $htmlWithPageSize) === false) {
                return null;
            }

            $process = new Process([
                $browserBinary,
                '--headless',
                '--disable-gpu',
                '--disable-extensions',
                '--no-first-run',
                '--no-default-browser-check',
                '--allow-file-access-from-files',
                '--ignore-certificate-errors',
                '--allow-insecure-localhost',
                '--print-to-pdf-no-header',
                '--run-all-compositor-stages-before-draw',
                '--virtual-time-budget=12000',
                '--user-data-dir=' . $profileDir,
                '--print-to-pdf=' . $pdfPath,
                $this->toFileUri($htmlPath),
            ]);
            $process->setTimeout(60);
            $process->run();

            if (!$process->isSuccessful()) {
                return null;
            }

            if (!is_file($pdfPath)) {
                return null;
            }

            $binary = @file_get_contents($pdfPath);
            if (!is_string($binary) || $binary === '') {
                return null;
            }

            return $binary;
        } catch (\Throwable) {
            return null;
        } finally {
            @unlink($htmlPath);
            @unlink($pdfPath);
            $this->removeDirectory($profileDir);
        }
    }

    private function injectBrowserPageSize(string $html, string $paper, string $orientation): string
    {
        $sizeCss = sprintf('@page { size: %s %s; }', strtoupper(trim($paper)), strtolower(trim($orientation)));
        $styleTag = '<style>' . $sizeCss . '</style>';

        if (stripos($html, '</head>') !== false) {
            return (string) preg_replace('/<\/head>/i', $styleTag . '</head>', $html, 1);
        }

        return $styleTag . $html;
    }

    private function findBrowserBinary(): ?string
    {
        $envCandidates = [
            (string) ($_ENV['PULSE_PDF_BROWSER_BIN'] ?? ''),
            (string) ($_SERVER['PULSE_PDF_BROWSER_BIN'] ?? ''),
            (string) ($_ENV['PDF_BROWSER_BIN'] ?? ''),
            (string) ($_SERVER['PDF_BROWSER_BIN'] ?? ''),
        ];

        foreach ($envCandidates as $candidate) {
            $normalized = trim($candidate);
            if ($normalized !== '' && $this->isExecutableCandidate($normalized)) {
                return $normalized;
            }
        }

        $candidates = [
            // Windows
            'C:\Program Files (x86)\Microsoft\Edge\Application\msedge.exe',
            'C:\Program Files\Microsoft\Edge\Application\msedge.exe',
            'C:\Program Files (x86)\Google\Chrome\Application\chrome.exe',
            'C:\Program Files\Google\Chrome\Application\chrome.exe',
            // Common PATH names
            'msedge',
            'chrome',
            'google-chrome',
            'chromium',
            'chromium-browser',
            // macOS
            '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
            '/Applications/Microsoft Edge.app/Contents/MacOS/Microsoft Edge',
            // Linux
            '/usr/bin/google-chrome',
            '/usr/bin/chromium',
            '/usr/bin/chromium-browser',
            '/snap/bin/chromium',
        ];

        foreach ($candidates as $candidate) {
            if ($this->isExecutableCandidate($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    private function isExecutableCandidate(string $candidate): bool
    {
        $trimmed = trim($candidate);
        if ($trimmed === '') {
            return false;
        }

        if (str_contains($trimmed, DIRECTORY_SEPARATOR) || str_contains($trimmed, '/')) {
            return is_file($trimmed);
        }

        try {
            $probe = new Process([$trimmed, '--version']);
            $probe->setTimeout(5);
            $probe->run();

            return $probe->isSuccessful();
        } catch (\Throwable) {
            return false;
        }
    }

    private function toFileUri(string $path): string
    {
        $normalized = str_replace('\\', '/', $path);
        if (preg_match('/^[A-Za-z]:\//', $normalized) === 1) {
            $normalized = '/' . $normalized;
        }

        $segments = explode('/', $normalized);
        foreach ($segments as $index => $segment) {
            if ($segment === '' || ($index === 1 && str_ends_with($segment, ':'))) {
                continue;
            }

            $segments[$index] = rawurlencode($segment);
        }

        return 'file://' . implode('/', $segments);
    }

    private function removeDirectory(string $dir): void
    {
        if (!is_dir($dir)) {
            return;
        }

        $items = scandir($dir);
        if ($items === false) {
            @rmdir($dir);

            return;
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $path = $dir . DIRECTORY_SEPARATOR . $item;
            if (is_dir($path)) {
                $this->removeDirectory($path);
                continue;
            }

            @unlink($path);
        }

        @rmdir($dir);
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
