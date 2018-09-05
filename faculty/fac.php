<?php
if(!empty($_GET['slug'])){
	$_GET['slug'] = rtrim($_GET['slug'], '/');
	include("../db/fac.php");
}else{
	unset($_GET['slug']);
	include("../db/faclist.php");
}
?>