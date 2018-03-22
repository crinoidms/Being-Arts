<?php
require __DIR__ . '/__connect_db.php';

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
?>



    <a type="button" id="closeBtn"></a>

    <div class="contain flex detail_page">
        <div class="detail_intro" data-numb="<?= $p['number'] ?>">
            <ul  class="d_intro">
                <li><h3><?= $p['name'] ?></h3><h4><?= $p['name_eng'] ?></h4></li>
                <hr style="margin-top: 10px; margin-bottom: 10px;">
                <li><h5 class="artist"><?= '創作者：  '.$p['artist'] ?></h5></li>
                <li><h5 class="artist"><?= '流派：  '.$p['school'] ?></h5></li>
                <li><h5 class="school"><?= '材質：  '.$p['material'] ?></h5></li>
            </ul>
            <div class="text">
                <p  class="introduction"><?= $p['introduction'] ?></p>
            </div>
            <div class="shop_btn_mobile">
                <ul class="share flex between icon product" >
                    <li><a href=""><img src="imgs/icon/share_30px.svg" alt="">分享商品</a></li>
                    <li><a class="love_btn"><img src="imgs/icon/favorite_30px.svg" alt="">加入收藏</a></li>
                    <li><a type="button" class="placeBtn" ><img src="imgs/icon/game_30px.svg" class="placeBtn" alt="互動"  title="互動">試試空間比對</a></li>
                </ul>
                <?php /*
                <ul class="flex between">
                    <li>尺寸
                        <select name="size" class="sizeSel">
                            <?php foreach($size as $item): ?>
                            <option value="<?= $item['sid']. '::'. $item['price'] ?>"><?= $item['size'] ?></option>
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
                    <li class="button"><a class=" bag-btn">放入購物袋</a></li>
<!--                    <li class="button"><a href="">直接購買</a></li>-->
                </ul>
 */ ?>
            </div>
        </div>
        <div class="detail_pic">
            <ul>
                <li><img src="./imgs/p750/<?= $p['number'] ?>.jpg" alt=""></li>
            </ul>
        </div>

    </div>
    <!--       ------------------------------------------------------ Place  ------------------------------->
    <div class="place_check">
        <a type="button" id="closeBtn2"></a>
        <div class="iframe" style="overflow: hidden; width: 1050px; height: 560px; margin: 100px auto;">
            <iframe class="placePage" src="./canvas_test3.php?number=<?= $p['number'] ?>&test=5678" width="1050" height="560"></iframe>
        </div>
    </div>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

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
    $('.button .bag-btn').click(function(){
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
    //
    // $(".love_btn").click(function() {
    //     // console.log('hi');
    //
    //     var sid = $(this).closest('.product').attr('data-sid');
    //     var qty = 1;
    //     console.log(sid);
    //
    //     $.get('add_to_love.php', {sid:sid, qty:qty}, function(data){
    //         console.log(data);
    //         // alert('已加入收藏');
    //         countLove(data);
    //     }, 'json');
    //
    //     // });
    // });
</script>
