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
    <title>結帳完成</title>
    <style>
        *{
            margin:0;
            padding: 0;
            font-family: Arial,"jf03";
            font-size: 14px;
            letter-spacing: 1px;
            box-sizing: border-box;
            list-style: none;
            color:#333;
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
        /* wrap------------------------------------------ */
        .wrap{
            width:100%;
            /* background: blue; */
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
            /* height:213px; */
            width:326px;
            position: absolute;
            bottom:0;
        }

        /* container flow------------------------------------------ */
        .container{
            width:60%;
            /* background: yellow; */
            margin:0 auto;
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
            width:80px;
            margin-left:60px;
            margin-top:15px;
        }
        .title .tit p{
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

        table{
            width:75%;
            /* background: rgb(238, 163, 163); */
        }
        thead th{
            background: #967E53;
            height:28px;
            color:#fff;
        }
        td, th{
            padding:12px;
            text-align: left;
            box-sizing: border-box;
        }
        td i.fa-trash-alt{
            color:#947C50;
        }
        td i.fa-trash-alt:hover {
            color:#D9D1C2;
        }


        .hot_pro{
            width:100%;
        }
        /* container btn------------------------------------------ */

        .butn{
            width:215px;
            height:35px;
            margin-top:150px;
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

        /* container ------------------------------------------ */
        .finish{
            margin:40px auto;
            display: flex;
        }
        .finish figure img{
            width:100px;
            margin:0 30px;
        }
        .finish p{
            font-size: 36px;
            line-height: 40px;
            margin: 22px 0;
        }
        .finish span{

            font-size: 21px;
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
            nav{
                height:100%;
            }
            .container{
                width:327px;
                height:100vh;
                position: fixed;
            }
            .flow{
                width:327px;
                margin:75px 0;
                padding: 0 20px;
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
            .finsih{
                flex-direction: column;
                flex-wrap: wrap;
            }
            .finish_p{
                position: absolute;
                top:55%;
            }

            .l img{
                transform: translateY(-10px);
            }
            .butn{
                width:150px;
            }
            .b_white p{
                letter-spacing: 1px;
            }
            .b_white img{
                left:17px;
            }
            .phone_none{
                display: none;
            }

        }
    </style>
</head>