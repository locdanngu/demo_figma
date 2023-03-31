<!DOCTYPE html>
<html>

<head>
    <title>Forum - Open Question Page</title>
    <link rel="stylesheet" type="text/css" href="css/forum-openquestionpage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/forum-openquestionpage.php -->

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
        <p class="headbox1">FORUM</p>
    </div>

    <form class="box box2">
        <input type="text" placeholder="Enter your question" class="txtinput">
        <input type="submit" value="Search" class="btninput">

    </form>

    <div class="box box3">
        <div class="leftbox3">
            <div class="headqs">
                <img src="image/imgqs.png" class="imgqs">
                <div class="bodyheadqs">
                    <p class="active txt">Do you see this question? Q & A with our Test Automation Architect team</p>
                    <div class="foottxt">
                        <p class="chumo">Asked in: <a href="#">Selenium</a></p>
                        <p class="chumo">Asked by: <a href="#">Thao Le</a></p>
                        <p class="chumo">Asked on: January 30, 2020</p>
                    </div>
                </div>
                <div class="rightqs">
                    <div class="ovuong">
                        <p class="numaskqs">2</p>
                        <p style="margin: 0 !important">Answers</p>
                    </div>
                    <p>3k Views</p>
                </div>
            </div>
            <hr class="gachke">
            <div class="ans">
                <div class="leftans">
                    <i class="bi bi-caret-up-fill"></i>
                    <span class="votenum">18</span>
                    <i class="bi bi-caret-down-fill"></i>
                    <span>Votes</span>
                </div>
                <div class="txtans">
                    <p class="rightans">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are based on a review of the existing academic literature which is complemented
                        by
                        the analysis of numerous contributions by software developers, self-learners, and teachers of
                        programming. Additionally, it incorporates effective learning techniques derived from
                        psychological
                        research. Its intended readers are primarily entrepreneurs and ‘startup people’ who are driven
                        to
                        build new businesses with code, although the proposed approach is also transferable to other
                        domains
                        and audiences.
                    </p>
                    <p class="rightans">The single most important factor for succeeding in learning programming has been
                        found to be of human nature: learner motivation and persistence. While most beginners and the
                        majority of academic contributions focus mostly on technical aspects such as which language to
                        learn
                        first, or which learning resources to use, this paper analyzes the learning process itself.
                        Learning
                        programming is thus divided into three main steps:
                    </p>
                    <p class="rightans">First, I highlight the importance of setting a strong learning goal for
                        motivation,
                        and provide a big-picture overview of what ‘learning programming’ encompasses to structure the
                        approach.
                    </p>
                    <p class="rightans">Second, I provide learners with recommendations as to which language to learn
                        first
                        - there is no one ‘best’ choice - as well as how and where to find effective learning resources.
                    </p>
                    <p class="rightans">Lastly, the paper concludes with tips for optimizing the learning process by
                        introducing effective learning techniques, highlighting the importance of programming practice,
                        and
                        collecting additional advice from programmers and self-learners.
                    </p>

                    <div class="foottxtans">
                        <div class="alltag">
                            <span class="tag">selenium</span>
                            <span class="tag">automation test</span>
                        </div>
                        <div class="share">
                            <span>Share: </span>
                            <i class="bi bi-facebook share"></i>
                            <i class="bi bi-twitter share"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="boxans">
                <div class="headtl">
                    <span>ANSWERS: 2</span>
                    <div class="btntl">
                        <p class="btntraloi active">Newest</p>
                        <p class="btntraloi">Oldest</p>
                        <p class="btntraloi">Votes</p>
                    </div>
                </div>


            </div>
            <hr class="gachke">
            <span class="chumo">Answered by: <a href="#" style="color: #0744F2;margin-left: 1em;margin-right: 1em;">Tony
                    Stark </a> Answered 29 mins ago</span>
            <div class="ans">
                <div class="leftans">
                    <i class="bi bi-caret-up-fill"></i>
                    <span class="votenum">10</span>
                    <i class="bi bi-caret-down-fill"></i>
                    <span>Votes</span>
                </div>
                <div class="txtans">
                    <p class="rightans">This is just a test to see what options are available when submitting a
                        question. I guess there could be a lot of stuff typed in here, but I am too lazy to test that
                        out.
                    </p>
                    <p class="rightans">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are based on a review of the existing academic literature which is complemented
                        by the analysis of numerous contributions by software developers, self-learners, and teachers of
                        programming. Additionally, it incorporates effective learning techniques derived from
                        psychological research. Its intended readers are primarily entrepreneurs and ‘startup people’
                        who are driven to build new businesses with code, although the proposed approach is also
                        transferable to other domains and audiences.
                    </p>
                </div>

            </div>
            <hr class="gachke">
            <div class="binhluan">
                <span class="txtbinhluan">This is just a test to see what options are available when submitting a
                    question. I guess there could be a lot of stuff typed in here, but I am too lazy to test that
                    out. <a href="#">Peter Monica</a><span class="chumo">Apr 16 at 6:57</span></span>
                <hr class="gachke">
                <span class="txtbinhluan">To start your self-learning, you need to learn for free on the internet. Its
                    recommendations are based on a review of the existing academic literature which is complemented by
                    the analysis of numerous contributions by software developers, self-learners, and teachers of
                    programming. </span>
                <div style="display: flex">
                    <a href="#">Kevin Kotz</a><span class="chumo">Apr 19 at 6:57</span>
                </div>

                <hr class="gachke">
                <div class="txtans" style="width: 100%">
                    <div class="foottxtans">
                        <div class="alltag">
                            <p style="margin-left:-5em" class="choice">Add a comment</p>
                        </div>
                        <div class="share">
                            <span>Share: </span>
                            <i class="bi bi-facebook share"></i>
                            <i class="bi bi-twitter share"></i>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="gachke">
            <span class="chumo">Answered by: <a href="#" style="color: #0744F2;margin-left: 1em;margin-right: 1em;">John
                    Pablo </a> Answered 29 mins ago</span>
            <div class="ans">
                <div class="leftans">
                    <i class="bi bi-caret-up-fill"></i>
                    <span class="votenum">0</span>
                    <i class="bi bi-caret-down-fill"></i>
                    <span>Votes</span>
                </div>
                <div class="txtans">
                    <p class="rightans">This is just a test to see what options are available when submitting a
                        question. I guess there could be a lot of stuff typed in here, but I am too lazy to test that
                        out.
                    </p>
                    <p class="rightans">To start your self-learning, you need to learn for free on the internet. Its
                        recommendations are based on a review of the existing academic literature which is complemented
                        by the analysis of numerous contributions by software developers, self-learners, and teachers of
                        programming. Additionally, it incorporates effective learning techniques derived from
                        psychological research. Its intended readers are primarily entrepreneurs and ‘startup people’
                        who are driven to build new businesses with code, although the proposed approach is also
                        transferable to other domains and audiences.
                    </p>
                </div>

            </div>
            <div class="txtans" style="width: 100%">
                <div class="foottxtans">
                    <div class="alltag">
                        <p style="margin-left:3em" class="choice">Add a comment</p>
                    </div>
                    <div class="share">
                        <span>Share: </span>
                        <i class="bi bi-facebook share"></i>
                        <i class="bi bi-twitter share"></i>
                    </div>
                </div>
            </div>
            <hr class="gachke">
            <div class="cautraloicuaban">
                <p class="uans">Your Answer</p>
                <textarea class="nhapans"></textarea>
                <input value="Post your answer" class="postuans" type="submit">
                <p class="footfoot">Not the answer you're looking for? Browse other questions tagged <span class="tag">selenium</span>
                    <span class="tag">automation test</span>or <a href="#">ask your question.</a></p>
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