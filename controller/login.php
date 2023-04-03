<?php include('dbconnect.php'); ?>

<?php
session_start();
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
//     $_SESSION['username'] = $_POST['emaildangnhap'];
//     $previousPage = $_SERVER['HTTP_REFERER'];               //Lưu địa chỉ trang web lúc đăng nhập
//     header("Location: $previousPage");                      //Trả về trang mà mình làm đăng nhập
//     // header('Location: ../homepage.php');
//   } else {
//     header('Location: ../homepage.php');
//   }
try {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
      $emaildangnhap = $_POST['emaildangnhap'];
      $passworddangnhap = $_POST['passworddangnhap'];
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT password FROM user WHERE email = ?");
      $stmt->bindParam(1, $emaildangnhap);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $hashedPassword = $row['password'];
      if (password_verify($passworddangnhap, $hashedPassword)) {
        $_SESSION['username'] = $_POST['emaildangnhap'];
        $previousPage = $_SERVER['HTTP_REFERER']; 
        header("Location: $previousPage");  
      } else {
          // Mật khẩu không hợp lệ
          header('Location: ../homepage.php');
      }
    } else {
      header('Location: ../homepage.php');
    } 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>