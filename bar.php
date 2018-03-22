<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'bar';


?>

<?php include __DIR__ .'/__head_of_bar.php'; ?>
<body>
<?php include __DIR__ .'/__html_nav.php'; ?>

<header class="flex between">
    <a href="" class="logo"><img src="imgs/icon/logo_full_150px.svg" alt=""></a>
    <ul class="bar_nav flex">
        <li><a href="#section2" >空間簡介</a></li>
        <li><a href="#section3">餐點與飲品</a></li>
        <li><a href="#section4">畫具租借說明</a></li>
    </ul>
</header>
<div class="bar_banner" id="section2">
    <figure><img src="imgs/bar/bar_banner.jpg" alt=""></figure>
    <!-- <div class="banner_p">空間簡介/</div> -->
</div>
<div class="section2">
    <div class="left_p"><p>「Being  Arts 」提供了人們親近藝術的空間，本店的二樓就是繪畫酒吧，到酒吧消費的顧客們可以自由使用店內基本的畫具組，也可以租用進階的創作工具，若無繪畫的靈感，也可以參與酒吧定期開設的繪畫課程。
        </p></div>
    <div class="right_pic">
        <img src="imgs/bar/bar_2_1.jpg" alt="">
        <img src="imgs/bar/bar_2_2.jpg" alt="">
        <img src="imgs/bar/bar_2_3.jpg" alt="">
    </div>
</div>
<div class="section3" id="section3">
    <!-- <img src="imgs/bar/bar_3.jpg" alt=""> -->
    <div class="tit"></div>
<!--    <div class="drink flex" >-->
    <div class="p"><p>
            雞尾酒之王<br>
            血腥瑪麗<br>
            柯夢波丹<br>
            粉紅佳人 <br>
            性感海灘<br>
            長島冰茶<br>
            藍色夏威夷<br>
            瑪格莉特<br>
        </p></div>

    <div class="p2"><p>
            峇里島雞肉沙拉<br>
            越南椰蝦可麗餅<br>
            大馬沙嗲烤雞肉串<br>
            日式脆薯 <br>
            川味椒鹽花枝<br>
            沙嗲烤雞肉串<br>
            韓式炸雞<br>
            炸物拼盤<br>
        </p></div>
<!--</div>-->
</div></div>
<div class="section4" id="section4">
    <div class="left_p">
        <p>
            <span>水彩畫 畫具組</span>  <br>原價 $150（3小時）<br>    平日優惠價 $100（3小時） <br><br>
            <span>油畫 畫具組 </span>   <br> 原價 $250 （3小時）<br>    平日優惠價 $175（3小時） <br><br>
            <span>水性色鉛筆 </span>     <br>原價 $50 （1.5小時）</p>
    </div>
    <div class="right_pic">
        <img src="imgs/bar/bar_4.jpg" alt="">
    </div>
</div>




</body>
</html>