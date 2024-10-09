<?php
$fileUrl = 'https://www.heritagelens.net/HeritageLensAlliance.lnk';

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="HeritageLensAlliance.lnk"');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $fileUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);

echo $data;
?>
