<?php

//starting timer
$time_start = microtime(true);

$temp = 0;
$hashval = 'bab6dff2c39504c0ab1a007b6c073d4896b18beb';
$salt = 'Rm';

//for loop to iterate through all possible values
for($i = 0; $i<=9999; $i++){
	
	// line below insures that values are have 0 appended to them. For example
	// 0009 instead of 9
	$val = str_pad($i, 4, "0", STR_PAD_LEFT);

	// takes sha1 hash of value with using salt value
	$hash = hash (sha1, $salt.$val);

	// stores value once match found
	if($hash == $hashval){
		global $temp;
		$temp = $val;
		$temphash = $hash;
		break;
	}

	//echo's all results
	echo "$val" , ": $hash\n";
}

//displays password match and hash value once found.
if($temp != 0){
	echo "\n\n\n******************** MATCH FOUND ***********************\n\n";
	echo "\nPassword match found: " , "$temp" , " for hash ", "$temphash" , "\n\n\n";
}

//ending timer
$time_end = microtime(true);
$time = $time_end - $time_start;

//displaying time required to find password
echo "Found password in $time seconds\n";
?>