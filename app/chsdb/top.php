<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CHS</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="css/ratchet.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.js"></script>
    <style>
      cloudflare-app {
        display:none;
      }
    </style>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("sql201.sunware.cu.cc","snwr_18847717","onrjfy1112","snwr_18847717_library");
    if($mysqli->error){
      die($mysqli->error);
    }
    function myTruncate($string, $limit=10, $pad="...") {
      // return with no change if string is shorter than $limit
      if(strlen($string) <= $limit) return $string;
      $string = substr($string, 0, $limit) . $pad;
      return $string;
    }
    ?>
    <nav class="bar bar-tab bar-footer">
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="index")?"active":""?>" href="index.php">
        <span class="icon fa fa-home"></span>
        <span class="tab-label">Home</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="notif")?"active":""?>" href="notif.php">
        <span class="icon fa  <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="notif")?"fa-bell":"fa-bell-o"?>"></span>
        <span class="tab-label">Notifications</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="map")?"active":""?>" href="map.php">
        <span class="icon fa <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="map")?"fa-map":"fa-map-o"?>"></span>
        <span class="tab-label">Map</span>
      </a>
      <a class="tab-item <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="account")?"active":""?>" href="account.php">
        <span class="icon fa <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="account")?"fa-user":"fa-user-o"?>"></span>
        <span class="tab-label">Account</span>
      </a>
    </nav>