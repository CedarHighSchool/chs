<?php
if(isset($_SESSION['game_username'])) {
	?>
	<a href="index.php" align="left" class="btn btn-large btn-success btn-account">Home</a><a href="logout.php" align="left" class="btn btn-large btn-warning btn-account">Log Out</a>
	<?php
} else {
	?>
	<a href="register.php" align="left" class="btn btn-large btn-success btn-account">Register</a><a href="login.php" align="left" class="btn btn-large btn-success btn-account">Login</a>
	<?php
}
?>