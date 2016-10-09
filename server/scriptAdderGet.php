<?php
	$documentToSave = $_GET['urlIn'];
	$docQue = fopen("/FILEDIR/doc.Que", "a+") or die ("no file");
	fwrite($docQue, "svtplay-dl --force -o -S /MOUNTED_NAS_DIR". $documentToSave . ";\n");
	fclose($docQue);
?>