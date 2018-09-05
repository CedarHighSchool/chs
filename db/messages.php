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
      $manage->require_perm("messages");
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
            <h1><i class="fa fa-envelope"></i> Messages</h1>
         </div>
      </div>
			<style>
				.task-me {
					color: green;
				}
				.assign-me {
					font-weight: bold;
				}
				.linkm {
					cursor: pointer;
				}
			</style>
			<script>
				$(function() {
					$(".linkm").click(function() {
						window.location.href="seemessage.php?id="+$(this).data("id");
					});
				});
			</script>
			<div class="span9">
				<div class="well">
					<a href="/db/compose.php" class="btn btn-success pull-right"><i class="fa fa-pencil"></i> Compose</a>
				   <h3>Received Messages</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>From</th>
								<th>Subject</th>
								<th>When</th>
							</tr>
						</thead>
						<tbody>
							<?php
							// $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
							// if(!$link){
							// 	echo mysqli_error($link);
							// }
							$stuff = $mysqli->query("SELECT * FROM `msg` WHERE `to`=".$cuser['id']." ORDER BY `read` ASC, `when` DESC");
							if($stuff->num_rows <= 0){
							   ?>
							   <tr>
									<td colspan="5" style="text-align: center;">No messages</td>
								</tr>
							   <?php
							}else{
   							while($item = $stuff->fetch_array()){
   							?>
   								<tr<?=$item['read']?"":" style='font-weight:bold;'"?> class="linkm" data-id="<?=$item['id']?>">
   									<td><?=him($item['from'],"fullname")?></td>
   									<td><?=$item['subject']?></td>
   									<td><?=date("l, jS \of F Y @ h:i A",$item['when'])?></td>
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
      </style></div>
      <?php include("../assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

