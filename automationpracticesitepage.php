<!DOCTYPE html>
<html>

<head>
    <title>Automation Practice Site</title>
    <link rel="stylesheet" type="text/css" href="css/automationpracticesitepage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/automationpracticepage.php -->

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
        <p class="headbox1">AUTOMATION PRACTICE SITE</p>
    </div>

    <div class="box box2">
        <p class="headbox2">Sample Iframe page</p>
        <p class="headbox2">Test page to practice your Iframe related coding skills.</p>
        <p class="bodybox2">There are 3 Iframes in this page. You can switch between them from parent frame to child
            iframe.</p>
        <p class="bodybox2">Use these frames to practice your skills.</p>
    </div>

    <div class="box box3">
        <p class="headbox3">Iframe 1</p>
        <iframe src="https://codelearn.io" class="if" frameborder="1"></iframe>
    </div>

    <div class="box box3">
        <p class="headbox3">Iframe 2</p>
        <iframe src="https://blog.luyencode.net/" class="if" frameborder="1"></iframe>
    </div>

    <div class="box box3">
        <p class="headbox3">Iframe 3</p>
        <iframe src="https://www.guru99.com/alert-popup-handling-selenium.html" class="if" frameborder="1"></iframe>
    </div>




    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>
    </script>


</body>

</html>