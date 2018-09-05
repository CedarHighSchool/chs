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
      $manage->require_perm("notes");
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
            <h1><i class="fa fa-sticky-note"></i> Notes</h1>
         </div>
      </div>

			<div class="span9">
				<div class="well">
					<a href="/db/newnote.php" class="btn btn-default pull-right"><i class="fa fa-plus"></i> New Note</a>
					<h3>All Notes</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>Title</th>
								<th>Actions</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$stuff = $mysqli->query("SELECT * FROM `notes` ORDER BY `id` DESC");
							if($stuff->num_rows <= 0){
							   ?>
							   <tr>
									<td colspan="4" style="text-align: center;">No notes.</td>
								</tr>
							   <?php
							}else{
   							while($item = $stuff->fetch_array()){
   								$userone = him($item['user'],"username");

   								$userid = $cuser['id'];
   								if($item['private'] == 1 && $userone!==$_SESSION['username']){
   									continue;
   								}
	   							?>
	   								<tr>
	   									<td><?=$item['id']?></td>
	   									<td><?=$userone?></td>
	   									<td><?=$item['title']?></td>
	   									<td><a href="seenote.php?id=<?=$item['id']?>">View</a><?php if($item['user'] == $userid){ ?> <a href="editnote.php?id=<?=$item['id']?>">Edit</a><?php } ?></td>
	   									<td><?=$item['private']?'<i class="fa fa-eye-slash" title="Private"></i>':'<i class="fa fa-eye" title="Public"></i>'?></td>
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

