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
						<img src="Cyber.Corp.jpg">
					</div>
				</div><br />
					  
				<div class="span4">
			   		<div class="well">
			      		<h3>CyberCorps Application</h3>
			      		<p>Want to get involved? Web Services is a class that meets during A2 that builds and maintains the school website. If you're interested, fill out the form below and we will get back to you!</p>
			      	</div>
			      	<div class="well">
			      		<form class="form-horizontal">
			      			
			      			<div class="control-group">	
								<label>Full Name</label>
								<input type="text" class="input-medium" id="input01">
							</div>
							<div class="control-group">	
							    <label>Email</label>
								<input type="text" class="input-medium" id="input01">
							</div>
							<div class="control-group">	
							    <label>Grade</label>
								<input type="text" class="input-medium" id="input01">
							</div>
							<div class="control-group">	
							    <label>Experience</label>
								<textarea style="width: 97%" rows="5" id="Request Details"></textarea>
							</div>
							<button type="submit" class="btn">Submit</button>
						</form>
			    	</div>
				</div>
		           			
				<div class="span3">
				 	
					<div class="well">
						<h5>Advisor</h5>
						<ul class="nav nav-list">
							<li><a href="#">Michelle Taylor</a></li>	
				 		</ul>
				 	</div>
					<div class="well">
					  <h5>Roster</h5>
					  <ul class="nav nav-list">
					      <li>Josh</li>
						  <li>Kirby</li>
						  <li>Rem</li>
						  <li>Eric</li>
						  <li>Dane</li>
				      </ul>
				  </div>
                  <div class="well">
				 		<h5>Pages</h5>
						<ul class="nav nav-list">
							<li><a href="./">Home</a></li>
							<li class="active"><a href="join.php">Apply to Join</a></li>
							<li><a href="request.php">Submit a Request</a></li>
							
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
