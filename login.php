<?php
require __DIR__. '/__connect_db.php';
$page_name = 'login';

//$_SESSION['come_from'] = $_SERVER['HTTP_REFERER'];

$email ='';

if(isset($_POST['log_email'])) {
    $email = strip_tags(trim($_POST['log_email']));
// password不做trim

    //這裡可以放後端的檢查


    $log_sql = sprintf("SELECT * FROM `members` WHERE `email`='%s' AND `password`='%s'",
        $mysqli->escape_string($email),
        sha1($_POST['log_password'])
    );

    $log_result = $mysqli->query($log_sql);

    $logined = false ;

    if($log_result->num_rows == 1){
        $logined = true;
        $log_row = $log_result->fetch_assoc();
        $_SESSION['user'] = $log_row;
        if(!empty($_SESSION['come_from'])){
            header("Location: ". $_SESSION['come_from']);
        } else {
            header("Location: ./product_list5.php");
        }

        exit;
    }
} else {
    $_SESSION['come_from'] = $_SERVER['HTTP_REFERER'];
}


$nickname = '';
$email = '';
//$mobile = '';
//$birthday = '';
//$address = '';

if(isset($_POST['email'])){
    $nickname = strip_tags(trim($_POST['nickname']));
    $email = strip_tags(trim($_POST['email']));
//    $mobile = strip_tags(trim($_POST['mobile']));
//    $birthday = strip_tags(trim($_POST['birthday']));
//    $address = strip_tags(trim($_POST['address']));

    // 後端檢查必填欄位

    $sql = "INSERT INTO `members`(
        `email`, `password`,
        `nickname`, `create_at`)
        VALUES (
        ?, ?, ?,
         NOW()
        )";

    $stmt = $mysqli->prepare($sql);

    $password = sha1($_POST['password']);
//    $hash = sha1($email. $nickname. rand());


    $stmt->bind_param('sss',
        $email,
        $password,
//        $mobile,
//
//        $address,
//        $birthday,
//        $hash,

        $nickname
    );

    $stmt->execute();


    $msg_code = $stmt->affected_rows;

}



?>

<?php include __DIR__ .'/__head_of_log.php'; ?>

<body>
<?php  include __DIR__ .'/__html_nav.php'; ?>

<?php /*if(isset($_POST['email'])):
print_r($_POST);
?>
<?php endif; */ ?>
    <!-- nav -->

<div class="wrap">
    <a href="firstpage.php" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
    <!-- container -->
    <div class="container">

        <!-- backbox -->
        <div class="backbox">
            <div class="frame"></div>
            <div class="loginMsg">
                <img src="imgs/log/login_bg_2.png" alt="">

                <div class="textcontent">
                    <p class="title">您是Being Arts會員嗎？</p>
                    <p>立即登入會員，享受會員專屬功能！</p>
                    <button id="switch1">登入會員</button>
                </div>
            </div>
            <div class="signupMsg visibility">
                <img src="imgs/log/signup_bg.png" alt="">
                <div class="textcontent">
                    <p class="title">還沒有Being Arts會員嗎？</p>
                    <p>立即註冊會員，快速享有會員專屬功能！</p>
                    <button id="switch2">註冊會員</button>
                </div>
            </div>
        </div>

        <!-- frontbox -->
        <div class="frontbox">
            <div class="loginform  hide">
                <?php /*if(! isset($logined) or $logined===false): */?>
                <h2>登入會員</h2>
                <form method="post" action="" onsubmit="return checkForm2()" name="form2">
                    <div class="inputbox">
                    <div class="mat-div">
                        <label for="email" class="mat-label">電子郵件</label>
                        <input type="text" class="mat-input" name="log_email" id="log_email" >

                    </div>
                    <div class="mat-div">
                        <label for="password" class="mat-label">密碼</label>
                        <input type="password" class="mat-input" name="log_password" id="log_password">
                    </div>
                        <small id="log_emailW" class="form-text hide">請輸入電子郵件</small>
                        <small id="log_passwordW" class="form-text hide">請輸入密碼</small>
                </div>
                <p><br><br>忘記密碼</p>
                <button>登入</button>
            </div>
            </form>

            <form method="post" action="" onsubmit="return checkForm()" name="form1">
            <div class="signup">
                <h2>註冊會員</h2>
                <div class="inputbox" style="margin-top: -5px">
                    <div class="mat-div">
                        <label for="email" class="mat-label">電子郵件</label>
                        <input type="text" class="mat-input" name="email" id="email" value="">
                    </div>
                    <div class="mat-div">
                        <label for="password" class="mat-label">密碼</label>
                        <input type="password" class="mat-input" name="password" id="password">
                    </div>
                    <div class="mat-div">
                        <label for="password" class="mat-label">密碼確認</label>
                        <input type="password" class="mat-input" name="password2" id="password2">
                    </div>
                    <div class="mat-div">
                        <label for="nickname" class="mat-label">暱稱</label>
                        <input type="text" class="mat-input" name="nickname" id="nickname" value="">
                    </div>
                    <div class="">
                        <input type="checkbox" class="" name="" id="" value="" checked>
                        <label for="" class="" style="font-size: 12px">訂閱BA電子藝術月刊</label>

                    </div>
                    <p id="emailWarning" class="form-text hide">請輸入正確電子郵件</p>
                    <p id="passwordWarning" class="form-text hide">密碼需為6位數以上</p>
                    <p id="passwordWarning2" class="form-text hide">兩次密碼輸入不相同</p>
                    <p id="nicknameWarning" class="form-text hide">請輸入您的暱稱</p>


                </div>
                <button>註冊</button>
            </div>
            </form>
        </div>


    </div>

    <div class="bg"><img src="imgs/log/bg.png" alt=""></div>
    <div style="width: 500px; margin: 0 auto; text-align: center; position: fixed; top: 100px; left: 36%">
        <?php if(isset($msg_code)){
            switch($msg_code){
                case 1:
                    echo'<h6>會員註冊完成，請登入會員</h6>';
                    break;
                case -1:
                    echo'<h6 style="color: #852B21">email已註冊</h6>';
                    break;
                default:
                    echo'<h6 style="color: #852B21">會員註冊錯誤</h6>';
            }
        }
        ?>
        <?php if(isset($logined)){
            if($logined){
            }else{
                echo'<h6 style="color: #852B21">帳號或密碼錯誤</h6>';
            }
        }
        ?>
        <?php if(! isset($logined) or $logined===false): ?>
        <?php else: ?>
            <h6>會員登入完成，將自動跳轉</h6>
        <?php endif; ?>
    </div>
</div>

<?php /*
    <div class="wrap">
        <a href="" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
         <!-- container -->
        <div class="container">

            <!-- backbox -->
            <div class="backbox">
                <div class="frame"></div>
                <div class="loginMsg">
                    <img src="imgs/log/login_bg_2.png" alt="">
                    <div class="textcontent">
                        <p class="title">還沒有Being Arts會員嗎 ?</p>
                        <p>立即註冊ＢＡ會員，快速享有會員專屬功能！</p>
                        <button id="switch1">註冊會員</button>
                    </div>
                </div>
                <div class="signupMsg visibility">
                    <img src="imgs/log/signup_bg.png" alt="">
                    <div class="textcontent">
                        <p class="title">您是Being Arts會員嗎 ?</p>
                        <p>立即登入ＢＡ會員，享受會員專屬功能！</p>
                        <button id="switch2">登入會員</button>
                    </div>
                </div>    
            </div>
              
             <!-- frontbox -->
              <div class="frontbox">
                <div class="login">
                  <h2>登入會員</h2>
                    <form method="post" action="" onsubmit="return checkForm()" name="form2">
                  <div class="inputbox">
                        <div class="mat-div">
                            <label for="email" class="mat-label">電子郵件</label>
                            <input type="text" class="mat-input" id="email">
                            <small id="" class="form-text hide">請輸入電子郵件</small>
                        </div> 
                        <div class="mat-div">
                            <label for="password" class="mat-label">密碼</label>
                            <input type="text" class="mat-input" id="password">
                            <small id="" class="form-text hide">請輸入密碼</small>
                        </div>
                  </div>
                  <p><br><br>忘記密碼</p>
                        <button type="submit" class="btn btn-primary">登入</button>
                </div>
                  </form>

                  <form method="post" action="" onsubmit="return checkForm()" name="form1">
                  <div class="signup hide">
                  <h2>註冊會員</h2>

                      <div class="inputbox">
                      <div class="mat-div">
                        <label for="email" class="mat-label">電子郵件</label>
                        <input type="text" class="mat-input" name="email" id="email" value="">
                        <small id="emailWarning" class="form-text hide">請輸入正確電子郵件</small>
                     </div> 
                     <div class="mat-div">
                        <label for="password" class="mat-label">密碼</label>
                        <input type="password" class="mat-input" name="password" id="password">

                        <small id="passwordWarning" class="form-text hide">密碼需為6位數以上</small>
                     </div> 
                     <div class="mat-div">
                        <label for="password" class="mat-label">密碼確認</label>
                         <input type="text" class="mat-input" name="password2" id="password2">
<!--                        <input type="text" class="mat-input" name="password2" id="password2">-->
                        <small id="passwordWarning2" class="form-text hide">兩次密碼輸入不相同</small>
                    </div>  
                     <div class="mat-div">
                        <label for="nickname" class="mat-label">暱稱</label>
                        <input type="text" class="mat-input" name="nickname" id="nickname" value="">
                        <small id="nicknameWarning" class="form-text hide">請輸入2字元以上暱稱</small>
                     </div>   
                  </div>

                  <button type="submit">註冊</button>


                </div>
                  </form>
            </div>     
        </div>

        <div class="bg"><img src="imgs/log/bg.png" alt=""></div>     
    </div>
*/ ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--    <script-->
<!--    src="https://code.jquery.com/jquery-3.2.1.min.js"-->
<!--    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="-->
<!--    crossorigin="anonymous"></script>-->
    <script>
        //  版面-----------------------------------------------------------
        var $loginMsg = $('.loginMsg'),
            $login = $('.loginform'),
            $signupMsg = $('.signupMsg'),
            $signup = $('.signup'),
            $frontbox = $('.frontbox');

        $('#switch1').on('click', function() {
            $loginMsg.toggleClass("visibility");
            $frontbox.addClass("moving");
            $signupMsg.toggleClass("visibility");

            $signup.toggleClass('hide');
            $login.toggleClass('hide');
        });

        $('#switch2').on('click', function() {
            $loginMsg.toggleClass("visibility");
            $frontbox.removeClass("moving");
            $signupMsg.toggleClass("visibility");

            $signup.toggleClass('hide');
            $login.toggleClass('hide');
        });
        <?php if(! isset($logined) or $logined===false): ?>
        <?php endif; ?>
        setTimeout(function(){
            $('#switch1').click();
        },1000);


        // setTimeout(function(){
        //     $('#switch2').click()
        // },3000)

        //  input-----------------------------------------------------------

        $(".mat-input").focus(function(){
            $(this).parent().addClass("is-active is-completed");
        });

        $(".mat-input").focusout(function(){
            if($(this).val() === "")
                $(this).parent().removeClass("is-completed");
            $(this).parent().removeClass("is-active");
        })
    </script>

    <script>

        function checkForm(){
            $('.form-text').hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var email = document.form1.email.value;
            var nickname = document.form1.nickname.value;
            // var mobile = document.form1.mobile.value;
            var password = document.form1.password.value;
            var password2 = document.form1.password2.value;
            var ispass = true ;

            if(password.length<6){
                ispass = false ;
                $('#passwordWarning').show();
                // alert('請填入6位以上密碼')
            }
            if(password !== password2){
                ispass = false ;
                $('#passwordWarning2').show();
                // alert('請填入6位以上密碼')
            }
            if(nickname.length<1){
                ispass = false ;
                $('#nicknameWarning').show();
                // alert('請填入正確姓名')
            }
            email = email.trim();
            if(! pattern.test(email)){
                ispass = false ;
                $('#emailWarning').show();
                // alert('請填入正確EMAIL')
            }
            // mobile = mobile.trim();
            // mobile = mobile.split('-').join();
            // if(! /^09\d{8}$/ .test(mobile)){
            //     ispass = false ;
            //     $('#mobileWarning').show();
            //     // alert('請填入正確手機')
            // }
            return ispass;

            // if(ispass==1){
            //     $.post('add_user.php', { email:email, password:password, nickname:nickname }, function(data){
            //         console.log(data);
            //
            //         // if(data == 1){
            //         //     alert('會員註冊成功')
            //         // }
            //     }, 'text');
            //     ispass = false ;
            // }

        }

        // LOG IN
        function checkForm2(){


            var log_emailW =  $('#log_emailW');
            var log_passwordW =  $('#log_passwordW');

            log_emailW.hide();
            log_passwordW.hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var email = document.form2.log_email.value;
            var password = document.form2.log_password.value;
            var ispass = true ;

            if(password.length<6){
                ispass = false ;
                log_passwordW.show();
                // alert('請填入6位以上密碼')
            }

            email = email.trim();
            if(! pattern.test(email)){
                ispass = false ;
                log_emailW.show();
                // alert('請填入正確EMAIL')
            }

             return ispass;

            // if(ispass){
            //     $.POST('add_user.php', { sid:sid }, function(data){
            //         detail.html(data);
            //     }, 'text');
            // }

        }

<?php /* if(isset($logined) and $logined): ?>
       setTimeout(function () {
           location.href='./product_list5.php';
           <?php /*if(empty($_SESSION['come_from'])): ?>
           location.href='./product_list5.php';
           <?php else: ?>
           location.href = "<?= $_SESSION['come_from'] ?>";
           <?php endif; */?>
<?php /*   },1000);
        <?php endif */?>
    </script>
</body>
</html>