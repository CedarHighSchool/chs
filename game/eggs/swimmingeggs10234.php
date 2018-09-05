<?php $thisPage="clubs"; ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <title>Cedar High School</title>

        <?php include("../../assets/inc/headtag.php"); if(!$GAME_UP){die("<script>window.location.href='/game/down.php';</script>Sorry, the Hunt is down for the moment! Please check back later.");} ?>
            <style>
                .imglabel {
                    font-size: 12px;
                }
                
                @media (min-width: 768px) and (max-width: 979px) {
                    .imglabel {
                        font-size: 40px;
                    }
                }
            </style>

    </head>

    <body>

        <?php include("../../assets/inc/navbar.php") ?>

            <style type="text/css">
                a.thumbnail {
                    height: 205px;
                }
            </style>

            <!-- Let the container begin! -->

            <div class="container">

                <div class="row">

                    <?php include("../../assets/inc/navlist.php") ?>

                        <div class="span9">
                            <div class="well">
                                <h1>You Found An Egg!</h1>
                            </div>
                        </div>
                        <div class="span9">
                            <div class="well">
                                <hr>
                                <center>
                                    <h3>Congratulations</h3>
                                </center>
                                <hr>
                            </div>
                            <!--well-->
                        </div>
                        <!--span3-->
                        <style>
                           .question {
                              display: none;
                           }
                           .question.active {
                              display: block;
                           }
                        </style>
                        <script>
                           $(document).ready(function() {
                              function updateItems(delta){
                                  var $items = $('#quiz-q').children();
                                  var $current = $items.filter('.active');
                                  var index = $current.index();
                                  var newIndex = index+delta;
                                  // Range check the new index
                                  newIndex = (newIndex < 0) ? 0 : ((newIndex > $items.length) ? $items.length : newIndex); 
                                  if (newIndex != index){
                                      $current.removeClass('active');
                                      $current = $items.eq(newIndex).addClass('active');
                                      // Hide/show the next/prev/done
                                      $("#done").toggle($current.is($items.last()));
                                      
                                      $("#prev").toggle(!$current.is($items.first()));
                                      $("#next").toggle(!$current.is($items.last()));
                                  }
                              }
                              $("#begin").click(function () {
                                //   $("#next")
                                  updateItems(1);
                              });
                              $("#next").click(function () {
                                  updateItems(1);
                              });
                              $("#prev").click(function () {
                                  updateItems(-1);
                              });
                              $("#done").click(function () {
                                  $("#submitter").click();
                              });
                           });
                        </script>
                        <div class="span6">
                            <div class="well">
                                <!-- Quiz Begins -->
                                <center><h2>Star Wars</h2></center>
                                <br>
                                <form action="" method="post" id="quiz">
                                      <div id="quiz-q">
                                      <div class="question active">
                                         <h3>In order to get the points pass this quiz with 80% or higher!</h3><br>
                                         <style>
                                            .marvel {
                                                background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Star_Wars_Logo.svg/1200px-Star_Wars_Logo.svg.png");
                                                background-position: center;
                                                background-size: cover;
                                                color: white;
                                                min-height: 10em;
                                            }
                                            .congrats {
                                                background-image: url("https://img1.etsystatic.com/192/0/12197087/il_570xN.1286362903_b5be.jpg");
                                                background-position: center;
                                                background-size: cover;
                                                color: white;
                                                min-height: 10em;
                                                border-radius: 0px;
                                                text-align: center;
                                            }
                                            .congrats span {
                                              background-color: #5CA540;
                                              font-size: 120%;
                                              border-radius: 40%;
                                              padding: 7px;
                                            }
                                            #begin {
                                                float: right;
                                                
                                                position: relative;
                                                right: 0px;
                                                top: 130px;
                                            }
                                            .question {
                                                text-align: center;
                                            }
                                            .question img {
                                                max-height: 200px;
                                            }
                                         </style>
                                         <div class="hero-unit marvel">
                                          <br>
                                            <a class="btn btn-primary btn-large" id="begin">
                                              Begin 
                                            </a>
                                        </div>
                                         <br>
                                      </div>
                                      <div class="question">
                                           <img src="https://i.imgur.com/veJc0oEl.png"><br><br>
                                         <b>Q1.</b> How many Jedi are there on the Jedi Counsel<br>
                                         <br>
                                          <select name="q1">
                                              <option value="20">
                                                  20
                                              </option>
                                              <option value="15">
                                                  15
                                              </option>
                                              <option value="12">
                                                  12
                                              </option>
                                              <option vlaue="5">
                                                  5
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="http://media.extratv.com/2015/06/22/anakin-skywalker-1-825x580.jpg"><br><br>
                                         <b>Q2.</b> Where was Anakin Skywalker born<br>
                                             <br>
                                          <select name="q2">
                                              <option value="naboo"> 
                                                  Naboo
                                              </option>
                                              <option value="tatooine">
                                                  Tatooine
                                              </option>
                                              <option value="coruscant">
                                                  Coruscant
                                              </option>
                                              <option value="hoth">
                                                   Hoth
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                        <img src="https://vignette.wikia.nocookie.net/starwars/images/6/6b/HanPopcicle.png/revision/latest?cb=20130331005801"><br><br>
                                         <b>Q3.</b> What was Han Solo frozen in?<br>
                                             <br>
                                          <select name="q3">
                                              <option value="carbon">
                                                  Carbonite
                                              </option>
                                              <option value="ice">
                                                  Ice
                                              </option>
                                              <option value="time">
                                                  Time
                                              </option>
                                              <option value="nitrogen"> 
                                                  Liquid Nitrogen
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://vignette.wikia.nocookie.net/starwars/images/d/de/Grievoushead.jpg/revision/latest?cb=20100630082056"><br><br>
                                         <b>Q4.</b> How many lightsabers does General Grievous use?<br>
                                             <br>
                                          <select name="q4">
                                              <option value="7">
                                                  7
                                              </option>
                                              <option value="2">
                                                  2
                                              </option>
                                              <option value="4"> 
                                                  4
                                              </option>
                                              <option value="1"> 
                                                  1
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://lumiere-a.akamaihd.net/v1/images/databank_larsmoisturefarm_01_169_ac15d1cd.jpeg?region=0%2C0%2C1560%2C878&width=768"><br><br>
                                         <b>Q5.</b> What kind of farm did Luke grow up on?<br>
                                             <br>
                                          <select name="q5">
                                              <option value="carrot">
                                                  A carrot farm
                                              </option>
                                              <option value="moisture">
                                                  A moisture farm
                                              </option>
                                              <option value="dairy"> 
                                                  A dairy farm
                                              </option>
                                              <option value="potato">
                                                  A potato farm
                                              </option>
                                          </select><br>
                                      </div>
                                       <div class="question">
                                         <img src="https://fsmedia.imgix.net/8a/e9/8b/29/03e8/4d10/ac71/686bdd3abb53/87723825202a459e866do.jpeg"><br><br>
                                         <b>Q6.</b> What year was the first Star Wars movie released?<br>
                                             <br>
                                          <select name="q6">
                                              <option value="1843">
                                                  1843
                                              </option>
                                              <option value="1977"> 
                                                  1977
                                              </option>
                                              <option value="1983">
                                                  1983
                                              </option>
                                              <option value="1999">
                                                  1999
                                              </option>
                                          </select><br>
                                      </div>
                                       <div class="question">
                                           <img src="http://assets1.ignimgs.com/2016/10/17/rebia17231jpg-f47eca_1280w.jpg"><br><br>
                                         <b>Q7.</b> Who is the supreme commander of the droid army?<br>
                                             <br>
                                          <select name="q7">
                                              <option value="ackbar">
                                                  Admiral Ackbar
                                              </option>
                                              <option value="palpatine">
                                                  Emporer Palpatine
                                              </option>
                                              <option value="amadala"> 
                                                  Senator Amadala
                                              </option>
                                              <option value="grievous">
                                                  General Grievous
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://vignette.wikia.nocookie.net/starwars/images/0/01/Hansoloprofile.jpg/revision/latest/scale-to-width-down/499?cb=20100129155042"><br><br>
                                         <b>Q8.</b> What was Han Solo's response to Leia after she said: "I love you"?<br>
                                             <br>
                                          <select name="q8">
                                              <option value="know">
                                                  I know
                                              </option>
                                              <option value="love">
                                                  I love you too
                                              </option>
                                              <option value="feeling"> 
                                                  I have a bad feeling about this
                                              </option>
                                              <option value="odds">
                                                  Don't tell me the odds
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://www.yourprops.com/movieprops/original/4297055947c67/Star-Wars-Return-Of-The-Jedi-Luke-Skywalker-ROTJ-Mini-Lightsaber-1.jpg"><br><br>
                                         <b>Q9.</b> What color is luke Skywalker's light saber in Return of the Jedi.<br>
                                             <br>
                                          <select name="q9">
                                              <option value="red">
                                                  Red
                                              </option>
                                              <option value="blue" selected>
                                                  Blue
                                              </option>
                                              <option value="purple"> 
                                                  Purple
                                              </option>
                                              <option value="green">
                                                  Green
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://vignette.wikia.nocookie.net/starwars/images/d/d6/Yoda_SWSB.png/revision/latest?cb=20150206140125"><br><br>
                                         <b>Q10.</b> What planet does Luke find Yoda?<br>
                                             <br>
                                          <select name="q10">
                                              <option value="endor">
                                                  Endor
                                              </option>
                                              <option value="dagobah">
                                                  Dagobah
                                              </option>
                                              <option value="coruscant"> 
                                                 Coruscant
                                              </option>
                                              <option value="tatooine">
                                                 Tatooine
                                              </option>
                                          </select><br>
                                      </div>
                                   <div class="question">
                                          <img src="https://upload.wikimedia.org/wikipedia/en/8/8f/Emperor_RotJ.png"><br><br>
                                         <b>Q11.</b> Who killed the Emperor?<br>
                                             <br>
                                          <select name="q11">
                                              <option value="luke">
                                                  Luke
                                              </option>
                                              <option value="leia">
                                                  Leia
                                              </option>
                                              <option value="han"> 
                                                 Han Solo
                                              </option>
                                              <option value="vader">
                                                 Darth Vader
                                              </option>
                                          </select><br>
                                      </div>
                                   <div class="question">
                                          <img src="https://vignette2.wikia.nocookie.net/starwars/images/1/1b/Obi-Wan_Kenobis_first_lightsaber_-_SW_Card_Trader.png/revision/latest?cb=20160710021446"><br><br>
                                         <b>Q12.</b> What was the color of Obi-Wan Kenobi's lightsaber?<br>
                                             <br>
                                          <select name="q12">
                                              <option value="red">
                                                  red
                                              </option>
                                              <option value="blue">
                                                  blue
                                              </option>
                                              <option value="purple"> 
                                                 purple
                                              </option>
                                              <option value="green">
                                                 green
                                              </option>
                                          </select><br>
                                      </div>
                                   <div class="question">
                                          <img src="http://vignette3.wikia.nocookie.net/starwars/images/c/c7/TIEfighter-Fathead.png/revision/latest?cb=20150310124222"><br><br>
                                         <b>Q13.</b> What is the uniform color of a TIE fighter pilot?<br>
                                             <br>
                                          <select name="q13">
                                              <option value="orange">
                                                  Orange
                                              </option>
                                              <option value="blue">
                                                  Blue
                                              </option>
                                              <option value="black"> 
                                                  Black
                                              </option>
                                              <option value="green">
                                                  Green
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://glitchup.com/wp-content/uploads/2017/08/luke-skywalker-retro.jpg"><br><br>
                                         <b>Q14.</b> Whose presence did Luke feel on Endor.<br>
                                             <br>
                                          <select name="q14">
                                              <option value="leia">
                                                  Leia's
                                              </option>
                                              <option value="vader">
                                                  Darth Vader's
                                              </option>
                                              <option value="obi"> 
                                                  Obi-Wan's
                                              </option>
                                              <option value="solo">
                                                  Han Solo's
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://vignette.wikia.nocookie.net/starwars/images/4/47/Merr-Sonn_Deck_Sweeper_Stun_Blaster.jpg/revision/latest?cb=20091109205728"><br><br>
                                         <b>Q15.</b> What is the color of a blaster stun bolt?<br>
                                             <br>
                                          <select name="q15">
                                              <option value="orinj">
                                                  Orange
                                              </option>
                                              <option value="read">
                                                  Red
                                              </option>
                                              <option value="blu"> 
                                                  Blue
                                              </option>
                                              <option value="green">
                                                  Green
                                              </option>
                                          </select><br>
                                      </div>
                                   <div class="question">
                                          <img src="https://lumiere-a.akamaihd.net/v1/images/databank_tauntaun_01_169_b7307446.jpeg?region=0%2C49%2C1560%2C780"><br><br>
                                         <b>Q16.</b> What did Han Solo use to slice open the belly of a Tauntaun?<br>
                                             <br>
                                          <select name="q16">
                                              <option value="lightsaber">
                                                  A lightsaber
                                              </option>
                                              <option value="knife">
                                                  A knife
                                              </option>
                                              <option value="metal"> 
                                                  A piece of metal
                                              </option>
                                              <option value="sword">
                                                  A sword
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://clonecorridor.files.wordpress.com/2015/06/review_sclukebespincommander_stillg.jpg"><br><br>
                                         <b>Q17.</b> What planet did luke say gave him the creeps?<br>
                                             <br>
                                          <select name="q17">
                                              <option value="tatooine">
                                                  Tatooine
                                              </option>
                                              <option value="hoth">
                                                  Hoth
                                              </option>
                                              <option value="coruscant"> 
                                                  Coruscant
                                              </option>
                                              <option value="dagobah">
                                                  Dagobah
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="http://3.bp.blogspot.com/-xFDhSpD5B0c/UrD5UamXlNI/AAAAAAAASSQ/V8eBiFCjt2s/s1600/natalie-portman-as-queen-padme-amidala-phantom.jpg"><br><br>
                                         <b>Q18.</b>Who is the droid Amidala thanks for his bravery?<br>
                                             <br>
                                          <select name="q18">
                                              <option value="c3">
                                                  C3PO
                                              </option>
                                              <option value="r2">
                                                  R2D2
                                              </option>
                                              <option value="r4"> 
                                                  R2D4
                                              </option>
                                              <option value="k">
                                                  K-2SO
                                              </option>
                                          </select><br>
                                      </div>
                                           <div class="question">
                                          <img src="https://lumiere-a.akamaihd.net/v1/images/chewie-db_2c0efea2.jpeg?region=0%2C154%2C1592%2C796"><br><br>
                                         <b>Q19.</b>What type of creature is Chewbacca?<br>
                                             <br>
                                          <select name="q19">
                                              <option value="unkown">
                                                  Unkown
                                              </option>
                                              <option value="gun">
                                                  Gungan
                                              </option>
                                              <option value="wookie"> 
                                                  Wookie
                                              </option>
                                              <option value="jawa">
                                                  Jawa
                                              </option>
                                          </select><br>
                                      </div>
                                           <div class="question">
                                          <img src="https://lumiere-a.akamaihd.net/v1/images/databank_endor_01_169_68ba9bdc.jpeg?region=0%2C49%2C1560%2C780"><br><br>
                                         <b>Q20.</b>What type of creature lives in the trees on Endor<br>
                                             <br>
                                          <select name="q20">
                                              <option value="ewok">
                                                  Ewoks
                                              </option>
                                              <option value="gun">
                                                  Gungan
                                              </option>
                                              <option value="hutt"> 
                                                  Hutt
                                              </option>
                                              <option value="jen">
                                                  Jenet
                                              </option>
                                          </select><br>
                                      </div>
                                      </div>
                                    <?php
                                    if(isset($_POST['q1'])){ // If they have taken the test
                                        $GAMEID = 8;
                                        
                                        $q = array();
                                        $q[] = $_POST['q1'] == "12"; // Define the answers (they can't see this PHP)
                                        $q[] = $_POST['q2'] == "tatooine";
                                        $q[] = $_POST['q3'] == "carbon";
                                        $q[] = $_POST['q4'] == "4";
                                        $q[] = $_POST['q5'] == "moisture";
                                        $q[] = $_POST['q6'] == "1977";
                                        $q[] = $_POST['q7'] == "grievous";
                                        $q[] = $_POST['q8'] == "know";
                                        $q[] = $_POST['q9'] == "green";
                                        $q[] = $_POST['q10'] == "dagobah";
                                        $q[] = $_POST['q11'] == "vader";
                                        $q[] = $_POST['q12'] == "blue";
                                        $q[] = $_POST['q13'] == "black";
                                        $q[] = $_POST['q14'] == "vader";
                                        $q[] = $_POST['q15'] == "blu";
                                        $q[] = $_POST['q16'] == "lightsaber";
                                        $q[] = $_POST['q17'] == "dagobah";
                                        $q[] = $_POST['q18'] == "r2";
                                        $q[] = $_POST['q19'] == "wookie";
                                        $q[] = $_POST['q20'] == "blu";
                                        // Calculate percentage
                                        $total = 0;
                                        foreach($q as $t) {
                                            $total += $t;
                                        }
                                        $total = $total/sizeof($q);
                                        $total = $total*100;
                                        $total = floor($total);

                                        if($total >= 80){
                                            $pass = true;
                                        }else{
                                            $pass = false;
                                        }

                                        // Display stuff
                                        echo "<div class='alert alert-".($pass?"success":"error")."'><b>$total%</b> "; // Tell the user their score
                                        if($pass){
                                            echo "You passed! ";
                                            // They passed, give them a code

                                            $mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
                                            $us = $_SESSION['game_username'];
                                            $usid = $mysqli->query("SELECT `id` FROM `game_users` WHERE `username`='$us'");
                                            $usid = $usid->fetch_array()['id'];
                                            // $row = $usid->fetch_array(MYSQLI_ASSOC);
                                            // $ccdd = $row['id'];
                                             $pts = 2000;
                                            // finished establishing variables
                                            $takens2 = $mysqli->query("SELECT * FROM `game_test_completes` WHERE `who`=$usid and `which`=$GAMEID");
                                            $p = $mysqli->prepare("INSERT INTO `game_uses` (`user`,`code`,`when`) VALUES (?, ?, ?)");
                                            $p->bind_param("iis", $usid, $GAMEID, $t);
                                            $p->execute();
                                            if($takens2->num_rows > 0) {
                                              echo "You don't get points more than once, though.";
                                            } else {
                                              $p = $mysqli->query("UPDATE `game_users` SET `score`=(`score`+$pts) WHERE `username`='$us'");
                                              if(!$p){
                                                die($mysqli->error);
                                              }
                                              $t = time();
                                              $p = $mysqli->query("INSERT INTO `game_test_completes` (`who`,`when`,`which`) VALUES ('$usid', '$t', $GAMEID)");
                                              $p = $mysqli->query("INSERT INTO `game_hint_done` (`who`,`hint`,`code`) VALUES ('$usid', $GAMEID, $GAMEID)");
                                              if(!$p){
                                                die($mysqli->error);
                                              }
                                              // end of point system
                                              $mysqli->query("UPDATE `game_users` SET `level`=`level`+1 WHERE `id`=$usid"); // Increment level
                                            }
                                        }else{
                                            echo "You did not pass."; // They did not pass
                                        }
                                        echo "</div>";
                                    }
                                    ?>
                                   <input type="submit" id="submitter" style="display:none;" hidden class="hidden">
                                </form>
                                 <button id="prev" class="btn btn-default" style="display: none;">Prev</button>
                                 <button id="next" class="btn btn-default" style="display: none;">Next</button>
                                 <button id="done" class="btn btn-success" style="display: none;">Submit</button>
                                    <?php
                                 if($pass){
                                   ?>
                                   <div class="hero-unit congrats"><span> Congratulations! You Passed!!</span></div>
                                   <?php
                                 }
                                 ?>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="well">
                                <?php include("../options.php"); ?>
                            </div>
                        </div>
                        <style>
                            .styled-table {
                                font-size: 110%;
                            }
                            
                            tr td:nth-child(1) {
                                font-weight: bold;
                            }
                            
                            .btn-account h4 {
                                color: #ffffff !important;
                            }
                        </style>
                        <div class="span3">
                            <div class="well">
                                <?php include("../scores.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="//chs.ironk12.org/assets/js/jquery.js"></script>
                <script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
    </body>

    </html>