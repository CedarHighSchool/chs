<?php $thisPage="search" ; ?>

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

	   				
					<div class="row-fluid">

					  <div class="span6">
								<div class="well">
									<h2>Search Results</h2>
								</div>
							<?php
							$query = urlencode($_GET['q']);
							$key = "AIzaSyDiN8Xc6k4ixOvLQYIw953OSdXuczlJLpU";
							$result = file_get_contents("https://www.googleapis.com/customsearch/v1?q=$query&cx=002610783784235059718%3Atwglzpgj8gm&key=$key");
							$res = json_decode($result);
							$items = $res->items;
							foreach($items as $item) {
								?>
								<div class="well">
									<h3><u><a href="<?=$item->link?>"><?=$item->htmlTitle?></a></u></h3>
									<h6><?=$item->htmlFormattedUrl?></h6>
									<p><?=$item->htmlSnippet?></p>
								</div>
								<?php
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
                <div class="well">
                    <h3> CCR Lesson Plans</h3>
                    
                    <strong><a href="<?=$vars['senior_plan_url']?>" target="_blank">Seniors</a></strong><br>
                    
                    <strong><a href="<?=$vars['junior_plan_url']?>" target="_blank">Juniors</a></strong><br>
                    
                    <strong><a href="<?=$vars['sophomore_plan_url']?>" target="_blank">Sophomores</a></strong><br>
                    
                    <strong><a href="<?=$vars['freshman_plan_url']?>" target"_blank">Freshmen</a></strong><br><br>
                    
                    <!-- <a href="https://docs.google.com/document/d/1Uya5Fb1dCxGVMq0IvBi3JCCZCGDFwfOLyqQV3UVLhGk/edit?usp=sharing" target="_blank">Seniors</a></strong><br>-->
                    
                    <!--<strong><a href="https://docs.google.com/a/ironmail.org/document/d/12EA3opIM4ui1p5x8SWt9bikOljVfaLlDvCTQch0sLFI/edit?usp=sharing" target="_blank">Juniors</a></strong><br>-->
                    
                    <!--<strong><a href="https://docs.google.com/document/d/1QMbCcULJFQ7ftDgf8RS1pINKVkL6-gxfTQbzEOMLbRg/edit?usp=sharing" target="_blank">Sophomores</a></strong><br>-->
                    
                    <!--<strong><a href="https://docs.google.com/a/ironmail.org/document/d/1_n_LZzu4Som9cLT8HOcFjqyNLC27pXvRS6tvn01PYt4/edit?usp=sharing">Freshmen</a></strong><br><br>-->
                    <p> <a href="general/9th Grade Course Request Form.pdf" target="_blank">9th Grade Course Request Form</a>
                    <br><a href="general/10th Grade Course Request Form.pdf" target="_blank">10th Grade Course Request Form</a>
                    <br>
                    <a href="general/11th Grade Course Request Form.pdf" target="_blank">11th Grade Course Request Form</a>
                    <br>
                    <a href="general/12th Grade Course Request From.pdf" target="_blank">12th Grade Course Request Form</a></p>
                
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