<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['username'])) {
	header("location: /db/");
}
include("../assets/inc/include.php");
$manage = new Manager();
if(!isset($_SESSION)){
	session_start();
}
?>
	<?php $pwwd = openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==", "AES128", "thecodething", 0, "4659865325647854"); ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Database Editor Login</title>
		<link href="//chs.ironk12.org/assets/css/bootstrap.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 0px;
			}

			input {
				min-height: 30px;
			}
			
			
		</style>
		<link href="//chs.ironk12.org/assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="shortcut icon" href="//chs.ironk12.org/assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="//chs.ironk12.org/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="//chs.ironk12.org/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="//chs.ironk12.org/assets/ico/apple-touch-icon-57-precomposed.png">

		<div class="container" style="margin:0 auto; width: 30%; min-width: 450px;">
			<div class="well">
					<h3>Log In</h3>
					<p>Please log in to access the database.</p>
			</div>
			<div class="well">
					<?php
					
					if(isset($_POST['username'])){
						$login = $manage->login($_POST);
						if($login->has_error){
							echo "<div class='alert alert-danger'>".$login->html_error()."</div>";
							if($login->error == "Password is incorrect."){
								$passin = true;
							}
						}else{
							header('Location: /db/dash.php');
						}
					}
	
					?>
					<form class="form-horizontal" action="/db/login.php" method="post">
						<div class="control-group">
							<label class="control-label" for="inputUsername">Username</label>
							<div class="controls">
								<input type="text" id="inputUsername" <?php if (!$passin) {echo "autofocus";} ?> value="<?=$_POST['username']?>" placeholder="Username" name="username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
								<input type="password" id="inputPassword" <?php if ($passin) {echo "autofocus";} ?> placeholder="Password" name="password">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-success">Sign in</button>
							</div>
						</div>
					</form>
			</div>
		</div>