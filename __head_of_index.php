<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="lib/fullPage.js-master/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="lib/lazy-line-painter-master/examples/css/common.css" media="all">
    <title>Being Arts 藝術吧</title>
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
            /* overflow-x: hidden;
            overflow-y: hidden; */
            border:none;
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
        @keyframes lace{
            to{
                transform: rotate(0);
            }
            from{
                transform: rotate(-360deg);
            }
        }
        p, h1, h2, h3, h4, h5, h6, a, li{
            font-family: Arial, jf03;
        }
        .none, .com_none{
           
            display:none;
        }
        /* @keyframes width{
			0%{
				width:0;
			}
			100%{
				width:33%;
			}
		}
        @keyframes opacity{
			0%{
				opacity:0;
			}
			100%{
				opacity:1;
			}
        } */
        #fp-nav ul, .fp-slidesNav ul {
            margin-right: 47px;
            transition:all 1s ease;
            transition-delay:1s;
        }
        @keyframes bounce {
            from,
            20%,
            53%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0);
            }

            70% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0);
            }
        }
        /*----------------svg---------------------------------------------*/
        @keyframes letterDraw {
        to { stroke-dashoffset: 0;}
        }
        .mysvg .line {
        fill: transparent;
        stroke-width: 2;
        stroke: #FFF;
        stroke-linecap: round;
        stroke-linejoin: round;
        clip-path: url('#clip');
        }

        .mysvg .line .line-b {
        stroke-dasharray: 340;
        stroke-dashoffset: 340;
        animation: letterDraw 1.5s linear 3.5s forwards;
        }
        .mysvg .line .line-e {
        stroke-dasharray: 150;
        stroke-dashoffset: 150;
        animation: letterDraw 1.5s linear 4.3s forwards;
        }
        .mysvg .line .line-i {
        stroke-dasharray: 180;
        stroke-dashoffset: 180;
        animation: letterDraw 1.5s linear 4.7s forwards;
        }
        .mysvg .line .line-n {
        stroke-dasharray: 180;
        stroke-dashoffset: 180;
        animation: letterDraw 1.5s linear 5s forwards;
        }
        .mysvg .line .line-g {
        stroke-dasharray: 180;
        stroke-dashoffset: 180;
        animation: letterDraw 1.5s linear 5.5s forwards;
        }
        .mysvg .line .line-o {
        stroke-dasharray: 180;
        stroke-dashoffset: 180;
        animation: letterDraw 1.5s linear 8s forwards;
        }
/*----------------arts----------------------------*/
        .mysvg2 .line2 {
            stroke-width:1.5;
            fill: transparent;
            stroke: #FFF;
            stroke-linecap: round;
            stroke-linejoin: round;
            clip-path: url('#clip2');
        }
        #clip2{
            top:10px;
        }
        .mysvg2 .line2 .line-a {
        stroke-dasharray: 300;
        stroke-dashoffset: 300;
        animation: letterDraw 1.5s linear 6s forwards;
        }
        .mysvg2 .line2 .line-r {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: letterDraw 1.5s linear 6.5s forwards;
        }
        .mysvg2 .line2 .line-t {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: letterDraw 1.5s linear 7s forwards;
        }
        .mysvg2 .line2 .line-s {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: letterDraw 1.5s linear 7.3s forwards;
        }
        .mysvg2 .line2 .line-a1 {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: letterDraw 1.5s linear 7.5s forwards;
        }
        .mysvg2 .line2 .line-t1 {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: letterDraw 1.5s linear 7.7s forwards;
        }
        @media screen and (max-width: 420px){
            .com_none{
                display:block;
            }
            .mysvg .line {
                
                stroke-width: 2;
                
            }
            .mysvg2 .line2 {
            stroke-width:2;
            
        }
        }
        /* home ------------------------------------------ */
        .home_wrap{
            background-color: transparent;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            /* background-color: red; */
            /* transition: all .8s cubic-bezier(0.56, 0.1, 0.34, 0.91); */
        }
        .section{
            height:100vh;
            width:100%;
            /* background-color: blue; */
            position: relative;
            overflow: hidden;
        }
        div#section0.section.one.box.box_1.fp-section.active.fp-completely{
            background: white;
        }
        body {
            /* position: relative; */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            min-width: 320px;
            background: #fff;
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

        .box_5 {
            z-index: 5;
            -webkit-transform: translateY(400vh);
            transform: translateY(400vh);
        }

        /* section1-------------------*/
        .one .brown_square{
            /* width:442px;
            height:366px; */
            width:28%;
            height:44%;
            background-color:#927C50;
            position: absolute;
            top:45%;
            left:35%;
            transform: translateY(-50%)  rotate(-7deg) translateX(-100vw);
            transition: transform 1s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            /* transition-delay: .5s; */
            /* transition-delay: 3s; */
        }
        .one .brown_square.load{
            transform: translateY(-50%)  rotate(-7deg) translateX(0);
        }
        .one .red_ball{
            /* width:360px;
            height:360px; */
            width:23%;
            padding-bottom:23%;
            border-radius: 50%;
            background-color: #852B21;
            position: absolute;
            top:40%;
            right:30%;
            transform: translateX(200vw);
            transition: transform 1s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            /* transition-delay: .5s; */
            /* transition-delay: 3s; */
        }
        .one .red_ball.load{
            transform: translateX(0);
        }
        .one .girl{
            position: absolute;
            top:45%;
            left:45%;
            transform: translateY(-1000vh);
            transition: transform 1.5s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition-delay: 1.4s;
        }
        .one .girl.load{

            transform: translate(-50%,-50%);
        }
        .one .girl img{
            height:90vh;
        }
        .one .boy{
            position: absolute;
            top:35%;
            left:57%;
            /* transform: translate(-50%,-50%); */
            /* transform: translateX(70vw); */
            opacity: 0;
            transition: all 1.8s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition-delay: 1s;
        }
        .one .boy.load{
            /* transform: translateX(0); */
            left:54%;
            opacity:1;
        }
        .one .boy img{
            height:65vh;
        }

        .one .tit_being{
            position: absolute;
            top:40%;
            left:52%;
            transform: translate(-50%,-50%);
            width:450px;
            height:300px;
            transition-delay: 3.5s;
        }
        .one .tit_being img{
            width:432px;

        }

        .one .tit_arts{
            position: absolute;
            top:70%;
            left:54%;
            transform: translate(-50%,-50%);
        }
        .one .tit_arts img{
            width:346px;
        }
        .one .p{
            position: absolute;
            top:84%;
            left:58%;
            opacity:0;
            transform: translate(-50%,-50%);
            transition: all 2s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition-delay: 7.5s;
        }
        .one .p.load{
            /* transform: translateX(0); */
            top:80%;
            opacity:1;
        }
        .one .p p{
            font-size: 28px;
            color:#D7CFC0;
        }
        /* section2-------------------*/
        .two .brown_ball{
            width:42%;
            padding-bottom:42%;
            border-radius: 50%;
            background-color:#D7CFC0;
            position: absolute;
            top:53%;
            left:77%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 2s cubic-bezier(0.56, 0.1, 0.34, 0.91);
        }
        .two .brown_ball.load{
            left:75%;
            opacity:1;
        }
        .two .brown_ball::after{
            content: "";
            width:100%;
            padding-bottom:100%;
            border-radius: 50%;
            border:1px solid #CAAE81;
            position: absolute;
            top:47%;
            left:47%;
            transform: translate(-50%,-50%);
        }
        .two .red_square{
            width:0%;
            height:22%;
            background-color: #852B21;
            position: absolute;
            top:50%;
            left:0%;
            transform: translateY(-50%);
            transition: all .5s ease-in;
        }
        .two .red_square.load{
            width:75%;
        }
        .two .brown_long_square{
            width:0%;
            height:16%;
            background-color: #947C50;
            position: absolute;
            top:49%;
            right:0;
            transition: all .5s ease-in;
            /* transform: translateX(-50%); */
            transition-delay: .5s;
        }
        .two .brown_long_square.load{
            width:54%;
        }
        .two .lace{
            position: absolute;
            top:10%;
            left:68%;
            transform: translate(-50%,-50%);
            animation: lace 5s infinite linear;
            transition: all .5s ease-in;
        }
        .two .lace img{
            width:45vh;
        }
        .two .horse{
            position: absolute;
            top:50%;
            left:77%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 1s;
        }

        .two .horse.load{
            left:75%;
            opacity: 1;
        }
        .two .horse img{
            width:78vh;
        }
        .two .two_p{
            position: absolute;
            top:34%;
            left:32%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 1.3s;
        }
        .two .two_p.load{
            /* transform: translateX(0); */
            top:32%;
            opacity:1;
        }
        .two .two_p p{
            color:#832B21;
            font-size: 20px;
            line-height: 30px;
        }
        .two .goshop{
            position: absolute;
            top:70%;
            left:64%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 1.3s;
        }
        .two .goshop.load{
            /* transform: translateX(0); */
            top:67%;
            opacity:1;
        }
        .two .goshop img{
            width:55%;
        }
        /* section3-------------------*/
        .three .three_tit, .three .three_cont,
        .three .three_btn, .three .three_btn_2{
            position: absolute;
        }
        .three .three_tit{
            top:29%;
            left:72%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .7s ease-in;
        }
        .three .three_tit.load{
            top:28%;
            opacity: 1;
        }
        .three .three_cont{
            top:51%;
            left:80%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .5s ease-in;
            transition-delay: .7s;
        }
        .three .three_cont.load{
            top:50%;
            opacity: 1;
        }
        .three .three_btn{
            top:71%;
            left:85%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .7s ease-in;
            transition-delay: .8s;
        }
        .three .three_btn.load{
            top:70%;
            opacity: 1;
        }
        .three .three_btn_2{
            top:81%;
            left:86%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .7s ease-in;
            transition-delay: 1.2s;
        }
        .three .three_btn_2.load{
            top:80%;
            opacity: 1;
        }
        .three .three_tit p, .three .three_cont p,
        .three .three_btn p, .three .three_btn_2 p{
            font-size: 20px;
            line-height: 28px;
            letter-spacing: 3px;
            color:#852B21;
        }
        .three .three_tit p{
            font-size: 28px;
            line-height: 35px;
        }
        .three .three_cont p{
            color:#000;
            font-size: 16px;
            width:50vh;
        }
        .three .three_btn_2 p{
            color:#947C50;
        }
        /* .three .p:nth-child(2) p{
          color:#000;
        } */
        .three .brown_ball{
            width:42%;
            padding-bottom:42%;
            border-radius: 50%;
            background-color:#D7CFC0;
            position: absolute;
            top:53%;
            left:30%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .5s ease-in;
        }
        .three .brown_ball.load{
            left:32%;
            opacity: 1;
        }
        .three .brown_ball::after{
            content: "";
            width:100%;
            padding-bottom:100%;
            border-radius: 50%;
            border:1px solid #CAAE81;
            position: absolute;
            top:47%;
            left:54%;
            transform: translate(-50%,-50%);
        }
        .three .red_square{
            width:0;
            height:15%;
            background-color: #852B21;
            position: absolute;
            top:45%;
            left:0%;
            transform: translateY(-50%);
            transition: all .5s ease-in;
        }
        .three .red_square.load{
            width:45%;
        }
        .three .brown_long_square{
            width:0%;
            height:15%;
            background-color: #947C50;
            position: absolute;
            top:54%;
            left:42%;
            transform: translate(-50%,-50%);
            transition: all .7s ease-in;
            transition-delay: .4s;
        }
        .three .brown_long_square.load{
            width:35%;
        }
        .three .new_event{
            position: absolute;
            top:15%;
            left:14%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .4s ease-in;
        }
        .three .new_event.load{
            left:15%;
            opacity: 1;
        }
        .three .new_event img{
            width:30vh;
        }
        .three .new_event2{
            position: absolute;
            top:30%;
            left:44%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
        }
        .three .new_event2.load{
            opacity: 1;
            left:45%;
        }
        .three .new_event2 img{
            width:50vh;
        }
        .three .new_event_bar_table{
            position: absolute;
            left:1%;
            bottom:-1%;
            opacity: 0;
            transition: all 1s ease-in;
            transition-delay: 1.2s;
        }
        .three .new_event_bar_table.load{
            left:2%;
            bottom:0%;
            opacity: 1;
        }
        .three .new_event_bar_table img{
            width:85vh;
        }
        .three .new_event3{
            position: absolute;
            top:78%;
            left:66%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 3s;
        }
        .three .new_event3.load{
            left:67%;
            opacity: 1;
        }
        .three .new_event3 img{
            width:30vh;
        }
        .three .new_event4{
            position: absolute;
            top:75%;
            left:56%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 2.5s;
        }
        .three .new_event4.load{
            left:57%;
            opacity: 1;
        }
        .three .new_event4 img{
            width:40vh;
        }
        /* section4-------------------*/
        .four .brown_big_square{
            width:0%;
            height:62%;
            background-color: #D9D1C2 ;
            position: absolute;
            top:55%;
            left:50%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .5s ease-in;
            transition-delay: .7s;
        }
        .four .brown_big_square.load{
            opacity: 1;
            width:80%;
        }
        .four .white_frame{
            width:78%;
            height:58%;
            border:1px solid #fff;
            position: absolute;
            top:55%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .four .red_big_ball{
            width:23%;
            padding-bottom:23%;
            background-color: #852B21;
            border-radius: 50%;
            position: absolute;
            top:-66%;
            left:16%;
            transform: translate(-50%, -50%);
            transition: all .7s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }
        .four .red_big_ball.load{
            top:66%;
            animation: bounce;
            animation-delay: 1s;
        }
        .four .borwn_square{
            width:16%;
            padding-bottom:16%;
            background-color: #947C50;
            position: absolute;
            transform: translateX(150vw);
            transition: all .7s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            top:63%;
            left:20%;
        }
        .four .borwn_square.load{
            transform: translateX(0);
        }
        .four .david{
            position: absolute;
            top:38%;
            left:28%;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 1s ease-in;
            transition-delay: 1.6s;
        }
        .four .david.load{
            left:29%;
            opacity: 1;
        }
        .four .david img{
            width:80%;
        }
        .four .four_frame{
            position: absolute;
            top:41%;
            left:9.8%;
            opacity: 0;
            transition: all 1s ease-in;
            transition-delay: .6s;
        }
        .four .four_frame.load{
            left:10.8%;
            opacity: 1;
        }
        .four .four_frame img{
            width:23%;
        }
        .four .drink_underline{
            width:0%;
            height:1.3px;
            background-color: #947C50;
            position: absolute;
            top:19%;
            right:10%;
            transition: all .6s ease-in;
            /* transition-delay: 2s; */
        }
        .four .drink_underline.load{
            width:40%;
        }
        .four .drink1{
            position: absolute;
            top:2.7%;
            left:72%;
            opacity: 0;
            transition: all .7s ease-in;
            transition-delay: 1s;
        }
        .four .drink1.load{
            left:71%;
            opacity: 1;
        }
        .four .drink2{
            position: absolute;
            top:2.7%;
            left:78%;
            opacity: 0;
            transition: all .7s ease-in;
            transition-delay: 1.2s;
        }
        .four .drink2.load{
            left:77%;
            opacity: 1;
        }
        .four .drink3{
            position: absolute;
            top:4.7%;
            left:84%;
            opacity: 0;
            transition: all .7s ease-in;
            transition-delay: 1.4s;
        }
        .four .drink3.load{
            opacity: 1;
            left:83%;
        }
        .four .drink img{
            width:20%;

        }
        .four p{
            line-height: 28px;
            letter-spacing: 3px;
        }
        .four .four_tit p{
            font-size: 28px;
            color:#852B21;
        }
        .four .four_cont p{
            color:#000;
            font-size: 16px;
            width:84vh;
        }
        .four .four_tit{
            position: absolute;
            top:38%;
            left:55%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 2s;
        }
        .four .four_tit.load{
            top:37%;
            opacity: 1;
        }
        .four .four_cont{
            position: absolute;
            top:56%;
            left:64%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 2s;
        }
        .four .four_cont.load{
            top:55%;
            opacity: 1;
        }
        .four .four_bar{
            width:160px;
            height:160px;
            overflow: hidden;
            border-radius: 12px;
            position: absolute;
            bottom:3%;
        }
        .four .four_bar1{
            right:-100%;
            transition: all 1s ease-in;
            transition-delay: 3.1s;
        }
        .four .four_bar1.load{
            right:7%;
        }
        .four .four_bar2{
            right:-100%;
            transition: all 1s ease-in;
            transition-delay: 2.8s;
        }
        .four .four_bar2.load{
            right:19%;
        }
        .four .four_bar3{
            right:-100%;
            transition: all 1s ease-in;
            transition-delay: 2.5s;
        }
        .four .four_bar3.load{
            right:31%;
        }
        /* section5-------------------*/
        .five .brown_ball{
            width:22%;
            padding-bottom:22%;
            border-radius: 50%;
            background-color:#D7CFC0;
            position: absolute;
            top:40%;
            left:29%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 1s;
        }
        .five .brown_ball.load{
            left:30%;
            opacity: 1;
        }
        .five .brown_ball::after{
            content: "";
            width:100%;
            padding-bottom:100%;
            border-radius: 50%;
            border:1px solid #CAAE81;
            position: absolute;
            top:47%;
            left:47%;
            transform: translate(-50%,-50%);
        }
        .five .red_square{
            width:0%;
            height:22%;
            background-color: #852B21;
            position: absolute;
            top:49%;
            right:0%;
            transform: translateY(-50%);
            transition: all .8s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition-delay: .8s;
        }
        .five .red_square.load{
            width:72%;
        }
        .five .brown_top_square{
            width:0%;
            height:16%;
            background-color: #947C50;
            position: absolute;
            top:48%;
            left:0;
            transition: all .8s cubic-bezier(0.56, 0.1, 0.34, 0.91);
        }
        .five .brown_top_square.load{
            width:54%;
        }
        .five .man{
            position: absolute;
            top:-30%;
            left:40%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all .8s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition-delay: 1.8s;
        }
        .five .man.load{
            top:30%;
            opacity: 1;
        }
        .five .man img{
            width:45%;
        }
        .five p{
            line-height: 28px;
            letter-spacing: 3px;
        }
        .five .five_p p{
            color:#D9D1C2;
            font-size: 20px;
            width:84vh;
        }

        .five .five_p{
            position: absolute;
            top:56%;
            left:95%;
            transform: translate(-50%,-50%);
            opacity: 0;
            transition: all 1s ease-in;
            transition-delay: 2.8s;
        }
        .five .five_p.load{
            opacity: 1;
            top:55%;
        }
        .five .paint_frame{
            width:15%;
            height:38%;
            border:1px solid #947C50;
            position: absolute;
            top:26%;
            left:50%;
            opacity: 0;
            transform: translate(-50%,-50%);
            background-color: #fff;
            transition: all 1.2s ease;
            transition-delay: 2.5s;
        }
        .five .paint_frame.load{
            top:25%;
            opacity: 1;
        }
        .five .paint img{
            width:0%;
            position: absolute;
            top:25%;
            left:50%;
            transform: translate(-50%,-50%);
            transition: all 1s ease;
            transition-delay: 2.5s;
        }
        .five .paint img.load{
            width:11%;

        }
        .five .paint_frame_2{
            left:67.5%;
            transition-delay: 3s;
        }
        .five .paint_2 img{
            left:67.5%;
            transition-delay: 3.5s;
        }
        .five .paint_frame_3{
            left:85%;
            transition-delay: 4s;
        }
        .five .paint_3 img{
            left:85%;
            transition-delay: 4.5s;
        }
        .five .paint_frame_big{
            width:28%;
            height:29%;
            border:1px solid #947C50;
            position: absolute;
            top:71%;
            left:20%;
            opacity: 0;
            transform: translate(-50%,-50%);
            background-color: #fff;
            transition: all 1.2s ease-in;
            transition-delay: 2s;
        }
        .five .paint_frame_big.load{
            opacity: 1;
            top:70%;
        }
        .five .paint_frame_big::after{
            content:"";
            width:100%;
            height:100%;
            border:1px solid #D9D1C2;
            position: absolute;
            top:42%;
            left:54%;
            transform: translate(-50%,-50%);
        }

        .five .paint_big{
            width:20%;
            height:20%;
            /* background-color: red; */
            position: absolute;
            top:70%;
            left:20%;
            opacity: 0;
            transform: translate(-50%,-50%);
            overflow: hidden;
            transition: all .4s ease-in;
            transition-delay: 2.5s;
        }
        .five .paint_big.load{
            top:69%;
            opacity: 1;
        }

        .five .paint_big img{

            width:100%;
        }
        .five .five_p_2 p{
            color:#947C50;
            font-size: 20px;
            line-height: 22px;
            background: #fff;
        }

        .five .five_p_2{
            position: absolute;
            top:83%;
            left:28%;
            opacity: 0;
            transform: translate(-50%,-50%);
            transition: all 1s ease-in;
            transition-delay: 3s;
        }
        .five .five_p_2.load{
            top:82%;
            opacity: 1;
        }
        @media screen and (max-width: 420px){
            /*----home------*/
            .phone_none{
                display:none;
            }
            .com_none{
                display:block;
            }
            #fp-nav ul, .fp-slidesNav ul {
                display: none;
            }
            .home_wrap{
                position: fixed;
            }
            .phone_none{
                display: none;
            }
            /* section1--------*/
            .one .brown_square.load{
                width:65%;
                height:30%;
                top:37%;
                left:42%;
                transform: translate(-50%,-50%) rotate(-7deg);
            }
            .one .red_ball.load{
                width:60%;
                padding-bottom:60%;
                right:5%;
                top:35%
            }
            .one .girl img{
                height:65vh;
            }
            .one .girl.load{
                top:38%;
                left:35%;
            }

            .one .boy img{
                height:45vh;
            }
            .one .boy.load{
                left: 64%;
                top: 16%;
            }
            .one .tit_being img {
                width: 140%;
            }
            .one .tit_being {
                top: 36%;
                left: 70%;
                width: 400px;
                z-index: 1;
            }
            .one .tit_arts img {
                width: 120%;

            }
            .one .tit_arts {
                left: 59%;
                top:61%;
            }
            .one .p.load {
                width: 100%;
                top: 85%;
                left: 70%;
            }
            .one .p p{
                font-size: 24px;
                color:#333;
            }
            /* section2--------*/
            .two .brown_ball.load {
                width: 90%;
                padding-bottom: 90%;
                top: 68%;
                left:64%;
            }
            .two .horse img{
                width:40vh;
            }
            .two .horse.load {
                top: 70%;
                left: 64%;
            }
            .two .red_square.load {
                height: 12%;
                top: 70%;
            }
            .two .brown_long_square.load{
                width: 86%;
                height: 10%;
                top: 70%;
            }
            .two .lace {
                top: 42%;
                left: 47%;
            }
            .two .lace img {
                width: 30vh;
            }
            .two .goshop img {
                width: 70%;
            }
            .two .goshop.load {
                top: 94%;
                left: 36%;
            }
            .two .two_p.load {
                top: 22%;
                left: 10%;
                transform: translate(0,0);
            }
            .two .two_p p {
                font-size: 20px;
                width: 70%;
            }
            /* section3--------*/
            .three .new_event.load {
                top: 6%;
                left: 15%;
            }
            .three .new_event img {
                width: 14vh;
            }
            .three .three_tit.load {
                top: 4%;
                left: 31%;
                transform: translate(0,0);
            }
            .three .three_tit p {
                font-size: 20px;
            }
            .three .three_cont p {
                width: 40vh;
            }
            .three .three_cont.load {
                top: 36%;
                left: 45%;
            }
            .three .new_event_bar_table.load {
                bottom: -4%;
            }
            .three .new_event_bar_table img {
                width: 35vh;
            }
            .three .new_event4 img {
                width: 23vh;
            }
            .three .new_event4 img {
                width: 18vh;
            }
            .three .new_event4.load {
                top: 70%;
                left: 17%;
            }
            .three .new_event3 img {
                width: 14vh;
            }
            .three .new_event3.load {
                top: 74%;
                left: 38%;
            }
            .three .brown_ball.load {
                width: 62%;
                padding-bottom: 62%;
                top: 91%;
                left: 53%;
            }
            .three .red_square.load {
                width: 70%;
                height: 9%;
                top: 84%;
            }
            .three .brown_long_square.load {
                width: 70%;
                height: 8%;
                top: 89%;
                left: 67%;
            }
            .three .three_btn.load {
                top: 62%;
                left: 40%;
                transform: translate(0,0);
            }
            .three .three_btn p, .three .three_btn_2 p {
                font-size: 18px;
            }
            .three .three_btn_2.load {
                top: 67%;
                left: 51%;
                transform: translate(0,0);
            }
            .three .new_event2 img {
                width: 25vh;
            }
            .three .new_event2.load {
                top: -89%;
                left: 20%;
            }
            /* section4--------*/
            .four .four_tit p {
                font-size: 20px;
                width: 75%;
            }
            .four .four_tit.load {
                top: 3%;
                left: 5%;
                transform: translate(0,0);
            }
            .four .brown_big_square.load {
                width: 77%;
                height: 60%;
                top: 15%;
                left: 5%;
                transform: translate(0,0);
            }
            .four .white_frame {
                width: 72%;
                height: 58%;
                top: 16%;
                left: 7%;
                transform: translate(0,0);
            }
            .four .four_cont.load {
                top: 18%;
                left: 11%;
                transform: translate(0,0);
            }
            .four .four_cont p {
                width: 75%;
            }
            .four .four_bar3.load {
                right: 18%;
                top: 38%;
            }
            .four .borwn_square.load {
                width: 22%;
                padding-bottom: 22%;
                top: 88%;
                left: 22%;
            }
            .four .red_big_ball.load {
                width: 32%;
                padding-bottom: 32%;
                top: 87%;
                left: 16%;
            }
            .four .david.load {
                top: 74%;
                left: 40%;
            }
            .four .david img {
                width: 60%;
            }
            .four .four_frame.load {
                top: 78%;
                left: 9%;
            }
            .four .four_frame img {
                width: 28%;
            }
            .four .four_bar1.load {
                right: 15%;
                top: 42%;
            }
            .four .drink3.load {
                top: 4%;
                left: 73%;
            }
            .four .drink img {
                width: 35%;
            }
            /* section5--------*/
            .five .paint_frame_big.load {
                width: 69%;
                height: 22%;
                border: 1px solid #D9D1C2;
                top: 3%;
                left: 15%;
                transform: translate(0,0);
                background-color: transparent;
            }
            .five .paint_frame_big::after{
                display: none;
            }
            .five .paint_big.load {
                width: 54%;
                height: 16%;
                top: 13%;
                left: 53%;
            }
            .five .brown_top_square.load {
                width: 100%;
                height: 9%;
                top: 23%;
                transform: translateX(0%);
            }
            .five .red_square.load {
                width: 72%;
                height: 9%;
                top: 31%;
                z-index: 1;
            }
            .five .five_p_2.load {
                top: 28%;
                left: 48%;
                transform: translate(0,0);
                z-index: 1;
            }
            .five .five_p_2 p {
                color: #D9D1C2;
                font-size: 20px;
                line-height: 22px;
                background:transparent;
            }
            .five .brown_ball.load {
                width: 90%;
                padding-bottom: 90%;
                top: 85%;
                left: 20%;
            }
            .five .man.load {
                top: 85%;
                left: 30%;
            }
            .five .man img {
                width: 75%;
            }
            .five .five_p.load {
                top: 40%;
                left: 80%;
            }
            .five .five_p p {
                color: #852B21;
                font-size: 18px;
            }
            .five .paint_frame.load {
                width: 45%;
                height: 20%;
                top: 57%;
                left: 60%;
            }
            .five .paint_frame_2.load {
                left: 60%;
                top: 80%;
            }
            .five .paint img.load {
                width: 25%;
                top: 57%;
                left: 63%;
            }
            .five .paint_2 img.load{
                left: 63%;
                top: 80%;
            }
        }
    </style>
</head>