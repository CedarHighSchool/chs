<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="activities"; ?>

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
      .infoer::before {
      	font-family: FontAwesome;
      	content: "\f05a";
      	margin-left: 5px;
      	cursor: help;
      	font-weight: normal;
      }
      </style>

      <!-- Let the container begin! -->

      <div class="container">

      <div class="row">

      	<?php include("../assets/inc/navlist.php") ?>
			<?php mustLogIn(); ?>
	      <div class="span9">
	         <div class="well">
	            <h1><i class="fa fa-list"></i> Activity</h1>
	         </div>
	      </div>
			<div class="span9">
				<div class="well">
				   <small>Showing last 100</small>
				   <table class="table">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>When</th>
                     <th>User</th>
                     <th>Info</th>
                     <th>Type</th>
                     <th>Actions</th>
                   </tr>
                 </thead>
                 <tbody>
   					<?php
   					$acts = $mysqli->query("SELECT * FROM `activities` ORDER BY `when` DESC LIMIT 100");
   					while($act = $acts->fetch_array()) {
   					   switch($act['type']) {
   					      case "task":
   					         $action = "<a href='/db/seetask.php?id=".$act['which']."'>View Task</a>";
   					         break;
   					      case "note":
   					         $action = "<a href='/db/seenote.php?id=".$act['which']."'>View Note</a>";
   					         break;
   					      case "homepage":
   					         $action = "<a href='/db/index.php'>Homepage Editor</a>";
   					         break;
   					      case "message":
   					         $action = "<a href='/db/seemessage.php?id=".$act['which']."'>View Message</a>";
   					         break;
   					      case "user":
   					         if($manage->check_perm("admin")) {
   					            $action = "<a href='/db/edituser.php?id=".$act['which']."'>Edit User</a>";
   					         }else{
   					            $action = "";
   					         }
   					         break;
					         default:
					            $action = "";
					            break;
   					   }
   					   if($act['delete'] == 1){
   					      $action = "Deleted";
   					   }
   					?>
					   <tr>
                     <td><?=$act['id']?></td>
                     <td><?=date("D d/m/Y h:i A",$act['when'])?></td>
                     <td><?=him($act['user'],"fullname")?></td>
                     <td><?=$act['content']?></td>
                     <td><?=($act['which']!=-1)?$act['type']:"N/A"?></td>
                     <td><?=$action?></td>
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

