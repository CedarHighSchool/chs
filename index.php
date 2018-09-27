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

	   				<!-- Perdy slide show -->

	    			<div id="myCarousel" class="carousel slide">

							<div class="carousel-inner">
								<?php
								$num = 1;
								$base = "assets/img/Banner/";
								while(file_exists($base.$num.".jpg") || file_exists($base.$num.".gif") || file_exists($base.$num.".png")){
									if(file_exists($base.$num.".jpg")){
										$me = $base.$num.".jpg";
									}else if(file_exists($base.$num.".gif")){
										$me = $base.$num.".gif";
									}else if(file_exists($base.$num.".png")){
										$me = $base.$num.".png";
									}
									{
									?>
									<div class="item<?php if($num==1){echo " active";} ?>" <?php if(isset($_GET['b'])){ ?>title="Banner <?php echo $num; ?>"<?php } ?>>
										<img src="<?php echo $me; ?>?t=<?php echo time();?>">	              			
									</div>
									<?php
									}
									$num = $num+1;
								}
								?>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							
							<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>

	    			</div><!--/slideshow -->
      				<!-- Begin content below slideshow -->

					<div class="row-fluid">

					  <div class="span6">
                        <?php
                        if($manage->logged_in()) {
                            ?>
                            <a href="/db/">Manage Homepage</a>
                            <?php
                        }
                        ?>
					      <?php if(date("D") == "Wed") { ?>
                            <div class="well wow fadeInUp">
                                <center>
        							<h3>Late Start Wednesday Schedule</h3>
        							<p><b>PLC's/Student Intervention</b> 7:50 - 9:35(105 min.)
                                        <br><b>1st</b> 9:40 - 10:43 (63 min.)
                                        <br><b>2nd</b> 10:48 - 11:51 (63 min.)    
                                        <br><b>Lunch</b> 11:51 - 12:34 (43 min.)
                                       
                                        <br><b>4th</b> 12:34 - 1:37 (63 min.) 
                                        <br><b>5th</b> 1:42 - 2:45 (63 min.)
                                    
                                    </p>
                                </center>
    						</div>
    						<?php } ?>
					
							<?php
							$stuff = $mysqli->query("SELECT * FROM `homepage` WHERE `visible`=1 ORDER BY `order` ASC");
							while($item = $stuff->fetch_array()){
                                if($manage->logged_in()) {
                                    $delLink  = "<style>form.pull-right { display: inline; padding:0; word-wrap:none;white-space: nowrap; width:auto; margin-right:-15px; margin-top:-15px;}</style>";
                                    $delLink .= "<form action='db/del.php' method='post' class='pull-right'><input hidden style='display:none;' name='order' value='".$item['order']."'><button type='submit' class='btn btn-danger btn-mini pull-right'><i class='fa fa-trash'></i></button></form>";
                                    $delLink .= "<form action='db/edit.php' method='post' class='pull-right' style='margin-right:0px;'><input hidden style='display:none;' name='order' value='".$item['order']."'><button type='submit' class='btn btn-success btn-mini pull-right'><i class='fa fa-pencil'></i></button></form>";
                                }else{
                                    $delLink = "";
                                }
								if($item['type'] == 0){
							?>
								<div class="well wow fadeInUp">
									<?=$delLink?>
									<h3><?=$item['title']?></h3>
									<p><?=$item['content']?></p>
								</div>  
							<?php
								}else if($item['type'] == 1){
							?>
								<div class="well wow fadeInUp">
									<?=$delLink?>
									<h3><u><center><a href="<?=$item['url']?>"><?=$item['title']?></a></center></u></h3>
								</div>  
							<?php
								}
							}
							?>
                        
                        </div>
            <!--end of middle column (span6)-->

            <div class="span6">
                <!--Beginning of side column-->
                <div class="well">
                    <span class="pull-right"><h1><?=$day?$day:""?></h1></span>
                    <h3><u><a href="dailyannouncements.pdf">Announcements</a></u></h3>
                    <a href="<?=$vars['video_announcements']?>" target="_blank">Video Announcements</a><br>
                    Grade Checks <br><br>
                    <a href="https://docs.google.com/presentation/d/1oXzPBxjGe-XIvknExY7oGgUCaRO0xCcOW0fCo5pi34E/edit?usp=sharing">How to Pay for College</a><br><br>
                    <strong>Personal devices only</strong> (cell phones, iPods, etc.): The district office has made a change to the Internet access. In order to access the Internet in the CHS building, you will need to obtain the ICSD certificate. To obtain the certificate, <a href="http://old.irondistrict.org/cert" target="_blank">click here</a> and carefully follow the instructions. </php>
                </div>
                <?php
                if(date("m/d/y") == "04/12/18"){
                ?>
                <div class="well">
                    <h2><a href="https://docs.google.com/spreadsheets/d/1Fcpl0ug4BL4T72o-Ysb9JyqyzP3Qmp9_1Ht339SpXac/edit?usp=sharing">Tag Sheet</a></h2>
                </div>
                <?php
                }
                ?>
                <div class="well">
                    <?=area("ccr_box")?>
                </div>
                <div class="well">
                <center>
                <h1><strong><a href="../courses/index.php">Course Catalog</a></strong><br>
                </h1>
                </center>
                </div>
                <!--well-->
				<div class="well">
                    <h3>SAFE UT<br></h3>
                    <p>If you or someone you know is experiencing crisis, bullying or threats, please click here to make an anonymous report.<br>
                    Communication available with a crisis counselor if needed. You are not alone. Help is available.
                        <br>
                        <center> 
                            <!--a href="https://www.p3tips.com/access.aspx?Tipster=1" target="_blank"><img src="assets/img/follow.png" style="max-width: 200px; margin-bottom: 5px;"></a-->
                            <a href="https://safeut.med.utah.edu/" target="blank"><img src="assets/img/crisis.png" class="wow tada" style="max-width: 200px; margin-top: 5px;"></a>
                </div>


                <div class="well">
                    <h3>School Calendar</h3>
                    <iframe src="https://calendar.google.com/calendar/embed?title=Activities&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffcc66&amp;src=ironmail.org_m49getf5e4fsrjmrhqr04tk1bg%40group.calendar.google.com&amp;color=%23182C57&amp;src=ironmail.org_dgnbo22qkr1htt9p91l54l1634%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=America%2FDenver" style="border-width:0" width="350" height="600" frameborder="0" scrolling="no"></iframe>                    </td>

                    </table>
                    <p>
                        <br>
                    </p>

                </div>
                <div class="well">

                    <h3>Visitors</h3>
Notice: Visitors you can only enter through the main doors. All other doors are locked. Please check into the office before you enter the school. 
                </div>

                <div class="well">

                    <h3><span class=style9>PowerSchool Parent Portal</span>
            <br>
            </h3>
            <a href="Parent_Sign.pdf" target="_blank">Create a Parent Account</a>
            <br>
            <a href="Adding_Student.pdf" target="_blank">Adding a Student to your Account</a>
            <br>
            <a href="Student Contacts.pdf" target="_blank">Adding to Student Contacts</a>
            <br>
            </h3>
        </div>
        <!--well-->
        <!--well-->





        <div class="well">

            <h3><span class="style9">Redmen Pride Nominations</span><br></h3>

            <p>Remember to nominate you favorite senior for the Redmen Pride award!
                <br>
                <a href="https://drive.google.com/open?id=1ww2Of81I18FNnHnX7RTzq6uDAjOPL1CwvylZzAUjuRQ" target="_blank">Redmen Pride Nomination Form</a>
                <br>
            </p>
        </div>


        <div class="well">
            <h3><span class="style9">
                       				Iron County Calendar 2017-18</span><br>
                </h3>
            <a href="https://irondistrict.org/calendar/" target="_blank">Calendar 2017-2018 </a>

    </div>
<?php if($GAME_UP == true) { ?>
     <!--Easter Egg -->
        <div class="span1">
            <a href="game/about.php"><img src="/game/img/yoshiegg.png"></a>
        </div>
     <!--End Easter Egg -->
     <?php } ?>
    </div>

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