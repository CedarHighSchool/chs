<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="dbs"; ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <title>Cedar High School</title>
		<script src="https://www.gstatic.com/firebasejs/3.7.2/firebase.js"></script>
      <?php include("../assets/inc/headtag.php");
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
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
         </div>
      </div>
			<?php
			if($ttl > 0){
		   ?>
         <div class="span9"><div class="alert alert-info">You have <?=$ttl?> notification<?=($ttl!=1)?"s":""?>.</div></div>
		   <?php
			}
			?>
			<?php
			if($msg > 0){
		   ?>
         <div class="span9"><div class="alert alert-success">You have <?=($msg!=1)?$msg:"an"?> unread message<?=($msg!=1)?"s":""?>. <a href="/db/messages.php">See Messages</a></div></div>
		   <?php
			}
			?>
			<div class="well span4">
				<?php
				$task_count = $mysqli->query("SELECT `id` FROM `todo` WHERE `done`=1");
				$task_count = $task_count->num_rows;
				?>
				<span class="span3">
				<h1><?=$task_count?></h1>
				Total tasks completed</span>
				<a href="/db/tasks.php"><h4 class="fa fa-check fa-4x pull-right"></h4></a>
			</div>
			<div class="well span4">
				<?php
				$report_count = $mysqli->query("SELECT `id` FROM `reports` WHERE `done`=1");
				$report_count = $report_count->num_rows;
				?>
				<span class="span3">
				<h1><?=$report_count?></h1>
				Total reports finished</span>
				<a href="/db/reports.php"><h4 class="fa fa-info-circle fa-4x pull-right"></h4></a>
			</div>
			<?php
			if($manage->check_perm("notes")) {
			?>
			<div class="well span4">
			   <h3>Notes</h3>
			   <a href="newnote.php">Create Note</a> |
				<?php
				include("mininotes.php");
				?>
			</div>
			<?php
			}
			?>
			<?php
			if($manage->check_perm("tasks")) {
			?>
			<div class="well span4">
			   <h3>Tasks</h3>
			   <a href="newtask.php">Create Task</a> |
				<?php
				include("minitasks.php");
				?>
			</div>
			<?php
			}
			?>
			<span class="span9">
			   <div class="well">
					<style>
						.tool-icon {
							padding: 5px;
						}
					</style>
					<h3>Tools</h3>
					<?php if($cuser['edit'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/" class="tool-icon" title="Editor"><i class="fa fa-pencil fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['edit'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/order.php" class="tool-icon" title="Reorder"><i class="fa fa-bars fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['bugger'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/reports.php" class="tool-icon" title="Reports"><i class="fa fa-info-circle fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['tasks'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/tasks.php" class="tool-icon" title="Tasks"><i class="fa fa-check fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['edit'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/vars.php" class="tool-icon" title="Variables"><i class="fa fa-microchip fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['notes'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/notes.php" class="tool-icon" title="Notes"><i class="fa fa-sticky-note fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['banners'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/banners.php" class="tool-icon" title="Banners"><i class="fa fa-picture-o fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['announcer'] == 1){ ?>
					<a href="http://chs.ironk12.org/db/announcer.php" class="tool-icon" title="Announcer"><i class="fa fa-bullhorn fa-5x"></i></a>
					<?php } ?>
					<?php if($cuser['admin'] == 1){ ?>
					<a href="http://chs.ironk12.org/adminer-4.3.1-mysqli.php" class="tool-icon" title="Database Admin"><i class="fa fa-database fa-5x"></i></a>
					<?php } ?>
				</div>
			</span>
			<span class="span9">
			   <div class="well">
   			   <h3>Widgets</h3>
   			   <?php if($cuser['admin'] == 1){ ?>
   			   <script>
   			   $(function() {
   			   	$("#passconvert").on("keyup", function() {
							$.post( "passc.php", { pswd:$("#passconvert").val() })
							  .done(function( data ) {
								$("#passview").val(data);
							  });
						});
   			   	$("#refreshall").click(function() {
   			   		$("#refreshall").text("Refreshing...");
   			   		$.post( "refreshall.php", {  })
							  .done(function( data ) {
									
							  });
   			   	});
   			   	$(".refresher").click(function() {
   			   		$(this).text("Refreshing...");
   			   		id = $(this).data("id");
   			   		$.post( "refreshone.php", { id: id })
							  .done(function( data ) {
							  		$it = $(".refresher[data-id="+id+"]");
									$it.text("Refreshed");
									$it.removeClass("btn-warning");
									$it.addClass("btn-success");
									setTimeout(function(){
										$it.text("Refresh");
										$it.addClass("btn-warning");
										$it.removeClass("btn-success");
									}, 1000);
							  });
   			   	});
   			   });
   			   </script>
   			   <style>
   			   	.list {
   			   		max-height: 200px;
   			   		overflow-y: scroll;
   			   	}
   			   </style>
					<div class="well">
						<p>Password encryption:</p>
						<input type="password" id="passconvert"><br>
						<input type="text" id="passview" readonly>
					</div>
					<div class="well">
						<p>User Controls</p>
						<button id="refreshall" class="btn btn-warning">Refresh All</button>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Username</th>
									<th>Actions</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$users = $mysqli->query("SELECT * FROM `users` WHERE `enabled`=1");
								while($user = $users->fetch_array()) {
								?>
								<tr>
									<td><?=$user['id']?></td>
									<td><?=$user['username']?></td>
									<td><button class="btn btn-warning btn-mini refresher" data-id="<?=$user['id']?>">Refresh</button></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
					<?php } ?>
   			</div>
			</span>
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style></div>
      <?php include("../assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>