<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <title>空間比對新功能</title>
    <style>
        /* wrap------------------------------------------ */
        .wrap{
            width:100%;
            /* background: blue; */
        }
        .figure_logo{
            width:100%;
            z-index: 2;
        }
        a.logo img{
            width:150px;
            margin:20px;
        }
        figure.bg{
            height:100vh;
            width:326px;
            position: fixed;
            right:47px;

        }
        figure.bg img{
            width:326px;
            position: absolute;
            bottom:0;
        }

        /*----------------------------------header--------------------------------*/
        header{
            width: 100%;
            height: 70px;
            background-color: rgba(255,255,255,.8);
            position: fixed;
            z-index: 2;
        }
        header .logo img{
            width:150px;
            margin:20px;
        }
        .bar_nav{
            margin-right: 80px;
            margin-top: 35px;
        }
        .bar_nav li{
            margin-left: 25px;
        }
        .bar_nav li:hover{
            transform: translateY(-3px);
        }
        .bar_nav li a{
            color:#947C50;
        }
        .bar_nav li a:hover{
            color:#852B21;
        }

        /*----------------------------------banner--------------------------------*/
        .bar_banner{
            /* background: red; */
            width:calc(100% - 47px);
            margin-top: 70px;
            position: relative;
        }
        .bar_banner figure img{
            margin-left:50%;
            transform: translateX(-50%);
        }
        .bar_banner .banner_p{
            position: absolute;
            top:48%;
            left:20%;
            color:#fff;
            font-size: 28px;
            font-weight: 200;
            font-family: Arial, "jf03";
        }
        /*---------------------------------section2--------------------------------*/
        .section2{
            display: flex;
            width:100%;
            /* background: green; */
        }
        .section2 .left_p{
            flex:8;

        }
        .section2 .left_p p{
            width:70%;
            margin-top:20%;
            margin-left:15%;
            font-size: 18px;
            line-height: 28px;
            letter-spacing: 4px;
            text-align:center;
            color:#333;
        }

        .section2 .right_pic{
            flex:2;
            margin-top:-5%;
            position: relative;
            z-index: 1;
        }
        .section2 .right_pic img{
            margin:5px;
        }
        /*---------------------------------section2--------------------------------*/
        .section3{
            width:100%;
            height:100vh;
            background: url(imgs/bar/bar_3.jpg) 0 0 no-repeat;
            display: flex;
        }
        .section3 .tit{
            flex:6;

        }
        .section3 .p,.section3 .p2{
            flex:3;
        }
        .section3 .p p{
             color:#852B21;
             font-size: 20px;
             line-height: 40px;
             letter-spacing: 4px;
             /*width:70%;*/
             margin-top:65%;
             margin-left:20%;
         }
        .section3 .p2 p{
            color:#852B21;
            font-size: 20px;
            line-height: 40px;
            letter-spacing: 4px;
            /*width:70%;*/
            margin-top:65%;
        }
        /*---------------------------------section4--------------------------------*/
        .section4{
            width:calc(100% - 47px);
            display: flex;
        }
        .section4 .left_p{
            flex:4;
        }
        .section4 .left_p p{
            color:#333;
            font-size: 16px;
            line-height: 28px;
            letter-spacing: 4px;
            /* text-align: center; */
            width:70%;
            margin-top:20%;
            margin-left:15%;
        }
        .section4 .left_p p span{
            color:#852B21;
            font-size: 20px;
            line-height: 30px;
            letter-spacing: 4px;
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
    </style>
</head>