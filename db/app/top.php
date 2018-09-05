<?php
$version = 1.8;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CHS DB v<?=$version?></title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="css/ratchet.css?v=<?=$version?>" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css?v=<?=$version?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.7.2/firebase.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/store.js/1.3.20/store.min.js"></script>

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.js?v=<?=$version?>"></script>
    <style>
      .alert {
        margin: 5px;
        padding: 4px;
        border-radius: 5px;
        border: 1px solid;
      }
      .alert-success {
        border-color: #19a419;
        background-color: rgba(119, 217, 118, 0.34);
      }
      .alert-danger {
        border-color: #cd2828;
        background-color: rgba(217, 118, 118, 0.34);
      }
      cloudflare-app {
        display:none;
      }
      header.bar {
        margin-top: 4px;
        padding-bottom:5px;
      }
      .content {
        margin-top: 10px;
      }
      .icon.fa {
        margin-top: -3px;
      }
      .table-view-cell .icon.fa {
        margin-top: 1px;
      }
    </style>
  </head>
  <body>
    <?php
    session_start();
    include("../../assets/inc/include.php");
    $manage = new Manager();
    $mysqli = $manage->database();
    
    if(isset($_SESSION['username'])) {
    	$cuser = $manage->get_user();
    }
    
    function mustLogIn() {
    	if(!isset($_SESSION['username'])) {
    		header("location: /db/app/login.php");
    		die("<script>window.location.href='/db/app/login.php';</script>You must be logged in to see this.");
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
    
    $vars1 = $mysqli->query("SELECT * FROM `variables`");
    $vars = array();
    while($var = $vars1->fetch_array()) {
    	$vars[$var['name']] = $var['value'];
    }
    
    function myTruncate($string, $limit=10, $pad="...") {
      // return with no change if string is shorter than $limit
      if(strlen($string) <= $limit) return $string;
      $string = substr($string, 0, $limit) . $pad;
      return $string;
    }
    ?>
    <style>
      .tab-badge {
         position:relative;
      }
      .tab-badge[data-badge]:after {
         content:attr(data-badge);
         position:absolute;
         top:-3px;
         right:-15px;
         font-size:.6em;
         background:#929292;
         color:white;
         width:18px;height:18px;
         text-align:center;
         line-height:23px;
         border-radius:50%;
         border: 1.5px solid white;
         font-family: "Helvetica Neue", Helvetica, sans-serif;
      }
      .active .tab-badge[data-badge]:after {
        background: #428bca;
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
    	
    	.msg p {
    	  color: black;
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
    </style>
    <nav class="bar bar-tab bar-footer">
      <?php
      $tsk = $mysqli->query("SELECT * FROM `todo` WHERE `done`=0 AND `assigned_to`=".$cuser['id'])->num_rows;
      $rep = $mysqli->query("SELECT * FROM `reports` WHERE `done`=0")->num_rows;
      ?>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="index")?"active":""?>" href="index.php">
        <span class="icon fa fa-check<?=($tsk>0)?" tab-badge":""?>"<?=($tsk>0)?" data-badge=\"$tsk\"":""?>></span>
        <span class="tab-label">Tasks</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="reports")?"active":""?>" href="reports.php">
        <span class="icon fa fa-info-circle<?=($rep>0)?" tab-badge":""?>"<?=($rep>0)?" data-badge=\"$rep\"":""?>></span>
        <span class="tab-label">Reports</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="notes")?"active":""?>" href="notes.php">
        <span class="icon fa fa-sticky-note"></span>
        <span class="tab-label">Notes</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="facs")?"active":""?>" href="facs.php">
        <span class="icon fa fa-address-book"></span>
        <span class="tab-label">Faculty</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="menu")?"active":""?>" href="menu.php">
        <span class="icon fa fa-bars"></span>
        <span class="tab-label">Menu</span>
      </a>
    </nav>
    <script>
    window.addEventListener('push', function() {
      function newtask() {
  			$("#hasdeadline").on("change", function() {
  				if($("#hasdeadline").prop('checked')) {
  					$("#deadline").show();
  				}else{
  					$("#deadline").hide();
  				}
  			});
  		}
    	function vars() {
    		$(".btn-save").click(function() {
    			var obid = $(this);
    			$.post("/db/savevar.php", { name: obid.data("var"), value: $("#"+obid.data("var")).val() })
    		  .done(function( stuff ) {
    		  	if(stuff == "true"){
    					$("#"+obid.data("var")+"_tt").text("Saved!");
    					$("#"+obid.data("var")+"_te").text("");
    					var it = obid;
    					setTimeout(function() {
    						$("#"+it.data("var")+"_tt").text("");
    					}, 500);
    		  	}else{
    		  		$("#"+obid.data("var")+"_te").text("Error! "+stuff);
    		  	}
    		  });
    			return false;
    		});
    		$(".btn-copy").click(function() {
    			prompt("Copy this to use in code:","\<\?\=\$vars\[\'"+$(this).data("var")+"\'\]\?\>");
    			return false;
    		});
    	}
	
      function strUrl(url) {
            return url.split(/[?#]/)[0].replace(/(^\w+:|^)\/\//, '').replace(/\./g, '-');
          }
    	function inito() {
    	  console.log("Chat init.")
    		//// Initialize Firebase.
    		var config = {
  				apiKey: "AIzaSyC7DypYRweLX9UC8LvUYQNLsufLZ95dZYM",
  				authDomain: "perfect-transit-186317.firebaseapp.com",
  				databaseURL: "https://perfect-transit-186317.firebaseio.com",
  			};
  			if (!firebase.apps.length) {
    		  firebase.initializeApp(config);
    		  //// Get Firebase Database reference.
    		  var messagesRef = firebase.database().ref().child("chsdbchat")
  			}else{
  			  messagesRef = firebase.database().ref().child("chsdbchat")
  			}
    		;
    		$("#add").click(function() {
    			if (($("#text").val() != "") && ($("#name").val() != "")) {
    				var name = "<?=$cuser['username']?>";
    				var text = $("#text").val();
    				messagesRef.push({
    					name: name,
    					text: text
    				});
    				$("#text").val("");
    			}
    		});
    		// Add a callback that is triggered for each comment
    		messagesRef.limitToLast(10).on("child_added", function(snapshot) {
    			var message = snapshot.val();
    		  //time = message.time;
          //var d = new Date(time);
          //var when = d.toDateString();
          if(message.name == "<?=$cuser['username']?>") {
            $(".list").append("<div class='msg me'><p>"+message.text+"</p></div>");
          }else{
            $(".list").append("<div class='msg them'><span class='msg-name'>"+message.name+"</span><p>"+message.text+"</p></div>");
          }
    			
    			$(".content")[0].scrollTop = $(".content")[0].scrollHeight;
    		});
    	}
    
    	// Helper to get hash from end of URL or generate a random one.
    	function getExampleRef() {
    		var ref = firebase.database().ref();
    		var hash = window.location.hash.replace(/#/g, '');
    		if (hash) {
    			ref = ref.child(hash);
    		} else {
    			ref = ref.push(); // generate unique location.
    			window.location = window.location + '#' + ref.key; // add it as a hash to the URL.
    		}
    		if (typeof console !== 'undefined') {
    			console.log('Firebase data: ', ref.toString());
    		}
    		return ref;
    	}
    	function loginPage() {
    	  console.log(store.get("uname"));
    	  $("#username").val(store.get("uname"));
    	  if(store.get("pwd")) {
    	    $("#password").val(store.get("pwd"));
    	    $("#loginn").submit();
    	    
    	  }
  			$("#username").on("keyup", function() {
  				store.set("uname", $("#username").val());
  			});
  			$("#password").on("keyup", function() {
  				store.set("pwd", $("#password").val());
  			});
    	}
    	console.log(window.location.href);
    	if(window.location.href.indexOf("chat.php") != -1) {
    		inito();
    	}
    	if(window.location.href.indexOf("vars.php") != -1) {
    		vars();
    	}
    	if(window.location.href.indexOf("newtask.php") != -1) {
    		newtask();
    	}
    	if(window.location.href.indexOf("edittask.php") != -1) {
    		newtask();
    	}
    	if(window.location.href.indexOf("login.php") != -1) {
    		loginPage();
    	}
    	if(window.location.href.indexOf("logout.php") != -1) {
    		loginPage();
    	}
    });
    </script>