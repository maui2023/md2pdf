<?php
// converter.php

require_once 'libraries/Parsedown.php';
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

$markdownText = $_POST['markdown'] ?? 'No markdown provided';

// Convert Markdown to HTML
$Parsedown = new Parsedown();
$html = $Parsedown->text($markdownText);

// Include CSS directly
$css = file_get_contents('styles.css');

$htmlWithCss = "
<html>
<head>
    <style>{$css}</style>
</head>
<body>{$html}</body>
</html>
";

// Initialize Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($htmlWithCss);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Stream PDF to browser for download
$dompdf->stream("markdown-document.pdf", ["Attachment" => true]);
