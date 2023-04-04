<?php include('dbconnect.php'); ?>
<!-- lấy dữ liệu tất cả phone -->
<?php
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(!isset($_GET['hang'])){                      //nếu chưa lọc theo hãng sẽ lấy all
    $stmt = $conn->query('SELECT * FROM phone');
    // while ($row = $stmt->fetch()) {
    //   echo $row['id'] . ': ' . $row['name'] . '<br>';
    // }
    $stmt->execute();
  
    $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC);        
    //dùng để lấy ra tất cả các bản ghi trong kết quả trả về của câu truy vấn
    //, với kiểu dữ liệu trả về được chỉ định là PDO::FETCH_ASSOC để lấy các cặp giá trị (key-value)
    // tương ứng với tên cột và giá trị của bản ghi.
  } else{                                           //lọc điện thoại theo hãng
    $hang = $_GET['hang'];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE namefirm = ?");
    $stmt->bindParam(1, $hang);            //gán giá trị hang vào ?                      
    $stmt->execute();
  
    $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  }
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<!-- lấy những phone popular(bán nhiều nhất) -->
<?php
try {
  $stmt = $conn->query('SELECT * FROM phone ORDER BY sold DESC LIMIT 3;');
  $stmt->execute();
  $popularphone = $stmt->fetchAll(PDO::FETCH_ASSOC);        
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<!-- đếm số phone -->
<?php
try {
  $stmt = $conn->query('SELECT COUNT(*) FROM phone;');
  $stmt->execute();
  $countphone = $stmt->fetchColumn();       
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<!-- đếm 3 loại phone có số lượng đông đảo :V -->
<?php
try {
  $stmt = $conn->query('SELECT namefirm, COUNT(*) AS total
                        FROM phone JOIN firm on phone.idfirm=firm.idfirm
                        GROUP BY firm.idfirm
                        ORDER BY total DESC;');
                        // LIMIT 3;');
  $stmt->execute();
  $listphone =$stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>



