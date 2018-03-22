<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'Pdetail';

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 1 ;
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 5 ;

$data = [];

$sql = "SELECT p.*, a.`name` artist, a.`name_eng` artist_eng, s.`name` school From `products` p 
LEFT OUTER JOIN `artists` a ON p.`artist_id` = a.`sid` 
LEFT OUTER JOIN `schools` s ON p.`school_id` = s.`sid` 
WHERE p.`sid` = $sid";


$result = $mysqli->query($sql);

$row = $result->fetch_assoc();

$p = $row; // product info

// -----
$sql = "SELECT
`size`.*
FROM `size`
LEFT JOIN `products` p ON `size`.`product_sid` = p.`sid`
WHERE `size`.`product_sid`=$sid";

$result = $mysqli->query($sql);

$row = $result->fetch_all(MYSQLI_ASSOC);

$size = $row;

//echo $data;
//echo json_encode($data, JSON_UNESCAPED_UNICODE);


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

<?php include __DIR__ .'/__head_of_pdetail.php'; ?>

<body>
<?php include __DIR__ .'/__html_nav.php'; ?>



<header class="flex between">
    <a href="firstpage.php" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
    <ul class="store_nav flex">
        <?php foreach($menu as $item): ?>  <!-- menu-->
            <li><a href="product_list5.php?cate=<?= $item['sid']?>" type="button" class="cateBtn <?= $cate == $item['sid'] ? 'active' : ''; ?>" data-cate="<?= $item['sid'] ?>"><?= $item['name'] ?></a>
            </li>
        <?php endforeach; ?>

    </ul>
<!--    <figure class="fix bg">-->
<!--        <img src="imgs/member/member_bg.png" alt="">-->
<!--    </figure>-->
</header>

<div class="detailCont">
    <div class="info_and_pic flex">
        <div class="detail_intro" data-numb="<?= $p['number'] ?>"  data-sid="<?= $p['sid'] ?>">
            <ul  class="d_intro">
                <li><h3><?= $p['name'] ?></h3><h4><?= $p['name_eng'] ?></h4></li>
                <hr style="margin-top: 10px; margin-bottom: 10px;">
                <?php if(!empty($p['artist'])): ?>
                <li><h5 class="artist">創作者：<a><?= $p['artist'] ?></a></h5> </li>
                <?php endif; ?>

                <?php if(!empty($p['school'])): ?>
                <li><h5 class="artist"><?= '流派：  '.$p['school'] ?></h5></li>
                <?php endif; ?>

                <?php if(!empty($p['material'])): ?>
                <li><h5 class="school"><?= '材質：  '.$p['material'] ?></h5></li>
                <?php endif; ?>
            </ul>
            <div class="text">
                <p  class="introduction"><?= $p['introduction'] ?></p>
            </div>
            <div class="shop_btn_mobile">
                <ul class="share flex icon">
                    <li class="flex between">
                        <a class="flex love_btn">
                            <img src="imgs/icon/share_30px.svg" alt="">
                            <p style="padding-left: 5px;line-height: 32px;">分享</p>
                        </a>
                        <a class="flex love_btn" >
                            <img src="imgs/icon/favorite_30px.svg" alt="">
                            <p style="padding-left: 5px;line-height: 32px;">收藏</p>
                        </a>
                    </li>
                    <?php if($p['sid'] > 125 ): ?>
                    <?php else: ?>
                    <li class=" animated infinite pulse">
                        <div class="placeBtn flex">
                            <img src="imgs/icon/game_30px.svg" alt="空間比對" title="空間比對">
                            <p style="padding-left: 7px;line-height: 32px;">試試空間比對</p>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="flex pdetail_input">
                    <li>尺寸
                        <select name="size" class="sizeSel">
                            <?php foreach($size as $item): ?>
                                <option value="<?= $item['sid']. '::'. $item['cm']. '::'. $item['price'] ?>"><?= $item['size'] ?></option>
                                <!--                            <option value="--><?//= $item['number']. '::'. $item['price'] ?><!--">--><?//= $item['size'] ?><!--</option>-->
                            <?php endforeach; ?>
                        </select>
                    </li>
                    <li>數量
                        <select name="count" class="qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </li>
                </ul>
                <ul class="flex between">
                    <div class="flex" style="flex-direction: column; margin-top: 25px">
                        <div class="cm flex between" style="width:200px" >
                            <span style="text-align: left; letter-spacing: 1" ><?php if($p['sid'] > 125 ): ?>
                            <?php else: ?>
                            長 x 寬
                            <?php endif; ?></span>
                            <spqn style=" text-align: right; letter-spacing:1px" class="selCm"><?= $p['p_cm'] ?></spqn>
                        </div>
                        <h5 style="font-size: 20px; color: #852B21; text-align: right; margin-top: 10px">NT. <span class="price" style="color: #852B21"><?= $p['price'] ?></span></h5>
                    </div>
                    <li class="button flex bag-btn">
                        <a class="flex" style="display: flex; flex-direction: row; justify-content: center">
                            <img src="imgs/icon/bag_30px.svg" style="width: 30px;height: 30px">
                            <p>放入購物袋</p>
                        </a>

                    </li>
<!--                        <a class=" bag-btn"><img src="imgs/icon/bag_30px.svg" alt="空間比對" title="空間比對">放入購物袋</a></li>-->
                    <!--                    <li class="button"><a href="">直接購買</a></li>-->
                </ul>
            </div>
        </div>
        <div class="detail_pic">
                <ul>
                    <li><img src="./imgs/p750/<?= $p['number'] ?>.jpg" alt=""></li>
                </ul>
            </div>

        </div>


</div>

    <!--       ------------------------------------------------------ Place  ------------------------------->
    <div class="place_check">
        <a type="button" id="closeBtn2"></a>
        <div class="iframe" style="overflow: hidden; ">
            <iframe class="placePage" src="./canvas_test3.php?number=<?= $p['number'] ?>&test=5678" width="1050" height="560"></iframe>
        </div>
    </div>



</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $('.sizeSel').change(function () {
            var cm = $('.selCm');
            var price = $('.price');

            var card = $(this).closest('.detail_intro');
            var number = card.find('.sizeSel').val().split('::');
            var cmVal =  number[1];
            var priceVal =  number[2];
            console.log(cmVal);
            console.log(priceVal);

            cm.text(cmVal);
            price.text(priceVal);

        });

    </script>

<script>

    $(".placeBtn").click(function() {
        var number = $(this).closest('.detail_intro').attr('data-numb');
        $('.place_check').css('display', 'block');
    });

    $('#closeBtn').click(function(){
        $('.detail').css('display', 'none');
        // $('.detail').css('display', 'none');

    });
    $('#closeBtn2').click(function(){
        $('.place_check').css('display', 'none');

    });

    // 加入購物車
    $('.button.bag-btn').click(function(){
        console.log('hi');
        var card = $(this).closest('.detail_intro');
        var combo = card.find('.qty');
        var number = card.find('.sizeSel').val().split('::');
        // var number = card.attr('data-numb');
        var sid = number[0];
        var qty = combo.val();

//         console.log(sid);
// console.log(qty);
        $.get('add_to_cart.php', {sid:sid, qty:qty}, function(data){
            console.log(data);
            alert('已加入購物車');
            countItems(data);
        }, 'json');
    });

    $(".love_btn").click(function() {
        var card = $(this).closest('.detail_intro');
        var sid = card.attr('data-sid');
        var qty = 1;
        console.log(sid);
        console.log(qty);

        $.get('add_to_love.php', {sid:sid, qty:qty}, function(data){
            console.log(data);
            // alert('已加入收藏');
            countLove(data);
        }, 'json');
        //
        // });
    });
</script>

</body>
</html>