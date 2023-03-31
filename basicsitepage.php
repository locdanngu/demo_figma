<?php include('xulitacvu.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Basic Site</title>
    <link rel="stylesheet" type="text/css" href="css/basicsitepage.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/basicsitepage.php -->

<body>
    <nav class="navbar navbar-expand-lg" style="<?php echo $navcss; ?>">
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
                    <?php include('templates/navbar.php'); ?>
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


    <form class="box4" method="POST" action="#">
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
                    <label class="colorradio1"><input type="radio" name="option" value="Single" required
                            class="btnrd">Single</label>
                    <label class="colorradio1"><input type="radio" name="option" value="Married"
                            class="btnrd">Married</label>
                    <label class="colorradio1"><input type="radio" name="option" value="Divorced"
                            class="btnrd">Divorced</label>
                </div>
                <div class="radiobtn">
                    <label class="colorradio1 fix"><input type="checkbox" name="option" value="Single" required
                            class="btnrd">Cooking</label>
                    <label class="colorradio1 fix"><input type="checkbox" name="option" value="Married"
                            class="btnrd">Reading</label>
                    <label class="colorradio1 fix"><input type="checkbox" name="option" value="Divorced"
                            class="btnrd">Dancing</label>
                    <label class="colorradio1 fix"><input type="checkbox" name="option" value="Divorced"
                            class="btnrd">Writing</label>
                </div>

            </div>

        </div>
        <div class="in4box4">
            <p class="txtbox4">Country</p>
            <select class="inputin4">
                <option value="Aruba" selected>Aruba</option>
                <option value="Aruba">Aruba</option>
                <option value="Aruba">Aruba</option>
            </select>

            <p class="txtbox4">Your Email Address(*)</p>
            <input type="text" required placeholder="" class="inputin4">
            <p class="txtbox4">Your Phone Number (*)</p>
            <input type="text" required placeholder="" class="inputin4">
            <p class="txtbox4">Your Profile Picture (required)</p>
            <input type="file" placeholder="Choose File">
            <p class="txtbox4">Selenium Commands</p>
            <select class="form-select inputin4" size="3" aria-label="size 3 select example">
                <option value="Browser Commands">Browser Commands</option>
                <option value="Navigation Commands">Navigation Commands</option>
                <option value="Switch Commands">Switch Commands</option>
                <option value="Switch Commands">Switch Commands</option>
                <option value="Switch Commands">Switch Commands</option>
            </select>
            <p class="txtbox4">About Yourself</p>
            <textarea class="abys"></textarea>
            <input type="submit" value="Submit" class="subbox4">
        </div>
        
    </form>




    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>

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