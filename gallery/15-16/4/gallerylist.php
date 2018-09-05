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

          				<h3>2016 Quarter 4</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2"><a href="../../../Slideshows_2015_16/freedomassembly1516/index.html" class="thumbnail"> <img src="../../../Slideshows_2015_16/freedomassembly1516/content/images/thumb/DSC_0389.jpg" width="160px" height="200px" alt=""><div class="imglabel">Freedom Assembly</div></a></li>
                                
                               <li class="span2"><a href="../../../Slideshows_2015_16/StudGovAss1516/index.html" class="thumbnail"> <img src="../../../Slideshows_2015_16/StudGovAss1516/content/images/thumb/DSC_0548.jpg" width="160px" height="200px" alt=""><div class="imglabel">Student Gov. Assembly</div></a></li>
                                
                               <li class="span2"><a href="../../../Slideshows_2015_16/nationalhonorsociety/index.html" class="thumbnail"> <img src="../../../Slideshows_2015_16/nationalhonorsociety/content/images/thumb/DSC_1000.jpg" width="160px" height="200px" alt=""><div class="imglabel">National Honor Society</div></a></li>
								
								<li class="span2"><a href="../../../Slideshows_2015_16/tvss1516/index.html" class="thumbnail"> <img src="../../../Slideshows_2015_16/tvss1516/content/images/thumb/DSC_0269.jpg" width="160px" height="200px" alt=""><div class="imglabel">Teachers vs Students</div></a></li>
								
								<li class="span2">

                           <a href= "../../../Slideshows_2015_16/Graduation2016/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2015_16/Graduation2016/content/images/thumb/DSC_8832.jpg" width="130" height="87" alt="">
                                <div class="imglabel">Graduation 2016</div></a></li>
                                
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

