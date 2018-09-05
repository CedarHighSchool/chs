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

			<div class="span6">
				<div class="well">
					<h3>Add User</h3>
					<?php
						if(isset($_POST['username'])){
							$username = $_POST['username'];
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];

							$res = $mysqli->prepare("INSERT INTO `users` (`username`, `fname`, `lname`, `email`, `passreset`) values (?, ?, ?, ?, 1)");
							$res->bind_param("ssss",$username, $fname, $lname, $email);
							$res->execute();

							if(!$mysqli->error){
								$manage->activity("Added user", "user", $mysqli->insert_id);
								echo "<div class='alert alert-success'>User added!</div>";
							}else{
								echo "<div class='alert alert-danger'>".$mysqli->error."</div>";
							}
						}
					?>
					<form class="form-horizontal" action="" method="post">
					  <div class="control-group">
					    <label class="control-label" for="username">Username</label>
					    <div class="controls">
					      <input type="text" id="username" placeholder="Username" name="username">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="fname">First Name</label>
					    <div class="controls">
					      <input type="text" id="fname" placeholder="First Name" name="fname">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="lname">Last Name</label>
					    <div class="controls">
					      <input type="text" id="lname" placeholder="Last Name" name="lname">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="email">Email</label>
					    <div class="controls">
					      <input type="email" id="email" placeholder="Email" name="email">
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <button type="submit" class="btn"><i class="fa fa-floppy-o"></i> Save</button>
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

