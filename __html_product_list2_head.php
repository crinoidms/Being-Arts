<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <style>
        @font-face {
            font-family: jf03 ;
            src:url(./lib/font/jf-jinxuan-fresh2.2-book.otf);
        }
        /*----------------------------------header--------------------------------*/
        header{
            width: 100%;
            height: 70px;
            background-color: #fff;
            position: fixed;
            z-index: 5;
        }
        header .logo img{
            width:150px;
            margin:20px;
        }
        .store_nav{
            margin-right: 80px;
            margin-top: 35px;
        }
        .store_nav li{
            margin-left: 25px;
        }
        /*.store_nav li a{*/
        /*line-height: 70px;*/
        /*}*/
        .store_nav li:hover{
            transform: translateY(-3px);
        }
        /*----------------------------------banner--------------------------------*/
        .banner{
            position: fixed;
            width: 100%;
            top: 70px;
        }
        .banner img{
            width: 100%;
            position: relative;
            /*top: 70px;*/
            z-index: 1;
        }
        .banner_left{
            width: 45%;
            height: 50px;
            background-color: #852B21;
            position: relative;
            bottom: 35px;
            left: 0;
        }
        .banner_right{
            width: 60%;
            height: 50px;
            background-color: #947C50;
            position: absolute;
            bottom: 20px;
            right: 0;
        }
        /*------------------breadcrumbs-----------------------------*/
        .container{
            position: relative;
            z-index: 3;
            margin-top: 100px;
            background-color: rgba(255,255,255,.7);

            /*width: 100vw;*/
            /*height: 300vh;*/
        }
        .sixteen-nine {
            position: relative;
        }
        .sixteen-nine:before {
            display: block;
            content: "";
            width: 100%;
            padding-top: 28%;
        }
        .sixteen-nine > .temp2 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        /*.temp2{*/
        /*width: 90vw;*/
        /*height: 535px;*/
        /*}*/
        .temp{
            width: 97vw;
            box-sizing: border-box;
            padding-bottom: 10px;
            float: left;
            /*transition: 1s;*/
        }
        .temp_bottom{
            width: 50px;
            height: 200px;
            /*background-color: #947C50;*/
        }
        .breadcrumbs{
            padding-top: 10px;
            margin-left:65px;
            font-size: 14px;
            color: #CCC4B5;
            /*position: fixed;*/
            /*top:70px;*/
            /*left:55px;*/
            /*z-index: 2;*/
        }
        .breadcrumbs a{
            font-size: 14px;
            color: #CCC4B5 ;
        }
        .breadcrumbs a:hover{
            font-size: 14px;
            color: #b49c69;
        }
        /* filter------------------------------------------ */
        .filter{
            height:100px;
            /*background-color: #ffe8a1;*/
            margin-left:65px;
            margin-top:20px;
        }
        .fliter ul li {
            line-height: 30px;
        }
        .school li{
            margin-right:12px;
            position: relative;
            float: left;
        }
        .school li a{
            cursor: pointer;
        }
        .school li a:hover{
            color:#CCC4B5;
        }
        .right{
            margin-right:10px;
            font-size: 14px;
        }
        .painter{
            position: relative;
            padding: 10px 0;
        }
        .painter li{
            margin-right:12px;
            position: relative;
            float: left;
            /*opacity: 0;*/
        }
        .painter li a:hover{
            color:#603813;
        }
        .painterr.noshow{
            opacity: 0;
        }
        #painter1, #painter2, #painter3, #painter4{
            position: absolute;
        }
        .box{
            width:15px;
            height:15px;
            margin:4px;
            cursor: pointer;
        }
        .box a{
            width:15px;
            height:15px;
            display: block;
        }
        .box1{
            background-color: #e88181;
        }
        .box2{
            background-color:  #eec476;
        }
        .box3{
            background-color:  #f3e773;
        }
        .box4{
            background-color:#a2d084;
        }
        .box5{
            background-color: #96c6e7;
        }
        .box6{
            background-color: #a894b5;
        }
        .box7{
            background-color: #130d16;
        }
        .box8{
            background-color: #fff;
            border:1px solid #4d4d4d;
        }
        .price_fliter{
            padding: 3px 0;
        }
        /* productlist------------------------------------------ */

        .productlist{
            margin-left:135px;
        }
        .product{
            cursor: pointer;
            width:260px;
            margin-right:60px;
            margin-top:50px;
        }
        .card{
            height:335px;
            background-color: #fff;
            border: 1px #947c50 solid;
            position: relative;
        }
        .product:hover .card, .product:hover .name{
            filter: brightness(120%);
            transform: translateY(-3px);
        }
        /*.product:hover .name{*/
        /*filter: brightness(130%);*/
        /*transform: translateY(-3px);*/
        /*}*/

        .bag img, .favorite img{
            width:30px;
        }
        .pro img{
            width:200px;
            height:200px;
            object-fit: cover;
        }
        .pro{
            margin:67.5px auto;
            width:200px;
            height:200px;
            margin-bottom:5px;
            overflow: hidden;
        }

        .blur{
            filter: blur(3px);
            transition: all .5s;
        }

        .card:hover .bag{
            opacity: 1;

        }
        .bag:hover{
            filter: brightness(150%);
        }
        .card:hover .favorite{
            opacity: 1;

        }
        .favorite:hover{
            filter: brightness(150%);
        }

        .bag, .favorite{
            opacity: 0;
            width:260px;
            height:166.5px;
            text-align: center;
            position: absolute;
            top:0;
            z-index: 2;
            background-color:transparent;
            cursor: pointer;
        }
        .favorite{
            top:166.5px;
        }
        .bag img{
            margin-top:110px;
        }
        .favorite img{
            margin-top:20px;
        }
        /*li.name{*/
        /*width:260px;*/
        /*height:25px;*/
        /*background-image: url("imgs/title01.png");*/
        /*margin-top:10px;*/
        /*margin-bottom:8px;*/
        /*background-size: cover;*/
        /*line-height: 25px;*/
        /*}*/
        .name{
            color: white;
            width:260px;
            height:25px;
            background-image: url("imgs/title01.png");
            margin-top:10px;
            margin-bottom:8px;
            background-size: cover;
            line-height: 25px;
        }
        .opacity{
            opacity: 1;
        }
        .price p{
            font-size:14px;
            color:#852b21;
        }
        .info{
            width:260px;
            position: relative;
        }
        .info ul{
            /*padding-top: 5px;*/
        }
        .info ul li{
            /*margin: 0 5px;*/
            padding: 5px;
        }
        .bag_btn{
            position: absolute;
            top: 5px;
            right: 5px;
            width: 40px;
            height: 40px;
            cursor: pointer;
        }
        .bag_btn:hover{
            filter: brightness(150%);
        }
/*----------------------------------detail--------------------------------------*/
        .detail{
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 100;
            top:0px;
            left: 0;
            background-color: rgba(0,0,0,.8);
        }
        /* container------------------------------------------ */
        /*.container{*/
            /*width:100%;*/

            /*!* display: flex;*/
            /*justify-content: space-between; *!*/

        /*}*/
        .contain{
            margin:65px auto;
            width:100%;
            /* background: #603813; */
            padding-left:150px;
        }
        /* pro----------------------------------- */
        .detail_intro{
            position: fixed;
            /* height:100vh; */
            /* margin-left:20%; */
            /* margin-top:65px;  */
        }
        .detail_intro ul li{
            line-height: 30px;
        }
        .detail_intro h3{
            font-size: 32px;
            color: #CCC4B5;
            line-height: 50px;
        }
        .detail_intro h4{
            font-size: 22px;
            color: #CCC4B5;
        }
        .text{
            width:450px;
            height:230px;
            overflow: auto;
            /* border:1px solid rgb(173, 173, 173); */
            border-right:none;
            /* padding: 10px; */
            /* border-radius: 5px; */
            margin-top:30px;
        }
        .text p{
            font-size: 14px;
            line-height: 26px;
            letter-spacing: 1.1px;
        }

        .share{
            /* margin-top: 10px; */
        }
        .share a{
            color:rgb(107, 106, 106);
        }
        select{
            margin-top: 30px;
            width:120px;

        }

        .button{
            background-color: #947c50;
            margin-top:20px;
            border:1px solid transparent;
        }
        .button:hover{
            background-color: white;
            border:1px solid #947c50;
        }
        .button a{

            padding:10px 45px;
            color: white;
        }
        .button a:hover{
            color: #947c50;
        }
        /* pic----------------------------------- */
        .detail_pic{
            position: relative;
            left:600px;
            /*background-color: #96c6e7;*/
            /* margin:65px auto;    */
        }
        .detail_pic ul li{
            width:750px;
            height:750px;
            overflow: hidden;
            margin-bottom:20px;

        }
        .detail_pic img{
            width:650px;
            height:550px;
            /* min-width: 400px; */
            object-fit: contain;
        }


        /*-------------------pagination-----------------------------------*/
        .pagination{
            width: 100%;
            padding: 100px 0 50px;
        }
        .page{
            margin-left: 44%;
        }
        .page li{
            width: 30px;
            height: 30px;
            border: 1px solid #947C50;
            color: #947C50;
            border-radius: 50%;
            margin-right: 5px;
            line-height: 29px;
            text-align: center;
        }
    </style>
</head>