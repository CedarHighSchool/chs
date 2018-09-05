<?php $thisPage="cpactivities"; ?>

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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Activities</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
          <img src="activities/Gatsby Link Pic by Ms. B.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="activities/Gatsby.pdf" style="font-size: 18px;">Gatsby</a>
			<hr />
            <img src="activities/Hurricane Fantasy Art Link Pic by Mr Wainwright.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="activities/Hurricane Fantasy Art Competition.pdf" style="font-size: 18px;">Hurricane Fantasy</a>
			<hr />
            <img src="activities/Make Me A Match link pic by Mrs. Howe.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="activities/Make Me A Match.pdf" style="font-size: 18px;">Make Me a Match</a>
			<hr />
          <img src="activities/Battle of the Sexes Link Pic by Bobbee R.jpg"  style="margin-right: 25px3; width: 150px; height: 100px" /> <a href="activities/Battle of the Sexes/The Struggle is Real.pdf" style="font-size: 18px;">The Struggle is Real</a>
		  <hr />
          <img src="activities/Souper Bowl/Souper Bowl Link Pic by Ms. B.JPG"  style="margin-right: 25px3; width: 150px; height: 100px" /> <a href="activities/Souper Bowl/Souper Bowl.pdf" style="font-size: 18px;">Souper Bowl</a>
		  <hr />
          <img src="activities/Sweethearts Dance/Faithfully Link Pic by Ms. B.JPG"  style="margin-right: 25px3; width: 150px; height: 100px" /> <a href="activities/Sweethearts Dance/Faithfully.pdf" style="font-size: 18px;">Faithfully</a>
		  <hr />
        </div>
      </div>

      <div class="span3">
        <div class="well">
          <ul class="nav nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="./academics.php">Academics</a></li>
            <li <?php if($thisPage=="cpactivities") echo "class='active'";?>><a href="./activities.php">Activities</a></li>
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
