<?php $thisPage="cparoundtown"; ?>

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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Around Town</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
		<img src="aroundtown/Slaving Link Pic by Google.jpeg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Slaving Away.pdf" style="font-size: 18px;">Slaving Away</a>
			<hr />
          <img src="aroundtown/Missing Malaysian Plane Link Pic by Google.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/The Missing Malaysian Plane.pdf" style="font-size: 18px;">Missing Malaysian Plane</a>
			<hr />
          <img src="aroundtown/Career Fair/Career Fair Link Pic by Cooper L.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Career Fair/SUU Career Fair.pdf" style="font-size: 18px;">SUU Career Fair</a>
		  <hr />
          <img src="aroundtown/Flappy Bird/Real Death Link Pic by Google.jpeg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Flappy Bird/The Real Death Of Flappy Bird.pdf" style="font-size: 18px;">The Real Death of Flappy Bird</a>
		  <hr />
        </div>
      </div>

      <div class="span3">
        <div class="well">
          <ul class="nav nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="./academics.php">Academics</a></li>
            <li><a href="./activities.php">Activities</a></li>
            <li><a href="./athletics.php">Athletics</a></li>
            <li><a href="./archives.php">Archives</a></li>
            <li <?php if($thisPage=="cparchives") echo "class='active'";?>><a href="./aroundtown.php">Around Town</a></li>
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
