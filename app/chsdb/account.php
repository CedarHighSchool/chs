<? include("top.php"); ?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">Your Library</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <div class="card">
        <ul class="table-view">
        	<li class="table-view-cell table-view-divider">Checked Out</li>
          <?
          $them = $mysqli->query("SELECT * FROM `checkout` WHERE `patron`=1");
          
          if($them->num_rows > 0){
	          while($the = $them->fetch_array()){
	          	$copies = $mysqli->query("SELECT * FROM `copies` WHERE `id`=".$the['copy']);
		          $copy = $copies->fetch_array();
	          	$books = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$copy['book']);
		          $book = $books->fetch_array();
	            $authors = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
	            $author = $authors->fetch_array();
	          ?>
	          <li class="table-view-cell media">
	            <a class="navigate-right" href="book.php?id=<?=$book['id']?>">
	              <img class="media-object pull-left" src="<?=$book['picture']?>" style="max-height: 50px;">
	              <div class="media-body">
	                <?=$book['title']?>
	                <p><?=myTruncate($book['desc'],49)?></p>
	                <p><?=$author['fname']?> <?=$author['lname']?></p>
	              </div>
	            </a>
	          </li>
	          <?
	          }
          }else{
          	?>
	          <li class="table-view-cell">
	            No books checked out.
	          </li>
	          <?
          }
          ?>
          <li class="table-view-cell table-view-divider">Reserved</li>
          <?
          $them = $mysqli->query("SELECT * FROM `reserve` WHERE `patron`=1");
          
          if($them->num_rows > 0){
	          while($the = $them->fetch_array()){
	          	$books = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$the['copy']);
		          $book = $books->fetch_array();
	            $authors = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
	            $author = $authors->fetch_array();
	          ?>
	          <li class="table-view-cell media">
	            <a class="navigate-right" href="book.php?id=<?=$book['id']?>">
	              <img class="media-object pull-left" src="<?=$book['picture']?>" style="max-height: 50px;">
	              <div class="media-body">
	                <?=$book['title']?>
	                <p><?=myTruncate($book['desc'],49)?></p>
	                <p><?=$author['fname']?> <?=$author['lname']?></p>
	              </div>
	            </a>
	          </li>
	          <?
	          }
          }else{
          	?>
	          <li class="table-view-cell">
	            No books reserved.
	          </li>
	          <?
          }
          ?>
        </ul>
      </div>
    </div>
    
    <? include("bottom.php"); ?>
    