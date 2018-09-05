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

<?php mustLogIn(); ?>

      <div class="span9">
         <div class="well">
            <h1>Tasks</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
					<h3>New Task</h3>
					<?php
						if(isset($_POST['title'])){
							$title = $_POST['title'];
							$desc = $_POST['desc'];
							$assigned_to = $_POST['assigned_to'];
							$reff = $_POST['report_ref'];
							$pri = $_POST['priority'];
							if($reff == ""){
								$reff = 0;
							}
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

							$userid = $mysqli->query("SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 							$userid = $userid->fetch_array()['id'];
							$now = time();
							$res = $mysqli->query("INSERT INTO `todo` (`title`,`assigned_to`,`description`,`created_by`,`created_at`,`report_ref`, `priority`, `private`,`deadline`) VALUES ('$title',$assigned_to,'$desc','$userid','$now',$reff,$pri,$private,$deadline)");

							if(!$mysqli->error){
								$iid = $mysqli->insert_id;
								$manage->activity("Created task", "task", $iid);
								header("location: /db/seetask.php?id=".$iid);
								echo "<script>window.location.href='/db/seetask.php?id=".$iid."';</script>Task created! See it <a href='/db/seetask.php?id=".$iid."'>here</a>.";
							}else{
								echo $mysqli->error;
							}
						}
					?>
					<form class="form-horizontal" action="" method="post">
					  <div class="control-group">
					    <label class="control-label" for="title">Title</label>
					    <div class="controls">
					      <input type="text" id="title" placeholder="Title" name="title" value="<?=$_POST['title']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="desc">Description</label>
					    <div class="controls">
					      <textarea name="desc" id="desc" style="background: none;border: none;box-shadow:none;width: 100%;height: 100px;max-width:100%;"><?=$_POST['desc']?></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="assigned_to">Assignee</label>
					    <div class="controls">
					      <select name="assigned_to" id="assigned_to">
					      	<option <?=($_POST['assigned_to']==0)?"selected":""?> value="0">Nobody</option>
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
					    <label class="control-label" for="hasdeadline">Deadline</label>
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
					        <input type="checkbox" id="hasdeadline" <?=$_POST['hasdeadline']?"checked":""?> name="hasdeadline"> Has Deadline
					      </label>
				        <input type="date" id="deadline" placeholder="Deadline" name="deadline" value="<?=$_POST['deadline']?>" style="display:none;">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="priority">Priority</label>
					    <div class="controls">
					      <select name="priority" id="priority">
					      	<option <?=($_POST['priority']==0)?"selected":""?> value="0">Low</option>
					      	<option <?=($_POST['priority']==1 || !isset($_POST['priority']))?"selected":""?> value="1">Medium</option>
					      	<option <?=($_POST['priority']==2)?"selected":""?> value="2">High</option>
					      </select>
					    </div>
					  </div>
					  <input hidden class="hidden" style="display:none;" name="report_ref" value="<?=$_GET['reff']?>">
					  <div class="control-group">
					    <div class="controls">
					    	<label class="checkbox">
					        <input type="checkbox" <?=$_POST['private']?"checked":""?> name="private"> Private
					      </label>
					      <button type="submit" class="btn"><i class="fa fa-plus"></i> Create Task</button>
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

