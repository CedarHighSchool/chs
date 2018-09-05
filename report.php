<?php $thisPage="home"; ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <title>Cedar High School</title>

        <?php include("assets/inc/headtag.php") ?>
        <style type="text/css">
            <!-- .style9 {
                color: #990000
            }
            
            .style10 {
                font-size: 24px
            }
            
            .style12 {
                font-size: 13px;
                color: #333333;
            }
            
            .style13 {
                font-size: 18px
            }
            
            .style14 {
                font-size: 24px;
                font-weight: normal;
            }
            
            .hr2 {
                width: 50%;
            }
            
            -->
        </style>
    </head>

    <body>
			
			<?php include("assets/inc/navbar.php") ?>
			
			<!-- Let the container begin! -->
			
			<div class="container">
				<div class="row">
					
					<?php include("assets/inc/navlist.php") ?>
					<span class="span9">
						
						<!-- Begin content below slideshow -->
						
						<div class="row-fluid">
						<script>
						$(document).ready(function(){
							$("#submitBtn2").click(function() {
								$.post( "/sendrequest.php", { email: $("#inputEmail2").val(), name: $("#inputName2").val(), type: $("#inputType2").val(), desc: $("#inputDesc2").val() })
								  .done(function( data ) {
								    if(data == "true"){
								    	alert_success("<b>Thank you!</b> Your message has been sent!");
								    	$("#submitBtn2").hide();
								    }else{
								    	alert_error( data );
								    }
								  });
								  return false;
							});
							$("#success-closer2").click(function() {
								$("#success-alert2").hide();
								return false;
							});
							$("#error-closer2").click(function() {
								$("#error-alert2").hide();
								return false;
							});
							function alert_success( text ) {
								$("#success-text2").html(text);
								$("#success-alert2").show();
							}
							function alert_error( text ) {
								$("#error-text2").html(text);
								$("#error-alert2").show();
							}
						});
						</script>
							<div class="well">
								<h3>Contact an Admin</h3>
								<p>If you have a problem, suggestion, or request, fill out the form below. We'll take care of it as soon as we can!</p><br>
								<div class="alert alert-success" id="success-alert2" style="display:none;">
								  <button type="button" class="close" data-dismiss="alert" id="success-closer2">&times;</button>
								  <span id="success-text2"></span>
								</div>
								<div class="alert alert-error" id="error-alert2" style="display:none;">
								  <button type="button" class="close" data-dismiss="alert" id="error-closer2">&times;</button>
								  <span id="error-text2"></span>
								</div>
								<form class="form-horizontal">
								  <div class="control-group">
								    <label class="control-label" for="inputEmail2">Email</label>
								    <div class="controls">
								      <input type="email" id="inputEmail2" required placeholder="Your email address">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputName2">Name</label>
								    <div class="controls">
								      <input type="text" id="inputName2" placeholder="Your name">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputType2">Type</label>
								    <div class="controls">
								      <select id="inputType2">
								      	<option value="0" selected>Problem</option>
								      	<option value="1">Suggestion</option>
								      	<option value="2">Request</option>
								      </select>
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputDesc2">Description</label>
								    <div class="controls">
								      <textarea id="inputDesc2" required placeholder="A description of your request/report"></textarea>
								    </div>
								  </div>
								  <div class="control-group">
								    <div class="controls">
								      <button class="btn" id="submitBtn2">Submit</button>
								    </div>
								  </div>
								</form>
							</div>
						
						</div>
						<!--/row-fluid -->
						
					</span>
					<!--/span9 -->
					
				</div>
				<!--/row -->
				
				<?php include("assets/inc/footer.php") ?>
				
			</div>
			<!-- /container -->
			
			<!-- Yummy JavaScrips
			
			================================================== -->
			
			<!-- Placed at the end of the document so the pages load faster -->
			
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
			
			<script src="//chs.ironk12.org/assets/js/bootstrap-carousel.js"></script>
    </body>

    </html>