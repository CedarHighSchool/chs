<?php
$token = "10128~AghkNHDRYKQehQpBVZkgfOJa98Hq0ArKtX7shQl8RhR3B6KjOatIbK3qqKbWqsli";
$res = file_get_contents("https://irondistrict.instructure.com/api/v1/courses?access_token=".$token);

$res = json_decode($res);

foreach($res as $a=>$b) {
	$course = $b->id;
	$class = file_get_contents("https://irondistrict.instructure.com/api/v1/courses/$course/assignments?access_token=".$token."");
	$class = json_decode($class);
	foreach($class as $c) {
		echo "<h3>".$c->name."</h3><p>".$c->description."</p><hr>";
	}
}
?>