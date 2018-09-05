<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="clubs";
?>

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

      <?php mustLogIn(); ?>

      <div class="span9">
         <div class="well">
            <h1>Reports</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
    				<?php
    				$stuff = $mysqli->query("SELECT * FROM `reports` WHERE `id`=".$_GET['id']);
    				$item = $stuff->fetch_array();
    				?>
    					<h4>Report #<?=$item['id']?></h4>
    					<b>Type</b>: <?php
    					switch($item['type']){
    					   case 0:
    					      echo "Problem";
    					      break;
    					   case 1:
    					      echo "Suggestion";
    					      break;
    					   case 2:
    					      echo "Request";
    					      break;
 					      default:
 					         echo "Unknown";
    					      break;
    					}
    					?><br>
    					<b>From</b>: <?=$item['name']?> (<a href="mailto:<?=$item['email']?>"><?=$item['email']?></a>)<br>
    					<b>At</b>: <?=date("l, jS \of F Y @ h:i:s A",$item['when'])?><hr>
    					<b>Description:</b><br>
    					<p><?=nl2br($item['desc'])?></p><br>
    					<p><?php
    					if($item['done']){
    					   echo "This is Done <a href='/db/setopen.php?id=".$item['id']."&status=0'>Set Not Done</a>";
    					}else{
    					   echo "This is Not Done! <a href='/db/setopen.php?id=".$item['id']."&status=1'>Set Done</a>";
    					}
    					?><hr>
                  <a href="newtask.php?reff=<?=$_GET['id']?>">Add Task for This</a>
    					</p>
    				<?php

    				?>
				</div><!--well-->
				<?php
            $ref = $mysqli->query("SELECT * FROM `todo` WHERE `report_ref`=".$_GET['id']);
            if($ref->num_rows>0){
   				?>
               <div class="well">
                  <h3>References</h3>
                  <table>
                     <thead>
                        <tr><th>ID</th><th>Task</th></tr>
                        <?php
                        while($tsk = $ref->fetch_array()) {
                        ?>
                        <tr><td><?=$tsk['id']?></td><td><a href="seetask.php?id=<?=$tsk['id']?>"><?=$tsk['title']?></a></td></tr>
                        <?php
                        }
                        ?>
                     </thead>
                  </table>
               </div>
   				<?php
            }
				?>
			</div><!--span3-->
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style>
      <div class="span3">
         <div class="well">
             <a href="reports.php">See All Reports</a>
            <table class="table table-hover">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>Name</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php
    				$link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
    				if(!$link){
    					echo mysqli_error($link);
    				}
    				$stuff = mysqli_query($link, "SELECT * FROM `reports` WHERE `done`=0 ORDER BY `when` ASC");
    				if($stuff->num_rows <= 0){
    				   ?>
    				   <tr>
    						<td colspan="3" style="text-align: center;">All done!</td>
    					</tr>
    				   <?php
    				}else{
        				while($item = mysqli_fetch_array($stuff)){
        				?>
        					<tr>
        						<td><?=$item['id']?></td>
        						<td><?=$item['name']?></td>
        						<td><a href="seereport.php?id=<?=$item['id']?>">View</a></td>
        					</tr>
        				<?php
        				}
    				}
    				?>
    			</tbody>
    		</table>
         </div>
      </div>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

