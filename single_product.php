<<<<<<< HEAD
<?php
$title = '單一物件';
require './part/connect-db.php';


// 帶入房屋資料
$ksql = "SELECT * FROM `items` WHERE `sid` = 2;";
$stmt = $pdo->query($ksql);
$k = $stmt->fetch();

?>



<?php include __DIR__ . './part/head.php'  ?>

<link rel="stylesheet" href="./single_product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../product-card/product_page.css">
<link rel="stylesheet" href="nav-footer/nav-footer.css">
<link rel="stylesheet" href="single_product/lightbox2.css">
<!-- 日曆 -->
<!-- <link rel="stylesheet" href="../simplepicker-main/dist/simplepicker.css"> -->
<link rel="stylesheet" href="./simplepicker-main/dist/simplepicker.css">
<style>
    /* 自己頁面的css */
    /* ----------------calender------------------------- */
    .event-log {
        font-family: consolas, Monaco, monospace;
        margin: 10px 5px;
        line-height: 2;
        border: 1px solid #4c4c4c;
        height: auto;
        width: 90%;
        padding: 2px 6px;
        color: #4c4c4c;
        white-space: pre;
    }


    /* ----------------viewer------------------------- */

    .S-viewer-wrap {
        width: 100%;
        height: 50px;
        /* padding: 20px 0; */
        margin-bottom: 30px;
        margin-top: 180px;
        /* border: 1px solid red; */
        /* background-color: #fca; */
        position: relative;
    }

    .S-lg-viewer-g {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        color: #0E2E3D;
        fill: #0E2E3D;
    }

    .S-lg-viewer {
        display: flex;
        align-items: center;
    }

    .S-lg-viewer i {
        margin-right: 10px;
        font-size: 16px;
    }

    .S-lg-link-g {
        display: flex;
        position: relative;
    }

    /* ----------------share link------------------------- */
    .share-wrap {
        position: absolute;
        top: 29%;
        left: 70%;
    }

    .S-viewer-wrap .S-lg-share {
        font-size: 1.5em;
        margin: 0 20px;
        display: flex;
        justify-content: center;
        background-color: #F1EDEA;
        padding: 10px;
        border-radius: 50%;
        position: relative;
        right: 0;
    }

    .S-viewer-wrap .S-lg-share:hover {
        background-color: #75BBE3;

    }

    .S-viewer-wrap .S-lg-like {
        position: relative;
        display: flex;
        right: 0;
        background-color: #F1EDEA;
        border-radius: 50%;
    }

    .S-viewer-wrap .S-lg-like:hover {
        background-color: #75BBE3;


    }

    .S-viewer-wrap .S-lg-like svg {
        width: 25px;
    }

    .pc-button-F4F4F4-280 {
        margin-bottom: 30px;
    }

    .pc-button-F4F4F4-280 a {
        color: #0E2E3D;
        text-decoration: none;
    }


    /* ------------------------------------------- */


    /* 照片區 */

    .S-product-img {
        width: 100%;
        height: 600px;
        /* border: 1px solid blue; */
        display: flex;
    }

    .S-product-img-left {
        width: 50%;
        height: 600px;
        overflow: hidden;
        /* height: 820px; */
        /* border: 1px solid green; */
        /* background: url(imgs/paul-hanaoka-Dl6H4_nzBpE-unsplash.jpg)center center/cover no-repeat; */
    }

    .S-product-img-left img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .S-product-img-right {
        width: 50%;
        /* height: 820px; */
        /* border: 1px solid purple; */
        display: flex;
        flex-direction: column;
        margin-left: 10px;
    }

    .S-product-img-right-up {
        margin-bottom: 10px;
        width: 100%;
        height: 50%;
        /* border: 1px solid purple; */
        /* background: url(imgs/paul-hanaoka-Dl6H4_nzBpE-unsplash.jpg)center center/cover no-repeat; */
    }

    .S-product-img-right-down-g {
        position: relative;

    }

    .S-product-img-right-down {
        position: relative;
        width: 100%;
        height: 300px;
        /* border: 1px solid purple; */
        /* background: url(imgs/paul-hanaoka-Dl6H4_nzBpE-unsplash.jpg)center center/cover no-repeat; */
        /* display: flex; */
        /* justify-content: center; */
        transition: .8s;
        overflow: hidden;
    }

    .S-product-img-right-down:hover {
        filter: brightness(.5);
        /* background-size: 120%; */
    }

    button.more-img {
        position: absolute;
        top: 45%;
        left: 46%;
        /* z-index: 888; */
        font-weight: 700;
        font-size: 50px;
        color: #fff;
        background: transparent;
        pointer-events: none;
    }

    /* 商品資訊 info */

    .S-product-info {
        /* margin-top: 50px; */
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .S-product-info-right {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
    }

    .S-product-info-right button {
        margin: 15px 0;
    }

    h2 {
        color: #0E2E3D;
    }

    h2.S-name {
        padding: 0 0 10px 0;
    }

    h2.S-price {
        padding: 30px 0;
    }

    h3.S-location {
        padding: 30px 0 10px 0;
    }

    h3.S-location i {
        margin-right: 10px;
        /* padding: 0 0 30px 0; */
    }

    .S-date i {
        margin-right: 10px;
    }


    /* 8個選項的選單 S-menu */

    .S-menu-wrap {
        margin-top: 50px;
        width: 100%;
        min-height: 400px;
        /* border: 1px solid red; */
    }

    .S-menu {
        width: 100%;
        min-height: 80px;
        /* background-color: #ccc; */
        display: flex;
    }

    .S-menu-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 70px;
        font-weight: 700;
        color: #0E2E3D;
        background-color: #F1EDEA;
    }

    .S-menu-title {
        margin-top: 30px;
        text-align: center;
        font-size: 32px;
        font-weight: 900;
        position: relative;
        /* z-index: 1; */
    }

    .S-menu-title2 {
        margin-top: 80px;
    }

    .S-menu-title-bg {
        /* margin: 20px; */
        margin-left: 50px;
        padding: 30px 0 0;
        text-align: center;
    }

    .S-lg-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    /* -----------------8個項目menu------------------------------ */

    .step-on {
        background: #FEAC00;
    }


    /* 租屋資訊 S-menu-RentInfo */


    /* --------在桌機版消失display-none------------------------------------------------------------- */

    .S-d-none {
        display: none;
    }


    /* --------------------------------------------------------------------------------------------- */

    .S-menu-wrap {
        /* background: pink; */
        margin: 54px auto 0;
    }

    .S-menu-icon-wrap {
        /* background: pink; */
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 30px 0 0px;
        margin: auto;
        text-align: center;
    }

    .S-menu-icon {
        width: 360px;
        display: flex;
        flex-wrap: wrap;
    }

    .S-menu-icon-c {
        /* background: purple; */
        /* width: 49.5%; */
        display: flex;
        justify-content: center;
        /* flex-wrap: wrap; */
    }

    .S-menu-icon img {
        margin: 10px 30px;
        height: 30px;
        width: 30px;
    }
    .center{
        justify-content: center;
    }
    .S-menu-icon-c img {
        margin: 10px 30px;
    }

    .S-menu-icon p,
    .S-menu-icon-c p {
        margin-top: 0px;
        margin-bottom: 30px;
    }

    .S-menu-info {
        line-height: 2em;
        padding: 0 110px;
    }

    .S-menu-map {
        margin-top: 30px;
    }


    /* ----------------------------------------------- */

    .S-lg-card-wrap-top {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }

    .S-lg-card-wrap {
        margin: 0 15px;
    }


    /* footer */

    .footer_container {
        margin-top: 266px;
    }


    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ */


    /* 手機版 小於375 */

    @media screen and (max-width:376px) {

        /* --------在桌機版消失display-none------------------------------------------------------------- */
        .S-xs-d-block {
            display: block;
        }

        .S-xs-d-none {
            display: none;
        }

        /* ----------------share link------------------------- */
        .share-wrap {
            position: absolute;
            top: 22%;
            left: 28%;
        }

        /* --------------------------------------------------------------------------------------------- */
        /* -----------------單一物件的內容------------------ */
        .S-viewer-wrap {
            width: 100%;
            height: 100%;
            margin-top: 110px;
            margin-bottom: 20px;
            position: relative;
        }

        .S-lg-viewer-g {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #0E2E3D;
            fill: #0E2E3D;
        }

        .S-lg-viewer {
            display: flex;
            /* justify-content:flex-end; */
            align-items: center;
        }

        .S-lg-icons {
            display: flex;
        }

        .S-lg-viewer i {
            margin-right: 10px;
            font-size: 14.4px;
        }

        .S-lg-link-g {
            display: flex;
        }

        .S-viewer-wrap .S-lg-share {
            width: 30px;
            height: 30px;
            font-size: 15px;
            margin-right: 10px;
            display: flex;
            justify-content: center;
            background-color: #F1EDEA;
            /* padding: 10px; */
            border-radius: 50%;
        }

        .S-viewer-wrap .S-lg-like {
            width: 30px;
            height: 30px;
            display: flex;
            background-color: #F1EDEA;
            border-radius: 50%;
        }

        .S-viewer-wrap .S-lg-like svg {
            width: 15px;
        }

        /* 商品資訊info */
        h2.S-price {
            font-size: 24px;
            padding: 0 0 10px 0;
        }

        h2.S-name {
            font-size: 20px;
            padding: 0 0 10px 0;
        }

        h3.S-location {
            font-size: 16px;
            padding: 0 0 10px 0;
        }

        h3.S-location i {
            margin-right: 5px;
        }

        .S-date {
            font-size: 16px;
        }

        .S-date i {
            margin-right: 5px;
        }

        /* -----------------------------------單一物件的下拉式選單------------------ */
        .dropdown_container {
            background-color: #F1EDEA;
            /* background-color: #ccc; */
            /* border:1px solid #5D8DC1; */
        }

        #areaList {
            z-index: 888;
            background-color: #F1EDEA;
            text-align: center;
            /* border:1px solid #5D8DC1; */
        }

        #areaListBtn {
            height: 60px;
        }

        .S-mobile-dropdown {
            margin-top: 40px;
            background: #fff;
            /* z-index: 8888; */
            z-index: 1;

        }

        .S-mobile-dropdown button .dropdown {
            height: 60px;
            color: #0E2E3D;
            background: #FEAC00;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .dropdown_list {
            z-index: 0;
            padding: 10px 0;
            margin-top: 20px;
            text-indent: 0px;
        }

        /* .downArrow{
        height: 60px;    
    }  */

        .S-mobile-dropdown button .dropdown span {
            color: #0E2E3D;
        }

        button .dropdown>span {
            font-weight: 900;
            opacity: 1;
        }

        /* 租屋資訊 */
        .S-menu-wrap {
            margin: 0px auto 0;
        }

        .S-menu-icon-wrap {
            width: 97%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 30px;
            margin: auto;
            text-align: center;
        }

        .S-menu-icon {
            width: 100%;
            flex-wrap: wrap;
            /* border: 1px solid blue; */
            display: flex;
        }

        .S-menu-icon-group img {
            width: 20px;
        }

        .S-menu-icon-wrap p {
            margin-top: 0;
            font-size: 12px;
        }

        /* --------------xs-card 卡片輪播牆-------------------------------- */
        .S-xs-train-wrap {
            /* border: 10px solid #0E2E3D; */
            width: 100%;
            overflow: scroll;

        }

        .S-xs-train {
            /* transform: translateX(30px); */
            width: 300%;
            display: flex;
        }

        /* -----------------------------------單一物件的照片區塊------------------ */
        .S-product-img {
            width: 100%;
            height: 215px;
            /* border: 1px solid blue; */
            display: flex;
        }

        .S-product-img-left {
            width: 100%;
            height: 215px;
            /* border: 1px solid green; */
            /* background: url(imgs/spacejoy-sh6Aj176NAQ-unsplash.jpg)center center/cover no-repeat; */
        }

        .S-product-img-right {
            display: none;
        }

        .S-product-img-right-up {
            margin-bottom: 16px;
            width: 100%;
            height: 50%;
            /* border: 1px solid purple; */
            background: url(imgs/spacejoy-sh6Aj176NAQ-unsplash.jpg)center center/cover no-repeat;
        }

        .S-product-img-right-down {
            width: 100%;
            height: 50%;
            /* border: 1px solid purple; */
            background: url(imgs/spacejoy-sh6Aj176NAQ-unsplash.jpg)center center/cover no-repeat;
        }

        /* -----------------單一物件的資訊info------------------ */
        .S-product-info {
            margin-top: 30px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            /* justify-content: space-between; */
            /* align-items: center; */
        }

        .S-product-info-left h1 {
            font-size: 24px;
            padding: 10px 0;
            /* font-size: 32px; */
            color: #0E2E3D;
        }

        .S-product-info-left h1.S-product-name {
            font-size: 20px;
        }

        .S-product-info-left p {
            font-size: 16px;
            padding: 5px 0;
            color: #0E2E3D;
        }

        .S-product-info-right {
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        button.S-btn-order {
            margin-right: 10px;
        }

        .S-btn-conect {
            margin-left: 5px;
        }

        /* 下拉式選單 */
        .S-xs-menu-wrap {
            font-weight: 900;
            width: 100%;
            background-color: #FEAC00;
            color: #0E2E3D;
            display: flex;
            justify-content: space-between;
            padding: 10px 8px;
        }

        .S-xs-menu {
            display: flex;
            /* align-items: center; */
            font-size: 20px;
            font-weight: 900;
        }

        .S-xs-menu-wrap i {
            margin-top: 4px;
            font-size: 1.2em;
        }

        .S-menu-icon i {
            margin: 10px 20px;
            font-size: 20px;
        }

        .S-menu-info {
            /* margin-top: 30px; */
            margin-bottom: 80px;
            line-height: 2em;
            padding: 0 0px;
            display: flex;
            flex-direction: column;
            text-align: justify;
            align-items: flex-end;
        }

        .S-menu-info p:nth-child(1) {
            height: 200px;
            overflow: hidden;
            /* border: 2px solid #0E2E3D; */
        }

        .S-menu-info-more {
            font-size: 16px;
            color: #5D8DC1;
            background: transparent;
            margin-top: 5px;
        }

        /* .S-menu-info a {
        text-decoration: none;
        display: flex;
        justify-content: flex-end;
        padding: 0 10px;
        color: #0E2E3D;
    } */
        /* --------------xs-card 卡片-------------------------------- */
        .S-xs-card-wrap {
            margin-top: 30px;
            /* padding: 5px; */
            margin: 0 5px;
            width: 250px;
            height: 247px;
            overflow: hidden;
            position: relative;
            /* border: 1px solid blue; */
        }

        .S-xs-share {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 1.2em;
            color: #0E2E3D;
            background-color: #F1EDEA;
            border-radius: 50%;
            position: absolute;
            top: 5%;
            right: 5%;
        }

        .S-xs-share i {
            font-size: 1.2em;
        }

        .S-xs-like {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 1.2em;
            color: #0E2E3D;
            background-color: #F1EDEA;
            border-radius: 50%;
            position: absolute;
            top: 5%;
            right: 25%;
        }

        .S-xs-like svg {
            width: 25px;
            height: 25px;
            fill: #0E2E3D;
        }

        .S-xs-card {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            /* border: 1px solid red; */
        }

        .S-xs-card-img {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .S-xs-card-img img {
            width: 100%;
            object-fit: cover;
        }

        .S-xs-card-info {
            padding: 10px 20px;
            /* border: 1px solid rgb(45, 95, 112); */
            background-color: #F1EDEA;
            margin: 0;
        }

        .S-xs-card-info h4 {
            height: 1em;
            font-size: 12px;
        }

        .S-xs-card-info h4 span {
            font-size: 16px;
            font-weight: 900;
            padding-right: 10px;
        }

        .S-xs-card-info-2 {
            margin-top: 10px;
            height: 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .S-xs-card-info p {
            font-size: .8em;
        }

        .S-xs-card-info h3 {
            display: inline;
        }

        /* footer */
        .footer_container {
            margin-top: 40px;
        }

        #areaListBtn {
            background: transparent;
            height: 0;
        }

    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<!-- 自己頁面的html -->
<div class="container">
    <div class="row">

        <div class="S-viewer-wrap">
            <div class="S-lg-viewer-g">
                <div class="S-lg-viewer">
                    <i class="fa-solid fa-eye"></i>
                    <p>瀏覽量: 5555 人</p>
                </div>
                <div class="S-lg-link-g">
                    <div class="S-lg-share" id="share-show">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-lg-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>


        <!-- 分享icon卡片 彈出視窗 -->
        <!-- <dialog id="infoModal show"> -->
        <div class="share-wrap S-d-none" id="share-wrap">
            <div class="share">
                <div class="line">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7432 11.9649V16.1309C17.7432 16.2363 17.6611 16.3184 17.5557 16.3184H16.8877C16.8233 16.3184 16.7647 16.2832 16.7354 16.2422L14.8252 13.6641V16.1367C14.8252 16.2422 14.7432 16.3242 14.6377 16.3242H13.9697C13.8643 16.3242 13.7822 16.2422 13.7822 16.1367V11.9707C13.7822 11.8652 13.8643 11.7832 13.9697 11.7832H14.6318C14.6904 11.7832 14.7549 11.8125 14.7842 11.8652L16.6943 14.4434V11.9707C16.6943 11.8652 16.7764 11.7832 16.8818 11.7832H17.5498C17.6553 11.7774 17.7432 11.8652 17.7432 11.9649ZM12.9385 11.7774H12.2705C12.1651 11.7774 12.083 11.8594 12.083 11.9649V16.1309C12.083 16.2363 12.1651 16.3184 12.2705 16.3184H12.9385C13.044 16.3184 13.126 16.2363 13.126 16.1309V11.9649C13.126 11.8652 13.044 11.7774 12.9385 11.7774ZM11.3272 15.2695H9.5049V11.9649C9.5049 11.8594 9.42286 11.7774 9.3174 11.7774H8.64943C8.54396 11.7774 8.46193 11.8594 8.46193 11.9649V16.1309C8.46193 16.1836 8.4795 16.2246 8.51466 16.2598C8.54982 16.2891 8.59083 16.3125 8.64357 16.3125H11.3213C11.4268 16.3125 11.5088 16.2305 11.5088 16.125V15.457C11.5088 15.3574 11.4268 15.2695 11.3272 15.2695ZM21.2588 11.7774H18.5811C18.4815 11.7774 18.3936 11.8594 18.3936 11.9649V16.1309C18.3936 16.2305 18.4756 16.3184 18.5811 16.3184H21.2588C21.3643 16.3184 21.4463 16.2363 21.4463 16.1309V15.4629C21.4463 15.3574 21.3643 15.2754 21.2588 15.2754H19.4365V14.5723H21.2588C21.3643 14.5723 21.4463 14.4902 21.4463 14.3848V13.711C21.4463 13.6055 21.3643 13.5235 21.2588 13.5235H19.4365V12.8203H21.2588C21.3643 12.8203 21.4463 12.7383 21.4463 12.6328V11.9649C21.4404 11.8652 21.3584 11.7774 21.2588 11.7774ZM28.0498 6.66212V23.3789C28.044 26.0039 25.8936 28.1309 23.2627 28.125H6.54591C3.92091 28.1192 1.79396 25.9629 1.79982 23.3379V6.62111C1.80568 3.99611 3.96193 1.86915 6.58693 1.87501H23.3037C25.9287 1.88087 28.0557 4.03126 28.0498 6.66212ZM24.4404 13.8457C24.4404 9.56837 20.1514 6.0879 14.8838 6.0879C9.61622 6.0879 5.32716 9.56837 5.32716 13.8457C5.32716 17.6777 8.7256 20.8887 13.3193 21.4981C14.4385 21.7383 14.3096 22.1485 14.0576 23.6543C14.0166 23.8945 13.8643 24.5977 14.8838 24.1699C15.9033 23.7422 20.3858 20.9297 22.3955 18.6211C23.7783 17.0977 24.4404 15.5567 24.4404 13.8457Z" fill="black" />
                    </svg>
                </div>
                <div class="fb">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.6641 1.875H4.17969C3.40269 1.875 2.65751 2.17132 2.10809 2.69876C1.55866 3.22621 1.25 3.94158 1.25 4.6875L1.25 25.3125C1.25 26.0584 1.55866 26.7738 2.10809 27.3012C2.65751 27.8287 3.40269 28.125 4.17969 28.125H12.5568V19.2006H8.71155V15H12.5568V11.7984C12.5568 8.15684 14.8151 6.14531 18.2739 6.14531C19.9304 6.14531 21.6626 6.42891 21.6626 6.42891V10.0031H19.754C17.8735 10.0031 17.287 11.1234 17.287 12.2725V15H21.485L20.8136 19.2006H17.287V28.125H25.6641C26.4411 28.125 27.1862 27.8287 27.7357 27.3012C28.2851 26.7738 28.5938 26.0584 28.5938 25.3125V4.6875C28.5938 3.94158 28.2851 3.22621 27.7357 2.69876C27.1862 2.17132 26.4411 1.875 25.6641 1.875Z" fill="black" />
                    </svg>

                </div>
                <div class="ins"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9311 8.26221C11.2046 8.26221 8.19873 11.2681 8.19873 14.9946C8.19873 18.7212 11.2046 21.727 14.9311 21.727C18.6577 21.727 21.6636 18.7212 21.6636 14.9946C21.6636 11.2681 18.6577 8.26221 14.9311 8.26221ZM14.9311 19.3716C12.5229 19.3716 10.5542 17.4087 10.5542 14.9946C10.5542 12.5806 12.5171 10.6177 14.9311 10.6177C17.3452 10.6177 19.3081 12.5806 19.3081 14.9946C19.3081 17.4087 17.3393 19.3716 14.9311 19.3716ZM23.5093 7.98681C23.5093 8.85986 22.8061 9.55713 21.939 9.55713C21.0659 9.55713 20.3686 8.854 20.3686 7.98681C20.3686 7.11963 21.0718 6.4165 21.939 6.4165C22.8061 6.4165 23.5093 7.11963 23.5093 7.98681ZM27.9683 9.58056C27.8686 7.47705 27.3882 5.61377 25.8472 4.07861C24.312 2.54346 22.4487 2.06299 20.3452 1.95752C18.1772 1.83447 11.6792 1.83447 9.51123 1.95752C7.41357 2.05713 5.55029 2.5376 4.00928 4.07275C2.46826 5.60791 1.99365 7.47119 1.88818 9.57471C1.76514 11.7427 1.76514 18.2407 1.88818 20.4087C1.98779 22.5122 2.46826 24.3755 4.00928 25.9106C5.55029 27.4458 7.40771 27.9263 9.51123 28.0317C11.6792 28.1548 18.1772 28.1548 20.3452 28.0317C22.4487 27.9321 24.312 27.4517 25.8472 25.9106C27.3823 24.3755 27.8628 22.5122 27.9683 20.4087C28.0913 18.2407 28.0913 11.7485 27.9683 9.58056ZM25.1675 22.7349C24.7104 23.8833 23.8257 24.7681 22.6714 25.231C20.9429 25.9165 16.8413 25.7583 14.9311 25.7583C13.021 25.7583 8.91357 25.9106 7.19092 25.231C6.04248 24.7739 5.15771 23.8892 4.69482 22.7349C4.00928 21.0063 4.16748 16.9048 4.16748 14.9946C4.16748 13.0845 4.01514 8.97705 4.69482 7.25439C5.15185 6.10596 6.03662 5.22119 7.19092 4.7583C8.91943 4.07275 13.021 4.23096 14.9311 4.23096C16.8413 4.23096 20.9487 4.07861 22.6714 4.7583C23.8198 5.21533 24.7046 6.1001 25.1675 7.25439C25.853 8.98291 25.6948 13.0845 25.6948 14.9946C25.6948 16.9048 25.853 21.0122 25.1675 22.7349Z" fill="black" />
                    </svg>
                </div>
                <div class="link"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.02138 9.45504C10.607 6.98745 14.9038 6.98745 17.4894 9.45504C19.8145 11.6745 20.1587 15.2123 18.2474 17.7647L18.1962 17.8357C17.7173 18.4705 16.7872 18.6214 16.1222 18.1642C15.4526 17.707 15.2945 16.8192 15.7734 16.1844L15.8246 16.1134C16.8895 14.6885 16.7221 12.7398 15.4247 11.5014C13.9645 10.1076 11.5882 10.1076 10.1233 11.5014L4.90568 16.4863C3.44037 17.8446 3.44037 20.1484 4.90568 21.5467C6.19847 22.7851 8.2446 22.9449 9.73269 21.9284L9.8071 21.8396C10.4767 21.4224 11.4068 21.5689 11.8811 22.2081C12.3601 22.8473 12.2067 23.7351 11.537 24.1923L11.4626 24.2411C8.74683 26.0655 5.12425 25.7725 2.79956 23.5575C0.173584 21.0495 0.173584 16.9835 2.79956 14.4799L8.02138 9.45504ZM21.7398 20.5035C19.1123 23.0115 14.8573 23.0115 12.2299 20.5035C9.90475 18.2841 9.60249 14.7862 11.5138 12.2338L11.5649 12.1628C12.002 11.528 12.9321 11.3771 13.6389 11.8343C14.3086 12.2516 14.4667 13.1393 13.9877 13.8141L13.9366 13.8851C12.8716 15.27 13.0391 17.2587 14.3365 18.4971C15.7967 19.8909 18.173 19.8909 19.6378 18.4971L24.8555 13.5122C26.3203 12.114 26.3203 9.81016 24.8555 8.45185C23.5627 7.21472 21.5166 7.05314 20.0285 8.0701L19.9541 8.11893C19.2844 8.57614 18.3544 8.3897 17.88 7.78956C17.401 7.15124 17.5545 6.2639 18.2241 5.80802L18.2985 5.75831C20.9725 3.9344 24.6369 4.22377 26.9621 6.44279C29.5895 8.94901 29.5895 13.0151 26.9621 15.5186L21.7398 20.5035Z" fill="black" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- </dialog> -->

        <!-- ---------------------------------燈箱效果------------------------------------------------- -->

        <!-- img -->
        <div class="S-product-img">
            <div class="S-product-img-left column">
                <img src="<?= $k['item_imgs'] ?>item0.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="S-product-img-right">
                <div class="S-product-img-right-up column">
                    <img src="<?= $i['img'] ?>item1.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="S-product-img-right-down-g">
                    <div class="S-product-img-right-down column">
                        <img src="<?= $i['img'] ?>item2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                    <button class="more-img">+7</button>
                </div>
            </div>
        </div>


        <!-- --------demo大圖展示區域------------ -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <div class="mySlides-wrap">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="mySlides">
                            <img src="imgs/items<?= 1 ?>/item<?= $i ?>.jpg" style="width:100%">
                        </div>

                    <?php endfor; ?>
                    <!--
                    <div class="mySlides">
                        <img src="imgs/img1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="imgs/img2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="imgs/img3.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="imgs/img4.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img5.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img6.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img7.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img8.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img9.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img10.jpg" style="width:100%">
                    </div>
-->
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- <div class="caption-container">
                    <p id="caption"></p>
                  </div> -->

                <!-- 下排圖片 -->
                <div class="column-bottom">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="column">
                            <img class="demo cursor" src="imgs/items<?= 1 ?>/item<?= $i ?>.jpg" style="width:100%" onclick="currentSlide(<?= $i + 1 ?>)" alt="Nature and sunrise">
                        </div>
                    <?php endfor; ?>
                    <!--
                    <div class="column">
                        <img class="demo cursor" src="imgs/img2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Northern Lights">
                    </div>
-->
                </div>
            </div>
        </div>


        <!-- -----------------info---------------------------------------------------------------------------- -->

        <div class="S-product-info">
            <div class="S-product-info-left">
                <h2 class="S-price">$<?= number_format($k['price']) ?>/月</h2>
                <h2 class="S-name"><?= $k['item_name'] ?></h2>
                <h3 class="S-location"><i class="fa-solid fa-location-dot"></i><?= $k['area'], $k['dist'], $k['address'] ?></h3>
                <h3 class="S-date"><i class="fa-solid fa-calendar-days"></i><?= $k['contract'] ?></h3>
                <p class="S-lg-d-none S-d-none"><i class="fa-solid fa-train-subway"></i><?= $k['close_station'] ?></p>
                <p class="S-lg-d-none S-d-none"><i class="fa-solid fa-ruler"></i>30 坪
                    <span><i class="fa-solid fa-stairs"></i><?= $k['floor'] ?></span>
                </p>
                <p class="S-lg-d-none S-d-none"><i class="fa-solid fa-door-open"></i><?= $k['rentaltype'], $k['floor'] ?></p>
            </div>
            <div class="S-product-info-right">
                <button type="button" class="pc-button-FEAC00-280 S-btn-order">預約看房</button>
                <form action="./Reservation_page.php" method="post">
                <!-- 日曆按鈕-->
                <!-- <button class="simplepicker-btn">Show Picker</button> -->
                <div class="event-log"><br></div>

                <button type="button" class="pc-button-F4F4F4-280 S-btn-conect"><a href="./FinalCheck_page.php">我要租屋</a></button>
                </form>

            </div>
        </div>

        <!-- ----------------Mobile 下拉式選單------------------------------------>
        <div class="S-mobile-dropdown S-d-none S-xs-d-block">
            <div class="dropdown_container">
                <button id="areaListBtn">
                    <div class="dropdown">
                        <span id="spanChange">請選擇資訊</span>
                        <img src="imgs/down-arrow.svg" alt="">
                    </div>
                </button>
                <div id="areaList" class="dropdown_list S-d-none S-xs-d-none">
                    <p class="S-menu-btn btn1 step-on">租屋資訊</p>
                    <p class="S-menu-btn btn2 ">物件設備</p>
                    <p class="S-menu-btn btn3 ">物件公設</p>
                    <p class="S-menu-btn btn4 ">物件特色</p>
                    <p class="S-menu-btn btn5 ">物件安全設備</p>
                    <p class="S-menu-btn btn6 ">物件其他費用</p>
                    <p class="S-menu-btn btn7 ">周邊機能</p>
                    <p class="S-menu-btn btn8 ">室友簡介與喜好</p>
                </div>
            </div>
        </div>

        <!-- 下拉選單 -->
        <!-- <div class="dropdown_container">
            <button id="areaListBtn">
                <div class="dropdown">
                    <span>縣市</span> 
                    <img src="imgs/down-arrow.svg" alt="">
                </div>
            </button>
            <div id="areaList" class="dropdown_list" hidden>
                <p class="" >台北市</p>
                <p class="" >新北市</p>
                <p class="" >基隆市</p>
            </div>
        </div> -->







        <!-- ----------------電腦下拉式選單------------------------------------>
        <div class="S-dropdown">
            <!------------------------------ S-d-none S-xs-d-none  
                    -----------------------------電腦版消失 手機版消失---------------------------->

            <!-- 下拉式選單 租屋資訊 -->
            <div class="S-menu-wrap S-menu-RentInfo S-xs-d-block">

                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1 step-on">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>





                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/租屋資訊.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon-c">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>共生</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>坪數</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>樓層</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>房間</p>
                        </div>

                    </div>
                </div>

                <!-- 手機版調整高度做收合 -->
                <div class="S-menu-info">
                    <p>周邊機能完善，離捷運站步行只要30分鐘，非常方便，近師大商圈，環境單純，房間寬敞舒適，室友友善，和藹可親，絕對是居家旅行，必備租屋。
                    </p>
                    <button href="#" class="S-menu-info-more S-d-none S-xs-d-block" id="more">查看更多</button>

                </div>
            </div>

            <!-- 下拉式選單 物件設備 -->
            <div class="S-menu-wrap S-menu-Equipment S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2 step-on">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>





                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件設備.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>冰箱</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冷氣.svg" alt="">
                            <p>冷氣</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/床鋪.svg" alt="">
                            <p>床鋪</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/桌椅.svg" alt="">
                            <p>桌椅</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/沙發.svg" alt="">
                            <p>沙發</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/洗衣機.svg" alt="">
                            <p>洗衣機</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/浴缸.svg" alt="">
                            <p>浴缸</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/熱水器.svg" alt="">
                            <p>熱水器</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/瓦斯.svg" alt="">
                            <p>瓦斯</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/第四台.svg" alt="">
                            <p>第四台</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/電視.svg" alt="">
                            <p>電視</p>
                        </div>
                    </div>
                </div>


            </div>

            <!-- 下拉式選單 物件公設 -->
            <div class="S-menu-wrap S-menu-PublicFacilities S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3  step-on">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件公設.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/交誼廳.svg" alt="">
                            <p>交誼廳</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/客廳.svg" alt="">
                            <p>客廳</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/廚房.svg" alt="">
                            <p>廚房</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/陽台.svg" alt="">
                            <p>陽台</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/電梯.svg" alt="">
                            <p>電梯</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 下拉式選單 物件特色 -->
            <div class="S-menu-wrap S-menu-Features S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4 step-on">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件特色.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon center">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件特色/限女性.svg" alt="">
                            <p>限女性</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件特色/可養寵物.svg" alt="">
                            <p>可養寵物</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件特色/可開伙.svg" alt="">
                            <p>可開伙</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- 下拉式選單 物件安全設備 -->
            <div class="S-menu-wrap S-menu-SafetyEquipment S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5 step-on">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件安全設備.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/安全門窗.svg" alt="">
                            <p>安全門窗</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/滅火器.svg" alt="">
                            <p>滅火器</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/灑水器.svg" alt="">
                            <p>灑水器</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/煙霧警報.svg" alt="">
                            <p>煙霧警報</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- 下拉式選單 物件其他費用 -->
            <div class="S-menu-wrap S-menu-OtherFee S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6 step-on">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件其他費用.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/水電費.svg" alt="">
                            <p>水電費</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/停車費.svg" alt="">
                            <p>停車費</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/清潔費.svg" alt="">
                            <p>清潔費</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/第四台.svg" alt="">
                            <p>第四台</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/網路費.svg" alt="">
                            <p>網路費</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- 下拉式選單 周邊機能 -->
            <div class="S-menu-wrap S-menu-Environment S-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7 step-on">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>


                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/周邊機能.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/學校.svg" alt="">
                            <p>學校</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/市場.svg" alt="">
                            <p>市場</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/捷運站.svg" alt="">
                            <p>捷運站</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/火車站.svg" alt="">
                            <p>火車站</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/高鐵站.svg" alt="">
                            <p>高鐵站</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/百貨公司.svg" alt="">
                            <p>百貨公司</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/超市.svg" alt="">
                            <p>超市</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/醫院.svg" alt="">
                            <p>醫院</p>
                        </div>
                        
                    </div>
                </div>


                <div class="S-menu-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14459.21407901372!2d121.54840685!3d25.0407411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd3c5fd79dd%3A0xa13fa6237f83c610!2z5bWc5pysIOmrmOe0mueUn-WQkOWPuOWwiOmWgOW6lyBTQUtJbW90byBCYWtlcnnlj7DljJfml5foiablupc!5e0!3m2!1szh-TW!2stw!4v1652345581238!5m2!1szh-TW!2stw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>




            </div>
            <!-- 下拉式選單 室友簡介與喜好 -->
            <div class="S-menu-wrap S-menu-Roommates S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8 step-on">室友簡介與喜好</div>
                </div>


                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/室友簡介與喜好.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/唱歌.svg" alt="">
                            <p>唱歌</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/宅.svg" alt="">
                            <p>宅</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/手做.svg" alt="">
                            <p>手做</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/文創.svg" alt="">
                            <p>文創</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/旅遊.svg" alt="">
                            <p>旅遊</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/烹飪.svg" alt="">
                            <p>烹飪</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/運動.svg" alt="">
                            <p>運動</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/閱讀.svg" alt="">
                            <p>閱讀</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/電影.svg" alt="">
                            <p>電影</p>
                        </div>
                        
                    </div>
                </div>


                <!-- 手機版調整高度做收合 -->
                <div class="S-menu-info">
                    <p>我們是一群熱愛電影和電動的好室友，歡迎跟我們搭伙，我們有PS5、switch、VR、該有的應有盡有，絕對不會無聊。歡迎來當我們的室友!!
                    </p>
                    <button href="#" class="S-menu-info-more S-d-none S-xs-d-block" id="more2">查看更多</button>
                </div>




            </div>
        </div>







        <!-- ----------------推薦租屋------------------------------------>


        <div class="S-menu-title">
            <img src="imgs/推薦租屋.svg" alt="">
        </div>


        <!-- lg-card 大商品圖 -->
        <div class="S-lg-card-wrap-top S-xs-d-none">
            <div class="S-lg-card-wrap col-lg-4">
                <div class="S-lg-share">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="S-lg-like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                    </svg>
                </div>
                <div class="S-lg-card">
                    <div class="S-lg-card-img">
                        <img src="imgs/bedroom-6778193_1920.jpg" alt="">
                    </div>
                    <div class="S-lg-card-info">
                        <h4>
                            <span>三重大樓</span> 新北市三重區
                        </h4>
                        <div class="S-lg-card-info-2">
                            <p>
                                整層住家 6 樓 3房 2 廳 2衛浴
                            </p>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="S-lg-card-wrap col-lg-4">
                <div class="S-lg-share">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="S-lg-like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                    </svg>
                </div>
                <div class="S-lg-card">
                    <div class="S-lg-card-img">
                        <img src="imgs/bedroom-6778193_1920.jpg" alt="">
                    </div>
                    <div class="S-lg-card-info">
                        <h4>
                            <span>三重大樓</span> 新北市三重區
                        </h4>
                        <div class="S-lg-card-info-2">
                            <p>
                                整層住家 6 樓 3房 2 廳 2衛浴
                            </p>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="S-lg-card-wrap col-lg-4">
                <div class="S-lg-share">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="S-lg-like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                    </svg>
                </div>
                <div class="S-lg-card">
                    <div class="S-lg-card-img">
                        <img src="imgs/bedroom-6778193_1920.jpg" alt="">

                    </div>
                    <div class="S-lg-card-info">
                        <h4>
                            <span>三重大樓</span> 新北市三重區
                        </h4>
                        <div class="S-lg-card-info-2">
                            <p>
                                整層住家 6 樓 3房 2 廳 2衛浴
                            </p>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- xs-card 小商品圖 -->
        <!-- xs-card -->
        <div class="S-xs-train-wrap S-d-none S-xs-d-block">
            <div class="S-xs-train">
                <div class="S-xs-card-wrap S-lg-d-none S-xs-d-block">
                    <div class="S-xs-share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-xs-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg" alt="">
                        </div>
                        <div class="S-xs-card-info">
                            <h4>
                                <span>三重大樓</span>
                            </h4>
                            <div class="S-xs-card-info-2">
                                <p>新北市三重區
                                </p>
                                <h3>
                                    15,000/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="S-xs-card-wrap S-lg-d-none S-xs-d-block">
                    <div class="S-xs-share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-xs-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg" alt="">
                        </div>
                        <div class="S-xs-card-info">
                            <h4>
                                <span>三重大樓</span>
                            </h4>
                            <div class="S-xs-card-info-2">
                                <p>新北市三重區
                                </p>
                                <h3>
                                    15,000/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="S-xs-card-wrap S-lg-d-none S-xs-d-block">
                    <div class="S-xs-share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-xs-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg" alt="">
                        </div>
                        <div class="S-xs-card-info">
                            <h4>
                                <span>三重大樓</span>
                            </h4>
                            <div class="S-xs-card-info-2">
                                <p>新北市三重區
                                </p>
                                <h3>
                                    15,000/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>
<script src="js/jquery-3.6.0.js"></script>
<script src="nav-footer/nav-footer.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- 日曆 -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
    //    (以下)彈出視窗-----------------------------------------------------
    // var show = getElementsByIdName('#share-show');

    $("div.S-lg-share#share-show").click(function() {
        console.log('hihihi');
        $('#share-wrap').toggleClass('S-d-none');
    })






    //-------------------btn----------------------------------
    $('.btn1').click(function() {
        console.log('btn1');
        $('.btn1').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-RentInfo').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-RentInfo').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>租屋資訊</span>';

    })

    $('.btn2').click(function() {
        console.log('btn2');
        $('.btn2').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Equipment').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Equipment').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');


        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件設備</span>';
    })
    $('.btn3').click(function() {
        console.log('btn3');
        $('.btn3').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-PublicFacilities').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-PublicFacilities').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件公設</span>';
    })
    $('.btn4').click(function() {
        console.log('btn4');
        $('.btn4').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Features').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Features').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件特色</span>';
    })
    $('.btn5').click(function() {
        console.log('btn5');
        $('.btn5').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-SafetyEquipment').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-SafetyEquipment').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件安全設備</span>';
    })
    // S-menu-OtherFee
    $('.btn6').click(function() {
        console.log('btn6');
        $('.btn6').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-OtherFee').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-OtherFee').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件其他費用</span>';
    })
    // S-menu-Environment
    $('.btn7').click(function() {
        console.log('btn7');
        $('.btn7').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Environment').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Environment').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>周邊機能</span>';
    })

    // S-menu-Roommates
    $('.btn8').click(function() {
        console.log('btn8');
        $('.btn8').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Roommates').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Roommates').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>室友簡介與喜好</span>';
    })





    // 手機版下拉式選單
    $("button").click(function() {
        $(this).next(".dropdown_list").toggle()
        $(this).find("img").toggleClass("downArrow")
    })

    // 查看更多
    $('.S-menu-info-more').click(function() {
        console.log('more');
        if ($('.S-menu-info-more').html() === "查看更多") {
            $('.S-menu-info p').css('height', '100%');
            $('.S-menu-info-more').html("查看更少");
        } else {
            $('.S-menu-info p').css('height', '100px');
            $('.S-menu-info-more').html("查看更多");
        }

    })
    // ----------------------------------------------------------------
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

<!-------------------日曆-------------------------------------------- -->

<script src="./simplepicker-main/dist/simplepicker.js"></script>
<script>
    let simplepicker = new SimplePicker({
        zIndex: 10
    });

    // simplepicker.open();

    const $button = document.querySelector('.S-btn-order');
    const $eventLog = document.querySelector('.event-log');
    $button.addEventListener('click', (e) => {
        simplepicker.open();
    });

    // $eventLog.innerHTML += '\n\n';
    simplepicker.on('submit', (date, readableDate) => {
        $eventLog.innerHTML += readableDate + '\n';
    });

    simplepicker.on('close', (date) => {
        $eventLog.innerHTML += 'Picker Closed' + '\n';
    });


    // --------------------------------------換頁-----------------------------
    $(document).ready(function(){
        // $(".simplepicker-ok-btn").attr("type","submit")
        $(".simplepicker-ok-btn").html('<a href="Reservation_page.php" style="display:none;"></a>')
        
    })

    const date = $(".event-log").text()
    $(".simplepicker-ok-btn").click(function() {
            console.log('gooddddd');
            
            localStorage.setItem("date",JSON.stringify(date))
    })

        




</script>



=======
<?php
$title = '單一物件';
require './part/connect-db.php';


// 帶入房屋資料
$ksql = "SELECT * FROM `items` WHERE `sid` = 1;";
$stmt = $pdo->query($ksql);
$k = $stmt->fetch();

?>



<?php include __DIR__ . './part/head.php'  ?>

<link rel="stylesheet" href="./single_product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../product-card/product_page.css">
<link rel="stylesheet" href="nav-footer/nav-footer.css">
<link rel="stylesheet" href="single_product/lightbox2.css">
<!-- 日曆 -->
<!-- <link rel="stylesheet" href="../simplepicker-main/dist/simplepicker.css"> -->
<link rel="stylesheet" href="./simplepicker-main/dist/simplepicker.css">
<style>
    /* 自己頁面的css */
    /* ----------------calender------------------------- */
    .event-log {
        font-family: consolas, Monaco, monospace;
        margin: 10px 5px;
        line-height: 2;
        border: 1px solid #4c4c4c;
        height: auto;
        width: 90%;
        padding: 2px 6px;
        color: #4c4c4c;
        white-space: pre;
    }


    /* ----------------viewer------------------------- */

    .S-viewer-wrap {
        width: 100%;
        height: 50px;
        /* padding: 20px 0; */
        margin-bottom: 30px;
        margin-top: 180px;
        /* border: 1px solid red; */
        /* background-color: #fca; */
        position: relative;
    }

    .S-lg-viewer-g {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        color: #0E2E3D;
        fill: #0E2E3D;
    }

    .S-lg-viewer {
        display: flex;
        align-items: center;
    }

    .S-lg-viewer i {
        margin-right: 10px;
        font-size: 16px;
    }

    .S-lg-link-g {
        display: flex;
        position: relative;
    }

    /* ----------------share link------------------------- */
    .share-wrap {
        position: absolute;
        top: 29%;
        left: 70%;
    }

    .S-viewer-wrap .S-lg-share {
        font-size: 1.5em;
        margin: 0 20px;
        display: flex;
        justify-content: center;
        background-color: #F1EDEA;
        padding: 10px;
        border-radius: 50%;
        position: relative;
        right: 0;
    }

    .S-viewer-wrap .S-lg-share:hover {
        background-color: #75BBE3;

    }

    .S-viewer-wrap .S-lg-like {
        position: relative;
        display: flex;
        right: 0;
        background-color: #F1EDEA;
        border-radius: 50%;
    }

    .S-viewer-wrap .S-lg-like:hover {
        background-color: #75BBE3;


    }

    .S-viewer-wrap .S-lg-like svg {
        width: 25px;
    }

    .pc-button-F4F4F4-280 {
        margin-bottom: 30px;
    }

    .pc-button-F4F4F4-280 a {
        color: #0E2E3D;
        text-decoration: none;
    }


    /* ------------------------------------------- */


    /* 照片區 */

    .S-product-img {
        width: 100%;
        height: 600px;
        /* border: 1px solid blue; */
        display: flex;
    }

    .S-product-img-left {
        width: 50%;
        height: 600px;
        overflow: hidden;
        /* height: 820px; */
        /* border: 1px solid green; */
        /* background: url(imgs/paul-hanaoka-Dl6H4_nzBpE-unsplash.jpg)center center/cover no-repeat; */
    }

    .S-product-img-left img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .S-product-img-right {
        width: 50%;
        /* height: 820px; */
        /* border: 1px solid purple; */
        display: flex;
        flex-direction: column;
        margin-left: 10px;
    }

    .S-product-img-right-up {
        margin-bottom: 10px;
        width: 100%;
        height: 50%;
        /* border: 1px solid purple; */
        /* background: url(imgs/paul-hanaoka-Dl6H4_nzBpE-unsplash.jpg)center center/cover no-repeat; */
    }

    .S-product-img-right-down-g {
        position: relative;

    }

    .S-product-img-right-down {
        position: relative;
        width: 100%;
        height: 300px;
        /* border: 1px solid purple; */
        /* background: url(imgs/paul-hanaoka-Dl6H4_nzBpE-unsplash.jpg)center center/cover no-repeat; */
        /* display: flex; */
        /* justify-content: center; */
        transition: .8s;
        overflow: hidden;
    }

    .S-product-img-right-down:hover {
        filter: brightness(.5);
        /* background-size: 120%; */
    }

    button.more-img {
        position: absolute;
        top: 45%;
        left: 46%;
        /* z-index: 888; */
        font-weight: 700;
        font-size: 50px;
        color: #fff;
        background: transparent;
        pointer-events: none;
    }

    /* 商品資訊 info */

    .S-product-info {
        /* margin-top: 50px; */
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .S-product-info-right {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
    }

    .S-product-info-right button {
        margin: 15px 0;
    }

    h2 {
        color: #0E2E3D;
    }

    h2.S-name {
        padding: 0 0 10px 0;
    }

    h2.S-price {
        padding: 30px 0;
    }

    h3.S-location {
        padding: 30px 0 10px 0;
    }

    h3.S-location i {
        margin-right: 10px;
        /* padding: 0 0 30px 0; */
    }

    .S-date i {
        margin-right: 10px;
    }


    /* 8個選項的選單 S-menu */

    .S-menu-wrap {
        margin-top: 50px;
        width: 100%;
        min-height: 400px;
        /* border: 1px solid red; */
    }

    .S-menu {
        width: 100%;
        min-height: 80px;
        /* background-color: #ccc; */
        display: flex;
    }

    .S-menu-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 70px;
        font-weight: 700;
        color: #0E2E3D;
        background-color: #F1EDEA;
    }

    .S-menu-title {
        margin-top: 30px;
        text-align: center;
        font-size: 32px;
        font-weight: 900;
        position: relative;
        /* z-index: 1; */
    }

    .S-menu-title2 {
        margin-top: 80px;
    }

    .S-menu-title-bg {
        /* margin: 20px; */
        margin-left: 50px;
        padding: 30px 0 0;
        text-align: center;
    }

    .S-lg-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    /* -----------------8個項目menu------------------------------ */

    .step-on {
        background: #FEAC00;
    }


    /* 租屋資訊 S-menu-RentInfo */


    /* --------在桌機版消失display-none------------------------------------------------------------- */

    .S-d-none {
        display: none;
    }


    /* --------------------------------------------------------------------------------------------- */

    .S-menu-wrap {
        /* background: pink; */
        margin: 54px auto 0;
    }

    .S-menu-icon-wrap {
        /* background: pink; */
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 30px 0 0px;
        margin: auto;
        text-align: center;
    }

    .S-menu-icon {
        width: 360px;
        display: flex;
        flex-wrap: wrap;
    }

    .S-menu-icon-c {
        /* background: purple; */
        /* width: 49.5%; */
        display: flex;
        justify-content: center;
        /* flex-wrap: wrap; */
    }

    .S-menu-icon img {
        margin: 10px 30px;
        height: 30px;
        width: 30px;
    }

    .center {
        justify-content: center;
    }

    .S-menu-icon-c img {
        margin: 10px 30px;
    }

    .S-menu-icon p,
    .S-menu-icon-c p {
        margin-top: 0px;
        margin-bottom: 30px;
    }

    .S-menu-info {
        line-height: 2em;
        padding: 0 110px;
    }

    .S-menu-map {
        margin-top: 30px;
    }


    /* ----------------------------------------------- */

    .S-lg-card-wrap-top {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }

    .S-lg-card-wrap {
        margin: 0 15px;
    }


    /* footer */

    .footer_container {
        margin-top: 266px;
    }


    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ */


    /* 手機版 小於375 */

    @media screen and (max-width:376px) {

        /* --------在桌機版消失display-none------------------------------------------------------------- */
        .S-xs-d-block {
            display: block;
        }

        .S-xs-d-none {
            display: none;
        }

        /* ----------------share link------------------------- */
        .share-wrap {
            position: absolute;
            top: 22%;
            left: 28%;
        }

        /* --------------------------------------------------------------------------------------------- */
        /* -----------------單一物件的內容------------------ */
        .S-viewer-wrap {
            width: 100%;
            height: 100%;
            margin-top: 110px;
            margin-bottom: 20px;
            position: relative;
        }

        .S-lg-viewer-g {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #0E2E3D;
            fill: #0E2E3D;
        }

        .S-lg-viewer {
            display: flex;
            /* justify-content:flex-end; */
            align-items: center;
        }

        .S-lg-icons {
            display: flex;
        }

        .S-lg-viewer i {
            margin-right: 10px;
            font-size: 14.4px;
        }

        .S-lg-link-g {
            display: flex;
        }

        .S-viewer-wrap .S-lg-share {
            width: 30px;
            height: 30px;
            font-size: 15px;
            margin-right: 10px;
            display: flex;
            justify-content: center;
            background-color: #F1EDEA;
            /* padding: 10px; */
            border-radius: 50%;
        }

        .S-viewer-wrap .S-lg-like {
            width: 30px;
            height: 30px;
            display: flex;
            background-color: #F1EDEA;
            border-radius: 50%;
        }

        .S-viewer-wrap .S-lg-like svg {
            width: 15px;
        }

        /* 商品資訊info */
        h2.S-price {
            font-size: 24px;
            padding: 0 0 10px 0;
        }

        h2.S-name {
            font-size: 20px;
            padding: 0 0 10px 0;
        }

        h3.S-location {
            font-size: 16px;
            padding: 0 0 10px 0;
        }

        h3.S-location i {
            margin-right: 5px;
        }

        .S-date {
            font-size: 16px;
        }

        .S-date i {
            margin-right: 5px;
        }

        /* -----------------------------------單一物件的下拉式選單------------------ */
        .dropdown_container {
            background-color: #F1EDEA;
            /* background-color: #ccc; */
            /* border:1px solid #5D8DC1; */
        }

        #areaList {
            z-index: 888;
            background-color: #F1EDEA;
            text-align: center;
            /* border:1px solid #5D8DC1; */
        }

        #areaListBtn {
            height: 60px;
        }

        .S-mobile-dropdown {
            margin-top: 40px;
            background: #fff;
            /* z-index: 8888; */
            z-index: 1;

        }

        .S-mobile-dropdown button .dropdown {
            height: 60px;
            color: #0E2E3D;
            background: #FEAC00;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .dropdown_list {
            z-index: 0;
            padding: 10px 0;
            margin-top: 20px;
            text-indent: 0px;
        }

        /* .downArrow{
        height: 60px;    
    }  */

        .S-mobile-dropdown button .dropdown span {
            color: #0E2E3D;
        }

        button .dropdown>span {
            font-weight: 900;
            opacity: 1;
        }

        /* 租屋資訊 */
        .S-menu-wrap {
            margin: 0px auto 0;
        }

        .S-menu-icon-wrap {
            width: 97%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 30px;
            margin: auto;
            text-align: center;
        }

        .S-menu-icon {
            width: 100%;
            flex-wrap: wrap;
            /* border: 1px solid blue; */
            display: flex;
        }

        .S-menu-icon-group img {
            width: 20px;
        }

        .S-menu-icon-wrap p {
            margin-top: 0;
            font-size: 12px;
        }

        /* --------------xs-card 卡片輪播牆-------------------------------- */
        .S-xs-train-wrap {
            /* border: 10px solid #0E2E3D; */
            width: 100%;
            overflow: scroll;

        }

        .S-xs-train {
            /* transform: translateX(30px); */
            width: 300%;
            display: flex;
        }

        /* -----------------------------------單一物件的照片區塊------------------ */
        .S-product-img {
            width: 100%;
            height: 215px;
            /* border: 1px solid blue; */
            display: flex;
        }

        .S-product-img-left {
            width: 100%;
            height: 215px;
            /* border: 1px solid green; */
            /* background: url(imgs/spacejoy-sh6Aj176NAQ-unsplash.jpg)center center/cover no-repeat; */
        }

        .S-product-img-right {
            display: none;
        }

        .S-product-img-right-up {
            margin-bottom: 16px;
            width: 100%;
            height: 50%;
            /* border: 1px solid purple; */
            background: url(imgs/spacejoy-sh6Aj176NAQ-unsplash.jpg)center center/cover no-repeat;
        }

        .S-product-img-right-down {
            width: 100%;
            height: 50%;
            /* border: 1px solid purple; */
            background: url(imgs/spacejoy-sh6Aj176NAQ-unsplash.jpg)center center/cover no-repeat;
        }

        /* -----------------單一物件的資訊info------------------ */
        .S-product-info {
            margin-top: 30px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            /* justify-content: space-between; */
            /* align-items: center; */
        }

        .S-product-info-left h1 {
            font-size: 24px;
            padding: 10px 0;
            /* font-size: 32px; */
            color: #0E2E3D;
        }

        .S-product-info-left h1.S-product-name {
            font-size: 20px;
        }

        .S-product-info-left p {
            font-size: 16px;
            padding: 5px 0;
            color: #0E2E3D;
        }

        .S-product-info-right {
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        button.S-btn-order {
            margin-right: 10px;
        }

        .S-btn-conect {
            margin-left: 5px;
        }

        /* 下拉式選單 */
        .S-xs-menu-wrap {
            font-weight: 900;
            width: 100%;
            background-color: #FEAC00;
            color: #0E2E3D;
            display: flex;
            justify-content: space-between;
            padding: 10px 8px;
        }

        .S-xs-menu {
            display: flex;
            /* align-items: center; */
            font-size: 20px;
            font-weight: 900;
        }

        .S-xs-menu-wrap i {
            margin-top: 4px;
            font-size: 1.2em;
        }

        .S-menu-icon i {
            margin: 10px 20px;
            font-size: 20px;
        }

        .S-menu-info {
            /* margin-top: 30px; */
            margin-bottom: 80px;
            line-height: 2em;
            padding: 0 0px;
            display: flex;
            flex-direction: column;
            text-align: justify;
            align-items: flex-end;
        }

        .S-menu-info p:nth-child(1) {
            height: 200px;
            overflow: hidden;
            /* border: 2px solid #0E2E3D; */
        }

        .S-menu-info-more {
            font-size: 16px;
            color: #5D8DC1;
            background: transparent;
            margin-top: 5px;
        }

        /* .S-menu-info a {
        text-decoration: none;
        display: flex;
        justify-content: flex-end;
        padding: 0 10px;
        color: #0E2E3D;
    } */
        /* --------------xs-card 卡片-------------------------------- */
        .S-xs-card-wrap {
            margin-top: 30px;
            /* padding: 5px; */
            margin: 0 5px;
            width: 250px;
            height: 247px;
            overflow: hidden;
            position: relative;
            /* border: 1px solid blue; */
        }

        .S-xs-share {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 1.2em;
            color: #0E2E3D;
            background-color: #F1EDEA;
            border-radius: 50%;
            position: absolute;
            top: 5%;
            right: 5%;
        }

        .S-xs-share i {
            font-size: 1.2em;
        }

        .S-xs-like {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 1.2em;
            color: #0E2E3D;
            background-color: #F1EDEA;
            border-radius: 50%;
            position: absolute;
            top: 5%;
            right: 25%;
        }

        .S-xs-like svg {
            width: 25px;
            height: 25px;
            fill: #0E2E3D;
        }

        .S-xs-card {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            /* border: 1px solid red; */
        }

        .S-xs-card-img {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .S-xs-card-img img {
            width: 100%;
            object-fit: cover;
        }

        .S-xs-card-info {
            padding: 10px 20px;
            /* border: 1px solid rgb(45, 95, 112); */
            background-color: #F1EDEA;
            margin: 0;
        }

        .S-xs-card-info h4 {
            height: 1em;
            font-size: 12px;
        }

        .S-xs-card-info h4 span {
            font-size: 16px;
            font-weight: 900;
            padding-right: 10px;
        }

        .S-xs-card-info-2 {
            margin-top: 10px;
            height: 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .S-xs-card-info p {
            font-size: .8em;
        }

        .S-xs-card-info h3 {
            display: inline;
        }

        /* footer */
        .footer_container {
            margin-top: 40px;
        }

        #areaListBtn {
            background: transparent;
            height: 0;
        }

    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<!-- 自己頁面的html -->
<div class="container">
    <div class="row">

        <div class="S-viewer-wrap">
            <div class="S-lg-viewer-g">
                <div class="S-lg-viewer">
                    <i class="fa-solid fa-eye"></i>
                    <p>瀏覽量: 5555 人</p>
                </div>
                <div class="S-lg-link-g">
                    <div class="S-lg-share" id="share-show">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-lg-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>


        <!-- 分享icon卡片 彈出視窗 -->
        <!-- <dialog id="infoModal show"> -->
        <div class="share-wrap S-d-none" id="share-wrap">
            <div class="share">
                <div class="line">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7432 11.9649V16.1309C17.7432 16.2363 17.6611 16.3184 17.5557 16.3184H16.8877C16.8233 16.3184 16.7647 16.2832 16.7354 16.2422L14.8252 13.6641V16.1367C14.8252 16.2422 14.7432 16.3242 14.6377 16.3242H13.9697C13.8643 16.3242 13.7822 16.2422 13.7822 16.1367V11.9707C13.7822 11.8652 13.8643 11.7832 13.9697 11.7832H14.6318C14.6904 11.7832 14.7549 11.8125 14.7842 11.8652L16.6943 14.4434V11.9707C16.6943 11.8652 16.7764 11.7832 16.8818 11.7832H17.5498C17.6553 11.7774 17.7432 11.8652 17.7432 11.9649ZM12.9385 11.7774H12.2705C12.1651 11.7774 12.083 11.8594 12.083 11.9649V16.1309C12.083 16.2363 12.1651 16.3184 12.2705 16.3184H12.9385C13.044 16.3184 13.126 16.2363 13.126 16.1309V11.9649C13.126 11.8652 13.044 11.7774 12.9385 11.7774ZM11.3272 15.2695H9.5049V11.9649C9.5049 11.8594 9.42286 11.7774 9.3174 11.7774H8.64943C8.54396 11.7774 8.46193 11.8594 8.46193 11.9649V16.1309C8.46193 16.1836 8.4795 16.2246 8.51466 16.2598C8.54982 16.2891 8.59083 16.3125 8.64357 16.3125H11.3213C11.4268 16.3125 11.5088 16.2305 11.5088 16.125V15.457C11.5088 15.3574 11.4268 15.2695 11.3272 15.2695ZM21.2588 11.7774H18.5811C18.4815 11.7774 18.3936 11.8594 18.3936 11.9649V16.1309C18.3936 16.2305 18.4756 16.3184 18.5811 16.3184H21.2588C21.3643 16.3184 21.4463 16.2363 21.4463 16.1309V15.4629C21.4463 15.3574 21.3643 15.2754 21.2588 15.2754H19.4365V14.5723H21.2588C21.3643 14.5723 21.4463 14.4902 21.4463 14.3848V13.711C21.4463 13.6055 21.3643 13.5235 21.2588 13.5235H19.4365V12.8203H21.2588C21.3643 12.8203 21.4463 12.7383 21.4463 12.6328V11.9649C21.4404 11.8652 21.3584 11.7774 21.2588 11.7774ZM28.0498 6.66212V23.3789C28.044 26.0039 25.8936 28.1309 23.2627 28.125H6.54591C3.92091 28.1192 1.79396 25.9629 1.79982 23.3379V6.62111C1.80568 3.99611 3.96193 1.86915 6.58693 1.87501H23.3037C25.9287 1.88087 28.0557 4.03126 28.0498 6.66212ZM24.4404 13.8457C24.4404 9.56837 20.1514 6.0879 14.8838 6.0879C9.61622 6.0879 5.32716 9.56837 5.32716 13.8457C5.32716 17.6777 8.7256 20.8887 13.3193 21.4981C14.4385 21.7383 14.3096 22.1485 14.0576 23.6543C14.0166 23.8945 13.8643 24.5977 14.8838 24.1699C15.9033 23.7422 20.3858 20.9297 22.3955 18.6211C23.7783 17.0977 24.4404 15.5567 24.4404 13.8457Z" fill="black" />
                    </svg>
                </div>
                <div class="fb">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.6641 1.875H4.17969C3.40269 1.875 2.65751 2.17132 2.10809 2.69876C1.55866 3.22621 1.25 3.94158 1.25 4.6875L1.25 25.3125C1.25 26.0584 1.55866 26.7738 2.10809 27.3012C2.65751 27.8287 3.40269 28.125 4.17969 28.125H12.5568V19.2006H8.71155V15H12.5568V11.7984C12.5568 8.15684 14.8151 6.14531 18.2739 6.14531C19.9304 6.14531 21.6626 6.42891 21.6626 6.42891V10.0031H19.754C17.8735 10.0031 17.287 11.1234 17.287 12.2725V15H21.485L20.8136 19.2006H17.287V28.125H25.6641C26.4411 28.125 27.1862 27.8287 27.7357 27.3012C28.2851 26.7738 28.5938 26.0584 28.5938 25.3125V4.6875C28.5938 3.94158 28.2851 3.22621 27.7357 2.69876C27.1862 2.17132 26.4411 1.875 25.6641 1.875Z" fill="black" />
                    </svg>

                </div>
                <div class="ins"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9311 8.26221C11.2046 8.26221 8.19873 11.2681 8.19873 14.9946C8.19873 18.7212 11.2046 21.727 14.9311 21.727C18.6577 21.727 21.6636 18.7212 21.6636 14.9946C21.6636 11.2681 18.6577 8.26221 14.9311 8.26221ZM14.9311 19.3716C12.5229 19.3716 10.5542 17.4087 10.5542 14.9946C10.5542 12.5806 12.5171 10.6177 14.9311 10.6177C17.3452 10.6177 19.3081 12.5806 19.3081 14.9946C19.3081 17.4087 17.3393 19.3716 14.9311 19.3716ZM23.5093 7.98681C23.5093 8.85986 22.8061 9.55713 21.939 9.55713C21.0659 9.55713 20.3686 8.854 20.3686 7.98681C20.3686 7.11963 21.0718 6.4165 21.939 6.4165C22.8061 6.4165 23.5093 7.11963 23.5093 7.98681ZM27.9683 9.58056C27.8686 7.47705 27.3882 5.61377 25.8472 4.07861C24.312 2.54346 22.4487 2.06299 20.3452 1.95752C18.1772 1.83447 11.6792 1.83447 9.51123 1.95752C7.41357 2.05713 5.55029 2.5376 4.00928 4.07275C2.46826 5.60791 1.99365 7.47119 1.88818 9.57471C1.76514 11.7427 1.76514 18.2407 1.88818 20.4087C1.98779 22.5122 2.46826 24.3755 4.00928 25.9106C5.55029 27.4458 7.40771 27.9263 9.51123 28.0317C11.6792 28.1548 18.1772 28.1548 20.3452 28.0317C22.4487 27.9321 24.312 27.4517 25.8472 25.9106C27.3823 24.3755 27.8628 22.5122 27.9683 20.4087C28.0913 18.2407 28.0913 11.7485 27.9683 9.58056ZM25.1675 22.7349C24.7104 23.8833 23.8257 24.7681 22.6714 25.231C20.9429 25.9165 16.8413 25.7583 14.9311 25.7583C13.021 25.7583 8.91357 25.9106 7.19092 25.231C6.04248 24.7739 5.15771 23.8892 4.69482 22.7349C4.00928 21.0063 4.16748 16.9048 4.16748 14.9946C4.16748 13.0845 4.01514 8.97705 4.69482 7.25439C5.15185 6.10596 6.03662 5.22119 7.19092 4.7583C8.91943 4.07275 13.021 4.23096 14.9311 4.23096C16.8413 4.23096 20.9487 4.07861 22.6714 4.7583C23.8198 5.21533 24.7046 6.1001 25.1675 7.25439C25.853 8.98291 25.6948 13.0845 25.6948 14.9946C25.6948 16.9048 25.853 21.0122 25.1675 22.7349Z" fill="black" />
                    </svg>
                </div>
                <div class="link"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.02138 9.45504C10.607 6.98745 14.9038 6.98745 17.4894 9.45504C19.8145 11.6745 20.1587 15.2123 18.2474 17.7647L18.1962 17.8357C17.7173 18.4705 16.7872 18.6214 16.1222 18.1642C15.4526 17.707 15.2945 16.8192 15.7734 16.1844L15.8246 16.1134C16.8895 14.6885 16.7221 12.7398 15.4247 11.5014C13.9645 10.1076 11.5882 10.1076 10.1233 11.5014L4.90568 16.4863C3.44037 17.8446 3.44037 20.1484 4.90568 21.5467C6.19847 22.7851 8.2446 22.9449 9.73269 21.9284L9.8071 21.8396C10.4767 21.4224 11.4068 21.5689 11.8811 22.2081C12.3601 22.8473 12.2067 23.7351 11.537 24.1923L11.4626 24.2411C8.74683 26.0655 5.12425 25.7725 2.79956 23.5575C0.173584 21.0495 0.173584 16.9835 2.79956 14.4799L8.02138 9.45504ZM21.7398 20.5035C19.1123 23.0115 14.8573 23.0115 12.2299 20.5035C9.90475 18.2841 9.60249 14.7862 11.5138 12.2338L11.5649 12.1628C12.002 11.528 12.9321 11.3771 13.6389 11.8343C14.3086 12.2516 14.4667 13.1393 13.9877 13.8141L13.9366 13.8851C12.8716 15.27 13.0391 17.2587 14.3365 18.4971C15.7967 19.8909 18.173 19.8909 19.6378 18.4971L24.8555 13.5122C26.3203 12.114 26.3203 9.81016 24.8555 8.45185C23.5627 7.21472 21.5166 7.05314 20.0285 8.0701L19.9541 8.11893C19.2844 8.57614 18.3544 8.3897 17.88 7.78956C17.401 7.15124 17.5545 6.2639 18.2241 5.80802L18.2985 5.75831C20.9725 3.9344 24.6369 4.22377 26.9621 6.44279C29.5895 8.94901 29.5895 13.0151 26.9621 15.5186L21.7398 20.5035Z" fill="black" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- </dialog> -->

        <!-- ---------------------------------燈箱效果------------------------------------------------- -->

        <!-- img -->
        <div class="S-product-img">
            <div class="S-product-img-left column">
                <img src="<?= $i['img'] ?>item0.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="S-product-img-right">
                <div class="S-product-img-right-up column">
                    <img src="<?= $i['img'] ?>item1.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="S-product-img-right-down-g">
                    <div class="S-product-img-right-down column">
                        <img src="<?= $i['img'] ?>item2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                    <button class="more-img">+7</button>
                </div>
            </div>
        </div>


        <!-- --------demo大圖展示區域------------ -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <div class="mySlides-wrap">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="mySlides">
                            <img src="imgs/items<?= 1 ?>/item<?= $i ?>.jpg" style="width:100%">
                        </div>

                    <?php endfor; ?>
                    <!--
                    <div class="mySlides">
                        <img src="imgs/img1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="imgs/img2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="imgs/img3.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="imgs/img4.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img5.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img6.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img7.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img8.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img9.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <img src="imgs/img10.jpg" style="width:100%">
                    </div>
-->
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- <div class="caption-container">
                    <p id="caption"></p>
                  </div> -->

                <!-- 下排圖片 -->
                <div class="column-bottom">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="column">
                            <img class="demo cursor" src="imgs/items<?= 1 ?>/item<?= $i ?>.jpg" style="width:100%" onclick="currentSlide(<?= $i + 1 ?>)" alt="Nature and sunrise">
                        </div>
                    <?php endfor; ?>
                    <!--
                    <div class="column">
                        <img class="demo cursor" src="imgs/img2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="imgs/img10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Northern Lights">
                    </div>
-->
                </div>
            </div>
        </div>


        <!-- -----------------info---------------------------------------------------------------------------- -->

        <div class="S-product-info">
            <div class="S-product-info-left">
                <h2 class="S-price">$<?= number_format($k['price']) ?>/月</h2>
                <h2 class="S-name"><?= $k['item_name'] ?></h2>
                <h3 class="S-location"><i class="fa-solid fa-location-dot"></i><?= $k['area'], $k['dist'], $k['address'] ?></h3>
                <h3 class="S-date"><i class="fa-solid fa-calendar-days"></i><?= $k['contract'] ?></h3>
                <p class="S-lg-d-none S-d-none"><i class="fa-solid fa-train-subway"></i><?= $k['close_station'] ?></p>
                <p class="S-lg-d-none S-d-none"><i class="fa-solid fa-ruler"></i>30 坪
                    <span><i class="fa-solid fa-stairs"></i><?= $k['floor'] ?></span>
                </p>
                <p class="S-lg-d-none S-d-none"><i class="fa-solid fa-door-open"></i><?= $k['rentaltype'], $k['floor'] ?></p>
            </div>
            <div class="S-product-info-right">
                <button type="button" class="pc-button-FEAC00-280 S-btn-order">預約看房</button>
                <form action="./Reservation_page.php" method="post">
                    <!-- 日曆按鈕-->
                    <!-- <button class="simplepicker-btn">Show Picker</button> -->
                    <div class="event-log" id="time" style="border:transparent;"></div>

                    <button type="button" class="pc-button-F4F4F4-280 S-btn-conect"><a href="./FinalCheck_page.php">我要租屋</a></button>
                </form>

            </div>
        </div>

        <!-- ----------------Mobile 下拉式選單------------------------------------>
        <div class="S-mobile-dropdown S-d-none S-xs-d-block">
            <div class="dropdown_container">
                <button id="areaListBtn">
                    <div class="dropdown">
                        <span id="spanChange">請選擇資訊</span>
                        <img src="imgs/down-arrow.svg" alt="">
                    </div>
                </button>
                <div id="areaList" class="dropdown_list S-d-none S-xs-d-none">
                    <p class="S-menu-btn btn1 step-on">租屋資訊</p>
                    <p class="S-menu-btn btn2 ">物件設備</p>
                    <p class="S-menu-btn btn3 ">物件公設</p>
                    <p class="S-menu-btn btn4 ">物件特色</p>
                    <p class="S-menu-btn btn5 ">物件安全設備</p>
                    <p class="S-menu-btn btn6 ">物件其他費用</p>
                    <p class="S-menu-btn btn7 ">周邊機能</p>
                    <p class="S-menu-btn btn8 ">室友簡介與喜好</p>
                </div>
            </div>
        </div>

        <!-- 下拉選單 -->
        <!-- <div class="dropdown_container">
            <button id="areaListBtn">
                <div class="dropdown">
                    <span>縣市</span> 
                    <img src="imgs/down-arrow.svg" alt="">
                </div>
            </button>
            <div id="areaList" class="dropdown_list" hidden>
                <p class="" >台北市</p>
                <p class="" >新北市</p>
                <p class="" >基隆市</p>
            </div>
        </div> -->







        <!-- ----------------電腦下拉式選單------------------------------------>
        <div class="S-dropdown">
            <!------------------------------ S-d-none S-xs-d-none  
                    -----------------------------電腦版消失 手機版消失---------------------------->

            <!-- 下拉式選單 租屋資訊 -->
            <div class="S-menu-wrap S-menu-RentInfo S-xs-d-block">

                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1 step-on">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>





                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/租屋資訊.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon-c">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>共生</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>坪數</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>樓層</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>房間</p>
                        </div>

                    </div>
                </div>

                <!-- 手機版調整高度做收合 -->
                <div class="S-menu-info">
                    <p>周邊機能完善，離捷運站步行只要30分鐘，非常方便，近師大商圈，環境單純，房間寬敞舒適，室友友善，和藹可親，絕對是居家旅行，必備租屋。
                    </p>
                    <button href="#" class="S-menu-info-more S-d-none S-xs-d-block" id="more">查看更多</button>

                </div>
            </div>

            <!-- 下拉式選單 物件設備 -->
            <div class="S-menu-wrap S-menu-Equipment S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2 step-on">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>





                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件設備.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冰箱.svg" alt="">
                            <p>冰箱</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/冷氣.svg" alt="">
                            <p>冷氣</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/床鋪.svg" alt="">
                            <p>床鋪</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/桌椅.svg" alt="">
                            <p>桌椅</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/沙發.svg" alt="">
                            <p>沙發</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/洗衣機.svg" alt="">
                            <p>洗衣機</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/浴缸.svg" alt="">
                            <p>浴缸</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/熱水器.svg" alt="">
                            <p>熱水器</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/瓦斯.svg" alt="">
                            <p>瓦斯</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/第四台.svg" alt="">
                            <p>第四台</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件設備/電視.svg" alt="">
                            <p>電視</p>
                        </div>
                    </div>
                </div>


            </div>

            <!-- 下拉式選單 物件公設 -->
            <div class="S-menu-wrap S-menu-PublicFacilities S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3  step-on">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件公設.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/交誼廳.svg" alt="">
                            <p>交誼廳</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/客廳.svg" alt="">
                            <p>客廳</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/廚房.svg" alt="">
                            <p>廚房</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/陽台.svg" alt="">
                            <p>陽台</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件公設/電梯.svg" alt="">
                            <p>電梯</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 下拉式選單 物件特色 -->
            <div class="S-menu-wrap S-menu-Features S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4 step-on">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件特色.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon center">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件特色/限女性.svg" alt="">
                            <p>限女性</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件特色/可養寵物.svg" alt="">
                            <p>可養寵物</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件特色/可開伙.svg" alt="">
                            <p>可開伙</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- 下拉式選單 物件安全設備 -->
            <div class="S-menu-wrap S-menu-SafetyEquipment S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5 step-on">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件安全設備.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/安全門窗.svg" alt="">
                            <p>安全門窗</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/滅火器.svg" alt="">
                            <p>滅火器</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/灑水器.svg" alt="">
                            <p>灑水器</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件安全設備/煙霧警報.svg" alt="">
                            <p>煙霧警報</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- 下拉式選單 物件其他費用 -->
            <div class="S-menu-wrap S-menu-OtherFee S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6 step-on">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>




                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/物件其他費用.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/水電費.svg" alt="">
                            <p>水電費</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/停車費.svg" alt="">
                            <p>停車費</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/清潔費.svg" alt="">
                            <p>清潔費</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/第四台.svg" alt="">
                            <p>第四台</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/物件其他費用/網路費.svg" alt="">
                            <p>網路費</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 下拉式選單 周邊機能 -->
            <div class="S-menu-wrap S-menu-Environment S-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7 step-on">周邊機能</div>
                    <div class="S-menu-btn btn8">室友簡介與喜好</div>
                </div>


                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/周邊機能.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/學校.svg" alt="">
                            <p>學校</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/市場.svg" alt="">
                            <p>市場</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/捷運站.svg" alt="">
                            <p>捷運站</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/火車站.svg" alt="">
                            <p>火車站</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/高鐵站.svg" alt="">
                            <p>高鐵站</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/百貨公司.svg" alt="">
                            <p>百貨公司</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/超市.svg" alt="">
                            <p>超市</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/周邊機能/醫院.svg" alt="">
                            <p>醫院</p>
                        </div>

                    </div>
                </div>


                <div class="S-menu-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14459.21407901372!2d121.54840685!3d25.0407411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd3c5fd79dd%3A0xa13fa6237f83c610!2z5bWc5pysIOmrmOe0mueUn-WQkOWPuOWwiOmWgOW6lyBTQUtJbW90byBCYWtlcnnlj7DljJfml5foiablupc!5e0!3m2!1szh-TW!2stw!4v1652345581238!5m2!1szh-TW!2stw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>




            </div>
            <!-- 下拉式選單 室友簡介與喜好 -->
            <div class="S-menu-wrap S-menu-Roommates S-d-none S-xs-d-none">
                <div class="S-menu S-xs-d-none">
                    <div class="S-menu-btn btn1">租屋資訊</div>
                    <div class="S-menu-btn btn2">物件設備</div>
                    <div class="S-menu-btn btn3">物件公設</div>
                    <div class="S-menu-btn btn4">物件特色</div>
                    <div class="S-menu-btn btn5">物件安全設備</div>
                    <div class="S-menu-btn btn6">物件其他費用</div>
                    <div class="S-menu-btn btn7">周邊機能</div>
                    <div class="S-menu-btn btn8 step-on">室友簡介與喜好</div>
                </div>


                <div class="S-menu-title-bg S-xs-d-none">
                    <img src="imgs/室友簡介與喜好.svg" alt="">
                </div>


                <div class="S-menu-icon-wrap">
                    <div class="S-menu-icon">
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/唱歌.svg" alt="">
                            <p>唱歌</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/宅.svg" alt="">
                            <p>宅</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/手做.svg" alt="">
                            <p>手做</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/文創.svg" alt="">
                            <p>文創</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/旅遊.svg" alt="">
                            <p>旅遊</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/烹飪.svg" alt="">
                            <p>烹飪</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/運動.svg" alt="">
                            <p>運動</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/閱讀.svg" alt="">
                            <p>閱讀</p>
                        </div>
                        <div class="S-menu-icon-group col-lg-3">
                            <img src="imgs/室友簡介與喜好/電影.svg" alt="">
                            <p>電影</p>
                        </div>

                    </div>
                </div>


                <!-- 手機版調整高度做收合 -->
                <div class="S-menu-info">
                    <p>我們是一群熱愛電影和電動的好室友，歡迎跟我們搭伙，我們有PS5、switch、VR、該有的應有盡有，絕對不會無聊。歡迎來當我們的室友!!
                    </p>
                    <button href="#" class="S-menu-info-more S-d-none S-xs-d-block" id="more2">查看更多</button>
                </div>




            </div>
        </div>







        <!-- ----------------推薦租屋------------------------------------>


        <div class="S-menu-title">
            <img src="imgs/推薦租屋.svg" alt="">
        </div>


        <!-- lg-card 大商品圖 -->
        <div class="S-lg-card-wrap-top S-xs-d-none">
            <div class="S-lg-card-wrap col-lg-4">
                <div class="S-lg-share">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="S-lg-like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                    </svg>
                </div>
                <div class="S-lg-card">
                    <div class="S-lg-card-img">
                        <img src="imgs/bedroom-6778193_1920.jpg" alt="">
                    </div>
                    <div class="S-lg-card-info">
                        <h4>
                            <span>三重大樓</span> 新北市三重區
                        </h4>
                        <div class="S-lg-card-info-2">
                            <p>
                                整層住家 6 樓 3房 2 廳 2衛浴
                            </p>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="S-lg-card-wrap col-lg-4">
                <div class="S-lg-share">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="S-lg-like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                    </svg>
                </div>
                <div class="S-lg-card">
                    <div class="S-lg-card-img">
                        <img src="imgs/bedroom-6778193_1920.jpg" alt="">
                    </div>
                    <div class="S-lg-card-info">
                        <h4>
                            <span>三重大樓</span> 新北市三重區
                        </h4>
                        <div class="S-lg-card-info-2">
                            <p>
                                整層住家 6 樓 3房 2 廳 2衛浴
                            </p>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="S-lg-card-wrap col-lg-4">
                <div class="S-lg-share">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="S-lg-like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                    </svg>
                </div>
                <div class="S-lg-card">
                    <div class="S-lg-card-img">
                        <img src="imgs/bedroom-6778193_1920.jpg" alt="">

                    </div>
                    <div class="S-lg-card-info">
                        <h4>
                            <span>三重大樓</span> 新北市三重區
                        </h4>
                        <div class="S-lg-card-info-2">
                            <p>
                                整層住家 6 樓 3房 2 廳 2衛浴
                            </p>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- xs-card 小商品圖 -->
        <!-- xs-card -->
        <div class="S-xs-train-wrap S-d-none S-xs-d-block">
            <div class="S-xs-train">
                <div class="S-xs-card-wrap S-lg-d-none S-xs-d-block">
                    <div class="S-xs-share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-xs-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg" alt="">
                        </div>
                        <div class="S-xs-card-info">
                            <h4>
                                <span>三重大樓</span>
                            </h4>
                            <div class="S-xs-card-info-2">
                                <p>新北市三重區
                                </p>
                                <h3>
                                    15,000/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="S-xs-card-wrap S-lg-d-none S-xs-d-block">
                    <div class="S-xs-share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-xs-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg" alt="">
                        </div>
                        <div class="S-xs-card-info">
                            <h4>
                                <span>三重大樓</span>
                            </h4>
                            <div class="S-xs-card-info-2">
                                <p>新北市三重區
                                </p>
                                <h3>
                                    15,000/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="S-xs-card-wrap S-lg-d-none S-xs-d-block">
                    <div class="S-xs-share">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="S-xs-like">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                        </svg>
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg" alt="">
                        </div>
                        <div class="S-xs-card-info">
                            <h4>
                                <span>三重大樓</span>
                            </h4>
                            <div class="S-xs-card-info-2">
                                <p>新北市三重區
                                </p>
                                <h3>
                                    15,000/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>
<script src="js/jquery-3.6.0.js"></script>
<script src="nav-footer/nav-footer.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- 日曆 -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
    //    (以下)彈出視窗-----------------------------------------------------
    // var show = getElementsByIdName('#share-show');

    $("div.S-lg-share#share-show").click(function() {
        console.log('hihihi');
        $('#share-wrap').toggleClass('S-d-none');
    })






    //-------------------btn----------------------------------
    $('.btn1').click(function() {
        console.log('btn1');
        $('.btn1').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-RentInfo').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-RentInfo').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>租屋資訊</span>';

    })

    $('.btn2').click(function() {
        console.log('btn2');
        $('.btn2').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Equipment').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Equipment').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');


        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件設備</span>';
    })
    $('.btn3').click(function() {
        console.log('btn3');
        $('.btn3').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-PublicFacilities').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-PublicFacilities').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件公設</span>';
    })
    $('.btn4').click(function() {
        console.log('btn4');
        $('.btn4').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Features').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Features').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件特色</span>';
    })
    $('.btn5').click(function() {
        console.log('btn5');
        $('.btn5').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-SafetyEquipment').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-SafetyEquipment').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件安全設備</span>';
    })
    // S-menu-OtherFee
    $('.btn6').click(function() {
        console.log('btn6');
        $('.btn6').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-OtherFee').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-OtherFee').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>物件其他費用</span>';
    })
    // S-menu-Environment
    $('.btn7').click(function() {
        console.log('btn7');
        $('.btn7').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Environment').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Environment').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>周邊機能</span>';
    })

    // S-menu-Roommates
    $('.btn8').click(function() {
        console.log('btn8');
        $('.btn8').addClass('step-on').siblings().removeClass('step-on');
        $('.S-menu-Roommates').removeClass('S-d-none S-xs-d-none').addClass('S-xs-d-block');
        $('.S-menu-Roommates').siblings().addClass('S-d-none').removeClass('S-xs-d-block');
        $('#areaList').css('display', 'none');

        var spanChange = document.getElementById('spanChange');
        spanChange.innerHTML = '<span>室友簡介與喜好</span>';
    })





    // 手機版下拉式選單
    $("button").click(function() {
        $(this).next(".dropdown_list").toggle()
        $(this).find("img").toggleClass("downArrow")
    })

    // 查看更多
    $('.S-menu-info-more').click(function() {
        console.log('more');
        if ($('.S-menu-info-more').html() === "查看更多") {
            $('.S-menu-info p').css('height', '100%');
            $('.S-menu-info-more').html("查看更少");
        } else {
            $('.S-menu-info p').css('height', '100px');
            $('.S-menu-info-more').html("查看更多");
        }

    })
    // ----------------------------------------------------------------
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

<!-------------------日曆-------------------------------------------- -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="./simplepicker-main/dist/simplepicker.js"></script>
<script>
    let simplepicker = new SimplePicker({
        zIndex: 10
    });

    // simplepicker.open();

    const $button = document.querySelector('.S-btn-order');
    const $eventLog = document.querySelector('.event-log');
    $button.addEventListener('click', (e) => {
        simplepicker.open();
    });

    // $eventLog.innerHTML += '\n\n';
    simplepicker.on('submit', (date, readableDate) => {
        const t = moment(readableDate);
        // $eventLog.innerHTML += readableDate + '\n';
        $eventLog.innerHTML += t.format('YYYY-MM-DD HH:mm:ss') + '\n';
    });

    simplepicker.on('close', (date) => {
        $eventLog.innerHTML += 'Picker Closed' + '\n';
    });


    // --------------------------------------換頁-----------------------------
    // $(document).ready(function(){
    //     // $(".simplepicker-ok-btn").attr("type","submit")
    //     $(".simplepicker-ok-btn").html('<a href="Reservation_page.php"></a>')

    // })


    $(".simplepicker-ok-btn").on("click", function() {
        const date = $(".event-log").text()
        console.log('gooddddd');
        localStorage.setItem("date", JSON.stringify(date))
    })
</script>



>>>>>>> 0cc9e3077217b99f7fb11b0473d8421bbba4219c
<?php include __DIR__ . './part/javascript.php'  ?>