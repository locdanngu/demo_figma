<!DOCTYPE html>
<html>

<head>
    <title>homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/homepage.php -->

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand align-items-center" href="homepage.php">
            <img src="image/msrobot.png" width="60" height="50" class="d-inline-block mr-2" alt="">
            <span class="logo">MS.ROBOT</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tutorial.php">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forumpage.php">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogpage.php">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Demo Sites
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Basic Site</a>
                        <a class="dropdown-item" href="#">Automation Practice Site</a>
                        <a class="dropdown-item" href="#">Automation Actions Site</a>
                        <a class="dropdown-item" href="#">Ecommerce Site</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="image/co.png" width="53" height="53">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width:0">
                        <a class="dropdown-item" href="#"><img src="image/co.png" width="53" height="53"></a>
                        <a class="dropdown-item" href="#"><img src="image/co.png" width="53" height="53"></a>
                    </div>
                </li>
            </ul>
            <button class="btn mr-2">Login</button>
            <button class="btn sign-up">Sign up</button>
        </div>
    </nav>
    <div class="box box1">
        <p class="tieudebox1"><span class="doimau">MS.Robot</span> stands top ranked platform for learning <span
                class="doimau">Selenium Test Automation</span></p>
        <div class="leftrightbox1">
            <div class="leftbox1">
                <a href="#" class="tieude2box1">Why Choose MS.Robot Over All Automation Training Websites?</a>
                <p class="bodybox1">Unlike other training websites, MS.Robot provides free training tutorials but as an
                    added
                    benefit, you will have full access to all our source code, framework and full Q&A support provided
                    by our
                    professional test automation architecture team.</p>
                <p class="bodybox1">Start your learning journey NOW!!!</p>
                <div class="linkbox1">
                    <a class="link" href="#"><i class="bi bi-arrow-right"></i> Sign up to get our FREE SELENIUM TEST
                        AUTOMATION
                        Code.</a>
                    <a class="link" href="#"><i class="bi bi-arrow-right"></i> Sign up to join in Q&A forum with our
                        TEST
                        AUTOMATION ARCHITECT team.</a>
                    <a class="link" href="#"><i class="bi bi-arrow-right"></i> Sign up to receive Selenium Tips &
                        ebooks.</a>
                </div>
                <form class="formbox1" action="#" method="POST">
                    <input class="inputbox1" placeholder="Enter your email">
                    <button class="btnbox1">Sign up</button>
                </form>
            </div>
            <img class="rightbox1" src="image/thuyettrinh.png">
        </div>


    </div>
    <div class="box box2">
        <p class="tieudebox2">Automation Tools Tutorial</p>
        <div class="bodybox2">
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/se.png">
                <p class="noidungphantu">Selenium basic</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/se2.png">
                <p class="noidungphantu">Selenium advance</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/java.png">
                <p class="noidungphantu">Java basic</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/java2.png">
                <p class="noidungphantu">Java advance</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/sefr.png">
                <p class="noidungphantu">Selenium Automation frameworks</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto.png">
                <p class="noidungphantu">Locators for Selenium automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto2.png">
                <p class="noidungphantu">Handling Data in
                    Selenium Automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto3.png">
                <p class="noidungphantu">Reports for
                    Selenium Automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto4.png">
                <p class="noidungphantu">Running Selenium Automation
                    (multiple browsers, platforms, environments)</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/jenkin.png">
                <p class="noidungphantu">Jenkins build & Jenkins pipeline for Selenium Automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/maven.png">
                <p class="noidungphantu">Maven</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/test.png">
                <p class="noidungphantu">TestNG</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/log.png">
                <p class="noidungphantu">Log4j</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/git.png">
                <p class="noidungphantu">Git</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/github.png">
                <p class="noidungphantu">Github</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/docker.png">
                <p class="noidungphantu">Docker for Selenium</p>
            </a>
        </div>
        <div class="footbox2">
            <div class="leftfootbox2">
                <p class="tieudefootbox2">Source code</p>
                <img class="imgcode" src="image/code.png">
            </div>
            <div class="rightfootbox2">
                <div class="khoifootbox2">
                    <p class="txt1">SELENIUM TEST AUTOMATION </p>
                    <p class="txt2">Free</p>
                    <hr>
                    <p class="txt3">This source code package includes:</p>
                    <p class="txt3"><i class="bi bi-0-square"></i> Test Automation Framework for Selenium </p>
                    <p class="txt3"><i class="bi bi-1-square"></i> 4 Test Cases from MS Robot Demo Sites</p>
                    <p class="txt3"><i class="bi bi-2-square"></i> 3 Test Cases from Amazon Web Site</p>
                    <p class="txt3"><i class="bi bi-3-square"></i> Javadoc for Source Code</p>
                    <p class="txt3"><i class="bi bi-4-square"></i> User Guide</p>
                    <button class="btndow">Download now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="box box3">
        <div class="allbox3">
            <img class="headbox3" src="image/cham.png">
            <p class="tieudebox3">Learning path for absolute beginner in programming : FREE</p>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 1: Run our SELENIUM TEST AUTOMATION to know what selenium automation is. </p>
            </div>
            <a href="#" class="linkdow">Download Selenium Test Automation now <i class="bi bi-chevron-right"></i></a>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 2: Start Java Basic.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 3: Learn Java Advance.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 4: Start Selenium Basic.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 5: Learn Selenium Advance.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 6: Automate Test cases by yourself (Using our Demo Sites & Test cases excel
                    file).</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 7: Put your automation test cases into github.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 8: Apply for QA Analyst, QA Engineer, Software Developer in Test job.</p>
            </div>
        </div>
        <div class="allbox3">
            <img src="image/luon.png" class="luon chua">
            <img class="headbox3" src="image/cham.png">
            <p class="tieudebox3">Learning path for newly graduate with java knowledge: FREE</p>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 1: Run our SELENIUM TEST AUTOMATION to know what selenium automation is. </p>
            </div>
            <a href="#" class="linkdow">Download Selenium Test Automation now <i class="bi bi-chevron-right"></i></a>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 2: Start Selenium Basic.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 3: Learn Selenium Advance.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 4: Automate Test cases by yourself (Using our Demo Sites & Test cases excel
                    file).</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 5: Put your automation test cases into github.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 6: Apply for QA Analyst, QA Engineer, Software Developer in Test job.</p>
            </div>
        </div>
    </div>


    <div class="box box3">
        <div class="allbox3">
            <img class="headbox3" src="image/cham.png">
            <p class="tieudebox3">Learning Path for Selenium Automation Framework: FREE</p>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 1: Run our SELENIUM TEST AUTOMATION to know what selenium automation framework
                    is.</p>
            </div>
            <a href="#" class="linkdow">Download Selenium Test Automation now <i class="bi bi-chevron-right"></i></a>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 2: Understand Selenium Automation Framework.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 3: Create Framework to run cross Chrome, Firefox, IE, Safari.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 4: Create Framework to run in multiple platforms (windows, mac os, IOS,
                    Android).</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 5: Create Framework to run in multiple environments.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 6: Create Framework to report automation steps.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 7: Create Framework to run tests in parallel.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 8: Create Framework with page object model.</p>
            </div>
            <div class="step">
                <i class="bi bi-check-lg"></i>
                <p class="stepans">Step 9: Create Framework for BDD.</p>
            </div>
        </div>
        <div class="allbox3">
            <img src="image/luon.png" class="luon">
            <img src="image/talk.png" class="imgtalk">
        </div>
    </div>

    <div class="box box3">
        <div class="allbox3 " style="margin-top: 7.5em">

            <p class="tieudebox3 fix2" style="background-color: #EAEFFF;"><span class="doimau2" style="color:black">Understanding</span> how to learn
                Selenium effectively</p>
            <div class="step2">

                <p class="stepans">1. How did I learn Selenium when I have a full-time job.</p>
            </div>

            <div class="step2">

                <p class="stepans">2. How to learn All Selenium Automation With less than $100. </p>
            </div>
            <div class="step2">

                <p class="stepans">3. Break the secret of learning programming for absolute beginner.</p>
            </div>
            <div class="step2">

                <p class="stepans">4. Learn Selenium Automation in class vs online.</p>
            </div>
            <div class="step2">

                <p class="stepans">5. QA Analyst salary vs Test Automation Developer/Engineer salary.</p>
            </div>
            <div class="step2">

                <p class="stepans">6. Help! I can’t learn Selenium, I don’t understand it!</p>
            </div>
            <div class="step2">

                <p class="stepans">7. Can’t create Selenium Automation Framework from scratch! You’re not alone!</p>
            </div>
            <div class="step2">

                <p class="stepans">8. How to learn Selenium or any skills for QA Engineer career.</p>
            </div>
            <div class="step2">

                <p class="stepans">9. The fastest way to learn Selenium in java language.</p>
            </div>
        </div>
        <div class="allbox3">
            <img src="image/luon.png" class="luon chua">
            <p class="tieudebox3 fix2" style="padding-left: 1em;"><span class="doimau2" style="color:black">Understanding</span> why learn
                    Selenium Automation</p>
            <div class="fix3">
                
                <div class="step">

                    <p class="stepans2">If you ask a tester what she wants to learn next, chances are very high that the
                        answer is:</p>
                </div>

                <div class="step">

                    <p class="stepans2">Test Automation with Selenium WebDriver!</p>
                </div>
                <div class="step">

                    <p class="stepans2">Most testers agree that manual testing skills are no longer sufficient for a
                        successful career.</p>
                </div>
                <div class="step">

                    <p class="stepans2">Companies still need testers but hire the ones proficient also with programming.
                    </p>
                </div>
                <div class="step">

                    <p class="stepans2">Between a tester that can test a user story and another that can also automate
                        it, the second one has the higher chance of getting the job.</p>
                </div>
                <div class="step">

                    <p class="stepans2">She adds value to the company now with her testing.</p>
                </div>
                <div class="step">

                    <p class="stepans2">She also adds value to the company in the future through her automation.</p>
                </div>
                <div class="step">

                    <p class="stepans2">Her automated tests can be repeated any time they are needed.</p>
                </div>
            </div>





        </div>
    </div>

</body>

</html>