<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="./navcsstest.css" rel="stylesheet" type="text/css">
    <title>會員登入</title>
    <style>

        /* wrap------------------------------------------ */
        .wrap{
            height:100vh;
            width:100%;
        }
        .logo img{
            width:150px;
            margin:20px;
        }
        .bg img{
            width:186px;
            position: absolute;
            bottom:0;
            right:47px;
        }
        /* container----------------------- */

        .container{
            /* background: red; */
            width: 900px;
            height: 445px;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            display: inline-flex;
            letter-spacing: 1px;
            z-index: 1;
        }
        .backbox{
            background-color: #947C50;
            width: 100%;
            height: 80%;
            position: absolute;
            transform: translate(0,-50%);
            top:50%;
            display: inline-flex;
        }
        .backbox p{
            color:#fff;
            margin-bottom: 25px;
        }
        .frame{
            width:97%;
            height:95%;
            border:1px solid #fff;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            /* background: green; */
        }

        .frontbox{
            background-color: white;
            border: 1px solid #947C50;
            height: 100%;
            width: 40%;
            z-index: 10;
            position: absolute;
            right:0;
            margin-right: 7%;
            margin-left: 7%;
            transition: right .8s ease-in-out;
        }

        .moving{
            right:46%;
        }

        .loginMsg, .signupMsg{
            width: 50%;
            height: 100%;
            font-size: 12px;
            box-sizing: border-box;
            position: relative;
            /* background: red; */
        }
        .signupMsg img, .loginMsg img{
            width:290px;
            opacity: .2;
            position: absolute;
            right:0;
            bottom:0;
        }
        .loginMsg img{
            width:230px;
            right:-60px;
        }

        .loginMsg .title,
        .signupMsg .title{
            /* font-weight: 300; */
            font-size: 28px;
            letter-spacing: 2px;
        }

        .loginMsg p,
        .signupMsg p {
            font-size: 14px;
            letter-spacing: 1px;
            /* font-weight: 100; */
        }

        .textcontent{
            color:white;
            margin-top:23%;
            margin-left: 12%;
            position: relative;
        }

        .loginMsg button,
        .signupMsg button {
            background-color: transparent;
            border: 1px solid #fff;
            color:#fff;
            font-size: 14px;
            box-sizing: content-box;
            /* font-weight: 300; */
            width:100px;
            padding:10px 35px;
            margin-top: 15%;
            cursor: pointer;
            letter-spacing: 2px;
            z-index: 1;
        }

        /* front box content*/
        .loginform, .signup{
            padding: 20px;
            text-align: center;
        }

        .loginform h2,
        .signup h2 {
            margin-top:30px;
            color: #947C50;
            font-size:22px;
            text-align: center;
        }

        .inputbox{
            margin-top:35px;
        }

        .loginform button,
        .signup button{
            background-color: #947C50;
            border: 1px solid #947C50;
            color:white;
            font-size: 14px;
            /* font-weight: 300; */
            box-sizing: content-box;
            padding:10px 45px;
            width: 100px;
            position: absolute;
            left:50%;
            transform: translateX(-50%);
            bottom: 35px;
            cursor: pointer;
            letter-spacing: 4px;
        }
        .loginMsg button:hover,
        .signupMsg button:hover{
            letter-spacing: 8px;
        }
        .loginform button:hover,
        .signup button:hover{
            letter-spacing: 15px;
            background-color: #fff;
            border: 1px solid #947C50;
            color:#947C50;
        }

        /* Fade In & Out*/
        .loginform p {
            cursor: pointer;
            color:#947C50;
            font-size: 12px;

        }

        .loginMsg, .signupMsg{
            /*opacity: 1;*/
            transition: opacity .8s ease-in-out;
        }

        .visibility{
            opacity: 0;
        }

        .hide{
            display: none;
        }
        #emailWarning, #passwordWarning, #passwordWarning2, #nicknameWarning, #log_passwordW, #log_emailW{
            display: none;
        }
        /* input----------------------- */

        .mat-label {
            display: block;
            font-size: 14px;
            transform: translateY(15px);
            color: #D9D1C2;
            transition: all 0.5s;
        }

        .mat-input {
            position: relative;
            background: transparent;
            width: 100%;
            border: none;
            outline: none;
            padding: 3px 0;
            font-size:14px;
            left: 15%;
        }

        .mat-div {
            /* padding: 3px 0 0 0; */
            position: relative;
            margin:15px;
        }

        .mat-div:after, .mat-div:before {
            content: "";
            position: absolute;
            display: block;
            width: 70%;
            height: 1px;
            background-color: #D9D1C2;
            bottom: 0;
            left: 15%;
            transition: all 0.5s;
        }

        .mat-div::after {
            background-color: #947C50;
            transform: scaleX(0);
        }

        .is-active::after {
            transform: scaleX(1);
        }

        .is-active .mat-label {
            color: #947C50;
        }

        .is-completed .mat-label {
            font-size: 12px;
            transform: translateY(0);
        }

        .form-text{
            color:red;
            display: block;
            font-size: 12px;
            line-height: 18px;
            transform: translateY(16px);
        }

        /* ------------------------------------------------------------------------------------ */
        /* ------------------------------------------------------------------------------------ */
        /* ------------------------------------------------------------------------------------ */

        @media screen and (max-width: 375px){
            nav{
                height:100%;
            }
            .bg img{
                width:120px;
            }
            .container{
                width:329px;
                height: 100vh;
                position: fixed;
                /* background: red; */
                top:0;
                left:0;
                transform: translate(0, 60px);
            }
            .backbox{
                top:0;
                transform: translate(0);
                height: 30%;
                display: block;
            }
            .frame{
                width:96%;
                height:95%;
            }
            .frontbox{
                top:30%;
                width:100%;
                height: 60%;
                margin: 0;
                background: transparent;
                border: none;
            }
            .loginMsg, .signupMsg{
                width:100%;
            }
            .signupMsg{
                position: absolute;
                top:0;
            }
            .signupMsg img{
                width:190px;
            }
            .loginMsg img{
                width:140px;
                right:-15px;
                /* top:-20px; */
            }
            .loginMsg .title,
            .signupMsg .title{
                font-size: 20px;
                line-height: 24px;
            }
            .textcontent{
                margin-top: 15%;
                margin-left: 10%;
                position: absolute;
            }
            .loginMsg button,
            .signupMsg button {
                margin-top: -4%;
                padding: 5px;
            }
            .loginMsg button:hover,
            .signupMsg button:hover{
                letter-spacing: 0;
            }

            .moving{
                right:0;
            }
            .mat-div {
                margin:18px;
            }
            .login button,
            .signup button{
                bottom: 22px;
            }

        }
    </style>
</head>