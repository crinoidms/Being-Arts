<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'faq';
//
//if(! isset($_SESSION['user'])){
//    header('location: ./login.php');
//    exit;
//}

if(isset($_POST['password'])) {

    $c_sql = sprintf("SELECT * FROM `members` WHERE `id`='%s' AND `password`='%s'",
        intval($_SESSION['user']['id']),
        sha1($_POST['password'])
    );
    $c_resule = $mysqli->query($c_sql);

    $bad_pass = true;

    if ($c_resule->num_rows == 1) {
        $bad_pass = false;

        $nickname = strip_tags(trim($_POST['nickname']));
        $mobile = strip_tags(trim($_POST['mobile']));
//        $birthday = strip_tags(trim($_POST['birthday']));
        $address = strip_tags(trim($_POST['address']));
        $receiver = strip_tags(trim($_POST['receiver']));

        $sql = "UPDATE `members` SET `mobile`=?,`address`=?, `receiver`=? `nickname`=? WHERE `id`=?";
        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param('ssssi',
            $mobile,
            $address,
//            $birthday,
            $nickname,
            $receiver,
            $_SESSION['user']['id']
        );

        $stmt->execute();
        $msg_code = $stmt->affected_rows;

        if ($msg_code == 1) {
            $_SESSION['user']['mobile'] = $mobile;
            $_SESSION['user']['address'] = $address;
//            $_SESSION['user']['birthday'] = $birthday;
            $_SESSION['user']['nickname'] = $nickname;
            $_SESSION['user']['$receiver'] = $receiver;
        }
    }
}

?>

<?php include __DIR__ .'/__head_of_faq.php'; ?>
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
        <a href="order.php"><div class="square flex"><i class="fas fa-list-ul"></i><p>訂單查詢<span class="phone_none"><br>Order</p></div></a>
        <a href="like.php"><div class="square flex"><i class="far fa-heart"></i><p>收藏商品<span class="phone_none"><br>Like</p></div></a>
        <a href="faq.php"><div class="square flex active"><i class="fas fa-question"></i><p>常見問題<span class="phone_none"><br>FAQ</p></div></a>
    </div>
    <!-- like -------------------------->
    <div class="like">
        <!-- title -->
        <div class="title flex center">
            <div class="tit"><p>常見問題</p></div>
        </div>

        <div style="margin-top:20px; margin-bottom:50px;" class="flex between">

            <!--  -->
            <div class="faq_left">
                <ul class="flex">
                    <li><i class="fas fa-square-full"></i> 常見問題</li>
                    <li><i class="fas fa-square-full"></i> 購物流程</li>
                    <li><i class="fas fa-square-full"></i> 物流相關</li>
                    <li><i class="fas fa-square-full"></i> 退貨與退款</li>
                    <li><i class="fas fa-square-full"></i> 其他</li>
                </ul>
            </div>
            <div class="faq_contain">
                <ul id="accordion" class="accordion">
                    <li class="default open">
                        <div class="link">Q1. 該如何加入會員呢？<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li>您可先將欲購買的商品放進購物車開始結帳並選擇付款方式後，頁面右邊即會顯示「第一次購物」按此輸入基本資料即可完成購物，並填妥您的訂購人資訊，確定送出！訂單成立後，系統將會自動為您加入會員哦！</li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Q2. 忘記密碼怎麼辦？<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li>若您忘記密碼，請點選「會員登入」後，請您先點選「忘記密碼」 再輸入註冊的電子郵件，系統即會自動將密碼重設通知寄至您預設的Email信箱中，請您收取郵件並點擊內文中的連結進行密碼重設即可。</li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Q3. 忘記第一次購物時所填寫的E-mail信箱？<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li>煩請直接與客服中心聯繫。</li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Q4. 該如何修改個人資料及密碼？<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li>請點選「會員登入」，輸入您的E-mail及密碼登入會員帳戶，點選「個人資料及密碼修改」即可。
您可由此變更您登入的E-mail帳號、密碼或寄送地址資料，如您需更新聯絡電話，請於下單時填入正確聯絡電話即可。
更新E-mail帳號後，請留意您的新帳號信箱是否可正常收取lativ相關訂單通知喔 。</li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

        </div>
    </div>

    <script>
        //faq下拉式
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.link');
                // Evento
                links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
                };
            }

            var accordion = new Accordion($('#accordion'), false);
        });
    </script>

</body>
</html>