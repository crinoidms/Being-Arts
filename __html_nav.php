<body><div class="back_black"></div>

<div class="nav">
    <ul class="nav_top">
        <li class="ham">
            <button class="js-menu menu" type="button">
                <span class="bar"></span>
            </button>
        </li>
        <div class="ham phone_none"><p>主選單</p></div>
        <?php if(isset($_SESSION['user'])): ?>
            <li class="login member"><a href="./order.php" type="button"><img src="imgs/icon/center_30px.svg" alt="會員"  title=""></a><div class="member phone_none"><p>會員中心</p></div></li>
        <?php else: ?>
            <li class="login member"><a href="./login.php" type="button"><img src="imgs/icon/member_30px.svg" alt="會員"  title=""></a><div class="login phone_none"><p>登入</p></div></li>
        <?php endif ?>
<!--        <li class="login member"><a href="edit.html" type="button"><img src="imgs/icon/member_30px.svg" alt="會員"  title=""></a><div class="member"><p>會員中心</p></div><div class="login"><p>登入</p></div></li>-->


        <li class="shop"><a class="n_bag" href="./cart.php" type="button"><img src="imgs/icon/bag_30px.svg" alt="購物袋"  title="">
                <span class="badge item_count" id="item_count" style="display: none">0</span></a></li>
<!--                <span class="badge">20</span>-->
        <div class="shop phone_none"><p>購物袋</p></div>
        <li class="love"><a href="./like.php" type="button"><img src="imgs/icon/favorite_30px.svg" alt="收藏"  title="">
                <span class="badge love_count" id="love_count" style="display: none">0</span></a></li>
        <div class="love phone_none"><p>收藏</p></div>
        <li class="space"><a href="./space.php" type="button"><img src="imgs/icon/game_30px.svg" alt="互動"  title=""></a></li>
        <div class="space phone_none"><p>空間比對</p></div>
    </ul>

    <ul class="nav_bottom">
        <?php if(isset($_SESSION['user'])): ?>
            <li class="logout"><a href="logout.php"  type="button"><img src="imgs/icon/logout_30px.svg" alt="登出"  title=""></a></li>
            <div class="logout phone_none"><p>登出</p></div>
        <?php endif ?>
        <li class="share"><a href=""  type="button"><img src="imgs/icon/share_30px.svg" alt="分享"  title=""></a></li>
        <div class="share phone_none"><p>分享</p></div>
        <li class="locatt"><a type="button"><img src="imgs/icon/map_30px.svg" alt="交通資訊"  title=""></a></li>
        <div class="locat phone_none"><p>交通資訊</p></div>
    </ul>
</div>
<!-- location -->
<div class="location">
    <div class="frame"></div>
    <div class="white"></div>
    <div class="locat_tit flex">
        <img src="imgs/locat/bg.svg" alt="">
        <p>Being Arts 藝術吧</p>
    </div>

    <div class="locat_info flex">

        <div class="traffic flex">
            <iframe width='200px' height='250px' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市中山區北安路534號&z=16&output=embed&t='></iframe>
            <div class="traffic_text">
                <p>交通資訊</p>
                <p>捷運</p>
                <p>文湖線：大直站2號出口左轉北安路步行約5分鐘。</p>
                <p>淡水線：圓山站1號出口轉乘21、208、247、287、紅2至「捷運大直站」。</p>
                <p>板南線：忠孝復興站轉乘捷運文湖線（往南港展覽館）至大直站2號出口。</p>
                <p>公車</p>
                <p>至北安路「捷運大直站」公車路線：21、28、33、42、208、256、267、287、646、902、紅3、棕13、棕16。</p>
            </div>
        </div>
        <div class="contact">
            <div>
                <p>聯絡資訊</p>
                <p>地址：台北市中山區北安路534號</p>
                <p>電話：02-2355-8888</p>
                <p>電子郵件：being_arts@ba.com.tw</p>
            </div>
        </div>
    </div>
</div>
<!-- map -->
<nav class="map map1">
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/01.svg" alt=""></li>
        <li style="color:#852b21;font-size:18px;" class="map_tit"><a href="./product_list5.php">線上商店</a></li>
        <li class="map_pic"><div class="pic"><a href="./product_list5.php"><img class="scale" src="imgs/map/onlineshop.png" alt=""></a></li>
        <li><a class="locatCate" data-cate="1" href="./product_list5.php?cate=1">複製畫</a></li>
        <li><a class="locatCate" data-cate="2" href="./product_list5.php?cate=2">雕塑品</a></li>
        <li><a class="locatCate" data-cate="3" href="./product_list5.php?cate=3">文創商品</a></li>
        <li><a class="locatCate" data-cate="4" href="./product_list5.php?cate=4">美術用品</a></li>
        <li><a class="locatCate" data-cate="5" href="./product_list5.php?cate=5">展覽專區</a></li>


    </ul>
</nav>
<nav class="map map2" >
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/02.svg" alt=""></li>
        <li style="color:#852b21;font-size:18px;" class="map_tit"><a href="bar.php">藝術酒吧</a></li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/paintingbar.png" alt=""></li>
        <li><a href="bar.php#section2">空間簡介</a></li>
        <li><a href="bar.php#section3">餐點與飲品</a></li>
        <li><a href="bar.php#section4">畫具租借說明</a></li>
<!--        <li><a href="">繪畫課程</a></li>-->

    </ul>
</nav>
<nav class="map map3" >
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/03.svg" alt=""></li>
        <li style="color:#852b21;font-size:18px;" class="map_tit"><a href="edit.php">會員中心</a></li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/member.jpg" alt=""></li>
        <li><a href="edit.php">會員資料修改</a></li>
        <li><a href="order.php">訂單查詢</a></li>
        <li><a href="like.php">收藏商品</a></li>
        <li><a href="faq.php">常見問題</a></li>
    </ul>
    
</nav>
<nav class="map map4">
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/04.svg" alt=""></li>
        <li style="color:#852b21;font-size:18px;" class="map_tit"><a href="vote_test.php">展覽與活動</a></li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/exhibition.png" alt=""></li>
        <li><a href="vote_test.php">杯墊創作票選活動</a></li>
        <li><a href="exhibition.php">當期展覽</a></li>
        <li><a href="exhibition.php#exb3">展覽回顧</a></li>
    </ul>
</nav>
<nav class="map map5" >
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/05.svg" alt=""></li>
        <li style="color:#852b21;font-size:18px;" class="map_tit"><a href="about.php">了解BA</a></li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/aboutba.png" alt=""></div></li>
        <li><a href="about.php#section1">品牌故事</a></li>
        <li><a href="about.php#section3">交通資訊</a></li>
        <li><a href="">追蹤我們</a></li>
        <li><a href="">聯絡我們</a></li>
    </ul>
    <ul class=" map5_icon">
        <li><a href=""><img class="fb" src="imgs/icon/fb_20px.svg" alt=""></a></li>
        <li><a href=""><img class="line" src="imgs/icon/line_20px.svg" alt=""></a></li>
        <li><a href=""><img class="ig" src="imgs/icon/ig_20px.svg" alt=""></a></li>
    </ul>
</nav>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script>
    // /* cate */
    // $('.locatCate').click(function(){
    //    var cate = $(this).attr('data-cate');
    //     $.get('plist.php', {cate:cate}, function(data){
    //         location.href = './product_list5.php?='+cate+' ;
    //     }, 'text');
    //
    // });
    /* ham */
    var isActive = false;

    $('.js-menu').on('click', function() {
        if (isActive) {
            $(this).removeClass('active');
            $('body').removeClass('menu-open');
            $('.back_black').removeClass('body_black');
            $('#fp-nav ul, .fp-slidesNav ul').removeClass('none');
        } else {
            $(this).addClass('active');
            $('body').addClass('menu-open');
            $('.back_black').addClass('body_black');
            $('#fp-nav ul, .fp-slidesNav ul').addClass('none');
        }
        isActive = !isActive;
    });

    /* location */
    var isActive = false;

    $('.locatt').on('click', function() {
        if (isActive) {
            $('.location').removeClass('locat_open');
            $('.back_black').removeClass('body_black');
            $('.location .white').removeClass('white_open');
            $('.location .locat_info .contact').removeClass('text_open');
            $('.location .locat_info .traffic').removeClass('text_open');

        } else {
            $('.location').addClass('locat_open');
            $('.back_black').addClass('body_black');
            $('.location .white').addClass('white_open');
            $('.location .locat_info .contact').addClass('text_open');
            $('.location .locat_info .traffic').addClass('text_open');

        }
        isActive = !isActive;
    });

    //
    // /* phone  map_ul2 */
    // var Active = false;
    // $(".tit").on('click', function() {
    //     if (Active) {
    //         $(".map_ul2").removeClass('tit-open');
    //     } else {
    //         $('.map_ul2').addClass('tit-open');
    //     }
    //
    //     Active = !Active;
    // });

</script>
<script>

    var itemCount = $('#item_count');

    itemCount.hide();
    var countItems = function(obj){
        itemCount.hide();
        var sum = 0 ;

        for(var s in obj){
            sum += obj[s];

            if(sum>0){
                itemCount.text(sum);
                itemCount.fadeIn();
            }
        }

        return sum;
    };
    //發ajax
    $.get('add_to_cart.php', function(data){
        countItems(data);
    }, 'json');

    //
    var loveCount = $('#love_count');

    loveCount.hide();
        var countLove = function(obj){
            loveCount.hide();
            var sum = 0 ;

            for(var s in obj){
                sum += obj[s];

                if(sum>0){
                    loveCount.text(sum);
                    loveCount.fadeIn();
                }
            }
            // loveCount.text(sum);
            // loveCount.fadeIn();
            return sum;
        };

    //發ajax
    $.get('add_to_love.php', function(data){
        countLove(data);
    }, 'json');

</script>
