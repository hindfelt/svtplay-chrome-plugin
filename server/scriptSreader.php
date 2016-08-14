<? 
 
	$file=fopen("doc.Oue","r");
	$read=fread($file,filesize("oc.Oue"));
	fclose($file); 
	echo $read;
?>