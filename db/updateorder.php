<?php
// $pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
// $conn = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");

include("../assets/inc/include.php");
$manage = new Manager();
$conn = $manage->database();

$manage->require_perm("edit");

$id_ary = explode(",",$_POST["row_order"]);
//print_r($_POST["row_order"]);
$id_ary = $_POST["row_order"];
for($i=0;$i<count($id_ary);$i++) {
	$conn->query("UPDATE homepage SET `order`=" . $i . " WHERE `id`=". $id_ary[$i]);
	//echo $id_ary[$i]." = ".$i."<br>";
}
if($conn->error){
	echo $conn->error;
}else{
	$manage->activity("Updated homepage order");
	echo "Saved!";
}