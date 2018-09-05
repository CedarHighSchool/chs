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
                                <center><h2>Marvel</h2></center>
                                <br>
                                <form action="" method="post" id="quiz">
                                      <div id="quiz-q">
                                      <div class="question active">
                                         <h3>In order to get the points, pass this quiz with 80% or higher!</h3><br>
                                         <style>
                                            .marvel {
                                                background-image: url("https://www.bleedingcool.com/wp-content/uploads/2017/05/marvelstudios-2016logo.jpg");
                                                background-position: center;
                                                background-size: cover;
                                                color: white;
                                                min-height: 10em;
                                            }
                                            .congrats {
                                                background-image: url("https://img.purch.com/o/aHR0cDovL3d3dy5uZXdzYXJhbWEuY29tL2ltYWdlcy9pLzAwMC8xNjQvNDg4L2kwMi9kZWFkcG9vbC1tb3ZpZS1wb3N0ZXItdmFsZW50aW5lcy5qcGc=");
                                                background-position: center;
                                                background-size: cover;
                                                color: white;
                                                min-height: 10em;
                                                border-radius: 0px;
                                            }
                                            .congrats span {
                                              background-color: black;
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
                                           <img src="https://images.susu.org/unionfilms/films/posters/xlarge/iron-man.jpg"><br><br>
                                         <b>Q1.</b> What year did Iron Man come out?<br>
                                         <br>
                                          <select name="q1">
                                              <option value="2010">
                                                  2010
                                              </option>
                                              <option value="2008"> <!-- Correct -->
                                                  2008
                                              </option>
                                              <option value="2007">
                                                  2007
                                              </option>
                                              <option vlaue="2006">
                                                  2006
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://upload.wikimedia.org/wikipedia/en/c/c7/Doctor_Strange_poster.jpg"><br><br>
                                         <b>Q2.</b> Who played Doctor Strange?<br>
                                             <br>
                                          <select name="q2">
                                              <option value="benedict">
                                                  Benedict Cumberbatch
                                              </option>
                                              <option value="dwayne">
                                                  Dwayne Johnson
                                              </option>
                                              <option value="robert">
                                                  Robert Downey Jr.
                                              </option>
                                              <option value="eddie"> <!-- Correct -->
                                                   Eddie Redmayne
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                        <img src="https://i.ytimg.com/vi/mMmrHbOP9Bs/maxresdefault.jpg"><br><br>
                                         <b>Q3.</b> What actor voiced Thanos in 'Guardians of the Galaxy'?<br>
                                             <br>
                                          <select name="q3">
                                              <option value="mark"><!-- correct -->
                                                  Mark Hamill
                                              </option>
                                              <option value="kyle">
                                                  Kyle Hebert
                                              </option>
                                              <option value="vin">
                                                  Vin Diesel
                                              </option>
                                              <option value="josh">
                                                  Josh Brolin
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://images.moviepilot.com/images/c_limit,q_auto:good,w_600/qf6hjvymxk9tsvkautn0/wait-that-s-how-they-thawed-captain-america-out.jpg"><br><br>
                                         <b>Q4.</b> For about how long was Captain America asleep before being thawed from a deep freeze?<br>
                                             <br>
                                          <select name="q4">
                                              <option value="110"><!-- correct -->
                                                  About 110
                                              </option>
                                              <option value="90">
                                                  About 90
                                              </option>
                                              <option value="60">
                                                  About 60
                                              </option>
                                              <option value="70">
                                                  About 70
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="http://www3.pictures.zimbio.com/mp/V7XEA7IL7Szl.jpg"><br><br>
                                         <b>Q5.</b> What race is Ronan the Accuser?<br>
                                             <br>
                                          <select name="q5">
                                              <option value="skrull">
                                                  Skrull
                                              </option>
                                              <option value="xan">
                                                  Xandarian
                                              </option>
                                              <option value="kree"> <!-- correct -->
                                                  Kree
                                              </option>
                                              <option value="human">
                                                  Human
                                              </option>
                                          </select><br>
                                      </div>
                                       <div class="question">
                                         <img src="https://static.comicvine.com/uploads/scale_medium/11/113509/5195357-hawk+cw.jpg"><br><br>
                                         <b>Q6.</b> What is Hawkeye's real name?<br>
                                             <br>
                                          <select name="q6">
                                              <option value="dan">
                                                  Daniel Baker
                                              </option>
                                              <option value="clint">
                                                  Clint Barton
                                              </option>
                                              <option value="dave"><!-- Correct -->
                                                  David Araujo
                                              </option>
                                              <option value="henry">
                                                  Henry Britton
                                              </option>
                                          </select><br>
                                      </div>
                                       <div class="question">
                                           <img src="http://www.thinkgeek.com/images/products/additional/large/jttu_thors_hammer_inuse.jpg"><br><br>
                                         <b>Q7.</b> What is Thor's hammer called?<br>
                                             <br>
                                          <select name="q7">
                                              <option value="hoger">
                                                  Hoger
                                              </option>
                                              <option value="aegir"><!-- correct -->
                                                  Aegir
                                              </option>
                                              <option value="jarvis">
                                                  Jarvis
                                              </option>
                                              <option value="mjolnir">
                                                  Mjolnir
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://images.moviepilot.com/image/upload/c_fill,h_470,q_auto:good,w_620/shield_logo_01-agents-of-s-h-i-e-l-d-season-2-easter-eggs-and-behind-the-scenes-moments-agents-of-s-h-i-e-l-d-how-marvel-is-working-throu-jpeg-199310.jpg"><br><br>
                                         <b>Q8.</b> What does S.H.I.E.L.D stand for?<br>
                                             <br>
                                          <select name="q8">
                                              <option value="uno">
                                                  Strategic Hazard Intervention Espionage Logistics Directorate.
                                              </option>
                                              <option value="to" selected>
                                                  Special Headquarters Investigating Enhanced Logistics Department
                                              </option>
                                              <option value="thri">
                                                  Strategic Headquarters Investigating the Enforcement of Logistics Division
                                              </option>
                                              <option value="fur"><!-- correct -->
                                                  Spoofing Huggable Igneous Echoing Lizard Dogs
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://www.writeyourscreenplay.com/wp-content/uploads/2017/07/7.jpg"><br><br>
                                         <b>Q9.</b> What academic team is Peter Parker apart of in Spiderman Homecoming?<br>
                                             <br>
                                          <select name="q9">
                                              <option value="cyber">
                                                  Cyber Corps
                                              </option>
                                              <option value="fbla" selected>
                                                  FBLA
                                              </option>
                                              <option value="debate">
                                                  Debate
                                              </option>
                                              <option value="decathlon"><!-- correct -->
                                                  Decathlon
                                              </option>
                                          </select><br>
                                      </div>
                                      <div class="question">
                                          <img src="https://vignette.wikia.nocookie.net/marveldatabase/images/b/b3/Howard_Stark_%28Earth-199999%29_from_Ant-Man_%28film%29_001.png/revision/latest?cb=20160503052113"><br><br>
                                         <b>Q10.</b> What is Tony Stark's father's name?<br>
                                             <br>
                                          <select name="q10">
                                              <option value="john">
                                                  John Stark
                                              </option>
                                              <option value="howard">
                                                  Howard Stark
                                              </option>
                                              <option value="hubert">
                                                 Hubert Stark
                                              </option>
                                              <option value="frank"><!-- correct -->
                                                 Frank Stark
                                              </option>
                                          </select><br>
                                      </div>
                                   </div>
                                    <?php
                                    if(isset($_POST['q1'])){ // If they have taken the test
                                        $GAMEID = 4;

                                        $q = array();
                                        $q[] = $_POST['q1'] == "2008"; // Define the answers
                                        $q[] = $_POST['q2'] == "benedict";
                                        $q[] = $_POST['q3'] == "josh";
                                        $q[] = $_POST['q4'] == "70";
                                        $q[] = $_POST['q5'] == "kree";
                                        $q[] = $_POST['q6'] == "clint";
                                        $q[] = $_POST['q7'] == "mjolnir";
                                        $q[] = $_POST['q8'] == "uno";
                                        $q[] = $_POST['q9'] == "decathlon";
                                        $q[] = $_POST['q10'] == "howard";
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
                                            $t = time(); // Current time
                                            $row = $userdata->fetch_array(MYSQLI_ASSOC); // Get code information from database

                                            // $row = $usid->fetch_array(MYSQLI_ASSOC);
                                            // $ccdd = $row['id'];
                                            $pts = 1000;
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