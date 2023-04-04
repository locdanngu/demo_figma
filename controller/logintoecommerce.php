<?php include('dbconnect.php'); ?>

<?php
session_start();
try {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
      $emaildangnhap = $_POST['emaildangnhap'];               //lấy dữ liệu post
      $passworddangnhap = $_POST['passworddangnhap'];
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT password FROM user WHERE email = ?");
      $stmt->bindParam(1, $emaildangnhap);            //gán giá trị email vào ?
      $stmt->execute();                               //chạy truy vấn
      $row = $stmt->fetch(PDO::FETCH_ASSOC);          //lấy kết quả truy vấn
      $hashedPassword = $row['password'];             //mã hóa mật khẩu
      if (password_verify($passworddangnhap, $hashedPassword)) {              //kiểm tra mật khẩu trùng khớp
        $_SESSION['username'] = $_POST['emaildangnhap'];                      //gán session
        header('Location: ../ecommercesitepage.php');
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