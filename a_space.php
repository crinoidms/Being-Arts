<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'space';

//if(!empty($_SESSION['love'])){
//
//    $keys = array_keys($_SESSION['love']);
//
//    $sql = sprintf("SELECT `size`.*, p.`name` product_name, p.`number` numb FROM `size`
//LEFT JOIN `products` p ON `size`.`product_sid` = p.`sid`
//WHERE `size`.`sid` IN (%s)",  implode(',', $keys));
////WHERE `sid` IN (%s)", implode(',', $keys));
//    $result = $mysqli->query($sql);
//
//    $cart_data = [];
//
//    while($row = $result->fetch_assoc()){
//        $row['qty'] = $_SESSION['cart'][$row['sid']];
//        $cart_data[$row['sid']]=$row;
//    }
//}


?>

<?php include __DIR__ .'/__head_of_space.php'; ?>
<style>
    .lovedraw{
        width: 320px;
        height: 560px;
        /*background-color: #ccc;*/
        flex-direction: column;
        margin-left: 20px;
    }
    .lovedraw h3{
        line-height: 30px;
        margin-left: 10px;
        height: 30px;
    }
    .paintings_outside{
        padding: 10px;
        height: 470px;
        overflow: auto;
    }
    .paintings{
        flex-wrap: wrap;
        flex-direction:row;
    }

    .paintings img{
        margin:10px 8px 0 0;
    }
    .paintings img.active{
        border: 1px solid #967E53 ;
        padding: 5px;
        width: 85px;
        height: 85px;
        object-fit: cover;
        box-sizing: border-box;
    }
    .bag_btn{
        background-color: #967E53 ;
        font-size: 16px;
        font-family: jf03;
    }
    .space_wrapper{
        max-width: 1533px;
        margin: 0 auto;
        padding: 5px;
    }
    .bag_btn{
        position: relative;
        width: 270px;
        height: 40px;
        margin-top: 20px;
        margin-left: 10px;
        font-size: 18px;
        color: #fff;
        background-color: #967E53;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
    }
    .bag_btn:hover{
       transform: translateY(-3px);
    }
</style>
<body>
<?php include __DIR__ .'/__html_nav.php'; ?>


<div class="wrap flex">
    <figure class="fix figure_logo">
        <a href="firstpage.php" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
    </figure>

    <figure class="fix bg">
        <img src="imgs/member/member_bg.png" alt="">
    </figure>
</div>
<!-- container -->
<div class="space_wrapper">
<div class="space_wrap flex">
    <div class="iframe" style="overflow: hidden; width: 1050px; height: 560px">
<!--        <iframe class="placePage" src="./canvas_test3.php?number=--><?//= $p['number'] ?><!--&test=5678" width="1000" height="600"></iframe>-->
        <iframe class="placePage" src="./canvas_test3.php" width="1050" height="560"></iframe>
    </div>
    <div class="lovedraw flex">
        <h3>您所收藏的畫作</h3>
        <div class="paintings_outside">
            <div class="paintings flex">
                <img src="imgs/mini/p506.jpg" alt="" class="active">
                <img src="imgs/mini/p419.jpg" alt="">
                <img src="imgs/mini/p326.jpg" alt="">
                <img src="imgs/mini/p334.jpg" alt="">
                <img src="imgs/mini/p328.jpg" alt="">
                <img src="imgs/mini/p217.jpg" alt="">
                <img src="imgs/mini/p501.jpg" alt="">
                <img src="imgs/mini/p314.jpg" alt="">
                <img src="imgs/mini/p311.jpg" alt="">
                <img src="imgs/mini/p307.jpg" alt="">
                <img src="imgs/mini/p506.jpg" alt="">
                <img src="imgs/mini/p419.jpg" alt="">
                <img src="imgs/mini/p326.jpg" alt="">
                <img src="imgs/mini/p334.jpg" alt="">
                <img src="imgs/mini/p328.jpg" alt="">
                <img src="imgs/mini/p217.jpg" alt="">
                <img src="imgs/mini/p501.jpg" alt="">
                <img src="imgs/mini/p314.jpg" alt="">
                <img src="imgs/mini/p311.jpg" alt="">
                <img src="imgs/mini/p307.jpg" alt="">
            </div>
        </div>
        <div class="bag_btn">加入購物車</div>
    </div>
</div>
</div>
</body>
</html>