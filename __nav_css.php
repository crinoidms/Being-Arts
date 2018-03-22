
    @font-face {
        font-family: jf03 ;
        src: url(../lib/font/jf-jinxuan-fresh2.2-book.otf);
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Arial, "jf03";
        font-size: 16px;
        letter-spacing: 2px;
        box-sizing: border-box;
        list-style: none;
        color: #a5875d;
        line-height: 15px;
        transition: all .5s;
    }

    p {
        /* line-height: 20px; */
    }

    a {
        text-decoration: none;
    }

    .wrap {
        display: flex;
    }

    .flex {
        display: flex;
        flex-wrap: wrap;

    }

    .center {
        text-align: center;
        justify-content: center;
    }

    .between {
        justify-content: space-between;
    }

    .icon img {
        width: 30px;
        height: 30px;
    }

    p, h1, h2, h3, h4, h5, h6, a, li {
        font-family: Arial, jf03;
    }

    /* nav------------------------------------------ */
    .nav {
        padding: 2px;
        flex: 1;
        height: 100vh;
        position: fixed;
        right: 0;
        background-color: white;
        border-left: #D6CBBC 1px solid;
        /* background: black; */
        z-index: 90;
        padding-top: 10px;
    }

    .nav ul li img {
        width: 30px;
        margin: 6px;
    }

    .nav_bottom {
        position: absolute;
        bottom: 0;
    }

    a.n_bag {
        position: relative;
    }

    span.badge {
        background-color: #967E53;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        color: white;
        position: absolute;
        right: 0;
        bottom: 5px;
        text-align: center;
        line-height: 20px;
        letter-spacing: 0;
        font-size: 14px;
    }

    /* nav_notice---------------*/
    .nav ul.nav_top li {
        position: relative;
    }

    .nav_top p::after {
        content: "";
        display: block;
        position: absolute;
        background: #947C50;
        width: 6px;
        height: 10px;
        clip-path: polygon(0 0, 100% 50%, 0 100%);
        opacity: 0;
        transition: none;
        right: -5px;
        top: 8px;
    }

    .nav_top p {
        position: absolute;
        display: block;
        padding: 5px 0;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        background-color: #947C50;
        color: #fff;
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        text-transform: none;
        text-indent: 0;
        opacity: 0;
        transition: none;
        height: 25px;
    }

    .nav_top .ham p {
        left: -88px;
        top: 10px;
        width: 80px;
    }

    .nav_top li .login p {
        left: -60px;
        top: 10px;
        width: 50px;
    }

    .nav_top li .member p {
        left: -90px;
        top: 10px;
        width: 80px;
    }

    .nav_top .shop p {
        left: -73px;
        top: 90px;
        width: 65px;
    }

    .nav_top .love p {
        left: -58px;
        top: 130px;
        width: 50px;
    }

    .nav_top .space p {
        left: -88px;
        top: 180px;
        width: 80px;
    }

    .nav ul.nav_top li.ham:hover + .ham p {
        opacity: 1;
    }

    .nav ul.nav_top li.login:hover .login p {
        opacity: 1;
    }

    .nav ul.nav_top li.member:hover .member p {
        opacity: 1;
    }

    .nav ul.nav_top li.shop:hover + .shop p {
        opacity: 1;
    }

    .nav ul.nav_top li.love:hover + .love p {
        opacity: 1;
    }

    .nav ul.nav_top li.space:hover + .space p {
        opacity: 1;
    }

    .nav ul.nav_top li.ham:hover + .ham p::after {
        opacity: 1;
    }

    .nav ul.nav_top li.login:hover .login p::after {
        opacity: 1;
    }

    .nav ul.nav_top li.member:hover .member p::after {
        opacity: 1;
    }

    .nav ul.nav_top li.shop:hover + .shop p::after {
        opacity: 1;
    }

    .nav ul.nav_top li.love:hover + .love p::after {
        opacity: 1;
    }

    .nav ul.nav_top li.space:hover + .space p::after {
        opacity: 1;
    }

    /**/
    .nav ul.nav_bottom li {
        position: relative;
    }

    .nav_bottom p::after {
        content: "";
        display: block;
        position: absolute;
        background: #947C50;
        width: 6px;
        height: 10px;
        clip-path: polygon(0 0, 100% 50%, 0 100%);
        opacity: 0;
        transition: none;
        right: -6px;
        top: 8px;
    }

    .nav_bottom p {
        position: absolute;
        display: block;
        padding: 5px 0;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        background-color: #947C50;
        color: #fff;
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        text-transform: none;
        text-indent: 0;
        opacity: 0;
        transition: none;
        height: 25px;
    }

    .nav_bottom .share p {
        left: -60px;
        top: 12px;
        width: 50px;
    }

    .nav_bottom .locat p {
        left: -90px;
        top: 55px;
        width: 80px;
    }

    .nav ul.nav_bottom li.share:hover + .share p {
        opacity: 1;
    }

    .nav ul.nav_bottom li.locat:hover + .locat p {
        opacity: 1;
    }

    .nav ul.nav_bottom li.share:hover + .share p::after {
        opacity: 1;
    }

    .nav ul.nav_bottom li.locat:hover + .locat p::after {
        opacity: 1;
    }

    /* map------------------------------------------ */
    .menu {
        -webkit-transition: 0.1s -webkit-transform linear;
        transition: 0.1s -webkit-transform linear;
        transition: 0.1s transform linear;
        transition: 0.1s transform linear, 0.1s -webkit-transform linear;
        position: relative;
        background: 0;
        /* margin: 2rem; */
        height: 30px;
        width: 30px;
        z-index: 60;
        outline: 0;
        padding: 0;
        border: 0;
        /* background-color: red; */
    }

    .bar::before, .bar::after {
        -webkit-transition: 0.2s background linear 0.1s, 0.2s top linear 0.2s, 0.2s -webkit-transform linear;
        transition: 0.2s background linear 0.1s, 0.2s top linear 0.2s, 0.2s -webkit-transform linear;
        transition: 0.2s background linear 0.1s, 0.2s top linear 0.2s, 0.2s transform linear;
        transition: 0.2s background linear 0.1s, 0.2s top linear 0.2s, 0.2s transform linear, 0.2s -webkit-transform linear;
        position: absolute;
        background: url("../imgs/icon/ham_15px_1.svg");
        background-size: cover;
        position: absolute;
        content: url("");
        display: flex;
        width: 30px;
        height: 15px;
        top: 50%;
        left: 0;
    }

    .bar {
        width: 40px;
        height: 30px;
        display: block;
        position: relative;
        /* background-image: url("imgs/icon/ham_30px_1.png"); */
        box-sizing: border-box;
        z-index: 60;
    }

    .bar::before {
        top: 0.4rem;
        left: .3rem;
    }

    .bar::after {
        top: 1rem;
        left: .3rem;
    }

    .bar::before, .bar::after {
        transform: rotate(0deg);
    }

    .active .bar::before {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .active .bar::after {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .active .bar::before, .active .bar::after {
        top: 8px;
    }

    .active .bar, .active .bar::before, .active .bar::after {
        -webkit-transition: 0.2s background linear 0.1s, 0.2s top linear, 0.2s -webkit-transform linear 0.2s;
        transition: 0.2s background linear 0.1s, 0.2s top linear, 0.2s -webkit-transform linear 0.2s;
        transition: 0.2s background linear 0.1s, 0.2s top linear, 0.2s transform linear 0.2s;
        transition: 0.2s background linear 0.1s, 0.2s top linear, 0.2s transform linear 0.2s, 0.2s -webkit-transform linear 0.2s;
    }

    .map li.map_pic {
        width: 160px;
        height: 106px;
        /* background-color: red; */
        position: relative;
        margin: 10px 0;
    }

    .map .pic {
        width: 160px;
        height: 96px;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        /* background-color: green; */
        position: absolute;
        overflow: hidden;
    }

    .map li.pic img.scale {
        width: 160px;
        height: 106px;
        position: absolute;
        top: 0px;
        left: 0;
    }

    .map_tit {
        color: #852b21;
        margin-top: 50px;
    }

    .map {
        margin-top: 60px;
        /* margin-bottom:42px; */
        padding: 25px;
        width: 270px;
        height: 87%;
        background: #DCD2C4;
        position: fixed;
        padding-top: 190px;
        border-style: solid;
        border-width: 0 2px 0 0;
        border-image: linear-gradient(to top, #967E53 0%, transparent 100%);
        border-image-slice: 1;

    }

    .map1 {
        transform: translateX(2000px);
        transition: transform 1.65s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .map1:hover .num {
        transform: translateY(20px);
    }

    .map1:hover img.scale {
        transform: scale(1.1);
        top: 0px;
    }

    .map1:hover .pic {
        height: 104px;
    }

    .map2 {
        transform: translateX(2250px);
        transition: transform 1.6s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .map2:hover .num {
        transform: translateY(20px);
    }

    .map2:hover img.scale {
        transform: scale(1.1);
        top: 0px;
    }

    .map2:hover .pic {
        height: 104px;
    }

    .map3 {
        transform: translateX(3000px);
        transition: transform 1.5s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .map3:hover .num {
        transform: translateY(20px);
    }

    .map3:hover img.scale {
        transform: scale(1.1);
        top: 0px;
    }

    .map3:hover .pic {
        height: 104px;
    }

    .map4 {
        transform: translateX(3500px);
        transition: transform 1.4s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .map4:hover .num {
        transform: translateY(20px);
    }

    .map4:hover img.scale {
        transform: scale(1.1);
        top: 0px;
    }

    .map4:hover .pic {
        height: 104px;
    }

    .map5 {
        transform: translateX(3750px);
        transition: transform 1.1s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .map5:hover .num {
        transform: translateY(20px);
    }

    .map5:hover img.scale {
        transform: scale(1.1);
        top: 0px;
    }

    .map5:hover .pic {
        height: 104px;
    }

    .menu-open .map1 {
        transform: translateX(66px);
        transition: transform .8s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .menu-open .map2 {
        transform: translateX(336px);
        transition: transform 1.1s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .menu-open .map3 {
        transform: translateX(606px);
        transition: transform 1.2s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .menu-open .map4 {
        transform: translateX(876px);
        transition: transform 1.3s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    .menu-open .map5 {
        transform: translateX(1146px);
        transition: transform 1.35s cubic-bezier(0.56, 0.1, 0.34, 0.91);
    }

    nav.map ul {
        margin: 0;
        list-style: none;
        padding: 0;

    }

    nav.map ul li {
        padding: 6px 5px;
        font-size: 16px;

    }

    .map ul li img {
        width: 160px;
    }

    .map ul li img.num {
        width: 90px;

    }

    nav {
        cursor: pointer;
    }

    nav.map ul li a:hover {
        color: #603813;
        letter-spacing: 5px;
    }

    .map5 {
        display: flex;
        width: 400px;
        border-right: none;
        justify-content: space-between;
    }

    ul.map5_icon li img {
        width: 30px;
        height: 30px;
        margin-left: 80px;
    }

    ul.map5_icon li img:hover {
        filter: brightness(40%);
    }

    .phone_ham {
        display: none;
    }

    /*-------------------------------------------------*/
    /*-------------------------------------------------*/
    /*-------------------------------------------------*/
    @media screen and (max-width: 420px) {
        li.map_num, li img.num, .pic {
            display: none;
        }

        nav.map ul li.map_tit {
            margin-top: 14px;
            width: 140px;
        }

        nav.map ul li {
            font-size: 20px;
            padding: 3px 5px;
        }

        nav.map {
            width: 328px;
            height: 20%;
            margin: 0;
            padding: 0;
            border: none;
        }

        .map li a {
            color: #947C50;
            /* color:#603813; */
            font-size: 16px;
        }

        .map li.map_pic {
            width: 100px;
            height: 20px;
            /* background-color: green; */
            position: none;
        }

        .map ul {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .map ul li {
            margin-top: 0px;
            margin-left: 10px;
            height: 30px;
            width: 90px;
        }

        .map2 ul li {
            width: 130px;
        }

        .map5 ul li {
            width: 200px;
        }

        .map5 li.map_pic {
            display: none;
        }

        ul.map5_icon {
            display: block;
        }

        ul.map5_icon li {
            position: absolute;
            bottom: 7px;
            left: 0;
        }

        ul.map5_icon li img.fb {
            margin-left: 105px;
        }

        ul.map5_icon li img.line {
            margin-left: 145px;
        }

        ul.map5_icon li img.ig {
            margin-left: 185px;
        }

        .map1 {
            transform: translateY(667px);
            transition: transform 1.4s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .map2 {
            transform: translateY(800.4px);
            transition: transform 1.3s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .map3 {
            transform: translateY(933.8px);
            transition: transform 1.2s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .map4 {
            transform: translateY(1067.2px);
            transition: transform 1.1s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .map5 {
            transform: translateY(2267.8px);
            transition: transform .89s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            flex-direction: column;
        }

        .menu-open .map1 {
            transform: translateY(0);
            transition: transform .8s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .menu-open .map2 {
            transform: translateY(100%);
            transition: transform 1.1s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .menu-open .map3 {
            transform: translateY(200%);
            transition: transform 1.2s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .menu-open .map4 {
            transform: translateY(300%);
            transition: transform 1.3s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .menu-open .map5 {
            transform: translateY(400%);
            transition: transform 1.35s cubic-bezier(0.56, 0.1, 0.34, 0.91);

        }

        .map ul li a {
            left: 0;
        }

        .map_tit {
            width: 328px;
            height: 20px;
        }

    }

