<!--navbar.php -->
<?php 
$pwwd = openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$banner_extra = "";
if($patty) {
	$banner_extra = "_pat";
}else if($val) {
	$banner_extra = "_val";
}else if($chr) {
	$banner_extra = "_christmas";
}
?>

<div class="navbar navbar-static-top" style="margin-top: 0px; z-index: 105;">

<div class="navbar-upper" style="z-index:-1;<?=$patty?" background-color:#2d6820 !important;":""?>">
    	<center><a class="imgLink" href="<?=$url?>"><img class="topPic" src="../../../../../../assets/inc/Banner<?=$banner_extra?>.png" width="320px" height="20px"/></a></center>
</div>

	<div class="navbar-inner">

		<div class="container" nav="1">

  			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

    			<span class="icon-bar"></span>

    			<span class="icon-bar"></span>

    			<span class="icon-bar"></span>

  			</a>

				<a class="brand" href="/">Cedar High School</a>

			<div class="nav-collapse">

				<ul class="nav">

  					<li <?php if ($thisPage=="home") echo " class=\"active\""; ?>><a href="/">Home</a></li>

  					<li <?php if ($thisPage=="students") echo " class=\"active\""; ?>><a href="/student.php">Students</a></li>

  					<li <?php if ($thisPage=="parents") echo " class=\"active\""; ?>><a href="/parents.php">Parents</a></li>

          	<li <?php if ($thisPage=="faculty") echo " class=\"active\""; ?>><a href="/faculty/">Faculty</a></li>

          	<li <?php if ($thisPage=="gallery") echo " class=\"active\""; ?>><a href="<?=$url?>slideshow2017">Photos</a></li>

      	    <li <?php if ($thisPage=="ICSD") echo " class=\"active\""; ?>><a href="//irondistrict.org/"target="_blank">ICSD</a></li>
                    
		       	<li <?php if ($thisPage=="counseling") echo " class=\"active\""; ?>><a href="../../counseling/index.php">Counseling</a></li>
		        
		        <li <?php if ($thisPage=="Sponsors") echo " class=\"active\""; ?>><a href="../../Sponsors.php">Sponsors</a></li>
		        
		        <li <?php if ($thisPage=="Teens") echo " class=\"active\""; ?>><a href="../../teens.php">Teens</a></li>
        
            <li <?php if ($thisPage=="Mission") echo " class=\"active\""; ?>><a href="../../mission.php">Mission</a></li>
            
            <?php if(isset($_SESSION['game_username'])){ ?>
            <li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					      <img src="https://api.adorable.io/avatars/285/<?=$guser['username']?>.png" id="icon_img" style="max-width: 15px;" class="img-circle">&nbsp;<?=$guser['username']?>
					      <b class="caret"></b>
					    </a>
					    <style>
					    	.dropdown-menu a {
					    		color: black;
					    	}
					    </style>
					    <ul class="dropdown-menu">
								<li><a href="<?=$url?>game/">Dashboard</a></li>
								<li><a href="<?=$url?>game/feed.php">Feed</a></li>
								<li><a href="<?=$url?>game/suggest.php">Make Suggestion</a></li>
								<?php if($cuser['gamedev'] == 1){ ?>
								<li><a href="<?=$url?>game/suggestions.php">Suggestions</a></li>
								<li><a href="<?=$url?>game/players.php">Players</a></li>
								<li><a href="<?=$url?>game/codes.php">Codes</a></li>
								<li><a href="<?=$url?>game/logins.php">Logins</a></li>
								<li><a href="<?=$url?>game/hints.php">Hints</a></li>
								<?php } ?>
								<li class="divider"></li>
								<li><a href="<?=$url?>game/faq.php">FAQ</a></li>
								<li><a href="<?=$url?>game/logout.php">Log Out</a></li>
					    </ul>
					  </li>
            <?php } ?>
            
            <?php if(isset($_SESSION['username'])){ 
            
            if($cuser['tasks']) {
            	$tks = $mysqli->query("SELECT * FROM `todo` WHERE `done`=0 AND `assigned_to`=".$cuser['id'])->num_rows;
            }else{
            	$tks = 0;
            }
            if($cuser['messages']) {
            	$msg = $mysqli->query("SELECT * FROM `msg` WHERE `read`=0 AND `to`=".$cuser['id'])->num_rows;
            }else{
            	$msg = 0;
            }
            if($cuser['bugger']) {
            	$rps = $mysqli->query("SELECT * FROM `reports` WHERE `done`=0")->num_rows;
            }else{
            	$rps = 0;
            }
            $ttl = $tks + $rps + $msg;
            
            ?>
            <li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					      <i class="fa fa-user"></i> <?=$cuser['username']?><?=($ttl > 0)?" <span class='badge'>".$ttl."</span>":""?>
					      <b class="caret"></b>
					    </a>
					    <style>
					    	.dropdown-menu a {
					    		color: black;
					    	}
					    	.dropdown-menu a .fa {
					    		width: 13px;
					    	}
					    </style>
					    <ul class="dropdown-menu">
					      <?php if($cuser['edit'] == 1){ ?>
								<li><a href="<?=$url?>db/dash.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
								<?php } ?>
					      <?php if($cuser['edit'] == 1){ ?>
								<li><a href="<?=$url?>db/"><i class="fa fa-pencil"></i> Editor</a></li>
								<?php } ?>
								<?php if($cuser['bugger'] == 1){ ?>
								<li><a href="<?=$url?>db/reports.php"><i class="fa fa-info-circle"></i> Reports<?=($rps > 0)?" <span class='badge'>".$rps."</span>":""?></a></li>
								<?php } ?>
								<?php if($cuser['tasks'] == 1){ ?>
								<li><a href="<?=$url?>db/tasks.php"><i class="fa fa-check"></i> Tasks<?=($tks > 0)?" <span class='badge'>".$tks."</span>":""?></a></li>
								<?php } ?>
								<?php if($cuser['edit'] == 1){ ?>
								<li><a href="<?=$url?>db/vars.php"><i class="fa fa-microchip"></i> Variables</a></li>
								<?php } ?>
								<?php if($cuser['edit'] == 1){ ?>
								<li><a href="<?=$url?>db/areas.php"><i class="fa fa-window-maximize"></i> Areas</a></li>
								<?php } ?>
								<?php if($cuser['notes'] == 1){ ?>
								<li><a href="<?=$url?>db/notes.php"><i class="fa fa-sticky-note"></i> Notes</a></li>
								<?php } ?>
								<?php if($cuser['banners'] == 1){ ?>
								<li><a href="<?=$url?>db/banners.php"><i class="fa fa-picture-o"></i> Banners</a></li>
								<?php } ?>
								<?php if($cuser['messages'] == 1){ ?>
								<li><a href="<?=$url?>db/messages.php"><i class="fa fa-envelope"></i> Messages<?=($msg > 0)?" <span class='badge'>".$msg."</span>":""?></a></li>
								<?php } ?>
								<?php if($cuser['announcer'] == 1){ ?>
								<li><a href="<?=$url?>db/announcer.php"><i class="fa fa-bullhorn"></i> Announcer</a></li>
								<?php } ?>
								<?php if($cuser['admin'] == 1){ ?>
								<li><a href="<?=$url?>db/activities.php"><i class="fa fa-clock-o"></i> Activity</a></li>
								<?php } ?>
								<?php if($cuser['admin'] == 1){ ?>
								<li><a href="<?=$url?>db/users.php"><i class="fa fa-users"></i> Users</a></li>
								<?php } ?>
								<li><a href="<?=$url?>db/preps.php"><i class="fa fa-user-o"></i> Preps</a></li>
								<?php if($cuser['admin'] == 1){ ?>
								<li><a href="<?=$url?>adminer.php?username=chscyberweb" target="_blank"><i class="fa fa-database"></i> DB Admin</a></li>
								<?php } ?>
								<li><a href="http://chsdev.irondistrict.org/db" target="_blank"><i class="fa fa-terminal"></i> Dev Site</a></li>
								<li class="divider"></li>
								<li><a href="<?=$url?>db/passreset.php"><i class="fa fa-key"></i> Reset Password</a></li>
								<li><a href="<?=$url?>db/logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
					    </ul>
					  </li>
            <?php } ?>
                   
				</ul>

		  </div><!--/.nav-collapse -->

		</div>

	</div>

</div>

<div class="spacer"></div>
<!--/navbar.php -->
<style>
	.cd-top {
	  display: inline-block;
	  height: 40px;
	  width: 40px;
	  position: fixed;
	  bottom: 40px;
	  right: 10px;
	  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
	  /* image replacement properties */
	  overflow: hidden;
	  text-indent: 100%;
	  white-space: nowrap;
	  background: rgba(153, 0, 0, 0.8) url(/assets/inc/cd-top-arrow.svg) no-repeat center 50%;
	  visibility: hidden;
	  opacity: 0;
	  -webkit-transition: opacity .3s 0s, visibility 0s .3s;
	  -moz-transition: opacity .3s 0s, visibility 0s .3s;
	  transition: opacity .3s 0s, visibility 0s .3s;
	}
	.cd-top.cd-is-visible, .cd-top.cd-fade-out, .no-touch .cd-top:hover {
	  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
	  -moz-transition: opacity .3s 0s, visibility 0s 0s;
	  transition: opacity .3s 0s, visibility 0s 0s;
	}
	.cd-top.cd-is-visible {
	  /* the button becomes visible */
	  visibility: visible;
	  opacity: 1;
	}
	.cd-top.cd-fade-out {
	  /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
	  opacity: .5;
	}
	.no-touch .cd-top:hover {
	  background-color: #e86256;
	  opacity: 1;
	}
	@media only screen and (min-width: 768px) {
	  .cd-top {
	    right: 20px;
	    bottom: 20px;
	  }
	}
	@media only screen and (min-width: 1024px) {
	  .cd-top {
	    height: 60px;
	    width: 60px;
	    right: 30px;
	    bottom: 30px;
	  }
	}
</style>

<script>
	$(function(){
		// browser window scroll (in pixels) after which the "back to top" link is shown
		var offset = 300,
			//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
			offset_opacity = 1200,
			//duration of the top scrolling animation (in ms)
			scroll_top_duration = 700,
			//grab the "back to top" link
			$back_to_top = $('.cd-top');
	
		//hide or show the "back to top" link
		$(window).scroll(function(){
			( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
			if( $(this).scrollTop() > offset_opacity ) { 
				$back_to_top.addClass('cd-fade-out');
			}
		});
	
		//smooth scroll to top
		$back_to_top.on('click', function(event){
			event.preventDefault();
			$('body,html').animate({
				scrollTop: 0 ,
			 	}, scroll_top_duration
			);
		});
	
	});
</script>

<a href="#0" class="cd-top">Top</a>
<script>
		if (screen.width > 1024) {
			var lastScrollTop = 0;
		// $(window).scroll(function(event){
		//   var st = $(this).scrollTop();
		//   if (st > lastScrollTop){
		// 	   console.log('scroll down');
		// 	   $(".navbar-upper").css("display", "none");
		// 	   $(".navbar-inner").css("background-color", "#750909");
		// 	   $(".derek").css("color", "#750909");
		//   } else {
		// 	  console.log('scroll up');
		// 	  $(".navbar-upper").css("display", "block");
		// 	  $(".navbar-inner").css("background-color", "#000000");
		// 	  $(".derek").css("color", "#000000");
		//   }
		//   lastScrollTop = st;
		// });
		}
		$(function() {
			$('a').filter(function() {
			   return this.hostname && this.hostname !== location.hostname;
			}).attr("target","_blank");
			
			$('a[href^=mailto]').on("click", function() {
				prompt("Copy this email address:",$(this).attr("href").replace(/mailto:/,""));
				return false;
			});
			
			$("title").text("Cedar High School<?=($ttl > 0)?" (".$ttl.")":""?>");
		});
</script>