<?php
require __DIR__. '/__connect_db.php';

$nickname = '';
$email = '';

if(isset($_POST['email'])){
    $nickname = strip_tags(trim($_POST['nickname']));
    $email = strip_tags(trim($_POST['email']));
//    $mobile = strip_tags(trim($_POST['mobile']));
//    $birthday = strip_tags(trim($_POST['birthday']));
//    $address = strip_tags(trim($_POST['address']));

    // 後端檢查必填欄位

    $sql = "INSERT INTO `members`(
        `email`, `password`, 
        `nickname`, `create_at`) 
        VALUES (
        ?, ?, ?,
         NOW()
        )";

    $stmt = $mysqli->prepare($sql);

    $password = sha1($_POST['password']);
//    $hash = sha1($email. $nickname. rand());


    $stmt->bind_param('sss',
        $email,
        $password,
//        $mobile,
//
//        $address,
//        $birthday,
//        $hash,

        $nickname
    );

    $stmt->execute();


    $msg_code = $stmt->affected_rows;

}

echo $msg_code ;