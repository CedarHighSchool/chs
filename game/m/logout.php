<?php include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
		<h1>Logged Out</h1>
	</div>

	<div data-role="content">	
		<?php
    unset($_SESSION['game_username']);
    ?>
    <script>window.location.href = "about.php";</script>
		You are logged out of the Hunt. Click <a href="index.php" data-external="true">here</a> to go to the home page if you are not redirected.
	</div>
	
</div>

</body>
</html>