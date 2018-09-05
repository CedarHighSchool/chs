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

							$year = "11-12";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>Gallery <?php echo "// Year $year Quarter $quarter"; ?></h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/rodeo_Sept_11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/rodeo_Sept_11/bin/images/large/DSC_6380.jpg" width="160" height="190" alt="">
								<div class="imglabel">Rodeo 9-11-11</div>
                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/Rodeo_9.22.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Rodeo_9.22.11/bin/images/large/DSC_6379.jpg" width="160px" height="190px" alt="">
                                <div class="imglabel">Rodeo 9-22-11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/memorial9_11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/memorial9_11/bin/images/large/DSC_5757.jpg" width="160" height="190" alt="">
                                <div class="imglabel">9/11 Memorial</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/Crowd_9_29_11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Crowd_9_29_11/bin/images/large/DSC_8671.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Crowd 9-29-11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/powderPuff_10_3_11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/powderPuff_10_3_11/bin/images/large/DSC_3775.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Powder Puff</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/queens.Assemembly.10.6.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/queens.Assemembly.10.6.11/bin/images/large/DSC_0060.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Queen's Assembly</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/homecomingSpiritNight2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/homecomingSpiritNight2011/bin/images/large/DSC_0184.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Spirit Night</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/homecomingDance2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/homecomingDance2011/bin/images/large/DSC_9279.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Homecoming Dance</div>

                          </a>

                      </li>
                  </ul>
                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/whiteWashingC2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/whiteWashingC2011/bin/images/large/DSC_0341.jpg" width="160" height="200" alt="">
                                <div class="imglabel">White washing &quot;C&quot;</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/scholarshipRun2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/scholarshipRun2011/bin/images/large/DSC_6848.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Homecoming Scholarship Race</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/challengedayphotos/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/challengedayphotos/bin/images/large/110211092513.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Challenge Day</div>

                          </a>

                      </li>
                        
                  
                    </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                                Go <a href="./index.php?passyear=<?=$year;?>">back</a>.

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

