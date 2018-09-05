<?php include("head.php"); ?>
<h2>Log in to use <?=$c['name']?></h2><br>
<form action="" method="post">
	<?php
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$email = $username."@ironmail.org";
		
		$res = $mysqli->query("SELECT * FROM `faculty` WHERE `email`='$email'");
		if($res->num_rows > 0){
			$user = $res->fetch_array();
			if($password == $user['password']) {
				$_SESSION[$pre.'username'] = $username;
				echo "<script>window.location.href='".$c['url']."';</script>Please enable JavaScript.";
			}else{
				?>
				<div class="alert alert-danger" role="alert">Incorrect password!</div>
				<?php
			}
		}else{
			?>
			<div class="alert alert-danger" role="alert">User does not exist.</div>
			<?php
		}
		
	}
	?>
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Log In</button>
    </div>
  </div>
</form>
<?php include("foot.php"); ?>