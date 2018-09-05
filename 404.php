<?php $thisPage="home" ; ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Cedar High School</title>

    <?php include( "assets/inc/headtag.php") ?>
    <style type="text/css">
        <!-- .style9 {
            color: #990000
        }
        .style10 {
            font-size: 24px
        }
        .style12 {
            font-size: 13px;
            color: #333333;
        }
        .style13 {
            font-size: 18px
        }
        .style14 {
            font-size: 24px;
            font-weight: normal;
        }
        .hr2 {
            width: 50%;
        }
        -->
    </style>
</head>

<body>

    <?php include( "assets/inc/navbar.php") ?>

    <!-- Let the container begin! -->

    <div class="container">
        <div class="row">
            <?php include( "assets/inc/navlist.php") ?>
            
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
            <span class="span9">	

					<div class="row-fluid">

					  <div class="span10">
							<div class="well">
								<h1>404</h1>
								<p>The page you requested was not found.</p>
								<a href="/" class="btn btn-default">Go Home</a><br>
								<br>
								<h3>Search the Site</h3>
								<form action="//chs.ironk12.org/search.php" method="get" class="form-inline">
									<input type="text" name="q" id="q" placeholder="Search" value="<?=$_GET['q']?>" style="max-width:100%;"><input type="submit" value="Go" style="display:none;">
								</form>
							</div>
						</div>
            <!--end of middle column (span6)-->

            

    </div>
    <!--/row-fluid -->
    </div>
    <?php include( "assets/inc/footer.php") ?>

    </div>
    <!-- /container -->

    <!-- Yummy JavaScrips

    	================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="//chs.ironk12.org/assets/js/jquery.js"></script>

    <script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>

    <script src="//chs.ironk12.org/assets/js/bootstrap-carousel.js"></script>
</body>

</html>