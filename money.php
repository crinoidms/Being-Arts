<?php
require __DIR__. '/__connect_db.php';
$page_name = 'deliver';

if(! isset($_SESSION['user'])){
    header('Location: product_list5.php');
    exit;
}

if(empty($_SESSION['cart'])){
    header('Location: product_list5.php');
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

?>


<?php include __DIR__ .'/__head_of_deliver.php'; ?>
<style>
    .warning{
        display: none;
    }
</style>
<body>
<?php  include __DIR__ .'/__html_nav.php'; ?>


    <!-- nav -->
<div class="wrap flex">
    <figure class="fix figure_logo">
        <a href="firstpage.php" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
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
        <div class="circle"><img src="imgs/buy/van_s.svg" alt=""><p>寄送資訊</p></div>
        <div class="l"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle active"><img src="imgs/buy/cash_s.svg" alt=""><p>付款資訊</p></div>
        <div class="l ll"><img src="imgs/buy/buy_l.png" alt=""></div>
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
                <div class="tit"><p>寄送資訊</p></div>
            </div>

            <div style="margin-top:20px; margin-bottom:50px;" class="bag_form flex">
                <div class="left"></div>
                    <!--  -->
                    <div class="table">
                        <ul class="flex">
                            <li class=""><i class="fas fa-square-full"></i></li>
                            <li class="car_tit ">宅配</li>
                        </ul>
                        <ul class="flex wrap">
                            <li class="car_1">收件人</li>
                            <li class="car_2"><?= $_SESSION['receiver']['name'] ?> </li>
                        </ul>
                        <ul class="flex wrap">
                            <li class="car_1">收件地址</li>
                            <li class="car_2"><?= $_SESSION['receiver']['address'] ?></li>
                        </ul>
                        <ul class="flex wrap">
                            <li class="car_1">手機</li>
                            <li class="car_2"><?= $_SESSION['receiver']['mobile'] ?></li>
                        </ul>
<!--                        <ul>-->
<!--                            <li class="right">物流費 0</li>-->
<!--                        </ul>-->
<!--                        <ul class="count">-->
<!--                            <li class="right">小計 NT. 16,500</li>-->
<!--                        </ul>-->
                    </div>
                </div>
            </div>
            <!-- money -------------------------->
            <div class="money">
                <!-- title -->
                <div class="title flex">
                    <div class="pic"><img src="imgs/buy/cash_s.svg" alt=""></div>
                    <div class="tit"><p>填寫付款資訊</p></div>
                </div>

                <div  class="bag_form flex">
                    <div class="left"></div>
                    <!--  -->
                    <div class="form_card">

                        <form action=""for="one" method="post" name="formC" onsubmit="">
                            <div class="form_group">
                                <label for="">信用卡卡號&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="tel" name="card" class="" value="" >
                                <small id="cardWarning" class="form-text warning">請輸入信用卡卡號</small>
                            </div>

                            <div class="form_group">
                                <label for="">信用卡背面後三碼&nbsp;&nbsp;</label>
                                <input type="tel" name="backthree" class="" value="" >
                                <small id="backthreeWarning" class="form-text warning">請輸入信用卡背面後三碼</small>
                            </div>
                            <div class="form_group">
                                <label for="">到期日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="tel" name="date" class="" value="" >
                                <small id="dateWarning" class="form-text warning">請輸入到期日</small>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- btn -->
                <div class="buy_btn flex between">
                    <a href="./deliver.php">
                        <div style="margin-right:10px;" class="butn b_brown b_back">
                            <p>上一步</p>
                            <div class="back_330deg n_white phone_none"></div>
                            <div class="back n_white phone_none"></div>
                        </div>
                    </a>

<!--                    <a href="./finish.php">-->
                    <a href="javascript:checkCard()">
                        <div class="butn b_brown b_order">
                            <p>下訂單</p>
                        </div>
                    </a>
                </div>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>

            $.get('bag_list.php', function(data){
                bag_list.html(data);
            }, 'text');


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



            var checkCard = function(){
                $('.warning').hide();

                var cardW = $('#cardWarning');
                var backthreeW = $('#backthreeWarning');
                var dateW = $('#dateWarning');

                var card = document.formC.card.value;
                var backthree = document.formC.backthree.value;
                var date = document.formC.date.value;

                var isPass = true;
                card = card.trim();
                card = card.split('-').join('');

                if( card.length<6 ){
                    cardW.show();
                    isPass = false;

                }
                if( backthree.length<3 ){
                    backthreeW.show();
                    isPass = false;

                }
                if( date.length<2 ){
                    dateW.show();
                    isPass = false;

                }


                if(isPass){
                    location.href = './finish.php';
                    // $.post('add_receiver.php', {receiver:receiver, mobile:mobile, address:address} ,function(data){
                    //
                    // }, 'json');
                }
            };
        </script>


</body>
</html>