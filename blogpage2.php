<!DOCTYPE html>
<html>

<head>
    <title>Blog Page</title>
    <link rel="stylesheet" type="text/css" href="css/blogpage2.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/blogpage2.php -->

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

    <div class="boxfix box1">
        <p class="headbox1">BLOGS</p>

        <div class="noidungbox1">
            <div class="left">
                <p>22,591</p>
                <p>shares</p>
                <a href=""><i class="bi bi-facebook fixsize"></i></a>
                <a href=""><i class="bi bi-twitter fixsize"></i></a>
            </div>
            <div class="right">
                <hr class="hrbox1">
                <div class="bodyright">
                    <div class="body">
                        <p class="tieude">How Did I Learn Selenium When I Have A Full-time Job</p>
                        <p class="noidung">In this article I will tell you my experience to learn Selenium Webdriver and
                            Java
                            programming when I'm working with a full-time job. You will learn:</p>
                        <p class="noidung">- How to start your learning journey</p>
                        <p class="noidung">- How to learn faster in small time</p>
                        <p class="noidung">- How to learn Java language (and yes, it's hard!)</p>
                        <p class="noidung">- How to make sure you can achieve your learning goal</p>
                    </div>
                    <img src="image/imgbaiviet.png" class="rightbody">
                </div>

            </div>
        </div>

    </div>

    <div class="boxfix box2">
        <div class="left fixleft">
            <p>22,591</p>
            <p>shares</p>
            <a href=""><i class="bi bi-facebook fixsize"></i></a>
            <a href=""><i class="bi bi-twitter fixsize"></i></a>
        </div>
        <div class="right">
            <p class="tieudebox2">How to start your learning journey</p>
            <p class="noidungbox2 mb-lg-5">To start your self-learning, you need to learn for free on the internet. Its
                recommendations are based on a review of the existing academic literature which is complemented by the
                analysis of numerous contributions by software developers, self-learners, and teachers of programming.
                Additionally, it incorporates effective learning techniques derived from psychological research. Its
                intended readers are primarily entrepreneurs and 'startup people' who are driven to build new businesses
                with code, although the proposed approach is also transferable to other domains and audiences.</p>
            <p class="noidungbox2">The single most important factor for succeeding in learning programming has been
                found to
                be of human nature: learner motivation and persistence. While most beginners and the majority of
                academic contributions focus mostly on technical aspects such as which language to learn first, or which
                learning resources to use, this paper analyzes the learning process itself. Learning programming is thus
                divided into three main steps:</p>
            <p class="noidungbox2"><span style="font-weight: bold">First,</span> I highlight the importance of setting a
                strong learning goal for motivation, and
                provide a big-picture overview of what 'learning programming' encompasses to structure the approach.
            </p>
            <p class="noidungbox2"><span style="font-weight: bold">Second</span>, I provide learners with
                recommendations as to which language to learn first -
                there is no one 'best' choice - as well as how and where to find effective learning resources.
            </p>
            <p class="noidungbox2 mb-lg-5"><span style="font-weight: bold">Lastly</span>, the paper concludes with tips
                for
                optimizing the learning process by introducing
                effective learning techniques, highlighting the importance of programming practice, and collecting
                additional advice from programmers and self-learners.
            </p>

        </div>
    </div>

    <div class="boxfix box3">
        <p class="tieudebox2">How to learn faster in small time</p>
        <p class="noidungbox2">While it's nice to think you can hack your way to success, whenever you try to accomplish
            a huge goal -- like starting and growing a business -- skills matter. Who you know is certainly important.
        </p>
        <p class="noidungbox2">But what you know, and what you can do, matters a whole lot more.</p>
        <p class="noidungbox2 mb-lg-5">Which means the faster you learn, the more successful you can be.</p>
        <p class="noidungbox2 mb-lg-5">So let's jump right in.Here are five ways, backed by science, to speed up the
            learning process.</p>
        <p class="noidungbox2 fixfont">1. Take notes by hand, not on a computer.</p>
        <p class="noidungbox2">Most of us can type faster than we can write. (And a lot more neatly.) </p>
        <p class="noidungbox2 ">But research shows handwriting your notes means you'll learn more. Oddly enough, taking
            notes by hand enhances both comprehension and retention, possibly because instead of just serving as a
            quasi-stenographer, you're forced to put things in your own words in order to keep up.
        </p>
        <p class="noidungbox2 mb-lg-5">Which means you'll remember what you heard a lot longer.</p>
        <p class="noidungbox2 fixfont">2. Chunk your study sessions.</p>
        <p class="noidungbox2">You're busy. So you wait until the last minute to learn what you need to know: A
            presentation, a sales demo, an investor pitch... </p>
        <p class="noidungbox2">Bad idea. Research shows "distributed practice" is a much more effective way to learn.
        </p>
        <p class="noidungbox2 mb-lg-5">Imagine you want to nail your investor pitch. Once you've drafted your pitch, run
            through
            it once. Then take a few minutes to make corrections and revisions.
        </p>
        <p class="noidungbox2 fixfont">3. Test yourself. A lot.</p>
        <p class="noidungbox2">A number of studies show that self-testing is an extremely effective way to speed up the
            learning process.</p>
        <p class="noidungbox2 mb-lg-5">Partly that's due to the additional context created; if you test yourself and
            answer
            incorrectly, not only are you more likely to remember the right answer after you look it up... you'll also
            remember that you didn't remember. (Getting something wrong is a great way to remember it the next time,
            especially if you tend to be hard on yourself.)
        </p>
        <p class="noidungbox2 fixfont">4. Change the way you practice.</p>
        <p class="noidungbox2">Repeating anything over and over again in the hopes you will master that task will not
            only keep you from improving as quickly as you could, in some cases it may actually decrease your skill.
        </p>
        <p class="noidungbox2 mb-lg-5">According to recent research from Johns Hopkins, if you practice a slightly
            modified
            version of a task you want to master, "you actually learn more and faster than if you just keep practicing
            the exact same thing multiple times in a row." The most likely cause is reconsolidation, a process where
            existing memories are recalled and modified with new knowledge.
        </p>
        <p class="noidungbox2 fixfont">5. Teach someone else.</p>
        <p class="noidungbox2">It may be occasionally true that those who can't, teach... but research shows it's
            definitely true that those who teach speed up their learning and retain more.
        </p>
        <p class="noidungbox2 mb-lg-5">Even just thinking that you'll need to teach someone can make you learn more
            effectively.
            According to the researchers, "When teachers prepare to teach, they tend to seek out key points and organize
            information into a coherent structure. Our results suggest that students also turn to these types of
            effective learning strategies when they expect to teach."
        </p>
    </div>

    <div class="boxfix box4">
        <div class="headbox4">
            <div class="nguoidang">
                <img src="image/avatarus1.png" class="avatarus">
                <p class="date">by <a href="#">Thao Le</a></p>
            </div>
            <div class="share">
                <p class="sharetxt">Share: </p>
                <a href=""><i class="bi bi-facebook fix"></i></a>
                <a href=""><i class="bi bi-twitter fix"></i></a>
            </div>
        </div>
        <hr class="hrbox2">
        <p class="headcmt">2 Comments</p>
        <hr class="hrbox2">
        <div class="nguoidang fix">
            <img src="image/avatarus2.png" class="avatarus fix">
            <div style="display: flex; flex-direction: column;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column;">
                        <a href="#" style="color: black">Rashed ka.</a>
                        <p class="date">13 June, 2018, 7:30pm</p>
                    </div>
                    <button class="reply">Reply</button>
                </div>
                <p class="noidungcmt">
                    One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The
                    same true we experience the emotional sensation.
                </p>
            </div>
        </div>
        <hr class="hrbox2">
        <div class="nguoidang fix">
            <img src="image/avatarus3.png" class="avatarus fix">
            <div style="display: flex; flex-direction: column;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column;">
                        <a href="#" style="color: black">Rashed ka.</a>
                        <p class="date">13 June, 2018, 7:30pm</p>
                    </div>
                    <button class="reply">Reply</button>
                </div>
                <p class="noidungcmt">
                    One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The
                    same true we experience the emotional sensation.
                </p>
            </div>
        </div>
        <hr class="hrbox2">
    </div>

    <div class="boxfix box5">
        <p class="headbox5">Leave a Comment</p>
        <p class="bodybox5">Your email address will not be published. Required fields are marked*</p>
        <form method="POST" action="#" class="formbox5">
            <div class="headform">
                <input type="text" placeholder="Your Name*" class="nhapinput">
                <input type="text" placeholder="Your Email*" class="nhapinput">
            </div>
            <!-- <input type="text" placeholder="Your Comment*" class="nhapinput2"> -->
            <textarea placeholder="Your Comment*" class="nhapinput2"></textarea>
            <input type="submit" value="Submit Comment" class="btnsub">
        </form>
    </div>

    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>
    </script>


</body>

</html>