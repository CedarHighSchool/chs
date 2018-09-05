<?php
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
if($mysqli->error){
 die($mysqli->error);
}
$id = $_GET['id'];
$res = $mysqli->query("UPDATE `project_votes` SET `score`=`score`+1 WHERE `id`=$id");
header("Location: index.php");