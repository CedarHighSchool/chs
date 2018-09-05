<?php $thisPage="gallery"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <title>Cedar High School</title><?php include("../../../assets/inc/headtag.php") ?>
  </head>
  <body>
    <?php include("../../../assets/inc/navbar.php") ?>
    		<style type="text/css">
a.thumbnail { height: 130px; }
</style>
    <!-- Let the container begin! -->
    <div class="container">
    <div class="row">
      <?php include("../../../assets/inc/navlist.php") ?><?php

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
          <h3>2014 Quarter 3</h3>
        </div>
        <ul class="thumbnails">
          <li class="span2">
            <a href="sweeheartsassembly" class="thumbnail">
            <img src="sweetHeartsAssembly.jpg" width="400px" height="360px"
            alt="" ><div class="imglabel">SweetHearts Assembly</div></a>
          </li>
		  <li class="span2">
            <a href="sweetheaarts_dance" class="thumbnail">
            <img src="sweetHeartsDance.jpg" width="400px" height="361px"
            alt="" ><div class="imglabel">SweetHearts Dance</div></a>
          </li>
          <li class="span2">
            <a href="../../../Slideshows_2013_14/battleofthesexes_assembly" class="thumbnail">
            <img src="battleofthesexes_assembly/content/images/large/DSC_4183.jpg" width="447" height="671"
            alt="" ><div class="imglabel">Battle of the Sexes</div></a>
          </li>
          
        </ul>
      </div>
      <!--teacher grid -->
      <div class="row span9">
        <div class="row-fluid">
          <div class="row span9">
            <div class="well">Go 
            <a href="../../index.php?passyear=%3C?php%20echo%20$year;?%3E">back</a>. 
            <!--<ul class="thumbnails">

                                    <li class="span2">

                                        <a href="./gallerylist.php?year=1213&quarter=1" class="thumbnail">

                                            <img src="../assets/img/logo.png" width="160px" height="200px" alt="">

                                        </a>

                                    </li>

                                </ul>/--></div>
          </div>
        </div>
      </div>
      <!--/teacher grid -->
    </div>
    <!--/row-->
    <?php include("../../../assets/inc/footer.php") ?>
    <!-- /container -->
    <!-- Yummy JavaScrips

        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../assets/js/jquery.js"></script> 
    <script src="../../../assets/js/bootstrap.js"></script></div>
  </body>
</html>
