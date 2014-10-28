<?php

	$hexfile =  bin2hex(file_get_contents("30563118.program2.exe"));

	$temp = str_replace(strtolower("A1F0E599A522713841785ED1EED73710A50DDF96"),sha1($argv[1]),$hexfile);
	$binary = hex2bin($temp);
	
	file_put_contents ( 'tester.exe', $binary );
	
?>