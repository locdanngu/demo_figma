<!DOCTYPE html>
<html>

<head>
    <title>Blog Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/blogpage.css">
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
                    <p class="txtbaiviet">-	How to achieve your goal of having a correct and good Automation Framework</p>
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