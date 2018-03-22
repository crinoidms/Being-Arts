<?php

if(!isset($_SESSION)){
    session_start();
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0 ;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0 ;
//$qty = 1 ;
//$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0 ;

if(empty($_SESSION['love'])){
    $_SESSION['love']=[];
}

if(!empty($sid)){

    if(empty($qty)){
        // 移除項目
        unset($_SESSION['love'][$sid]);
    } else {
        // 加入項目, 更新項目
        $_SESSION['love'][$sid] = $qty;
    }
}

echo json_encode($_SESSION['love']);


