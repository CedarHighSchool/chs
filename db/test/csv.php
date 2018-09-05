<?php

$file_handle = fopen("file.csv", "r");

$ar = array();

while (!feof($file_handle) ) {

	$th = fgetcsv($file_handle, 99999999);
	$me = array();
	foreach($th as $l) {
		$me[] = $l;
	}
	$ar[] = $me;

}

fclose($file_handle);

?>
<form action="" method="post">
<select name="assign">
<?php
foreach($ar[0] as $h=>$o) {
	if($h >= 5) {
		if($o == "Classwork Current Points") {
			break;
		}
	?>
	<option value="<?=$h?>" <?=($_POST['assign'] == $h)?"selected":""?>><?=$o?></option>
	<?php
	}
}
?>
</select>
<input type="submit"><br>
<?php
if(isset($_POST['assign'])) {
	foreach($ar as $a=>$b) {
		if($a > 1) {
			if($b[$_POST['assign']] == 0 || $b[$_POST['assign']] == "") {
				echo $b[0]."<br>";
			}
		}
	}
}
?>
</form>
<?php
if($_GET['table'] == 1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSV</title>
</head>
<body>
	<table border="1">
		<?php
		foreach($ar as $t) {
			?>
			<tr>
				<?php
				foreach($t as $o) {
				?>
				<td><?=$o?></td>
				<?php
				}
				?>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
<?php
}
?>