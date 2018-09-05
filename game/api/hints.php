<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");

if($mysqli->error) {
	die($mysqli->error);
}

$users = $mysqli->query("select * from game_hints order by id asc");


$list = [];

while($user = $users->fetch_array()){
	$user2 = ['title' => $user['text'], 'subtitle' => $user['level'], 'code' => $user['code']];
	array_push($list, $user2);
}

$count = sizeof($list);

$data = [
	'hints' => $list,
	'count' => "".$count.""
	];

echo json_encode($data);
?>