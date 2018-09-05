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

							$year = "16-17";

							$quarter = "1";

                        }

                    }

                ?>

                

   			  <div class="span9">		

	       			<div class="well">

          				<h3>2016 Quarter 1</h3>

           			</div>
                                       <ul class="thumbnails">
                       
                                
                                <li class="span2">

                            <a href="QueensAssembly_16/index.html" class="thumbnail">

                                <img src="QueensAssembly.jpg" width="130" height="87" alt=""><div class="imglabel">Queen's Assembly</div></a></li>
                                
                                <li class="span2">

                            <a href="StudGov_16-17/index.html" class="thumbnail">

                                <img src="StudGov16-17.jpg" width="130" height="87" alt=""><div class="imglabel">Student Gov. 2016-17</div></a></li>
								
								<li class="span2">

                            <a href="PowderPuff_16/index.html" class="thumbnail">

                                <img src="PowderPuff.jpg" width="130" height="87" alt=""><div class="imglabel">Powderpuff</div></a></li>
								
								<li class="span2">

                            <a href="SpiritNight_16/index.html" class="thumbnail">

                                <img src="Spiritnight.jpg" width="130" height="87" alt=""><div class="imglabel">Spirit Night</div></a></li>
                                  <li class="span2">

                            <a href="WhiteWashingtheC_16/index.html" class="thumbnail">

                                <img src="Whitewashing.jpg" width="130" height="87" alt=""><div class="imglabel">White Washing the C</div></a></li>
                                 <li class="span2">

                            <a href="Orchestra_Q1/index.html" class="thumbnail">

                                <img src="Orchestra.jpg" width="130" height="87" alt=""><div class="imglabel">Orchestra</div></a></li>
                                
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

