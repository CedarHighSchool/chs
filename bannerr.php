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
            <span class="span9">	

	   				<!-- Perdy slide show -->

	    			<div id="myCarousel" class="carousel slide">

							<div class="carousel-inner">
								<?php // copy and past over the index page carousel and change xmasday va
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
									if($num == 2) {
										?>
										<div class="item<?php if($num==1){echo " active";} ?>" <?php if(isset($_GET['b'])){ ?>title="Banner <?php echo $num; ?>"<?php } ?>>
											<img src="http://ak6.picdn.net/shutterstock/videos/844486/thumb/1.jpg" id="count_back" style="display:none;">
											<canvas id="myCanvas" width="875" height="296" style="border:none;padding:0;margin:0;"></canvas>
										</div>
										<?php
									}else{
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

						<script>
						var xmasDay = '2018-12-25T00:00:00';
						
						activate();
						
						////////////////////////////////////////
						
						function activate(){
						  initializeClock('counter', xmasDay);
						  getTimeRemaining(xmasDay);
						}
						
						function getTimeRemaining(endtime){
						  var t = Date.parse(endtime) - Date.parse(new Date());
						  var seconds = Math.floor( (t/1000) % 60 );
						  var minutes = Math.floor( (t/1000/60) % 60 );
						  var hours = Math.floor( (t/(1000*60*60)) % 24 );
						  var days = Math.floor( t/(1000*60*60*24) );
						  return {
						    'total': t,
						    'days': days,
						    'hours': hours,
						    'minutes': minutes,
						    'seconds': seconds
						  };
						}
						
						var img_el = document.getElementById("count_back");
						var c = document.getElementById("myCanvas");
						var ctx = c.getContext("2d");
						ctx.font = "45px Verdana";
						ctx.shadowColor = "#000";
						ctx.shadowOffsetX = 0;
						ctx.shadowOffsetY = 0;
						ctx.shadowBlur = 10;
						ctx.fillStyle = 'white';
      			ctx.textAlign = 'center';
						ctx.fillText("Countdown",10,50);
						// ctx.clearRect(0, 0, c.width, c.height);
						
						function initializeClock(id, endtime){
						  var timeinterval = setInterval(function(){
						    var t = getTimeRemaining(endtime);
						    htmls = t.days + ' days' + ' ' +
						                      t.hours + ' hours'+ ' ' +
						                      t.minutes + ' minutes' + ' ' +
						                      t.seconds + ' seconds';
                //ctx.clearRect(0, 0, c.width, c.height);
                ctx.drawImage(img_el,0,-70, c.width, c.height+200);
                x = c.width/2;
                if(t.days > 0 || t.hours > 0 || t.minutes > 0 || t.seconds > 0){
	                ctx.font = "40px Verdana";
			            ctx.fillText(t.days+" days",x,50);
			            ctx.fillText(t.hours+" hours",x,100);
			            ctx.fillText(t.minutes+" minutes",x,150);
			            ctx.fillText(t.seconds+" seconds",x,200);
			            ctx.font = "45px Verdana";
			            ctx.fillText("Until Christmas!",x,260);
                }else{
                	ctx.font = "75px Verdana";
			            ctx.fillText("Merry Christmas!",x,c.height/2+10);
                }
						    if(t.total<=0){
						      clearInterval(timeinterval);
						    }
						  },1000);
						}
						</script>
      				<!-- Begin content below slideshow -->

					<div class="row-fluid">

					  <div class="span6">
					      <?php if(date("D") == "Wed") { ?>
                            <div class="well wow fadeInUp">
                                <center>
        							<h3>Late Start Wednesday Schedule</h3>
        							<p>PLC's/Student Intervention 7:50 - 9:35(105 min.)
                                        <br>1st 9:40 - 10:34 (54 min.)
                                        <br>CCR 10:39 - 11:03 (22 min.)
                                        <br>2nd 11:08 - 12:02 (54 min.)    
                                        <br>Lunch 12:02 - 12:47 (45 min.)
                                        <br>3rd 12:47 - 1:41 (54 min.)
                                        <br>4th 1:46 - 2:40 (54 min.)
                                    </p>
                                </center>
    						</div>
    						<?php } ?>
					
							<?php
							$link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
							if(!$link){
								echo mysqli_error($link);
							}
							$stuff = mysqli_query($link, "SELECT * FROM `homepage` WHERE `visible`=1 ORDER BY `order` ASC");
							while($item = mysqli_fetch_array($stuff)){
								if($item['type'] == 0){
							?>
								<div class="well wow fadeInUp">
									<h3><?=$item['title']?></h3>
									<p><?=$item['content']?></p>
								</div>  
							<?php
								}else if($item['type'] == 1){
							?>
								<div class="well wow fadeInUp">
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
                    <h3><u><a href="dailyannouncements.pdf">Announcements</a></u></h3>
                    <a href="<?=$vars['video_announcements']?>" target="_blank">Video Announcements</a><br>
                    Grade Checks <br><br>
                    <a href="https://docs.google.com/presentation/d/1oXzPBxjGe-XIvknExY7oGgUCaRO0xCcOW0fCo5pi34E/edit?usp=sharing">How to Pay for College</a><br><br>
                    <strong>Personal devices only</strong> (cell phones, iPods, etc.): The district office has made a change to the Internet access. In order to access the Internet in the CHS building, you will need to obtain the ICSD certificate. To obtain the certificate, <a href="http://old.irondistrict.org/cert" target="_blank">click here</a> and carefully follow the instructions. </p>
                </div>
                <?php if(true) { ?>
                <div class="well">
                    <center>
                        <h3><i class="fa fa-tree" style="color:green;"></i></h3>
                        <h4 id="christmascountdown">
                            00 days<br>
                            00 hours<br>
                            00 minutes<br>
                            00 seconds<br>
                        </h4>
                        <h3 id="until">Until <span style="color:green;">Christmas</span>!</h3>
                    </center>
                </div>
                <?php } ?>
                <div class="well">
                    <h3> CCR Lesson Plans</h3>
                    
                    <strong>
                    <a href="<?=$vars['senior_plan_url']?>" target="_blank">Seniors</a></strong><br>
                    
                    <strong><a href="<?=$vars['junior_plan_url']?>" target="_blank">Juniors</a></strong><br>
                    
                    <strong><a href="<?=$vars['sophomore_plan_url']?>" target="_blank">Sophomores</a></strong><br>
                    
                    <strong><a href="<?=$vars['freshman_plan_url']?>" target"_blank">Freshmen</a></strong><br><br>
                    
                    <p> <a href="general/9th Grade Course Request Form.pdf" target="_blank">9th Grade Course Request Form</a>
                    <br><a href="general/10th Grade Course Request Form.pdf" target="_blank">10th Grade Course Request Form</a>
                    <br>
                    <a href="general/11th Grade Course Request Form.pdf" target="_blank">11th Grade Course Request Form</a>
                    <br>
                    <a href="general/12th Grade Course Request From.pdf" target="_blank">12th Grade Course Request Form</a></p>
                
                </div>
                <div class="well">

   								<h1><strong><a href="../courses/index.php">Course Catalog</a></strong><br>
					            </h1>

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
                    <iframe src="https://calendar.google.com/calendar/embed?title=Activities&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffcc66&amp;src=ironmail.org_m49getf5e4fsrjmrhqr04tk1bg%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FDenver" style="border-width:0" width="350" height="600" frameborder="0" scrolling="no"></iframe>
                    </td>

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
                <a href="https://docs.google.com/a/ironmail.org/forms/d/1IukIgxxmqY7-qt74baE53hPgpBTJ6J8kOeox-FCVb0I/edit" target="_blank">Redmen Pride Nomination Form</a>
                <br>
            </p>
        </div>


        <div class="well">
            <h3><span class="style9">
                       				Iron County Calendar 2017-18</span><br>
                </h3>
            <a href="https://irondistrict.org/calendar/" target="_blank">Calendar 2017-2018 </a>

    </div>

     <!--Easter Egg -->
        <div class="span1">
            <a href="game/about.php"><img src="/game/img/yoshiegg.png"></a>
        </div>
     <!--End Easter Egg -->
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