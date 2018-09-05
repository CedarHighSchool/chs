<?php
if($_GET['username']) {
	$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
	$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
 	if($mysqli->error){
 		die($mysqli->error);
 	}
 	$stuff = $mysqli->query("SELECT * FROM `game_users`");
 	echo "<ol>";
 	while($item = $stuff->fetch_array()){
 		$uses = $mysqli->query("SELECT * FROM `game_uses` WHERE `user`='".$item['id']."'");
 		if(($uses->num_rows) != $item['level']) {
 			echo "<li>".$item['username']."</li>";
 		}
 	}
 	echo "</ol>";
}else{
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(function() {
  	$("#usernam").on("keyup", function(e){
  		if(e.keyCode == 13) {
  			$.get( "handy.php", { username: $("#usernam").val()} )
				.done(function( data ) {
					$("#out").html(data);
				});
  		}
  	});
  });
</script>
<p id="out">Do something</p>
<input type="text" id="usernam">
<?php
}
?>