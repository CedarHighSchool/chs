<?php $thisPage="staff"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cedar High School</title><?php include("../assets/inc/headtag.php") ?>
    <style>
                        .imglabel {
                                font-size: 12px;
                        }
                        
                        @media (min-width: 768px) and (max-width: 979px) {
                                .imglabel {
                                        font-size: 9px;
                                }
                        }
						.well {
							margin-left: 0px !important;
						}
						
						.new {
							margin-left: 0px !important;
						}
						
						.imglabel {
								text-align:center;
                                font-size: 11px;
                        } 
            .thumbnails{
              padding: 0 0 9px 35px;
            }
            .thumbnails .span2{
              margin: 0 0 18px 20px;
            }
            .thumbTop{
              display: flex;
              flex-direction: row;
            }
            .thumbBot{
              display: flex;
              flex-direction: row;
            }
            @media (max-width: 767px) {
              .thumbTop{
                display: flex;
                flex-direction: column;
              }
              .thumbBot{
                display: flex;
                flex-direction: column;
              }
              .thumbnails .span2{
                width: max-content;
              }
            }
						
</style>

  </head>
  
  <body><?php include("../assets/inc/navbar.php") ?>
  
  <!-- Let the container begin! -->
  <div class="container">
    <div class="row">
    
      <?php include("../assets/inc/navlist.php") ?>
      
      <div class="span8" style="margin-left: 0px auto; ">
        <img src="staffpic/banner.png" />
      </div><!--span8-->
      
      <!--teacher grid -->
      <div class="row span9">
      
	  <div class="span8 new">
      
        <div class="well well-small"> 
            <h3>Administration</h3>
        </div>
              
        <ul class="thumbnails">
        <div class="thumbTop">
          <li class="span2">
            <a href="/academics" class="thumbnail">
              <img src="staffpic/dodds-john.jpg" alt="" />
              <div class="imglabel"><p>John Dodds</p></div>
              <div class="imglabel"><p>Principal</p></div>
            </a>
            </li>
          
          <li class="span2">
            <a href="/academics" class="thumbnail">
              <img src="../../assets/img/facstaff/sanders-terri.jpg"alt="" />
              <div class="imglabel"><p>Terri Sanders</p></div>
              <div class="imglabel"><p>Vice Principal</p></div>
            </a>
          </li>
            
          <li class="span2">
            <a href="/academics" class="thumbnail">
              <img src="staffpic/lewis-danny.jpg" alt="" />
              <div class="imglabel"><p>Danny Lewis</p></div>
              <div class="imglabel"><p>Vice Principal / Athletic Director</p></div>
            </a>
          </li>
        </div>  
		</ul>
	</div><!--span8-administration-->
          
	<div class="span8 new">
          
       <div class="well well-small">
           <h3>Office</h3>
       </div>
              
	   <ul class="thumbnails">
	   <div class="thumbTop">
		  <li class="span2">
            <a href="mailto:debbie.slaugh@ironmail.org" class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt>
              <div class="imglabel"><p>Lori Stubbs</p></div>
              <div class="imglabel"><p>Office Manager</p></div>
            </a>
          </li>	 
             
          <li class="span2">
            <a href="mailto:bonnie.matheson@ironmail.org" class="thumbnail">
              <img src="staffpic/matheson-bonnie.jpg" alt="" />
              <div class="imglabel"><p>Bonnie Matheson</p></div>
              <div class="imglabel"><p>Registrar</p></div>
            </a>
          </li>
            
          <li class="span2">
            <a href="mailto:cindy.larson@ironmail.org" class="thumbnail">
              <img src="staffpic/larson-cindy.jpg" alt="" />
              <div class="imglabel"><p>Cindy Larson</p></div>
              <div class="imglabel"><p>Purchasing Agent</p></div>
            </a>
          </li>
        </div>
        <div class="thumbBot">
          <li class="span2">
            <a href="mailto:allison.palmer@ironmail.org" class="thumbnail">
              <img src="staffpic/palmer-allison.jpg" alt="" />
            <div class="imglabel"><p>Allison Palmer</p></div>
              <div class="imglabel"><p>Athletics, Attendance</p></div>
            </a>
          </li>
          
          <li class="span2">
            <a href="mailto:heidi.oswald@ironmail.org" class="thumbnail">
              <img src="staffpic/carter-travis.jpg" alt="" />
              <div class="imglabel"><p>Travis Carter</p></div>
              <div class="imglabel"><p>Resource Officer</p></div>
            </a>
          </li>
        </div>  
        </ul>	
   	</div><!--span8-office-->

   	<div class="span8 new">
          
       <div class="well well-small">
           <h3>Counseling</h3>
       </div>
              
	   <div class="thumbnails">
	   <div class="thumbTop">
	     
	     		  <li class="span2">
	     		    
              <img src="staffpic/placeholder_man.jpg" alt="" />
              <div class="imglabel"><p>Eric Hasemeyer (A-Br)</p></div>
              <div class="imglabel"><p>School Counselor</p></div>
            </a>
          </li>	 
          
		  <li class="span2">
            <a href="mailto:debbie.slaugh@ironmail.org" class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt>
              <div class="imglabel"><p>Natasha Tebbs (Bu-Hi)</p></div>
              <div class="imglabel"><p>School Counselor</p></div>
            </a>
          </li>	 
             
          <li class="span2">
            <a href="mailto:bonnie.matheson@ironmail.org" class="thumbnail">
              <img src="staffpic/placeholder_man.jpg" alt="" />
              <div class="imglabel"><p>Nick Parson (Ho-Pe))</p></div>
              <div class="imglabel"><p>School Counselor</p></div>
            </a>
          </li>
            
          <li class="span2">
            <a href="mailto:cindy.larson@ironmail.org" class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt="" />
              <div class="imglabel"><p>Jennifer Denhalter (Ph-Z)</p></div>
              <div class="imglabel"><p>School Counselor</p></div>
            </a>
          </li>
          
          </div>
          <div class="thumbBot">
          
          <li class="span2">
            <a href="mailto:allison.palmer@ironmail.org" class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt="" />
            <div class="imglabel"><p>Wendy Moon</p></div>
              <div class="imglabel"><p>Concurrent Enrollment</p></div>
            </a>
          </li>
          
          <li class="span2">
            <a href="mailto:heidi.oswald@ironmail.org" class="thumbnail">
              <img src="staffpic/fausett-linette.jpg" alt="" />
              <div class="imglabel"><p>Linette Fausett</p></div>
              <div class="imglabel"><p>Administrative</p></div>
            </a>
          </li>
          </div>
          
        </div>	
   	</div><!--span8-office-->
	
	<!--span8--resource-->
          
    <div class="span8 new">
          
         <div class="well well-small">
             <h3>Resource</h3>
         </div>
              
			<ul class="thumbnails">	
          <div class="thumbTop">  
         <li class="span2">
            <a class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt="" />
              <div class="imglabel"><p>Brynda Thomson</p></div>
              <div class="imglabel"><p>Administrative Assistant</p></div>
            </a>
         </li>  
         
         <li class="span2">
            <a class="thumbnail">
              <img src="staffpic/jordan-james.jpg" alt="" />
              <div class="imglabel"><p>James Jordan</p></div>
              <div class="imglabel"><p>Supervisor</p></div>
            </a>
          </li><br><br>
         
         <li class="span2">
            <a class="thumbnail">
              <div class="imglabel"><p>Laurie Anderson</p></div>
              <div class="imglabel"><p>Cinthya Boettcher</p></div>
              <div class="imglabel"><p>Matthew Broderick</p></div>
              <div class="imglabel"><p>Cynthia Bugg</p></div>
              <div class="imglabel"><p>Crystal Cox</p></div>
              <div class="imglabel"><p>Maria Cruz</p></div>
              <div class="imglabel"><p>Donna McDonald</p></div>
            </a>
          </li>
			    </div>
			    <div class="thumbBot">
         <li class="span2">
            <a class="thumbnail">
              <div class="imglabel"><p>Tyler Monks</p></div>
              <div class="imglabel"><p>Lynnette Roundy</p></div>
              <div class="imglabel"><p>Brynda Thomson</p></div>
              <div class="imglabel"><p>Sharrisa Turnbaugh</p></div>
              <div class="imglabel"><p>Samantha Walker</p></div>
              <div class="imglabel"><p>Kristen Walters</p></div>
              <div class="imglabel"><p>Julie Webb</p></div>
            </a>
          </li>
          </div>   
          
          </ul>
		  </div><!--span8--resource-->
          
           
 	<div class="span8 new">
    
         <div class="well well-small">
             <h3>Lunch Ladies</h3>
         </div>
              
	  <ul class="thumbnails">	
        <div class="thumbTop">    
        <li class="span2">
          <a class="thumbnail">
            <img src="staffpic/marilyn.jpg" alt="" />
            <div class="imglabel"><p>Marilyn Green</p></div>
            <div class="imglabel"><p>Supervisor</p></div>
           </a>
        </li>
          
         <li class="span2">
           <a class="thumbnail">
             <img src="staffpic/carylan.jpg" alt="" />
             <div class="imglabel"><p>Carolyn Gilger</p></div>
           </a>
         </li>
        </div>
         
      </ul>
	</div><!--span8-lunch ladies-->
          
    <div class="span8 new">
    
        <div class="well well-small">
            <h3>Custodial</h3>
        </div>
         
      	<ul class="thumbnails">
        <div class="thumbTop"> 
          <li class="span2">
            <a class="thumbnail">
              <img src="staffpic/star-jeff.jpg" alt="" />
              <div class="imglabel"><p>Jeff Star</p></div>
              <div class="imglabel"><p>Supervisor</p></div>
            </a>
          </li>
         
          <li class="span2">
            <a class="thumbnail">
              <div class="imglabel"><p>Thomas Byrd</p></div>
              <div class="imglabel"><p>Colton Davis</p></div>
              <div class="imglabel"><p>Matt Johnson</p></div>
              <div class="imglabel"><p>Shaun Jones</p></div>
              <div class="imglabel"><p>Robert Saylor</p></div>
              <div class="imglabel"><p>Gary Van Duzen</p></div>
              <div class="imglabel"><p>Riley Westwood</p></div>
              <div class="imglabel"><p>Gary Whicker</p></div>
            </a>
          </li>
          </div>
      </ul> 
	</div>
    
    <div class="span8 new">
    
       <div class="well well-small">
           	<h3>Specialized Staff</h3>
       </div>
       
       <ul class="thumbnails">
       <div class="thumbTop">
         <li class="span2">
            <a class="thumbnail">
              <img src="staffpic/placeholder_man.jpg" alt="" />
              <div class="imglabel"><p>Eddie Calamity</p></div>
              <div class="imglabel"><p>Native American Aide</p></div>
            </a>
         </li>
         <li class="span2">
            <a class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt="" />
              <div class="imglabel"><p>Sherrie Haynie</p></div>
              <div class="imglabel"><p>Facs Aide</p></div>
            </a>
         </li>
         <li class="span2">
            <a class="thumbnail">
              <img src="staffpic/placeholder_woman.jpg" alt="" />
              <div class="imglabel"><p>Cheryl Loveless</p></div>
              <div class="imglabel"><p>Copy Specialist</p></div>
            </a>
         </li>
         </div>
       </ul> 
	</div><!--span8-specialized--> 
        
    
   </div><!--span9-->
   </div><!--row-->
   </div><!--container-->
      <!--/teacher grid --><!--/row-->
    <?php include("../assets/inc/footer.php") ?>
    <!-- /container -->
  <!-- Yummy JavaScrips

        ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/assets/js/jquery.js"></script> 
  <script src="/assets/js/bootstrap.js"></script></body>
</html>
