<?php

	$out =  bin2hex(file_get_contents("30563118.program2.exe"));
	//echo $out."\n";
	//echo strpos ( $out , '7c' );
	
	//echo strpos( $out, strtolower( 'A1F0E599A522713841785ED1EED73710A50DDF96' ) );
	$new = str_replace(strtolower("A1F0E599A522713841785ED1EED73710A50DDF96"),sha1($argv[1]),$out);
	$new_bin = hex2bin($new);
	
	file_put_contents ( 'tester.exe', $new_bin );
	
?>