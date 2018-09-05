<?php $thisPage="home" ; ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Cedar High School</title>

    <?php include( "../assets/inc/headtag.php") ?>
    <style type="text/css">
        <!-- .style9 {
            color: #990000
        }
        .style10 {
            font-size: 24px
        }
        .style12 {
            font-size: 13px;
            color: #333333;
        }
        .style13 {
            font-size: 18px
        }
        .style14 {
            font-size: 24px;
            font-weight: normal;
        }
        .hr2 {
            width: 50%;
        }
        -->
    </style>
</head>

<body>

    <?php include( "../assets/inc/navbar.php") ?>

    <!-- Let the container begin! -->
<script>
	$(function () {
		  $('.slideshow div').hide(); // hide all slides
		  $('.slideshow div:first-child').show(); // show first slide
		  setInterval(function () {
		    $('.slideshow div:first-child').fadeOut(500)
		    .next('div').fadeIn(1000)
		    .end().appendTo('.slideshow');
		  }, 3000); // slide duration
		});
</script>
<style>
	.slideshow { position: relative; }
	.slideshow div.well { position: absolute; width: 100%; }
</style>
    <div class="container">
        <div class="row">

					<div class="row-fluid">

					  <div class="span12 slideshow">
                        
						    <!--align-->
							<?php
							$link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
							if(!$link){
								echo mysqli_error($link);
							}
							$stuff = mysqli_query($link, "SELECT * FROM `homepage` ORDER BY `order` ASC");
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
                        
            </div>
    		</div>

    </div>
    <!--/row-fluid -->
    

    </div>
    <!-- /container -->

    <!-- Yummy JavaScrips

    	================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="//chs.ironk12.org/assets/js/jquery.js"></script>

    <script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>

    <script src="//chs.ironk12.org/assets/js/bootstrap-carousel.js"></script>
</body>

</html>