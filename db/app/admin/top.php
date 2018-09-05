<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?
    $mysqli = new mysqli("sql201.sunware.cu.cc","snwr_18847717","onrjfy1112","snwr_18847717_library");
    if($mysqli->error){
      die($mysqli->error);
    }
  ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Library Admin</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="books")?"class=\"active\"":""?>><a href="books.php">Books</a></li>
	        <li <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="authors")?"class=\"active\"":""?>><a href="authors.php">Authors</a></li>
	        <li <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="genres")?"class=\"active\"":""?>><a href="genres.php">Genres</a></li>
	        <li <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="patrons")?"class=\"active\"":""?>><a href="patrons.php">Patrons</a></li>
	        <li <?=(basename($_SERVER["SCRIPT_FILENAME"], '.php')=="checkout")?"class=\"active\"":""?>><a href="checkout.php">Checkout</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Account <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="addbook.php">Add Book</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Log Out</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>