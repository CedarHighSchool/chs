<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
if(!$link){
	echo mysqli_error($link);
}
$stuff = mysqli_query($link, "SELECT * FROM `homepage` WHERE `visible`=1 ORDER BY `order` ASC");
while($item = mysqli_fetch_array($stuff)){
	if($item['type'] == 0){
?>
	<div class="well">
		<h3><?=$item['title']?></h3>
		<p><?=$item['content']?></p>
	</div>  
<?php
	}else if($item['type'] == 1){
?>
	<div class="well">
		<h3><u><center><a href="<?=$item['url']?>"><?=$item['title']?></a></center></u></h3>
	</div>  
<?php
	}
}
?>