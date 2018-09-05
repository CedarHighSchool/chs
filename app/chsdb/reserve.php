<? include("top.php"); ?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">Reserve</h1>
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

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <?
      $copies = $mysqli->query("SELECT * FROM `copies` WHERE `book`=".$_GET['book']);
      
      while($copy = $copies->fetch_array()) {
        $check = $mysqli->query("SELECT * FROM `checkout` WHERE `copy`=".$copy['id']);
        $check2 = $mysqli->query("SELECT * FROM `reserve` WHERE `copy`=".$copy['id']);
        if($check->num_rows > 0 || $check2->num_rows > 0){
          echo " No to ".$copy['id'];
          continue;
        }else{
          // Reserve this one
          echo " Reserving #".$copy['id'];
          $reserve = $mysqli->prepare("INSERT INTO `reserve` (`copy`,`patron`) VALUES (?, 1)");
          $reserve->bind_param("i", $copy['id']);
          $reserve->execute();
        }
      }
      ?>
      <p class="content-padded">Reserve book <?=$_GET['book']?></p>
    </div>
    <? include("bottom.php"); ?>
    