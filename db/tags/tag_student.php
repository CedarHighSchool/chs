<?php include("head.php"); ?>
<?php
if(!isset($_SESSION[$pre.'username'])) {
  die("<script>window.location.href='".$c['url']."login.php';</script>Please enable JavaScript.");
}
$res = $mysqli->prepare("INSERT INTO `tags` (`student`,`teacher`,`day`) VALUES (?, ?, ?)");
$res->bind_param("iis", $_GET['id'], $u['id'], $_GET['day']);
$res->execute();
if(!$res->error){
	echo "<script>window.location.href='list.php';</script>Please enable JavaScript!";
}else{
	echo "Error: ".$res->error;
}
?>
<?php include("foot.php"); ?>
