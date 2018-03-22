<?php
//查詢 加入 更新 移除 session CRUD

if(!isset($_SESSION)){
    session_start();
}

// GET參數 sid, qty

$sid = isset($_GET['sid'])? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty'])? intval($_GET['qty']) : 0;

if(empty($_SESSION['cart'])){
    $_SESSION['cart']=[];
}


if(empty($sid)){
//    查詢

}else{
    //移除
    if(empty($qty)){
        //移除
        unset($_SESSION['cart']['sid']);
    }else{
        $_SESSION['cart']['sid'] = $qty;
    }
}

echo json_encode($_SESSION['cart']);