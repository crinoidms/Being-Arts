<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'edit_me';

//if(! isset($_SESSION['user'])){
//    header('location: ./login.php');
//    exit;
//}

if(!empty($_SESSION['love'])){

    $keys = array_keys($_SESSION['love']);

    $sql = sprintf("SELECT * FROM `products` WHERE `sid` IN (%s)",  implode(',', $keys));
//WHERE `sid` IN (%s)", implode(',', $keys));
    $result = $mysqli->query($sql);


//    $sql = sprintf("SELECT `size`.*, p.`name` product_name, p.`number` numb, p.`sid` psid FROM `size`
//LEFT JOIN `products` p ON `size`.`product_sid` = p.`sid`
//WHERE `size`.`sid` IN (%s)",  implode(',', $keys));
////WHERE `sid` IN (%s)", implode(',', $keys));
//    $result = $mysqli->query($sql);

    $love_data = [];

    while($row = $result->fetch_assoc()){
        $row['qty'] = $_SESSION['love'][$row['sid']];
        $love_data[$row['sid']]=$row;
    }

}


?>

<?php include __DIR__ .'/__head_of_like.php'; ?>

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
<div class="container">
    <!-- flow -->
    <div class="flow flex">
        <a href="edit.php"><div class="square flex"><i class="fas fa-edit"></i><p>資料修改<span class="phone_none"><br>Edit</span></p></div></a>
        <a href="order.php"><div class="square flex"><i class="fas fa-list-ul"></i><p>訂單查詢<span class="phone_none"><br>Order</p></div></a>
        <a href="like.php"><div class="square flex active"><i class="far fa-heart"></i><p>收藏商品<span class="phone_none"><br>Like</p></div></a>
        <a href="faq.php"><div class="square flex"><i class="fas fa-question"></i><p>常見問題<span class="phone_none"><br>FAQ</p></div></a>
    </div>
    <!-- like -------------------------->
    <div class="like">
        <!-- title -->
        <div class="title flex center">
            <div class="tit"><p>收藏商品</p></div>
        </div>

        <div style="margin-top:20px; margin-bottom:50px;" class="center bag_form flex">

            <!-- table -->
            <div class="table">
                <ul class="flex tit">
                    <li class="tit_1 phone_none">刪除</li>
                    <li class="tit_2 phone_none"></li>
                    <li class="tit_3">商品名稱</li>
<!--                    <li class="tit_4 phone_none">尺寸</li>-->
                    <li class="tit_5 phone_none">價格</li>
                    <li class="tit_6 phone_none">加入購物袋</li>
                </ul>
                <?php if(! empty($_SESSION['love'])): ?>
                    <?php foreach($_SESSION['love'] as $sid => $qty): ?>

                <ul class="flex contain data" data-sid="<?= $sid ?>" data-psid="<?= $love_data[$sid]['p_sid'] ?>">

                    <li class="con_1"><a type="button" class="i-cancel" ><img src="./imgs/buy/delete_1px-01.svg" alt="" style="height: 35px; width: 35px; padding-left: 5px;"></a></i></li>
                    <li class="con_2"><a class="bagDetailBtn"  href="pdetail.php?sid=<?= $sid ?>"><img src="imgs/mini/<?= $love_data[$sid]['number'] ?>.jpg" alt=""></a></li>
                    <li class="con_3  pro_name"><a href="pdetail.php?sid=<?= $sid ?>"><p><?= $love_data[$sid]['name'] ?></p></a></li>
<!--                    <li class="con_4">--><?//= $love_data[$sid]['size'] ?><!--</li>-->
                    <li class="con_5"><?= $love_data[$sid]['price'] ?></li>
                    <li class="icon con_6 "><a class="bag_btn" ><img src="imgs/icon/bag_30px.svg" alt="" title=""></a></li>
                </ul>
                <?php endforeach; ?>
                <?php else: ?>
<!--                <div style="height: 250px; margin:0 auto;"></div>-->
                    <div class="contain flex" style="height: 150px">
                        <p style="margin: 0 auto;">目前沒有收藏商品</p>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>

    <script>
        // 刪除-------------------------------------------------------------------

        $('.i-cancel').click(function(){
            if (confirm("確定要刪除此項商品嗎？")) {
                var sid = $(this).closest('ul').attr('data-sid');
                var i_cancel = $(this);
                // console.log(sid);
                $.get('add_to_love.php', {sid:sid}, function(data){
                    location.href = location.href; // page reload
                    i_cancel.closest('ul').remove();
                    var sum = countItems(data);
                    countLove();
                    if(sum==0){
                        location.href = location.href;
                    }
                }, 'json');
            }
            return false;
        });

        $('.bag_btn').click(function () {
            var sid = $(this).closest('ul').attr('data-psid');
            var qty = 1;

            $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
                // console.log(data);
                // alert('已加入購物車');
                countItems(data);

            }, 'json');
        });

    </script>
</body>
</html>