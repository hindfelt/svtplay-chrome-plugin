<?php
	$documentToSave = $_POST['urlIn'];
	$docQue = fopen("/FILEDIR/doc.Que", "a+") or die ("no file");
	fwrite($docQue, "svtplay-dl -S --force -o /MOUNTED_NAS_DIR ". $documentToSave . ";\n");
	fclose($docQue);
?>