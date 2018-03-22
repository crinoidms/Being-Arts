<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="animate.css">
    <title>商品詳細介紹-Being Arts</title>
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
        .placeBtn{
            margin-left: 70px;
        }
        /* container flow------------------------------------------ */
        .container{
            width:60%;
            /* background: red; */
            margin:0 auto;

        }
        .flow{
            /* width:598px; */
            margin: 0 auto 50px 0;
            height:80px;
            /* background: green; */
            justify-content: center;
            align-items:center;
        }
        .square{
            width:165px;
            height:50px;
            border:1px solid #D9D1C2;
            background: #fff;
            position: relative;
            align-items:center;
            justify-content: center;
            cursor: pointer;
        }
        .square p{
            color:#967E53;
            font-size: 16px;
            /* position: absolute;
            top:44px;
            left:15px; */

        }
        .square:hover{
            background: #D9D1C2;
            height:58px;
        }
        .flow .active{
            background: #D9D1C2;
            height:58px;
        }

        .square i{
            font-size: 20px;
            color:#967E53;
            margin:15px;
        }
        .square span{
            color:#967E53;
        }
        /* container title------------------------------------------ */


        .tit p{
            font-size: 22px;
            margin-bottom:30px;
        }
        /* container table------------------------------------------ */

        .table{
            width:75%;
            /* background: rgb(238, 163, 163); */
        }
        li.right{
            text-align: right;
        }
        .table .contain{
            border-bottom:1px solid #947C50;
        }
        .contain li{
            line-height: 50px;

        }
        .pro_name{
            line-height: 15px;
        }
        /* .table ul.tit */
        .table .tit{
            background: #967E53;
            height:28px;
            width:100%;
        }
        .table .tit li{
            color:#fff;
        }

        .table .tit li.tit_1{
            flex:2;
        }
        .table .tit li.tit_2{
            flex:2;
        }
        .table .tit li.tit_3{
            flex:2;
        }
        .table .tit li.tit_4{
            flex:2;
        }
        .table .tit li.tit_5{
            flex:2;
        }
        .table li{
            padding:10px;
            box-sizing: border-box;
        }
        /* .table ul.contain */
        .table .contain{
            align-items: center;
            /* background-color: red; */
            width:100%;
        }
        .table .contain li img{
            width:100px;
        }
        .table .contain li.con_1{
            flex:2;
        }
        .table .contain li.con_2{
            flex:2;

        }
        .table .contain li.con_3{
            flex:2;
        }
        .table .contain li.con_4{
            flex:2;
        }
        .table .contain li.con_5{
            flex:2;
        }
        li i.fa-trash-alt{
            color:#947C50;
        }
        li i.fa-trash-alt:hover {
            color:#D9D1C2;
        }
        /* .table ul.count */
        .count{
            width:100%;

        }

        .titt{
            margin-left:10%;
            line-height: 34px;
        }
        .tittt{
            margin-left:2%;
            color:#947C50;
        }

        .love_btn{
            margin-left: 40px;
        }
        .pdetail_input{
            justify-content:space-between;
        }
        /* ------------------------------------------------------------------------------------ */
        /* ------------------------------------------------------------------------------------ */
        /* ------------------------------------------------------------------------------------ */

        @media screen and (max-width: 375px){
            figure.bg img{
                width:150px;
                right:0;
                bottom:60px;
            }
            a.logo img{
                margin:15px 10px;
            }
            .figure_logo{
                background-color: rgba(255,255,255,.8);
            }
            nav{
                height:100%;
                position: fixed;
            }
            .container{
                width:323px;
                margin: 0;
                /* height:100vh;   */
                /* position: fixed;  */
                position: absolute;
                z-index: 1;
            }
            .flow{
                width:327px;
                margin:75px 0 30px 0;
                padding: 0 20px;
            }
            .phone_none{
                display: none;
            }
            .square{
                width:120px;
                height:40px;
            }
            .square i{
                font-size: 15px;
                margin:10px;
            }
            .like{
                width:327px;
            }
            .titt{
                position: relative;
                left:10px;
                font-size: 16px;
            }
            .pdetail_input{
            justify-content:center;
            width:328px;
            
        }
        .pdetail_input li{
            margin:0 5px;
        }
            /* container  title------------------------------------------ */
            .pic{
                width:85px;
                height:45px;
                background: #D9D1C2;
            }
            .pic img{
                width:50px;
                margin-left:40px;
                margin-top:2px;
            }
            .tit p{
                font-size: 16px;
                margin-top:20px;
            }

            .table{
                width:95%;
                /* width:95%;
                margin:0 auto; */
            }

            .table .contain li{
                padding: 5px;
            }

            .table .contain li.con_1{
                flex:100%;
            }
            .table .contain li.con_2{
                flex:100%;
            }
            .table .contain li.con_3{
                flex:100%;
            }
            .table .contain li.con_4{
                flex:100%;
            }
            .table .contain li.con_5{
                flex:100%;
            }

            .titt{
                margin-left:0;
            }





        }

    </style>
    <style>
        .flextest{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 25px;
        }
        .input{
            width: 350px;
        }
        .label{
            width: 125px;
            /*text-align: center;*/
            line-height: 20px;
            font-family: jf03;
        }
        .editinfo{
            margin: 50px 30px;
            font-family: jf03;
        }
        .input small{
            color: red;
            font-family: jf03;
            font-size: 14px;
            line-height: 22px;
        }
        .pro_name p{
            line-height: 22px;
        }
        .i-cancel{
            cursor: pointer;
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
            .store_nav{
                display: none;
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

        /* pro----------------------------------- */
        .detailCont{
            max-width:1480px ;
            /*background-color: #96c6e7;*/
            margin: 0 auto;
            padding-top: 100px;
            padding-left: 80px;
        }
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
            color: #852B21;
            line-height: 50px;
        }
        .detail_intro h4{
            font-size: 22px;
            color: #852B21;
        }
        .detail hr{
            height: 0.5px;
            border:none;
            border-top:0.5px solid #CCC4B5;
        }
        .detail_intro .text{
            width:450px;
            height:250px;
            overflow: auto;
            /* border:1px solid rgb(173, 173, 173); */
            border-right:none;
            padding: 10px 0;
            /* border-radius: 5px; */
            margin-top:10px;
            /*background-color: #852B21;*/
        }
        .detail_intro .text p{
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 1.1px;
        }

        /*.detail_intro .share{*/
             /*margin-top: 10px;*/
        /*}*/
        /*.detail .share a{*/
            /*color:rgb(107, 106, 106);*/
        /*}*/
        .detail_intro select{
            margin-top: 30px;
            width:160px;
            border: none;
            border-bottom: 1px solid #947c50;

        }
        .detail_intro .button{
            background-color: #947c50;
            margin-top:20px;
            padding:10px 38px;
            border:1px solid transparent;
        }
        .detail_intro .button:hover{
            background-color: white;
            border:1px solid #947c50;
        }
        .detail_intro  .button p{
            line-height: 30px;
            color: white;
            display: block;
            cursor: pointer;
            flex-direction: row;
            margin-left: 8px;
        }
        .detail_intro  .button a #bagPic{
            width: 30px;
            height: 30px;
            background-size: cover;
            -webkit-mask-image: url("imgs/icon/bag_30px.svg");
            color: white;
        }
        .detail_intro .button:hover p{
            color: #947c50;
        }
        .sizecount{
            align-content: space-between;
        }
        .prizeval{
            font-size: 20px;
            color: #852B21;
            text-align: right;
            margin-top: 10px;
        }
        @media screen and (max-width:420px){
            .detail_intro{
                position: static;
            }

            .detail_intro select{
                margin-top: 30px;
                width:110px;
                border: none;
                border-bottom: 1px solid #947c50;
            }
            .sizecount {
                align-content: flex-start;
            }
            .sizecount li:last-child{
                margin-left:  20px;
            }
            .detail_intro .button{
                background-color: #947c50;
                /*margin-top:20px;*/
                margin-left: 20px;
                padding:5px 80px;
                border:1px solid transparent;
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
            .prizeval{
                font-size: 20px;
                color: #852B21;
                text-align: right;
                /*margin-top: 10px;*/
            }
            .detail_intro ul li{
                line-height: 22px;
            }
            .detail .text {
                width:300px;
                height:300px;
                /*padding-right: 15px;*/
                margin-top:15px ;
                margin-bottom: 100px;
            }
            .shop_btn_mobile{
                /*width:100%;*/
                position: fixed;
                bottom: 0;
                left: 0;
                background-color: rgba(255,255,255,.8);
                box-shadow: 0 0 5px #ddd;
            }
            .detail_intro .share{
                margin-top: 5px;
                /* width: 328px; */
                overflow: hidden;
            }
            .detail select{
                margin-top: 15px;
                width:100px;
            }

        }

        /* pic----------------------------------- */
        .detail_pic{
            position: relative;
            left:500px;
            /*top: -50px;*/
            /*background-color: #96c6e7;*/
            /* margin:65px auto;    */
        }
        .detail_pic ul li{
            width:750px;
            height:600px;
            overflow: hidden;
            margin-bottom:20px;
            /*background-color: #96c6e7;*/

        }
        .detail_pic img{
            width:750px;
            height:600px;
            /* min-width: 400px; */
            object-fit: contain;
        }
        .detail_pic_mobile{
            display: none;
        }
        @media screen and (max-width:420px){
            .detailCont{
                padding: 50px 0 0 20px;
                /* width: 320px; */
            }
            .detail_intro{
                /*padding-right: 50px;*/
                /*width: 320px;*/
            }
            .placeBtn{
            margin-left: 0px;
        }
            .info_and_pic{
                flex-direction: column-reverse;

            }
            .detailCont{
                padding-bottom: 230px;
            }
            .detail_intro .text, .detail_intro .d_intro {
             width: 300px;
            }
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
            .share .placeBtn{
                width: 150px;
                height: 30px;
                /* background-color: #852B21; */
                margin-left:7px;
            }
            .placeBtn p{
                padding-left: 15px;
                line-height: 30px;
                color: #852B21;
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
            background-color: rgba(0,0,0,.9);
            /*background-color: #CCC4B5;*/
            overflow: hidden;
            display: none;
        }
        #closeBtn2{
            width: 35px;
            height: 35px;
            display: block;
            background: url("./imgs/closeBtn-01.png");
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
        .love_btn{
            cursor: pointer;
            margin-left:8px;
        }

        body{
            background: url("imgs/member/member_bg3.png") no-repeat  0 0 ;

        }
        iframe{
            width: 667px;
            height: 350px;
            margin: 100px auto;
        }
        @media screen and (max-width:700px){
            iframe{
                width: 667px;
                height: 375px;
                margin: 0 auto;
            }

        }


    </style>
</head>