<?php
include_once("../../assets/inc/include.php");
$manage = new Manager();

$user = array();

switch($_GET['page']) {
	case "logout":
		$manage->logout();
		header("location: ?page=main");
		break;
	case "login":
		if(isset($_POST['username'])){
			$login = $manage->login($_POST);
			
			if($login->has_error){
				echo $login->html_error();
			}else{
				echo "Logged in<br>";
			}
		}
		?>
		<form action="" method="post">
			<input type="text" name="username"><br>
			<input type="password" name="password"><br>
			<input type="submit" value="Log In">
		</form>
		<?php
		break;
	case "main":
		
		break;
	default:
		header("location: ?page=main");
		break;
}

if($manage->logged_in()){
	echo $manage->get_user()['username'];
	echo "<br><a href='?page=logout'>Log Out</a>";
}else{
	echo "Not Logged In";
	echo "<br><a href='?page=login'>Log In</a>";
}

// $manage->logout();
?>