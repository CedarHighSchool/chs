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

							$year = "14-15";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>2017 Quarter 3</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">
                         <a href="Asyoulikeit/index.html" class="thumbnail">
						  <img src="Asyoulikeit_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">As You Like It</div></a><li class="span2">
                         <a href="../2/SterlingScholor/index.html" class="thumbnail">
       					 <img src="../2/SterScho_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Sterling Scholor</div></a></li><li class="span2"> 
                         	<a href="../2/MoheyReview/index.html" class="thumbnail">
       					 <img src="../2/MoheyReview_Thumb.jpg" width="130px" height="87px" alt="">
       					 <div class="imglabel">Mohey Review</div></a></li><li class="span2">
                         	<a href="../2/MoheyMen/index.html" class="thumbnail">
       					 <img src="../2/MoheyMen_Thumb.jpg" width="130px" height="87px" alt="">
       					 <div class="imglabel">Mohey Men</div></a></li><li class="span2">        
                         	<a href="../../../slideshows_2016_17/Sweethearts/index.html" class="thumbnail">
       					 <img src="Sweethearts_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Sweethearts Dance</div></a></li><li class="span2"> 
                         <a href="MostPreffered/index.html" class="thumbnail">
       					 <img src="MostPreffered_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Most Preffered</div></a></li><li class="span2"> 
                         
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

