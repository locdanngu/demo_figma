<?php include('dbconnect.php'); ?>

<!-- lấy review phone trong csdl -->
<?php
try {
  // $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $idphone = isset($_GET['idphone']) ? $_GET['idphone'] : '';
  $a= intval($idphone);
  $stmt = $conn->prepare("SELECT DISTINCT user.*,review.review,star
                        FROM user 
                        INNER JOIN review ON user.iduser = review.iduser 
                        INNER JOIN phone ON review.idphone = phone.idphone
                        WHERE phone.idphone = ?;");
  $stmt->bindParam(1, $a);          //ép thành kiểu int                  
  $stmt->execute();
  $allreview = $stmt->fetchAll(PDO::FETCH_ASSOC);          //trả về mảng 2 chiều
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>



<!-- lấy số lượng review trong csdl -->
<?php
try {
  $stmt = $conn->prepare("SELECT COUNT(*) 
                        FROM review
                        WHERE idphone = ?;");
  $stmt->bindParam(1, $a);                       
  $stmt->execute();
  $countreview = $stmt->fetchColumn();    //trả về giá trị của cột đầu tiên trong kết quả truy vấn,thích hợp khi chỉ cần đếm số lượng
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>





