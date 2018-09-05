<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      
      <?php include("../assets/inc/headtag.php") ?>
      <style>
         .imglabel {
         font-size: 12px;
         }
         
         @media (min-width: 768px) and (max-width: 979px) {
         .imglabel {
         font-size: 40px;
         }
         }
      </style>
      
   </head>
   
   <body>
      
      <?php include("../assets/inc/navbar.php") ?>
      
      
      <style type="text/css">
      a.thumbnail { height: 205px; }
      </style>
      
      <!-- Let the container begin! -->
      
      <div class="container">
      
      <div class="row">
      
      
      
      <?php include("../assets/inc/navlist.php") ?>
      
      
      
      <div class="span9">	
         <div class="well">
            <h1>The Hunt Begins!</h1>
         </div>
      </div>
      <div class="span6">
         <div class="well">
            <hr> 
            <center><h1 class="animated tada">Congratulations!</h1>
            <h4><p>                        
            <hr>
            <p>You found the first easter egg!</p>
            <p>There is a new game happening in Cedar High School!</p>
            </center></h4>
            <p>Inspired from the book "Ready Player One" Josh A. and Kirby M. have created a competition to find easter eggs, and perform tasks. You need to create your account by clicking <a href="/game/register.php">here</a>! 
            The scoreboard will be visible live to all those who wish to keep track in Mr. Swallow's room. All game elements can be found at Cedar High School.</p>
            </p>
            <p></p>
            <p><h2><center>Prize!</h2></p></center>
            <p><center>The prize for winning this treasure hunt will be:</p>
            <p><b>1. $50 Amazon Gift Card</p>
            <p>2. Custom 3D printed trophy with your name on it</center></p></b>
            <center>
            <p><H2>First Clue</H2></p>
            <p>Go where the knowledge is kept</p>
            <p>Where minds are enlightened</p>
            <p>And where silence abounds</p>
            <p>158.1</p>
            </center>
             <hr>
      <center>
        <a href="faq.php">Frequently Asked Questions</a>
      </center>
         </div><!--well-->
      </div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("options.php"); ?>
         </div>
      </div>
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
      <div class="span3">
         <div class="well">
            <?php include("scores.php"); ?>
         </div>
      </div>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

