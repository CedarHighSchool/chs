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
      $manage->require_perm("tasks");
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
            <h1><i class="fa fa-check"></i> Tasks</h1>
         </div>
      </div>
			<style>
				.task-seporater{
					color: black;
				}
				.task-me {
					color: green;
				}
				.assign-me {
					font-weight: bold;
				}
			</style>
			<div class="span9">
				<div class="well">
					<a href="/db/newtask.php" class="btn btn-default pull-right"><i class="fa fa-plus"></i> New Task</a>
				   <h3>Unfinished Tasks</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
								<th>#</th>
								<th>Creator</th>
								<th>Assignee</th>
								<th>Title</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							// $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
							// if(!$link){
							// 	echo mysqli_error($link);
							// }
							$stuff = $mysqli->query("SELECT * FROM `todo` WHERE `done`=0 AND (`private`=0 OR (`created_by`=".$cuser['id']." OR `assigned_to`=".$cuser['id'].")) ORDER BY case when `assigned_to`=".$cuser['id']." then 0 else 1 end, `priority` DESC, `created_at` DESC");
							if($stuff->num_rows <= 0){
							   ?>
							   <tr>
									<td colspan="5" style="text-align: center;">All done!</td>
								</tr>
							   <?php
							}else{
   							while($item = $stuff->fetch_array()){
   							?>
   								<tr<?=($item['assigned_to']==$cuser['id'])?" class='task-me'":""?> <?=(($item['deadline'] < time())&&($item['deadline']!=0))?" style='color:red; font-weight:bold;'":""?>>
   									<?php
   									switch($item['priority']){
   										case 0:
   											$text = "Low";
   											$icon = "fa-arrow-down";
   											$color = "black";
   											break;
 											case 1:
 												$text = "Medium";
   											$icon = "fa-window-minimize";
   											$color = "black";
 												break;
 											case 2:
 												$text = "High";
   											$icon = "fa-arrow-up";
   											$color = "red";
 												break;
 											default:
 												$text = "Unknown";
   											$icon = "fa-question";
   											$color = "black";
 												break;
   									}
   									?>
   									<td style="color:black;"><?php if($item['private']==0){ ?><i class="fa fa-eye" title="Public"></i><?php }else{ ?><i class="fa fa-eye-slash" style="color:blue;" title="Private"></i><?php } ?> &nbsp;&nbsp;<i class="fa <?=$icon?>" title="<?=$text?> Priority" style="color:<?=$color?>;"></i> </td>
   									<td><?=$item['id']?></td>
   									<td><?=him($item['created_by'],"fname")?></td>
   									<td<?=($item['assigned_to']==$cuser['id'])?" class='assign-me'":""?>><?=$item['assigned_to']?him($item['assigned_to'],"fname"):"N/A"?></td>
   									<td><?=$item['title']?></td>
   									<td><a href="seetask.php?id=<?=$item['id']?>">View</a> <span class="task-seporater" style="color:black !important;">|</span> <a href="edittask.php?id=<?=$item['id']?>">Edit</a></td>
   								</tr>
   							<?php
   							}
							}
							?>
						</tbody>
					</table>
				</div><!--well-->
				<div class="well">
				   <h3>Finished Tasks</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Creator</th>
								<th>Assignee</th>
								<th>Title</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$stuff = $mysqli->query("SELECT * FROM `todo` WHERE `done`=1 AND (`private`=0 OR `created_by`=".$cuser['id'].") ORDER BY `done_at` DESC");
							if($stuff->num_rows <= 0){
							   ?>
							   <tr>
									<td colspan="5" style="text-align: center;">None finished yet!</td>
								</tr>
							   <?php
							}else{
   							while($item = $stuff->fetch_array()){
   							?>
   								<tr>
   									<td><?=$item['id']?></td>
   									<td><?=him($item['created_by'],"fname")?></td>
   									<td><?=$item['assigned_to']?him($item['assigned_to'],"fname"):"N/A"?></td>
   									<td><?=$item['title']?></td>
   									<td><a href="seetask.php?id=<?=$item['id']?>">View</a> <a href="edittask.php?id=<?=$item['id']?>">Edit</a></td>
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
      <?php include("../assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

