<?php

date_default_timezone_set('Asia/Taipei');

//localhost test
$datetime = date ("Y-m-d H:i:s") ; 
$fp = fopen('output.txt', 'a');
fwrite($fp, $datetime."\n");
fclose($fp);

// Authentication headers for when required
if ($_GET['hub_challenge']) {
	echo $_GET['hub_challenge'];
	exit;
}

// here comes the feed!
$data = file_get_contents("put your feed here");

// if you want to see the headers that have been sent, use this:
 file_put_contents('headers.txt', print_r($_SERVER,true));

// if you just want the data use this:
 file_put_contents('data.txt', $data);

?>