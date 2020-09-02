<?php
$pasta = '../';

date_default_timezone_set('America/Sao_Paulo');
$data_zip = strftime('%Y-%m-%d-%Hh%M-', strtotime('now'));

$rootPath = realpath($pasta);
$arquivo_zip = $data_zip.'nox-supervisor.zip';

$zip = new ZipArchive;

$zip->open($arquivo_zip, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$zip->addFile($pasta.'2b06d4663e430366d516ee7cc59a01c3.xml', '2b06d4663e430366d516ee7cc59a01c3.xml');
$zip->addFile($pasta.'b59853db2f3ef8f156a72e38c30ba7d2.xml', 'b59853db2f3ef8f156a72e38c30ba7d2.xml');

$zip->close();

//then send the headers to force download the zip file
header("Content-type: application/zip"); 
header("Content-Disposition: attachment; filename=$arquivo_zip"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
readfile("$arquivo_zip");

//delete zip file
unlink($arquivo_zip);
	
exit;
?>