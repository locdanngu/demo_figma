<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <?php include('link.php'); ?>
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
                    <a class="nav-link" href="tutorialpage.php">Tutorial</a>
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
                    <div class="dropdown-menu fixdr" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logintobasicsite.php">Basic Site</a>
                        <a class="dropdown-item" href="logintoautomationpracticesite.php">Automation Practice Site</a>
                        <a class="dropdown-item" href="logintoautomationactionssite.php">Automation Actions Site</a>
                        <a class="dropdown-item" href="logintoecommercesite.php">Ecommerce Site</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="image/co.png" width="53" height="30">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width:0">
                        <a class="dropdown-item" href="#"><img src="image/vietnam.png" width="53" height="30"></a>
                        <a class="dropdown-item" href="#"><img src="image/USA.png" width="53" height="30"></a>
                    </div>
                </li>
            </ul>
            <button class="btn mr-2" id="popuplogin" onclick="popuplogin()">Login</button>
            <button class="btn sign-up" id="popupsignup" onclick="popupsignup()">Sign up</button>
        </div>
    </nav>

    <div class="box box1">
        <p class="tieudebox1"><span class="doimau">MS.Robot</span> stands top ranked platform for learning <span
                class="doimau">Selenium Test Automation</span></p>
        <div class="leftrightbox1">
            <div class="leftbox1">
                <p class="tieude2box1">Why Choose MS.Robot Over All Automation Training Websites?</p>
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

        <div class="box boxx">
            <img src="image/vongtron.png">
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
                    <hr class="fixhr">
                    <p class="txt3">This source code package includes:</p>
                    <div class="iconandtxt">
                        <img src="image/se-icon.png" height="18" width="18">
                        <div class="fix90">
                            <p class="txt3">Test Automation Framework for Selenium </p>
                        </div>
                    </div>

                    <div class="iconandtxt">
                        <img src="image/icon2.png" height="18" width="18">
                        <div class="fix90">
                            <p class="txt3">4 Test Cases from MS Robot Demo Sites </p>
                        </div>
                    </div>
                    <div class="iconandtxt">
                        <img src="image/icon3.png" height="18" width="18">
                        <div class="fix90">
                            <p class="txt3">3 Test Cases from Amazon Web Site </p>
                        </div>
                    </div>
                    <div class="iconandtxt">
                        <img src="image/icon4.png" height="18" width="18">
                        <div class="fix90">
                            <p class="txt3">Javadoc for Source Code </p>
                        </div>
                    </div>
                    <div class="iconandtxt">
                        <img src="image/icon5.png" height="18" width="18">
                        <div class="fix90">
                            <p class="txt3">User Guide </p>
                        </div>
                    </div>
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

            <div class="fix99">
                <img class="headbox3" src="image/cham.png">
                <img src="image/luon.png" class="luon chua">
            </div>


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
        <div class="allbox3 fix98">
            <img src="image/luon.png" class="luon">
            <img src="image/talk.png" class="imgtalk">
        </div>
    </div>

    <div class="box box3">
        <div class="allbox3 ">
            <img src="image/luon.png" class="luon chua hd">
            <img src="image/send.png" class="imgsend">
            <p class="tieudebox3 fix2"><span class="doimau2" style="color:black">Understanding</span> how to learn
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
        <div class="allbox3 fix98">
            <img src="image/luon.png" class="luon chua">
            <img src="image/send.png" class="imgsend">
            <p class="tieudebox3 fix2" style="padding-left: 1em;"><span class="doimau2"
                    style="color:black">Understanding</span> why learn
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
    <div class="box box4">
        <div class="headheadbox4">
            <img src="image/clock.png" class="clock" width="40" height="34">
            <p class="headbox4">Online learning advantage</p>
        </div>

        <div class="bodybox41">
            <div class="khoibody">
                <img src="image/thumuc.png" class="thumuc">
                <div class="chuatext">
                    <p class="text">LEARN IN YOUR OWN TIME</p>
                    <p class="text">We are very busy in this world and in the software industry, you need to learn &
                        update
                        your skills
                        set so that you can get a job easily. Online learning is the best tool to help you achieve the
                        skills you need in you own time
                    </p>
                </div>

            </div>
            <div class="khoibody">
                <img src="image/thumuc.png" class="thumuc">
                <div class="chuatext">
                    <p class="text">24/7 RESOURCES ACCESS</p>
                    <p class="text">There is no limited time for using resources online. You take your time to
                        understand
                        deeply &
                        correctly. Programming with Selenium requires time to understand, practice. Ability to learn
                        online
                        will give you unlimited time instead of feeling lost in the class and have no time to stop and
                        read
                        again.
                    </p>
                </div>

            </div>
        </div>
        <div class="bodybox41">
            <div class="khoibody">
                <img src="image/thumuc.png" class="thumuc">
                <div class="chuatext">
                    <p class="text">SIGNIFICANCE OF LEARNING SELENIUM</p>
                    <p class="text">If you are looking for a software tester job, chance is the job will require you
                        know
                        test
                        automation & selenium. Having Selenium Webdriver skill set will give you a peace of mind
                        whenever
                        you apply for Software tester job.

                    </p>
                </div>

            </div>
            <div class="khoibody">
                <img src="image/thumuc.png" class="thumuc">
                <div class="chuatext">
                    <p class="text">SAVE $$$</p>
                    <p class="text">
                        The cost of online class or classic class is a lot and require your time. When you learn using
                        resources from the internet, it costs less.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>
    </script>

</body>

</html>