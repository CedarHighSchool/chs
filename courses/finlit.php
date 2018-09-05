<?php $thisPage="home"; ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <title>Cedar High School</title>

        <?php include("../assets/inc/headtag.php") ?>

            <style>
                .classContainer {
                    margin-bottom: 15px;
                }
                
                .classDetails {
                    display: none;
                }
            </style>
    </head>

    <body>

        <?php include("../assets/inc/navbar.php") ?>

            <!-- Let the container begin! -->

            <div class="container">
                <div class="row">

                    <?php include("../assets/inc/navlist.php") ?>

                        <div class="span9">
                            <div class="row-fluid">

                                <div class="span8">
                                    <div class="well">
                                        <h3>Financial Literacy</h3>
                                        <hr />

                                        <div class="classContainer">
                                            <!--className-->
                                            <h4>Adult Roles / Financial Literacy Course# CTFCG005Y</h4>
                                            <!--classDescritption-->
                                            <p>An instructional course that prepares individuals to understand the nature, function, and significance of individual and family relationships integrated with general financial literacy.</p>
                                            <!--moreDetails-->
                                            <a href="#" class="moreDetails">More Details</a>
                                            <div class="classDetails">
                                                <!--moreDescription-->
                                                <p>Topics include: goal setting; decision making, values, communication skills, self-awareness, dating, marriage, money management, saving, investing, parenting and career and workforce preparation. All four quarters must be passed to fill the Financial Literacy requirement.
                                                    <ul>
                                                        <!--info-->
                                                        <li><strong>Credit(s): </strong>1.0 Credit</li>
                                                        <li><strong>Grade: </strong>12</li>
                                                        <li><strong>Fee: </strong>None</li>
                                                        <li><strong>Prerequisite: </strong>None</li>
                                                        <li><strong>Subject Area: </strong>CTE/AT, FN</li>
                                                    </ul>
                                                </p>
                                            </div>
                                            <!--moreDetails-->
                                        </div>
                                        <!--classContainer-->

                                        <div class="classContainer">
                                            <!--className-->
                                            <h4>General Financial Literacy Course# FNLIG100S</h4>
                                            <!--classDescritption-->
                                            <p>his course will teach basic money management with sections on making financial goals, using and paying for credit, buying insurance, saving, investing and retirement planning.</p>
                                            <!--moreDetails-->
                                            <a href="#" class="moreDetails">More Details</a>
                                            <div class="classDetails">
                                                <!--moreDescription-->
                                                <p>It will also give the students criteria for analyzing and selecting a career, analyzing factors that affect income and analyzing the role of culture, social and emotional influences on financial behavior.
                                                    <ul>
                                                        <!--info-->
                                                        <li><strong>Credit(s): </strong>0.5 Credit</li>
                                                        <li><strong>Grade: </strong>12</li>
                                                        <li><strong>Fee: </strong>None</li>
                                                        <li><strong>Prerequisite: </strong>Required for seniors</li>
                                                        <li><strong>Subject Area: </strong>FN</li>
                                                    </ul>
                                                </p>
                                            </div>
                                            <!--moreDetails-->
                                        </div>
                                        <!--classContainer-->

                                        <div class="classContainer">
                                            <!--className-->
                                            <h4>Mathematics of Personal Finance Course# MAOTG020</h4>
                                            <!--classDescritption-->
                                            <p>Successful completion of Mathematics of Personal Finance will give one credit of Math Elective Credit and will complete the General Financial Literacy requirement. Course objectives for this class include being able to apply sound mathematical principles in the financial decisions students will make in their lives, and to be prudent managers of their financial resources.</p>
                                            <!--moreDetails-->
                                            <a href="#" class="moreDetails">More Details</a>
                                            <div class="classDetails">
                                                <!--moreDescription-->
                                                <p>Students will learn how to set financial goals, manage personal savings and investments and understand the personal consequences of financial decisions. The class will review operations with real numbers, and will use formulas, graphs, tables and charts to solve financial problems. Students will perform simple probability experiments and do probability and statistical calculations. Students will evaluate, solve and analyze mathematical situations that could occur in their lives involving finance. Financial problem solving involving insurance, mortgages, and retirement and estate planning will occur.
                                                    <ul>
                                                        <!--info-->
                                                        <li><strong>Credit(s): </strong>1.0 Credit</li>
                                                        <li><strong>Grade: </strong>10-12</li>
                                                        <li><strong>Fee: </strong>None</li>
                                                        <li><strong>Prerequisite: </strong>Successful Completion of Secondary Math I &amp; II</li>
                                                        <li><strong>Subject Area: </strong>MA, FN</li>
                                                    </ul>
                                                </p>
                                            </div>
                                            <!--moreDetails-->
                                        </div>
                                        <!--classContainer-->

                                    </div>
                                    <!--well-->
                                </div>
                                <!--span8-->

                                <div class="span4">
                                    <div class="well">
                                        <ul class="nav nav-list">
                                            <li><a href="career.php">Career & Technical Education</a></li>
                                            <li><a href="comp.php">Computer Technology</a></li>
                                            <li><a href="elective.php">Elective</a></li>
                                            <li><a href="ell.php">English Language Learners</a></li>
                                            <li><a href="finlit.php">Financial Literacy</a></li>
                                            <li><a href="art.php">Fine Arts</a></li>
                                            <li><a href="foreign.php">Foreign Language</a></li>
                                            <li><a href="english.php">Language Arts</a></li>
                                            <li><a href="math.php">Mathematics</a></li>
                                            <li><a href="pe.php">P.E.</a></li>
                                            <li><a href="schoolrel.php">School Release</a></li>
                                            <li><a href="science.php">Science</a></li>
                                            <li><a href="socsci.php">Social Studies</a></li>
                                            <li><a href="special.php">Special Courses</a></li>
                                            <li><a href="swatc_index.php">Southwest ATC</a></li>
                                        </ul>
                                    </div>
                                    <!--well-->
                                </div>
                                <!--span4-->

                            </div>
                            <!--row-fluid-->

                        </div>
                        <!--span9-->

                </div>
                <!--row-->

                <?php include("../assets/inc/footer.php") ?>

            </div>
            <!--container-->

            <!-- Yummy JavaScrips

    	================================================== -->

            <!-- Placed at the end of the document so the pages load faster -->

            <script src="../assets/js/jquery.js"></script>

            <script src="../assets/js/bootstrap.js"></script>

            <script src="../assets/js/bootstrap-carousel.js"></script>

            <script type="text/javascript">
                $(".moreDetails").click(function(e) {
                    $(this).nextAll(".classDetails").slideToggle('fast', function() {

                    });

                    e.preventDefault();
                });
            </script>

    </body>

    </html>