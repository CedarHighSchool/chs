<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../assets/inc/headtag.php") ?>
        
        <style>
			.classContainer {
				margin-bottom: 15px;
			}
			.classDetails {
				display: none;
			}
		</style>
</head>

  	<body>

		<?php include("../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">
			<div class="row">

				

				<?php include("../assets/inc/navlist.php") ?>

				

	   			<div class="span9">	

					<div class="row-fluid">

						<div class="span8">
                        	
                       <div class="well">
                            
                       	   <h3>Protective Services</h3>
                                <hr />
                               
                               
                               
       					 <div class="classContainer">
  
  <h4>8372 ­ Law Enforcement—CTPRG001S—SWLW 1001 </h4>
  
  <p>This program is for those students considering a career in law enforcement, criminal justice or public service. Program will consist of coursework in general law enforcement principles including crime awareness, legal issues, the causes of crime, juvenile justice, and the laws of arrest / search / seizures.</p>
  
  <a href="#" class="moreDetails">More Details</a><div class="classDetails"><p>Guest speakers will include area attorneys, corrections officers and representatives from other law enforcement agencies. 
<ul>

<li><strong>Credit(s): </strong>1.0</li>

<li><strong>Grade: </strong>10-12</li>

<li><strong>Fee: </strong>SWATC Registration Fee</li>

<li><strong>Prerequisite:</strong>None</li>
<li><strong>Subject Area: </strong>CTE</li></ul></p></div></div>
                
                	
                     

                	
                          </div>
                        </div>
                        
                          <div class="span4"><div class="well">
                	<ul class="nav nav-list">
                    	<li><a href="swatc_index.php">SWATC</a></li>
                        <li><a href="swatc_comp.php">SWATC Computer Technology</a></li>
                        <li><a href="swatc_cullinary.php">SWATC Cullinary</a></li>
                        <li><a href="swatc_health.php">SWATC Health Science</a></li>
                       <li><a href="swatc_proserv.php">SWATC Protective Services</a></li>
                        <li><a href="swatc_trade.php">SWATC Trade and Industry</a></li>  
                    </ul>
                </div></div>


	   				</div><!--/row-fluid -->

	       			

	   			</div><!--/span9 -->

   			</div><!--/row -->

   			<?php include("../assets/inc/footer.php") ?>



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="../assets/js/jquery.js"></script>

    	<script src="../assets/js/bootstrap.js"></script>

    	<script src="../assets/js/bootstrap-carousel.js"></script>
        
        <script type="text/javascript">
			$(".moreDetails").click(function(e){
				$(this).nextAll(".classDetails").slideToggle('fast', function(){
					
				});
				
				e.preventDefault();
			});
		</script>

  	</body>

</html>
