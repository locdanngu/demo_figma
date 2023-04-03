<?php include('dbconnect.php'); ?>
<?php
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->query('SELECT * FROM phone');
  // while ($row = $stmt->fetch()) {
  //   echo $row['id'] . ': ' . $row['name'] . '<br>';
  // }
  $stmt->execute();

  $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC);        
  //dùng để lấy ra tất cả các bản ghi trong kết quả trả về của câu truy vấn
  //, với kiểu dữ liệu trả về được chỉ định là PDO::FETCH_ASSOC để lấy các cặp giá trị (key-value)
  // tương ứng với tên cột và giá trị của bản ghi.
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>