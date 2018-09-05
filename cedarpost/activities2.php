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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Activities Archives</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
         <img src="activities/Masquerade Link Pic by Miss Tegge.JPG"  style="margin-right: 25px3; width: 150px; height: 100px" /> <a href="activities/Masquerade.pdf" style="font-size: 18px;">Masquerade</a>
		  <hr />
          <img src="activities/The Engineers Of The Future Link Pic by Ms. B.jpg"  style="margin-right: 25px3; width: 150px; height: 100px" /> <a href="activities/The engineers of the future.pdf" style="font-size: 18px;">The Engineers Of The Future</a>
		  <hr />
          <img src="activities/Drug Free Weel Link Pic by Ms. B.jpg"  style="margin-right: 25px3; width: 150px; height: 100px" /> <a href="activities/Drug Free Week.pdf" style="font-size: 18px;">Drug Free Week</a>
		  <hr />
		  <img src="activities/Off medication Link Pic by Ms. B.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="activities/Off medication.pdf" style="font-size: 18px;">Off Medication</a>
          <hr />
          <img src="activities/Return of the Mack link pic by Ms. B.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="activities/Return Of the Mack.pdf" style="font-size: 18px;">Return of the Mack</a>
          <hr />
         <img src="activities/Sadies Link Pic by Miss Tegge.jpg"  style="margin-right: 25px;" /> <a href="activities/Sadies  by Alyssa.pdf" style="font-size: 18px;">Sadies</a>
          <hr />
           <img src="activities/Homecoming Band in Halls Link Pic by Kiley P.JPG"  style="margin-right: 25px;" /> <a href="activities/Homecoming Band in the Halls.pdf" style="font-size: 18px;">Homecoming Band in the Halls</a>
          <hr />
          <img src="activities/Homecoming Dance Link Pic By Ms. Tegge.jpg"  style="margin-right: 25px;" /> <a href="activities/Homecoming Dance by Bobbee.pdf" style="font-size: 18px;">Homecoming Dance</a>
          <hr />
          <img src="activities/Homecoming Prep Link Pic by Ms. B.jpg"  style="margin-right: 25px;" /> <a href="activities/Homecoming Prep by Alyssa.pdf" style="font-size: 18px;">Homecoming Prep</a>
          <hr />
          <img src="activities/Homecoming Spirit Night Link Pic by Ms. B.JPG"  style="margin-right: 25px;" border="0" /> <a href="activities/Homecoming Spirit Night.pdf" style="font-size: 18px;">Homecoming Spirit Night</a>
          <hr />
           <img src="activities/Back to School Bash Link Pic by Ms. B.JPG"  style="margin-right: 25px;" /> <a href="activities/Back To School Bash by McCall.pdf" style="font-size: 18px;">Back To School Bash</a>
          <hr />
          <img src="activities/Pep Assembly Link Pic by Bobbee R.JPG"  style="margin-right: 25px;" /> <a href="activities/Pep Assembly by Killian.pdf" style="font-size: 18px;">Pep Assembly</a>
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
