<?php include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
		<a href="index.php">Home</a>
		<h1>FAQ</h1>
		<?php if(!isset($_SESSION['game_username'])) { ?>
		<a href="login.php" class="ui-btn-right">Log In</a>
		<?php }else{ ?>
		<a href="profile.php" class="ui-btn-right"><?=$_SESSION['game_username']?></a>
		<?php } ?>
	</div>

	<div data-role="content">
		<?php include("../faqlist.php"); ?>
	</div>
	
</div>

</body>
</html>