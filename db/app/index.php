<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Tasks</h1>
  <a class="icon fa fa-plus-square pull-right" href="newtask.php"></a>
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
      <li class="table-view-cell table-view-divider"><b>To Do</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `todo` WHERE `done`=0 AND (`private`=0 OR `created_by`=".$cuser['id'].") ORDER BY case when `assigned_to`=".$cuser['id']." then 0 else 1 end, `priority` DESC, `created_at` DESC");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Tasks!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
        $class = "";
        if($item['assigned_to'] == $cuser['id']) {
          $class .= "mine ";
        }
        if($item['priority'] == 2) {
          $class .= "high ";
        }
        switch($item['priority']) {
          case 0:
            $icon = "fa-arrow-down";
            break;
          case 1:
            $icon = "fa-window-minimize";
            break;
          case 2:
            $icon = "fa-arrow-up";
            break;
          default:
            break;
        }
      ?>
      <li class="table-view-cell media <?=$class?>">
        <a class="navigate-right" href="task.php?id=<?=$item['id']?>">
          <span class="media-object pull-left icon fa <?=$icon?>"></span>
          <?=$item['title']?>
        </a>
      </li>
      <?php } } ?>
      <li class="table-view-cell table-view-divider"><b>Done</b></li>
      <?php
      $stuff = $mysqli->query("SELECT * FROM `todo` WHERE `done`=1 AND (`private`=0 OR `created_by`=".$cuser['id'].") ORDER BY `done_at` DESC");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Tasks!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="task.php?id=<?=$item['id']?>">
          <?=$item['title']?>
        </a>
      </li>
      <?php } } ?>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>