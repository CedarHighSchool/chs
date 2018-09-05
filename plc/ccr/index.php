<?php $thisPage="plc"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../assets/inc/navbar.php") ?>
        
        <?php include("../../assets/inc/navlist.php") ?>

    	<!-- Let the container begin! -->

		<div class="container">
        
			<div class="row">
            
			 	<div class="span9">		

       			 	<div class="well">
                  
                  		<h3>CCR</h3>

       				</div><!--well-->
                 

       		  </div><!--span9-->
              
	   			<div class="span9">

	   				<div class="row-fluid">
                    
                    	<div class="span8">
                            
                            <img class="ignore" style="border: 2px solid black;
            									border-radius: 30px;
            									-moz-border-radius: 30px;
            									-khtml-border-radius: 30px;
            									-webkit-border-radius: 30px;
												height:698px; width:796px;
                                                margin-left: 40px;"
                         	src="CCRNavPic.png" usemap="#map1"/>

							<map name="map1">
								<area shape="circle" coords="110, 110, 100" href="identify.php">
                      			<area shape="circle" coords="400, 100, 100" href="referral.php">
                       			<area shape="circle" coords="685, 110, 100" href="ier_form.php">
                       			<area shape="circle" coords="260, 325, 100" href="https://ps.irondistrict.org/admin/pw.html">
								<!--<area shape="circle" coords="540, 330, 100" href="blank">
								<area shape="circle" coords="120, 590, 100" href="blank">
								<area shape="circle" coords="400, 606, 100" href="blank">
								<area shape="circle" coords="685, 610, 100" href="blank">-->
             				</map>
                            
                        </div><!--span8-->
                        
   						</div><!--row-fluid-->
                        
                        </div><!--span9-->
                        
					</div><!--/row-->
                    
      				<!-- Begin content below slideshow -->

      		<?php include("../../assets/inc/footer.php") ?>
            
    	</div> <!-- /container -->
        
    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="../../assets/js/jquery.js"></script>

    	<script src="../../assets/js/bootstrap.js"></script>

    	<script src="../../assets/js/bootstrap-carousel.js"></script>
        
  	</body>

</html>

