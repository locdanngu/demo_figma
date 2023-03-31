<?php include('xulitacvu.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/contactuspage.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/contactuspage.php -->

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
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Demo Sites
                    </a>
                    <?php include('templates/navbar.php'); ?>
    </nav>

    <div class="box box1">
        <p class="headbox1">CONTACT US</p>
    </div>

    <p class="box box2">YOUR INFORMATION</p>

    <div class="box box3">
        <form class="khoi" method="GET" action="#">
            <div class="dau">
                <div class="phantu1">
                    <label>Your name: <span style="color: #D2000D;">*</span></label>
                    <input class="inputbox3" required type="text" placeholder="Enter">
                </div>
                <div class="phantu1">
                    <label>Your email: <span style="color: #D2000D;">*</span></label>
                    <input class="inputbox3" required type="text" placeholder="Enter">
                </div>
            </div>

            <div class="phantu1 fixw">
                <label>Subject: <span style="color: #D2000D;">*</span></label>
                <input class="inputbox3" required type="text" placeholder="Enter">
            </div>
            <div class="phantu1 fixwh">
                <label>Message:</label>
                <textarea class="inputbox3 fixh"
                    placeholder="I would like to know more about MS Robot/Selenium."></textarea>
            </div>
            <p class="txtbox3">This will send your message to us for more informations. We will answer your questions by
                email within 24 hours.</p>
            <input type="submit" value="Submit" class="btnbox3">


        </form>
    </div>

    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>
    </script>


</body>

</html>