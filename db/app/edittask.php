<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="task.php?id=<?=$_GET['id']?>" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Cancel
  </a>
  <h1 class="title">Edit Task</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
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

			if(!$res->error){
				$manage->activity("Updated task", "task", $_GET['id']);
				echo "<div class='alert alert-success'>Task saved! See it <a href='/db/app/task.php?id=".$_GET['id']."'>here</a>.</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: ".$res->error."</div>";
			}
		}
		$res = $mysqli->query("SELECT * FROM `todo` WHERE `id`=".$_GET['id']);
		if($res->error){
			echo "<div class='alert alert-danger'>Error: ".$res->error."</div>";
		}
		$task = $res->fetch_array();
	?>
	<form class="form-horizontal" action="edittask.php?id=<?=$_GET['id']?>" method="post">
	  <div class="control-group">
	    <label class="control-label" for="title">Title</label>
	    <div class="controls">
	      <input type="text" id="title" placeholder="Title" name="title" value="<?=$task['title']?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="desc">Description</label>
	    <div class="controls">
	      <textarea name="desc" id="desc" style="width: 100%;height: 100px;max-width:100%;"><?=$task['description']?></textarea>
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
	    <label class="control-label" for="hasdeadline">Deadline</label>
	    <div class="controls">
	      <label class="checkbox">
	        <input type="checkbox" id="hasdeadline" <?=$task['hasdeadline']?"checked":""?> name="hasdeadline"> Has Deadline
	      </label>
        <input type="date" id="deadline" placeholder="Deadline" name="deadline" value="<?=$task['deadline']?$task['deadline']:time()?>" <?=($task['deadline']!=0)?"":"style='display:none'"?>>
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="priority">Priority</label>
	    <div class="controls">
	      <select name="priority" id="priority">
	      	<option <?=($task['priority']==0)?"selected":""?> value="0">Low</option>
	      	<option <?=($task['priority']==1 || !isset($task['priority']))?"selected":""?> value="1">Medium</option>
	      	<option <?=($task['priority']==2)?"selected":""?> value="2">High</option>
	      </select>
	    </div>
	  </div>
	  <input hidden class="hidden" style="display:none;" name="report_ref" value="<?=$_GET['reff']?>">
	  <div class="control-group">
	    <div class="controls">
	    	<label class="checkbox">
	        <input type="checkbox" <?=$task['private']?"checked":""?> name="private"> Private
	      </label>
	      <button type="submit" class="btn btn-block"><i class="fa fa-save"></i> Save</button>
	    </div>
	  </div>
	</form>
</div>
<?php include("bottom.php"); ?>