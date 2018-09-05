<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="notes"; ini_set("output_buffering","true"); ?>

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
			<?php mustLogIn(); ?>
      <div class="span9">
         <div class="well">
            <h1><i class="fa fa-users"></i> Users</h1>
         </div>
      </div>

			<div class="span9">
				<div class="well">
					<a href="/db/adduser.php" class="btn btn-default pull-right"><i class="fa fa-user-plus"></i> Add User</a>
					<h3>Active Users</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Real Name</th>
								<th>Actions</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$users = $mysqli->query("SELECT * FROM `users` WHERE `enabled`=1");
							while($user = $users->fetch_array()) {
							?>
							<tr>
								<td><?=$user['id']?></td>
								<td><?=$user['username']?></td>
								<td><?=$user['fname']?> <?=$user['lname']?></td>
								<td><a href="edituser.php?id=<?=$user['id']?>">Edit</a></td>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div><!--well-->
				
				<div class="well">
					<h3>Inactive Users</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Real Name</th>
								<th>Actions</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$users = $mysqli->query("SELECT * FROM `users` WHERE `enabled`=0");
							while($user = $users->fetch_array()) {
							?>
							<tr>
								<td><?=$user['id']?></td>
								<td><?=$user['username']?></td>
								<td><?=$user['fname']?> <?=$user['lname']?></td>
								<td><a href="edituser.php?id=<?=$user['id']?>">Edit</a></td>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div><!--well-->

			</div><!--span3-->
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

