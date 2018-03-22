<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'edit_me';

if(! isset($_SESSION['user'])){
    header('location: ./login.php');
    exit;
}

//$time = date("Y-m-d H:i:s", time()-180*24*60*60);
// AND order_date > '$time'

$o_sql = "SELECT * FROM `orders` WHERE `member_sid`={$_SESSION['user']['id']} 
ORDER BY `order_date` DESC";

$o_result = $mysqli->query($o_sql);

$o_data = [];
$o_keys = [];
while($r = $o_result->fetch_assoc()){
    $o_data[$r['sid']] = $r;
    $o_keys[] = $r['sid'];
}

$d_sql = sprintf("SELECT d.*, `size`.*, p.name, p.number FROM `order_details` d 
LEFT JOIN `size` ON d.`product_sid` = `size`.`sid`
LEFT JOIN `products` p ON `size`.`product_sid` = p.`sid`
WHERE d.`order_sid` in (%s)", implode(',', $o_keys));

$d_result = $mysqli->query($d_sql);

$ar = $d_result->fetch_all(MYSQLI_ASSOC);

?>

<?php include __DIR__ .'/__head_of_order.php'; ?>
<style>
    .flextest{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 25px;
    }
    .input{
        width: 350px;
    }
    .label{
        width: 125px;
        /*text-align: center;*/
        line-height: 20px;
        font-family: jf03;
    }
    .editinfo{
        margin: 50px 30px;
        font-family: jf03;
    }
    .input small{
        color: red;
        font-family: jf03;
        font-size: 14px;
        line-height: 22px;
    }
    .orderDetail {
        max-height: 0;
        overflow: hidden;
    }
    .orderDetail.active{
        max-height: 3000px;
    }
    .orderDetail .odetail:nth-child(2){
        height:100px;
        background-color: #fff;
        align-items:center;
    }
</style>
<body>
<?php include __DIR__ .'/__html_nav.php'; ?>

<?php if(isset($bad_pass)){

    if($bad_pass){
        echo'<div class="alert alert-success" role="alert">密碼錯誤</div>';
    } else {
        if($msg_code==1){
            echo'<div class="alert alert-success" role="alert">資料修改完成</div>';
        } else {
            echo'<div class="alert alert-danger" role="alert">資料未變更</div>';
        }
    }

}
?>

<div class="wrap flex">
    <figure class="fix figure_logo">
        <a href="firstpage.php" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
    </figure>

    <figure class="fix bg">
        <img src="imgs/member/member_bg.png" alt="">
    </figure>
</div>
<!-- container -->
<div class="container">
    <!-- flow -->
    <div class="flow flex">
        <a href="edit.php"><div class="square flex"><i class="fas fa-edit"></i><p>資料修改<span class="phone_none"><br>Edit</span></p></div></a>
        <a href="order.php"><div class="square flex active"><i class="fas fa-list-ul"></i><p>訂單查詢<span class="phone_none"><br>Order</p></div></a>
        <a href="like.php"><div class="square flex"><i class="far fa-heart"></i><p>收藏商品<span class="phone_none"><br>Like</p></div></a>
        <a href="faq.php"><div class="square flex"><i class="fas fa-question"></i><p>常見問題<span class="phone_none"><br>FAQ</p></div></a>
    </div>
    <!-- like -------------------------->
    <div class="like">
        <!-- title -->
        <div class="title center">
            <div class="tit"><p>訂單查詢</p></div>
        </div>
        <div class="titt"><i style="color:#D9D1C2;" class="fas fa-square-full"></i> 一年內的訂單</div>
        <div style="margin-top:20px; margin-bottom:50px;" class="center bag_form flex">

            <!-- table -->
            <div class="table">

                <?php foreach($o_data as $o_sid => $order): ?>
                    <ul class="tit flex" style="background-color: #947C50">
                        <li class="tit_1 phone_none">訂單日期</li>
                        <li class="tit_2">訂單編號</li>
                        <li class="tit_3 phone_none">付款方式</li>
                        <li class="tit_4 phone_none">價格</li>
                        <li class="tit_5 phone_none">處理進度</li>
                    </ul>
                    <ul class="contain flex orders">
                        <li class="con_1"><?=$order['order_date']?></li>
                        <li class="con_2 ordersid" style="cursor: pointer; text-decoration: underline">1803210033<?=$order['sid']?></li>
                        <li class="con_3">信用卡</li>
                        <li class="con_4"><?=$order['amount']?></li>
                        <li class="con_5">訂單確認中</li>
                    </ul>
                <div class="orderDetail">
                    <ul class="flex tit odetail" style="background-color: #D9D1C2">
                        <li class="tit_1 odetail_1 phone_none">商品縮圖</li>
                        <li class="tit_2 odetail_1">商品</li>
                        <li class="tit_3 odetail_1 phone_none">尺寸</li>
                        <li class="tit_4 odetail_1 phone_none">價格</li>
                        <li class="tit_5 odetail_1 phone_none">數量</li>
                    </ul>
                <?php foreach($ar as $v):
                    if($v['order_sid']==$order['sid']):
                        ?>

                        <ul style="height:auto; border-bottom:1px solid #D9D1C2; align-items:center;line-height:25px;" class="flex tit odetail">
                            <li style=""  class="tit_1 odetail_1"><img src="imgs/mini/<?= $v['number'] ?>.jpg" alt=""></li>
                            <li style="color: #947C50" class="tit_2 odetail_1"><p style="font-size: 16px"><?= $v['name'] ?></p></li>
                            <li style="color: #947C50" class="tit_3 odetail_1"><p style="font-size: 16px"><?= $v['size'] ?></p></li>
                            <li style="color: #947C50" class="tit_4 odetail_1"><p style="font-size: 16px"><?= $v['price'] ?></p></li>
                            <li style="color: #947C50" class="tit_5 odetail_1"><p style="font-size: 16px"><?= $v['quantity'] ?></p></li>
                        </ul>

                    <?php
                    endif;
                endforeach; ?>
                </div>
                <?php endforeach; ?>
<!--                    <ul class="count">-->
<!--                        <li class="right">共1件訂單</li>-->
<!--                    </ul>-->




<!--                        <div class="order-list">-->
<!---->
<!--                            <div><img src="img-t/--><?//= $v['product_id'] ?><!--.png" alt=""></div>-->
<!--                            <div class="order-list-detail">-->
<!--                                <div class="detail1 detail">-->
<!--                                    商品名稱<br>--><?//=$v['product_name']?><!--<br>-->
<!--                                    商品售價NT$--><?//=$v['price']?>
<!--                                </div>-->
<!--                                <div class="detail2 detail">-->
<!---->
<!--                                    狀態&nbsp&nbsp&nbsp&nbsp訂單成立<br>-->
<!--                                    下單日期--><?//=$order['order_date']?><!--<br>-->
<!---->
<!--                                    <div class="action"></div>-->
<!--                                </div>-->
<!--                                <button class="gray_b btn btn4 detail2-btn toggle" id="toggle">詳細資料</button>-->
<!--                            </div>-->
<!--                        </div>-->

            </div>


<!--            <div class="table">-->
<!--                <ul class="tit flex">-->
<!--                    <li class="tit_1 phone_none">訂單日期</li>-->
<!--                    <li class="tit_2">訂單編號</li>-->
<!--                    <li class="tit_3 phone_none">付款方式</li>-->
<!--                    <li class="tit_4 phone_none">價格</li>-->
<!--                    <li class="tit_5 phone_none">處理進度</li>-->
<!--                </ul>-->
<!--                <ul class="contain flex">-->
<!--                    <li class="con_1">2018-03-21</li>-->
<!--                    <li class="con_2">1803210033475</li>-->
<!--                    <li class="con_3">信用卡</li>-->
<!--                    <li class="con_4">5,500</li>-->
<!--                    <li class="con_5">訂單確認中</li>-->
<!--                </ul>-->
<!--                <ul class="count">-->
<!--                    <li class="right">共1件訂單</li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="titt"><i style="color:#D9D1C2;" class="fas fa-square-full"></i> 已完成訂單<div class="tittt">僅保留 1 年內的訂單資料提供查詢</div></div>-->
<!--        <div style="margin-top:20px; margin-bottom:50px;" class="center bag_form flex">-->
<!---->
<!--            <!-- table -->
<!--            <div class="table">-->
<!--                <ul class="tit flex">-->
<!--                    <li class="tit_1 phone_none">訂單日期</li>-->
<!--                    <li class="tit_2">訂單編號</li>-->
<!--                    <li class="tit_3 phone_none">付款方式</li>-->
<!--                    <li class="tit_4 phone_none">價格</li>-->
<!--                    <li class="tit_5 phone_none">處理進度</li>-->
<!--                </ul>-->
<!--                <ul class="contain flex">-->
<!--                    <li class="con_1">2018-03-21</li>-->
<!--                    <li class="con_2">1803210033475</li>-->
<!--                    <li class="con_3">信用卡</li>-->
<!--                    <li class="con_4">5,500</li>-->
<!--                    <li class="con_5">訂單確認中</li>-->
<!--                </ul>-->
<!--                <ul class="contain flex">-->
<!--                    <li class="con_1">2018-03-21</li>-->
<!--                    <li class="con_2">1803210033475</li>-->
<!--                    <li class="con_3">信用卡</li>-->
<!--                    <li class="con_4">5,500</li>-->
<!--                    <li class="con_5">訂單確認中</li>-->
<!--                </ul>-->
<!--                <ul class="contain flex">-->
<!--                    <li class="con_1">2018-03-21</li>-->
<!--                    <li class="con_2">1803210033475</li>-->
<!--                    <li class="con_3">信用卡</li>-->
<!--                    <li class="con_4">5,500</li>-->
<!--                    <li class="con_5">訂單確認中</li>-->
<!--                </ul>-->
<!--                <ul class="count">-->
<!--                    <li class="right">共3件訂單</li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </div>

    <script>
        $('.ordersid').click(function () {
            var orders = $(this).parent();
            orders.next('.orderDetail').toggleClass('active');
            
            // orders.each(function () {
               
            // })
        });
    </script>
    <script>

        // $('.datepicker').datepicker({
        //     dateFormat: "yy-mm-dd"
        // });

        function checkForm(){
            $('.form-text.warning').hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

            var nickname = document.form1.nickname.value;
            var password = document.form1.password.value;
            var address = document.form1.address.value;
            var ispass = true ;
console.log(password);
console.log(nickname);
            if(password.length<6){
                ispass = false ;
                $('#passwordWarning').show();
                // alert('請填入6位以上密碼')
            }
            if(nickname.length<2){
                ispass = false ;
                $('#nicknameWarning').show();
                // alert('請填入正確姓名')
            }

            return ispass;
        }

    </script>
</body>
</html>