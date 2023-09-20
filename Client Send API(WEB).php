<?php
$socket = @fsockopen('127.0.0.1', 10090, $e, $e, 1);
If($socket === False) {
	die('Bot offline.');
} Else {
	fwrite($socket, "<cmd t=\"!say HELLO\" key=\"c475bd693d176e81\" />"); // Command
	#fwrite($socket, "<say t=\"Hello\" key=\"c475bd693d176e81\" />"); // Say a message
	#fwrite($socket, "<die key=\"c475bd693d176e81\" />"); // Turn bot off
	$read = fread($socket, 4096);
	fclose($socket);
	die('Response: '.$read);
}
?>