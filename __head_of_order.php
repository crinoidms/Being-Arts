<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <title>訂單查詢</title>
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
            width:190px;
            height:56px;
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
            height:64px;
        }
        .flow .active{
            background: #D9D1C2;
            height:64px;
        }

        .square i{
            font-size: 20px;
            color:#967E53;
            margin:15px;
        }
        .square span{
            color:#967E53;
            line-height:20px;
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
            /* background: #967E53; */
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
            .flow .active {
                background: #D9D1C2;
                height: 46px;
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
            .title .tit p{
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
            
            .table .tit li.tit_1{
                flex:100%;
            }
            .table .tit li.tit_2{
                flex:100%;
            }
            .table .tit li.tit_3{
                flex:100%;
            }
            .table .tit li.tit_4{
                flex:100%;
            }
            .table .tit li.tit_5{
                flex:100%;
            }
            .table .orderDetail .odetail:nth-child(2){
                height:350px;
            }



        }

    </style>
</head>