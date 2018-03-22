<?php
require __DIR__. '/__connect_db.php';
$page_name = 'deliver';


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


$c_sql = sprintf("SELECT * FROM `products` where 1 ORDER By RAND() LIMIT 5 ");
$c_result = $mysqli->query($c_sql);

?>

<?php include __DIR__ .'/__head_of_cart.php'; ?>

<body>
<?php  include __DIR__ .'/__html_nav.php'; ?>

<!--<pre>-->
<!--        --><?php //print_r($_SESSION['cart']); ?>
<!--        --><?php //print_r($keys); ?>
<!--            --><?php //print_r($cart_data); ?>
<!--            --><?php //print_r($result->fetch_all(MYSQLI_ASSOC)); ?>
<!--</pre>-->
    <!-- nav -->

<!------------------------------------------------------- detail  ------------------------------>
<div class="detail" style="display: none;" >

</div>
<!-- wrap -->
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
        <div class="circle active phone_none"><img src="imgs/buy/bag_s.svg" alt=""><p style="left:10px;">購物袋確認</p></div>
        <div class="l ll"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle"><img src="imgs/buy/van_s.svg" alt=""><p>寄送資訊</p></div>
        <div class="l"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle"><img src="imgs/buy/cash_s.svg" alt=""><p>付款方式</p></div>
        <div class="l"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle"><img src="imgs/buy/check_s.svg" alt=""><p>送出訂單</p></div>
    </div>
    <!-- bag -->
    <div class="bag">
        <!-- title -->
        <div class="title flex">
            <div class="pic"><img src="imgs/buy/bag_l.svg" alt=""></div>
            <div class="tit"><p>購物袋確認</p></div>
        </div>

        <div style="margin-top:20px; margin-bottom:50px;" class="bag_form flex">
            <div class="left"></div>

            <!-- table -->
            <div class="table">
                <ul class="tit flex">
                    <li class="tit_1 phone_none">刪除</li>
                    <li class="tit_2">商品</li>
                    <li class="tit_3 right phone_none">小計</li>
                </ul>

<div id="bag_list">

</div> <!-- end bag_list -->
        </div>

        </div>

        <!-- hot -->
        <div class="hot">
            <p style="font-size:18px;color:#852B21;">熱門推薦</p><br><br>
            <div class="hot_pro flex">
                <?php while($row = $c_result->fetch_assoc()): ?>
                <div class="h_margin hot_prod flex" data-hotsid="<?= $row['sid'] ?>" data-psid="<?= $row['p_sid'] ?>">
                    <a ><figure>
                            <div class="h_pic"> <img src="imgs/pro_200px/<?= $row['number'] ?>.jpg" alt=""></div>
                            <div class="h_bag"><img class="bag-btn" src="imgs/icon/bag_30px.svg" alt="" title=""></div>
                        </figure></a>
                    <div style="margin-top:10px;"><a class="card" style="cursor: pointer"><?= $row['name'] ?></a></div>
                </div>
                <?php endwhile; ?>
<!--                <div class="h_margin">-->
<!--                    <a href=""><figure>-->
<!--                            <div class="h_pic"> <img src="imgs/pro_200px/p101.jpg" alt=""></div>-->
<!--                            <div class="h_bag"><img src="imgs/icon/bag_30px.svg" alt="" title=""></div>-->
<!--                        </figure></a>-->
<!--                    <div style="margin-top:10px;"><a  href="">蒙娜麗莎</a></div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <!-- btn -->
    <?php if(isset($_SESSION['user'])): ?>
    <div class="buy_btn flex between">
        <a href="">
            <div class="butn b_white">
                <img class="phone_none" src="imgs/icon/shop_30px.svg" alt="">
                <p >繼續選購</p>
            </div>
        </a>
        <a id="buy_btn0" href="./deliver.php" style="<?= empty($cart_data) ? 'display:none' : 'display:block;' ?>">
            <div class="butn b_brown">
                <div class="next_30deg n_white phone_none"></div>
                <div class="next n_white phone_none"></div>
                <p>結帳</p>
            </div>
        </a>
    </div>
    <?php else: ?>
        <div class="buy_btn flex between">
            <a href="">
                <div class="butn b_white">
                    <img class="phone_none" src="imgs/icon/shop_30px.svg" alt="">
                    <p >繼續選購</p>
                </div>
            </a>
            <a  id="buy_btn0" href="./login.php" style="<?= empty($cart_data) ? 'display:none' : 'display:block;' ?>">
                <div class="butn b_red" style="background-color: #852B21" >
                    <p style="letter-spacing: 2px">請先<span style="text-decoration: underline; color: #fff">登入會員</span></p>
                </div>
            </a>
        </div>

        <?php endif; ?>
</div>



    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        var bag_list = $('#bag_list');
        var buy_btn0 = $('#buy_btn0');
        $.get('bag_list.php', function(data){
            if(data.indexOf('購物車內現無商品')>=0){
                buy_btn0.hide();
            } else {
                buy_btn0.show();
            }

            bag_list.html(data);
        }, 'text');


        var dallorCommas = function(n){
            // return 'NT. ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            return  n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        };

        $('.sub_total').each(function(){
            var product = $(this).closest('.buying_product');
            var i_qty = product.find('.i_qty');
            var qty = parseInt(i_qty.val());

            var val = $(this).attr('data-val') * qty;
            $(this).text(dallorCommas(val));
        });

        var countTotal = function(){
            var t = 0;
            $('.sub_total').each(function(){
                var n = $(this).attr('data-subT');
                n = parseInt(n);
                t += n;
            });

            $('#total_price').text( dallorCommas(t) );
        };
        countTotal();
        // 刪除-------------------------------------------------------------------

        $('.i-cancel').click(function(){
            if (confirm("確定要刪除此項商品嗎？")) {
                var sid = $(this).closest('ul').attr('data-sid');
                var i_cancel = $(this);
                // console.log(sid);
                $.get('add_to_cart.php', {sid:sid}, function(data){
                    //location.href = location.href; // page reload
                    i_cancel.closest('ul').remove();
                    countItems(data);
                    countTotal();
                }, 'json');
            }
            return false;


        });

        // count 數量增減-------------------------------------------------------------------

        $(".fa-minus").click(function() {
            var product = $(this).closest('.buying_product');
            var sid = product.attr('data-sid');
            var i_qty = product.find('.i_qty');
            var qty = parseInt(i_qty.val());

            if( qty >1){
                qty = qty-1 ;
            }else{
                qty = 1 ;
            }
            i_qty.val(qty);

            $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){

                var $sub_total = product.find('.sub_total');
                var sub_total = qty * $sub_total.attr('data-val');
                $sub_total.attr('data-subT', sub_total);
                $sub_total.text( dallorCommas(sub_total) );


                countItems(data);
                countTotal();
            }, 'json');
        });

        $(".fa-plus").click(function() {
            var product = $(this).closest('.buying_product');
            var sid = product.attr('data-sid');
            var i_qty = product.find('.i_qty');
            var qty = parseInt(i_qty.val());

            if( qty < 10){
                qty = qty +1 ;
            }else{
                qty = 10 ;
            }

            i_qty.val(qty);
            $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
                var $sub_total = product.find('.sub_total');
                var sub_total = qty * $sub_total.attr('data-val');
                $sub_total.attr('data-subT', sub_total);
                $sub_total.text( dallorCommas(sub_total) );

                countItems(data);
                countTotal();
            }, 'json');
        });


        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {
            var product = $(this).closest('.buying_product');
            var sid = product.attr('data-sid');

            var minValue = parseInt($(this).attr('min'));
            var maxValue = parseInt($(this).attr('max'));
            var qty = parseInt($(this).val());

            var name = $(this).attr('name');
            if (qty >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                $(this).val($(this).data('oldValue'));
                qty = parseInt($(this).val());
            }

            if (qty <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('抱歉, 商品庫存僅剩10個');
                $(this).val($(this).data('oldValue'));
                qty = parseInt($(this).val());
            }

            $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
                var $sub_total = product.find('.sub_total');
                var sub_total = qty * $sub_total.attr('data-val');
                $sub_total.attr('data-subT', sub_total);
                $sub_total.text( dallorCommas(sub_total) );

                countItems(data);
                countTotal();
            }, 'json');

        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        // 加入購物車
        $('.bag-btn').click(function(){
            var sid = $(this).closest('.hot_prod').attr('data-psid');
            var qty = 1;

        console.log(sid);
        console.log(qty);
            $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
                // console.log(data);
                // alert('已加入購物車');
                countItems(data);


            }, 'json');



            bag_list.html('');
            // detail.css('display', 'block');

            $.get('bag_list.php', function(data){
                if(data.indexOf('購物車內現無商品')>=0){
                    buy_btn0.hide();
                } else {
                    buy_btn0.show();
                }
                bag_list.html(data);
            }, 'text');

        });



        // getlist();
        //
        // function getlist(){
        //     $.get('bag_list.php', function(data){
        //         bag_list.html(data);
        //     }, 'text');
        // }

        // 細節頁
        $(".hot .card").click(function() {
            var sid = $(this).closest('.hot_prod').attr('data-hotsid');
            // console.log(sid);
            var detail = $('.detail');
            detail.html('');
            detail.css('display', 'block');

            $.get('product_detail.php', { sid:sid }, function(data){
                detail.html(data);
            }, 'text');

        });

        $(".bagDetailBtn").click(function() {
            var sid = $(this).closest('.buying_product').attr('data-pasid');
            console.log(sid);
            var detail = $('.detail');
            detail.html('');
            detail.css('display', 'block');

            $.get('product_detail.php', { sid:sid }, function(data){
                detail.html(data);
            }, 'text');

        });

    </script>
</body>
</html>