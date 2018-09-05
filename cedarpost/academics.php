<?php $thisPage="cpacademics"; ?>

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
          <h2 style="text-align:center; font-size: 36px; color: #000;">Cedar Post - Academics</h2>
        </div>

        <img src="./cedarpost.jpg" style="width: 100%;margin-bottom: 20px;" />
      </div>


      <div class="span6">
        <div class="well">
		<img src="academics/Cedar High Art Link Pic by Ms. B.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Cedar High Art Show.pdf" style="font-size: 18px;">Cedar High Art Show</a>
			<hr />
            <img src="academics/Doughnuts Link Pic by Google.jpeg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Doughnuts, Chemistry and Explosions!.pdf" style="font-size: 18px;">Doughnuts, Chemistry and Explosions!</a>
			<hr />
        <img src="academics/FBLA  Link Pic by Mrs. Taylor.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Business Savvy.pdf" style="font-size: 18px;">Business Savvy</a>
			<hr />
            <img src="academics/FFA Link Pic by Google.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/FFA by Mr. Burton.pdf" style="font-size: 18px;">FFA</a>
			<hr />
        <img src="academics/Entomology What Link Pic by Mrs. Heaton.jpg"  style="margin-right: 5px; width: 150px; height: 100px" /> <a href="academics/Entomology What.pdf" style="font-size: 18px;">Entomology What</a>
          <hr />
          <img src="academics/It's SO Dramatic Link Pic by Mrs. Howe.jpeg"  style="margin-right: 5px; width: 150px; height: 100px" /> <a href="academics/It's SO Dramatic.pdf" style="font-size: 18px;">It's SO Dramatic</a>
          <hr />
		  <img src="academics/Choir/Festival Choir Link Pic by Ms. B.JPG"  style="margin-right: 5px; width: 150px; height: 100px" /> <a href="academics/Choir/The festival Choir Concert.pdf" style="font-size: 18px;">Festival Choir</a>
          <hr />
		  <img src="academics/Debate/Beaver/Beaver Link Pic by Bobbee R.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Debate/Beaver/Beaver Battles.pdf" style="font-size: 18px;">Beaver Battles</a>
          <hr />
		  <img src="academics/Debate/Region and State/State Debate Link Pic by Mrs. Jordan.jpg"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Debate/Region and State/Debate at region and state.pdf" style="font-size: 18px;">Debate at Region and State</a>
          <hr />
          <img src="academics/Debate/Richfield/Richfield Link Pic by Bobbee R.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Debate/Richfield/Racking it up in richfield.pdf" style="font-size: 18px;">Racking it up in Richfield</a>
          <hr />
          <img src="academics/Orchestra/Best of Both Link Pic by Ms. B.JPG"  style="margin-right: 25px; width: 150px; height: 100px" /> <a href="academics/Orchestra/The best of both worlds.pdf" style="font-size: 18px;">The Best of Both Worlds</a>
          <hr />
		</div>
      </div>

      <div class="span3">
        <div class="well">
          <ul class="nav nav-list">
            <li><a href="index.php">Home</a></li>
            <li <?php if($thisPage=="cpacademics") echo "class='active'";?>><a href="./academics.php">Academics</a></li>
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
