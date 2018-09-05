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
						
							 <?php
							 $num = 1;
							 $base = "assets/img/Banner/";
							 while(file_exists($base.$num.".jpg") || file_exists($base.$num.".gif")){
								 if(file_exists($base.$num.".jpg")){
									 $me = $base.$num.".jpg";
								 }else if(file_exists($base.$num.".gif")){
									 $me = $base.$num.".gif";
								 }
								 ?>
								 <div class="item<?php if($num==1){echo " active";} ?>" <?php if(isset($_GET['b'])){ ?>title="Banner <?php echo $num; ?>"<?php } ?>>
									<img src="<?php echo $me; ?>?t=<?php echo time();?>">	              			
								 </div>
								 <?php
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

						    <!--align-->

 <div class="well"><div align="center" class="style14">

            <h3><u><a href="https://docs.google.com/document/d/1XiHJKaeIVWN_VNsRQSAVAAdKlm83qTo5f0D7y3Fse64/edit?usp=sharing"target="_blank">New Scholarships</a></u>
          </h3>
          </div>

	    </div>                  
     <!--well-->
 


 <div class="well">
					      <div align="center" class="style14">
					        <h3><u><a href="general/CHS Store.pdf"target="_blank">CHS Store</a></u></h3>                                                                                               </div>
                             
                        </div>
	<?php if(date("D") == "Wed"){ ?><div class="well">
						<h3><span class="style9">Late Start Wednesday Schedule</span>
                        <br>
                        </h3>
                        <p><strong>PLC's/Student Intervention</strong> 7:50-9:35 (105 min.)
                            <br>
                            <strong>1st</strong> 9:40-10:34 (54 min.)
                            <br>
                            <strong>CCR</strong> 10:39-11:03 (22 min.)
                            <br>
                            <strong>2nd</strong> 11:08-12:02 (54 min.)
                            <br>
                            <strong>Lunch</strong> 12:02-12:47 (45 min.)
                            <br>
                            <strong>3rd</strong> 12:47-1:41 (54 min.)
                            <br>
                            <strong>4th</strong> 1:46-2:40 (54 min.)</br>
                            <br> *Late start Wednesday scheduled bus routes will run approximately 1 hour and 45 minutes later than regularly scheduled routes. To see the regular schedule for bus routes, <a href="http://www.infofinderi.com/ifi/?cid=ICSD38UM4SQ2J" target="_blank">click here.</a></p>
	</div> <?php } ?> 	
   
    
  
    				
 <div class="well">
          <h3>Sterling Scholars<br>
	      </h3>
          <strong><u>Seniors</u></strong> - Become a sterling scholar! To see if you meet the requirements, <a href="general/Sterling Scholar Information (2).docx"target="_blank">click here</a>. Remember that all applications are DUE on or before <strong>November 16</strong>. For more information, see Kristin Brinkerhoff in room #306. Don't delay!</div>	
                         
     <div class="well">
          <h3>Hey, Students!</h3>
         
          <strong><u>ACT Prep</u></strong> - There will be an ongoing ACT Prep Class each Wednesday morning from 8:00 to 9:30 a.m. in the library. Two weeks prior to each national test date there will be additional classes scheduled before and after school.<br>
          <strong><u>Science Fair</u></strong> - Anyone who wants to participate in the Science Fair needs to fill out an application. See the link on Mrs. Lewin's website or talk to her in room #607. The fair will be on January 23. Start your projects now!<br>
        
          <strong><u>Seniors</u></strong> - Please remind your parents to buy a senior ad for the yearbook. You know you deserve the recognition because you are FINALLY SENIORS...yay! Senior ads are due by <strong>November 15.</strong> For a copy of the request form<a href="general/Senior BLOCK Advertisement Letter.pdf"target="_blank"> click here</a>.
</p>
                    </div>
					
					<div class="well">
          <h3>Alumni Basketball Game </h3>
		 There is an Alumni Basketball Tournament on <strong>Nov. 22nd.</strong> Games will start at 10 a.m. and each team will be guaranteed 2 games.  
		 The cost is $300 per team and checks should be made to Cedar High Basketball. 
		 Registrations including payment must be received by Debbie Slaugh prior to the end of the business day on Nov. 17.
		 Games will start at 10am on the 22nd of Nov. <br>
Any question contact Coach Beck at russ.beck@ironmail.org
                    </div>
                    <!--well-->
					<div class="well">
          <h3>Sports</h3>
       
          <strong><u>All Athletes</u></strong> - There will be a short Especially for Athletes meeting today, <strong>Monday, October 30,</strong> at the beginning of lunch in the lecture hall. Please plan to attend. It will be quick!<br> 
          <strong><u>Wrestling</u></strong> - Wrestlers and parents should attend the parents' meeting on <strong>Wednesday, November </strong>1, at 6:00 p.m.in the CHS lecture hall.<br> 
          <strong><u>Lady Reds Basketball</u></strong> - Parent/athlete meeting for all interested in playing on <strong>Thursday, November 2</strong> at 7:00 p.m. in the lecture hall. Practices begin Monday, <strong>November 6</strong> for all those wanting to play.<br>3:00-5:30 p.m. for Varsity and JV at Cedar High School<br>
    3:30-5:30 p.m. for Sophomores and Freshmen at Cedar Middle School
    <p><u><strong>Boys Basketball</strong></u> - Parent/athlete meeting for anyone interested in playing on <strong>Wednesday, November 1,</strong> at 7:30 p.m. in the lecture hall. Basketball tryouts will be held <strong>November 6-7.</strong> <br>
            3:00-5:00 p.m. for Varsity and JV <br> 
            5:00-7:00 p.m. for Sophmores and Freshmen <br>    
             </p>
					</div>
					
	<div class="well">
          <h3>Learning Center<br>
	      </h3>
          Need help with homework? Need access to a computer and/or internet? Please come to the Learning Center located in the CHS library now available <strong>Monday through Thursday evenings from 6:30-9:00 p.m.</strong> and <strong>Wednesday mornings from 7:30 to 9:35 a.m.</strong> Excellent tutors available in the evenings!</div>				
                    
                    <!--well-->
<div class="well">
          <h3>Club News<br></h3>
      
		  <strong><u>Rubik's Cube  Club</u></strong> - Club meetings will be held each Wednesday and Friday during lunch in Mrs. Braithwaite's room #305. </div>
	  
<div class="well">
          <h3>Junior Redmen Basketball Camp</h3>
		  Improve skills at the Junior Redmen Basketball Camp from:<br>
		  <em>9:00-10:00</em> (boys Kindergarten through 1st)<br>
		  <em>10:00-11:00</em> (boys 2nd through 3rd)<br>
		  <em>11:00-12:00</em> (boys 4th through 5th)<br>
		  <em>12:00-1:00</em> (girls Kindergarten through 2nd only) on the following dates:<br> 
		  <strong>November 4, 11, 18 <br> December 2, 9, 16</strong><br>
		  The camp is for children Kindergarten through 5th grade (girls K-2nd) and costs $40 per child.  Signups can be completed 30 minutes prior to their age group starting.
          <Br> 
          For more information contact:<br>
          <em>Coach Beck</em> at russ.beck@ironmail.org (boys), or <br>
          <em>Coach Nielsen at </em>corry.nielsen@ironmail.org (girls).
</p>
                    </div>		  
		
          
                    
					 
				<div class="well">

                    <h3><span class="style9">Utah Scholars Website\Regents Scholarship Application</span><br></h3>

                    <p><a href="http://utahscholars.org/" target="_blank">utahscholars.org</a> / Utah Scholar
                        <br>
                        <a href="http://regentsscholarship.org" target="_blank">regentsscholarship.org                         </a>/ Regents Scholar
                        <br>
                        <a href="http://www.schools.utah.gov/arc/CTE/UtahStudentPlanningGuideHS/HTML/#10" target="_blank" hidden>College and Career Ready </a>
                        <br>
                    </p>
                </div>
                    <!--well-->

                    <div class="well">

                        <h3>CHS Blankets<br>
          </h3>
                        <p>Cedar High Redmen blankets are available for sale! Contact Mrs. Esplin at danna.esplin@ironmail.org for purchase. The cost is $60.
                            <br>
                        </p>
                    </div>
                    <!--well-->

                    <div class="well">
                        <h3><span class="style9">Listen and Watch Local Sports on Radio and TV</span></h3>
                        <p>For more information <a href="https://drive.google.com/file/d/0B5xgpm9L00dIWUFnMW9ucndZQnJPeEt0Q2l6alF4U1ZwX0xr/view" target="_blank">click here</a>.</p>
                    </div>
                     
					
                    
                   
                   
                    
                    
                    
                    <!--well-->

            </div>
            <!--end of middle column (span6)-->

            <div class="span6">
                <!--Beginning of side column-->

                <div class="well">

                  <h3><u><a href="dailyannouncements.pdf">Announcements</a></u></h3>
                        <a href="https://drive.google.com/file/d/0BxUOHxvrSZz3NkYtNVBHLWU3N3M/view?ts=59efd3a8"target="_blank">Video Announcements</a><br> 
                        <a href="https://www.youtube.com/watch?v=l6gNr371QjA&t=2s"target="_blank">Scary Movie</a><br>
                        Grade Checks <br><br>
                        <strong>Personal devices only</strong> (cell phones, iPods, etc.): The district office has made a change to the Internet access. In order to access the Internet in the CHS building, you will need to obtain the ICSD certificate. To obtain the certificate, <a href="http://old.irondistrict.org/cert" target="_blank">click here</a> and carefully follow the instructions. </p>
              </div>
					<div class="well">
					<h3> CCR Lesson Plans</h3>
					
						<strong>
                      <a href="https://docs.google.com/document/d/1A4zjDFVVgLntBtK3Jf7V-pLVdl-JMds7Rllz6B_sBUc/edit?ts=59ef56ba"target="_blank">Seniors</a></strong><br>
						
                        <strong><a href="https://docs.google.com/document/d/1sskTlwvFfy4g37V9qLdyHZ72irNkFhI1Tr55HyFDygw/edit?ts=59ef69ee"target="_blank">Juniors</a></strong><br>

                        <strong><a href="https://docs.google.com/document/d/1nynChitAcicVUrebMM4p80J5FpCG2QWQyHfMlgEKUw4/edit"target="_blank">Sophomores</a></strong><br>
						
                   	    <strong><a href="https://docs.google.com/document/d/1Nz8zAxjr7Vxj-G-jUCElIEr2kvSmqxklepwTwTeRaVo/edit"target"_blank">Freshmen</a></strong><br><br>
						
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

                <script src="//chs.ironk12.org/assets/js/jquery.js"></script>

                <script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>

                <script src="//chs.ironk12.org/assets/js/bootstrap-carousel.js"></script>

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