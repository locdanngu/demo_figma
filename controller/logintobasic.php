<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
    $_SESSION['username'] = $_POST['emaildangnhap'];
    header('Location: ../basicsitepage.php');
  } else {
    header('Location: ../homepage.php');
  }


?>