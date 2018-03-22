<?php
require __DIR__. '/__connect_db.php';
$page_name = 'deliver';

if(! isset($_SESSION['user'])){
    header('Location: product_list.php');
    exit;
}

if(empty($_SESSION['cart'])){
    header('Location: product_list.php');
    exit;
}

if(!empty($_SESSION['cart'])){

    $keys = array_keys($_SESSION['cart']);

    $sql = sprintf("SELECT `size`.*, p.`name` product_name, p.`number` numb, c.`name` cate_name FROM `size`
LEFT JOIN `products` p ON `size`.`product_sid` = p.`sid`
LEFT JOIN `categories` c ON p.`category_id` = c.`sid`
WHERE `size`.`sid` IN (%s)",  implode(',', $keys));
//WHERE `sid` IN (%s)", implode(',', $keys));
    $result = $mysqli->query($sql);

    $cart_data = [];

    while($row = $result->fetch_assoc()){
        $row['qty'] = $_SESSION['cart'][$row['sid']];
        $cart_data[$row['sid']]=$row;
    }
}



//$receiver = strip_tags(trim($_POST['receiver']));
//$mobile = strip_tags(trim($_POST['mobile']));
//$address = strip_tags(trim($_POST['address']));
//
//$sql = "UPDATE `members` SET `temp_mobile`=?,`temp_address`=?,`temp_birthday`=?
//                WHERE `id`=?";
//
//$stmt = $mysqli->prepare($sql);
//
//$stmt->bind_param('sssi',
//    $mobile,
//    $address,
//    $receiver,
//    $_SESSION['user']['id']
//);
//
//$stmt->execute();
//$msg_code = $stmt->affected_rows;
//if($msg_code==1){
//    // 更新 session
//    $_SESSION['user']['temp_mobile'] = $mobile;
//    $_SESSION['user']['temp_address'] = $address;
//    $_SESSION['user']['temp_receiver'] = $nickname;
//}

?>

<?php include __DIR__ .'/__head_of_deliver.php'; ?>
<style>
    .warning {
        display: none;
    }
</style>
<body>
<?php  include __DIR__ .'/__html_nav.php'; ?>


    <!-- nav -->
<div class="wrap flex">
    <figure class="fix figure_logo">
        <a href="" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
    </figure>

    <figure class="fix bg">
        <img src="imgs/buy/buy_bg.png" alt="">
    </figure>
</div>
<!-- container -->
<div class="container">
    <!-- flow -->
    <div class="flow flex">
        <div class="circle phone_none"><img src="imgs/buy/bag_s.svg" alt=""><p style="left:10px;">購物袋確認</p></div>
        <div class="l phone_none"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle active"><img src="imgs/buy/van_s.svg" alt=""><p>寄送資訊</p></div>
        <div class="l ll"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle"><img src="imgs/buy/cash_s.svg" alt=""><p>付款資訊</p></div>
        <div class="l"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle"><img src="imgs/buy/check_s.svg" alt=""><p>送出訂單</p></div>
    </div>
    <!-- bag -------------------------->
    <div class="bag">
        <!-- title -->
        <div class="title flex">
            <div class="pic"><img src="imgs/buy/bag_l.svg" alt=""></div>
            <div class="tit"><p>購物袋</p></div>
        </div>

        <div style="margin-top:20px; margin-bottom:50px;" class="bag_form flex">
            <div class="left"></div>
            <!-- table -->
            <div class="table">
                <ul class="tit flex">
                    <li class="tit_1"></li>
                    <li class="tit_2">商品名稱</li>
                    <li class="tit_3">尺寸</li>
                    <li class="tit_4">數量</li>
                    <li class="tit_5 right">小計</li>
                </ul>
                <?php foreach($_SESSION['cart'] as $sid => $qty): ?>
                <ul class="contain flex">
                    <li class="con_1"><img  src="imgs/pro_200px/<?= $cart_data[$sid]['numb'] ?>.jpg" alt=""></li>
                    <li class="con_2"><?= '【'.$cart_data[$sid]['cate_name'].'】'.$cart_data[$sid]['product_name'] ?></li>
                    <li class="con_3"><?= $cart_data[$sid]['size'] ?></li>
                    <li class="con_4"><?= $cart_data[$sid]['qty'] ?></li>
                    <li class="con_5 right subTotal" data-subTP="<?= $cart_data[$sid]['price'] * $cart_data[$sid]['qty'] ?>"><?= $cart_data[$sid]['price'] * $cart_data[$sid]['qty'] ?></li>
                </ul>
                <?php endforeach; ?>
<!--                <ul class="contain flex">-->
<!--                    <li class="con_1"><img  src="imgs/pro_200px/p101.jpg" alt=""></li>-->
<!--                    <li class="con_2">蒙娜麗莎</li>-->
<!--                    <li class="con_3">大</li>-->
<!--                    <li class="con_4">1</li>-->
<!--                    <li class="con_5 right">5,500</li>-->
<!--                </ul>-->
                <ul class="count">
                    <li class="right">小計 <span id="total_price"> 0</span></li>
                </ul>
            </div>
        </div>

        <!-- car -------------------------->
        <div class="car">
            <!-- title -->
            <div class="title flex">
                <div class="pic"><img src="imgs/buy/van_l.svg" alt=""></div>
                <div class="tit"><p>填寫寄送資訊</p></div>
            </div>

            <div style="margin-top:20px; margin-bottom:50px;" class="bag_form flex">
                <div class="left"></div>
                <!--  -->
                <div class="cart_form">
                    <p><i class="fas fa-square-full"></i> 由於商品尺寸規格較大，本店一律採用宅配寄送。<br>
                    <p><i class="fas fa-square-full"></i> 優惠喜好藝術的會員，本店購物即享免運優惠。<br>

<!--                    <div class="form_card">-->
<!--                        <input id='one' type='checkbox'/>-->
<!--                        <label for='one' class="car_tit">Being Arts實體店面取貨</label>-->
<!--                        <form action=""for="one" method="post" name="" onsubmit="">-->
<!--                            <div class="form_group">-->
<!--                                <label for="">收件人&nbsp;&nbsp;&nbsp;&nbsp;</label>-->
<!--                                <input type="text" name="" class="" value="" >-->
<!--                                <small id="" class="form-text">請輸入收件人姓名</small>-->
<!--                            </div>-->
<!--                            <div class="form_group">-->
<!--                                <label for="">手機&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>-->
<!--                                <input type="text" name="" class="" value="" >-->
<!--                                <small id="" class="form-text">請輸入正確手機號碼</small>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->

                    <div class="form_card">
<!--                         <p><i class="fas fa-square-full"></i> 本店購物即享免運優惠。<br>-->
<!--                        <input id='one' type='checkbox'/>-->
<!--                        <label for='one' class="car_tit">宅配</label>-->
<!--                        <input type="checkbox" class="" name="" id="give" value="">-->
<!--                        <label for="give" class="" style="font-size: 12px">訂閱BA電子藝術月刊</label>-->
                        <form action=""for="one" method="post" name="formR" onsubmit="">
                            <div class="form_group">
                                <label for="">收件人&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="receiver" class="receiver" value="<?= empty($_SESSION['receiver']['name']) ? '' : $_SESSION['receiver']['name'] ?>" >
                                <small id="receiverWarning" class="form-text small warning">請輸入收件人姓名</small>
                            </div>
                            <div class="form_group">
                                <label for="">收件地址&nbsp;</label>
                                <input type="text" name="address" class="address" value="<?= empty($_SESSION['receiver']['address']) ? '' : $_SESSION['receiver']['address'] ?>" >
                                <small id="addressWarning" class="form-text small warning">請輸入收件地址</small>
                            </div>
                            <div class="form_group">
                                <label for="">手機&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="tel" name="mobile" class="mobile" value="<?= empty($_SESSION['receiver']['mobile']) ? '' : $_SESSION['receiver']['mobile'] ?>" >
                                <small id="mobileWarning" class="form-text small warning" >請輸入正確手機號碼</small>
                            </div>
                        </form>
                    </div>

<!--                    <div class="form_card">-->
<!--                        <p class="car_tit"><i class="fas fa-square-full"></i> 發票資訊</p>-->
<!--                        <div class="form_group">-->
<!--                            <input id='one' type='checkbox'/>-->
<!--                            <label for='one'>隨貨寄出</label>-->
<!--                        </div>-->
<!--                        <div class="form_group">-->
<!--                            <input id='one' type='checkbox'/>-->
<!--                            <label for='one'>寄至電子郵件</label>-->
<!--                            <input type="text" name="" class="" value="" >-->
<!--                            <small id="" class="form-text letter">電子郵件格式錯誤</small>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
            <!-- btn -->
            <div class="buy_btn flex between">
                <a href="./cart.php">
                    <div class="butn b_brown b_back">
                        <p>上一步</p>
                        <div class="back_330deg n_white phone_none"></div>
                        <div class="back n_white phone_none"></div>
                    </div>
                </a>

<!--                <a href="./money.php">-->
                <a href="javascript:checkDeliver()">
                    <div class="butn b_brown">
                        <div class="next_30deg n_white phone_none"></div>
                        <div class="next n_white phone_none"></div>
                        <p>下一步</p>
                    </div>
                </a>
            </div>

        </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>

            var dallorCommas = function(n){
                // return 'NT. ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                return  n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            };


            var countTotal = function(){
                var t = 0;
                $('.subTotal').each(function(){
                    var n = $(this).attr('data-subTP');
                    n = parseInt(n);
                    t += n;
                });

                $('#total_price').text( dallorCommas(t) );
            };
            countTotal();
        </script>
    <script>

        // $('.warning').hide();

        var checkDeliver = function(){
            $('.warning').hide();

            var addressW = $('#addressWarning');
            var receiverW = $('#receiverWarning');
            var mobileW = $('#mobileWarning');

            var receiver = document.formR.receiver.value;
            var mobile = document.formR.mobile.value;
            var address = document.formR.address.value;

            var isPass = true;
            mobile = mobile.trim();
            mobile = mobile.split('-').join('');
            if( address.length<6 ){
                addressW.show();
                isPass = false;

            }
            if( receiver.length<2 ){
                receiverW.show();
                isPass = false;

            }
            if(! /^09\d{8}$/.test(mobile) ){
                mobileW.show();
                isPass = false;

            }

            if(isPass){
                $.post('add_receiver.php', {receiver:receiver, mobile:mobile, address:address} ,function(data){
                    location.href = './money.php';
                }, 'json');
            }
        };


    </script>
</body>
</html>