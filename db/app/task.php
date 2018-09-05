<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="index.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Tasks
  </a>
  <h1 class="title">Task</h1>
  <a class="icon fa fa-pencil-square pull-right" href="edittask.php?id=<?=$_GET['id']?>"></a>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
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
      <a href="report.php?id=<?=$item['report_ref']?>">Report Reference</a>
	<?php } ?><hr>
	<script>
	$(function() {
	   $("#assignee").on("submit", function() {
	      $.get( "../ajax/assigntask.php", { id: <?=$_GET['id']?>, user: $("#assigned_to").val() } )
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
  		<option <?=($item['assigned_to']==$usr['id'])?"selected":""?> value="<?=$usr['id']?>"><?=$usr['fname']?> <?=$usr['lname']?></option>
  	<?php
  	}
  	?>
  </select>
<button type="submit" class="btn"><i class="fa fa-floppy-o"></i></button>
</form>
  <br>
	<p><?php
	if($item['done']){
	   echo "This is Done <br><a href='/db/app/setdone.php?id=".$item['id']."&status=0' class='btn btn-negative btn-block btn-outlined'>Set Not Done</a>";
	}else{
	   echo "This is Not Done! <br><a href='/db/app/setdone.php?id=".$item['id']."&status=1' class='btn btn-positive btn-block btn-outlined'>Set Done</a>";
	}
	?>
</div>
<?php include("bottom.php"); ?>