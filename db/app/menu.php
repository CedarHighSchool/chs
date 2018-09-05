<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Menu</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-paddedf">
  <div class="cardf">
    <ul class="table-view">
      <li class="table-view-cell media">
        <a class="navigate-right" href="messages.php">
        	<span class="media-object pull-left icon fa fa-envelope"></span>
          Messages
        </a>
      </li>
      <li class="table-view-cell media">
        <a class="navigate-right" href="preps.php">
        	<span class="media-object pull-left icon fa fa-user-o"></span>
          Teacher Preps
        </a>
      </li>
      <li class="table-view-cell media">
        <a class="navigate-right" href="vars.php">
        	<span class="media-object pull-left icon fa fa-microchip"></span>
          Variables
        </a>
      </li>
      <li class="table-view-cell media">
        <a class="navigate-right" href="chat.php">
        	<span class="media-object pull-left icon fa fa-comments"></span>
          Chat
        </a>
      </li>
      <?php
      // Admin options
      if($cuser['admin'] == 1) {
      ?>
      <li class="table-view-cell media">
        <a class="navigate-right" href="users.php">
        	<span class="media-object pull-left icon fa fa-users"></span>
          User Manager
        </a>
      </li>
      <?php
      }
      ?>
    </ul>
  </div>
  <a href="logout.php" class="btn btn-negative btn-block"><i class="fa fa-sign-out"></i> Log Out</a>
  <a href="javascript:window.location.reload()" class="btn btn-default btn-block"><i class="fa fa-refresh"></i> Update App</a>
  <p style="text-align:center;">
    Cedar High Database App v<?=$version?><br>
    Created by Joshua Anderson<br>
    <a href="https://andersmmg.ga/">andersmmg.ga</a>
  </p>
</div>
<?php include("bottom.php"); ?>