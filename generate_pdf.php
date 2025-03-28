<?php
require_once 'pdf/fpdf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? 'Default Title';
    $content = $_POST['content'] ?? 'Default Content';

    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetMargins(20, 20, 20);

    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(0, 10, $title, 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('Times', '', 12);
    $pdf->MultiCell(0, 10, $content);

    $filename = 'document_' . date('Ymd_His') . '.pdf';
    $pdf->Output('D', $filename);
    exit;
}

header('Location: index.html');
exit;
?>