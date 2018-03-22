<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>購物袋清單</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        *{
            margin:0;
            padding: 0;
            font-family: Arial,"jf03";
            font-size: 16px;
            letter-spacing: 1px;
            box-sizing: border-box;
            list-style: none;
            line-height: 15px;
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
       
        }
        input:focus{
            border:none;
        }
        /* wrap------------------------------------------ */
        .wrap{
            width:100%;
            /* background: blue; */
        }

        a.logo img{
            width:150px;
            margin:20px;
        }
        .figure_logo{
            width:100%;
            z-index: 2;
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
        .circle.active{
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
        .cart_form p{
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
            flex:1;
        }
        .table .tit li.tit_2{
            flex:7;
        }
        .table .tit li.tit_3{
            flex:2;
        }
        .table li{
            padding:7px;
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
            flex:1;
        }
        .table .contain li.con_2{
            flex:2;
        }
        .table .contain li.con_3{
            flex:5;
        }
        .table .contain li.con_4{
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



        /* .hot */
        .hot_pro{
            width:100%;
            justify-content: space-around;
        }
        .hot_pro a.card:hover{
            transform:translateY(-55px);
            color:#947C50;
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
        .buy_btn p,.table li.bagDetailBtn{
            line-height:20px;
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
        .b_red{
            border:1px solid #967E53;
            background: #967E53;
            padding-right:20px;
        }
        .b_red p{
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


        /* select------------------------------------------ */

        /* 箭頭 */
        .icon_select_mate {
            position: absolute;
            top: -1px;
            right: 2%;
            height: 21px;
            transition: all 275ms;
        }

        .select_mate {
            margin-right:55px;
            position: relative;
            float: left;
            min-width: 70px;
            width: 70px;
            height: 21px;
            color: #777;
            font-weight: 300;
            background-color: #fff;
            /* border:1px solid #ccc; */
            /* box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.3); */
            /* border-radius: 3px; */
            transition: all 375ms ease-in-out;

            /* Oculto el elemento select */
        }
        .select_mate select {
            position: absolute;
            overflow: hidden;
            height: 0px;
            opacity: 0;
            z-index: -1;
        }

        .cont_list_select_mate {
            position: relative;
            float: left;
            width: 100%;
        }

        .cont_select_int {
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 999;
            overflow: hidden;
            height: 0px;
            width: 100%;
            background-color: #fff;
            padding: 0px;
            margin-bottom: 0px;
            margin-top: 0px;
            border-radius: 0px 0px 3px 3px;
            /* box-shadow: 1px 4px 10px -2px rgba(0, 0, 0, 0.2); */
            transition: all 375ms ease-in-out;
        }
        .cont_select_int li {
            position: relative;
            float: left;
            width: 96%;
            border-bottom: 1px solid #E0E0E0;
            background-color: #D9D1C2;
            list-style-type: none;
            padding: 8px 2%;
            margin: 0px;
            transition: all 275ms ease-in-out;
            display: block;
            cursor: pointer;
            font-size: 12px;
        }
        .cont_select_int li:last-child {
            /* border-radius: 3px; */
            border-bottom: 0px;
        }
        .cont_select_int li:hover {
            background-color: #947C50;
        }
        /* .cont_select_int .active {
        background-color: #947C50;
        } */

        /* 白色底文字  */
        .selecionado_opcion {
            padding-top:1px;
            height:21px;
            width: 96%;
            display: block;
            margin: 0px;
            cursor: pointer;
            font-size: 12px;
        }


        /* input 數量增減------------------------------------------ */
        button.btn{
            background-color: #fff;
            /* box-shadow: 1px 4px 10px -2px rgba(0, 0, 0, 0.2); */
            border:none;
            width:22px;
            height:21px;
        }

        .input-number{
            width:50px;
            text-align: center;
            /* width: 70px; */
            height: 22px;
        }
        button:focus, input:focus{
            outline: none;
            cursor: pointer;

        }
        .fas{
            color:#947C50;
            cursor: pointer;
        }
        svg{
            cursor: pointer;
        }
        .input-group-btn:hover .fas{
            color:#D9D1C2;
            transition: all .5s ease-in-out;

        }
        /* hot------------------------------------------ */
        .hot_pro figure{
            background-color: #000;
            cursor: pointer;
            position: relative;
            height: 120px;
        }
        .hot_pro .hot_prod a.card{
            line-height: 22px;
        }
        
        .hot_pro figure:hover .h_pic img{
            opacity: .5;
        }
        .hot_pro figure:hover .h_bag img{
            opacity: 1;
        }
        .h_pic img{
            width:120px;
        }
        figure .h_bag img{
            position: absolute;
            width:50px;
            height:50px;
            top:50%;
            left:50%;
            margin-left:-25px;
            margin-top:-25px;
            opacity: 0;
            filter: brightness(130%);
        }
        .hot{
            margin-bottom:100px ;
        }
        .h_margin{
            margin-right:10px;
        }
        .hot_prod{
            width: 120px;
            flex-wrap: wrap;
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
                /* background-color: rgba(255,255,255,.5); */
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
            .table .tit_2{
                text-align:center;
            }
            .table .contain li.con_4{
                margin-bottom:20px;
                color:red;
            }
            .table .contain{
                flex-direction: column;
                border-bottom: 1px solid #D9D1C2;
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
                /* margin-bottom:60px; */
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
                /* bottom:-60px; */
            }

            .b_white p, .b_brown p {
                /* letter-spacing: 1px; */
                margin-top: 7px;
            }
            .b_brown p {
                margin-top: 7px;
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
            .table .tit li.tit_1{
                padding: 8px 1px;
                flex:1.5;
            }
            .table .tit li.tit_2{
                padding: 8px 1px;
                flex:7;
            }
            .table .tit li.tit_3{
                padding: 8px 1px;
                flex:1.5;
            }
            .hot{
                width:95%;
                margin:0 auto;
            }
            .h_margin{
                margin:8px;
                text-align: center;
                justify-content:center;
                align-items:flex-start;
            }
            .hot_prod{
                text-align: center;
                
            }
            .hot_pro figure{
                width:100px;
                height:100px;
                
            }
            .hot_pro .h_pic img{
                width:100px;border:1px solid #947C50;
            }
            .select_mate{
                margin-right:0px;
            }
            .hot_pro {
                width: 100%;
                justify-content:space-around;
            }

        }

        /*detail*/

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
        .detail_page.contain{
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
            .contain {
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
            padding: 100px 0 50px;
        }
        .page{
            margin-left: 44%;
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
        }
        .page li:hover{
            transform: translateY(-3px);
            /*box-shadow:0 5px 2px #ccc;*/
            border: 1px solid #852b21;
        }
        .page li:hover a{
            color: #852b21;
        }
        .page li.active{
            background-color: #eee5d4;
        }

        .page a{
            line-height: 30px;
            display: block;
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
            overflow: hidden;
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