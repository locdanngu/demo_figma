<?php include('controller/dbconnect.php'); ?>

<?php
try {
  if(isset($_GET['findphone'])){                //khi nhập ô input mà chưa chọn hãng
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE name LIKE ?");
    $findphone = "%" . $_GET['findphone'] . "%";                      
    $stmt->bindParam(1, $findphone);            //gán giá trị findphone vào ?                      
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





