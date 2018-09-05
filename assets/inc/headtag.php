<?php
include("include.php");
include("gameinfo.php");
$manage = new Manager();
$mysqli = $manage->database();
$url = "//".$_SERVER['HTTP_HOST']."/";
$snow = false;
$animations = true;

if(isset($_SESSION['username'])) {
	$cuser = $manage->get_user();
	if($cuser['passreset'] && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="passreset") {
		header("location: /db/passreset.php");
		die("<script>window.location.href='/db/passreset.php';</script>You need to reset your password.");
	}
	$test = $mysqli->query("UPDATE `users` SET `changed`=0 WHERE `id`=".$cuser['id']);
}

if(isset($_SESSION['game_username'])) {
	$guser = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
	$guser = $guser->fetch_array();
}
function mustLogIn() {
	if(!isset($_SESSION['username'])) {
		header("location: /db/login.php");
		die("<script>window.location.href='/db/login.php';</script>You must be logged in to see this.");
	}
}
function him($userid, $hey=-159) {
	$manage = new Manager();
	$mysqli = $manage->database();
	
	$us = $mysqli->query("SELECT * FROM `users` WHERE `id`=".$userid."");
	if($us->num_rows <= 0) {
		return "Unknown";
	}
	$us = $us->fetch_array();
	switch($hey) {
		case "fullname":
			return $us['fname']." ".$us['lname'];
			break;
		case -159:
			return $us;
			break;
		default:
			return $us[$hey];
			break;
	}
}
if(!function_exists('tellme')) {
function tellme($ttl, $msgr) {
	$ttl = urlencode($ttl);
	$msgr = urlencode($msgr);
	file_get_contents("https://hook.integromat.com/9b3v875pabxjp183t7noqeg7erv3o3qx?title=$ttl&message=$msgr");
}
}
function alertbox($content, $type = "info") {
	echo "<div class='alert alert-$type'>$content</div>";
}

function area($name) {
	$manage = new Manager();
	$mysqli = $manage->database();
	$area = $mysqli->query("SELECT * FROM `areas` WHERE `name`='".$name."'");
	if($area->num_rows <= 0) {
		echo "Area '$name' not found.";
		return false;
	}
	$area = $area->fetch_array();
	$areacont = $area['content'];
	$result    = preg_replace_callback('/(\[.*?\])/', function($matches) use($mysqli) {
             // Remove square brackets from the match
             // then use it as variable name
             $item = trim($matches[1],"[]");
             $stuff = $mysqli->query("SELECT * FROM `variables` WHERE `name`='".$item."'");
             $stuff = $stuff->fetch_array();
             // Pick an item from the related array whichever.
             return $stuff['value']; }, $areacont);
	$actual_link = '//'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	if($manage->logged_in()) {
	   ?>
	   <script>
	      $(function() {
	         $("#toggle<?=$area['id']?>").click(function() {
	            $("#form<?=$area['id']?>").toggleClass("hider");
	            $("#view<?=$area['id']?>").toggleClass("hider");
	         });
	      });
	   </script>
	   <button id="toggle<?=$area['id']?>" class="btn btn-mini btn-primary">Editor</button>
	   <div id="form<?=$area['id']?>" class="hider">
	 	   <form action="/db/savearea.php" method="post">
	 	      <input name="name" style="display:none;" value="<?=$name?>">
	 	      <input name="url" style="display:none;" value="<?=$actual_link?>">
	 	      <textarea name="content" class="form-control" rows="<?=substr_count($result, "\n");?>" style="width:100%; overflow-x:scroll;"><?=$areacont?></textarea><br>
	 	      <input type="submit" class="btn btn-success" value="Save">
	 	   </form>
	   </div>
	   <div id="view<?=$area['id']?>">
	 	   <?=$result?>
	   </div>
	   <?php
	}else{
	   echo $result;
	}
}

// function activity($content, $type="", $which=-1) {
// 	$manage = new Manager();
// 	$mysqli = $manage->database();
	
// 	$user = $manage->get_user()['id'];
// 	$when = time();
	
// 	$mysqli->prepare("INSERT INTO `activities` (`user`, `when`, `content`, `type`, `which`) VALUES (?, ?, ?, ?, ?)");
// 	$mysqli->bind_param("iissi", $user, $when, $content, $type, $which);
// 	$mysqli->execute();
// }

$vars1 = $mysqli->query("SELECT * FROM `variables`");
$vars = array();
while($var = $vars1->fetch_array()) {
	$vars[$var['name']] = $var['value'];
}
?>
<!--headtag.php -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="theme-color" content="#990000">

<!-- Stylesheets -->
<?php
if(!$_GET['fun']==1){
?>
<link href="/assets/css/bootstrap.css?v=1.06" rel="stylesheet">
<?php
}
?>

<?php
$val = false;
$patty = false;
$chr = false;
if((strtotime("today") == strtotime("Feb 14") || $_GET['v']==1) && $_SESSION['nopink']!="off") {
	$val = true;
}
if((strtotime("today") == strtotime("Mar 17") || $_GET['p']==1) && $_SESSION['nopat']!="off") {
	$patty = true;
}
if((strtotime("today") == strtotime("Dec 25") || $_GET['c']==1) && $_SESSION['nochr']!="off") {
	$chr = true;
}
if($val == true) {
	?>
	<style>
		.well {
			background-color: #f9dceb !important;
		}
	</style>
	<?php
}
if($patty == true) {
	?>
	<style>
		.well {
			background-color: #99ed90 !important;
		}
	</style>
	<?php
}
if($chr == true) {
	?>
	<style>
		.well {
			background-color: #5abb60 !important;
		}
	</style>
	<?php
}
?>

<!--jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/store.js/1.3.20/store.min.js"></script>

<script src="https://www.gstatic.com/firebasejs/3.7.2/firebase.js"></script>

<?php
if($animations == true) {
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<style>
	.moo {
		opacity: 0;
		transition: opacity 0.2s linear;
	}
	.moo:hover {
		opacity: 1;
	}
	.carousel-inner * {
		animation: fadein 1s;
	}
	@keyframes fadein {
		from { opacity: 0; }
		to   { opacity: 1; }
	}
</style>
<script>
$(function() {
	
});
new WOW().init();
</script>
<?php
}
?>


<?php
if($snow == true) {
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Snowstorm/20131208/snowstorm-min.js"></script>
<script>
snowStorm.flakesMaxActive = 96;
snowStorm.followMouse = false;
</script>
<?php
}
?>

<style type="text/css">
	body {
		padding-top: 0px;
		padding-bottom: 0px;
	}
	kbd {
		padding:0.1em 0.6em;
		border:1px solid #ccc;
		font-size:11px;
		font-family:Arial,Helvetica,sans-serif;
		background-color:#f7f7f7;
		color:#333;
		-moz-box-shadow:0 1px 0px rgba(0, 0, 0, 0.2),0 0 0 2px #ffffff inset;
		-webkit-box-shadow:0 1px 0px rgba(0, 0, 0, 0.2),0 0 0 2px #ffffff inset;
		box-shadow:0 1px 0px rgba(0, 0, 0, 0.2),0 0 0 2px #ffffff inset;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		display:inline-block;
		margin:0 0.1em;
		text-shadow:0 1px 0 #fff;
		line-height:1.4;
		white-space:nowrap;
	}
	.hider {
		display:none;
	}
</style>
<?php
if(!$_GET['fun']==1){
?>
<link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
<?php
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.5/push.min.js"></script>

<!-- Crutch for Internet Explorer -->
<!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons, and apple home icons -->
<link rel="icon" href="//chs.ironk12.org/assets/img/logo.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
<?php
if(isset($_SESSION['username']) && $manage->check_perm("chat")) {
?>
<script>
	$(document).ready(function() {
		if(store.get("hidechat") == true) {
			$("#chatcont").addClass("nope");
		}else{
			$("#chatcont").removeClass("nope");
		}
		Push.Permission.request(onGranted, onDenied);
		function onGranted() {
			// Push.create("Notifications on!");
		}
		function onDenied() {
			console.error("Notifications permission was denied!");
		}
		oldTitle = $("title").text();
		var vis = true;
		$(window).blur(function(){
			vis = false;
		});
		$(window).focus(function(){
			vis = true;
		});
		$(".note").hide();
		$("#ctitle").click(function() {
			$("#chatcont").toggleClass("nope");
			store.set("hidechat", $("#chatcont").hasClass("nope"));
			// $(".note").text(0);
			// $(".note").hide();
			$("#messagesDiv")[0].scrollTop = $("#messagesDiv")[0].scrollHeight;
		});
		function newMessage(name,text) {
			if(!vis){
				$('title').html(name+' says "'+text+'"');
				Push.create(name, {
				    body: text,
				    timeout: 4000,
				    onClick: function () {
				        window.focus();
				        this.close();
				        $("#messageInput").focus();
				    }
				});
				window.setTimeout(function() {
					$('title').html(oldTitle);
				}, 2000);
			}
		}
		function init() {
			//// Initialize Firebase.
			var config = {
				apiKey: "AIzaSyC7DypYRweLX9UC8LvUYQNLsufLZ95dZYM",
				authDomain: "perfect-transit-186317.firebaseapp.com",
				databaseURL: "https://perfect-transit-186317.firebaseio.com",
			};
			firebase.initializeApp(config);
			//// Get Firebase Database reference.
			var firepadRef  = getExampleRef();
			var messagesRef = getExampleRef().child("chsdbchat");
			$("#messageInput").keypress(function(e) {
				if (e.keyCode == 13 && $("#messageInput").val()!="") {
					var name = "<?=$cuser['username']?>";
					var text = $("#messageInput").val();
					messagesRef.push({
						name: name,
						text: text
					});
					$("#messageInput").val("");
				}
			});
			// Add a callback that is triggered for each chat message.
			messagesRef.limitToLast(10).on("child_added", function(snapshot) {
				var message = snapshot.val();
				newMessage(message.name,message.text);
				if(message.name=="<?=$cuser['username']?>"){
					$("#messagesDiv").append("<div class='msg me animated bounceIn' id='"+snapshot.key+"'><small class='msg-name'>"+message.name+"</small><br>"+message.text+"</msg>");
				}else{
					$("#messagesDiv").append("<div class='msg them animated bounceIn' id='"+snapshot.key+"'><small class='msg-name'>"+message.name+"</small><br>"+message.text+"</msg>");
				}
				// if($("#chatcont").is(":visible")){
				// 	// not needed yet
				// }else{
				// 	if($(".note").is(":visible")){
				// 		$(".note").text(1*$(".note").text()+1);
				// 	}else{
				// 		$(".note").show();
				// 		$(".note").text(1*$(".note").text()+1);
				// 	}
				// }
				$("#messagesDiv")[0].scrollTop = $("#messagesDiv")[0].scrollHeight;
			});
			
			messagesRef.on("child_removed", function(snapshot) {
				$("#"+snapshot.key).remove();
			});
		}
		
		// Helper to get hash from end of URL or generate a random one.
		function getExampleRef() {
			var ref = firebase.database().ref();
			// var hash = window.location.hash.replace(/#/g, '');
			// if (hash) {
			// 	ref = ref.child(hash);
			// } else {
			// 	ref = ref.push(); // generate unique location.
			// 	window.location = window.location + '#' + ref.key; // add it as a hash to the URL.
			// }
			return ref;
		}
		init();
	});
</script>
<style>
	.chatbox {
		font: normal normal 11px/1.4 Tahoma, Verdana, Sans-Serif !important;
		color: white;
		width: 200px;
		/* Chatbox width */
		border: 1px solid #660606;
		border-bottom: none;
		background-color: #660606;
		position: fixed;
		right: 10px;
		bottom: 0;
		z-index: 9999999999999999999999999999999;
		-webkit-box-shadow: 1px 1px 5px rgba(0, 0, 0, .2);
		-moz-box-shadow: 1px 1px 5px rgba(0, 0, 0, .2);
		box-shadow: 1px 1px 5px rgba(0, 0, 0, .2);
	}
	
	#chatcont {
		width: 100%;
	}
	
	#chatcont.nope {
		display:none;
	}
	
	#ctitle {
		text-align: center;
		text-transform: uppercase;
		cursor: pointer;
		padding: 0px;
	}
	
	.chatbox #nameInput {
		background-color: white;
		border: solid 0.5px;
		padding: 2px;
		width: calc(100% - 4px);
		cursor: default;
		border-radius: 0px;
		margin: 0px;
		display: none;
	}
	
	.chatbox #messageInput {
		background-color: white;
		border: solid 0.5px;
		padding: 4px;
		width: calc(100% - 8px);
		border-radius: 0px;
		margin: 0px;
	}
	
	.chatbox h3 {
		margin: 0px !important;
		color:white;
		font-size: 11px;
		padding: 0px;
		line-height: 20px;
	}
	
	.chatbox #messagesDiv {
		padding: 5px;
		border: solid black 1px;
		background-color: white;
		color: black;
		width: 94%;
		height: 200px;
		overflow-y: auto;
	}
	
	.msg {
		color: black;
		padding: 3px;
		clear: both;
		margin-bottom: 3px;
		overflow-x: hide;
		display: inline-block;
		max-width: 98%;
		white-space: wrap;
		word-wrap: break-word;
		word-spacing: -1px;
		cursor: default;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
	.msg.them {
		background-color: #d1e8ff;
		border-radius: 7px 7px 7px 0px;
		float: left;
	}
	
	.msg.me {
		background-color: #56adff;
		border-radius: 7px 7px 0px 7px;
		text-align: right;
		float: right;
	}
	
	.msg-name {
		font-weight:bold;
		font-size: 80%;
		line-height: 0px;
	}
	
	.note {
		display: inline;
		background-color: red;
		border-radius: 6px;
		padding-right: 4px;
		padding-left: 4px;
	}
</style>
<div class="chatbox">
	<span id="ctitle"><h3>Chat<span class="note"></span></h3></span>
	<span id="chatcont">
		<input type="text" id="nameInput" readonly placeholder="Name" value="<?=$cuser['username']?>" />
		<div id="messagesDiv"></div>
		<input type="text" id="messageInput" placeholder="Message..." />
	</span>
</div>
<?php
}
?>

<span id="checker" style="display:none;"></span>
<script>
 $(function() {
 	function userupdate() {
		$.get( "/assets/inc/usercheck.php", function( data ) {
		  $("#checker").html(data);
		});
	}
	setInterval(userupdate, 2000);
 });
</script>
<!--/headtag.php -->
