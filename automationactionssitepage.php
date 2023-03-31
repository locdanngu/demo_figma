<?php include('xulitacvu.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Automation Actions Site</title>
    <link rel="stylesheet" type="text/css" href="css/automationactionssitepage.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/automationactionssitepage.php -->

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
        <p class="headbox1">AUTOMATION ACTIONS SITE</p>
    </div>

    <div class="box box2">
        <p class="choiceof5 active">Portlets</p>
        <p class="choiceof5">Multiple Lists</p>
        <p class="choiceof5">Simple List</p>
        <p class="choiceof5">Grid Sorting</p>
        <p class="choiceof5">Accepted Elements</p>
    </div>
    <div class="box3">
        <div class="bodybox3">
            <div class="coche active">
                <div class="thongbaocoche">
                    <p class="fixtxt">Re-Order Elements provided. For Ex : Move Car to Motobike place</p>
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="bodycoche">
                    <div class="ochua" ondrop="drop(event)" ondragover="allowDrop(event)" id="div1">
                        <img src="image/car.png" draggable="true" ondragstart="drag(event)" id="drag1">
                    </div>
                    <div class="ochua" ondrop="drop(event)" ondragover="allowDrop(event)" id="div1">
                        <img src="image/motorbike.png" draggable="true" ondragstart="drag(event)" id="drag2">
                    </div>
                    <div class="ochua" ondrop="drop(event)" ondragover="allowDrop(event)" id="div1">
                        <img src="image/airplane.png" draggable="true" ondragstart="drag(event)" id="drag3">
                    </div>
                    <div class="ochua" ondrop="drop(event)" ondragover="allowDrop(event)" id="div1">
                        <img src="image/train.png" draggable="true" ondragstart="drag(event)" id="drag4">
                    </div>
                    <div class="ochua hidden" ondrop="drop(event)" ondragover="allowDrop(event)" id="div1">
                        <img src="image/car.png" draggable="true" ondragstart="drag(event)" id="drag5">
                    </div>
                    <div class="ochua" ondrop="drop(event)" ondragover="allowDrop(event)" id="div1">
                        <img src="image/ferry.png" draggable="true" ondragstart="drag(event)" id="drag6">
                    </div>
                </div>
            </div>
            <div class="coche">
                <div class="thongbaocoche">
                    <p class="fixtxt">Re-Order elements of both the lists and swap them if needed</p>
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="bodycoche">
                    <div class="bodycoche2">
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div14">
                            <img src="image/boj1.png" draggable="true" ondragstart="drag(event)" id="drag14">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div15">
                            <img src="image/boj2.png" draggable="true" ondragstart="drag(event)" id="drag15">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div16">
                            <img src="image/boj3.png" draggable="true" ondragstart="drag(event)" id="drag16">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div17">
                            <img src="image/boj4.png" draggable="true" ondragstart="drag(event)" id="drag17">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div18">
                            <img src="image/boj5.png" draggable="true" ondragstart="drag(event)" id="drag18">
                        </div>
                    </div>

                    <div class="bodycoche2">
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div19">
                            <img src="image/goj1.png" draggable="true" ondragstart="drag(event)" id="drag19">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div20">
                            <img src="image/goj2.png" draggable="true" ondragstart="drag(event)" id="drag20">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div21">
                            <img src="image/goj3.png" draggable="true" ondragstart="drag(event)" id="drag21">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div22">
                            <img src="image/goj4.png" draggable="true" ondragstart="drag(event)" id="drag22">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div23">
                            <img src="image/goj5.png" draggable="true" ondragstart="drag(event)" id="drag23">
                        </div>
                    </div>
                </div>
            </div>
            <div class="coche">
                <div class="thongbaocoche">
                    <p class="fixtxt">Re-Order elements of the list from Object 1 to 7</p>
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="bodycoche">
                    <div class="bodycoche2">
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div7">
                            <img src="image/oj1.png" draggable="true" ondragstart="drag(event)" id="drag7">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div8">
                            <img src="image/oj2.png" draggable="true" ondragstart="drag(event)" id="drag8">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div9">
                            <img src="image/oj3.png" draggable="true" ondragstart="drag(event)" id="drag9">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div10">
                            <img src="image/oj4.png" draggable="true" ondragstart="drag(event)" id="drag10">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div11">
                            <img src="image/oj5.png" draggable="true" ondragstart="drag(event)" id="drag11">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div12">
                            <img src="image/oj6.png" draggable="true" ondragstart="drag(event)" id="drag12">
                        </div>
                        <div class="khoioj" ondrop="drop(event)" ondragover="allowDrop(event)" id="div13">
                            <img src="image/oj7.png" draggable="true" ondragstart="drag(event)" id="drag13">
                        </div>
                    </div>

                </div>
            </div>
            <div class="coche">
                <div class="thongbaocoche">
                    <p class="fixtxt">Re-Order Grid elements in descending order.</p>
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="bodycoche">
                    <div class="bodycoche4">
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div24">
                            <img src="image/A.png" draggable="true" ondragstart="drag(event)" id="drag24">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div25">
                            <img src="image/B.png" draggable="true" ondragstart="drag(event)" id="drag25">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div26">
                            <img src="image/C.png" draggable="true" ondragstart="drag(event)" id="drag26">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div27">
                            <img src="image/D.png" draggable="true" ondragstart="drag(event)" id="drag27">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div28">
                            <img src="image/E.png" draggable="true" ondragstart="drag(event)" id="drag28">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div29">
                            <img src="image/F.png" draggable="true" ondragstart="drag(event)" id="drag29">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div30">
                            <img src="image/G.png" draggable="true" ondragstart="drag(event)" id="drag30">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div31">
                            <img src="image/H.png" draggable="true" ondragstart="drag(event)" id="drag31">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div32">
                            <img src="image/I.png" draggable="true" ondragstart="drag(event)" id="drag32">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div33">
                            <img src="image/J.png" draggable="true" ondragstart="drag(event)" id="drag33">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div34">
                            <img src="image/K.png" draggable="true" ondragstart="drag(event)" id="drag34">
                        </div>
                        <div class="khoichucai" ondrop="drop(event)" ondragover="allowDrop(event)" id="div35">
                            <img src="image/L.png" draggable="true" ondragstart="drag(event)" id="drag35">
                        </div>
                    </div>
                </div>
            </div>
            <div class="coche">
                <div class="thongbaocoche">
                    <p class="fixtxt">Specify using the “accept” option which element (or group of elements) is accepted
                        by the target droppable.</p>
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="bodycoche">
                    <div id="box1" draggable="true">
                        <p class="cant">I'm draggable but can't be dropped</p>
                    </div>
                    <div id="box2" draggable="true" ondragstart="dragStart2(event)">
                        <p class="can">Drag me to my target</p>
                    </div>
                    <div id="box3" ondrop="dragDrop2(event)" ondragover="allowDrop2(event)">
                        <p class="place">Drag me to my target</p>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>

    // Lấy danh sách tất cả các phần tử của class choiceof5 và coche
    const choiceof5 = document.querySelectorAll('.choiceof5');
    const coche = document.querySelectorAll('.coche');
    const close = document.querySelectorAll('.bi.bi-x-lg');
    // const thongbaocoche = document.querySelectorAll('.thongbaocoche');
    // Thêm sự kiện "click" vào mỗi phần tử của class choiceof5
    choiceof5.forEach(function(choice, index) {
        choice.addEventListener('click', function() {
            // Loại bỏ class active khỏi tất cả các phần tử của class choiceof5 và coche
            choiceof5.forEach(function(choice) {
                choice.classList.remove('active');
            });
            coche.forEach(function(coches) {
                coches.classList.remove('active');
            });
            // Thêm class active vào phần tử tương ứng của class choiceof5 và coche
            choice.classList.add('active');
            coche[index].classList.add('active');
        });
    });

    // Lấy danh sách tất cả các phần tử có class là "bi bi-x-lg"
    var bibi = document.querySelectorAll(".bi-x-lg");
    var thongbaocoche = document.querySelectorAll(".thongbaocoche"); //đăng ký


    bibi[0].onclick = function() {
        thongbaocoche[0].style.display = "none";
    }

    bibi[1].onclick = function() {
        thongbaocoche[1].style.display = "none";
    }

    bibi[2].onclick = function() {
        thongbaocoche[2].style.display = "none";
    }

    bibi[3].onclick = function() {
        thongbaocoche[3].style.display = "none";
    }

    bibi[4].onclick = function() {
        thongbaocoche[4].style.display = "none";
    }


    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("image", ev.target.id);
    }


    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData(
            "image"); //Lấy dữ liệu đang được kéo từ thuộc tính dataTransfer và lưu trữ nó vào biến data.
        var targetElem = ev.target; //Lấy phần tử mục tiêu đang được thả vào và lưu trữ nó vào biến targetElem.

        if (targetElem.tagName.toLowerCase() === "img") {
            //Nếu phần tử mục tiêu là một hình ảnh (img), lấy phần tử cha của hình ảnh được kéo và phần tử cha của hình ảnh mục tiêu
            var sourceParent = document.getElementById(data).parentNode;
            var targetParent = targetElem.parentNode;

            // Hoán đổi hai hình ảnh bằng cách thay thế các nút cha của chúng
            targetParent.appendChild(document.getElementById(data));
            sourceParent.appendChild(targetElem);
            // } else {
            //     // Nếu không, thêm hình ảnh được kéo vào khu vực thả như trước đó.
            //     targetElem.appendChild(document.getElementById(data));
        }
    }

    function allowDrop2(ev) {
        ev.preventDefault();
    }

    function dragStart2(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function dragDrop2(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
    </script>


</body>

</html>