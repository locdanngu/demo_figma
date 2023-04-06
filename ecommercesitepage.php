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
        <div class="leftbox2" id="listphone">
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
            <?php 
            if (!isset($hang)) {
                $active2 = 'active';
            } 
            ?>
            <form method="GET" action="ecommercesitepage.php">
                <input type="text" placeholder="Search" class="inputbox2" name="findphone">
            </form>
            <p class="tieude">Categories</p>
            <a href="ecommercesitepage.php" class="hang">
                <p class="name <?php echo $active2; ?>">All</p>
                <p class="sl <?php echo $active2; ?>">(<?php echo $countphone; ?>)</p>
            </a>
            <?php foreach ($listphone as $row) : ?>
            <?php 
            if(isset($hang)){
                // nếu biến hang tồn tại thì thêm thuộc tính active vào style
                $active = ($row['namefirm'] == $hang) ? 'active' : ''; 
            }
            ?>
            <a href="ecommercesitepage.php?hang=<?php echo $row['namefirm']; ?>" class="hang">
                <p class="name <?php echo $active; ?>"><?php echo $row['namefirm']; ?></p>
                <p class="sl <?php echo $active; ?>">(<?php echo $row['total']; ?>)</p>
            </a>
            <?php endforeach; ?>
            <!-- <div class="hang">
                <p class="name">Other</p>
                <p class="sl">(2)</p>
            </div> -->
            <p class="tieude">Filter by Price</p>
            <div id="slider">
                <input type="range" min="0" max="2000" value="1000" class="slider" id="range">
                <p>Price: <span class="bol">$0 - $</span><span id="price" class="bol"></span></p>
            </div>

            <p class="tieude">Popular Products</p>
            <?php foreach ($popularphone as $row) : ?>
            <a href="productsdetailspage.php?idphone=<?php echo urlencode($row['idphone']); ?>&img=<?php echo urlencode($row['img']); ?>&name=<?php echo urlencode($row['name']); ?>&price=<?php echo urlencode($row['price']); ?>&gt1=<?php echo urlencode($row['gt1']); ?>&gt2=<?php echo urlencode($row['gt2']); ?>"
                class="mon">
                <img class="imgpopular" src="<?php echo $row['img']; ?>">
                <div class="in4img">
                    <p class="nameimg"><?php echo $row['name']; ?></p>
                    <p class="price"><?php echo $row['price']; ?></p>
                </div>
            </a>
            <?php endforeach; ?>

        </div>
    </div>

    <?php
    $findphone = isset($findphone) ? $findphone : ''; // Nếu biến $hang không tồn tại, gán cho nó giá trị rỗng
    $hang = isset($hang) ? $hang : ''; // Nếu biến $hang không tồn tại, gán cho nó giá trị rỗng
    ?>




    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>

    // function findphone() {
    //     // Tạo một yêu cầu AJAX đến b.php với tham số là giá trị của ô input
    //     var xhttp = new XMLHttpRequest();                                           //tạo kết nối xhttp
    //     xhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {                           //điều kiện hoàn thành
    //             // Xử lý phản hồi từ b.php ở đây
    //             document.getElementById("listphone").innerHTML = this.responseText;        //gán kết quả trả về
    //         }
    //     };
    //     var input = document.getElementById("findphone").value;     //lấy giá trị mình nhập vào ô input
    //     xhttp.open("GET", "controller/phone.php?findphone=" + input, true);        //gửi yêu cầu get
    //     xhttp.send();
    // }

    const slider = document.querySelector('.slider');
    const price = document.getElementById('price');

    slider.addEventListener('input', () => {
        price.textContent = slider.value;
    });

    slider.value = 1000;
    price.textContent = 1000; //đặt giá trị ban đầu

    // Lấy thẻ input range và thẻ span hiển thị giá trị
    var range = document.getElementById("range");
    // var price = document.getElementById("price");

    // Thêm sự kiện input cho thẻ input range
    range.addEventListener("input", function() {
        // Lấy giá trị của thẻ input range
        var value = range.value;
        // Gửi yêu cầu AJAX đến server với tham số giá trị của thẻ input range
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Xử lý phản hồi từ server ở đây và cập nhật giá trị hiển thị
                document.getElementById("listphone").innerHTML = this.responseText;
                // price.innerHTML = this.responseText;
            }
        };
        var findphone = '<?php echo $findphone; ?>'; // Chuyển giá trị biến PHP thành biến Javascript
        var hang = '<?php echo $hang; ?>'; // Chuyển giá trị biến PHP thành biến Javascript
        // Thêm kiểm tra để tạo URL cho yêu cầu AJAX
        var url = "controller/phoneajax.php?value=" + value;
        if (hang !== '' && findphone == '') {
            url += "&hang=" + hang;
        }else if(hang == '' && findphone !== ''){
            url += "&findphone=" + findphone;
        }
        xhttp.open("GET", url, true);
        xhttp.send();
    });
    </script>


</body>

</html>