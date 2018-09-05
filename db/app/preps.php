<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Teacher Preps</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  
  <div class="cardf">
    <ul class="table-view">
      <li class="table-view-cell table-view-divider"><b>Period</b></li>
      <div class="segmented-control">
        <a class="control-item active" href="#a1">A1</a>
        <a class="control-item" href="#a2">A2</a>
        <a class="control-item" href="#a3">A3</a>
        <a class="control-item" href="#a4">A4</a>
        <a class="control-item" href="#b1">B1</a>
        <a class="control-item" href="#b2">B2</a>
        <a class="control-item" href="#b3">B3</a>
        <a class="control-item" href="#b4">B4</a>
      </div>
      
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#a1">A1</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#a2">A2</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#a3">A3</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#a4">A4</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#b1">B1</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#b2">B2</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#b3">B3</a>-->
      <!--</li>-->
      <!--<li class="table-view-cell">-->
      <!--  <a class="navigate-right" href="#b4">B4</a>-->
      <!--</li>-->
      
      <span id="a1" class="control-content active">
      <li class="table-view-cell table-view-divider"><b>A1</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `a1`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="a2" class="control-content">
      <li class="table-view-cell table-view-divider"><b>A2</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `a2`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="a3" class="control-content">
      <li class="table-view-cell table-view-divider"><b>A3</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `a3`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="a4" class="control-content">
      <li class="table-view-cell table-view-divider"><b>A4</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `a4`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="b1" class="control-content">
      <li class="table-view-cell table-view-divider"><b>B1</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `b1`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="b2" class="control-content">
      <li class="table-view-cell table-view-divider"><b>B2</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `b2`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="b3" class="control-content">
      <li class="table-view-cell table-view-divider"><b>B3</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `b3`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
      <span id="b4" class="control-content">
      <li class="table-view-cell table-view-divider"><b>B4</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `b4`='Prep'");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Preps here!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <?=$item['fname']?> <?=$item['lname']?>
        </a>
      </li>
      <?php } } ?>
      </span>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>