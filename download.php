<?php
$file = 'HeritageLensAlliance.lnk';

if (file_exists($file)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="HeritageLensAlliance.lnk"');
    header('Content-Length: ' . filesize($file));

    readfile($file);
    exit;
} else {
    echo "File not found.";
}
?>
