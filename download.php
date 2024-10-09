<?php
$file = 'https://www.heritagelens.net/HeritageLensAlliance.lnk';

// Make sure the file exists
if (file_exists($file)) {
    // Set headers to force download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="HeritageLensAlliance.lnk"');
    header('Content-Length: ' . filesize($file));

    // Send the file content to the browser
    readfile($file);
    exit;
} else {
    echo "File not found.";
}
?>
