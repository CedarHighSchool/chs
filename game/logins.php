<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      
      <?php include("../assets/inc/headtag.php") ?>
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
            <h1>Logins</h1>
         </div>
      </div>
      <div class="span6">
         <div class="well">
         	<?php
         	if(isset($_SESSION['username'])){
					$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
			 		if($mysqli->error){
			 			die($mysqli->error);
			 		}
			 		$suggs = $mysqli->query("SELECT * FROM `game_logins` WHERE `who`>2 ORDER BY `when` DESC");
		      ?>
					<table class="table styled-table scoreboard">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
								<th>When</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while($sug = $suggs->fetch_array()) {
							   $usern = $mysqli->query("SELECT * FROM `game_users` WHERE `id`=".$sug['who']."");
							   $usern = $usern->fetch_array()['username'];
							   ?>
							   <tr>
							      <td><?=$sug['id']?></td>
							      <td><a href="player.php?id=<?=$sug['who']?>"><?=$usern?></a></td>
							      <td><?=date("M jS @ g:i a",$sug['when'])?></td>
							   </tr>
							   <?php
							}
							?>
						</tbody>
					</table>
					<?php }else{ ?>
					You are not an admin.<div style='min-height:100px;'></div>
					<?php } ?>
         </div><!--well-->
      </div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("options.php"); ?>
         </div>
      </div>
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
         .btn-account h4 {
            color: #ffffff !important;
         }
      </style>
      <div class="span3">
         <div class="well">
            <?php include("scores.php"); ?>
         </div>
      </div>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

