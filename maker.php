<?php
$path = "http://localhost/dashboard/test";

$filename = 'mail.txt';
$contents = file($filename);
foreach($contents as $line) {
	var_dump($line);

$input = array("example@gmail.com", "example@gmail.com","example@gmail.com","example@gmail.com","example@gmail.com");

$rand_keys = array_rand($input, 2);
$randomemail= $input[$rand_keys[1]];
echo $randomemail;

	$batfile = fopen("start.bat", "a+") or die("can not open start.bat!");
	$batch_text = "curl.exe ".$path."/index.php?name=";
	$batch_text2 = trim($line);
	$batch_text3= "^&from=".$randomemail;
	$batch_text4 = "\n waitfor /T 3 pause \n";
	$allbatch = $batch_text.$batch_text2.$batch_text3.$batch_text4;
fwrite($batfile, $allbatch);
}
fclose($batfile);


?>
</center>