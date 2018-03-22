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
        input{
            border:none;
            border-bottom: 1px solid #947c50;
            height:20px;
            font-size:16px;
            width:180px;
        }
        input:focus{
            border:none;
            outline:none;
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
        /* container form------------------------------------------ */
        .form_card{
            border:1px solid #967E53;
            position: relative;
            padding: 20px;
            width:400px;
            height:490px;
            margin-bottom:50px;
        }
        .form_group{
            margin:10px;
        }
        .info{

            margin-left: 35px;
            /* transform: translateX(-50%); */
        }
        label.edit_tit{
            background: #fff;
            font-size: 18px;
            position: absolute;
            left: 50%;
            top:-8px;
            font-family: jf03;
            transform: translateX(-50%);
            padding: 0 10px;

        }

        h6{
            color:red;
            margin-left:120px;
            line-height: 25px;
        }
        .info select{
            margin-bottom:4px;
        }
        input.address{
            margin-left:120px;
        }
        .form_group label.address, h6{
            display: block;
            margin-left: 120px;
            line-height: 25px;
        }
        /* container btn------------------------------------------ */

        .butn{
            width:150px;
            height:25px;
            margin-bottom:150px;
            text-align: center;
            padding: 2px;
            /* padding-left:20px; */
            margin-left: 50%;
            transform: translateX(-50%);
            margin-top:70px;
        }

        .b_brown{
            border:1px solid #967E53;
            background: #967E53;
        }
        a .b_brown{
            position: relative;
        }
        .b_brown p{
            color:#fff;
            letter-spacing: 5px;
        }
        .b_brown:hover p{
            letter-spacing: 18px;
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
            .form_card{
                height:550px;
            }
            
            .flow .active {
                background: #D9D1C2;
                height: 46px;
            }
            .form_card,.formright {
                width: 300px;
                margin:0 auto 180px auto;
            }
            .flextest {
                flex-wrap: wrap;
                margin-top: 20px;
            }
            .butn{
                margin-top: 70px;
            }
            .editinfo  a .butn{
                margin-top:100px;
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
            h6{
                margin-left:85px;
            }
            .info{
                margin:0 auto;
            }
            input.address{
                margin-left:85px;
            }
            .form_group label.address, h6{
                margin-left:85px;
            }
            .form_card_pass{
                height:450px;
            }
        }

        .district{
            /*-webkit-appearance: none;*/
            /*-moz-appearance: none;*/
            /*appearance: none;*/
            /*outline: none;*/
            /*border-color: #ffe76f;*/
            /*border-width: 3px;*/
            /*color: #ff8e52;*/
            margin-left: 5px;
            transform: translateY(-1px);
        }
        .hide{
            display: none;
        }

    </style>
</head>