<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Reports</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  <div class="cardf">
    <ul class="table-view">
      <li class="table-view-cell table-view-divider"><b>Not Done</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `reports` WHERE `done`=0 ORDER BY `when` DESC");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Reports to read!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="report.php?id=<?=$item['id']?>">
          <?=$item['name']?>
        </a>
      </li>
      <?php } } ?>
      <li class="table-view-cell table-view-divider"><b>Done</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `reports` WHERE `done`=1 ORDER BY `when` DESC");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Reports to read!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="report.php?id=<?=$item['id']?>">
          <?=$item['name']?>
        </a>
      </li>
      <?php } } ?>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>