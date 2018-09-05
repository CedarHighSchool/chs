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

							$year = "12-13";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>2013 Quarter 2</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2013_14/sadies/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/sadies/content/images/large/DSC_3223.jpg" width="160px" height="200px" alt=""><div class="imglabel">Sadies</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2013_14/redmen_ruckus/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/redmen_ruckus/content/images/large/DSC_8166.jpg" width="160px" height="200px" alt=""><div class="imglabel">Redmen Ruckus</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2013_14/west_side_story/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/west_side_story/content/images/thumb/DSC_6059.jpg" width="160px" height="200px" alt=""><div class="imglabel">West Side Story</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2013_14/senior_dance/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/senior_dance/content/images/thumb/DSC_8427.jpg" width="160px" height="200px" alt=""><div class="imglabel">Senior Dance</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2013_14/sterling_scholar_assmebly/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/sterling_scholar_assmebly/content/images/thumb/DSC_0056.jpg" width="160px" height="200px" alt=""><div class="imglabel">Sterling Scholar Assembly</div></a></li>
                                
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

