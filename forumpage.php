<!DOCTYPE html>
<html>

<head>
    <title>Forum Page</title>
    <link rel="stylesheet" type="text/css" href="css/forumpage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/forumpage.php -->

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
                <li class="nav-item active">
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
                        <a class="dropdown-item" href="basicsite.php">Basic Site</a>
                        <a class="dropdown-item" href="automationpracticesite.php">Automation Practice Site</a>
                        <a class="dropdown-item" href="automationactionssite.php">Automation Actions Site</a>
                        <a class="dropdown-item" href="ecommercesite">Ecommerce Site</a>
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
        <p class="headbox1">FORUM</p>
    </div>

    <form class="box box2">
        <input type="text" placeholder="Enter your question" class="txtinput">
        <input type="submit" value="Search" class="btninput">

    </form>

    <div class="box box3">
        <div class="leftbox3">
            <div class="headleftbox3">
                <p class="tieude">categoriY <span class="active up">Q & A with Our Test Automation Architect team</span>
                </p>
                <button class="askqs" onclick="popupselectqs()">Ask Question</button>
            </div>
            <hr class="duongke">
            <div class="bodyleftbox3">
                <p class="ttqs">TOTAL QUESTION: <span class="up">60</span></p>
                <ul class="manybtn">
                    <li class="btnsmall btnactive">Newest</li>
                    <li class="btnsmall">Answers</li>
                    <li class="btnsmall">Views</li>
                    <li class="btnsmall">Asked by</li>
                </ul>

            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <div class="ctnqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="headqs">
                    <a href="#" class="active txt">Do you see this question? Q & A with our Test Automation Architect
                        team</a>
                    <p class="txt1">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are
                        based on a review of the existing academic literature which is complemented by the analysis of
                        numerous contributions by software developers, self-learners, and teachers of programming.</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <p class="gr">18</p>
                    <p>Votes</p>
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>

                    </div>
                    <p>3k Views</p>
                </div>
            </div>

            <div class="chuyentrang">
                <div class="leftchuyentrang">
                    <button class="fixbtn activebtn">15</button>
                    <button class="fixbtn">30</button>
                    <button class="fixbtn">50</button>
                    <p class="chumo fixtxt">Per page</p>
                </div>
                <div class="rightchuyentrang">
                    <button class="fixbtn activebtn">1</button>
                    <button class="fixbtn">2</button>
                    <button class="fixbtn">3</button>
                    <button class="fixbtn">...</button>
                    <button class="fixbtn">8</button>
                    <button class="fixbtn2">Next >></button>

                </div>
            </div>


        </div>
        <div class="rightbox3">
            <p class="headrightbox3">TOTAL QUESTION: 72</p>
            <hr class="duongke">
            <p class="headrightbox3 mt-5">categories</p>
            <hr class="duongke">
            <div class="qs">
                <a href="#" class="numqs active">60</a>
                <a href="#" class="txtqs active">Q & A with our Test Automation Architect team</a>
            </div>
            <hr class="duongke">
            <div class="qs">
                <a href="#" class="numqs">12</a>
                <a href="#" class="txtqs">General discussion</a>
            </div>
            <hr class="duongke">

            <a href="#"><img src="image/qc1.png" class="mt-5"></a>
            <a href="#"><img src="image/qc2.png" class="mt-5"></a>
            <a href="#"><img src="image/qc3.png" class="mt-5"></a>
            <a href="#"><img src="image/qc4.png" class="mt-5"></a>
        </div>
    </div>

    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>
    </script>
</body>

</html>