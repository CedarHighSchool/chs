<?php $thisPage="gallery"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../../assets/inc/navbar.php") ?>

			<style type="text/css">
a.thumbnail { height: 130px; }
</style>
	

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../../../assets/inc/navlist.php") ?>



                <?php

                    if(isset($_GET)) {

                        if (isset($_GET['year']) && isset($_GET['quarter'])) {

							$year = $_GET['year'];

							$quarter = $_GET['quarter'];

                        }else {

							$year = "12-13";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>2012 Quarter 1</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/back_to_School_Assembly_2012/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/back_to_School_Assembly_2012/content/images/thumb/DSC_1044.jpg" width="160px" height="200px" alt="">
								<div class="imglabel">Back to School Assembly</div></a>                      </li>
                        
                        <li class="span2">
<a href="../../../slideshows_2012_13/back_to_school_bash_2012/index.html" class="thumbnail">
                              <img src="../../../slideshows_2012_13/back_to_school_bash_2012_take2/content/images/thumb/DSC_9737.jpg" width="160px" height="200px" alt="">
<div class="imglabel">Back to School Bash</div></a>
                      </li>
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/band_Labor_Day_Parade2012/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/band_Labor_Day_Parade2012/content/images/thumb/DSC_4323.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Band Labor Day Parade</div></a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/homecoming_dance_2012/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/homecoming_dance_2012/content/images/thumb/DSC_0019.jpg" alt="" width="160px" height="200px">
                                <div class="imglabel">Homecoming Dance 2012</div>

                          </a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/homecoming_queensAssembly_2012/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/homecoming_queensAssembly_2012/content/images/thumb/DSC_4941.jpg" alt="" width="160px" height="200px">
                                <div class="imglabel">Homecoming Queen Assembly</div>
                          </a>                      </li>
                        
                        <li class="span2">

                            <div align="center"><a href="../../../slideshows_2012_13/homecoming_spirit_night_2012/index.html" class="thumbnail">
                              
                              <img src="../../../slideshows_2012_13/homecoming_spirit_night_2012/content/images/thumb/DSC_6238.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Spirit Night</div></a></div>
                      </li>
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/Homecoming_whiteWashingC_9-26-21/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/Homecoming_whiteWashingC_9-26-21/content/images/thumb/DSC_5282.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">White Washing the "C"</div>
                          </a>                      </li>
                        
                        <li class="span2"><a href="../../../slideshows_2012_13/pep_rally_10_11_12/index.html" class="thumbnail">

                            <img src="../../../slideshows_2012_13/pep_rally_10_11_12/content/images/thumb/DSC_7361.jpg" width="160px" height="200px" alt="">
                            <div class="imglabel">Pep Rally 10-11-12</div>
                          </a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/homecoming_powderpuff_2012/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/homecoming_powderpuff_2012/content/images/thumb/DSC_4854.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Powderpuff</div>
                          </a>                      </li>
                        
                        <li class="span2"></li>
                    </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                                Go <a href="http://chs.ironk12.org/gallery/">back</a>.

                                <!--<ul class="thumbnails">

                                    <li class="span2">

                                        <a href="./gallerylist.php?year=1213&quarter=1" class="thumbnail">

                                            <img src="../assets/img/logo.png" width="160px" height="200px" alt="">

                                        </a>

                                    </li>

                                </ul>/-->

                            </div>

                        </div>

                	</div>
           		</div><!--/teacher grid --> 
			</div><!--/row-->



      		<?php include("../../../assets/inc/footer.php") ?>
            
        </div><!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="../../../assets/js/jquery.js"></script>

    	<script src="../../../assets/js/bootstrap.js"></script>

    	

  	</body>

</html>

