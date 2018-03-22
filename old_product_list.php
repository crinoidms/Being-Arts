<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'product_list';

$per_page = 8 ;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$school = isset($_GET['school']) ? intval($_GET['school']) : 0;
$color = isset($_GET['color']) ? intval($_GET['color']) : 0;

$where = "where 1";   //讓後面可以用and 去接
if(!empty($cate)){
    $where .=" AND `category_id`=$cate";
}
if(!empty($school)){
    $where .=" AND `school_id`=$school";
}
if(!empty($color)){
    $where .=" AND (`main_color`=$color OR `sec_color`=$color)";
}


$t_sql = "SELECT COUNT(1) FROM `products` $where";
$t_result= $mysqli->query($t_sql);
$t_rows = $t_result->fetch_row()[0];

$t_pages = ceil($t_rows/$per_page);

$c_sql = sprintf("SELECT p.*, a.`name` artist, a.`name_eng` artist_eng, s.`name` school 
      From `products` p LEFT OUTER JOIN `artists` a ON p.`artist_id` = a.`sid` 
      LEFT OUTER JOIN `schools` s ON p.`school_id` = s.`sid` $where
      LIMIT %s, %s", ($page-1)*$per_page, $per_page);
$c_result = $mysqli->query($c_sql);

//$c_content = $c_result->fetch_all();

$m_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0 ORDER BY sid";
$m_result = $mysqli->query($m_sql);

//$m_sql= "SELECT * FROM `menu` ORDER BY sid ";
//$m_result = $mysqli->query($m_sql);

$menu = [];
while($m_row = $m_result->fetch_assoc()){
    if($m_row['parent_sid']==0){
        $menu[$m_row['sid']]=$m_row;
    } else{
        $menu[$m_row['parent_sid']]['sub'][$m_row['sid']]= $m_row;
    }
}


//for($i=1; $i<=5; $i++){
//
//    echo $menu['$i']['name'];
//};






$fs_sql = "SELECT * FROM `schools` ORDER BY sid";
$fs_result = $mysqli->query($fs_sql);

$fc_sql = "SELECT * FROM `colors` ORDER BY sid";
$fc_result = $mysqli->query($fc_sql);
//$fa_sql = "SELECT a.*, s.`name`school From `artists` a LEFT OUTER JOIN `schools` s ON a.`school_sid` = s.`sid`";
//$fa_result = $mysqli->query($fa_sql);



?>

<?php include __DIR__ .'/__html_product_list_head.php'; ?>
<body>
    <div class="wrapper">
        <!-- nav -->
        <nav>
            <div class="wrap">
                <ul class="nav_top">
                    <li><a href="" type="button"><img src="imgs/icon/shop_30px.svg" alt="線上商店" title="線上商店"></a></li>
                    <li><a href="" type="button"><img src="imgs/icon/ham_30px.svg" alt="網站地圖"   itle="網站地圖"></a></li>
                    <li><a href="" type="button"><img src="imgs/icon/member_30px.svg" alt="會員"  title="會員"></a></li>
                    <li><a class="n_bag" href="" type="button"><img src="imgs/icon/bag_30px.svg" alt="購物袋"  title="購物袋">
                        <span class="badge">20</span></a></li>
                    <li><a href="" type="button"><img src="imgs/icon/favorite_30px.svg" alt="收藏"  title="收藏"></a></li>
                    <li><a href="" type="button"><img src="imgs/icon/game_30px.svg" alt="互動"  title="互動"></a></li>
                </ul>
                <ul class="nav_bottom">
                    <li><a href="" type="button"><img src="imgs/icon/share_30px.svg" alt="分享"  title="分享"></a></li>
                    <li><a href="" type="button"><img src="imgs/icon/map_30px.svg" alt="交通資訊"  title="交通資訊"></a></li>
                </ul>
            </div>
        </nav>
        <header class="flex between">
            <a href="" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
            <ul class="store_nav flex">
                <?php /*
                while($m_row = $m_result->fetch_assoc()): ?>
                    <li><a type="button" class="<?= $cate==$m_row['sid']? 'active' : ''?>" href="?cate=<?= $m_row['sid']?>"><?= $m_row['name']?></a>


                    </li>
                <?php endwhile;
                 */ ?>
                <?php while(count($menu)): ?>
                <li><a href="" ><?= $menu['name']?></a>
<!--                    <ul>-->
<!--                        --><?php //for($j=1; $j<=5; $j++): ?>
<!--                        <li><a href="">--><?//= $menu[$j]['name']?><!--</a></li>-->
<!--                        --><?php //endfor; ?>
<!--                    </ul>-->

                </li>
                <?php endwhile; ?>

<!--                <li><a href="" >複製畫</a></li>-->
<!--                <li><a href="">雕塑品</a></li>-->
<!--                <li><a href="">文創商品</a></li>-->
<!--                <li><a href="">美術用品</a></li>-->
<!--                <li><a href="">展覽專區</a></li>-->
            </ul>
        </header>
        <div class="banner">
            <figure><img src="./imgs/store_banner01.jpg" alt=""></figure>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
        </div>
        <div class="temp2"></div>
        <div class="temp">
<!------------------------------------- filter  ----------------------------------------->
            <p class="breadcrumbs"><a href="">首頁</a> > <a href="">線上商店</a> > <a href="">複製畫</a></p>


<!------------------------------------- filter  ----------------------------------------->
            <div class="filter">
                <div class="school">
                    <ul class="flex ">
                        <li class="right">流派篩選</li>
                        <?php while($fs_row = $fs_result->fetch_assoc()): ?>
                            <li><a type="button" href="?cate=1&school=<?= $fs_row['sid']?>"><?= $fs_row['name']?></a></li>
                        <?php endwhile; ?>
<!--                        <li><a id="school1">文藝復興</a></li>-->
<!--                        <li><a id="school2">新古典及寫實主義</a></li>-->
<!--                        <li><a id="school3">印象派</a></li>-->
<!--                        <li><a id="school4">表現主義及立體派</a></li>-->
<!--                        <li><a id="school5">超現實主義</a></li>-->
                    </ul>
                </div>
                <div class="painter">
                    <ul class="painterr flex noshow" id="painter1">
                        <li class="right">畫家篩選</li>
                        <li><a >達文西</a></li>
                        <li><a >米開朗基羅</a></li>
                        <li><a >拉斐爾</a></li>
                    </ul>
                    <ul class="painterr flex noshow" id="painter2">
                        <li class="right">畫家篩選</li>
                        <li><a href="">米勒</a></li>
                        <li><a href="">庫爾貝</a></li>
                        <li><a href="">大衛</a></li>
                    </ul>
                    <ul class="painterr flex noshow" id="painter3">
                        <li class="right">畫家篩選</li>
                        <li><a href="">梵谷</a></li>
                        <li><a href="">莫內</a></li>
                        <li><a href="">雷諾瓦</a></li>
                        <li><a href="">卡莎特</a></li>
                    </ul>
                    <ul class="painterr flex noshow" id="painter4">
                        <li class="right">畫家篩選</li>
                        <li><a href="">康丁斯基</a></li>
                        <li><a href="">孟克</a></li>
                        <li><a href="">畢卡索</a></li>
                    </ul>
                    <ul class="painterr flex noshow" id="painter5">
                        <li class="right">畫家篩選</li>
                        <li><a href="">米羅</a></li>
                        <li><a href="">達利</a></li>
                    </ul>
                </div>
                <ul class="flex">
                    <li class="right">顏色篩選</li>
                    <?php
                    $cate = isset($_GET['cate'])? $_GET['cate'] : '';
                    $school = isset($_GET['school'])? $_GET['school'] : '';
                    while($fc_row = $fc_result->fetch_assoc()): ?>
                        <li class="box box<?= $fc_row['sid']?>"><a type="button" href="?cate=<?= $cate ?>&school=<?= $school?>&color=<?= $fc_row['sid']?>"></a></li>
                    <?php endwhile; ?>
<!--                    <li class="red box"><a href=""></a></li>-->
<!--                    <li class="orange box"><a href=""></a></li>-->
<!--                    <li class="yellow box"><a href=""></a></li>-->
<!--                    <li class="green box"><a href=""></a></li>-->
<!--                    <li class="blue box"><a href=""></a></li>-->
<!--                    <li class="purple box"><a href=""></a></li>-->
<!--                    <li class="black box"><a href=""></a></li>-->
<!--                    <li class="white box"><a href=""></a></li>-->
                </ul>
                <ul class="price_fliter flex">
                    <li class="right">價格篩選</li>
                    <li><input type="range"></li>
                </ul>
            </div>
        </div>
<!------------------------------------------------------- productlist  ------------------------------>
        <div class="container">
            <div class="productlist flex">
                <?php while($row = $c_result->fetch_assoc()):
                ?>
                <ul class="product">
                    <li class="card">
                        <figure class="pro"><img src="imgs/pro_200px/<?= $row['number'] ?>.jpg" alt=""></figure>
<!--                        <figure class="pic"></figure>-->
<!--                    <li>-->
                        <div class="bag"><a  href="" type="button"><img src="imgs/icon/bag_30px.svg" alt="" title="">加入購物袋</a></div>
                        <div class="favorite"><a  href="" type="button"><img src="imgs/icon/favorite_30px.svg" alt="" title="">加入收藏</a></div>
                    </li>
                    <li class="flex name center" style="color:white;"><?= $row['name'] ?></li>
                    <li class="info">
                        <ul>
                            <li><?= $row['artist_eng'] ?></li>
                            <li>NT. <?= $row['price'] ?></li>
                        </ul>
                        <a type="button" class="bag_btn"><img src="./imgs/icon/bag_30px.svg" alt="購物袋"  title="購物袋"></a>
                    </li>
                </ul>
                <?php endwhile; ?>
            </div>


            <div class="pagination">
                <ul class="page flex">
                    <li><<</li>
                    <?php for($i=1 ; $i<=$t_pages ; $i++): ?>
                    <li class="<?= $i==$page ? 'active' : '' ?>"><a href="?page=<?= $i ?>"><?= $i ?></a></li>
                    <?php endfor; ?>
                    <li>>></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script>
        $('.cate.btn').click(function(){
            var cate = $(this).attr('data-cate');

            location.href = '?cate=' + cate;
        });
    </script>

    <script>
        $(function(){
            $(window).scroll(function () {
                var scrollVal = $(this).scrollTop();
                // var adscrtop=$(".div-w").offset().top;

                if(scrollVal>450){
                    $(".temp2").css({"height": "250px"});
                    $(".temp").css({"position": "fixed","top": "70px", "z-index": "3"});

                }else{
                    $(".temp2").css({"height": "130px"});
                    $(".temp").css({"position": "static"});

                }

            });
        });

        //blur
        $(".card").hover(function(){
            $(".pic").removeClass("blur");
            $(this).find(".pic").addClass("blur");
        },function(){
            $(".pic").removeClass("blur");
        });


        //filter school
        $("#school1").click(function(){
            $('.painterr').addClass("noshow");
            $("#painter1").removeClass("noshow");
        });
        $("#school2").click(function(){
            $('.painterr').addClass("noshow");
            $("#painter2").removeClass("noshow");
        });
        $("#school3").click(function(){
            $('.painterr').addClass("noshow");
            $("#painter3").removeClass("noshow");
        });
        $("#school4").click(function(){
            $('.painterr').addClass("noshow");
            $("#painter4").removeClass("noshow");
        });
        $("#school5").click(function(){
            $('.painterr').addClass("noshow");
            $("#painter5").removeClass("noshow");
        });

        //range slider


    </script>
</body>
</html>