<? include("top.php"); ?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
    	<a href="javascript:window.history.back()" class="btn btn-link btn-nav pull-left">
		    <span class="icon icon-left-nav"></span>
		    Back
		  </a>
      <h1 class="title">Book View</h1>
    </header>
    
    <nav class="bar bar-tab bar-footer">
      <a class="tab-item" href="index.php">
        <span class="icon icon-home"></span>
        <span class="tab-label">Home</span>
      </a>
      <a class="tab-item" href="notif.php">
        <span class="icon fa fa-bell-o"></span>
        <span class="tab-label">Notifications</span>
      </a>
      <a class="tab-item" href="map.php">
        <span class="icon fa fa-map-o"></span>
        <span class="tab-label">Map</span>
      </a>
      <a class="tab-item" href="account.php">
        <span class="icon fa fa-user"></span>
        <span class="tab-label">Account</span>
      </a>
    </nav>
    
    <?
    	$books = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$_GET['id']);
     	$book = $books->fetch_array();
      $author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
      $author = $author->fetch_array();
      $copies = $mysqli->query("SELECT * FROM `copies` WHERE `book`=".$book['id']);
      $copy_num = 0;
      while($copy = $copies->fetch_array()) {
        $check = $mysqli->query("SELECT * FROM `checkout` WHERE `copy`=".$copy['id']);
        $check2 = $mysqli->query("SELECT * FROM `reserve` WHERE `copy`=".$copy['id']);
        if($check->num_rows > 0 || $check2->num_rows > 0){
          continue;
        }else{
          $copy_num += 1;
        }
      }
    ?>
    
    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content content-padded">
      <img class="media-object pull-left" src="<?=$book['picture']?$book['picture']:"https://dev.ammaron.gq/library/images/no_book_image.gif"?>" style="max-height: 70px; padding-right:10px;">
        <?=$book['title']?>
        <p><?=$book['desc']?></p>
        <p><?=$author['fname']?> <?=$author['lname']?></p>
        <?=$copy_num?> copies available.
        <br><br>
    	<? if($copy_num > 0){ ?>
		  <a class="btn btn-block btn-primary" href="reserve.php?book=<?=$book['id']?>">Reserve</a>
		  <? }else{ ?>
		  <a class="btn btn-block disabled" href="#cantReserve">Reserve</a>
		  <div id="cantReserve" class="modal">
			  <header class="bar bar-nav">
			    <a class="icon icon-close pull-right" href="#cantReserve"></a>
			    <h1 class="title">Cannot Reserve</h1>
			  </header>
			
			  <div class="content">
			    <p class="content-padded">Sorry, there are no copies of this book available to reserve.</p>
			  </div>
			</div>
		  <? } ?>
    </div>
    
    <? include("bottom.php"); ?>
    