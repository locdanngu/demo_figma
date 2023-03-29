<!DOCTYPE html>
<html>

<head>
    <title>Verify your email</title>
    <link rel="stylesheet" type="text/css" href="css/basicsitepage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/basicsitepage.php -->

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
                <li class="nav-item">
                    <a class="nav-link" href="blogpage.php">Blog</a>
                </li>
                <li class="nav-item dropdown active">
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
        <p class="headbox1">BASIC SITE</p>
    </div>

    <div class="box box2">
        <div class="headbox2">
            <p class="city active">City 1</p>
            <p class="city">City 2</p>
            <p class="city">City 3</p>
            <p class="city">City 4</p>
        </div>
        <div class="bodybox2 active">
            <p class="txtcity">Description 1</p>
            <p class="txtcity">Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat.
                Neque dictum quis.</p>
            <p class="txtcity">A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet,
                viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.</p>
            <p class="txtcity">Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis potenti
                condimentum convallis sollicitudin. Nibh aliquet.</p>
        </div>
        <div class="bodybox2">
            <p class="txtcity">Description 2</p>
            <p class="txtcity">Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat.
                Neque dictum quis.</p>
            <p class="txtcity">A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet,
                viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.</p>
            <p class="txtcity">Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis potenti
                condimentum convallis sollicitudin. Nibh aliquet.</p>
        </div>

        <div class="bodybox2">
            <p class="txtcity">Description 3</p>
            <p class="txtcity">Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat.
                Neque dictum quis.</p>
            <p class="txtcity">A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet,
                viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.</p>
            <p class="txtcity">Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis potenti
                condimentum convallis sollicitudin. Nibh aliquet.</p>
        </div>

        <div class="bodybox2">
            <p class="txtcity">Description 4</p>
            <p class="txtcity">Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed
                platea vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat.
                Neque dictum quis.</p>
            <p class="txtcity">A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in
                tortor dapibus rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet,
                viverra. Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.</p>
            <p class="txtcity">Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames.
                Nostra sodales ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis potenti
                condimentum convallis sollicitudin. Nibh aliquet.</p>
        </div>


    </div>


    <div class="box box3">

        <div class="khoibox3">
            <p class="namecity">City 1</p>
            <img class="imgcity" src="image/city1.png">
            <p class="in4city">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="khoibox3">
            <p class="namecity">City 1</p>
            <img class="imgcity" src="image/city2.png">
            <p class="in4city">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="khoibox3">
            <p class="namecity">City 1</p>
            <img class="imgcity" src="image/city3.png">
            <p class="in4city">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="khoibox3">
            <p class="namecity">City 1</p>
            <img class="imgcity" src="image/city4.png">
            <p class="in4city">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>

    </div>


    <div class="box4">
        <p class="namebox4">Registration Form</p>
        <div class="headbox4">
            <div class="leftbox4">
                <p class="txtbox4">Your Name (*)</p>
                <p class="txtbox4">Marital Status</p>
                <p class="txtbox4">Hobby</p>
            </div>
            <div class="rightbox4">
                <input type="text" required placeholder="First Name" class="inputbox4">
                <input type="text" required placeholder="Last Name" class="inputbox4">
                <div class="radiobtn">
                    <label class="colorradio1"><input type="radio" name="option" value="Single" required class="btnrd">Single</label>
                    <label class="colorradio1"><input type="radio" name="option" value="Married" class="btnrd">Married</label>
                    <label class="colorradio1"><input type="radio" name="option" value="Divorced" class="btnrd">Divorced</label>
                </div>
                <div class="checkboxbtn">

                </div>
            </div>
        </div>

    </div>




    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>

    const city = document.querySelectorAll('.city');
    const bodybox2 = document.querySelectorAll('.bodybox2');

    city.forEach(function(choice, index) {
        choice.addEventListener('click', function() {
            // Loại bỏ class active khỏi tất cả các phần tử của class choiceof5 và coche
            city.forEach(function(choice) {
                choice.classList.remove('active');
            });
            bodybox2.forEach(function(coches) {
                coches.classList.remove('active');
            });
            // Thêm class active vào phần tử tương ứng của class choiceof5 và coche
            choice.classList.add('active');
            bodybox2[index].classList.add('active');
        });
    });
    </script>


</body>

</html>