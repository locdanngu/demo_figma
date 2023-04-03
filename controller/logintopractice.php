<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
    $_SESSION['username'] = $_POST['emaildangnhap'];
    header('Location: ../automationpracticesitepage.php');
  } else {
    header('Location: ../homepage.php');
  }


?>