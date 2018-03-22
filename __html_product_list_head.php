
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BA 線上商店</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            z-index: 2;
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
        .store_nav li:hover{
            transform: translateY(-3px);
        }
        .store_nav li a.active{
            color:#852B21 ;
        }

/*----------------------------------banner--------------------------------*/
        .banner{
    position: relative;
    width: 100%;
    top: 70px;
        }
        .banner img{
    width: 100%;
    position: relative;
    z-index: 1;
        }
        .banner_left{
    width: 45%;
    height: 50px;
            background-color: #852B21;
            position: absolute;
            bottom: -20px;
            left: 0;
        }
        .banner_right{
    width: 60%;
    height: 50px;
            background-color: #947C50;
            position: absolute;
            bottom: -40px;
            right: 0;
        }
    /*------------------breadcrumbs-----------------------------*/
        .container{
    width: 100vw;
            /*height: 300vh;*/
        }
        .breadcrumbs{
    margin-top: 10px;
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

        .card{
            width:260px;
            height:335px;
            margin-right:60px;
            margin-top:50px;
            border: 1px #947c50 solid;
            position: relative;
        }
        .productlist{
            margin-left:135px;
        }
        .bag img, .favorite img{
            width:30px;
        }
        .pic img{
            width:200px;
            height:200px;
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
        li.name{
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

        .temp2{
    width: 100vw;
            height: 130px;
        }
        .temp{
    width: 100vw;
            background-color: #fff;
            padding-bottom: 10px;
        }
        /*-------------------pagination-----------------------------------*/
        .pagination{
    width: 100%;
    padding: 100px 0 50px;
            /*background-color: #96c6e7;*/
        }
        .page{
    margin-left: 44%;
        }
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
    </style>
</head>