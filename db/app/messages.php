<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Messages</h1>
  <a class="icon fa fa-pencil-square pull-right" href="compose.php"></a>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  <div class="cardf">
    <ul class="table-view">
      <style>
        .mine a {
          color: #18477a !important;
        }
        .high a {
          font-weight: bold;
        }
      </style>
      <li class="table-view-cell table-view-divider"><b>Recieved Messages</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `msg` WHERE `to`=".$cuser['id']." ORDER BY `read` ASC, `when` DESC");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>All done!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
        $class = "";
        $icon = "";
        if($item['read'] == 1) {
        	$icon = "fa-envelope-open";
        }else{
        	$icon = "fa-envelope";
        }
      ?>
      <li class="table-view-cell media <?=$class?>">
        <a class="navigate-right" href="seemsg.php?id=<?=$item['id']?>">
          <span class="media-object pull-left icon fa <?=$icon?>"></span>
          <?=$item['subject']?>
        </a>
      </li>
      <?php } } ?>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>