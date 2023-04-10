<?php include('dbconnect.php'); ?>

<?php
session_start();
try {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {                //Kiểm tra xem có phải phương thức post không
    $emaildangky = $_POST['emaildangky'];
    $passworddangky = password_hash($_POST['passworddangky'], PASSWORD_DEFAULT);
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO user (nameuser, avatar , email, password) VALUES ('Trần Văn Lộc', 'image/avatarjohn.png', :emaildangky, :passworddangky)");
    $stmt->bindParam(':emaildangky', $emaildangky);
    $stmt->bindParam(':passworddangky', $passworddangky);
    $stmt->execute();
    $_SESSION['username'] = $_POST['emaildangnhap']; 
    $previousPage = $_SERVER['HTTP_REFERER'];               //Lưu địa chỉ trang web lúc đăng ký
    header("Location: $previousPage");                      //Trả về trang mà mình làm đăng ký
}
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>