<?php include('dbconnect.php'); ?>
<?php
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $idphone = isset($_GET['idphone']) ? $_GET['idphone'] : '';
  $a = intval($idphone);      //ép thành kiểu int
  $stmt = $conn->query("SELECT DISTINCT user.*,review.review
                        FROM user 
                        INNER JOIN review ON user.iduser = review.iduser 
                        INNER JOIN phone ON review.idphone = phone.idphone
                        WHERE phone.idphone = $a;");
  $stmt2 = $conn->query("SELECT COUNT(*) 
                        FROM review
                        WHERE idphone = $a;");
  $stmt->execute();
  $stmt2->execute();
  $countreview = $stmt2->fetchColumn();    //trả về giá trị của cột đầu tiên trong kết quả truy vấn,thích hợp khi chỉ cần đếm số lượng
  $allreview = $stmt->fetchAll(PDO::FETCH_ASSOC);          //trả về mảng 2 chiều

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>