<?php include('dbconnect.php'); ?>
<!-- lấy dữ liệu tất cả phone -->
<?php
try {
  if(!isset($_GET['hang']) && !isset($_GET['findphone'])){                      //nếu chưa lọc theo hãng sẽ lấy all
    $stmt = $conn->query('SELECT * FROM phone');
    // while ($row = $stmt->fetch()) {
    //   echo $row['id'] . ': ' . $row['name'] . '<br>';
    // }
    $stmt->execute();
    $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC);        
    //dùng để lấy ra tất cả các bản ghi trong kết quả trả về của câu truy vấn
    //, với kiểu dữ liệu trả về được chỉ định là PDO::FETCH_ASSOC để lấy các cặp giá trị (key-value)
    // tương ứng với tên cột và giá trị của bản ghi.
  }
  if(isset($_GET['hang']) && !isset($_GET['findphone'])){                //khi chọn hãng và ko nhập vào ô input
    $hang = $_GET['hang'];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE namefirm = ?");
    $stmt->bindParam(1, $hang);            //gán giá trị hang vào ?                      
    $stmt->execute();
    $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  } 
  if(!isset($_GET['hang']) && isset($_GET['findphone'])){                //khi nhập ô input mà chưa chọn hãng
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE name LIKE ?");
    $findphone = "%" . $_GET['findphone'] . "%";                      
    $stmt->bindParam(1, $findphone);            //gán giá trị findphone vào ?                      
    $stmt->execute();
    $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  }
  if(isset($_GET['value'])){                //khi kéo nút lọc tiền
    $value = $_GET["value"];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE price < ?");
    // $intprice = intval($price);
    $stmt->bindParam(1, $value);            //gán giá trị findphone vào ?                      
    $stmt->execute();
    $allphone = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    foreach ($allphone as $row) :
    ?>
    <a href="productsdetailspage.php?idphone=<?php echo urlencode($row['idphone']); ?>&img=<?php echo urlencode($row['img']); ?>&name=<?php echo urlencode($row['name']); ?>&price=<?php echo urlencode($row['price']); ?>&gt1=<?php echo urlencode($row['gt1']); ?>&gt2=<?php echo urlencode($row['gt2']); ?>"
        class="osp">
        <div class="headsp">
            <img src="<?php echo $row['img']; ?>" class="imgsp">
        </div>
        <div class="bodysp">
            <p class="namesp"><?php echo $row['name']; ?></p>
            <p class="giasp">$<?php echo $row['price']; ?></p>
        </div>
    </a>
    <?php
    endforeach;
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





