<?php $thisPage="";?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cedar High School</title>
    	<?php include("./assets/inc/headtag.php") ?>
        <script src="./assets/js/jquery.js"></script>
  	</head>
  	<body>
		<?php include("./assets/inc/navbar.php") ?>
		
    	<!-- Let the container begin! -->
		<div class="container">
			<div class="row">
				
				<?php include("./assets/inc/navlist.php") ?>
				
				<div class="span9">		
	       			<div class="well">
          				<h3>Custodial Survey</h3>
           			</div>
         		</div>
				
	   			<div class="span9">
	   				<div class="row-fluid">
                    	<div class="span8">
			       			<div class="well">
		           				<p><iframe id="emailFrame" src="https://spreadsheets.google.com/embeddedform?formkey=dFJZNHp1aExScVB4N3BFbzV5XzRGQ0E6MA" width="540" height="1100" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
		           				</p>
           					</div>
                       	</div><!--span6-->
   						
	   					<!--/slideshow -->
                        
                        <?php include("assets/inc/stuparnav.php") ?>
                        
                  	</div><!--row-fluid-->
	       			
	   			</div><!--/span9-->
                
   			</div><!--/row -->

      		<?php include("./assets/inc/footer.php") ?>

    	</div> <!-- /container -->

    	<!-- Yummy JavaScrips
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="./assets/js/bootstrap.js"></script>
    	<script src="./assets/js/bootstrap-carousel.js"></script>

  	</body>
</html>
