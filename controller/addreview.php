<?php include('dbconnect.php'); ?>

<?php
session_start();
try {
    $useremail = $_SESSION['username'];
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT iduser FROM user WHERE email=?");
      $stmt->bindParam(1, $useremail);         
      $stmt->execute();                                         
      $iduser = $stmt->fetchColumn();  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<?php
try {
      $idphone = $_GET['idphone'];
      $review = $_GET['review'];
      $star = $_GET['rating'];
      echo $idphone;
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("INSERT INTO review(idphone,iduser,review,star) VALUES(?,?,?,?)");
      $stmt->bindParam(1, $idphone);
      $stmt->bindParam(2, $iduser);
      $stmt->bindParam(3, $review);      
      $stmt->bindParam(4, $star);       
      $stmt->execute();                                         
      $previousPage = $_SERVER['HTTP_REFERER'];                             //lưu địa chỉ trang trước
      header("Location: $previousPage");  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>