<?php include('xulitacvu.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Need Login First</title>
    <link rel="stylesheet" type="text/css" href="css/logintobasicsite.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/logintobasicsite.php -->

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
                <li class="nav-item ">
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


        <p class="tieudeform">To login, provide your sign up email and password.
            If you are not sign up yet, please <a href="#" onclick="popupsignup()" class="clickhere">click here to
                signup ></a></p>
        <form method="POST" class="formbox2" action="controller/logintobasic.php">
            <p class="txtbox2">Email: <span style="color: #D2000D">*</span></p>
            <input type="text" class="inputbox2" placeholder="Email" required name="emaildangnhap"
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Vui lòng nhập đúng định dạng email">
            <p class="txtbox2">Password: <span style="color: #D2000D">*</span></p>
            <input type="password" class="inputbox2" placeholder="Enter" required name="passworddangnhap"
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$"
                title="Vui lòng nhập mật khẩu có độ dài từ 8 đến 16 ký tự, bao gồm ít nhất một chữ thường, một chữ hoa và một chữ số">
            <input type="submit" value="Login" class="btnbox2">
        </form>
    </div>

    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>
    </script>


</body>

</html>