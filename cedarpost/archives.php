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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Archives</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
         <img src="archives/academics.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics2.php" style="font-size: 18px;">Academics</a>
         <hr />
         <img src="archives/activities.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="activities2.php" style="font-size: 18px;">Activities</a>
         <hr />
         <img src="archives/athletics.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="athletics2.php" style="font-size: 18px;">Athletics</a>
         <hr />
         <img src="archives/around_town.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="around_town2.php" style="font-size: 18px;">Around Town</a>
         <hr />
         <img src="Cedar Fights Against Cancer Link Pic by Alyssa O.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="frontpage.php" style="font-size: 18px;">Front Page</a>
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
