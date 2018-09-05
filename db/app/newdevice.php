<?php
$data = file_get_contents('php://input');
// $data = json_decode($data);

include("../../assets/inc/include.php");
$manage = new Manager();
$mysqli = $manage->database();

$h = $mysqli->prepare("INSERT INTO `log` (`data`) VALUES (?)");
$h->bind_param("s",$data);
$h->execute();
?>