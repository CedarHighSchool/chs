<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="reports.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Back
  </a>
  <h1 class="title">Report</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
	$stuff = $mysqli->query("SELECT * FROM `reports` WHERE `id`=".$_GET['id']);
  $report = $stuff->fetch_array();
  ?>
  <h4>Report #<?=$report['id']?></h4>
	<b>Type</b>: <?php
	switch($report['type']){
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
	<b>From</b>: <?=$report['name']?> (<a href="mailto:<?=$report['email']?>"><?=$report['email']?></a>)<br>
	<b>At</b>: <?=date("l, jS \of F Y @ h:i:s A",$report['when'])?><hr>
	<b>Description:</b><br>
	<p><?=nl2br($report['desc'])?></p><br>
	<p><?php
	if($report['done']){
	   echo "This is Done <br><a href='/db/app/setopen.php?id=".$report['id']."&status=0' class='btn btn-negative btn-block btn-outlined'>Set Not Done</a>";
	}else{
	   echo "This is Not Done! <br><a href='/db/app/setopen.php?id=".$report['id']."&status=1' class='btn btn-positive btn-block btn-outlined'>Set Done</a>";
	}
	?>
	<ul class="table-view">
		<li class="table-view-cell table-view-divider"><b>Referenced Tasks</b></li>
	  <?php
	  $stuff = $mysqli->query("SELECT * FROM `todo` WHERE `report_ref`=".$_GET['id']);
	  if($stuff->num_rows <= 0){
	  ?>
	  <li class="table-view-cell">
	    <b>No tasks referenced!</b>
	  </li>
	  <?php
	  }else{
	  while($item = $stuff->fetch_array()){
	  ?>
	  <li class="table-view-cell">
	    <a class="navigate-right" href="task.php?id=<?=$item['id']?>">
	      <?=$item['title']?>
	    </a>
	  </li>
	  <?php } } ?>
  </ul>
</div>
<?php include("bottom.php"); ?>