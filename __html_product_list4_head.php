<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; " />
    <script src="./js/jquery-3.2.1.js"></script>
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
            margin-top: 10px;
        }
        .store_nav li{
            margin-left: 25px;
        }
        .store_nav li a{
            line-height: 70px;
            display: block;
        }
        .store_nav li:hover a{
            transform: translateY(-3px);
            /*color: #000;*/
            /*background-color: #eee5d4;*/
        }

        .sub_store_nav{
            flex-direction: column;
            /*flex-wrap: wrap;*/
            max-height: 0;
            overflow: hidden;
            margin-top: 5px;
        }
        .sub_store_nav li{
            padding: 0;
            margin: 0;
            margin-top: 1px;
            /*background-color: #cccccc;*/
        }
        .sub_store_nav a{
            display: block;
            line-height: 30px;
            text-align: center;

        }
        .store_nav li:hover .sub_store_nav{
            max-height: 300px;
            transition: 0;
        }
        .store_nav li a.active{
            color:#852B21 ;
        }
        @media screen and (max-width:420px) {
            header{
                height: 40px;
                /*background-color: #96c6e7;*/
            }
            .store_nav{
                display: none;
            }
            header .logo img{
                height:35px;
                object-fit: contain;
                margin:10px;
            }
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
        @media screen and (max-width:420px) {
            .banner{
                top: 45px;
            }
            .store_nav{
                display: none;
            }
            .banner_left{
                height: 50px;
                /*background-color: #852B21;*/
                /*position: relative;*/
                bottom: 45px;
                /*left: 0;*/
            }
            .banner_right{
                width: 60%;
                height: 50px;
                /*background-color: #947C50;*/
                /*position: absolute;*/
                bottom: 40px;
                right: 0;
            }
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

        @media screen and (max-width:420px) {
            .container{
                margin-top: 60px;
            }
            /*.temp{*/
                /*display: none;*/
            /*}*/
        }
        .temp{
            width: 97vw;
            box-sizing: border-box;
            padding-bottom: 10px;
            float: left;
            /*transition: 1s;*/
        }
        .temp_bottom{
            width: 50px;
            height: 150px;
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
        @media screen and (max-width:420px){
            .breadcrumbs{
                margin-left: 10px;
                display: none;
            }
            .temp_bottom{
                height: 130px;
            }
        }
        /* filter------------------------------------------ */
        .filter{
            height:70px;
            /*background-color: #ffe8a1;*/
            margin-left:65px;
            margin-top:15px;
        }
        .fliter ul li {
            line-height: 30px;
        }
        .school label{
            font-family: jf03;
            margin-right: 5px;
            cursor: pointer;
            padding: 5px 5px;
            color: #CCC4B5;
        }
        .filter input[type="checkbox"] {
            display: none;
            /*margin-right: 25px;*/
        }
        .school input[type="checkbox"]:checked + label {
            /*background-color: #CCC4B5;*/
            color: #947c50;
            /*text-decoration: underline;*/
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
            line-height: 24px;
        }
        .color_filter{
            margin-top: 10px;
        }
        .color_filter input[type="checkbox"]:checked + label {
            /*background-color: #CCC4B5;*/
            border: 2px solid #947c50;
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
        /*.price_fliter{*/
        /*padding: 3px 0;*/
        /*}*/
        @media screen and (max-width:420px){
            .filter{
                margin-left: 10px;
                margin-right: 47px;
                height: 100px;
            }
            .box{
                width:20px;
                height:20px;
                margin-left:5px;
                cursor: pointer;
            }
            .box a{
                width:20px;
                height:20px;
                display: block;
            }
            .school label{
             font-size: 14px;
                letter-spacing: 1px;
            }
            .color_filter{
                margin-top: 5px;
            }

        }
        /* productlist------------------------------------------ */

        .productlist{
            margin-left:135px;
            /*background-color: rgba(255,255,255,.7);*/

        }
        .product{
            cursor: pointer;
            width:260px;
            margin-right:60px;
            margin-bottom:70px;
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
        .pro{
            margin:67.5px auto;
            width:200px;
            height:200px;
            margin-bottom:5px;
            overflow: hidden;
        }
        .pro img{
            width:200px;
            height:200px;
            object-fit: cover;
        }

        .name{
            color: white;
            width:260px;
            height:25px;
            background-image:  url("imgs/title01.png");
            margin-top:10px;
            margin-bottom:8px;
            background-size: cover;
            line-height: 25px;
        }
        /*.product:hover .name{*/
        /*filter: brightness(130%);*/
        /*transform: translateY(-3px);*/
        /*}*/

        @media screen and (max-width:420px){
            .productlist{
                margin-left: 25px;
            }

            .product{
                width:130px;
                margin-right:20px;
                margin-bottom:1px;
            }
            .pro{
                margin:15px auto;
                width:130px;
                height:130px;
                margin-bottom:5px;
                overflow: hidden;
            }
            .pro img{
                width:120px;
                height:120px;
                object-fit: cover;
            }
            .card{
                height:120px;
                background-color: #fff;
                border: none;
                position: relative;
            }
            .name{
                /*color: #947c50;*/
                color: #fff;
                width:130px;
                height:auto;
                background-image: none;
                /*background-color: rgba(255,255,255,1) ;*/
                background-color: #947c50 ;
                background-size: contain;
                padding: 5px;
                margin-top:10px;
                margin-bottom:8px;
                margin-left: -5px;
                /*background-size: cover;*/
                line-height: 18px;
                font-size: 14px;
                font-family: jf03;
            }

        }
        .blur{
            filter: blur(3px);
            transition: all .5s;
        }
        .opacity{
            opacity: 1;
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
        .love_btn{
            position: absolute;
            top: 5px;
            right: 5px;
            width: 40px;
            height: 40px;
            cursor: pointer;
        }
        .love_btn:hover{
            filter: brightness(150%);
        }
        @media screen and (max-width:420px){
            .info{
                width:150px;
                position: relative;
            }
            .info ul{
                /*padding-top: 5px;*/
            }
            .info ul li{
                /*margin: 0 5px;*/
                padding: 5px;
            }
            .info ul li:first-child{
                display: none;
            }
            .love_btn{
                position: relative;
                top: -25px;
                left: 100px;
                /*right: 25px;*/
                width: 40px;
                height: 40px;
                cursor: pointer;
                display: block;
                width: 25px;
                height: 25px;
            }
            .bag_btn .img{
                /*width: 20px;*/
                /*height: 20px;*/
                object-fit: cover;
            }
        }
        /*----------------------------------detail--------------------------------------*/
        .detail{
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 30;
            top:0;
            left: 0;
            background-color: rgba(0,0,0,.9);
            overflow: auto;
            display: none;
        }
        #closeBtn{
            width: 35px;
            height: 35px;
            display: block;
            background: url("./imgs/closeBtn.png");
            position: fixed;
            top: 30px;
            right: 80px;
            cursor: pointer;
        }
        #closeBtn:hover{
            transform: translateY(-3px);
            transform: scale(1.2);
        }
        /* container------------------------------------------ */
        /*.container{*/
        /*width:100%;*/

        /*!* display: flex;*/
        /*justify-content: space-between; *!*/

        /*}*/
        .d_contain{
            max-width: 1580px;
            margin:80px auto;
            /*width:100%;*/
            /*background: #603813;*/
            padding-left:150px;

            /*left: 50%;*/
            /*top: 50%;*/
            /*transform: translateX(-50%) translateY(-50%);*/
        }
        @media screen and (max-width:420px){
            .detail{
                overflow-y: scroll;
                -webkit-overflow-scrolling: touch;
            }
            .d_contain {
                padding-left: 25px;
                margin-top:15px;
                /*margin-left: ;*/
                flex-direction: column-reverse;
            }
            #closeBtn{
                top: 10px;
                right: 55px;
            }
            hr{
                display: none;
            }
        }

        /* pro----------------------------------- */
        .detail_intro{
            position: fixed;
            /* height:100vh; */
            /* margin-left:20%; */
            /* margin-top:65px;  */
            width:450px;
            overflow: hidden;
        }
        .detail_intro ul li{
            line-height: 24px;
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
        .detail hr{
            height: 0.5px;
            border:none;
            border-top:0.5px solid #CCC4B5;
        }
        .detail .text{
            width:450px;
            height:230px;
            overflow: auto;
            /* border:1px solid rgb(173, 173, 173); */
            border-right:none;
            /* padding: 10px; */
            /* border-radius: 5px; */
            margin-top:30px;
        }
        .detail .text p{
            font-size: 14px;
            line-height: 26px;
            letter-spacing: 1.1px;
        }

        .detail .share{
            /* margin-top: 10px; */
        }
        .detail .share a{
            color:rgb(107, 106, 106);
        }
        .detail select{
            margin-top: 30px;
            width:120px;

        }

        .detail .button{
            background-color: #947c50;
            margin-top:20px;
            border:1px solid transparent;
        }
        .detail .button:hover{
            background-color: white;
            border:1px solid #947c50;
        }
        .detail .button a{
            padding:10px 45px;
            color: white;
            /*display: block;*/
        }
        .detail .button a:hover{
            color: #947c50;
        }
        @media screen and (max-width:420px){
            .detail_intro{
                position: static;
            }

            .detail_intro h3{
                font-size: 24px;
                line-height: 30px;
                /*display: inline-block;*/
            }
            .detail_intro h4{
                font-size: 16px;
                color: #CCC4B5;
                line-height: 20px;
                margin-bottom: 10px;
                /*display: inline-block;*/
            }
            .detail_intro h5{
                font-size: 16px;
                color: #947c50;
                line-height: 20px;
                margin-bottom: 10px;
                /*display: inline-block;*/
            }
            .detail_intro ul li{
                line-height: 22px;
            }
            .detail .text {
                width:300px;
                height:350px;
                /*padding-right: 15px;*/
                margin-top:15px ;
                margin-bottom: 100px;
            }
            .shop_btn_mobile{
                /*width:100%;*/
                position: fixed;
                bottom: 0;
                left: 0;
                background-color: rgba(0,0,0,.8);
            }
            .detail .button{
                width: 157px;
                margin-left:5px;

            }
            .detail .button a{
                padding:5px;
                display: block;
                width: 100%;
                text-align: center;
            }
            .detail .share{
                margin-top: 5px;
                width: 320px;
                overflow: hidden;
            }
            .detail select{
                margin-top: 15px;
            }
        }

        /* pic----------------------------------- */
        .detail_pic{
            position: relative;
            left:550px;
            /*top: -50px;*/
            /*background-color: #96c6e7;*/
            /* margin:65px auto;    */
        }
        .detail_pic ul li{
            width:750px;
            height:650px;
            overflow: hidden;
            margin-bottom:20px;
            /*background-color: #96c6e7;*/

        }
        .detail_pic img{
            width:750px;
            height:650px;
            /* min-width: 400px; */
            object-fit: contain;
        }
        .detail_pic_mobile{
            display: none;
        }
        @media screen and (max-width:420px){
            /*.detail_pic{*/
            /*display: none;*/
            /*}*/
            /*.detail_pic_mobile{*/
            /*display: block;*/
            /*}*/
            /*.detail_pic_mobile li{*/
            /*width: 328px;*/
            /*}*/
            /*.detail_pic_mobile img{*/
            /*width: 100%;*/
            /*object-fit: cover;*/
            /*}*/
            .detail_pic{
                position: static;
                left:0;
            }

            .detail_pic ul li{
                width:288px;
                height:308px;
            }

            .detail_pic ul li img{
                width:288px;
                height:328px;
                /* min-width: 400px; */
                object-fit: contain;
            }
        }


        /*-------------------pagination-----------------------------------*/
        .pagination{
            width: 100%;
            padding: 20px 0 50px;
            justify-content: center;
        }
        .page{
            /*margin-left: 44%;*/
            /*max-width: 300px;*/
            /*margin: 0 auto;*/
            /*background-color: #96c6e7;*/
            /*width: 100%;*/
            justify-content: center;
        }
        /*.page li{*/
        /*width: 30px;*/
        /*height: 30px;*/
        /*border: 1px solid #947C50;*/
        /*color: #947C50;*/
        /*border-radius: 50%;*/
        /*margin-right: 5px;*/
        /*line-height: 29px;*/
        /*text-align: center;*/
        /*}*/
        .page li{
            width: 30px;
            height: 30px;
            border: 1px solid #947C50;
            /*color: #947C50;*/
            border-radius: 50%;
            margin-right: 5px;
            line-height: 29px;
            text-align: center;
            letter-spacing: 0;
        }
        .page li:hover{
            transform: translateY(-3px);
            /*box-shadow:0 5px 2px #ccc;*/
            border: 1px solid #852b21;
        }
        .page li:hover a{
            color: #852b21;
            text-align: center;
            letter-spacing: 0;
        }
        .page li.active{
            background-color: #eee5d4;
        }

        .page a{
            line-height: 30px;
            display: block;
            text-align: center;
            letter-spacing: 0;
        }
        @media screen and (max-width:420px){
            .pagination{
                /*width: 100%;*/
                padding: 10px 0;
            }
            .page{
                margin-left: -30px;
            }
            .page li:hover{
                transform: translateY(0);
                /*box-shadow:0 5px 2px #ccc;*/
                /*border: 1px solid #852b21;*/
            }
            .page li:hover a{
                /*color: #852b21;*/
                text-align: center;
                letter-spacing: 0;
            }
        }

        /*-------------------------------------------canvas----------------------------------*/
        .place_check{
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 40;
            top:0;
            left: 0;
            /*background-color: rgba(0,0,0,.9);*/
            background-color: #CCC4B5;
            overflow: hiddFen;
            display: none;
        }
        #closeBtn2{
            width: 35px;
            height: 35px;
            display: block;
            background: url("./imgs/closeBtn.png");
            position: fixed;
            top: 30px;
            right: 80px;
            cursor: pointer;
        }
        #closeBtn2:hover{
            transform: translateY(-3px);
            transform: scale(1.2);
        }
        .placeBtn{
            cursor: pointer;
        }


    </style>
</head>