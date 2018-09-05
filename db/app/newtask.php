<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="index.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Tasks
  </a>
  <h1 class="title">New Task</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
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

			$userid = $cuser['id'];
			$now = time();
			$res = $mysqli->query("INSERT INTO `todo` (`title`,`assigned_to`,`description`,`created_by`,`created_at`,`report_ref`, `priority`, `private`,`deadline`) VALUES ('$title',$assigned_to,'$desc','$userid','$now',$reff,$pri,$private,$deadline)");

			if(!$res->error){
				$mytask = $mysqli->insert_id;
				$manage->activity("Created task", "task", $mytask);
				header("location: /db/app/task.php?id=".$mytask);
				echo "<div class='alert alert-success'>Creating task...</div><script>window.location.href='/db/app/task.php?id=".$mytask."';</script>Task created! See it <a href='/db/app/task.php?id=".$mytask."'>here</a>.";
			}else{
				echo $res->error;
			}
		}
	?>
	<form class="form-horizontal" action="newtask.php" method="post">
	  <div class="control-group">
	    <label class="control-label" for="title">Title</label>
	    <div class="controls">
	      <input type="text" id="title" placeholder="Title" name="title" value="<?=$_POST['title']?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="desc">Description</label>
	    <div class="controls">
	      <textarea name="desc" id="desc" style="width: 100%;height: 100px;max-width:100%;"><?=$_POST['desc']?></textarea>
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
	      <label class="checkbox">
	        <input type="checkbox" id="hasdeadline" <?=$_POST['hasdeadline']?"checked":""?> name="hasdeadline"> Has Deadline
	      </label>
        <input type="date" id="deadline" placeholder="Deadline" name="deadline" value="<?=time()?>" style="display:none;">
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
	      <button type="submit" class="btn btn-block"><i class="fa fa-plus"></i> Create Task</button>
	    </div>
	  </div>
	</form>
</div>
<?php include("bottom.php"); ?>