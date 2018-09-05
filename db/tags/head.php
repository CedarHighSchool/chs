<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://chs.ironk12.org/assets/img/logo.png">

    <title><?=$c['name']?></title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0-beta.3/materia/bootstrap.min.css" rel="stylesheet">

    <link href="styles.css?v=<?=filemtime("styles.css")?>" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="<?=$c['url']?>"><img src="logo.png" style="max-height: 35px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?=$c['url']?>">Home</a>
          </li>
          <?php
          if(isset($_SESSION[$pre.'username'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=$c['url']?>tag.php">Tag Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$c['url']?>list.php">Your List</a>
          </li>
          <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <?=$u['fname']?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="tag.php">Tag Students</a>
		          <a class="dropdown-item" href="passchange.php">Change Password</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="<?=$c['url']?>logout.php">Log Out</a>
		        </div>
		      </li>
		      <?php
          }
          ?>
        </ul>
      </div>
    </nav>

    <div class="container">