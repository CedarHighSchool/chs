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

							$year = "14-15";

							$quarter = "1";

                        }

                    }

                ?>

                

   			  <div class="span9">		

       			<div class="well">

          				<h3>2015 Quarter 2</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2015_16/boysnextdoor" class="thumbnail">

                                <img src="../../../Slideshows_2015_16/boysnextdoor/content/images/large/DSC_1267.jpg" width="160px" height="200px" alt=""><div class="imglabel">Boys Next Door</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2014_15/ssa" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/ssa/content/images/large/DSC_2267.jpg" width="160px" height="200px" alt=""><div class="imglabel">Soccer Spirit Assembly</div></a></li>
                                
                                <li class="span2">
                                
                               <a href="../../../Slideshows_2014_15/muchado" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/muchado/content/images/large/DSC_6727.jpg" width="160px" height="200px" alt=""><div class="imglabel">Much Ado</div></a></li>
                                
                                <li class="span2">
                                
                                <a href="../../../Slideshows_2014_15/rr" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/rr/content/images/large/DSC_8134.jpg" width="160px" height="200px" alt=""><div class="imglabel">Redmen Ruckus</div></a></li>
                                
                                <li class="span2">          
                          
                            <a href="../../../Slideshows_2014_15/cb3" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/cb3/content/images/large/DSC_9627.jpg" width="160px" height="200px" alt=""><div class="imglabel">Christmas Ball</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2014_15/sterlingscholarassembly" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/sterlingscholarassembly/content/images/large/DSC_2060.jpg" width="160px" height="200px" alt=""><div class="imglabel">Sterling Scholar</div></a></li>
                                 
                                
                                
                                
                                
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

