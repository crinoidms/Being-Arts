<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'about';

?>

<?php include __DIR__ .'/__head_of_about.php'; ?>

<body>
<?php include __DIR__ .'/__html_nav.php'; ?>

<!-- about -->
<div id="fullpage">
    <div class="about_ba">
        <div class="about_wrap">
            <div class="section one box box_1"  data-anchor="section0">
                <div class="white_frame"></div>
                <div class="one_cont flex">
                    <div class="left">
                        <div class="brown_square"></div>
                        <div class="red_ball"></div>
                        <div class="about"><img src="imgs/about/being.svg" alt=""></div>
                        <div class="arts"><img src="imgs/about/arts.svg" alt=""></div>
                        <div class="one_tit"><p><span>品</span>牌故事</p></div>
                        <div class="one_tit_2"><p>台灣第一家繪畫酒吧</p></div>
                    </div>
                    <div class="right">
                        <div class="brown_square"><img src="imgs/about/about_1_pic.jpg" alt=""></div>
                        <div class="girl"><img src="imgs/about/about_1_girl.png" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="section two box box_2 under"  data-anchor="section1">
                <!-- <div class="two_frame"><img src="imgs/about/about_2_frame.svg" alt=""></div> -->
                <div class="brown_ball"></div>
                <div class="queen"><img src="imgs/about/about_2_queen.png" alt=""></div>
                <div class="two_tit"><p>在藝術商店尋找靈感</p></div>
                <div class="two_cont"><p>我們創造一個空間，一個藝術與酒精碰撞的奇幻空間。
                        這裡盛產心靈糧食，並繪予魔幻寫實的筆觸…
                        在香檳開啟的同時，你聽得到「瑪麗皇后的嘆息」；
                        而柯夢．波丹在這也不再只是一本審美的雜誌。
                        我們相信感官互通有無。</p></div>
                <div class="two_pic two_pic_big"><img src="imgs/about/about_2_pic.jpg" alt=""></div>
                <div class="two_pic two_pic_2"><img src="imgs/about/about_2_pic_2.jpg" alt=""></div>
                <div class="two_pic two_pic_3"><img src="imgs/about/about_2_pic_3.jpg" alt=""></div>
            </div>
            <div class="section three box box_3 under"  data-anchor="section2">
                <div class="man"><img src="imgs/about/about_3_man.png" alt=""></div>
                <div class="flex">
                    <div class="left">
                        <div class="bg"><img src="imgs/about/about_3_bg.jpg" alt=""></div>
                        <div class="left_p"><p>所以，提供一個複合式的藝術堡壘叫作「Being Arts」，
                                我們信仰「同在」，所以，名字要用進行式，
                                我們知道共同存在是一件多麼美好的事。
                                我們期待「Being Arts」能成為藝術的推進艙，
                                一路將藝術與生活、與您、與我們發生關係。</p>
                        </div>
                    </div>
                    <div class="right">
                        <!-- <div class="white_frame"></div> -->
                        <div class="drink"><img src="imgs/about/about_3_drink.png" alt=""></div>
                        <div class="pic"><img src="imgs/about/about_3_pic.png" alt=""></div>
                        <div class="right_p"><p>
                                <span>一樓是生活藝術艙</span>
                                這樓層提供許多古典藝術複製畫作、海報與文創周邊商品，
                                讓喜歡藝術的朋友可以將喜歡的作品帶回自己的生活裡。
                                <span>二樓是心靈糧食艙</span>
                                這層可以一邊小酌一邊欣賞畫作，也可以使用店內提供的
                                畫具進行創作。
                                <span>三樓是藝術展示艙</span>
                                這個展覽空間於每個月舉辦展覽與免費藝術講座，讓民眾
                                可以欣賞、認識更多不同藝術家的作品。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section four box box_4 under"   data-anchor="section3">
                <div class="pic"><img src="imgs/about/about_4_pic.png" alt=""></div>
                <div class="flex">
                    <div class="left">
                        <div class="map_frame">
                            <iframe width='550px' height='350px' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市中山區北安路534號&z=16&output=embed&t='></iframe>
                            <img src="imgs/about/about_4_frame.svg" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_cont">
                            <div class="four_contact">
                                <div>
                                    <span>聯絡資訊</span>
                                    <p>地址：台北市中山區北安路534號</p>
                                    <p>電話：02-2355-8888</p>
                                    <p>電子郵件：being_arts@ba.com.tw</p>
                                </div>
                            </div>
                            <div class="four_traffic">
                                <span>交通資訊</span>
                                <p class="mrt">捷運</p>
                                <p>文湖線：大直站2號出口左轉北安路步行約5分鐘。</p>
                                <p>淡水線：圓山站1號出口轉乘21、208、247、287、紅2至「捷運大直站」。</p>
                                <p>板南線：忠孝復興站轉乘捷運文湖線（往南港展覽館）至大直站2號出口。</p>
                                <p class="mrt">公車</p>
                                <p>至北安路「捷運大直站」公車路線：21、28、33、42、208、256、267、287、646、902、紅3、棕13、棕16。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_bottom">
                    <div class="flex logo">
                        <img src="imgs/about/bg.svg" alt="">
                        <p>Being Arts藝術吧</p>
                    </div>
                    <div class="flex fb">
                        <img src="imgs/about/fb_20px.svg" alt="">
                        <img src="imgs/about/line_20px.svg" alt="">
                        <img src="imgs/about/ig_20px.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="lib/fullPage.js-master/jquery.fullPage.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            'verticalCentered': false,
            'css3': true,
            'sectionsColor': ['#D9D1C2', '#fff', '#fff', '#fff'],
            'navigation': true,
            'navigationPosition': 'right',
            'anchors': ['section0', 'section1', 'section2', 'section3'],
            // 'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple'],

            'afterLoad': function(anchorLink, index){
                console.log(index);

                if(index == 1){
                    $('.one .left .brown_square').addClass('load');
                    $('.one .left .red_ball').addClass('load');
                    $('.one .one_cont .left .about img').addClass('load');
                    $('.one .one_cont .left .arts img').addClass('load');
                    $('.one .one_cont .left .one_tit p').addClass('load');
                    $('.one .one_cont .left .one_tit_2 p').addClass('load');
                    $('.one .right .brown_square').addClass('load');
                    $('.one .right .brown_square img').addClass('load');
                    $('.one .right .girl').addClass('load');
                }else{
                    $('.one .left .brown_square').removeClass('load');
                    $('.one .left .red_ball').removeClass('load');
                    $('.one .one_cont .left .about img').removeClass('load');
                    $('.one .one_cont .left .arts img').removeClass('load');
                    $('.one .one_cont .left .one_tit p').removeClass('load');
                    $('.one .one_cont .left .one_tit_2 p').removeClass('load');
                    $('.one .right .brown_square').removeClass('load');
                    $('.one .right .brown_square img').removeClass('load');
                    $('.one .right .girl').removeClass('load');
                }
                if(index == 2){
                    $('.two .two_tit p').addClass('load');
                    $('.two .two_cont p').addClass('load');
                    $('.two .two_pic').addClass('load');
                    $('.two .two_pic_2').addClass('load');
                    $('.two .two_pic_3').addClass('load');
                }else{
                    $('.two .two_tit p').removeClass('load');
                    $('.two .two_cont p').removeClass('load');
                    $('.two .two_pic').removeClass('load');
                    $('.two .two_pic_2').removeClass('load');
                    $('.two .two_pic_3').removeClass('load');
                }
                if(index == 3){
                    $('.about_wrap .three .left_p').addClass('load');
                    $('.about_wrap .three .right .right_p p').addClass('load');

                }else{
                    $('.about_wrap .three .left_p').removeClass('load');
                    $('.about_wrap .three .right .right_p p').removeClass('load');
                }
                if(index == 4){
                    $('.about_wrap .four .map_frame').addClass('load');
                    $('.about_wrap .four .right .right_cont').addClass('load');

                }else{
                    $('.about_wrap .four .map_frame').removeClass('load');
                    $('.about_wrap .four .right .right_cont').removeClass('load');
                    
                }
            },

            'onLeave': function(index, nextIndex, direction){
                if (index == 3 && direction == 'down'){
                    $('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
                }
                else if(index == 3 && direction == 'up'){
                    $('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
                }
            }
        });
    });

    /* location */
    var isActive = false;

    $('.locatt').on('click', function() {
        if (isActive) {
            $('.location').removeClass('locat_open');
            $('.back_black').removeClass('body_black');
            $('.white').removeClass('white_open');
            $('.contact').removeClass('text_open');
            $('.traffic').removeClass('text_open');

        } else {
            $('.location').addClass('locat_open');
            $('.back_black').addClass('body_black');
            $('.white').addClass('white_open');
            $('.contact').addClass('text_open');
            $('.traffic').addClass('text_open');

        }
        isActive = !isActive;
    });
</script>

</body>
</html>