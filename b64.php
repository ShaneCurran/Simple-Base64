<?php
	if ($argv[1]) {
		if (base64_encode(base64_decode($argv[1], true)) === $argv[1]) {
			echo base64_decode($argv[1]);
		} else {
			echo base64_encode($argv[1]);
		}
	} else {
		echo "\033[31mPlease provide a string to either encode or decode\033[37m";
	}

	echo "\n";

?>
