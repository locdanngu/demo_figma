<!DOCTYPE html>
<html>

<head>
    <title>Blog Page</title>
    <link rel="stylesheet" type="text/css" href="css/blogpage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/blogpage.php -->

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand align-items-center" href="homepage.php">
            <img src="image/msrobot.png" width="60" height="50" class="d-inline-block mr-2" alt="">
            <span class="logo">MS.ROBOT</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tutorialpage.php">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forumpage.php">Forum</a>
                </li>
                <li class="nav-item active">
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
        <p class="headbox1">BLOGS</p>
    </div>


    <div class="box box2">
        <p class="tieudebox2">Sign up to get our FREE SELENIUM TEST AUTOMATION Code.</p>
        <p class="tieudebox2">Sign up to join in Q&A forum with our TEST AUTOMATION ARCHITECT team.</p>
        <p class="tieudebox2">Sign up to receive Selenium Tips & ebooks.</p>
        <form class="formbox1" action="#" method="POST">
            <input class="inputbox1" placeholder="Enter your email">
            <button class="btnbox1">Sign up</button>
        </form>
    </div>

    <div class="box box3">
        <div class="leftbox3">
            <form class="baiviet" method="POST" action="blogpage2.php">
                <p class="tieudebaiviet">How Did I Learn Selenium When I Have A Full-time Job</p>
                <div class="nguoidangandtime">
                    <div class="nguoidang">
                        <img src="image/avatarus1.png" class="avatarus">
                        <p class="date">by <a href="#">Thao Le</a></p>
                    </div>
                    <p class="date">23 Dec, 2019</p>
                </div>
                <div class="bodybaiviet">
                    <img src="image/imgbaiviet.png" class="imgbaiviet">
                    <p class="txtbaiviet">In this article I will tell you my experience to learn Selenium Webdriver and
                        Java programming when I'm working with a full-time job. You will learn:</p>
                    <p class="txtbaiviet">- How to start your learning journey</p>
                    <p class="txtbaiviet">- How to learn faster in small time</p>
                    <p class="txtbaiviet">- How to learn Java language (and yes, it's hard!)</p>
                    <p class="txtbaiviet">- How to make sure you can achieve your learning goal</p>
                    <p class="txtbaiviet2">Let's get started.</p>
                </div>
                <div class="footbaiviet">
                    <div class="leftfootbaiviet">
                        <p class="numberread">412</p>
                        <p class="cmt">Comment</p>
                    </div>
                    <button class="reading">Continue Reading</button>
                </div>

            </form>
            <hr class="gachke">


            <div class="baiviet">
                <p class="tieudebaiviet">Can't Create Selenium Automation Framework From Scratch! You're Not Alone!</p>
                <div class="nguoidangandtime">
                    <div class="nguoidang">
                        <img src="image/avatarus1.png" class="avatarus">
                        <p class="date">by <a href="#">Thao Le</a></p>
                    </div>
                    <p class="date">23 Dec, 2019</p>
                </div>
                <div class="bodybaiviet">
                    <img src="image/imgbaiviet2.png" class="imgbaiviet">
                    <p class="txtbaiviet">In this article I will tell you my experience to create Selenium Automation
                        Framework From Scratch. You will learn:</p>
                    <p class="txtbaiviet">- Why you need an Automation Framework </p>
                    <p class="txtbaiviet">- Why it is very hard to implement a framework</p>
                    <p class="txtbaiviet">- How to start building Selenium Automation Framework</p>
                    <p class="txtbaiviet">- How to achieve your goal of having a correct and good Automation Framework
                    </p>
                    <p class="txtbaiviet2">Let's get started.</p>
                </div>
                <div class="footbaiviet">
                    <div class="leftfootbaiviet">
                        <p class="numberread">302</p>
                        <p class="cmt">Comment</p>
                    </div>
                    <button class="reading2"><span class="unl">Unlock now</span><i class="bi bi-lock"></i></button>
                </div>

            </div>
            <hr class="gachke">


        </div>

        <div class="rightbox3">
            <form method="POST" action="#">
                <input class="inputbox2" placeholder="search">
            </form>
            <p class="headrightbox3">Popular articles</p>
            <hr class="gachke">
            <div class="link">
                <a class="headlink linkactive" href="#">QA Analyst salary vs Test Automation Developer or QA Engineer
                    salary.</a>
                <p class="date">23 July, 2018</p>
            </div>
            <hr class="gachke">
            <div class="link">
                <a class="headlink" href="#">The fastest way to learn Selenium in Java language.</a>
                <p class="date">23 July, 2018</p>
            </div>
            <hr class="gachke">
            <div class="link">
                <a class="headlink" href="#">Can't create Selenium Automation Framework from scảtch! You're not
                    alone!</a>
                <p class="date">23 July, 2018</p>
            </div>
            <hr class="gachke">

            <p class="headrightbox3">RECENT articles</p>
            <hr class="gachke">
            <div class="link">
                <a class="headlink linkactive" href="#">QA Analyst salary vs Test Automation Developer or QA Engineer
                    salary.</a>
                <p class="date">23 July, 2018</p>
            </div>
            <hr class="gachke">
            <div class="link">
                <a class="headlink" href="#">The fastest way to learn Selenium in Java language.</a>
                <p class="date">23 July, 2018</p>
            </div>
            <hr class="gachke">
            <div class="link">
                <a class="headlink" href="#">Can't create Selenium Automation Framework from scảtch! You're not
                    alone!</a>
                <p class="date">23 July, 2018</p>
            </div>
            <hr class="gachke">

            <p class="headrightbox3">Keywords</p>
            <hr class="gachke">
            <div class="choicebox3">
                <p class="boxchoice">Ideas</p>
                <p class="boxchoice">Education</p>
                <p class="boxchoice">Design</p>
                <p class="boxchoice active">Development</p>
                <p class="boxchoice">SELENIUM</p>
            </div>
        </div>


    </div>

    <div class="box box4">
        <button class="old">Older posts</button>
    </div>

    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>
    </script>


</body>

</html>