<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="clubs" ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <title>Cedar High School</title>

      <?php include("../assets/inc/headtag.php");
      $manage->require_perm("admin");
       ?>
      <style>
         .imglabel {
         font-size: 12px;
         }

         @media (min-width: 768px) and (max-width: 979px) {
         .imglabel {
         font-size: 40px;
         }
         }

      </style>

   </head>

   <body>

      <?php include("../assets/inc/navbar.php") ?>


      <style type="text/css">
      a.thumbnail { height: 205px; }
      </style>

      <!-- Let the container begin! -->

      <div class="container">

      <div class="row">



      <?php include("../assets/inc/navlist.php") ?>


      <div class="span9">
         <div class="well">
            <h1>User</h1>
         </div>
      </div>
			<script>
				$(function() {
					$(window).bind('keydown', function(event) {
						if (event.ctrlKey || event.metaKey) {
							switch (String.fromCharCode(event.which).toLowerCase()) {
							case 's':
								event.preventDefault();
								$("#saver").click();
								break;
							}
						}
					});
				})
			</script>

			<div class="span6">
				<div class="well">
					<h3>Edit User</h3>
					<?php
						if(isset($_POST['username'])){
							$username = $_POST['username'];
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
							
							$insert = $_POST['insert']?1:0;
							$edit = $_POST['edit']?1:0;
							$delete = $_POST['delete']?1:0;
							$admin = $_POST['admin']?1:0;
							$coder = $_POST['coder']?1:0;
							$bugger = $_POST['bugger']?1:0;
							$notes = $_POST['notes']?1:0;
							$tasks = $_POST['tasks']?1:0;
							$emails = $_POST['emails']?1:0;
							$banners = $_POST['banners']?1:0;
							$announcer = $_POST['announcer']?1:0;
							$gamedev = $_POST['gamedev']?1:0;
							$messages = $_POST['messages']?1:0;
							$passreset = $_POST['passreset']?1:0;
							$chat = $_POST['chat']?1:0;
							
							$enabled = $_POST['enabled']?1:0;

							$res = $mysqli->query("UPDATE `users` SET `username`='$username', `fname`='$fname', `lname`='$lname', `email`='$email', `passreset`='$passreset', `insert`='$insert', `edit`='$edit', `delete`='$delete', `admin`='$admin', `coder`='$coder', `bugger`='$bugger', `notes`='$notes', `messages`='$messages', `tasks`='$tasks', `emails`='$emails', `banners`='$banners', `announcer`='$announcer', `gamedev`='$gamedev', `enabled`='$enabled', `chat`='$chat', `changed`='1' WHERE `id`=".$_GET['id']);

							if(!$mysqli->error){
								$manage->activity("Updated user", "user", $_GET['id']);
								echo "<div class='alert alert-success'>User saved!</div>";
							}else{
								echo "<div class='alert alert-danger'>".$mysqli->error."</div>";
							}
						}
						$res = $mysqli->query("SELECT * FROM `users` WHERE `id`=".$_GET['id']);
						if(!$res){
							echo "<div class='alert alert-danger'>Error: ".$mysqli->error."</div>";
						}
						$user = $res->fetch_array();
					?>
					<form class="form-horizontal" action="" method="post">
					  <div class="control-group">
					    <label class="control-label" for="username">Username</label>
					    <div class="controls">
					      <input type="text" id="username" placeholder="Username" name="username" value="<?=$user['username']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="fname">First Name</label>
					    <div class="controls">
					      <input type="text" id="fname" placeholder="First Name" name="fname" value="<?=$user['fname']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="lname">Last Name</label>
					    <div class="controls">
					      <input type="text" id="lname" placeholder="Last Name" name="lname" value="<?=$user['lname']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="email">Email</label>
					    <div class="controls">
					      <input type="email" id="email" placeholder="Email" name="email" value="<?=$user['email']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['enabled']?"checked":""?> name="enabled"> <b>ENABLED</b>
					      </label><br>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['passreset']?"checked":""?> name="passreset"> <b>Password Reset</b>
					      </label><br>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['admin']?"checked":""?> name="admin"> <b>Admin</b>
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['insert']?"checked":""?> name="insert"> Insert
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['edit']?"checked":""?> name="edit"> Edit
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['delete']?"checked":""?> name="delete"> Delete
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['coder']?"checked":""?> name="coder"> Coder
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['bugger']?"checked":""?> name="bugger"> Reports
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['notes']?"checked":""?> name="notes"> Notes
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['tasks']?"checked":""?> name="tasks"> Tasks
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['emails']?"checked":""?> name="emails"> Emails
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['banners']?"checked":""?> name="banners"> Banners
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['messages']?"checked":""?> name="messages"> Messages
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['announcer']?"checked":""?> name="announcer"> Announcer
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['chat']?"checked":""?> name="chat"> Live Chat
					      </label>
					      <label class="checkbox">
					        <input type="checkbox" <?=$user['gamedev']?"checked":""?> name="gamedev"> Game
					      </label>
					      <button type="submit" class="btn" id="saver"><i class="fa fa-floppy-o"></i> Save</button>
					    </div>
					  </div>
					</form>
				</div><!--well-->
			</div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("miniusers.php"); ?>
         </div>
      </div>
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

