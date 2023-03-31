<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
    $_SESSION['username'] = $_POST['emaildangnhap'];
    $previousPage = $_SERVER['HTTP_REFERER'];               //Lưu địa chỉ trang web lúc đăng nhập
    header("Location: $previousPage");                      //Trả về trang mà mình làm đăng nhập
    // header('Location: ../homepage.php');
  } else {
    header('Location: ../homepage.php');
  }


?>