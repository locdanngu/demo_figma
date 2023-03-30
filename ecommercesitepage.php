<!DOCTYPE html>
<html>

<head>
    <title>Ecommerce Site</title>
    <link rel="stylesheet" type="text/css" href="css/ecommercesitepage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/ecommercesitepage.php -->

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
        <p class="headbox1">ECOMMERCE SITE</p>
    </div>

    <div class="box box2">
        <div class="leftbox2">
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp1.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Samsung Galaxy S8</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp2.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Samsung Galaxy S8 Plus</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp3.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Samsung Galaxy Note 8</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp4.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Samsung Galaxy S9</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp5.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Samsung Galaxy S9 Plus</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp6.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">iPhone XS Max</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp7.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">iPhone XR</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp8.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">iPhone X</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp9.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">iPhone XS</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp10.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">iPhone 7 Plus</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp11.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Xiaomi Mi 8 SE</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp12.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Xiaomi Redmi 7</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp13.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Xiaomi Mi 8</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp14.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Nokia 7 Plus</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
            <a href="#" class="osp">
                <div class="headsp">
                    <img src="image/sp15.png" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp">Lenovo S5 Pro</p>
                    <p class="giasp">$139.00</p>
                </div>
            </a>
        </div>

        <div class="rightbox2">
            <input type="text" placeholder="Search" class="inputbox2">
            <p class="tieude">Categories</p>
            <div class="hang">
                <p class="name active">All</p>
                <p class="sl active">(15)</p>
            </div>
            <div class="hang">
                <p class="name">Apple</p>
                <p class="sl">(05)</p>
            </div>
            <div class="hang">
                <p class="name">Samsung</p>
                <p class="sl">(05)</p>
            </div>
            <div class="hang">
                <p class="name">Xiaomi</p>
                <p class="sl">(03)</p>
            </div>
            <div class="hang">
                <p class="name">Other</p>
                <p class="sl">(02)</p>
            </div>
            <p class="tieude">Filter by Price</p>
            <div id="slider">
                <input type="range" min="0" max="2000" value="1000" class="slider">
                <p>Price: <span class="bol">$0 - $</span><span id="price" class="bol"></span></p>
            </div>

            <p class="tieude">Popular Products</p>
            <a href="#" class="mon">
                <img class="imgpopular" src="image/smallip.png">
                <div class="in4img">
                    <p class="nameimg">iPhone XS Max</p>
                    <p class="price">$139</p>
                </div>
            </a>
            <a href="#" class="mon">
                <img class="imgpopular" src="image/smallss.png">
                <div class="in4img">
                    <p class="nameimg">Samsung Galaxy S9 Plus</p>
                    <p class="price">$139</p>
                </div>
            </a>
            <a href="#" class="mon">
                <img class="imgpopular" src="image/smallxm.png">
                <div class="in4img">
                    <p class="nameimg">Xiaomi Mi 8 SE</p>
                    <p class="price">$139</p>
                </div>
            </a>

        </div>
    </div>




    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>





    const slider = document.querySelector('.slider');
    const price = document.querySelector('#price');

    slider.addEventListener('input', () => {
        price.textContent = slider.value;
    });

    slider.value = 1000;
    price.textContent = 1000; //đặt giá trị ban đầu
    </script>


</body>

</html>