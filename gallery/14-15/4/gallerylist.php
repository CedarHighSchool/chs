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

          				<h3>2015 Quarter 4</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2014_15/newprom/" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/prom/content/images/large/DSC_4316.jpg" width="160px" height="200px" alt=""><div class="imglabel">Prom 2015</div></a></li>
                                
                                
                                
                               <li class="span2">

                            <a href="../../../Slideshows_2014_15/pssp/" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/pssp/content/images/large/unnamed.jpg" width="160px" height="200px" alt=""><div class="imglabel">Parowan Scatec Solar Panels</div></a></li>
                                
                               
                               
                               <li class="span2">

                            <a href="../../../Slideshows_2014_2015/2016nhs1/" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/2016nhs1/content/images/large/DSC_0644.jpg" width="160px" height="200px" alt=""><div class="imglabel">2016 National Honor Society Induction</div></a></li>
                                
                                
								
							<li class="span2">

                            <a href="../../../Slideshows_2014_15/tc51115/" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/tc51115/content/images/large/DSC_9225.jpg" width="160px" height="200px" alt=""><div class="imglabel">Tackle Cancer</div> </a></li> </ul>
                                
                                
                                
 <ul class="thumbnails">                               
								
							<li class="span2">

                            <a href="../../../Slideshows_2014_15/business/" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/business/content/images/large/DSC_3113.jpg" width="160px" height="200px" alt=""><div class="imglabel">How to Succeed in Business Without Trying</div> </a></li>
                                
                                
                                
                                
                                
 
 							<li class="span2">

                            <a href="Graduation_2015/index.html" class="thumbnail">

                                <img src="Graduation_2015/content/images/thumb/DSC_3535.jpg" width="160px" height="200px" alt=""><div class="imglabel">Graduation 2015</div></a></li>                               
                                
                                
                                
                                </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                                Go <a href="../../index.php?passyear=<?php echo $year;?>">back</a>.

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

