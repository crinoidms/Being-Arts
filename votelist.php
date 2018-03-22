<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'vote_event';

$user = isset($_SESSION['user']['id'])? $_SESSION['user']['id'] :0 ;
$order = isset($_GET['order']) ? intval($_GET['order']) : 1;

if($order == 1){
    $c_sql = sprintf("SELECT * FROM `vote` ORDER BY `sid` ASC ");
}else{
    $c_sql = sprintf("SELECT * FROM `vote` ORDER BY `vote_count` DESC ");
};

$c_result = $mysqli->query($c_sql);



?>


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


<script>
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

    $('#closeBtn').click(function () {
        $('#alert').fadeOut();
    });

    $('#closetVoteFin').click(function () {
        $('#voteFin').fadeOut();
    });
    $('#closePic').click(function () {
        $('#bigPic').fadeOut();
    });



</script>
