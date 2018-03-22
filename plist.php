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
$page_name = 'plist';



$per_page = 8 ;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 1;
//$school = isset($_GET['school']) ? intval($_GET['school']) : 0;
//$color = isset($_GET['color']) ? intval($_GET['color']) : 0;
$school = isset($_GET['school']) ?  $_GET['school'] : 0;
$color = isset($_GET['color']) ?  $_GET['color'] : 0;


$where = "where 1";   //讓後面可以用and 去接
if(!empty($cate)){
    $where .=" AND (`category_id`=$cate OR `seccategory_id`=$cate )";
}
if(!empty($school)){
    $where .=" AND `school_id` IN ({$school})";
}
if(!empty($color)){
    $where .=" AND (`main_color` IN ({$color}) OR `sec_color` IN ({$color}))";
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


?>

<!------------------------------------------------------- productlist  ------------------------------>
<?php /*  <script>
                var products=<?=json_encode($c_result->fetch_all())?>;
                console.log(products);
            </script> */ ?>
    <div class="productList">
        <div class="productlist flex">
            <?php /*  <script>
                var products=<?=json_encode($c_result->fetch_all())?>;
                console.log(products);
            </script> */ ?>
                <?php while($row = $c_result->fetch_assoc()):
                ?>
                <div class="product" data-sid="<?= $row['sid'] ?>">
                    <div class="card" >
                        <figure class="pro"><img src="imgs/pro_200px/<?= $row['number'] ?>.jpg" alt="<?= $row['name'] ?>"></figure>
                    </div>
                    <div class="flex name center"><?= $row['name'] ?></div>
                    <div class="info">
                        <ul>
                            <li><?= $row['artist_eng'] ?></li>
                            <li>NT. <?= $row['price'] ?></li>
                        </ul>
                        <a type="button" class="love_btn"><img src="./imgs/icon/favorite_30px.svg" alt="加入收藏"  title="加入收藏"></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>



        <div class="pagination flex">
                <ul class="page flex">
                    <li><a href="javascript:pageBtnClick(<?= $page<=1 ? '1' : $page-1 ?>)"><<</a></li>
                    <?php
                    $pnum = 11;
                    for($i=$page-2 ; $i<=$page+2 ; $i++):
                    if($i>=1 and $i<=$t_pages):
                        ?>
                        <li class="<?= $i==$page ? 'active' : '' ?>"><a href="javascript:pageBtnClick(<?= $i ?>)"><?= $i ?></a></li>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <li><a href="javascript:pageBtnClick(<?= $page>=$t_pages ? $t_pages : $page+1 ?>)">>></a></li>
            </ul>
            </div>
    </div>

    <script>
        // 細節頁
        $(".card").click(function() {
            var sid = $(this).parent('.product').attr('data-sid');
            // // console.log(sid);
            // var detail = $('.detail');
            // detail.html('');
            // detail.css('display', 'block');
            //
            // $.get('product_detail.php', { sid:sid }, function(data){
            //     detail.html(data);
            // }, 'text');
            location.href = 'pdetail.php?sid='+sid;
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

            // });
        });

        // $(".love_btn").click(function(){
        //
        //     var sid = $(this).closest('.product').attr('data-sid');
        //     console.log(sid);
        //
        //     $.get('add_to_love.php', {sid:sid}, function(data){
        //         console.log(data);
        //         // alert('已加入收藏');
        //         countLove(data);
        //     }, 'json');
        //
        // });
        //
        // // $('.schoolSel').click(function () {
        //
        // });

    </script>
</body>
</html>