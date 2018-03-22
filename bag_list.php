<?php
require __DIR__. '/__connect_db.php';
$page_name = 'deliver';


if(!empty($_SESSION['cart'])){

    $keys = array_keys($_SESSION['cart']);

    $sql = sprintf("SELECT `size`.*, p.`name` product_name, p.`number` numb, c.`name` cate_name 
FROM `size`
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
<?php if(empty($cart_data)): ?>
    <div class="contain flex" style="height: 150px">
        <p style="margin:auto;">購物車內現無商品，請至商店選購</p>
    </div>
            <?php else: ?>



<?php foreach($_SESSION['cart'] as $sid => $qty): ?>
    <ul class="contain flex buying_product"  data-sid="<?= $sid ?>"  data-pasid="<?= $cart_data[$sid]['product_sid'] ?>">
        <li class="con_1"><a type="button" class="i-cancel"><img src="./imgs/buy/delete_1px-01.svg" alt="" style="height: 35px; width: 35px; padding-left: 5px;"></a></li>
        <li class="con_2"><a class="bagDetailBtn" ><img src="imgs/pro_200px/<?= $cart_data[$sid]['numb'] ?>.jpg" alt=""></a></li>
        <li class="con_3">
            <ul>
                <li class="bagDetailBtn" ><?= '【'.$cart_data[$sid]['cate_name'].'】'.$cart_data[$sid]['product_name'].' ─ '.$cart_data[$sid]['size'] ?></li>
                <li>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <span class="glyphicon glyphicon-minus"><i class="fas fa-minus"></i></span>
                                            </button>
                                        </span>
                    <input type="text" name="quant[1]" class="form-control input-number i_qty" value="<?= $cart_data[$sid]['qty'] ?>" min="1" max="10" >
                    <span style="" class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                <span class="glyphicon glyphicon-plus"><i class="fas fa-plus"></i></span>
                                            </button>
                                        </span>
                </li>
                <li><?= $cart_data[$sid]['price'] ?></li>
            </ul>
        </li>
        <li class="con_4 right sub_total"  data-val="<?= $cart_data[$sid]['price']?>" data-subT="<?= $cart_data[$sid]['price'] * $cart_data[$sid]['qty'] ?>"><?= $cart_data[$sid]['price'] * $cart_data[$sid]['qty'] ?></li>
    </ul>
<?php endforeach; ?>

<ul class="count">
    <li class="right">小計 <span id="total_price"> 0</span></li>
</ul>
<?php endif; ?>

<script>
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
                var sum = countItems(data);
                countTotal();
                if(sum==0){
                    location.href = location.href;
                }
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

    // 細節頁
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