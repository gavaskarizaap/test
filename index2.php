<?php
// Include the Composer autoloader
require 'vendor/autoload.php';

// Use the Gufy namespace
use Gufy\PdfToHtml\Pdf;
use Gufy\PdfToHtml\Config;

// Set the path to the pdftohtml binary if it's not in your system's PATH
// This is a common point of failure on Windows and other systems
// Config::set('pdftohtml.bin', 'C:\path\to\your\poppler\utils\pdftohtml.exe');

try {
    // Instantiate the Pdf class with the path to your PDF file
    $pdf = new Pdf('sample.pdf');

    // Check if the PDF has any pages before trying to convert it
    if ($pdf->getNumberOfPages() > 0) {
        // Convert the entire PDF to a single HTML string
        $html = $pdf->html();

        // Output the HTML (or save it to a file)
        echo $html."test123123";
    } else {
        // Handle the case where the PDF is empty
        echo "Error: The PDF document is empty or unreadable.";
    }
} catch (Exception $e) {
    // Catch any exceptions thrown by the library
    echo "An error occurred: " . $e->getMessage();
}

?>