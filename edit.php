<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'edit_me';

if(! isset($_SESSION['user'])){
    header('location: ./login.php');
    exit;
}

if(isset($_POST['password'])) {

    $c_sql = sprintf("SELECT * FROM `members` WHERE `id`='%s' AND `password`='%s'",
        intval($_SESSION['user']['id']),
        sha1($_POST['password'])
    );
    $c_result = $mysqli->query($c_sql);

    $bad_pass = true;

    if ($c_result->num_rows == 1) {
        $bad_pass = false;


        $nickname = strip_tags(trim($_POST['nickname']));
        $mobile = strip_tags(trim($_POST['mobile']));
//        $birthday = strip_tags(trim($_POST['birthday']));
        $address = strip_tags(trim($_POST['address']));
        $receiver = strip_tags(trim($_POST['receiver']));

        $sql = "UPDATE `members` SET `mobile`=?,`address`=?, `receiver`=?, `nickname`=? WHERE `id`=?";
        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param('ssssi',
            $mobile,
            $address,
//            $birthday,
            $receiver,
            $nickname,
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
<? /*= $msg_code */ ?>
<?php include __DIR__ .'/__head_of_edit.php'; ?>
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
        width: 155px;
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
        display: none;
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
        <a href="edit.php"><div class="square flex active"><i class="fas fa-edit"></i><p>資料修改<span class="phone_none"><br>Edit</span></p></div></a>
        <a href="order.php"><div class="square flex"><i class="fas fa-list-ul"></i><p>訂單查詢<span class="phone_none"><br>Order</p></div></a>
        <a href="like.php"><div class="square flex"><i class="far fa-heart"></i><p>收藏商品<span class="phone_none"><br>Like</p></div></a>
        <a href="faq.php"><div class="square flex"><i class="fas fa-question"></i><p>常見問題<span class="phone_none"><br>FAQ</p></div></a>
    </div>
    <!-- like -------------------------->
    <div class="like">
        <!-- title -->
        <div class="title flex center">
            <div class="tit"><p>會員資料修改</p></div>
        </div>

        <div style="margin-top:20px; margin-bottom:50px;" class="flex between">

            <!--  -->
            <div class="form_card form_card_pass">
                <label for='one' class="edit_tit center">修改密碼</label>
                <form   class="editinfo" method="post" action="" onsubmit="return checkForm2()"name="form2">
                    <div class="flextest">
                        <div class="label">帳號</div>
                        <div class="input"><?= $_SESSION['user']['email'] ?></div>
                    </div>
                    <div class="flextest">
                        <div class="label">原密碼</div>
                        <div class="input">
                            <input type="password" name="password" id="password_old" value="">
                            <br><small id="" class="form-text warning">請輸入原密碼</small>
                        </div>
                        
                    </div>
                    <div class="flextest">
                        <div class="label">新密碼</div>
                        <div class="input">
                            <input type="password" name="password" id="password_new1" value="">
                            <br><small id="" class="form-text warning">請填寫6-12位英數字</small>
                        </div>
                    </div>
                    <div class="flextest">
                        <div class="label">新密碼確認</div>
                        <div class="input">
                            <input type="password" name="password" id="password_new2" value="">
                            <br><small id="" class="form-text warning">兩次新密碼不相同</small>
                        </div>
                    </div>
                    <a href="">
                        <div class="butn b_brown">
                            <p>修改</p>
                        </div>
                    </a>
                </form>
            </div>
            <div class="formright">
                <div class="form_card">
                    <label for='one' class="edit_tit ">修改會員資料</label>
                    <form  class="editinfo" method="post" action="" onsubmit="return checkForm()" name="form1">
                        <div class="flextest">
                            <div class="label">帳號</div>
                            <div class="input"><?= $_SESSION['user']['email'] ?></div>
                        </div>
                        <div class="flextest">
                            <div class="label">*暱稱</div>
                            <div class="input">
                                <input type="text" name="nickname" id="nickname" value="<?= $_SESSION['user']['nickname'] ?>">
                                <br><small id="" class="form-text warning">暱稱為必填欄位</small>
                            </div>
                        </div>
                        <div class="flextest">
                            <div class="label">收件人</div>
                            <div class="input">
                                <input type="text" name="receiver" id="receiver" value="<?= $_SESSION['user']['receiver'] ?>">
                            </div>
                        </div>
                        <div class="flextest">
                            <div class="label">手機</div>
                            <div class="input">
                                <input type="tel" name="mobile" id="mobile" value="<?= $_SESSION['user']['mobile'] ?>">
                            </div>
                        </div>
                        <div class="flextest">
                            <div class="label">收件地址</div>
                            <div class="input">
                                <input type="text" name="address" id="address" value="<?= $_SESSION['user']['address'] ?>">
                            </div>
                        </div>
                        <div class="flextest">
                            <div class="label">*密碼</div>
                            <div class="input">
                                <input type="password" name="password" id="password" value="">
                                <br><small id="passwordWarning" class="form-text warning">請填寫正確密碼</small>
                            </div>
                        </div>
                        <button class="butn b_brown" style="color: #fff">修改</button>
<!--                        <a href="">-->
<!--                            <div class="butn b_brown">-->
<!--                                <p>修改</p>-->
<!--                            </div>-->
<!--                        </a>-->
                    </form>
                 </div>
            </div>
        </div>
    </div>
    <script>

        function checkForm(){
            $('.form-text.warning').hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

            var nickname = document.form1.nickname.value;
            var password = document.form1.password.value;
            var address = document.form1.address.value;
            var mobile = document.form1.mobile.value;
            var receiver = document.form1.receiver.value;
            var ispass = true ;
console.log(password);
console.log(nickname);
            if(password.length<6){
                ispass = false ;
                $('#passwordWarning').show();
                // alert('請填入6位以上密碼')
            }
            if(nickname.length<1){
                ispass = false ;
                $('#nicknameWarning').show();
                // alert('請填入正確姓名')
            }

            return ispass;
        }

    </script>
</body>
</html>