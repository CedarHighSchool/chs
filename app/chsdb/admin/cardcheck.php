<?
$mysqli = new mysqli("sql201.sunware.cu.cc","snwr_18847717","onrjfy1112","snwr_18847717_library");
if($mysqli->error){
  die($mysqli->error);
}
$patron = $mysqli->query("SELECT * FROM `patrons` WHERE `number`=".$_POST['number']);
if($patron->num_rows > 0){
	$patron = $patron->fetch_array();
	echo $patron['fname']." ".$patron['lname'];
}else{
	echo "false";
}
?>