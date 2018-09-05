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
            <h1>Tasks</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">

    				<?php
						if(isset($_POST['assigned_to'])){
							$assigned_to = $_POST['assigned_to'];

							// $userid = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 							// $userid = mysqli_fetch_array($userid)['id'];

							$res = $mysqli->query("UPDATE `todo` SET `assigned_to`=$assigned_to WHERE `id`=".$_GET['id']);

							if(!$mysqli->error){
								echo "<span style=\"color:green;\">Task saved!</span>";
							}else{
								echo $mysqli->error;
							}
						}
						$res = $mysqli->query("SELECT * FROM `todo` WHERE `id`=".$_GET['id']);
						if($mysqli->error){
							echo "Error: ".$mysqli->error;
						}
						$task = $res->fetch_array();
					?>
    				<?php
    				$stuff = $mysqli->query("SELECT * FROM `todo` WHERE `id`=".$_GET['id']);
    				$item = $stuff->fetch_array();
    				switch($item['priority']) {
    				   case 0:
    				      $pri = "Low";
    				      break;
 				      case 1:
 				         $pri = "Medium";
 				         break;
 			         case 2:
 			            $pri = "High";
 			            break;
 		            default:
 		               $pri = "Unknown";
 		               break;
    				}
    				?>
    				<a href="/db/edittask.php?id=<?=$item['id']?>" class="btn btn-default pull-right"><i class="fa fa-pencil"></i> Edit</a>
    					<h4><?=$item['title']?></h4>
    					<b>Owner</b>: <?=him($item['created_by'],"fullname")?><br>
    					<b>Created at</b>: <?=date("l, jS \of F Y @ h:i:s A",$item['created_at'])?><br>
    					<?php if($item['deadline'] != 0 && $item['done']==0) { ?>
    					<b>Deadline</b>: <?=date("l, jS \of F Y",$item['deadline'])?><br>
    					<?php if($item['deadline']<time()) { ?>
    					<span style="color:red; font-weight: bold;">DEADLINE PASSED</span><br>
    					<?php } ?>
    					<?php } ?>
    					<?php if($item['assigned_to'] != 0){ ?>
    					<b>Assigned to</b>: <?=him($item['assigned_to'], "fullname")?><br>
    					<b>Priority</b>: <?=$pri?>
    					<?php
    					if($item['private'] == 1){
    					   echo "<br><b style='color:blue;'>This task is private</b>";
    					}
    					?><hr>
    					<?php } ?>
    					<b>Description:</b><br>
    					<p><?=nl2br($item['description'])?></p>
    					<?php if($item['report_ref']!=0){ ?>
                  <a href="seereport.php?id=<?=$item['report_ref']?>">Report Reference</a>
    					<?php } ?><hr>
    					<p><?php
    					if($item['done']){
    					  echo "This is Done <a href='/db/setdone.php?id=".$item['id']."&status=0'>Set Not Done</a><br>Done on ".date("l, jS \of F Y @ h:i:s A",$item['done_at'])."<br>Completed by ".him($item['done_by'],"fullname");
    					}else{
    					   echo "This is Not Done! <a href='/db/setdone.php?id=".$item['id']."&status=1'>Set Done</a>";
    					}
    					?></p>
    					<script>
    					$(function() {
    					   $("#assigned_to").on("change", function() {
    					      $("#assignee").submit();
    					   });
    					   $("#assignee").on("submit", function() {
    					      $.get( "ajax/assigntask.php", { id: <?=$_GET['id']?>, user: $("#assigned_to").val() } )
                        .done(function( data ) {
                           if(data == "") {
                              $("#infos").text("Saved!");
                              $("#infos").show();
                              setTimeout(function() {
                                 $("#infos").hide();
                              }, 1000);
                           }else{
                              alert(data);
                           }
                        });
    					      return false;
    					   });
    					});
    					</script>
					<form class="" action="" method="post" id="assignee">
					   <input name="form" value="assign" style="display: none;">
					   <b id="infos" style="display:none;"></b><br>
				      <select name="assigned_to" id="assigned_to">
				      	<option <?=($task['assigned_to']==0)?"selected":""?> value="0">Nobody</option>
				      	<?php
				      	$res = $mysqli->query("SELECT * FROM `users` WHERE `tasks`=1");
				      	while($usr = $res->fetch_array()) {
				      	?>
				      		<option <?=($task['assigned_to']==$usr['id'])?"selected":""?> value="<?=$usr['id']?>"><?=$usr['fname']?> <?=$usr['lname']?></option>
				      	<?php
				      	}
				      	?>
				      </select>
					  <button type="submit" class="btn" style="display:none;"><i class="fa fa-floppy-o"></i></button>
					</form>
				</div><!--well-->
				<div class="well">
				   <form class="" action="" method="post">
					  <input name="content">
					  <button type="submit" class="btn btn-default" style="margin-top:-10px;"><i class="fa fa-plus"></i> Add Work</button>
					</form>
   				<?php
   				if(isset($_POST['content'])) {
   				   $task = $_GET['id'];
   				   $content = $_POST['content'];
   				   $who = $cuser['id'];
   				   $when = time();
   				   if(!empty($content)) {
   				      $res = $mysqli->query("INSERT INTO `worklog` (`task`, `content`, `when`, `who`) VALUES ($task, '$content', $when, $who)");
   				   }else{
   				      echo "<b style='color:red;'>Please describe your work!</b><br>";
   				   }
   				}
   	      	$res = $mysqli->query("SELECT * FROM `worklog` WHERE `task`=".$_GET['id']." ORDER BY `when` DESC");
   	      	if($res->num_rows > 0) {
      	      	while($usr = $res->fetch_array()) {
      	      	?>
      	      		<b><?=him($usr['who'],"username")?> (<?=date("l, jS \of F Y @ h:i:s A",$usr['when'])?>)</b><br>&nbsp;&nbsp;<?=$usr['content']?><br>
      	      	<?php
      	      	}
   	      	}
   	      	?>
	      	</div>
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
             <a href="/db/newtask.php">New Task</a> | <?php include("minitasks.php"); ?>
         </div>
      </div>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

