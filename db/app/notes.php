<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Notes</h1>
  <a class="icon fa fa-plus-square pull-right" href="newnote.php"></a>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  <div class="cardf">
    <ul class="table-view">
      <?php
      $stuff = $mysqli->query("SELECT * FROM `notes`");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Notes!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell">
        <a class="navigate-right" href="note.php?id=<?=$item['id']?>">
          <?=$item['private']?'<span class="media-object pull-left icon fa fa-eye-slash" title="Private"></span>':'<span class="media-object pull-left icon fa fa-eye" title="Public"></span>'?>
          <?=$item['title']?>
        </a>
      </li>
      <?php } } ?>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>