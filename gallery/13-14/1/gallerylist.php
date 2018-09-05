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

							$year = "13-14";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>2013 Quarter 1</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2013_14/reg2013/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/reg2013/content/images/thumb/DSC_0149.jpg" width="160px" height="200px" alt=""><div class="imglabel">Registration</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2013_14/spirit_night/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/spirit_night/content/images/thumb/DSC_0966.jpg" width="160px" height="200px" alt=""><div class="imglabel">Spirit Night</div></a>
                        </li>
                        <li class="span2">

                            <a href="../../../Slideshows_2013_14/whitewashingthec/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/whitewashingthec/content/images/thumb/DSC_5377.jpg" width="160px" height="200px" alt=""><div class="imglabel">White-washing the 'C'</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2013_14/homecoming dance 2/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/homecoming dance 2/content/images/thumb/DSC_8171.jpg" width="160px" height="200px" alt=""><div class="imglabel">Homecoming</div></a>
                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2013_14/powderpuff/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/powderpuff/content/images/thumb/DSC_4329.jpg" width="160px" height="200px" alt=""><div class="imglabel">Powder Puff</div></a>
                        </li>
                        <li class="span2">

                            <a href="../../../Slideshows_2013_14/queens_assembly/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/queens_assembly/content/images/thumb/DSC_5328.jpg" width="160px" height="200px" alt=""><div class="imglabel">Queens Assemly</div></a>
                        </li>
                        
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

