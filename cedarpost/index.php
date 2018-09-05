<?php $thisPage="cedarpost"; ?>

<!DOCTYPE html>

<html lang="en">

<head>

<title>Cedar High School - Cedar Post</title>

<?php include("../assets/inc/headtag.php") ?>

</head>

<body>

  <?php include("../assets/inc/navbar.php") ?>

  <div class="container">
    <div class="row">
      <?php include("../assets/inc/navlist.php") ?>

      <div class="span9">
        <div class="well">
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post</h2>
        </div>
        <a href="Cedar Fights Against Cancer.pdf"><img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" /></a>
      </div>


      <div class="span6">
      
      	<div class="well">
        	<p class="pull-left"><strong>Editor-in-Chief:</strong> Bobbe</p>
            <p class="pull-right"><strong>Assistant Editors:</strong> Tayson and Rachel</p>
        </div>
        <div class="well"> 
          <p><a href="Bilingual Service.pdf"><img src="Bilingual Service Link Pic by Mrs. King.JPG" width="100%" height="495px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" /></a>
          </p>
          <center>
            <p><a href="Bilingual Service.pdf">Bilingual Service Link</a></p></center>
        </div>
        <div class="well"> 
          <p><a href="Leaders For Life.pdf"><img src="Leaders For Life Link Pic by Mrs. Palmer.jpeg" width="100%" height="495px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" /></a>
          </p>
          <center>
            <p><a href="Leaders For Life.pdf">Leaders for Life</a></p></center>
        </div>
      </div>

      <div class="span3">
        <div class="well">
          <ul class="nav nav-list">
            <li <?php if($thisPage=="cedarpost") echo "class='active'";?>><a href="index.php">Home</a></li>
            <li><a href="./academics.php">Academics</a></li>
            <li><a href="./activities.php">Activities</a></li>
            <li><a href="./athletics.php">Athletics</a></li>
            <li><a href="./archives.php">Archives</a></li>
            <li><a href="./aroundtown.php">Around Town</a></li>
          </ul>
        </div>
      </div>

    </div>
  
  <?php include("../assets/inc/footer.php") ?>

  </div> <!-- /container -->


<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrap-carousel.js"></script>


</body>

</html>
