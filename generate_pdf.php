<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

if (isset($_GET['table'])) {
    $tableHtml = $_GET['table'];

    $dompdf = new Dompdf();
    $dompdf->loadHtml($tableHtml);
    $dompdf->render();
    $dompdf->stream("members_pdf.pdf", array("Attachment" => false));
    exit;
}
