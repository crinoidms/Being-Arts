<?php

if(!isset($_SESSION)){
    session_start();
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0 ;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0 ;

if(empty($_SESSION['cart'])){
    $_SESSION['cart']=[];
}

if(!empty($sid)){
    if(empty($qty)){
        unset($_SESSION['cart'][$sid]);
    }else{
        $_SESSION['cart'][$sid]= $qty ;
    }
}

echo json_encode($_SESSION['cart']);


