<?php $thisPage="home"; ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <title>Cedar High School</title>

        <?php include("assets/inc/headtag.php") ?>
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
    <script>
        $(document).ready(function() {
            $('img').error(function() {
                var failover = $(this).data('failover');
                if (this.src != failover) {
                    this.src = failover;
                }
            });
        });
    </script>

    <body>

         <?php include("assets/inc/navbar.php") ?>

            <!-- Let the container begin! -->

            <div class="container">
                <div class="row">

                    <?php include("assets/inc/navlist.php") ?>
                        <span class="span9">	

	   				<!-- Perdy slide show -->

	    			<div id="myCarousel" class="carousel slide">

	            		<div class="carousel-inner">

                                 <div class="item active">
									<img src="assets/img/Banner/1.jpg?t=<?php echo time();?>" data-failover="http://chs.ironk12.org/assets/img/Banner/1.gif" alt="">	              			
                                 </div>
								 
                                 <div class="item">
									<img src="assets/img/Banner/2.jpg?t=<?php echo time();?>" data-failover="http://chs.ironk12.org/assets/img/Banner/2.gif" alt="">	              			
                                 </div>
								 
								 <div class="item">
									<img src="assets/img/Banner/3.jpg?t=<?php echo time();?>" data-failover="http://chs.ironk12.org/assets/img/Banner/3.gif" alt="">	              			
                                 </div>
								 
                                 <div class="item">
									<img src="assets/img/Banner/4.jpg?t=<?php echo time();?>" data-failover="http://chs.ironk12.org/assets/img/Banner/4.gif" alt="">	              			
                                 </div>
								 
								  <div class="item">
									<img src="assets/img/Banner/5.jpg?t=<?php echo time();?>" data-failover="http://chs.ironk12.org/assets/img/Banner/5.gif" alt="">	              			
                                 </div>
								 
                                 <div class="item">
									<img src="assets/img/Banner/6.jpg?t=<?php echo time();?>" data-failover="http://chs.ironk12.org/assets/img/Banner/6.gif" alt="">	              			
                                 </div>
            		  </div>
                       <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>

	            	  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>

	    			</div><!--/slideshow -->

      				<!-- Begin content below slideshow -->

					<div class="row-fluid">

					  <div class="span6">

                        <div class="well">
					      <div align="center" class="style14">
					        <h3><u><a href="dailyannouncements.pdf"target="_blank">Announcements</a></u></h3>                                                                                               </div>

                        </div>	
	 
        			<?php
        			$link = mysqli_connect("205.125.0.100","chscyberweb",$pwwd,"chs");
        			if(!$link){
        				echo mysqli_error($link);
        			}
        			$stuff = mysqli_query($link, "SELECT * FROM `homepage` ORDER BY `order` ASC");
        			while($item = mysqli_fetch_array($stuff)){
        				if($item['type'] == 0){
            			?>
        				<div class="well">
        					<h3><?=$item['title']?></h3>
        					<p><?=$item['content']?></p>
        				</div>  
            			<?php
        				}else if($item['type'] == 1){
        			?>
        				<div class="well">
        					<h3><u><center><a href="<?=$item['url']?>"><?=$item['title']?></a></center></u></h3>
        				</div>  
            			<?php
        				}
        			}
        			?>
        
                    <!--end of middle column (span6)-->

                <!--Beginning of side column-->

                <div class="well">

                  <h3>Announcements</h3>
                        <a href="https://www.youtube.com/watch?v=vG-OaYfUzY8&feature=em-share_video_user"target="_blank">Announcements</a> - September 13, 2017<br>Remember to do cast your final vote for <a href="https://docs.google.com/a/ironmail.org/forms/d/1_xp2qManvxX6MTckjueGpPc0KEGtz8Xs_eSN0WFcLao/viewform?edit_requested=true"target="_blank"
                        >Homecoming Royalty</a>! <br> 
                        Make sure <a href="https://docs.google.com/document/d/1vg-TnUbsr5AoOZn4EJrTymf3KXEZOyD54pbwnPx_U6Y/edit"target="_blank">Acceptable Use Policy and Safe Schools Polic</a>y forms are signed.<br> Grade Checks <br><br>
                        <strong>Personal devices only</strong> (cell phones, iPods, etc.): The district office has made a change to the Internet access. In order to access the Internet in the CHS building, you will need to obtain the ICSD certificate. To obtain the certificate, <a href="http://old.irondistrict.org/cert" target="_blank">click here</a> and carefully follow the instructions. </p>
              </div>
					</div>
					<div class="span6">
					<div class="well">
					<h3> CCR Lesson Plans</h3>
					
						<strong><a href="https://docs.google.com/document/d/1UQhBVxJk2ve2LQz-OzgxNkszLBehAiQaPW7L1byv1lk/edit?ts=59b80e1e"target="_blank">Seniors</a></strong><br>
						
                        <strong><a href="https://docs.google.com/document/d/1ocVRuOqfPgKRxMi4VLg9kmHZ7PHogkDycQC1ap3CTPE/edit?ts=59b811f7"target="_blank">Juniors</a></strong><br>

                        <strong><a href="https://docs.google.com/document/d/1HZK6RK7KnPeu0UPrTHGPquDJIW4pYE1iPycYLXinGSM/edit"target="_blank">Sophomores</a></strong><br>
						
                   	    <strong><a href="https://docs.google.com/document/d/1ocVRuOqfPgKRxMi4VLg9kmHZ7PHogkDycQC1ap3CTPE/edit"target="_blank">Freshmen</a></strong><br><br>
						
                        <p> <a href="general/9th Grade Course Request Form.pdf" target="_blank">9th Grade Course Request Form</a>
                            <br><a href="general/10th Grade Course Request Form.pdf" target="_blank">10th Grade Course Request Form</a>
                            <br>
                            <a href="general/11th Grade Course Request Form.pdf" target="_blank">11th Grade Course Request Form</a>
                            <br>
                            <a href="general/12th Grade Course Request From.pdf" target="_blank">12th Grade Course Request Form</a></p>

                </div>
                <!--well-->


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
                    <h3>SAFE UT<br></h3>
                    <p>Please call directly or text a trained psychologist/psychiatrist to help with personal issues or to send tips regarding people or events that could affect individuals or the entire school at:
                        <br>
                        <center> 
                            <!--a href="https://www.p3tips.com/access.aspx?Tipster=1" target="_blank"><img src="assets/img/follow.png" style="max-width: 200px; margin-bottom: 5px;"></a-->
                            <a href="https://safeut.med.utah.edu/" target="blank"><img src="assets/img/crisis.png" style="max-width: 200px; margin-top: 5px;"></a>
                </div>

                <div class="well">

                    <h3><span class=style9>PowerSchool Parent Portal</span><br></h3>
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
                    <a href="https://irondistrict.org/calendar/" target="_blank">Calendar 2017-2018 </a></div>

            </div>

         
			
            </div>
            <!--/row-fluid -->

            </span>
            <!--/span9 -->

            </div>
            <!--/row -->

            <?php include("assets/inc/footer.php") ?>

                </div>
                <!-- /container -->

                <!-- Yummy JavaScrips

    	================================================== -->

                <!-- Placed at the end of the document so the pages load faster -->

                <script src="assets/js/jquery.js"></script>

                <script src="assets/js/bootstrap.js"></script>

                <script src="assets/js/bootstrap-carousel.js"></script>

                <center>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            getCount("Freshmen.avi");
                            getCount("10-11-12.mov");
                            getCount("CHS - What Every Senior Must Know.avi");
                        });

                        function getCount(url) {
                            console.log("Calling : " + url);
                            $.ajax({
                                url: "http://www.noahroufus.com/chs/getCounter.php",
                                type: "POST",
                                data: {
                                    "url": url
                                }
                            }).success(function(data) {
                                console.log(data);
                                $("a[href=\"" + url + "\"]").text($("a[href=\"" + url + "\"]").html() + " (" + data + " views)");
                            });

                            $("a[href=\"" + url + "\"]").click(function(e) {

                                $.ajax({
                                    url: "http://www.noahroufus.com/chs/addCounter.php",
                                    type: "POST",
                                    data: {
                                        "url": url
                                    }
                                }).success(function() {
                                    window.location.href = "http://chs.ironk12.org/" + url;
                                });

                                e.preventDefault();
                            });
                        }
                    </script>
                </center>
    </body>

    </html>