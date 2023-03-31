<?php
session_start();
session_unset();            //xoá toàn bộ các biến session
session_destroy();          //xoá phiên làm việc hiện tại
header("Location: ../homepage.php");
exit();                     //ngăn chặn việc thực thi bất kỳ mã nào sau khi chuyển hướng.
?>