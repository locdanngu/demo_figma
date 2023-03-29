<!DOCTYPE HTML>
<html>

<head>
    <style>
    #div1,
    #div2,
    #div3,
    #div4 {
        float: left;
        width: 200px;
        height: 72px;
        margin: 10px;
        padding: 10px;
        border: 1px solid #aaaaaa;
    }
    </style>
    
</head>

<body>

    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="https://webvn.com/wp-content/uploads/2014/10/wvnlogo.png" draggable="true" ondragstart="drag(event)"
            id="drag1" width="200" height="72">
    </div>

    <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="image/avatarus1.png" draggable="true" ondragstart="drag(event)" id="drag2" width="200" height="72">
    </div>
    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>


    <script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("image", ev.target.id);
    }

    // function drop(ev) {
    // ev.preventDefault();

    // var data = ev.dataTransfer.getData("image");
    // ev.target.appendChild(document.getElementById(data));
    // }

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
    </script>
</body>

</html>