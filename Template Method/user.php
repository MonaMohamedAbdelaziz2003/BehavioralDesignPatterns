<?php
include "concreteClasses.php";

// DOC
$docProcessor = new DocProcessor();
$docProcessor->processDocument();
echo "\n";

// CSV
$csvProcessor = new CsvProcessor();
$csvProcessor->processDocument();

echo "\n";

// PDF
$pdfProcessor = new PdfProcessor();
$pdfProcessor->processDocument();