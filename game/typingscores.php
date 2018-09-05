<?php
session_start();
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
?>
<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      <?php if(false){ ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Snowstorm/20131208/snowstorm-min.js"></script>
      <script>
      snowStorm.flakesMaxActive = 96;
      snowStorm.followMouse = false;
      </script>
      <?php } ?>
      <?php include("../assets/inc/headtag.php"); ?>
      <style>
				.imglabel {
					font-size: 12px;
				}
         
				@media (min-width: 768px) and (max-width: 979px) {
					.imglabel {
						font-size: 40px;
					}
				}
				.scoreboard img {
					max-width: 300px !important;
					width: 40px;
					height: 40px;
					padding-top: 0px;
					margin-top: -10px;
				}
				.scoreboard {
					font-size: 200% !important;
				}
				.scoreboard a {
					color: black;
					text-decoration: none;
					cursor: default;
				}
				.scoreboard td {
					padding-bottom: 0px;
					padding-top: 10px;
				}
				.scoreboard tr:nth-child(1) {
					font-weight: bold;
				}
				.table th, .table td {
         	  padding: 10px !important;
         	}
      </style>
      
   </head>
   
   <body>
      
      
      <!-- Let the container begin! -->
      
      <div class="container">
      
      <div class="row">
      
      <div class="span12">	
         <div class="well">
            <h1>Typing Scoreboard</h1>
         </div>
      </div>
      <style>
         #heyy h6 {
            color: black;
         }
      </style>
      <script>
      	$(function() {
      		function reload() {
      			$.get( "typescores.php?live=1", function( data ) {
						  $("#heyy").html(data);
						});
      		}
      		setInterval(reload, 1000);
      	})
      </script>
      <div class="span12">
         <div class="well" id="heyy">
            <?php include("typescores.php"); ?>
         </div><!--well-->
      </div><!--span3-->
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
         .btn-account h4 {
            color: #ffffff !important;
         }
      </style>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

