<?php include("top.php"); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Tasks</h1>
</header>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  <div class="card">
    <ul class="table-view">
      <?php
      $books = $mysqli->query("SELECT * FROM `books`");
      while($book = $books->fetch_array()){
        $author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
        $author = $author->fetch_array();
      ?>
      <li class="table-view-cell media">
        <a class="navigate-right" href="book.php?id=<?=$book['id']?>">
          <img class="media-object pull-left" src="<?=$book['picture']?$book['picture']:"https://dev.ammaron.gq/library/images/no_book_image.gif"?>" style="max-height: 50px;">
          <div class="media-body">
            <?=$book['title']?>
            <p><?=myTruncate($book['desc'],49)?></p>
            <p><?=$author['fname']?> <?=$author['lname']?></p>
          </div>
        </a>
      </li>
      <?php
      }
      ?>
    </ul>
  </div>
</div>
<?php include("bottom.php"); ?>