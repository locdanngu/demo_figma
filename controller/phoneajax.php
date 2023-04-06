<?php include('dbconnect.php'); ?>

<?php
try { 
  if(isset($_GET['value']) && isset($_GET['hang']) && !isset($_GET['findphone'])){//xử lí ajax khi kéo tiền mà đã chọn hàng nhưng chưa nhập
    $hang = $_GET['hang'];
    $value = $_GET["value"];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE price < ? AND firm.namefirm = ? ");
    $stmt->bindParam(1, $value);            //gán giá trị findphone vào ?      
    $stmt->bindParam(2, $hang);                
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
  if(isset($_GET['value']) && !isset($_GET['hang']) && !isset($_GET['findphone'])){ //xử lí ajax khi kéo tiền mà chưa chọn hàng hay nhập
    // $hang = $_GET['hang'];
    $value = $_GET["value"];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE price < ? ");
    // $intprice = intval($price);
    $stmt->bindParam(1, $value);            //gán giá trị findphone vào ?      
    // $stmt->bindParam(2, $hang);                
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
  if(isset($_GET['value']) && !isset($_GET['hang']) && isset($_GET['findphone'])){ //xử lí ajax khi kéo tiền mà chưa chọn hàng mà đã nhập
    // $hang = $_GET['hang'];
    $value = $_GET["value"];
    $findphone = $_GET['findphone'];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE price < ? AND name LIKE ?");
    // $intprice = intval($price);
    $stmt->bindParam(1, $value);            //gán giá trị findphone vào ?      
    $stmt->bindParam(2, $findphone);                
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