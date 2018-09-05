<?php
include("../../assets/inc/include.php");
$manage = new Manager();
$mysqli = $manage->database();
$res = $mysqli->query("SELECT `id`,`username` FROM `users`");
$userlist = array();
while($user = $res->fetch_array()) {
	$userlist[] = array('id'=>$user['id'], 'username'=>$user['username']);
}
echo json_encode($userlist);
?>