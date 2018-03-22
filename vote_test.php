<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'vote_event';

$user = isset($_SESSION['user']['id'])? $_SESSION['user']['id'] :0 ;

$c_sql = sprintf("SELECT * FROM `vote` ORDER BY `sid` ASC ");

$c_result = $mysqli->query($c_sql);



?>

<?php include __DIR__ .'/__head_of_vote.php'; ?>
    <title>Being Arts 杯墊創作票選活動</title>
    <script src="js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="animate.css">
    <style>
        *{
            margin:0;
            padding: 0;
            font-family: Arial,"微軟正黑體";
            font-size: 16px;
            /* letter-spacing: 2px; */
            box-sizing: border-box;
            list-style: none;
            color:#a5875d;
            line-height: 10px;
            transition: all .5s;
        }
        p{
            line-height: 20px;
        }
        a{
            text-decoration: none;
        }
        .wrap{
            display: flex;
        }
        .flex{
            display: flex;
            flex-wrap:wrap ;

        }
        .center{
            text-align: center;
            justify-content: center;
        }
        .between{
            justify-content: space-between;
        }
        .icon img{
            width:30px;
            height:30px;
        }

        /* banner------------------------------------------ */

        .w1580{
            max-width: 1580px;
            margin: 0 auto;

        }
        .banner{
            width: 100%;
            position: relative;
            /*background: url("./imgs/event_banner.jpg") no-repeat 0 bottom;*/
            /*background-size: cover;*/
        }
        .banner>img{
            width: 100%;
        }
        h1{
            font-size: 36px;
            color:#D9D1C2 ;
            position: absolute;
            bottom:100px ;
            left: 50%;
            margin-right: 100px;
        }
        h2{
            width: 286px;
            height: 110px;
            background: url("imgs/icon/vote_logo.svg") no-repeat 0 0;
            background-size: cover;
            position: absolute;
            bottom:110px ;
            right: 50%;
            transform: translateX(50px);
            /*margin-right: 200px;*/
        }
        .banner>ul{
            flex-direction: row;
            position: absolute;
            top: 50px;
            right:100px;
        }
        .banner>ul>li{
            margin-left: 20px;
        }
        .banner>ul>li>a{
            color: #852B21;
        }
        .banner>ul>li>a:hover{
            color: #947C50;
        }
        /* vote order------------------------------------------ */
        .fliter{
            /*background-color: #96c6e7;*/
            width: 100%;
            position: relative;
        }
        .v_order{
            flex-direction: row;
            position: absolute;
            right: 100px;
            top:30px;
        }
        .v_order label{
            cursor: pointer;
        }
        .v_order input{
            opacity: 0;
        }
        .order li{
            margin-left: 20px ;
        }

        /* vote content------------------------------------------ */

        .vote_wrap{
            width: 90%;
            margin-top: 120px;
            padding: 0 0 0 15px;
        }
        .card{
            width: 270px;
            height:380px;
            padding: 50px 30px 0;
            /*background-color: #96c6e7;*/
            /*margin-right: 70px;*/
        }
        .vote_btn{
            width: 45px;
            height: 45px;
        }
        .card>figure>img{
            width: 200px;
            object-fit: cover;
            box-shadow: 2px 2px  8px #947C50;
        }
        .info{
            position: relative;
        }
        .vote_btn{
            position: absolute;
            top: 15px;
            right: 10px;
        }
        .vote_btnimg{
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .info>ul{
            position: absolute;
            top: 5px;
            left: 5px;
        }
        .info>ul>li{
            margin-top: 15px;
            letter-spacing: 0;
        }
/*----------------------------------------------alert*/
        #alert{
            width: 400px;
            height: 300px;
            background-color: #FFF;
            box-shadow: 0 0 30px 5px #999;
            position: fixed;
            left: 40%;
            top: 35%;
            transform: translateY(-150px) translateX(-150px);
            display: none;
        }
        #closeBtn{
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }
        #alert h5{
            font-family: jf03;
            font-size: 20px;
            margin-top: 130px;
            margin-left: 50px;
        }
        #alert .logBtn{
            display: block;
            width: 150px;
            height: 40px;
            background-color: #927C50;
            color: #fff;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
            margin-top: 70px ;
            margin-left: 120px;
        }
    /*----------------------------------------------vote*/
        #voteFin{
            width: 400px;
            height: 300px;
            background-color: #FFF;
            box-shadow: 0 0 30px 5px #999;
            position: fixed;
            left: 40%;
            top: 40%;
            transform: translateY(-150px) translateX(-150px);
            display: none;
        }
        #voteFin h5{
            font-family: jf03;
            font-size: 20px;
            margin-top: 100px;
            /*margin-left: 50px;*/
            font-weight: normal;
            text-align: center;
            line-height: 30px;
        }
        #voteFin h6{
            font-family: jf03;
            font-size: 20px;
            color: #852B21;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
        }
        #voteFin .logBtn{
            display: block;
            width: 150px;
            height: 40px;
            background-color: #927C50;
            color: #fff;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
            margin-top: 50px ;
            margin-left: 120px;
        }
    /*----------------------------------------------bigPic*/
        #bigPic{
            width: 650px;
            height: 650px;
            background-color: #FFF;
            box-shadow: 0 0 30px 5px #999;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translateY(-325px) translateX(-325px);
            display: none;
        }
        #closePic{
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }
        #bigPic figure img{
            width: 650px;
            height: 650px;
            object-fit: cover;
        }
        /*--------------------活動說明--------------*/
        #explain{
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,.9);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 5;
            display: none;
        }
        #closeExp{
            position: absolute;
            right: 67px;
            top: 30px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        #closeExp:hover{
            transform: scale(1.5);
        }
        .exp_wrap{
            width: 1350px;
            /*height: 35px;*/
            margin: 80px auto;
            /*background-color: #852B21;*/
            justify-content:space-around;
        }
        .eventExp{
            width: 580px;
        }
        .prize{
            width: 580px;
            padding-top: 100px;
            /*background-color: #96c6e7;*/
        }
        .expHeader{
            width: 100%;
            height: 135px;
            /*background-color: #96c6e7;*/
            background: url("imgs/vote/expheader.png") no-repeat right 0 ;
        }
        .eventExp p.head{
            margin-top: 15px;
            line-height: 28px;
        }
        .eventExp h6{
            padding: 10px 0;
            background-color: #927C50;
            color: #fff;
            text-align: center;
            margin: 50px 0 0;
            width: 150px;
        }
        .eventExp p.text{
            color: #D9D1C2;
            margin-top: 25px;
            line-height: 28px;
        }
        .prize h6{
            padding: 10px 0;
            background-color: #927C50;
            color: #fff;
            text-align: center;
            margin: 50px 0 10px;
            width: 150px;
        }
        .p1left{
            width: 430px;
        }
        .p1left h5{
            color: #D9D1C2;
            margin-top: 10px;
        }
        .p1right{
            width: 150px;
        }
        .p1right img{
            width: 150px;
            object-fit: cover;
        }
        .p1right img:hover{
            /*transform: translateY(-5px);*/
            transform: scale(1.2);
        }
        .prize h5{
            color: #D9D1C2;
            /*margin-top: 10px;*/
        }
        .gift1{
            margin-top: 20px;
        }
        .gift1 h5{
            margin-left: 20px;
        }
        .gift1 img{
            width: 190px;
            object-fit: cover;
        }
        .gift1 img:hover{
            transform: scale(1.2);
        }
    </style>

<body>
<?php include __DIR__ .'/__html_nav.php'; ?>

<header class="w1580">
    <div class="banner">
        <img src="./imgs/event_banner.jpg" alt="">
        <ul class="flex">
            <li><a id="exp" style="cursor: pointer">活動說明 活動獎項</a></li>
<!--            <li><a href=""></a></li>-->
        </ul>
        <h1>杯墊創作票選活動</h1>
        <h2></h2>
    </div>
</header>
<div id="explain">
    <a id="closeExp"><img src="imgs/closeBtn-01.png" alt=""></a>
    <div class="exp_wrap flex">
        <div class="eventExp">
            <div class="expHeader"></div>
            <p class="head">當普普藝術宣告藝術應該與生活掛勾時，杯墊也決定來個華麗轉身，不甘僅是酒杯的配角。在這個藝術與生活旋轉跳躍之際，讓我們一同舉杯，慶祝杯墊新藝術時代的來臨，保證不用喝酒也能感受到藝術帶來的微醺，在這個既復古又嶄新的年代，邀請您來成為下一個安迪．沃荷。</p>
            <h6>活動說明</h6>
            <p class="text">慶祝Being Arts藝術酒吧開幕兩周年，周年慶期間，來店裡創作的朋友都能參與杯墊創作活動，投稿自己的作品。網路票選人氣最高的前三名作品，經作者授權後，其作品將印製成為藝術酒吧的杯墊，未來一年中，提供給每位來店的顧客。作者也將獲得本店所準備的獎項。</p>
            <p class="text">我們邀請您一起參與創作票選活動，您的稿作及所投下的每一票，都是對於藝術的一份鼓勵與支持。Being Arts 也為提供稿作的藝術家們，及每位參與投票的會員們，提供了精美的小禮物。</p>
        </div>
        <div class="prize">
            <h6>活動獎項</h6>
            <div class="p1 flex">
                <div class="p1left">
                    <h5><span style="font-size: 24px; color: #927C50 ">■</span> 人氣票選前三名者，可獲得複製畫任一幅。</h5>
                    <h5><span style="font-size: 24px; color: #927C50 ">■</span> 投稿者，皆可獲得藝術酒吧任一飲品兌換券一張。</h5>
                </div>
                <div class="p1right"><img src="imgs/vote/paingting.png" alt=""></div>
            </div>
            <h5><span style="font-size: 24px; color: #927C50 ">■</span> 投票會員抽獎：</h5>
            <div class="gift flex">
                <div class="gift1">
                    <img src="imgs/vote/gift01.png" alt="">
                    <h5>頭獎1名：</h5>
                    <h5>三層畫具組</h5>
                </div>
                <div class="gift1">
                    <img src="imgs/vote/gift02.png" alt="">
                    <h5>二獎3名：</h5>
                    <h5>印象派明信片組</h5>
                </div>
                <div class="gift1">
                    <img src="imgs/vote/gift03.png" alt="">
                    <h5>三獎5名：</h5>
                    <h5>博物館精選明信片</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w1580 fliter">

    <form class="v_order flex">
        排列：
        <input type="radio" class="order" name="order" id="date" value="1" checked="true" ><label for="date" style="color: #852B21">投稿日期新→舊</label>
        <input type="radio" class="order" name="order" id="votes" value="2"><label for="votes">得票數高→低</label>
    </form>

</div>
<div class="vote_wrap flex w1580" style="min-height: 900px">
    <?php /*
    <?php while($row = $c_result->fetch_assoc()):
    ?>
    <div class="card" data-sid="<?= $row['sid'] ?>">
        <figure class="coasters"><img src="imgs/coaster/c<?= $row['sid'] ?>_.jpg" alt=""></figure>
        <div class="info">
            <ul>
                <li class="title" data-title="<?= $row['title'] ?>">主題：<?= $row['title'] ?></li>
                <li class="vote_count" data-votes="<?= $row['vote_count'] ?>">得票數：<?= $row['vote_count'] ?></li>
            </ul>
            <figure class="vote_btn"><input type="checkbox" name="votes" style="display: none"><label for=""><img class="vote_btnimg" src="./imgs/icon/vote-01.svg" alt=""></figure>
        </div>
    </div>
    <?php endwhile; ?>

    <div id="bigPic" class="animated zoomIn">
        <a id="closePic"><img src="imgs/closeBtn-01.png" alt=""></a>
        <figure><img src="imgs/coaster/c1_.jpg" alt=""></figure>
    </div>
    <div id="alert" class="animated flipInX">
        <a id="closeBtn"><img src="imgs/closeBtn-01.png" alt=""></a>
        <h5>參加票選活動，請先登入會員</h5>
        <a type="button" class="logBtn" href="login.php">前往會員登入</a>
    </div>
    <div id="voteFin" class="animated flipInY">
        <h5>您已投票支持</h5>
        <h6>魔幻蜻蜓</h6>
        <a type="button" class="logBtn" id="closetVoteFin">確定</a>
    </div>
    */ ?>
</div>

<script>
    var wrap = $('.vote_wrap');
    $.get('votelist.php', function(data){
        wrap.html(data);
    }, 'text');

    $('.order').click(function () {
        // $(this).labels().css('color', 'red');
        $("input[name=order]").next("label").css({"color":"#947C50"});
        var checked = $("input[name=order]:checked");

        checked.next("label").css({"color": "#852B21"});
       var order = $(this).val();
       wrap.html('');
       // console.log(orderval);
        $.get('votelist.php',{order:order}, function(data){
            wrap.html(data);
        }, 'text');
    });



    // 活動說明
    $('#exp').click(function () {
        $('#explain').show();
    });

    // -----------大圖-----------
    $('.coasters').click(function(){
        var pic = $(this).parent('.card').attr('data-sid');
        var bigpic = $('#bigPic figure img');
        console.log(pic);
        bigpic.attr("src", "imgs/coaster/c"+pic+"_.jpg");
        $('#bigPic').show();
    });


    $('.vote_btn').click(function () {
        var thisBtn = $(this);

        var name = $(this).parent('.info').find('.title').attr('data-title');
        var voteFin = $('#voteFin');
        var votecount = $(this).parent('.info').find('.vote_count');
        var newVoteCount = parseInt(votecount.attr('data-votes')) + 1;
        console.log(newVoteCount);

        if(<?=$user?>==0){
            $('#alert').show();
        }else if(thisBtn.find(":checkbox").prop("checked")){
            console.log('hi');
            // thisBtn.find(":checkbox").prop("checked");
            voteFin.find('h5').text('每作品限投票一次喔');
            voteFin.find('h6').text('');
            voteFin.show();
        }else{
            thisBtn.find(":checkbox").prop("checked", true);
            thisBtn.find("img").attr("src", './imgs/icon/voted.svg');
            voteFin.find('h5').text('您已投票支持');
            voteFin.find('h6').text(name);
            votecount.text('得票數：'+newVoteCount);
            voteFin.show();
            // console.log(name);

        }
    });

    $('#closetBtn').click(function () {
        $('#alert').fadeOut();
    });

    $('#closetVoteFin').click(function () {
        $('#voteFin').fadeOut();
    });
    $('#closePic').click(function () {
        $('#bigPic').fadeOut();
    });
    $('#closeExp').click(function () {
        $('#explain').fadeOut();
    });



</script>
</body>
</html>


</body>
</html>
