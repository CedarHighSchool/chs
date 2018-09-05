<?
$mysqli = new mysqli("sql201.sunware.cu.cc","snwr_18847717","onrjfy1112","snwr_18847717_library");
if($mysqli->error){
  die($mysqli->error);
}
$copy = $mysqli->query("SELECT * FROM `copies` WHERE `number`=".$_POST['number']);
if($copy->num_rows > 0){
	$copy = $copy->fetch_array();
	$book = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$copy['book']);
	if($book->num_rows > 0) {
		$book = $book->fetch_array();
		echo json_encode($book);
	}else{
		echo "false";
	}
}else{
	echo "false";
}
?>