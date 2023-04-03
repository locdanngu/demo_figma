<?php include('xulitacvu.php'); ?>
<?php include('controller/phone.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Ecommerce Site</title>
    <link rel="stylesheet" type="text/css" href="css/ecommercesitepage.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/ecommercesitepage.php -->

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
        <p class="headbox1">ECOMMERCE SITE</p>
    </div>
    
    <div class="box box2">
        <div class="leftbox2">
            <?php foreach ($allphone as $row) : ?>
            <a href="productsdetailspage.php?idphone=<?php echo urlencode($row['idphone']); ?>&img=<?php echo urlencode($row['img']); ?>&name=<?php echo urlencode($row['name']); ?>&price=<?php echo urlencode($row['price']); ?>&gt1=<?php echo urlencode($row['gt1']); ?>&gt2=<?php echo urlencode($row['gt2']); ?>"
                class="osp">
                <div class="headsp">
                    <img src="<?php echo $row['img']; ?>" class="imgsp">
                </div>
                <div class="bodysp">
                    <p class="namesp"><?php echo $row['name']; ?></p>
                    <p class="giasp">$<?php echo $row['price']; ?></p>
                </div>
            </a>
            <?php endforeach; ?>

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




    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>





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