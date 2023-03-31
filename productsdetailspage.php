<?php include('xulitacvu.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Products Details</title>
    <link rel="stylesheet" type="text/css" href="css/productsdetailspage.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/productsdetailspage.php -->

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

    <div class="box2">
        <div class="leftbox2">
            <a href="ecommercesitepage.php" class="linkhome">Home</a>
            <i class="bi bi-chevron-right"></i>
            <p class="tensp">Galaxy S8</p>
        </div>
        <div class="rightbox2">
            <p class="needhelp">Need Help Ordering?</p>
            <div class="bodyrightbox2">
                <i class="bi bi-telephone-fill"></i>
                <p class="tensp">+235 793-891-7938</p>
            </div>
        </div>
    </div>

    <div class="box2 box3">
        <img src="image/bigss.png" class="imgsp">
        <div class="rightbox3">
            <div class="headrightbox3">
                <p class="namesp">Galaxy Galaxy S8</p>
                <div class="rate">
                    <img src="image/rate.png" class="imgrate">
                    <span class="numrate">6376</span>
                </div>
                <p class="chitietsp">The Galaxy S8 expansive display stretches from edge to edge, giving you the most
                    amount
                    of screen in the least amount of space. And the Galaxy S8+ is even more expansive — our biggest
                    screen
                    yet.¹</p>
            </div>
            <div class="footrightbox3">
                <p class="soluong">Quantity</p>

                <p class="giasp">$649.99</p>
                <button class="addtocart"><span class="add">Add to cart</span><i
                        class="bi bi-chevron-right fix"></i></button>
            </div>
        </div>
    </div>

    <div class="box4">
        <div class="bo4">
            <div class="headbox4">
                <p class="mota active">Description</p>
                <p class="mota">Reviews(2)</p>
            </div>
            <hr class="duongke">
            <div class="noidung active">
                <p class="noidung2">One touch of a red-hot stove is usually all we need to avoid that kind of discomfort
                    in
                    the future. The same
                    is true as we experience in emotional sensation of stress from our first instances of social
                    rejection
                    ridicule. We quickly learn to fear and thus automatically avoid potentially stressful situations of
                    all
                    kinds, including the most common of all making mistakes.</p>
            </div>
            <div class="noidung">
                <p class="noidung2">There are no reviews yet.</p>
                <p class="noidung2">Be the first to review “Galaxy Galaxy S8” Your email address will not be published.
                </p>
                <p class="noidung2">Your email address will not be published. Required fields are marked *</p>
                <div class="rating">
                    <p class="noidung3">Your Rating</p>
                    <div class="star-rating">
                        <input type="radio" id="5-stars" name="rating" value="5" />
                        <label for="5-stars" class="star">&#9733;</label>
                        <input type="radio" id="4-stars" name="rating" value="4" />
                        <label for="4-stars" class="star">&#9733;</label>
                        <input type="radio" id="3-stars" name="rating" value="3" />
                        <label for="3-stars" class="star">&#9733;</label>
                        <input type="radio" id="2-stars" name="rating" value="2" />
                        <label for="2-stars" class="star">&#9733;</label>
                        <input type="radio" id="1-star" name="rating" value="1" />
                        <label for="1-star" class="star">&#9733;</label>
                    </div>
                </div>
                <form method="POST" action="#" class="formbl">
                    <textarea class="nhapbl" placeholder="Your Review *"></textarea>
                    <div class="footbl">
                        <input type="text" class="namebl" placeholder="Name *">
                        <input type="email" class="namebl" placeholder="Email *">
                        <input type="submit" class="btnbl" value="Submit">
                    </div>
                </form>
                <div class="binhluan">
                    <div class="headbinhluan">
                        <div class="nguoibl">
                            <img src="image/ava.png" class="imgbl">
                            <p class="namenguoibl">Critical Skeptic</p>
                        </div>
                        <img src="image/sao.png" class="sao">
                    </div>
                    <p class="noidungbinhluan">Excellent phone, beautiful aesthetics, and a taste of the future worth
                        paying for: 9/10.</p>
                </div>
                <div class="binhluan">
                    <div class="headbinhluan">
                        <div class="nguoibl">
                            <img src="image/ava.png" class="imgbl">
                            <p class="namenguoibl">Fleon</p>
                        </div>
                        <img src="image/sao.png" class="sao">
                    </div>
                    <p class="noidungbinhluan">It means it's the G950F variant which has a Exynos Chipset instead of
                        snapdragon. Same power but this version allows for rooting because it has an unlocked
                        bootloader. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="box4 box5">
        <div class="headbox5">
            <p class="tieudebox">Related Products</p>
            <div class="righttieudebox">
                <i class="bi bi-chevron-left inbox5"></i>
                <i class="bi bi-chevron-right inbox5"></i>
            </div>
        </div>


        <div class="allmathang">
            <a href="#" class="mathangnho">
                <div class="headimg">
                    <img src="image/sp1.png" class="imgthunho">
                </div>

                <p class="namemathang">Samsung Galaxy S9</p>
                <p class="giamathang">$139.00</p>
            </a>
            <a href="#" class="mathangnho">
                <div class="headimg">
                    <img src="image/sp2.png" class="imgthunho">
                </div>
                <p class="namemathang">Samsung Galaxy S9 Plus</p>
                <p class="giamathang">$139.00</p>
            </a>
            <a href="#" class="mathangnho">
                <div class="headimg">
                    <img src="image/sp3.png" class="imgthunho">
                </div>
                <p class="namemathang">iPhone XS Max</p>
                <p class="giamathang">$139.00</p>
            </a>
            <a href="#" class="mathangnho">
                <div class="headimg">
                    <img src="image/sp4.png" class="imgthunho">
                </div>
                <p class="namemathang">Xiaomi Mi 8 SE</p>
                <p class="giamathang">$139.00</p>
            </a>

        </div>
    </div>





    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>


    const mota = document.querySelectorAll('.mota');
    const noidung = document.querySelectorAll('.noidung');
    //Lưu ý: nội dung và mô tả phải bằng số lượng của nhau

    mota.forEach(function(choice, index) {
        choice.addEventListener('click', function() {
            // Loại bỏ class active khỏi tất cả các phần tử của class mota và noidung
            mota.forEach(function(choice) {
                choice.classList.remove('active');
            });
            noidung.forEach(function(nd) {
                nd.classList.remove('active');
            });
            // Thêm class active vào phần tử tương ứng của class mota và noidung
            choice.classList.add('active');
            noidung[index].classList.add('active');
        });
    });
    </script>


</body>

</html>