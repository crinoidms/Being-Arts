<div class="nav">
    <ul class="nav_top">
        <li class="ham">
            <button class="js-menu menu" type="button">
                <span class="bar"></span>
            </button>
        </li>
        <div class="ham"><p>網站地圖</p></div>
        <?php if(isset($_SESSION['user'])): ?>
            <li class="login member"><a href="./edit.php" type="button"><img src="imgs/icon/center_30px.svg" alt="會員"  title=""></a><div class="member"><p>會員中心</p></div></li>
        <?php else: ?>
            <li class="login member"><a href="./login.php" type="button"><img src="imgs/icon/member_30px.svg" alt="會員"  title=""></a><div class="login"><p>登入</p></div></li>
        <?php endif ?>
<!--        <li class="login member"><a href="edit.html" type="button"><img src="imgs/icon/member_30px.svg" alt="會員"  title=""></a><div class="member"><p>會員中心</p></div><div class="login"><p>登入</p></div></li>-->


        <li class="shop"><a class="n_bag" href="./cart.php" type="button"><img src="imgs/icon/bag_30px.svg" alt="購物袋"  title="">
                <span class="badge item_count" id="item_count" style="display: none">0</span></a></li>
<!--                <span class="badge">20</span>-->
        <div class="shop"><p>購物袋</p></div>
        <li class="love"><a href="./like.php" type="button"><img src="imgs/icon/favorite_30px.svg" alt="收藏"  title=""><span class="badge love_count" id="love_count" style="display: none">0</span></a></li>
        <div class="love"><p>收藏</p></div>
        <li class="space"><a href="./space.php" type="button"><img src="imgs/icon/game_30px.svg" alt="互動"  title=""></a></li>
        <div class="space"><p>空間比對</p></div>
    </ul>

    <ul class="nav_bottom">
        <?php if(isset($_SESSION['user'])): ?>
            <li class="share"><a href=""  type="button"><img src="imgs/icon/logout_30px.svg" alt="登出"  title=""></a></li>
        <?php endif ?>
        <li class="share"><a href=""  type="button"><img src="imgs/icon/share_30px.svg" alt="分享"  title=""></a></li>
        <div class="share"><p>分享</p></div>
        <li class="locat"><a href="" type="button"><img src="imgs/icon/map_30px.svg" alt="交通資訊"  title=""></a></li>
        <div class="locat"><p>交通資訊</p></div>
    </ul>
</div>
<nav class="map map1">
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/01.svg" alt=""></li>
        <li class="map_tit"><a href="./product_list5.php">線上商店</a></li>
        <li class="map_pic"><div class="pic"><a href="./product_list5.php"><img class="scale" src="imgs/map/onlineshop.png" alt=""></a></li>
        <li ><a href="./product_list5.php?cate=1">複製畫</a></li>
        <li><a href="./product_list5.php?cate=2">雕塑品</a></li>
        <li><a href="./product_list5.php?cate=3">文創商品</a></li>
        <li><a href="./product_list5.php?cate=1">展覽專區</a></li>
        <li><a href="./product_list5.php?cate=4">美術用品</a></li>

    </ul>
</nav>
<nav class="map map2" >
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/02.svg" alt=""></li>
        <li class="map_tit">藝術酒吧</li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/paintingbar.png" alt=""></li>
        <li><a href="">空間簡介</a></li>
        <li><a href="">餐點與飲品</a></li>
        <li><a href="">畫具租借說明</a></li>
        <li><a href="">繪畫課程</a></li>

    </ul>
</nav>
<nav class="map map3" >
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/03.svg" alt=""></li>

        <li class="map_tit">了解BA</li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/aboutba.png" alt=""></div></li>
        <li><a href="">品牌故事</a></li>
        <li><a href="">交通資訊</a></li>
        <li><a href="">追蹤我們</a></li>
        <li><a href="">聯絡我們</a></li>
    </ul>
</nav>
<nav class="map map4">
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/04.svg" alt=""></li>
        <li class="map_tit">當期展覽</li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/exhibition.png" alt=""></li>
        <li><a href="">當期展覽</a></li>
        <li><a href="">展覽回顧</a></li>
    </ul>
</nav>
<nav class="map map5" >
    <ul>
        <li class="map_num"><img class="num" src="imgs/map/05.svg" alt=""></li>
        <li class="map_tit">最新活動</li>
        <li class="map_pic"><div class="pic"><img class="scale" src="imgs/map/monthly.png" alt=""></li>
        <li><a href="vote_test.php">杯墊創作票選活動</a></li>
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
    /* ham */
    var isActive = false;

    $('.js-menu').on('click', function() {
        if (isActive) {
            $(this).removeClass('active');
            $('body').removeClass('menu-open');
        } else {
            $(this).addClass('active');
            $('body').addClass('menu-open');
        }

        isActive = !isActive;
    });

    /* phone  map_ul2 */
    var Active = false;
    $(".tit").on('click', function() {
        if (Active) {
            $(".map_ul2").removeClass('tit-open');
        } else {
            $('.map_ul2').addClass('tit-open');
        }

        Active = !Active;
    });

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
            // itemCount.text(sum);
            // itemCount.fadeIn();
        };

    //發ajax
    $.get('add_to_love.php', function(data){
        countLove(data);
    }, 'json');

</script>
