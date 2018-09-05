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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Academic Archives</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
        <img src="academics/A Very Musical Christmas Link Pic by Ms. B.JPG"  style="margin-right: 5px; width: 150px; height: 100px" /> <a href="academics/A Very Musical Christmas by Zack.pdf" style="font-size: 18px;">A Very Musical Christmas</a>
          <hr />
		  <img src="academics/Getting Jazzed Up For Chrstmas Link Pic by Ms. B.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Getting Jazzed Up For Christmas.pdf" style="font-size: 18px;">Getting Jazzed Up For Christmas</a>
          <hr />
		  <img src="academics/Spread you wings Link Pic.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Spread your wings, Kiddos!.pdf" style="font-size: 18px;">Spread Your Wings, Kiddos!</a>
          <hr />
          <img src="academics/This is redmen territory Link Pic by Bobbee R.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/This is redmen territory.pdf" style="font-size: 18px;">This is Redmen Territory</a>
          <hr />
          <img src="academics/Winter Choir link picture by Ms. B.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Winter Choir.pdf" style="font-size: 18px;">Winter Choir</a>
          <hr />
         <img src="academics/Corry Crusade Link Pic by Tayson M.jpg"  style="margin-right: 25px;" /> <a href="academics/Corry Crusade by Tayson Manea.pdf" style="font-size: 18px;">Corry Crusade</a>
          <hr />
          <img src="academics/Senior Futures Link Pic by Ms. B.jpg"  style="margin-right: 25px;" /> <a href="academics/Senior Futures by Zac.pdf" style="font-size: 18px;">Senior Futures</a>
          <hr />
		  <img src="academics/Tired Students Pic by Ms. B.jpg"  style="margin-right: 25px;" /> <a href="academics/Tired Students by Dez.pdf" style="font-size: 18px;">Tired Students</a>
          <hr />
           <img src="activities/Orchestra link pic by Ms. B.jpg"  style="margin-right: 25px;" /> <a href="activities/Orchestra by Bobbee.pdf" style="font-size: 18px;">Orchestra</a>
		  <hr />
           <img src="academics/Choir.JPG"  style="margin-right: 25px;" /> <a href="academics/Choir.pdf" style="font-size: 18px;">Choir</a>
          <hr />
          <img src="academics/CollegeDay2013.jpg"  style="margin-right: 25px;" /> <a href="academics/CollegeDay2013.pdf" style="font-size: 18px;">College Day</a>
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
