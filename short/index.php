<?php
if(isset($_GET['i'])){
	switch($_GET['i']){
		case 'ig':
			header("location: https://www.instagram.com/cedarredmenn/");
		break;
		case 'sc':
			header("location: http://chs.ironk12.org/assets/inc/Snapchatcode.jpg");
		break;
		case 'tw':
			header("location: https://twitter.com/cedarhighschool");
		break;
		case 'fb':
			header("location: http://www.facebook.com/pages/Cedar-City-High-School/144743085766");
		break;
		default:
			header("location: /");
		break;
	}
}else{
	header("location: /");
}
?>