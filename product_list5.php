<?php
/*
require __DIR__ . '/__connect_db.php';
$page_name = 'product_list';

$per_page = 8 ;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 1;


$t_sql = "SELECT COUNT(1) FROM `products`";
$t_result= $mysqli->query($t_sql);
$t_rows = $t_result->fetch_row()[0];

$t_pages = ceil($t_rows/$per_page);

$c_sql = sprintf("SELECT p.*, a.`name` artist, a.`name_eng` artist_eng, s.`name` school 
      From `products` p LEFT OUTER JOIN `artists` a ON p.`artist_id` = a.`sid` 
      LEFT OUTER JOIN `schools` s ON p.`school_id` = s.`sid` 
      LIMIT %s, %s", ($page-1)*$per_page, $per_page);
$c_result = $mysqli->query($c_sql);

//$c_content = $c_result->fetch_all();

$m_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0 ORDER BY sid";
$m_result = $mysqli->query($m_sql);

$fs_sql = "SELECT * FROM `schools` ORDER BY sid";
$fs_result = $mysqli->query($fs_sql);

//$fa_sql = "SELECT a.*, s.`name`school From `artists` a LEFT OUTER JOIN `schools` s ON a.`school_sid` = s.`sid`";
//$fa_result = $mysqli->query($fa_sql);

*/

require __DIR__ . '/__connect_db.php';
$page_name = 'product_list';

$per_page = 8 ;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 1;
$school = isset($_GET['school']) ? intval($_GET['school']) : 0;
$color = isset($_GET['color']) ? intval($_GET['color']) : 0;

$where = "where 1";   //讓後面可以用and 去接
if(!empty($cate)){
    $where .=" AND (`category_id`=$cate OR `seccategory_id`=$cate )";
}
if(!empty($school)){
    $where .=" AND `school_id`=$school";
}
if(!empty($color)){
    $where .=" AND (`main_color`=$color OR `sec_color`=$color)";
}

// SELECT s.* , p.`sid` p_sid, p.`name` FROM `size` s LEFT JOIN `products` p ON s.`product_sid` = p.`sid` WHERE 1

$t_sql = "SELECT COUNT(1) FROM `products` $where";
$t_result= $mysqli->query($t_sql);
$t_rows = $t_result->fetch_row()[0];

$t_pages = ceil($t_rows/$per_page);

$c_sql = sprintf("SELECT p.*, a.`name` artist, a.`name_eng` artist_eng, s.`name` school 
      From `products` p LEFT OUTER JOIN `artists` a ON p.`artist_id` = a.`sid` 
      LEFT OUTER JOIN `schools` s ON p.`school_id` = s.`sid` $where ORDER BY `p_order`
      LIMIT %s, %s", ($page-1)*$per_page, $per_page);
$c_result = $mysqli->query($c_sql);

//$c_content = $c_result->fetch_all();

$m_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0 ORDER BY sid";
$m_result = $mysqli->query($m_sql);

$fs_sql = "SELECT * FROM `schools` ORDER BY sid";
$fs_result = $mysqli->query($fs_sql);

$fc_sql = "SELECT * FROM `colors` ORDER BY sid";
$fc_result = $mysqli->query($fc_sql);


$sql = "SELECT * FROM categories ORDER BY parent_sid";
$result = $mysqli->query($sql);
$menu = [];
while($row = $result->fetch_assoc()){
    // 若是第一層分類
    if($row['parent_sid']==0) {
        $menu[$row['sid']] = $row;
    } else {
        // $menu[$row['parent_sid']]['sub'][] = $row;
        $menu[$row['parent_sid']]['sub'][$row['sid']] = $row;
    }
}

?>

<?php include __DIR__ .'/__html_product_list4_head.php'; ?>
<body>
<?php  include __DIR__ .'/__html_nav.php'; ?>

        <header class="flex between">
            <a href="firstpage.php" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
            <ul class="store_nav flex">
                <?php foreach($menu as $item): ?>  <!-- menu-->
                    <li><a href="product_list5.php?cate=<?= $item['sid']?>" type="button" class="cateBtn <?= $cate == $item['sid'] ? 'active' : ''; ?>" data-cate="<?= $item['sid'] ?>"><?= $item['name'] ?></a>
                    </li>
                <?php endforeach; ?>
                <?php /*foreach($menu as $item): ?>  <!-- menu-->
                    <li><a type="button" class="cateBtn <?= $cate == $item['sid'] ? 'active' : ''; ?>" data-cate="<?= $item['sid'] ?>"><?= $item['name'] ?></a>
<!--                    <li><a type="button" class="--><?//= $cate == $item['sid'] ? 'active' : ''; ?><!--" href="?cate=--><?//= $item['sid'] ?><!--">--><?//= $item['name'] ?><!--</a>-->
                    </li>
                <?php endforeach;*/ ?>


            </ul>
        </header>
        <div class="banner" id="banner">
            <?php if($cate==1): ?>
            <figure><img src="./imgs/banner01.jpg"  alt=""></figure>
            <?php elseif ($cate==2): ?>
            <figure><img src="./imgs/banner02.jpg"  alt=""></figure>
            <?php elseif ($cate==3): ?>
            <figure><img src="./imgs/banner03.jpg"  alt=""></figure>
            <?php elseif ($cate==4): ?>
            <figure><img src="./imgs/banner04.jpg"  alt=""></figure>
            <?php elseif ($cate==5): ?>
            <figure><img src="./imgs/banner05.jpg"  alt=""></figure>
            <?php endif; ?>
            <div class="banner_left"></div>
            <div class="banner_right"></div>
        </div>  <!--  end banner       -->
        <div class="sixteen-nine"><div class="temp2"></div></div>
        <div class="container">

<!------------------------------------- filter  ----------------------------------------->
            <?php if($cate==1): ?>
                <div class="temp">
            <p class="breadcrumbs" id="breadcrumbs"><a href="">首頁</a> > <a href="">線上商店</a> > <a href="">複製畫</a></p>


<!------------------------------------- filter  ----------------------------------------->
            <div class="filter">
                <div class="school">
<!--                    <form method="post">-->
                    <ul class="flex ">
                        <li class="right">流派篩選</li>

                        <?php while($fs_row = $fs_result->fetch_assoc()): ?>
                            <input class="drawFliter" type="checkbox" id="school<?= $fs_row['sid']?>"
                                   name="schoolSel" value="<?= $fs_row['sid']?>">
<!--checked-->
                            <label for="school<?= $fs_row['sid']?>"><?= $fs_row['name']?></label>
                        <?php endwhile; ?>
                    </ul>
                </div>
                    <ul class="flex color_filter">
                        <li class="right">顏色篩選</li>
                        <?php while($fc_row = $fc_result->fetch_assoc()): ?>
                            <input class="drawFliter" type="checkbox" id="color<?= $fc_row['sid']?>"
                                   name="colorSel" value="<?= $fc_row['sid']?>">
                            <label class="box box<?= $fc_row['sid']?>" for="color<?= $fc_row['sid']?>"></label>
                        <?php endwhile; ?>
                    </ul>
<!--                    </form>-->
                </div>
            </div>
                <div class="temp_bottom"></div>
<!------------------------------------------------------- productlist  ------------------------------>

            <?php else: ?>
            <p class="breadcrumbs" id="breadcrumbs"><a href="">首頁</a> > <a href="">線上商店</a> > <a href="">
                    <?php switch ($cate){
                        case 2:
                            echo '雕塑品';
                        break;
                        case 3:
                            echo '文創商品';
                        break;
                        case 4:
                            echo '美術用品';
                            break;
                        case 5:
                            echo  '展覽專區';
                            break;
                    }; ?>

                </a></p>
                <div style="height:30px"></div>
            <?php endif; ?>

    <div class="productList" id="productList">


    </div>

    </div>
        <!------------------------------------------------------- detail  ------------------------------>
        <div class="detail" >

        </div>
<!--       ------------------------------------------------------ Place  ------------------------------->
<!--        <div class="place_check">-->
<!--            <a type="button" id="closeBtn2"></a>-->
<!--            <div class="iframe" style="overflow: hidden; width: 1200px; height: 600px">-->
<!--                <iframe class="placePage" src="./canvas_test3.php" width="400" height="500"></iframe>-->
<!--            </div>-->
<!--        </div>-->


<!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--    <script-->
<!--            src="https://code.jquery.com/jquery-3.2.1.min.js"-->
<!--            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="-->
<!--            crossorigin="anonymous"></script>-->

<!--        <script src="./js/place_check.js"></script>-->

    <script>
        var cate;
        var productList = $('#productList');
        // $.get('plist.php', function(data){
        //     productList.html(data);
        // }, 'text');


        $('.cateBtn').click(function(){
            cate = $(this).attr('data-cate');
            productList.html('');

            $.get('plist.php', { cate: cate }, function(data){
                productList.html(data);
            }, 'text');
            // location.href = '?cate=' + cate;
        });

        $('.cateBtn').eq(<?= $cate -1 ?>).click();

        function pageBtnClick(page) {
            if(!page){
                page = 1;
            }

            var schoolVal = $('input[name="schoolSel"]:checkbox:checked').map(function() {
                return $(this).val();
            }).get().join(',');

            var colorVal = $('input[name="colorSel"]:checkbox:checked').map(function() {
                return $(this).val();
            }).get().join(',');


            $.get('plist.php', { school:schoolVal, color:colorVal, cate: cate, page: page}, function(data){
                productList.html(data);
            }, 'text');

        }

        // $('.cate.btn').click(function(){
        //     var cate = $(this).attr('data-cate');
        //
        //     location.href = '?cate=' + cate;
        // });


    </script>

    <script>


        // var bannerHeight = $('#banner').find('img').clientHeight;
        // console.log(bannerHeight);
        var offset = $('#breadcrumbs').offset();
        var offsetTop= offset.top-100;
        var width = $( window ).width();
        console.log(width);
        $(function(){

            $(window).scroll(function () {

                var scrollVal = $(this).scrollTop();
                // var adscrtop=$(".div-w").offset().top;


                if(width>=420){



                if(scrollVal>offsetTop){

                    $(".temp").css({"position": "fixed",
                        "top": "70px",
                        "z-index": "3",
                        "background-color": "rgba(255,255,255,1)"
                    });
                    $(".container").css({"background-color": "rgba(255,255,255,.9)"});
                }else{
                    $(".container").css({"background-color": "rgba(255,255,255,.7)"});
                    $(".temp").css({"position": "static", "background-color": "rgba(255,255,255,0)"});

                }

            }
            });
        });



        //range slider

// 細節頁
        $(".card").click(function() {
            var sid = $(this).parent('.product').attr('data-sid');
            var cate = <?= $item['sid']?>;
            // console.log(sid);
            // var detail = $('.detail');
            // detail.html('');
            // detail.css('display', 'block');
            //
            // $.get('product_detail.php', { sid:sid }, function(data){
            //     detail.html(data);
            // }, 'text');
            location.href = 'pdetail.php?cate='+cate+'&sid='+sid;

        });

        $(".love_btn").click(function() {
            console.log('hi');

            var sid = $(this).closest('.product').attr('data-sid');
            var qty = 1;
            console.log(sid);

                $.get('add_to_love.php', {sid:sid, qty:qty}, function(data){
                    console.log(data);
                    // alert('已加入收藏');
                    countLove(data);
                }, 'json');
            //
            // });
        });

        <?php if($cate==1): ?>

        $('.drawFliter').click(function () {

            var schoolVal = $('input[name="schoolSel"]:checkbox:checked').map(function() {
                return $(this).val();
            }).get().join(',');

            console.log(schoolVal);

            var colorVal = $('input[name="colorSel"]:checkbox:checked').map(function() {
                return $(this).val();
            }).get().join(',');

           //var school = JSON.stringify(schoolVal);
           //var color = JSON.stringify(colorVal);

            // console.log(color);

            $.get('plist.php', { school:schoolVal, color:colorVal }, function(data){
                productList.html(data);
            }, 'text');


        });

        <?php endif; ?>

        // $('.colorSel').click(function () {
        //
        //     var colorVal = $('input[name="colorSel"]:checkbox:checked').map(function() {
        //         return $(this).val();
        //     }).get().join(',');
        //
        //     console.log(colorVal);
        //
        // });
    </script>
</body>
</html>