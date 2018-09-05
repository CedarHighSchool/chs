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

          				<h3>Gallery <?php echo "// Year $year Quarter $quarter"; ?></h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
								<div class="imglabel">123</div>
                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

                            </a>

                        </li>
                        
                        <li class="span2">

                            <a href="./path_to_img" class="thumbnail">

                                <img src="./Q1_09-10.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">123</div>

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

