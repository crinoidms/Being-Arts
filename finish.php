<?php
require __DIR__. '/__connect_db.php';
$page_name = 'finish';


if(! isset($_SESSION['user'])){
    header('Location: product_list.php');
    exit;
}

if(empty($_SESSION['cart'])){
    header('Location: product_list.php');
    exit;
}


$user_id = $_SESSION['user']['id']; //會員編號
$receiver = $_SESSION['receiver']['name'];
$mobile = $_SESSION['receiver']['mobile'];
$address = $_SESSION['receiver']['address'];
$total_amount = 0; //總價

$keys = array_keys($_SESSION['cart']);
$sql = sprintf("SELECT * FROM `size` WHERE sid IN (%s)", implode(',', $keys));
$result = $mysqli->query($sql);
$cart_data = [];
while($row=$result->fetch_assoc()){
    $row['qty'] = $_SESSION['cart'][$row['sid']];
    $cart_data[$row['sid']] = $row;

    $total_amount += $row['qty'] * $row['price'];
}

$sql = "INSERT INTO `orders`(`member_sid`, `amount`, `receiver`, `mobile`, `address`, `order_date`) VALUES (?, ?, ?, ?, ?, NOW())";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('iisss',$user_id, $total_amount, $receiver, $mobile, $address );
$stmt->execute();

$order_sid = $stmt->insert_id; // order primary key
$stmt->close();


// INSERT INTO `order_details`(`sid`, `order_sid`, `product_sid`, `price`, `quantity`) VALUES (
$d_sql = "INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
$d_stmt = $mysqli->prepare($d_sql);

foreach($keys as $p_sid){

$d_stmt->bind_param("iiii",
    $order_sid,
    $p_sid,
    $cart_data[$p_sid]['price'],
    $cart_data[$p_sid]['qty']
);

$d_stmt->execute();

}

$d_stmt->close();

unset($_SESSION['cart']); //清除購物車的內容
unset($_SESSION['receiver']); //清除收件資訊

?>
<!--<pre>-->
<!---->
<!--  --><?//= $m_row ?>
<!--</pre>-->


<?php include __DIR__ .'/__head_of_finish.php'; ?>

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
        <div class="circle"><img src="imgs/buy/cash_s.svg" alt=""><p>付款資訊</p></div>
        <div class="l"><img src="imgs/buy/buy_l.png" alt=""></div>
        <div class="circle active"><img src="imgs/buy/check_s.svg" alt=""><p>送出訂單</p></div>
    </div>
    <!-- finish -->
    <div class="finish center">
        <figure><img src="imgs/buy/finish_pic.png" alt=""></figure>
        <p class="finish_p">訂單已送出<br><span>感謝您的購買 !</span></p>
    </div>
    <!-- btn -->
    <div class="buy_btn flex center">
        <a href="product_list5.php">
            <div class="butn b_white" style="margin-right:10px;">
                <img src="imgs/icon/shop_30px.svg" alt="">
                <p >繼續選購</p>
            </div>
        </a>
        <a href="order.php">
            <div class="butn b_white">
                <img src="imgs/buy/finish_btn_30px.svg" alt="">
                <p >查看訂單</p>
            </div>
        </a>
    </div>

    <script>

    </script>
</body>
</html>