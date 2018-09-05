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
            <h1>Tasks</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
    				<a href="/db/seetask.php?id=<?=$_GET['id']?>" class="btn btn-default pull-right"><i class="fa fa-ban"></i> Cancel</a>
					<h3>Edit Task</h3>
					<?php
						if(isset($_POST['title'])){
							$title = $_POST['title'];
							$desc = $_POST['desc'];
							$assigned_to = $_POST['assigned_to'];
							$pri = $_POST['priority'];
							$private = $_POST['private'];
							if($private){
								$private = 1;
							}else{
								$private = 0;
							}
							if($_POST['hasdeadline']) {
								$deadline = strtotime($_POST['deadline']);
							}else{
								$deadline = 0;
							}

							// $userid = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 							// $userid = mysqli_fetch_array($userid)['id'];

							$res = $mysqli->query("UPDATE `todo` SET `title`='$title', `description`='$desc', `assigned_to`=$assigned_to, `priority`=$pri, `private`=$private, `deadline`=$deadline WHERE `id`=".$_GET['id']);

							if(!$mysqli->error){
								$manage->activity("Updated task information", "task", $_GET['id']);
								echo "Task saved! See it <a href='/db/seetask.php?id=".$_GET['id']."'>here</a>.";
							}else{
								echo $mysqli->error;
							}
						}
						$res = $mysqli->query("SELECT * FROM `todo` WHERE `id`=".$_GET['id']);
						if($mysqli->Error){
							echo "Error: ".$mysqli->error;
						}
						$task = $res->fetch_array();
					?>
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
					<form class="form-horizontal" action="" method="post">
					  <div class="control-group">
					    <label class="control-label" for="title">Title</label>
					    <div class="controls">
					      <input type="text" id="title" placeholder="Title" name="title" value="<?=$task['title']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="desc">Description</label>
					    <div class="controls">
					      <textarea name="desc" id="desc" style="background: none;border: none;box-shadow:none;width: 100%;height: 100px;max-width:100%;"><?=$task['description']?></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="assigned_to">Assignee</label>
					    <div class="controls">
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
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="priority">Deadline</label>
					    <div class="controls">
					    	<script>
					    		$(function() {
					    			$("#hasdeadline").on("change", function() {
					    				if($("#hasdeadline").prop('checked')) {
					    					$("#deadline").show();
					    				}else{
					    					$("#deadline").hide();
					    				}
					    			});
					    		});
					    	</script>
					      <label class="checkbox">
					        <input type="checkbox" id="hasdeadline" <?=($task['deadline']!=0)?"checked":""?> name="hasdeadline"> Has Deadline
					      </label>
				        <input type="date" id="deadline" placeholder="Deadline" name="deadline" value="<?=($task['deadline']!=0)?date("Y-m-d",$task['deadline']):date("Y-m-d")?>" <?=($task['deadline']!=0)?"":"style='display:none'"?>>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="priority">Priority</label>
					    <div class="controls">
					      <select name="priority" id="priority">
					      	<option <?=($task['priority']==0)?"selected":""?> value="0">Low</option>
					      	<option <?=($task['priority']==1)?"selected":""?> value="1">Medium</option>
					      	<option <?=($task['priority']==2)?"selected":""?> value="2">High</option>
					      </select>
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox" <?=$task['private']?"checked":""?> name="private"> Private
					      </label>
					      <button type="submit" class="btn" id="saver"><i class="fa fa-floppy-o"></i> Save</button>
					    </div>
					  </div>
					</form>
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
      <div class="span3">
         <div class="well">
             <?php include("minitasks.php"); ?>
         </div>
      </div>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

