<?php $thisPage="clubs"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cedar High School</title>
    	<?php include("../../assets/inc/headtag.php") ?>
  	</head>
  	<body>
		<?php include("../../assets/inc/navbar.php") ?>
		
    	<!-- Let the container begin! -->
		<div class="container">
			<div class="row">
				
				<?php include("../../assets/inc/navlist.php") ?>
				
	   			<div class="span9">		
	       			<div class="well">
          				<h3><a href="./">CyberCorps</a></h3>
           			</div>
         		</div>
		           	
				<div class="span2">	
					<div class="thumbnail">				      		
						<img src="cyber_corps.jpg">
					</div>
				</div><br />
					  
				<div class="span4">
			    	<div class="well">
			      		<h3>Web Request Form</h3>
			      </div>
			      <div class="well">
			      		<form class="form-horizontal" action="processr.php" method="POST">
			      			<? if(isset($_GET['error'])) { 
								echo $_GET['error'];
							 } ?>
			      			<div class="control-group">	
								<label for="name">Full Name</label>
								<input type="text" class="input-medium" id="name" name="name">
							</div>
							<div class="control-group">	
							    <label for="email">Email</label>
								<input type="text" class="input-medium" id="email" name="email">
							</div>
							<div class="control-group">	
							    <label for="url">Page URL</label>
								<input type="text" class="input-medium" id="url" name="url">
							</div>
							<div class="control-group">	
							    <label for="deets">Request Details</label>
								<textarea style="width: 97%" rows="5" id="deets" name="deets"></textarea>
							</div>
							<button type="submit" class="btn">Submit</button>
						</form>
			    	</div>
				</div>
		           			
				<div class="span3">
				 	
					<div class="well">
						<h5>Advisor</h5>
						<ul class="nav nav-list">
							<li><a href="#">Caleb Swallow</a></li>	
				 		</ul>
				 	</div>
					<div class="well">
					  <h5>Roster</h5>
					  <ul class="nav nav-list">
						  <li>Cat Smith</li>
						  <li>Alex Beraja</li>
						  <li>Charles D.</li>
						  <li>Cal Kurne</li>
						  <li>Kaden Yardley</li>
				      <li>Tyler LeMarr</li>
				      </ul>
				  </div>
                  <div class="well">
				 		<h5>Pages</h5>
						<ul class="nav nav-list">
							<li><a href="./">Home</a></li>
							<li><a href="join.php">Apply to Join</a></li>
							<li class="active"><a href="request.php">Submit a Request</a></li>
				 		</ul>
					</div>
				</div>
			</div><!--/row-->
	       
      		<?php include("../../assets/inc/footer.php") ?>

    	</div> <!-- /container -->

    	<!-- Yummy JavaScrips
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="/assets/js/jquery.js"></script>
    	<script src="/assets/js/bootstrap.js"></script>

  	</body>
</html>
