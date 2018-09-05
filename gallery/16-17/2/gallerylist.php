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

							$year = "16-17";

							$quarter = "1";

                        }

                    }

                ?>

                

   			  <div class="span9">		

       			<div class="well">

          				<h3>2016 Quarter 2</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="JekyllHyde/index.html" class="thumbnail">
							<img src="JH_thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Jekyll & Hyde</div></a><li class="span2">
                          
                          <a href="RBMile/index.html" class="thumbnail">
       					 <img src="RBmile.jpg" width="130px" height="87px" alt=""><div class="imglabel">RootBeer Mile</div></a></li><li class="span2">
                            <a href="PinkChristmas/index.html" class="thumbnail">
       					 <img src="PinkChristmas_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Freedom Assembly</div></a></li><li class="span2">     
                            <a href="FreedomAssembly/index.html" class="thumbnail">
       					 <img src="Freedom_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Pink Christmas</div></a></li><li class="span2">    
                            <a href="BasketballRuckus/index.html" class="thumbnail">
       					 <img src="Ruckus_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Ruckus</div></a></li><li class="span2">
                         	
                                
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

