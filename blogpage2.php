<!DOCTYPE html>
<html>

<head>
    <title>Blog Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/blogpage2.css">
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

    <div class="boxfix box1">
        <p class="headbox1">BLOGS</p>

        <div class="noidungbox1">
            <div class="left">
                <p>22,591</p>
                <p>shares</p>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
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
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-twitter"></i></a>
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
            <input type="text" placeholder="Your Comment*" class="nhapinput2">
            <input type="submit" value="Submit Comment" class="btnsub">
        </form>
    </div>








































    <div class="box foot">
        <div class="cot">
            <p class="headcot">TUTORIAL</p>
            <hr>
            <div class="cotnho">
                <p class="text1">Java</p>
                <p class="text1">Selenium (Java)</p>
                <p class="text1">Selenium Automation Framework</p>
                <p class="text1">Docker for Selenium</p>
                <p class="text1">TestNG</p>
            </div>
        </div>
        <div class="cot">
            <p class="headcot hn">TUTORIAL</p>
            <hr class="hn">
            <div class="cotnho">
                <p class="text1">Jenkins</p>
                <p class="text1">Git</p>
                <p class="text1">Github</p>
                <p class="text1">Maven</p>
                <p class="text1">Log4j</p>
            </div>
        </div>
        <div class="cot">
            <p class="headcot">DEMO SITES</p>
            <hr>
            <div class="cotnho">
                <p class="text1">Basic Demo Site</p>
                <p class="text1">Automation Practice Site</p>
                <p class="text1">Automation Action Site</p>
                <p class="text1">E-commerce Demo Site</p>
            </div>
        </div>
        <div class="cot">
            <p class="headcot">USEFUL LINKS</p>
            <hr>
            <div class="cotnho">
                <p class="text1">Blog</p>
                <p class="text1">Forum</p>
                <p class="text1">Contact us</p>
            </div>
        </div>
    </div>

    <div class="foot2">
        <div class="box fixf">
            <div>
                <p class="leftfoot2">© 2020 MS.Robot Corp.</p>
            </div>

            <div class="rightfoot2">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
        </div>

    </div>















    <div class="feedback">
        <img src="image/feedback icon.png" class="imgfb" onclick="popupfeedback()">
    </div>

    <!-- modal register -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="headpopup">
                <h2 class="headsignup">Sign Up and Start Learning!</h2>
                <span class="close">&times;</span>
            </div>

            <hr class="duongthang">
            <form class="bodypopup" method="POST" action="verifyemailpage.php">

                <input type="text" id="email" name="email" placeholder="Email" class="oinput" required>


                <input type="password" id="password" name="password" placeholder="Password" class="oinput passin"
                    required>


                <input type="password" id="password" name="password2" placeholder="Verify password"
                    class="oinput passin" required>

                <p class="product">Please use this email & password to login our Demo Sites when using Selenium Test
                    Automation.</p>

                <div class="checkboxandtxt">
                    <input type="checkbox" required>
                    <p class="txtcheck">Yes! I want to receive emails with Selenium Tips and ebook!</p>
                </div>


                <input type="submit" value="Sign up" class="btnsign">

                <div class="thoathuan">
                    <p>By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a>
                    </p>
                </div>
            </form>

            <hr class="duongthang">
            <div class="thoathuan">
                <p>Already have an account? <span id="popuplogin" class="linklogin" onclick="popuplogin()">Log In</span>
                </p>
            </div>

        </div>
    </div>

    <!-- modal login -->
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <div class="headpopup">
                <h2 class="headsignup">Log in to your <span style="color: #0744F2">Ms.Robot</span> account!</h2>
                <span class="close">&times;</span>
            </div>

            <hr class="duongthang">
            <form class="bodypopup" method="POST">

                <input type="text" id="email" name="email" placeholder="Email" class="oinput" required>


                <input type="password" id="password" name="password" placeholder="Password" class="oinput passin"
                    required>



                <input type="submit" value="Login" class="btnsign">

                <div class="thoathuan">
                    <p>or <a href="#" onclick="popupfgp()">Forgot password</a>
                    </p>
                </div>
            </form>

            <hr class="duongthang">
            <div class="thoathuan">
                <p>Don't have an account? <span onclick="popupsignup()" class="linklogin">Sign up</span></p>
            </div>

        </div>
    </div>

    <!-- modal forgot password -->
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <div class="headpopup">
                <h2 class="headsignup">Forgot password <span style="color: #0744F2">Ms.Robot</span> account!</h2>
                <span class="close">&times;</span>
            </div>

            <hr class="duongthang">
            <div class="bodypopup">

                <input type="text" id="email" name="email" placeholder="Email" class="oinput" required>
                <img src="image/recaptcha.png">
                <input type="submit" value="Reset password" class="btnsign" onclick="popupresetpass()">

                <div class="thoathuan">
                    <p>or <a href="#" onclick="popuplogin()">Login</a>
                    </p>
                </div>
            </div>



        </div>
    </div>

    <!-- modal reset password -->
    <div id="myModal4" class="modal">
        <div class="modal-content">
            <div class="headpopup">
                <h2 class="headsignup">Reset password</h2>

            </div>

            <hr class="duongthang">
            <form class="bodypopup" method="POST">

                <input type="password" id="password" name="password" placeholder="New password" class="oinput passin"
                    required>

                <input type="password" id="password" name="password" placeholder="Verify password" class="oinput passin"
                    required>
                <input type="submit" value="Submit" class="btnsign">


            </form>



        </div>
    </div>


    <!-- modal feed back -->
    <div id="myModal5" class="modal">
        <div class="modal-content">
            <div class="headpopup">
                <h2 class="headsignup">Your feedback!</h2>
                <span class="close">&times;</span>
            </div>

            <hr class="duongthang">
            <form class="bodypopup" method="POST">
                <p class="txtfeedback">How do you feel about our website?</p>
                <div class="vector">
                    <div class="phantuvector">
                        <img src="image/vector1.png" class="imgvector">
                        <img src="image/vector6.png" class="imgvector2">
                        <p class="txtvector">angry</p>
                    </div>
                    <div class="phantuvector">
                        <img src="image/vector2.png" class="imgvector">
                        <img src="image/vector7.png" class="imgvector2">
                        <p class="txtvector">sad</p>
                    </div>
                    <div class="phantuvector">
                        <img src="image/vector3.png" class="imgvector">
                        <img src="image/vector8.png" class="imgvector2">
                        <p class="txtvector">careless</p>
                    </div>
                    <div class="phantuvector">
                        <img src="image/vector4.png" class="imgvector">
                        <img src="image/vector9.png" class="imgvector2">
                        <p class="txtvector">like</p>
                    </div>
                    <div class="phantuvector">
                        <img src="image/vector5.png" class="imgvector">
                        <img src="image/vector10.png" class="imgvector2">
                        <p class="txtvector">love</p>
                    </div>


                </div>

                <p class="txtfeedback">How like are you to recommend our company/product/service to your friends and
                    colleagues?</p>
                <div class="radio">
                    <label class="colorradio"><input type="radio" name="option" value="1" required>1</label>
                    <label class="colorradio"><input type="radio" name="option" value="2">2</label>
                    <label class="colorradio"><input type="radio" name="option" value="3">3</label>
                    <label class="colorradio"><input type="radio" name="option" value="4">4</label>
                    <label class="colorradio"><input type="radio" name="option" value="5">5</label>
                    <label class="colorradio"><input type="radio" name="option" value="6">6</label>
                    <label class="colorradio"><input type="radio" name="option" value="7">7</label>
                    <label class="colorradio"><input type="radio" name="option" value="8">8</label>
                    <label class="colorradio"><input type="radio" name="option" value="9">9</label>
                    <label class="colorradio"><input type="radio" name="option" value="10">10</label>
                </div>


                <div class="radio2">
                    <p>not at all</p>
                    <p>very likely</p>
                </div>


                <p class="txtfeedback">Tell us what you like about our website</p>
                <input type="text" id="password" name="password" placeholder="The great experience" class="oinput nor"
                    required>

                <input type="submit" value="Submit" class="btnsign">


            </form>



        </div>
    </div>















    <script>
    // Lấy các phần tử cần thiết
    var modalsign = document.getElementById("myModal");
    var modallog = document.getElementById("myModal2");
    var modalfgp = document.getElementById("myModal3");
    var modalresetpass = document.getElementById("myModal4");
    var modalfeedback = document.getElementById("myModal5");
    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];
    var span3 = document.getElementsByClassName("close")[2];
    var span4 = document.getElementsByClassName("close")[3];
    // Khi người dùng nhấn nút, hiển thị popup
    function popupsignup() {
        modalsign.style.display = "block";
        modallog.style.display = "none";
        // Xử lý sự kiện click
    }
    // Khi người dùng nhấn vào nút đóng, ẩn popup
    span.onclick = function() {
        modalsign.style.display = "none";
    }
    // Khi người dùng nhấn bên ngoài popup, ẩn popup
    function popuplogin() {
        modalfgp.style.display = "none"
        modallog.style.display = "block";
        modalsign.style.display = "none";
        // Xử lý sự kiện click
    }
    span2.onclick = function() {
        modallog.style.display = "none";
    }

    function popupfgp() { //forgot password
        modallog.style.display = "none";
        modalfgp.style.display = "block";
    }
    span3.onclick = function() {
        modalfgp.style.display = "none";
    }

    function popupresetpass() {
        modalfgp.style.display = "none"
        modalresetpass.style.display = "block"
    }

    function popupfeedback() {
        modalfeedback.style.display = "block"
    }
    span4.onclick = function() {
        modalfeedback.style.display = "none";
    }

    window.onclick = function(event) { //Xử lí sự kiện khi bấm ngoài pop up
        if (event.target == modalsign) {
            modalsign.style.display = "none";
        }

        if (event.target == modallog) {
            modallog.style.display = "none";
        }

        if (event.target == modalfgp) {
            modalfgp.style.display = "none";
        }

        if (event.target == modalresetpass) {
            modalresetpass.style.display = "none";
        }


        if (event.target == modalfeedback) {
            modalfeedback.style.display = "none";
        }
    }



    const navbarDropdown = document.getElementById("navbarDropdown"); //lấy nút bấm dropdown trên thanh navbar
    const navbars = document.querySelector(".navbar-expand-lg"); //lấy thanh navbar

    navbarDropdown.addEventListener("click", function() { //thêm sự kiện khi bấm vào
        if (navbars.style.backgroundColor === "") { //toán tử so sánh kiểu và giá trị trong JavaScript
            navbars.style.backgroundColor = "transparent"; //biến đổi màu nav mất đi
            navbars.style.boxShadow = "none";
        } else {
            navbars.style.backgroundColor = ""; //trả lại màu nav như cũ
            navbars.style.boxShadow = "";
        }
    });

    document.addEventListener("click", function(e) { //nếu click bên ngoài nút dropdown thì cũng trả lại màu
        if (e.target !== navbarDropdown) {
            navbars.style.backgroundColor = "";
            navbars.style.boxShadow = "";
        }
    });

    //khảo sát hài lòng (sad, like, angry...)
    const imageContainers = document.querySelectorAll('.phantuvector'); //chọn 1 phần tử chứa ảnh và text

    imageContainers.forEach((container) => {
        const image = container.querySelector('.imgvector'); //khi bấm vào 1 ảnh
        const imageText = container.querySelector('.txtvector'); //chọn txt đi cùng ảnh đó

        image.addEventListener('click', () => {
            // Loại bỏ lớp CSS "selected" khỏi tất cả các phần tử "image-container"
            imageContainers.forEach((container) => {
                container.classList.remove('selected');
            });

            // Thêm lớp CSS "selected" vào phần tử "image-container" tương ứng với ảnh được chọn
            container.classList.add('selected');
        });
    });
    </script>


</body>

</html>