<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <title>修改會員資料</title>
    <style>
        /*-------------------header--------------*/
        header {
            position:fixed;
            top:0;
            width:100vw;
            height:72px;
            z-index:2;
            background: #fff;


        }
        .logo-a {
            width:150px;
            float:left;
        }
        .logo-img {
            width:150px;
            margin:20px 0px 0px 20px;

        }
        header>.bread{
            position:fixed;
            left:200px;
            margin:30px;
        }
        .tabs-nav a {
            /*line-height: 18px;*/
            /*display:block;
            margin:4px;*/
        }
        .tabs-nav a:hover {
            color:#664725;
        }
        /*.tabs-nav a.active {
            border-bottom:solid 2px #a5875d;

        }*/



        .tabs-nav>ul {
            position:fixed;
            right:60px;
            margin:30px;
        }
        .tabs-nav>ul>li {
            float:left;
            margin:0px 30px;
        }
        /*-------------------section--------------*/
        section.section-body {
            position:relative;
            width:100%;
            padding-right: 47px;
            /*background-color: #000;*/
        }
        .tabs-panel {
            overflow: hidden;
        }
        /* .section-body {
             position:relative;
             width:1533px/1580px;
             background-color: #000;
             margin-top: 72px;
             height:100vh;
             margin:100px auto;
         }*/
        .exbSpace {
            width:inherit;
            height:72px;
        }
        .exbTitle {
            width:100%;
            height:60px;
            margin-top:48px;
            text-align: center;
            font-size: 24px;
            /*line-height:60px;*/
            /*background: #000;*/
            /*margin-top: 72px;*/
        }
        .exbTitle>h2 {
            text-align: center;
            font-size: 24px;
            line-height:60px;
        }


        /*-----tbp1-展覽預告------*/
        .tbp1 {
            width:100%;
            position: relative;
            /*height:100vh;*/
            /*background:#c6c6c6;*/
        }
        .tbp1>img {
            position: absolute;
            left:0px;
            bottom:-10px;
            width:400px;

        }
        /*.tbp1>#kan_bg {
            position: absolute;
            right:0;
            bottom:-10px;
            width:300px;
            height:300px;
        }*/
        /* @keyframes bgDetach {
              0%{background-position: top left;}
              25%{background-position: top center;}
              50% {background-position: center center; filter:hue-rotate(90deg);}
              75%{background-position: center right;}
             100% {background-position: center bottom;}
         }*/
        @keyframes bgSpread {
            0%{opacity:0; background-position: -100%, center;}
            /*0%{background-position:  center left;}*/
            25%{}
            /*50% {background-position: center center; filter:hue-rotate(90deg);}*/
            75%{}
            100% {opacity:1; background-position:  0% center, 15% 50%, 35% 50%, 52% 50%, 80% 50%, 101% 50%;}
        }

        .tbp1>aside {
            width:100%;
            height:300px;
            margin-top: 36px;
            /*background-color: #c6c6c6;*/
            background-image:
                    url("imgs/exhibition/p405.jpg"),
                    url("imgs/exhibition/p406.jpg"),
                    url("imgs/exhibition/p407.jpg"),
                    url("imgs/exhibition/p402.jpg"),
                    url("imgs/exhibition/p404.jpg"),
                    url("imgs/exhibition/p403.jpg");
            background-repeat:no-repeat;
            background-size: 30% auto;
            background-position: -100%, center;
            /*background-position:  0% 50%, 17% 50%, 35% 50%, 52% 50%, 69% 50%, 100% 50%; */
            opacity:0;
            /*filter: brightness(70%);*/
            /*background-size:contain;*/
            animation-name: bgSpread;
            animation-duration: 3s;
            animation-delay: 1s;
            /*animation-iteration-count:infinite;*/
            /*animation-direction:alternate;*/
            animation-fill-mode:forwards;
            /*animation-timing-function:cubic-bezier(.39,1,.82,.09);*/
            border-style:solid;
            border-width: 2px 0 2px 0;
            border-image: linear-gradient(to right, #852b21 0%, #ffffff 100%);
            border-image-slice: 1;
        }
        .tbp1>article {
            margin: 42px 6% 0px 6% ;
            width:95%;
            /*height:;*/
            float:left;
            display:flex;
            flex-grow:1;
            justify-content: space-around;
            /*overflow: hidden;*/
        }
        .tbp1>article>.article_l {
            width:40%;
            /*float:left;*/
        }
        .tbp1>article>.article_l>ul {
            margin-top: 42px;
        }
        .tbp1>article>.article_l>ul>li {
            margin-bottom:32px;
        }
        .tbp1>article>.article_l>p {
            font-size: 24px;
            margin-top: 24px;
        }

        .tbp1>article>.article_r {
            width:60%;
        }
        .tbp1>article>.article_r>h3 {
            margin-top: 24px;
            margin-bottom: 24px;
        }
        .tbp1>article>.article_r>p {
            /*display:block;*/
            width:70%;
            line-height: 32px;
            color:#333;
            /*overflow: hidden;*/
        }


        /*-----tbp2-當期展覽------*/
        .tbp2 {
            position:relative;
            width:100%;
            /*height:700vh;*/
            /*background:#aaa;*/
        }
        .tbp2>.currentExb-profile {
            position: relative;
            margin:72px auto 0px auto;
            /*top:128px;*/
            /*right: 6%;*/
            width:90%;
            height:400px;
            border:2px solid #852b21;
            background: url(imgs/exhibition/Paintings_michelangelo_the_creation_of_adam_sistine_chapel_3840x1200.jpg) center center no-repeat;
            background-size: 1745px auto;
        }
        .currentExb-profile:hover {
            /*background-position: center center;*/
            background-size: 1920px auto;
        }
        /* .currentExb-profile:hover .currentExb-profile-name {
             height:20px;
             width:355px;
             background-color:#fff;
             display: none;
         }*/
        .currentExb-profile:hover .currentExb-profile-name>.p1 {
            top:105px;
            left:50px;
            /*color:black;*/
        }
        .currentExb-profile:hover .currentExb-profile-name>.p2 {
            bottom:105px;
            right:50px;
        }
        .currentExb-profile:hover .scroll-downs {
            display: initial;
        }
        .tbp2>.currentExb-profile>svg {
            fill:#000;
            position:absolute;
            left:0;
            top:0;
            width:96px;
        }
        .tbp2>.currentExb-profile>p {
            position:absolute;
            left:10px;
            top:8px;
            z-index:5;
            color:white;
        }
        .currentExb-profile>.currentExb-profile-name {
            position:absolute;
            height:230px;
            width:355px;
            left:300px;
            top:90px;
            background-color:#a5875d;
        }
        .currentExb-profile-name>.p1 {
            position: absolute;
            color:white;
            top:20px;
            left:20px;

        }
        .currentExb-profile-name>.p2 {
            position: absolute;
            color:white;
            right:20px;
            bottom:20px;

        }

        /*----scroller----*/

        /*       .scroll-downs {
                 position: absolute;
                 top: 540px;
                 right: 0;
                 bottom: 0;
                 left: 0;
                 margin: auto;
                 width :34px;
                 height: 55px;
                 display:none;
                 transition: all .5s;
               }
               .mousey {
                 width: 3px;
                 padding: 10px 15px;
                 height: 35px;
                 border: 2px solid #a5875d;
                 border-radius: 25px;
                 opacity: 0.75;
                 box-sizing: content-box;
               }
               .scroller {
                 width: 3px;
                 height: 10px;
                 border-radius: 25%;
                 background-color: #a5875d;
                 animation-name: scroll;
                 animation-duration: 1.5s;
                 animation-timing-function: cubic-bezier(.15,.41,.69,.94);
                 animation-iteration-count: infinite;
               }
               @keyframes scroll {
                 0% { opacity: 0; }
                 10% { transform: translateY(0); opacity: 1; }
                 100% { transform: translateY(15px); opacity: 0;}
               }*/

        .tbp2>.asideExb2 {
            /*position: absolute;*/
            margin-top:144px;
            margin-left:6%;
            margin-right:6%;
            width:40%;
            /*padding-top:72px: */
            /*background: #333;*/
            float:left;
            clear:both;
            /*display: none;*/
        }
        .fixed {
            position:fixed;*/
            /*right:0;*/
        top:144px;
            left:4%;
            width:40%;
            /*top:72px;*/
            /*z-index:999;*/
            /*background: black;*/
            /*width:100%*/
        }
        .tbp2>aside>h3 {
            margin-top: 24px;
            margin-bottom: 24px;
        }
        .tbp2>aside>p {
            color:#333;
            line-height: 32px;
        }

        .tbp2>article {
            /*position:absolute;*/
            margin-top:144px;
            margin-left:42px;
            padding:30px;
            /*top:100vh;*/
            /*right:0;*/
            width:40%;
            height:600px;
            /*height:500vh;*/
            /*background: #c6c6c6;*/
            overflow: hidden;
            text-align: center;
            /*border: #947c50 solid 2px dashed;*/

        }

        .micheSlider {
            margin: auto;
            background-size:cover;
            background-position: top center;
            background-repeat: no-repeat;
            height:60vh;

            /*width:40%;*/
        }

        .tbp2>article>img {
            display: block;
            margin-right:0px;
            /*width:40%;*/
            height:600px;
            /*height:500px;*/
            /*margin:0px 24px;*/
            /*object-fit: cover;*/
        }
        /*-----tbp3-展覽回顧------*/
        .tbp3 {
            position:relative;
            width:100%;
            /*height:300vh;*/
            /*background:#ccc;*/

        }
        .exbTitle_3 {
            margin-bottom: 72px;
        }
        .historyExb {
            /*position: absolute;*/
            position: relative;
            margin:16px auto 72px;
            width:90%;
            /*right: 6%;*/
            height:360px;
            border:2px solid #852b21;
            /*background: url(imgs/exhibition/Miro1.jpg) center center no-repeat;*/
            /*background-size: 1580px auto;*/
            background-size: 1580px auto;
            overflow: hidden;
        }
        .historyExb:hover {
            /*background-position: center center;*/
            background-size: 1920px auto;
        }
        .historyExb:hover .historyExb-title {
            background: rgba(165,135,93,.2);
            background: rgba(0,0,0,.9);
            border:3px solid #852b21;
            padding:15px;

        }
        .historyExb:hover .historyExb-profile {
            right:0;
        }
        .historyExb>svg {
            fill:#000;
            position:absolute;
            left:0;
            top:0;
            width:96px;
        }
        .historyExb>p {
            position:absolute;
            left:10px;
            top:8px;
            z-index:5;
            color:white;
        }
        .historyExb-title {
            position:absolute;
            height:230px;
            width:355px;
            left:128px;
            top:75px;
            background-color:#a5875d;
        }
        .historyExb-title>.p1 {
            position: absolute;
            color:white;
            top:20px;
            left:20px;

        }
        .historyExb-title>.p2 {
            position: absolute;
            color:white;
            right:20px;
            bottom:20px;

        }
        .historyExb-profile {
            position:absolute;
            width:30%;
            height:inherit;
            right:-30%;
            background: rgba(0,0,0,.8);
            line-height: 26px;
            color:#fff;
            padding:16px;
        }

        .hExb1 {
            /*margin-top: 128px;*/
            background: url(imgs/exhibition/Miro1.jpg) center center no-repeat;
            background-size: 1580px auto;

        }
        .hExb2 {
            background: url(imgs/exhibition/p313.jpg) center center no-repeat;
            background-size: 1580px auto;

        }
        .hExb3 {
            background: url(imgs/exhibition/p117.jpg) center center no-repeat;
            background-size: 1580px auto;

        }

        .dateHexb {
            width:90%;
            height:24px;
            line-height:24px;
            margin: auto;
            /*padding-left: 4%;*/
            /*border-style:solid;
            border-width: 0 0 2px 0;
            border-image: linear-gradient(to right, #ffffff 0%, #852b21 0%, #ffffff 30%);
            border-image-slice: 1;
            background-color: white;*/
        }

        /*-------------------tabs-panel------------*/
        /*.tabs-panel {
            position:relative;
            width:95%;
            margin: 10px auto;
            background: #000;
        }*/

        /*back to top*/
        .backtotop {
            width:30px;
            height:30px;
            position:fixed;
            right:60px;
            bottom:20px;
            /*display:none;*/
        }
        .backtotop:hover img {
            filter: brightness(40%)
        }
        .backtotop_fixed {
            position:fixed;

        }
         /*----------------------------------scroll--------------------------------*/
         ::-webkit-scrollbar {
            width: 5px;
            height: 10px;
        }

        ::-webkit-scrollbar-button {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background: #947c50;
            border: 71px none #ffffff;
            border-radius: 31px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #947c50;
        }

        ::-webkit-scrollbar-thumb:active {
            background: #947c50;
        }

        ::-webkit-scrollbar-track {
            background: #CCC4B5;
            border: 65px none #ffffff;
            border-radius: 34px;
        }

        ::-webkit-scrollbar-track:hover {
            background: #fff;
        }

        ::-webkit-scrollbar-track:active {
            background: #CCC4B5;
        }

        ::-webkit-scrollbar-corner {
            background: transparent;
        }
        /* ------------------------------------------------------------------------------------ */
        /* ------------------------------------------------------------------------------------ */
        /* ------------------------------------------------------------------------------------ */

        @media screen and (max-width: 375px) {
            li.map_num ,li img.num, .pic{
                display: none;
            }
            nav.map ul li.map_tit{
                margin-top:14px;
                width:140px;
            }
            nav.map ul li{
                font-size: 20px;
                padding: 3px 5px;
            }
            nav.map{
                width: 328px;
                height: 20%;
                margin:0;
                padding:0 ;
                border:none;
            }
            .map li a{
                color:#947C50;
                /* color:#603813; */
                font-size: 16px;
            }
            .map li.map_pic{
                width:100px;
                height:20px;
                /* background-color: green; */
                position:none;
            }
            .map ul{
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }
            .map ul li{
                margin-top:0px;
                margin-left:10px;
                height:30px;
                width:90px;
            }
            .map2 ul li{
                width:130px;
            }
            .map5 ul li{
                width:200px;
            }
            .map5 li.map_pic{
                display: none;
            }
            ul.map5_icon{
                display: block;
            }
            ul.map5_icon li{
                position: absolute;
                bottom:7px;
                left:0;
            }
            ul.map5_icon li img.fb{
                margin-left: 105px;
            }
            ul.map5_icon li img.line{
                margin-left: 145px;
            }
            ul.map5_icon li img.ig{
                margin-left: 185px;
            }

            .map1{
                transform: translateY(667px);
                transition: transform 1.4s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .map2{
                transform: translateY(800.4px);
                transition: transform 1.3s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .map3{
                transform: translateY(933.8px);
                transition: transform 1.2s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .map4{
                transform: translateY(1067.2px);
                transition: transform 1.1s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .map5{
                transform: translateY(2267.8px);
                transition: transform .89s cubic-bezier(0.56, 0.1, 0.34, 0.91);
                flex-direction: column;
            }

            .menu-open .map1 {
                transform: translateY(0);
                transition: transform .8s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .menu-open .map2 {
                transform: translateY(100%);
                transition: transform 1.1s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .menu-open .map3 {
                transform: translateY(200%);
                transition: transform 1.2s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .menu-open .map4 {
                transform: translateY(300%);
                transition: transform 1.3s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .menu-open .map5 {
                transform: translateY(400%);
                transition: transform 1.35s cubic-bezier(0.56, 0.1, 0.34, 0.91);

            }
            .map ul li a{
                left:0;
            }
            .map_tit{
                width:328px;
                height:20px;
            }

            /**/
            .tabs-nav {
                position: static;
                width:100%;
                height:48px;
                background-color: #c6c6c6;
                margin-top:72px;
            }
            .tabs-nav>ul {
                display:flex;
                justify-content:space-between;
                position:fixed;
                /*right:60px;*/
                /*margin:30px;*/
            }
            .tabs-nav>ul>li {
                /*float:left;*/
                margin:0px 30px;
            }

            .tabs-nav {
                display:none;
            }

            /*-----------tbp1------------------*/
            .tbp1>aside {
                width:100%;
                height:150px;
                background-size: auto 100%;
            }
            /*.tbp1>article>p {
                width:90%;
            }*/
            .tbp1>img {
                display:none;
            }
            .tbp1>article {
                margin: 42px 6% 0px 6% ;
                width:95%;
                /*height:;*/
                /*float:left;
                display:flex;
                flex-grow:1;
                justify-content: space-around;*/
                /*overflow: hidden;*/
            }
            .tbp1>article>.article_l {
                width:100%;
                /*height:200px;*/
                /*float:left;*/
            }
            .tbp1>article>.article_l>ul {
                margin-top: 24px;
            }
            .tbp1>article>.article_l>ul>li {
                margin-bottom:32px;
            }
            .tbp1>article>.article_l>p {
                font-size: 18px;
                margin-top: 24px;
            }

            .tbp1>article>.article_r {
                width:100%;
            }
            .tbp1>article>.article_r>h3 {
                margin-top: 24px;
                margin-bottom: 24px;
            }
            .tbp1>article>.article_r>p {
                /*display:block;*/
                width:70%;
                line-height: 32px;
                color:#c6c6c6;
                /*overflow: hidden;*/
            }

        } /*--media-query-end--*/
    </style>
</head>