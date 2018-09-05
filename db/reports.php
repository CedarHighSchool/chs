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
      $manage->require_perm("bugger");
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
            <h1><i class="fa fa-info-circle"></i> Reports</h1>
         </div>
      </div>

			<div class="span9">
				<div class="well">
				   <h3>Unfinished Reports</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$stuff = $mysqli->query("SELECT * FROM `reports` WHERE `done`=0 ORDER BY `when` DESC");
							if($stuff->num_rows <= 0){
							   ?>
							   <tr>
									<td colspan="4" style="text-align: center;">All done!</td>
								</tr>
							   <?php
							}else{
   							while($item = $stuff->fetch_array()){
   							?>
   								<tr>
   									<td><?=$item['id']?></td>
   									<td><?=$item['name']?></td>
   									<td><?=$item['email']?></td>
   									<td><a href="seereport.php?id=<?=$item['id']?>">View</a></td>
   								</tr>
   							<?php
   							}
							}
							?>
						</tbody>
					</table>
				</div><!--well-->
				<div class="well">
				   <h3>Finished Reports</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$stuff = $mysqli->query("SELECT * FROM `reports` WHERE `done`=1 ORDER BY `when` DESC");
							if($stuff->num_rows <= 0){
							   ?>
							   <tr>
									<td colspan="4" style="text-align: center;">None finished yet!</td>
								</tr>
							   <?php
							}else{
   							while($item = $stuff->fetch_array()){
   							?>
   								<tr>
   									<td><?=$item['id']?></td>
   									<td><?=$item['name']?></td>
   									<td><?=$item['email']?></td>
   									<td><a href="seereport.php?id=<?=$item['id']?>">View</a></td>
   								</tr>
   							<?php
   							}
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

