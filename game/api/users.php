<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");

if($mysqli->error) {
	die($mysqli->error);
}

$users = $mysqli->query("select * from game_users where `hidden`=0 order by `score` desc");


$list = [];

while($user = $users->fetch_array()){
	$user2 = ['title' => $user['username'], 'subtitle' => $user['score'], 'email' => $user['email'], 'score' => $user['score'], 'avatar' => '', 'banned' => $user['banned'], 'name' => $user['fname']." ".$user['lname']];
	array_push($list, $user2);
}

$count = sizeof($list);

$data = [
	'users' => $list,
	'count' => "".$count.""
	];

echo json_encode($data);
?>