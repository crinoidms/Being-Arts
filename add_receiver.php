<?php

//if(! isset($_SESSION['cart'])){
//    header('location: ./login.php');
//    exit;
//}
session_start();
$result = [
    'success' => 0,
];
if(isset($_POST['receiver'])){


    $receiver = strip_tags(trim($_POST['receiver']));
    $mobile = strip_tags(trim($_POST['mobile']));
    $address = strip_tags(trim($_POST['address']));



    $_SESSION['receiver']['name'] = $receiver;
    $_SESSION['receiver']['mobile'] = $mobile;
    $_SESSION['receiver']['address'] = $address;

    $result['success'] = 1;
    $result['info'] = $_SESSION['receiver'];
}


echo json_encode($result);


