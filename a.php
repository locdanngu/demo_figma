<!DOCTYPE html>
<html>

<head>
    <script>
    function findphone() {
        // Tạo một yêu cầu AJAX đến b.php với tham số là giá trị của ô input
        var xhttp = new XMLHttpRequest();                                           //tạo kết nối xhttp
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {                           //điều kiện hoàn thành
                // Xử lý phản hồi từ b.php ở đây
                document.getElementById("listphone").innerHTML = this.responseText;        //gán kết quả trả về
            }
        };
        var input = document.getElementById("findphone").value;     //lấy giá trị mình nhập vào ô input
        xhttp.open("GET", "b.php?findphone=" + input, true);        //gửi yêu cầu get
        xhttp.send();
    }
    </script>
</head>

<body>
    <input type="text" id="findphone" oninput="findphone()" placeholder="Type something...">
    <div id="listphone"></div>
</body>

</html>