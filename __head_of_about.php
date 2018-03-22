<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="lib/fullPage.js-master/jquery.fullPage.css" />
    <title>品牌故事</title>
    <style>
        *{
            margin:0;
            padding: 0;
            font-family: Arial,"jf03";
            font-size: 16px;
            letter-spacing: 2px;
            box-sizing: border-box;
            list-style: none;
            color:#a5875d;
            line-height: 15px;
            transition: all .5s;
        }
        html, body {
            overflow-x: hidden;
            overflow-y: auto;
        }
        p{
            /* line-height: 20px; */
        }
        a{
            text-decoration: none;
        }
        .wrap{
            display: flex;
        }
        .flex{
            display: flex;
            flex-wrap:wrap ;

        }
        .center{
            text-align: center;
            justify-content: center;
        }
        .between{
            justify-content: space-between;
        }
        .icon img{
            width:30px;
            height:30px;
        }
        .fixed{
            position: fixed;
        }
        @font-face {
            font-family: jf03 ;
            src:url(./lib/font/jf-jinxuan-fresh2.2-book.otf);
        }

        p, h1, h2, h3, h4, h5, h6, a, li{
            font-family: Arial, jf03;
        }
        #fp-nav ul, .fp-slidesNav ul {
            margin-right: 47px;
        }
        /* about ------------------------------------------ */
        .about_wrap{
            /* background-color: red; */
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        .section{
            height:100vh;
            width: calc(100% - 47px);
            overflow: hidden;
            /* background-color: blue; */
        }
        .box {
            position: absolute;
            left: 0;
            /* width: 100vw; */
            height: 100vh;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 1s cubic-bezier(0.745, -0.015, 0.22, 0.995);
            transition: all 1s cubic-bezier(0.745, -0.015, 0.22, 0.995);
            -webkit-transition-delay: 0.8s;
            transition-delay: 0.8s;
        }
        .box_1 {
            z-index: 1;
            -webkit-transform: translateY(0vh);
            transform: translateY(0vh);
        }

        .box_2 {
            z-index: 2;
            -webkit-transform: translateY(100vh);
            transform: translateY(100vh);
        }

        .box_3 {
            z-index: 3;
            -webkit-transform: translateY(200vh);
            transform: translateY(200vh);
        }
        .box_4 {
            z-index: 4;
            -webkit-transform: translateY(300vh);
            transform: translateY(300vh);
        }

        /* section1-------------------*/
        .about_wrap .one{
            background-color: #D9D1C2;
            position: absolute;
        }
        .one .white_frame{
            width:98%;
            height:96%;
            border:1px solid #fff;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .one .one_cont{
            width:100%;
            height:95%;
            /* background-color: red; */
            position: absolute;
            top:55%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .one .one_cont .left{
            width:45%;
            /* background-color: blue; */
            position: relative;
        }

        .one .left .brown_square{
            width:45%;
            height:38%;
            background-color:#927C50;
            position: absolute;
            top:28%;
            left:30%;
            transition: transform 1s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transform: translateY(-50%) rotate(-7deg) translateX(-100vw);
        }
        .one .left .brown_square.load{
            transform: translateY(-50%)  rotate(-7deg) translateX(0);
        }

        .one .left .red_ball{
            width:30%;
            padding-bottom:30%;
            border-radius: 50%;
            background-color: #852B21;
            position: absolute;
            top:30%;
            right:15%;
            transform: translateX(200vw);
            transition: transform 1s cubic-bezier(0.56, 0.1, 0.34, 0.91);
        }
        .one .left .red_ball.load{
            transform: translateX(0);
        }

        .one .one_cont .left .about img,.one .one_cont .left .arts img{
            position: absolute;
            width:50%;
            top:28%;
            left:50%;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all .8s ease;
            transition-delay: 1.2s;
        }
        .one .one_cont .left .about img.load{
            top:27%;
            opacity: 1;
        }
        .one .one_cont .left .arts img{
            top:50%;
            width:45%;
            left:59%;
            transition-delay: 1.8s;
        }
        .one .one_cont .left .arts img.load{
            top:49%;
            opacity: 1;
        }
        .one .one_cont .left .one_tit p{
            color:#852B21;
            font-size: 18pt;
            line-height: 30pt;
            position: absolute;
            top:71%;
            left:40%;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 1s ease;
            transition-delay: .5s;
        }
        .one .one_cont .left .one_tit p.load{
            top:70%;
            opacity: 1;
        }
        .one .one_cont .left .one_tit p span{
            color:#852B21;
            font-size: 28pt;
        }
        .one .one_cont .left .one_tit_2 p{
            color:#333;
            font-size: 16pt;
            line-height: 20pt;
            position: absolute;
            top:78%;
            left:47%;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 1s ease;
            transition-delay: 1s;
        }
        .one .one_cont .left .one_tit_2 p.load{
            opacity: 1;
            top:77%;
        }
        .one .one_cont .right{
            width:55%;
            /* background-color: green; */
        }
        .one .right .brown_square{
            width:0;
            background-color:#927C50;
            position: absolute;
            top:44%;
            right:0%;
            transform: translateY(-50%);
            transition: all .7s ease;
            transition-delay: 2.5s;
        }
        .one .right .brown_square.load{
            width:50%;
        }

        .one .right .brown_square img{
            opacity: 0;
            transition: all 1.5s ease;
            transition-delay: 3.5s;
        }
        .one .right .brown_square img.load{
            opacity: .5;
        }
        .one .right .girl {
            position: absolute;
            left:76%;
            bottom:0;
            opacity: 0;
            transition: all 1.2s ease;
            transition-delay: 3.5s;
        }
        .one .right .girl.load{
            left:75%;
            opacity: 1;
        }
        .one .right .girl img{
            width:380px;
        }

        /* section2-------------------*/
        .about_wrap .two{
            background-color: transparent;
            position: absolute;
        }
        .two .two_frame{
            height:100vh;
            position: absolute;
        }
        .two .two_frame img{
            height:100%;
        }
        .two .brown_ball{
            width:26%;
            padding-bottom:26%;
            border-radius: 50%;
            background-color: #D9D1C2;
            position: absolute;
            top:43%;
            right:10%;
        }
        .two .brown_ball::after {
            content: "";
            width: 105%;
            height: 105%;
            background: url(imgs/about/about_2_circle.svg) no-repeat;
            position: absolute;
            top: 1%;
            right:5%;
        }

        .two .queen{
            position: absolute;
            /* background: red; */
            top:30%;
            right:-5%;
        }
        .two .queen img{
            width:60%;
            transform:scaleX(-1);
            /*IE*/
            filter:FlipH;
        }
        .two .two_tit p{
            color:#852B21;
            font-size: 20pt;
            line-height: 30pt;
            position: absolute;
            top:26%;
            left:20%;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 1s ease;
        }
        .two .two_tit p.load{
            top:25%;
            opacity: 1;
        }
        .two .two_cont p{
            color:#333;
            font-size: 14pt;
            line-height: 30pt;
            width:32%;
            position: absolute;
            top:36%;
            left:50%;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 1s ease;
        }
        .two .two_cont p.load{
            top:35%;
            opacity: 1;
        }
        .two .two_pic{
            width:160px;
            height:160px;
            overflow: hidden;
            border-radius: 12px;
            position: absolute;
            left:10%;
            bottom:29;
            opacity: 0;
            transition: all 1.2s ease;
            transition-delay: 1s;
        }
        .two .two_pic.load{
            bottom:30%;
            opacity: 1;
        }
        .two .two_pic_2{
            left:17%;
            bottom:14%;
            width:145px;
            height:145px;
            opacity: 0;
            transition: all 1.2s ease;
            transition-delay: 1.4s;
        }
        .two .two_pic_2.load{
            bottom:15%;
            opacity: 1;
        }
        .two .two_pic_2 img{
            box-sizing: border-box;
        }
        .two .two_pic_3{
            left:34%;
            bottom:19%;
            opacity: 0;
            width:150px;
            height:150px;
            transition: all 1.2s ease;
            transition-delay: 1.8s;
        }
        .two .two_pic_3.load{
            bottom:20%;
            opacity: 1;
        }
        /* section3-------------------*/
        .about_wrap .three{
            background-color: transparent;
            position: absolute;
            height:100vh;
        }
        .about_wrap .three .man{
            position: absolute;
            bottom:0%;
            left:62%;
            transform: translateX(-50%);
            z-index: 1;
        }
        .about_wrap .three .man img{
            width:60%;
        }
        .about_wrap .three .left{
            width:60%;
            position: absolute;
            background-color: #947C50 ;

            /* z-index: 1; */
        }

        .about_wrap .three .left .bg img{
            opacity: .3;
            /* z-index: 1; */
        }
        .about_wrap .three .left_p{
            position: absolute;
            top:51%;
            left:50%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease;
        }
        .about_wrap .three .left_p.load{
            top:50%;
            opacity: 1;
        }
        .about_wrap .three .left_p p{
            color:#fff;
            font-size: 18px;
            line-height: 30px;
        }

        .about_wrap .three .right{
            position: absolute;
            /* z-index: 1; */
            width:100%;
            height:100vh;
            background-color: #D9D1C2 ;
            clip-path:polygon(0% 0%, 10% 100%,100% 100%,100% 0%);
            margin-left: 50%;
        }

        .about_wrap .three .right .drink{
            position: absolute;
            left:20%;
            bottom:4%;
        }
        .about_wrap .three .right .drink img{
            width:35%;
        }
        .about_wrap .three .right .pic{
            position: absolute;
            left:38%;
            top:4%;
        }
        .about_wrap .three .right .pic img{
            width:18%;
            opacity: .6;
        }
        .about_wrap .three .right .right_p p{
            position: absolute;
            top:36%;
            left:30%;
            transform: translate(-50%,-50%);
            color:#333;
            font-size: 16px;
            line-height: 30px;
            width:32%;
            transition: all 1s ease;
            opacity: 0;
        }
        .about_wrap .three .right .right_p p.load{
            opacity: 1;
            top:35%;
        }
        .about_wrap .three .right .right_p p span{
            font-size: 20px;
            line-height: 45px;
            margin-top: 10%;
            color:#852B21;
            display: block;
            margin-left: -5%;
        }
        /* section4-------------------*/
        .about_wrap .four{
            width:100%;
            position: absolute;
        }
        .about_wrap .four .left{
            width:50%;
        }
        .about_wrap .four .map_frame{
            width:600px;
            height:400px;
            position: absolute;
            top:50%;
            left:25%;
            transform: translate(-50%,-50%);
        }
        .about_wrap .four .map_frame iframe{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        .about_wrap .four .map_frame img{
            height:100%;
        }
        .about_wrap .four .right{
            width:50%;
        }
        .about_wrap .four .right span{
            font-size: 20px;
            line-height: 45px;
            margin-top: 10%;
            color:#852B21;
        }
        .about_wrap .four .right p{
            color:#333;
            font-size: 16px;
            line-height: 30px;
        }
        .about_wrap .four .right .four_traffic p.mrt{
            font-size: 18px;
            margin:10px 0 ;
        }
        .about_wrap .four .right .four_traffic{
            width:80%;
            margin-top:5%;
        }
        .about_wrap .four .right .right_cont{
            position: absolute;
            top:50%;
            left:50%;
            transform: translateY(-50%);
        }
        .about_wrap .four .about_bottom{
            position: absolute;
            bottom:0;
            left:50%;
            transform: translateX(-50%);
        }
        .about_wrap .four .about_bottom .logo img{
            width:30px;
            margin:5px;
        }
        .about_wrap .four .about_bottom .logo{
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #947C50;
            width:250px;
        }
        .about_wrap .four .about_bottom p{
            color:#852B21;
        }
        .about_wrap .four .about_bottom .fb img{
            width:30px;
            margin:5px;
        }
        .about_wrap .four .about_bottom .fb{
            align-items: center;
            justify-content: center;
        }
        .about_wrap .four .pic img{
            width:30%;
            opacity: .7;
            position: absolute;
            right:10%;
            top:10%;
        }
        @media screen and (max-width: 420px) {
            #fp-nav ul, .fp-slidesNav ul{
                display: none;
        }
    </style>
</head>