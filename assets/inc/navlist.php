<span class="span3">

	<div class="well sidebar-nav">

		<ul class="nav nav-list">

		<li><a class="imgLink" href="//chs.ironk12.org/"><img src="../../../assets/img/logo.png" width="100%" height="200px" /></a></li>

		</ul>

	</div>



		<?=area("left_buttons")?>

    
    <div class="well sidebar-nav" style="padding-bottom: 1px;">
    
    	<h5>Search this site!</h5>
				<form action="//chs.ironk12.org/search.php" method="get" class="form-inline">
					<input type="text" name="q" id="q" placeholder="Search" value="<?=$_GET['q']?>" style="max-width:100%;"><input type="submit" value="Go" style="display:none;">
				</form>
    </div>
    <div class="well sidebar-nav">
    	<?php
      $key = "AIzaSyDhcx4hw1-HrEwIywR8Oc2QwOEeV7EqOAY";
      $time_min = date("Y-m-d\TH:i:sP",strtotime(date("Y/m/d")));
      $time_max = date("Y-m-d\TH:i:sP",strtotime("tomorrow"));
      $maxRes = 1;
      $url = "https://www.googleapis.com/calendar/v3/calendars/ironmail.org_dgnbo22qkr1htt9p91l54l1634@group.calendar.google.com/events?key=$key&maxResults=$maxRes&timeMin=$time_min&timeMax=$time_max&q=Day";
      $res = file_get_contents($url);
      $res = json_decode($res);
      
      foreach($res->items as $item) {
          $test = $item->summary;
          switch($test) {
              case "A Day":
                  $day = "A Day";
                  break;
              case "B Day";
                  $day = "B Day";
                  break;
          }
      }
      ?>
      <span><h1><?=$day?$day:""?></h1></span>
    </div>

	

	<?=area("left_nav")?>

	

	<?=area("report_button")?>

	

</span><!--/span-->