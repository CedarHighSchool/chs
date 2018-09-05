<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Faculty</h1>
  <a href="preps.php" class="btn btn-link btn-nav pull-right">
    Preps
  </a>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  <div class="cardf">
    <ul class="table-view">
      <?php
      $stuff = $mysqli->query("SELECT * FROM `faculty` ORDER BY `lname` ASC");
      if($stuff->num_rows <= 0){
      ?>
      <li class="table-view-cell">
        <b>No Faculty in database!</b>
      </li>
      <?php
      }else{
      while($item = $stuff->fetch_array()){
      ?>
      <li class="table-view-cell media">
        <a class="navigate-right" href="fac.php?id=<?=$item['id']?>">
          <img class="media-object pull-left" src="<?=$item['picture']?$item['picture']:"https://dev.ammaron.gq/library/images/no_book_image.gif"?>" style="max-height: 40px; padding-right:10px;">
          <?=$item['fname']?> <?=$item['lname']?><br>
          <div class="media-body">
          <p><?=$item['email']?></p>
          </div>
        </a>
      </li>
      <?php } } ?>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>