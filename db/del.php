<?php
include("../assets/inc/include.php");
$manage = new Manager();
$conn = $manage->database();

$manage->require_perm("delete");
$manage->require_perm("edit");

$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
session_start();
if(isset($_SESSION['username'])){
		if($_POST['yes'] == "on"){
			// Check connection
			if ($conn->connect_error) {
				die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $conn->connect_error . "</div>");
			}

			if(isset($_POST['order'])) {
				// prepare and bind
				$order = $_POST['order'];

				$stmt = $conn->prepare("DELETE FROM `homepage` WHERE `order`=?");
				$stmt->bind_param("i", $order);
				$stmt->execute();
				$stmt->close();
				$manage->activity("Deleted homepage item", "homepage", $order, true);
				header("location: /db/");
			}else{
				die("<div class=\"alert alert-danger\">FATAL ERROR</div>");
			}
		}else{
			?>
			<form action="" method="post">
				<input hidden class="hidden" style="display:none;" name="order" value="<?=$_POST['order']?>">
				<input type="checkbox" name="yes" id="yes"><label for="yes">Confirm DELETE</label><br>
				<input type="submit" value="Confirm" class="btn btn-danger">
			</form>
			<?php
		}
}else{
	header("location: /db/login.php");
}
?>