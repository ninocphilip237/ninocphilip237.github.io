<?php
$filename = "./assets/img/resume/ninocphilip_updated.pdf";
header("Content-type: application/pdf");
header("Content-Length: " . filesize($filename));
readfile($filename);
$file = 'filename.pdf';
$filename = "./assets/img/resume/ninocphilip_updated.pdf";
header('Content-disposition: attachment; filename="filename.pdf"');
echo $pdf;
?>
