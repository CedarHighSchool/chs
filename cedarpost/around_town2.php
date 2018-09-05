<?php $thisPage="cparchives"; ?>

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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Around Town Archives</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
        <img src="aroundtown/Food Fight Link Pic by Ms. B.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Food fight.pdf" style="font-size: 18px;">Food Fight</a>
		  <hr />
          <img src="aroundtown/Lori Myers Fundraiser Link Pic by McCall R.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Lori Meyrs Fundraiser.pdf" style="font-size: 18px;">Lori Myers Fundraiser</a>
		  <hr />
          <img src="aroundtown/It's More Than Just Music link picture.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/It’s More Than Just Music by McCall.pdf" style="font-size: 18px;">It's More Than Just Music</a>
		  <hr />
		  <img src="aroundtown/Ribbon Respect Link Pic by Google.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Ribbon Respect by McCall.pdf" style="font-size: 18px;">Ribbon Respect</a>
		  <hr />
		  <img src="aroundtown/Pizza Link Pic by Don B..jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Pizza by Dezi.pdf" style="font-size: 18px;">Pizza</a>
          <hr />
        <img src="aroundtown/valentine cake pops link pic.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="aroundtown/Valentine Cake Pops Article.pdf" style="font-size: 18px;">Valentine Cake Pops</a>
		  <hr />
         <img src="aroundtown/Breast cancer link Pic by Cooper L.jpg"  style="margin-right: 25px;" /> <a href="aroundtown/breast cancer by Killian.pdf" style="font-size: 18px;">Breast Cancer</a>
		  <hr />
		  <img src="aroundtown/Pizza Link Pic by Don B..jpg"  style="margin-right: 25px;" /> <a href="aroundtown/Pizza by Dezi.pdf" style="font-size: 18px;">Pizza</a>
          <hr />
          <img src="academics/CrowdedHalls2013.jpg"  style="margin-right: 25px;" /> <a href="academics/CrowdedHalls2013.pdf" style="font-size: 18px;">Crowded Halls</a>
		  <hr />
          <img src="aroundtown/Halloween Link Pic by Ms. B.JPG" style="margin-right: 25px;" /> <a href="aroundtown/This is Halloween by McCall R.pdf" style="font-size: 18px">This is Halloween</a>
          <hr />
          <img src="aroundtown/Slurps Up Link Pic by Bobbee.JPG"  style="margin-right: 25px;" /> <a href="aroundtown/Slurps Up Review by Bobbee.pdf" style="font-size: 18px;">Slurps Up</a>
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
            <li <?php if($thisPage=="cparchives") echo "class='active'";?>><a href="./archives.php">Archives</a></li>
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

