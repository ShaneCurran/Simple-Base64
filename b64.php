<?php
// B64 console toolkit
//
// Allows Base64 encoding and decoding from one command, b64
//
// Usage: b64 SXQgd29ya3Mh
//              -> It works!
//        b64 "It works!"
//              -> SXQgd29ya3Mh
//
// @author Shane Curran

// Disable error reporting
error_reporting(0);

// Check to see if a string is provided
if ($argv[1]) {
	// If there is a string provided, check if it needs to be encoded or decoded
	if (base64_encode(base64_decode($argv[1], true)) === $argv[1]) {
		echo base64_decode($argv[1]);
	} else {
		echo base64_encode($argv[1]);
	}
} else {
	// There was no string provided
	// The characters before and after change the colour of the text to red
	echo "\033[31mPlease provide a string to either encode or decode\033[37m";
}
	
// Output a newline for cleanness
echo "\n";
?>
