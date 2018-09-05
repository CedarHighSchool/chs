<?php $thisPage="gallery"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../../assets/inc/navbar.php") ?>

		

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

          				<h3>Gallery // Year 2011-12 Quarter 4</h3>

           			</div>
                    <ul class="thumbnails"><li class="span2">

                        <a href="../../../slideshows_2012_13/graduation2012/index.html" class="thumbnail">

                            <img src="../../../slideshows_2012_13/graduation2012/content/images/thumb/DSC_0005.jpg" width="70px" height="200px" alt="">
                            <div class="imglabel">Graduation </div>
                        </a>

                      </li>
                        
                      <li class="span2">

                            <a href="../../../slideshows_2012_13/graduationDance2012/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/graduationDance2012/content/images/thumb/DSC_0003.jpg" width="70px" height="200px" alt="">
                                <div class="imglabel">Graduation Dance</div>
                      </a>                        </li>
                            
                      <li class="span2">

                            <a href="../../../Slideshows2011_12/Junior_Prom_2012/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Junior_Prom_2012/bin/images/thumb/DSC_8979.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Junior Prom</div>
                      </a>                        </li>
                      
                      <li class="span2">

                            <a href="../../../Slideshows2011_12/Prom _Royalty_ 4.10.12/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Prom _Royalty_ 4.10.12/bin/images/thumb/DSC_0172.jpg" width="160px" alt="">
                                <div class="imglabel">Prom Royalty</div>
                      </a>                        </li>
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

