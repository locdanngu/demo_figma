<?php
session_start();
if (isset($_SESSION['username'])) {             //Kiểm tra xem session này có tồn tại ko
  $username = $_SESSION['username'];            //Nếu có thì gán biến username = với biến session đó
} else {
  $username ='';                                //Không thì username rỗng
}

$navcss ='';                                    //Khai báo biến navcss để chỉnh lại css thanh nav
if(!empty($username)){
    $navcss = 'padding-right: 2.5% !important;';//gắn biến navcss có chỉ số css mới
} else{   
    $navcss = 'padding-right: 7.5% !important;';// Chỉ số hiện tại của thanh nav
}


// Làm mất mũi tên khi đã đăng nhập
$arrow ='';
if(!empty($username)){
  $arrow = 'display: none;';
}else {
  $arrow = '';
}



//Làm tròn ô email khi đã đăng nhập
$input ='';
$btn = '';
if(!empty($username)){
  $input = 'border-radius: 37.5px 0px 0px 37.5px';
  $btn = 'border-radius: 0px 37.5px 37.5px 0px';
}else {
  $input = '';
  $btn = '';
}

?>