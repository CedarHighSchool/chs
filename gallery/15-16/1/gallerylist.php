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
a.thumbnail { height: 102px; }
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

          				<h3>2015 Quarter 1</h3>

           			</div>
                                       <ul class="thumbnails">
                       
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2015_16/qa92215/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2015_16/qa92215/content/images/thumb/DSC_0483.jpg" width="130" height="87" alt=""><div class="imglabel">Queen's Assembly</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2015_16/homecoming2015/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2015_16/homecoming2015/content/images/thumb/DSC_2166.jpg" width="130" height="87" alt=""><div class="imglabel">Homecoming Dance</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2015_16/powderpuff92115/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/ppuff/content/images/thumb/DSC_0105.jpg" width="130" height="87" alt=""><div class="imglabel">Powderpuff</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2015_16/spiritnight92315/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2014_15/sn/content/images/thumb/DSC_4823.jpg" width="130" height="87" alt=""><div class="imglabel">Spirit Night</div></a></li>
                                
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

