<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">
    <title>常見問題</title>
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
        /* container faq_left------------------------------------------ */
        .faq_left{
            width:140px;
            /* background-color: red; */
        }
        .faq_left ul li{
            margin:10px 0;
            line-height: 25px;
            /* background-color: red; */
        }
        .faq_left ul li:hover{
            letter-spacing:5px;
        }
        .faq_left ul li:hover i{
            transform: rotate(90deg);
        }
        .faq_contain{
            width:85%;
        }

        /* container faq_contain------------------------------------------ */

        .accordion {
            width: 100%;
            max-width: 600px;
            margin:0 auto;
            background: #FFF;
        }

        .accordion .link {
            cursor: pointer;
            display: block;
            padding: 16px 16px 16px 30px;
            color: #4D4D4D;
            font-family: Arial,"jf03";
            font-size: 16px;
            font-weight: 700;
            border-bottom: 1px solid #CCC;
            position: relative;
            transition: all 0.4s ease;
            line-height:25px;
        }

        .accordion li:last-child .link {
            border-bottom: 0;
        }

        .accordion li i {
            position: absolute;
            top: 16px;
            left: 12px;
            font-size: 18px;
            color: #595959;
            transition: all 0.4s ease;
        }

        .accordion li i.fa-chevron-down {
            right: 12px;
            left: auto;
            font-size: 16px;
        }

        .accordion li.open .link {
            color: #852B21;
        }

        .accordion li.open i {
            color: #852B21;
        }
        .accordion li.open i.fa-chevron-down {
            transform: rotate(180deg);
        }

        .accordion li.default .submenu {display: block;}

        /* Submenu----------------*/
        .submenu {
            display: none;
            /* background: #444359; */
            font-size: 14px;
            padding:15px;
        }

        .submenu li {
            /* border-bottom: 1px solid #4b4a5e; */
            line-height: 24px;
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
        .flow .active {
            background: #D9D1C2;
            height: 64px;
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
            .faq_left ul.flex{
                margin-left:10%;
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

            .faq_left{
                width:250px;
                margin: 0 auto;
            }
            .faq_contain{
                margin:15px auto;
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
            .flow .active {
            background: #D9D1C2;
            height: 46px;
        }
            

        }

    </style>
</head>