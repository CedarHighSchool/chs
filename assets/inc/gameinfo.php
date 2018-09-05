<?php
$GAME_UP = false;
$TYPING_UP = false;

function tellme($ttl, $msgr) {
	$ttl = urlencode($ttl);
	$msgr = urlencode($msgr);
	file_get_contents("https://hook.integromat.com/9b3v875pabxjp183t7noqeg7erv3o3qx?title=$ttl&message=$msgr");
}
?>