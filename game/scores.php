<?php header("Access-Control-Allow-Origin: *"); ?>
<style>
	.score-me {
		font-size: 110%;
		font-weight: bold;
	}
	.table th, .table td {
	  padding: 5px;
	}
</style>
<?php
if($GAME_UP == false){
  // echo "The Hunt is offline";
}
?>
<table class="table styled-table scoreboard">
 <thead>
    <tr>
       <th>#</th>
       <th></th>
       <th>Name</th>
       <th>Pts.</th>
    </tr>
 </thead>
 <tbody>
    <?php
    $pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854"); // Password
    $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs"); // Database connection
	if(!$link){ // Error handling
		echo mysqli_error($link);
	}
	if($_GET['live'] == 1){
	  $stuff = mysqli_query($link, "SELECT * FROM `game_users` WHERE `score`!=0 and `hidden`=0 ORDER BY `score` DESC, `level` DESC LIMIT 15"); // Get users with a score & not admin
	}else{
	  $stuff = mysqli_query($link, "SELECT * FROM `game_users` WHERE `score`!=0 and `hidden`=0 ORDER BY `score` DESC, `level` DESC LIMIT 10"); // Get users with a score & not admin
	}
	$i = 0;
	while($item = mysqli_fetch_array($stuff)){
	    $i +=1;
	   // if(strlen($item['username']) > 12){
	   //   $username = substr($item['username'],0,11);
	   // }else{
	      $username = $item['username'];
	   // }
	?>
    <tr <?php if($item['username']==$_SESSION['game_username']){echo "class='score-me'";} ?>>
        <td><?=$i?></td>
        <td><img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 15px;" class="img-circle">&nbsp;</td>
        <?php
        if($item['username']==$_SESSION['game_username']){
      	?>
        <td><a href="/game/"><?=$username?></a></td>
        <?php
        }else{
        ?>
        <td><a href="/game/player.php?id=<?=$item['id']?>"><?=$username?></a></td>
        <?php
        }
        ?>
        <td><?=$item['score']?></td>
    </tr>
    <?php
	}
	?>
 </tbody>
</table>
<?php
if($_GET['live'] == 1){
?>
<style>
  .mainone * {
    font-size: 150% !important;
    padding-bottom: 15px;
  }
  .heyy {
    font-size: 10% !important;
  }
</style>
<div class="mainone" style="display: none;">
  <center><h3>First Place</h3></center>
	<?php
  $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
 	if(!$link){
 		echo mysqli_error($link);
 	}
 	$stuff = mysqli_query($link, "SELECT * FROM `game_users` WHERE `hidden`=0 ORDER BY `score` DESC, `level` DESC");
 	$item = mysqli_fetch_array($stuff);
  ?>
  <center>
  	<img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 300px; border-radius: 30%;" class="img-circle"><br>
  	<h3><?=$item['username']?></h3>
  	with
  	<h3><?=number_format($item['score'])?> points!</h3>
  	<?php
  	$high = $item['score'];
  	$item = mysqli_fetch_array($stuff);
  	?>
  	followed by <b><?=$item['username']?></b>, at <?=$high-$item['score']?> points away
	</center>
</div>
<script>
  $(function() {
		function reload() {
			$(".scoreboard").toggle();
			$(".mainone").toggle();
		}
		setTimeout(reload, 5000);
	})
</script>
<?php
}
?>