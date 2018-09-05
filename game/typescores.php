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
       <th>WPM</th>
    </tr>
 </thead>
 <tbody>
    <?php
    $pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854"); // Password
    $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs"); // Database connection
	if(!$link){ // Error handling
		echo mysqli_error($link);
	}
	$scores = mysqli_query($link, "SELECT * FROM `game_typing` ORDER BY `errors` ASC, `wpm` DESC"); // Get users with a score & not admin
	
	$i = 0;
	while($score = mysqli_fetch_array($scores)){
		$item = mysqli_query($link, "SELECT * FROM `game_users` WHERE `id`=".$score['player']);
		$item = mysqli_fetch_array($item);
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
        <td><?=$username?></td>
        <?php
        }
        ?>
        <td><?=$score['wpm']?></td>
    </tr>
    <?php
	}
	?>
 </tbody>
</table>