<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <title>付款方式</title>
    <style>
        *{
            margin:0;
            padding: 0;
            font-family: Arial,"jf03";
            font-size: 14px;
            letter-spacing: 1px;
            box-sizing: border-box;
            list-style: none;
            /* color:#333; */
            line-height: 10px;
            transition: all .5s;
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

        .fix{
            position: fixed;
        }
        @font-face {
            font-family: jf03 ;
            src:url(./lib/font/jf-jinxuan-fresh2.2-book.otf);
        }
        @keyframes flow{
            to{
                transform:translateX(0px);
            }
            from{
                transform:translateX(30px);
            }
        }
        @keyframes phone_flow{
            to{
                transform:translateX(-20px);
            }
            from{
                transform:translateX(10px);
            }
        }
        input{
            border:none;
            border-bottom: 1px solid #947c50;
            height:20px;
            font-size:16px;
            width:250px;
            
        }
        input:focus{
            border:none;
            outline:none;
        }
        .form_group small{
            font-family: Arial,"jf03";
        }
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
        
        /* container flow------------------------------------------ */
        .container{
            width:60%;
            /* background: red; */
            margin:0 auto;

        }
        .container p, .container li, .container a{
            color:#333;
        }
        .flow{
            width:598px;
            margin: 65px auto;
            height:80px;
            /* background: green; */
            justify-content: space-around;
        }
        .circle{
            width:80px;
            height:80px;
            border-radius: 50%;
            border:1px solid #D9D1C2;
            background: #fff;
            position: relative;

        }
        .circle p{
            font-size: 12px;
            position: absolute;
            top:44px;
            left:15px;

        }
        .active{
            background: #D9D1C2;
        }
        .l img{
            transform:translateX(0);
            width:40px;
            height:80px;
        }
        .ll{
            animation: flow 1s infinite ease .5s  alternate;
        }
        .circle img{
            width:80px;
        }
        /* container bag title------------------------------------------ */
        .title .pic{
            width:140px;
            height:90px;
            background: #D9D1C2;
        }
        .title .pic img{
            width:70px;
            margin-left:60px;
            margin-top:15px;
        }
        .tit p{
            font-size: 18px;
            margin-left: 10px;
            margin-top:50px;
        }
        /* container bag_form left------------------------------------------ */
        .left{
            width:100px;
            /* background: purple; */
            border-right:1.4px solid #D9D1C2;
            margin-right:50px;

        }


        .table{
            width:75%;
            /* background: rgb(238, 163, 163); */
        }
        .table ul.contain li{
            color:#333;
        }
        .table ul.count li,.table ul.count li span{
            color:red;
        }
        .table ul.wrap li.car_1{
            color:#333;
        }
        .cart_form p{
            color:#333;
        }
        .bag_form .table .wrap li.car_1{
            color:#333;
        }
        .form_group label{
            color:#333;
        }
        li.right{
            text-align: right;
        }
        li.right{
            text-align: right;
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
            border-top:1px solid #947C50;
        }
        /* .car.table  */

        .car .table .car_1{
            flex:2;
        }
        .car .table .car_2{
            flex:8;
        }

        /* container btn------------------------------------------ */

        .butn{
            width:215px;
            height:35px;
            margin-bottom:150px;
            text-align: center;
            padding: 2px;
            /* padding-left:20px; */
        }
        .b_white{
            border:1px solid #967E53;
            background: #fff;
            padding-left:20px;
        }
        .b_white p{
            color:#967E53;
            margin-top:4px;
            letter-spacing: 5px;
        }
        a .b_white{
            position: relative;
        }
        .b_white img{
            width:25px;
            position: absolute;
            top:11%;
            left:22%;
        }
        .b_white:hover img{
            left:10%;
        }
        .b_white:hover p{
            letter-spacing: 15px;
        }

        /* btn_brown  */
        .b_brown{
            border:1px solid #967E53;
            background: #967E53;
            padding-right:20px;
        }
        a .b_brown{
            position: relative;
        }
        .b_brown p{
            color:#fff;
            margin-top:4px;
            letter-spacing: 5px;
        }

        .next{
            position: absolute;
            width:38px;
            height:1px;
            top:50%;
            left:68%;
            /* z-index: 100; */
        }
        .b_back{
            padding-left:20px;
        }
        .back{

            position: absolute;
            width:38px;
            height:1px;
            top:50%;
            right:68%;
        }
        .n_white{
            background-color:#fff;
        }

        .next_30deg{
            position: absolute;
            width:15px;
            height:1px;
            top:41%;
            left:80%;
            transform: rotate(30deg);
        }
        .back_330deg{
            position: absolute;
            width:15px;
            height:1px;
            top:41%;
            left:13%;
            transform: rotate(330deg);
        }

        .b_brown:hover p{
            letter-spacing: 18px;
        }
        .b_brown:hover .next{
            width:76px;
            left:60%;
        }
        .b_brown:hover .next_30deg{
            left:90%;
        }
        .b_brown:hover .back{
            width:38px;
            right:80%;
        }
        .b_brown:hover .back_330deg{
            left:2%;
        }
        div.buy_btn .b_order{
            width:500px;
        }

        /* form------------------------------------------ */
        .form_card{
            margin: 15px 0;
        }
        .form_group{
            margin:16px;
        }
        .form-text{
            color:red;
            font-family: Arial,"jf03";
        }
        .fas{
            color:#D9D1C2;
        }
        .car_tit{
            font-size: 16px;
        }
        .bag_form{
                margin-top:20px;
                margin-bottom:50px;
                position:relative;
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
                margin:75px 0;
                padding: 0 20px;
            }
            .phone_none{
                display: none;
            }
            .butn{
                width:150px;
                margin-bottom:60px;
            }
            .circle{
                width:50px;
                height:50px;
            }
            .circle img{
                transform: translate(-14px,-8px);
            }

            .circle p{
                width:55px;
                top:52px;
                left:0;
            }
            .l img{
                transform: translate(3px,-15px);
            }
            .ll{
                animation: phone_flow 1s infinite ease .5s  alternate;
            }
            .butn{
                width:150px;
                bottom:-60px;
            }
            .butn{
                width:150px;
                bottom:-60px;
            }
            .b_white p{
                letter-spacing: 1px;
            }
            .b_white img{
                left:17px;
            }

            .bag{
                width:327px;
            }
            .b_white, .b_brown{
                padding: 0;
            }
            .b_brown{
                width:215px;
            }
            /* container bag title------------------------------------------ */
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
            .left{
                display: none;
            }
            .table{
                width:100%;
                /* width:95%;
                margin:0 auto; */
            }
            .table img{
                width:50px;
            }
            .table .contain li{
                padding: 5px;
            }
            .table .contain .con_1 img{
                width:40px;
            }
            .table .tit li.tit_1{
                flex:1;
            }
            .table .tit li.tit_2{
                flex:3;
            }
            .table .tit li.tit_3{
                flex:2;
            }
            .table .tit li.tit_4{
                flex:2;
                text-align: center;
            }
            .table .tit li.tit_5{
                flex:2;
            }
            .table .contain li.con_1{
                flex:1;
            }
            .table .contain li.con_2{
                flex:3;
            }
            .table .contain li.con_3{
                flex:2;
            }
            .table .contain li.con_4{
                flex:2;
                text-align: center;
            }
            .table .contain li.con_5{
                flex:2;
            }
            /* .car.table  */

            .car .table .car_1{
                flex:100%;
                color:#947C50;
            }

            .car .table .car_2{
                flex:100%;
            }
            .select_mate{
                margin-right:0px;
            }
            small, label.store{
                display: block;
                margin-left:70px;
                line-height: 28px;
            }
            small.letter{
                margin-left:115px;
            }

            input.address{
                /* margin-left:70px; */
                margin-top:5px;
            }
            .form_group input{
                margin:5px 0 5px 70px;
            }

            .form_store{
                display: flex;
                flex-wrap: wrap;
                margin-bottom:50px;

            }
            .form_group{
                margin:40px auto;
            }
            .form_group label{
                display: block;
                margin:5px 0 5px 70px;
            }
            .car_tit{
                width:50%;
                padding-left:5px;
                line-height: 24px;
            }
            .bag_form{
                margin-top:20px;
                margin-bottom:50px;
                position:relative;
            }
            .form_card {
               margin: 0;
            }

        }
    </style>
</head>