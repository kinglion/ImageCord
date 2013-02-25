<?php
$_POST['Filename'] = base64_decode($_POST['Filename']);
$filedata = $_POST['Filename'];
$fileName = time().'.jpeg';
$saveFile = dirname(__FILE__).'/'.$fileName;	
$handle = fopen($saveFile, 'w');
if($handle){
	fwrite($handle, $filedata );
	fclose($handle);
}
?>
