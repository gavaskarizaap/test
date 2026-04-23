<?php
    // Include the Composer autoloader
    require 'vendor/autoload.php';

    // Use the Gufy namespace
    use Gufy\PdfToHtml\Pdf;

    // Instantiate the Pdf class with the path to your PDF file
    $pdf = new Pdf('https://speed.izaap.in/sample.pdf');

    // Convert the entire PDF to a single HTML string
    $html = $pdf->html(1);

    // Output the HTML (or save it to a file)
    echo $html."test1231hihellotestter1";

    // You can also convert a specific page
    // $pageHtml = $pdf->html(3); // Gets HTML for the 3rd page
    ?>
