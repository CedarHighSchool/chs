<?php include("top.php"); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Log In</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded"><br>
	<?php
	if(isset($_POST['username'])){
		$login = $manage->login($_POST);
		if($login->has_error){
			echo "<div class='alert alert-danger'>".$login->html_error()."</div>";
			if($login->error == "Password is incorrect."){
				$passin = true;
			}
		}else{
			header('Location: /db/app/index.php');
			echo "Logging you in...<script>window.location.href='/db/app/index.php';</script>";
		}
		echo "<br>";
	}
	?>
	<form class="input-group" action="login.php" method="post" id="loginn">
	  <div class="input-row">
	    <label>Username</label>
	    <input type="text" id="username" name="username">
	  </div><br>
	  <div class="input-row">
	    <label>Password</label>
	    <input type="password" id="password" name="password">
	  </div><br>
	  <button class="btn btn-positive btn-block" type="submit">Sign In</button>
	</form>
</div>
<?php include("bottom.php"); ?>