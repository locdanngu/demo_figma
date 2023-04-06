<?php include('dbconnect.php'); ?>

<?php
try {
  if(isset($_GET['findphone']) && !isset($_GET['value']) && !isset($_GET['hang'])){           //khi nhập ô input mà chưa chọn hãng hoặc kéo tiền
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
  if(isset($_GET['findphone']) && !isset($_GET['value']) && isset($_GET['hang'])){           //khi nhập ô input mà đã chọn hãng chưa kéo tiền
    $hang = $_GET['hang'];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE name LIKE ? AND namefirm=?");
    $findphone = "%" . $_GET['findphone'] . "%";                      
    $stmt->bindParam(1, $findphone);            //gán giá trị findphone vào ?  
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
  if(isset($_GET['findphone']) && isset($_GET['value']) && !isset($_GET['hang'])){           //khi nhập ô input mà đã chọn hãng và đã kéo tiền
    // $hang = $_GET['hang'];
    $value = $_GET['value'];
    $stmt = $conn->prepare("SELECT * 
                          FROM phone
                          INNER JOIN firm ON phone.idfirm = firm.idfirm
                          WHERE name LIKE ?  AND price < ?");
    $findphone = "%" . $_GET['findphone'] . "%";                      
    $stmt->bindParam(1, $findphone);            //gán giá trị findphone vào ?  
    // $stmt->bindParam(2, $hang); 
    $stmt->bindParam(2, $value);                      
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





