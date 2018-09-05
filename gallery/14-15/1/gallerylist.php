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

          				<h3>2014 Quarter 1</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2014_15/Back_to_School_Bash14/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/Back_to_School_Bash14/content/images/thumb/DSC_9323.jpg" width="130" height="87" alt=""><div class="imglabel">Back to School Bash</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2014_15/Welcome_Back_Assembly" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/Welcome_Back_Assembly/content/images/thumb/DSC_9532.jpg" width="130" height="87" alt=""><div class="imglabel">Welcome Back Assembly</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2014_15/hc/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/hc/content/images/thumb/DSC_7377.jpg" width="130" height="87" alt=""><div class="imglabel">Homecoming Dance</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2014_15/ppuff/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/ppuff/content/images/thumb/DSC_0105.jpg" width="130" height="87" alt=""><div class="imglabel">Powderpuff</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2014_15/sn/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/sn/content/images/thumb/DSC_4823.jpg" width="130" height="87" alt=""><div class="imglabel">Spirit Night</div></a></li>
                                
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

