<?php
session_start();
$pageName = 'home_page';
$title = 'LittleHouse';
?>
<?php include __DIR__ . './part/head.php'  ?>
<style>
    .x-home-page-scroll-top {
        width: 80px;
        height: 80px;
        /* border: 1px solid; */
        position: fixed;
        right: 3%;
        bottom: 10%;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F4F4F4;
        /* border: 1px solid  #0E2E3D; */
        border-radius: 25%;
        cursor: pointer;
    }

    .x-home-page-chat {
        width: 80px;
        height: 80px;
        /* border: 1px solid; */
        position: fixed;
        right: 3%;
        bottom: 22%;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F4F4F4;
        /* border: 1px solid  #0E2E3D; */
        border-radius: 25%;
        cursor: pointer;
    }

    .x-home-page-scroll-top img {
        object-fit: contain;
        width: 60%;
        transition: .5s;

    }

    .x-home-page-chat img {
        object-fit: contain;
        width: 60%;
        transition: .5s;
    }



    .top-link-hide {
        visibility: hidden;
        opacity: 0;
        transition: .5s;
    }

    .top-link-show {
        visibility: visible;
        opacity: 1;
        transition: .5s;
    }

    .x-home-page-img-effect {
        position: relative;
        width: 100%;
        max-width: 1920px;
        height: 100vh;
        max-height: 1080px;
        margin: auto;
        margin-bottom: 60px;
        overflow: hidden;
    }

    .x-home-page-slogan {
        position: absolute;
        background: url(imgs/cut-patrick-perkins-3wylDrjxH-E-unsplash-3.jpg) center center /cover no-repeat;
        width: 100%;
        height: 120%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .x-home-page-slogan .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .x-slogan {
        margin-top: 60px;
    }

    .x-slogan h1 {
        font-size: 120px;
        font-weight: 900;
        color: #FEAC00;
        text-shadow: 4px 4px #F4F4F4;
    }

    .x-slogan h1:nth-child(1) {
        margin-bottom: -50px;
        margin-top: -100px;
    }

    .x-slogan h1:nth-child(2) {
        margin-bottom: 10px;
    }

    .x-slogan-small p {
        font-size: 24px;
        font-weight: bold;
        color: #F1EDEA;
    }

    .x-slogan-small p {
        margin-bottom: 40px;
    }

    .x-search-post button:nth-child(1) {
        margin-right: 30px;
    }

    .mobile-button-FEAC00-162,
    .mobile-button-F4F4F4-162 {
        display: none;
    }

    @media screen and (max-width:376px) {
        .x-home-page-slogan {
            width: 100%;
            max-width: 375px;
            height: 100vh;
            max-height: 667px;
            margin-bottom: 40px;
            background: url(imgs/mobile-patrick-perkins-3wylDrjxH-E-unsplash-3.jpg) center/contain;
        }

        .x-home-page-slogan .container {
            justify-content: space-between;
            align-items: center;
            margin-top: 200px;
        }

        .x-slogan h1 {
            font-size: 38px;
            font-weight: 900;
            color: #FEAC00;
            text-shadow: 2px 2px #F4F4F4;
        }

        .x-slogan h1:nth-child(1) {
            margin-bottom: -10px;
            margin-top: -100px;
        }

        .x-slogan h1:nth-child(2) {
            margin-bottom: 10px;
        }

        .x-slogan-small p {
            font-size: 20px;
        }

        .mobile-button-FEAC00-162,
        .mobile-button-F4F4F4-162 {
            display: block;
        }

        .mobile-button-FEAC00-162 {
            margin-right: 10px;
        }

        .pc-button-FEAC00-280,
        .pc-button-F4F4F4-280 {
            display: none;
        }

        .x-search-post {
            display: flex;
        }
    }

    /* 首頁共租介紹開始 */

    .x-home-page-introduce-symbiosis {
        width: 100%;
        max-width: 1920px;
        height: 800px;
        margin: auto;
        background: url(imgs/cut-espolon-tequila-xCsalofaxw4-unsplash\ 1.jpg) no-repeat center/cover;
        padding-top: 188px;
        margin-bottom: 136px;
    }

    /* 首頁分租介紹開始 */

    .x-home-page-introduce-sublease {
        width: 100%;
        max-width: 1920px;
        height: 800px;
        margin: auto;
        background: url(imgs/living-room-1835923_1920.jpg) no-repeat center/cover;
        padding-top: 188px;
        margin-bottom: 136px;
    }

    /* 首頁共租以及分租的內文格式 */

    .x-container-x-home-page {
        margin: auto;
        width: 1280px;
        padding: 0 25px;
    }

    .x-introduce-right {
        margin-top: -240px;
        width: 570px;
        min-height: 668px;
        height: 100%;
        background-color: #F1EDEA;
        padding: 80px 100px 80px 100px;
        margin-left: auto;
        margin-right: 0;
    }

    .x-introduce-left {
        margin-top: -160px;
        width: 570px;
        min-height: 668px;
        height: 100%;
        background-color: #F1EDEA;
        padding: 80px 100px 80px 100px;
        margin-right: auto;
        margin-left: 0;
    }

    .x-introduce-right h2,
    .x-introduce-left h2 {
        margin-bottom: 40px;
    }

    .x-introduce-right p,
    .x-introduce-left p {
        letter-spacing: 0%;
    }

    .x-introduce-left img,
    .x-introduce-right img {
        display: none;
    }

    .x-introduce-left p,
    .x-introduce-right p {
        margin-bottom: 16px;
        text-align: justify;
        line-height: 32px;
    }

    @media screen and (max-width:376px) {

        .x-home-page-introduce-symbiosis {
            width: 100%;
            max-width: 1280px;
            margin: auto;
            background: none;
            padding-top: 460px;
            margin-bottom: 0px;
        }

        .x-home-page-introduce-sublease {
            width: 100%;
            max-width: 1280px;
            margin: auto;
            background: none;
            padding-top: 0px;

            margin-bottom: 0px;
        }

        .x-introduce-left img,
        .x-introduce-right img {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .x-introduce-left,
        .x-introduce-right {
            width: 375px;
            background-color: #F1EDEA;
            padding: 40px 20px 40px 20px;
            margin-left: -20px;
        }

        .x-introduce-left p,
        .x-introduce-right p {
            overflow-wrap: break-word;
            margin-bottom: 16px;
        }

        .x-introduce-left h2,
        .x-introduce-right h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .x-introduce-right {
            margin-top: -60px;
        }
    }

    /* 刊登房屋/清潔服務開始 */

    .x-home-page-post-clean {
        width: 1230px;
        height: 696px;
        display: flex;
        margin: auto;
        margin-bottom: 195px;
    }

    .x-home-page-post-clean-left-post {
        display: flex;
        flex-direction: column;
    }

    .x-home-page-post-clean-left-post div:nth-child(1) {
        transition: .25s ease-in;
        box-shadow: inset 0px 0px 0 0 #FEAC00;
        z-index: 5;
    }

    .x-home-page-post-clean-left-post:hover div:nth-child(1) {
        box-shadow: inset 0 166px 0 0 #FEAC00;
        z-index: 4;
    }

    .x-home-page-post-clean-right-clean div:nth-child(1) {
        transition: .25s ease-in;
        box-shadow: inset 0px 0px 0 0 #FEAC00;
        z-index: 5;
    }

    .x-home-page-post-clean-right-clean:hover div:nth-child(1) {
        box-shadow: inset 0 -166px 0 0 #FEAC00;
        z-index: 4;
    }

    .x-home-page-post-clean-left-post:hover div:nth-child(2) {
        background: url(imgs/cut-spacejoy-umAXneH4GhA-unsplash\ 1.jpg) no-repeat center/110%;
        z-index: 4;
    }

    .x-home-page-post-clean-right-clean:hover div:nth-child(2) {
        background: url(imgs/cut-ashwini-chaudhary-monty-Iu6parQAO-U-unsplash\ 1.jpg) no-repeat center/110%;
        z-index: 4;
    }

    .x-home-page-post-clean-right-clean {
        display: flex;
        flex-direction: column-reverse;
    }

    .x-home-page-post-clean-left-post div:nth-child(1),
    .x-home-page-post-clean-right-clean div:nth-child(1) {
        width: 615px;
        height: 166px;
        background-color: #F1EDEA;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .x-home-page-post-clean-left-post div:nth-child(2) {
        width: 615px;
        height: 530px;
        overflow: hidden;
        transition: 1s ease-out;
        background: url(imgs/cut-spacejoy-umAXneH4GhA-unsplash\ 1.jpg) no-repeat center/100%;
    }

    .x-home-page-post-clean-right-clean div:nth-child(2) {
        width: 615px;
        height: 530px;
        overflow: hidden;
        transition: 1s ease-out;
        background: url(imgs/cut-ashwini-chaudhary-monty-Iu6parQAO-U-unsplash\ 1.jpg) no-repeat center/100%;
    }

    @media screen and (max-width:376px) {
        .x-home-page-post-clean {
            margin-top: 440px;
            width: 335px;
            height: 850px;
            display: block;
            margin: auto;
            margin-bottom: 0px;
        }

        .x-home-page-post-clean-left-post,
        .x-home-page-post-clean-right-clean {
            display: block;
            transition: .25s;
        }

        .x-home-page-post-clean-left-post:active,
        .x-home-page-post-clean-right-clean:active {
            transform: scale(0.98);
        }

        .x-home-page-post-clean-left-post div:nth-child(1),
        .x-home-page-post-clean-right-clean div:nth-child(1) {
            width: 335px;
            height: 90px;
            background-color: #F1EDEA;
        }

        .x-home-page-post-clean-left-post div:nth-child(1) {
            margin-top: 40px;
        }

        .x-home-page-post-clean-left-post h2,
        .x-home-page-post-clean-right-clean h2 {
            font-size: 24px;
        }

        .x-home-page-post-clean-left-post div:nth-child(2) {
            width: 335px;
            height: 335px;
            background: url(imgs/spacejoy-umAXneH4GhA-unsplash.jpg) no-repeat center/cover;
        }

        .x-home-page-post-clean-left-post:hover div:nth-child(2) {
            background: url(imgs/spacejoy-umAXneH4GhA-unsplash.jpg) no-repeat center/cover;
        }

        .x-home-page-post-clean-right-clean div:nth-child(2) {
            width: 335px;
            height: 335px;
            background: url(imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg) no-repeat center/cover;
        }

        .x-home-page-post-clean-right-clean:hover div:nth-child(2) {
            background: url(imgs/ashwini-chaudhary-monty-Iu6parQAO-U-unsplash.jpg) no-repeat center/cover;
        }

        .x-home-page-post-clean-left-post:hover div:nth-child(1) {
            box-shadow: none;
            z-index: 4;
        }

        .x-home-page-post-clean-right-clean:hover div:nth-child(1) {
            box-shadow: none;
            z-index: 4;
        }

        .x-introduce-left {
            margin-top: -460px;
        }
    }

    /* 首頁卡片版 */

    .x-home-page-hover-card {
        position: relative;
        width: 100%;
        max-width: 1750px;
        min-width: 1230px;
        height: 580px;
        margin: auto;
        margin-bottom: 40px;
    }

    .x-home-page-hover-card div {
        position: relative;
        margin: auto;
        float: left;
        width: 19%;
        margin: 30px 0.5%;
        height: 0px;
        padding-bottom: 24.98%;
    }

    .x-home-page-hover-card div:nth-child(1) {
        transform: rotate(-15deg) translateX(160px);
        background: url(imgs/rendy-novantino-_3Pyr85zcE8-unsplash.jpg) no-repeat center/cover;
        transition: .5s;
        z-index: 1;
    }

    .x-home-page-hover-card div:nth-child(1):hover {
        transform: rotate(-20deg) translateX(160px) translateY(-50px) scale(1.1);
        z-index: 2;
    }

    .x-home-page-hover-card div:nth-child(2) {
        transform: rotate(15deg) translateX(40px);
        background: url(imgs/toa-heftiba-l_ExpFwwOEg-unsplash\ \(1\).jpg) no-repeat center/cover;
        transition: .5s;
        z-index: 1;
    }

    .x-home-page-hover-card div:nth-child(2):hover {
        transform: rotate(19deg) translateX(40px) translateY(-70px) scale(1.1);
        z-index: 2;
    }

    .x-home-page-hover-card div:nth-child(3) {
        transform: rotate(0deg) translateX(-10px);
        background: url(imgs/katarzyna-grabowska-oA1-rirIJ2E-unsplash.jpg) no-repeat center/cover;
        transition: .5s;
    }

    .x-home-page-hover-card div:nth-child(3):hover {
        transform: rotate(5deg) translateX(-15px) translateY(-70px) scale(1.1);
        z-index: 2;
    }

    .x-home-page-hover-card div:nth-child(4) {
        transform: rotate(-6deg) translateX(-40px);
        background: url(imgs/jaco-pretorius-aGZeHyx-jfo-unsplash.jpg) no-repeat center/cover;
        transition: .5s;
    }

    .x-home-page-hover-card div:nth-child(4):hover {
        transform: rotate(-8deg) translateX(-60px) translateY(-70px) scale(1.1);
        z-index: 2;
    }

    .x-home-page-hover-card div:nth-child(5) {
        transform: rotate(15deg) translateX(-160px);
        background: url(imgs/20220404001923_79-scaled.jpg) no-repeat center/cover;
        transition: .5s;
    }

    .x-home-page-hover-card div:nth-child(5):hover {
        transform: rotate(20deg) translateX(-190px) translateY(-70px) scale(1.1);
        z-index: 2;
    }

    @media screen and (max-width:376px) {
        .x-home-page-hover-card {
            display: none;
        }
    }

    /* 首頁三特點介紹 */

    .x-home-page-three-element-bg {
        margin: auto;
        width: 100%;
        max-width: 1920px;
        height: 350px;
        background: url(imgs/living-room-1835923_1920.jpg) no-repeat 100% 80%/cover;
    }

    .x-home-page-three-element {
        margin-bottom: 80px;
        margin-top: -175px;
    }

    .x-home-page-three-element-out {
        margin: auto;
        width: 1230px;
        background-color: #F1EDEA;
        padding: 100px 93px 133px 93px;
    }

    .x-home-page-three-element-out h2 {
        font-weight: bold;
        text-align: center;
        margin-bottom: 80px;
    }

    .x-home-page-three-element-txt {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .x-home-page-three-element-txt-single {
        padding: 20px;
    }

    .x-home-page-three-element-txt-single div,
    .x-home-page-three-element-txt-single h3 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: bold;
    }

    @media screen and (max-width:376px) {
        .x-home-page-three-element-bg {
            display: none;
        }

        .x-home-page-three-element {
            margin-bottom: 0px;
            margin-top: 40px;
            background-color: #F1EDEA;
        }

        .x-home-page-three-element-out {
            margin: auto;
            width: 100%;
            background-color: #F1EDEA;
            padding: 50px 0px;
        }

        .x-home-page-three-element-out h2 {
            margin-bottom: 20px;
        }

        .x-home-page-three-element-txt {
            display: inline-block;
        }

        .x-home-page-three-element-txt-single {
            margin-bottom: 20px;
            padding: 0;
        }

        .x-home-page-three-element-txt p {
            overflow-wrap: break-word;
            text-align: justify;
            line-height: 32px;
        }

        .x-home-page-three-element-txt-single div,
        .x-home-page-three-element-txt-single h3 {
            margin-bottom: 20px;
        }
    }

    /* 四步驟 */

    .x-home-page-step-slogan-out {
        margin-bottom: 80px;
    }

    .x-home-page-step-slogan {
        width: 100%;
        background-color: #F1EDEA;
        padding: 73px 245px 73px 245px;
    }

    .x-home-page-step-slogan h2 {
        text-align: center;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .x-home-page-step-1-2 {
        width: 100%;
        height: 546px;
        display: flex;
    }

    .x-home-page-step-2-4 {
        width: 100%;
        height: 546px;
        display: flex;
        flex-direction: row-reverse;
    }

    .x-home-page-step-1-2-txt,
    .x-home-page-step-1-2-img {
        width: 50%;
        height: 100%;
    }

    .x-home-page-step-1-2-txt p {
        text-align: justify;
    }

    .x-home-page-step-1-2-img {
        background: url(imgs/arkan-perdana-eKTLh4_u7Ao-unsplash.jpg) no-repeat center/cover;
    }

    .x-home-page-step-2-4-img {
        width: 50%;
        height: 100%;
    }

    .x-home-page-step-2-4-img {
        background: url(imgs/tierra-mallorca-rgJ1J8SDEAY-unsplash.jpg) no-repeat center/cover;
    }

    .x-home-page-step-1-2-txt div {
        width: 50%;
        height: 50%;
        float: left;
        margin: 0px;
    }

    .x-home-page-step-1-2-txt div:nth-child(2),
    .x-home-page-step-1-2-txt div:nth-child(5) {
        padding: 70px 80px;
        background-color: #F1EDEA;
    }

    .x-home-page-step-1-2-txt div:nth-child(2) h3,
    .x-home-page-step-1-2-txt div:nth-child(5) h3 {
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .x-home-page-step-1-2-txt div:nth-child(1),
    .x-home-page-step-1-2-txt div:nth-child(3),
    .x-home-page-step-1-2-txt div:nth-child(4),
    .x-home-page-step-1-2-txt div:nth-child(6) {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 0px;
    }

    .x-home-page-step-1-2-txt div:nth-child(3) img,
    .x-home-page-step-1-2-txt div:nth-child(1) img,
    .x-home-page-step-1-2-txt div:nth-child(4) img,
    .x-home-page-step-1-2-txt div:nth-child(6) img {
        width: 150px;
        height: 150px;
    }

    .x-home-page-step-slogan h2:nth-child(2) {
        display: none;
    }

    .x-home-page-step-1-2-txt div:nth-child(1) {
        display: none;
    }

    @media screen and (max-width:376px) {
        .x-home-page-step-slogan-out .container {
            padding-bottom: 50px;
            padding-top: 50px;
        }

        .x-home-page-step-slogan h2:nth-child(1) {
            display: none;
        }

        .x-home-page-step-slogan h2:nth-child(2) {
            display: block;
        }

        .x-home-page-step-2-4-img,
        .x-home-page-step-1-2-img {
            display: none;
        }

        .x-home-page-step-slogan-out {
            margin-top: 40px;
            background-color: #F1EDEA;
            margin-bottom: 40px;
        }

        .x-home-page-step-slogan {
            display: inline-block;
            background-color: #F1EDEA;
            padding: 0;
        }

        .x-home-page-step-slogan h3 {
            overflow-wrap: break-word;
            font-size: 16px;
            font-weight: normal;
            line-height: 32px;
            text-align: justify;
        }

        .x-home-page-step-slogan h2 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .x-home-page-step-1-2,
        .x-home-page-step-2-4,
        .x-home-page-step-1-2-txt {
            display: inline-block;
            height: 100px;
        }

        .x-home-page-step-1-2-txt {
            width: 100%;
            height: 100%;
            display: inline-block;
            margin: 0px;
        }

        .x-home-page-step-1-2-txt div {
            width: 100%;
            height: 100%;
            float: none;
        }

        .x-home-page-step-1-2-txt div:nth-child(2),
        .x-home-page-step-1-2-txt div:nth-child(5) {
            padding: 0px 0px;
            background-color: #F1EDEA;
        }

        .x-home-page-step-1-2-txt div:nth-child(2) h3,
        .x-home-page-step-1-2-txt div:nth-child(5) h3 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .x-home-page-step-1-2-txt div:nth-child(1),
        .x-home-page-step-1-2-txt div:nth-child(3),
        .x-home-page-step-1-2-txt div:nth-child(4),
        .x-home-page-step-1-2-txt div:nth-child(6) {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .x-home-page-step-1-2-txt div:nth-child(3),
        .x-home-page-step-1-2-txt div:nth-child(6) {
            display: none;
        }

        .x-home-page-step-1-2-txt div:nth-child(3) img,
        .x-home-page-step-1-2-txt div:nth-child(1) img,
        .x-home-page-step-1-2-txt div:nth-child(4) img,
        .x-home-page-step-1-2-txt div:nth-child(6) img {
            width: 100px;
            height: 100px;
        }
    }

    /* 瀑布流排版 */

    .x-home-page-waterfall-img-out {
        margin-bottom: 80px;
        width: 100%;
    }

    .x-home-page-waterfall-img {
        width: 100%;
        display: flex;
    }

    .x-home-page-waterfall-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .x-home-page-waterfall-img-left {
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: start;
    }

    .x-home-page-waterfall-img-right {
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: start;
    }

    .x-home-page-waterfall-img-left-img {
        width: 600px;
        height: 520px;
        margin-bottom: 30px;
        overflow: hidden;
        position: relative;
        background-color: black;
    }

    .x-home-page-waterfall-img-left-img-H {
        position: relative;
        overflow: hidden;
        background-color: black;
    }

    .x-home-page-waterfall-img-left-img .x-home-page-waterfall-img-left-img-only,
    .x-home-page-waterfall-img-left-img-H .x-home-page-waterfall-img-left-img-only {
        transition: .5s;
        opacity: 1;
    }

    .x-home-page-waterfall-img-left-img:hover .x-home-page-waterfall-img-left-img-only,
    .x-home-page-waterfall-img-left-img-H:hover .x-home-page-waterfall-img-left-img-only {
        opacity: .5;
    }

    .x-home-page-waterfall-img-left-img:nth-child(1) {
        margin-top: 100px;
    }

    .x-home-page-waterfall-img-left-img-H {
        width: 600px;
        height: 890px;
        margin-bottom: 0px;
    }

    .x-home-page-waterfall-img-left-img-hover {
        position: absolute;
        bottom: -200px;
        display: flex;
        width: 100%;
        padding: 0 30px;
        justify-content: space-between;
        transition: .5s;
    }

    .x-home-page-waterfall-img-left-img:hover .x-home-page-waterfall-img-left-img-hover,
    .x-home-page-waterfall-img-left-img-H:hover .x-home-page-waterfall-img-left-img-hover {
        bottom: 20px;
    }

    .x-home-page-waterfall-img-left-img-hover-txt {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .x-home-page-waterfall-img-left-img-hover-txt h3 {
        color: white;
    }

    .x-home-page-waterfall-img-left-img-hover-img {
        width: 98px;
        height: 98px;
    }

    .x-home-page-waterfall-img-left-img-hover-img img {
        width: 100%;
    }

    /* 流水版面分割 */

    .x-home-page-waterfall-img-right-img {
        width: 600px;
        height: 520px;
        margin-bottom: 30px;
        overflow: hidden;
        position: relative;
        background-color: black;
    }

    .x-home-page-waterfall-img-right-img-H {
        width: 600px;
        height: 890px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        background-color: black;
    }

    .x-home-page-waterfall-img-right-img .x-home-page-waterfall-img-right-img-only,
    .x-home-page-waterfall-img-right-img-H .x-home-page-waterfall-img-right-img-only {
        transition: .5s;
        opacity: 1;
    }

    .x-home-page-waterfall-img-right-img:hover .x-home-page-waterfall-img-right-img-only,
    .x-home-page-waterfall-img-right-img-H:hover .x-home-page-waterfall-img-right-img-only {
        opacity: .5;
    }

    .x-home-page-waterfall-img-right-img:nth-child(1) {
        margin-top: 0px;
    }

    .x-home-page-waterfall-img-right-img-H {
        width: 600px;
        height: 890px;
        margin-bottom: 30px;
    }

    .x-home-page-waterfall-img-right-img-hover {
        position: absolute;
        bottom: -200px;
        display: flex;
        width: 100%;
        padding: 0 30px;
        justify-content: space-between;
        transition: .5s;
    }

    .x-home-page-waterfall-img-right-img:hover .x-home-page-waterfall-img-right-img-hover,
    .x-home-page-waterfall-img-right-img-H:hover .x-home-page-waterfall-img-right-img-hover {
        bottom: 20px;
    }

    .x-home-page-waterfall-img-right-img-hover-txt {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .x-home-page-waterfall-img-right-img-hover-txt h3 {
        color: white;
    }

    .x-home-page-waterfall-img-right-img-hover-img {
        width: 98px;
        height: 98px;
    }

    .x-home-page-waterfall-img-right-img-hover-img img {
        width: 100%;
    }

    @media screen and (max-width:376px) {
        .x-home-page-waterfall-img-out {
            display: none;
        }
    }
</style>
<?php include __DIR__ . './part/nav.php'  ?>
<div class="x-home-page-img-effect">
    <div class="x-home-page-scroll-top top-link-hide" id="sc-top-js">
        <img src="./imgs/arrow-up.svg" alt="">
    </div>
    <a href="customer_service.php">
        <div class="x-home-page-chat" id="chat-js">
            <img src="./imgs/comment-bubble.svg" alt="">
        </div>
    </a>
    <div class="x-home-page-slogan">
        <div class="container">
            <div class="x-slogan">
                <h1>
                    DISCOVER YOUR
                </h1>
                <h1>
                    BEST HOME
                </h1>
            </div>
            <div class="x-slogan-small">
                <p>
                    發現你的第二個家
                </p>
            </div>
            <div class="x-search-post">
                <a href="search_all.php"><button class="pc-button-FEAC00-280">
                        開始搜尋
                    </button></a>
                <a href="publish_uploadimgx10.php"><button class="pc-button-F4F4F4-280">
                        刊登房屋
                    </button></a>
                <a href="search_all.php"><button class="mobile-button-FEAC00-162">
                        開始搜尋
                    </button></a>
                <a href="publish_uploadimgx10.php"><button class="mobile-button-F4F4F4-162">
                        刊登房屋
                    </button></a>
            </div>
        </div>
    </div>
</div>
<!-- 首頁共租介紹開始 -->
<div class="x-home-page-introduce-symbiosis">
    <div class="container">
        <div class="x-introduce-left">
            <h2>
                共生租屋
            </h2>
            <img src="imgs/espolon-tequila-xCsalofaxw4-unsplash.jpg" alt="">
            <p>
                若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。 租屋的出現，重寫了人生的意義。既然，租屋，到底應該如何實現。租屋因何而發生？ 話雖如此，做好租屋這件事，可以說已經成為了民運動。
            </p>
            <p>
                奧維德說過一句發人省思的話，習慣是在習慣中養 話雖如此，做好租屋這件事，可以說已經成為了民運動。奧維德說過一句發人省思的話，習慣是在習慣中養話雖如此，做好租屋這件事，可以說已經成為了民運動。奧維德說過一句發人省思的話，習慣是在習慣中養
            </p>
        </div>
    </div>
</div>
<!-- 首頁分租介紹開始 -->
<div class="x-home-page-introduce-sublease">
    <div class="container">
        <div class="x-introduce-right">
            <h2>
                分租
            </h2>
            <img src="imgs/espolon-tequila-xCsalofaxw4-unsplash.jpg" alt="">
            <p>
                若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。 租屋的出現，重寫了人生的意義。既然，租屋，到底應該如何實現。租屋因何而發生？ 話雖如此，做好租屋這件事，可以說已經成為了民運動。

            </p>
            <p>
                奧維德說過一句發人省思的話，習慣是在習慣中養 話雖如此，做好租屋這件事，可以說已經成為了民運動。奧維德說過一句發人省思的話，習慣是在習慣中養話雖如此，做好租屋這件事，可以說已經成為了民運動。奧維德說過一句發人省思的話，習慣是在習慣中養
            </p>
        </div>
    </div>
</div>
<!-- 首頁刊登以及清潔 -->
<div class="x-home-page-post-clean">
    <div class="x-home-page-post-clean-left-post">
        <div>
            <h2>刊登房屋</h2>
        </div>
        <div>

        </div>

    </div>
    <div class="x-home-page-post-clean-right-clean">
        <div>
            <h2>清潔服務</h2>
        </div>
        <div>

        </div>
    </div>
</div>
<!-- 浮動卡片 -->
<div class="x-home-page-hover-card">
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
</div>
<!-- 三特色介紹 -->
<div class="x-home-page-three-element-bg">
</div>
<div class="x-home-page-three-element">
    <div class="container">


        <div class="x-home-page-three-element-out">
            <h2>豐富你的租屋生活</h2>
            <div class="x-home-page-three-element-txt">
                <div class="x-home-page-three-element-txt-single">
                    <div>
                        <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1539_23234)">
                                <path d="M32.7658 24.6653C32.7658 26.7789 31.0513 28.4934 28.9376 28.4934C26.824 28.4934 25.1095 26.7844 25.1095 24.6653C25.1095 22.5461 26.8185 20.8371 28.9376 20.8371C31.0568 20.8371 32.7658 22.5461 32.7658 24.6653ZM68.9005 69.0032C66.765 71.1387 63.3019 71.1387 61.1664 69.0032L44.8011 52.6379C39.2763 56.3594 32.3734 58.1955 25.0179 57.2125C12.5013 55.5405 2.3226 45.2797 0.736662 32.7536C-1.62037 14.1325 14.038 -1.52184 32.6468 0.843395C45.1757 2.42933 55.4378 12.6108 57.1058 25.1246C58.0888 32.4801 56.2532 39.3844 52.5312 44.9078L68.8964 61.2731C71.0333 63.3977 71.0333 66.8703 68.9005 69.0032ZM40.7091 25.5129C40.7091 18.9914 35.4454 13.7278 28.8146 13.7278C22.4298 13.7278 17.1662 18.9914 17.1662 25.5129C17.1662 30.7561 24.8621 40.3469 27.8124 43.8332C28.09 44.1477 28.4865 44.3528 28.8146 44.3528C29.253 44.3528 29.6705 44.1533 29.9498 43.8345C33.0119 40.3469 40.7091 30.7493 40.7091 25.5129Z" fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1539_23234">
                                    <rect width="69.9986" height="69.9987" fill="white" transform="translate(0.500977 0.60611)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <h3>
                        快速搜尋
                    </h3>
                    <p>
                        若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。租屋的出現，重寫了人生的意義。既然，租 屋，到底應該如何實現。租屋因何而發生？
                    </p>
                </div>
                <div class="x-home-page-three-element-txt-single">
                    <div>
                        <svg width="71" height="70" viewBox="0 0 71 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M55.3387 7.67389C56.9164 8.68787 58.3926 9.81008 59.7549 11.0405C66.0908 16.737 70.0064 24.6039 70.0064 33.2968C70.0064 41.9897 66.0908 49.8566 59.7549 55.5531C53.419 61.2496 44.6691 64.77 35.0068 64.77C30.578 64.77 26.3457 64.0295 22.4427 62.6851L27.7459 57.4215C30.0585 57.9855 32.4915 58.2817 35.0068 58.2817C42.6796 58.2817 49.6301 55.4847 54.6545 50.9617C59.6852 46.4386 62.7898 40.1953 62.7898 33.2968C62.7898 26.3983 59.6788 20.1493 54.6545 15.6319C53.6027 14.6863 52.4686 13.8204 51.2648 13.0343L55.3387 7.67389ZM11.5196 56.6354C11.0888 56.2822 10.6643 55.9233 10.2525 55.5531C3.91656 49.8566 0.000976562 41.9897 0.000976562 33.2968C0.000976562 24.6039 3.91656 16.737 10.2525 11.0405C15.2325 6.56307 21.7014 3.42999 28.937 2.29639L24.2802 10.243C20.9158 11.5076 17.8872 13.3533 15.3529 15.6319C10.3222 20.1549 7.21123 26.3983 7.21123 33.2968C7.21123 40.0301 10.1701 46.1367 14.9854 50.6313L11.5196 56.6354Z" fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M56.3596 0L35.9833 0.24495L16.3547 33.7461L29.7235 33.8714L8.83398 69.9987L55.9541 23.6747H38.353L56.3596 0Z" fill="black" />
                        </svg>

                    </div>
                    <h3>
                        方便即時
                    </h3>
                    <p>
                        若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。租屋的出現，重寫了人生的意義。既然，租 屋，到底應該如何實現。租屋因何而發生？
                    </p>
                </div>
                <div class="x-home-page-three-element-txt-single">
                    <div>
                        <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38.7843 4.3863V7.01808C47.4159 9.05086 53.9192 17.9016 53.9192 28.511V31.0879C53.9192 37.544 55.9648 43.7534 59.6539 48.5783L60.5289 49.716C61.5221 51.0182 61.7704 52.8549 61.1556 54.4313C60.5407 56.0076 59.1928 57.0219 57.7029 57.0219H12.2983C10.8085 57.0219 9.45712 56.0076 8.84676 54.4313C8.2364 52.8549 8.48053 51.0182 9.47048 49.716L10.3474 48.5783C14.0412 43.7534 16.0821 37.544 16.0821 31.0879V28.511C16.0821 17.9016 22.4789 9.05086 31.2169 7.01808V4.3863C31.2169 1.96424 32.9078 0 35.0006 0C37.0935 0 38.7843 1.96424 38.7843 4.3863ZM35.0006 70.1808C32.9905 70.1808 31.0632 69.2625 29.6443 67.6176C28.2254 65.9727 27.4332 63.6151 27.4332 61.4082H42.5681C42.5681 63.6151 41.7758 65.9727 40.357 67.6176C38.9381 69.2625 36.9043 70.1808 35.0006 70.1808Z" fill="black" />
                        </svg>

                    </div>
                    <h3>
                        定時提醒
                    </h3>
                    <p>
                        若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。租屋的出現，重寫了人生的意義。既然，租 屋，到底應該如何實現。租屋因何而發生？
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- 四步驟 -->
<div class="x-home-page-step-slogan-out">
    <div class="container">
        <div class="x-home-page-step-slogan">
            <h2>只須完成下方步驟，即可快速完成租屋！</h2>
            <h2>簡單四步驟！快速租屋</h2>
            <div>
                <h3>
                    若發現問題比我們想像的還要深奧，那肯定不簡單。所謂租屋，關鍵是租屋需要如何解讀。租屋的出現，重寫了人生的意義。
                </h3>
            </div>
        </div>
        <div class="x-home-page-step-1-2">
            <div class="x-home-page-step-1-2-txt">
                <div>
                    <img src="imgs/searching.png" alt="">
                </div>
                <div>
                    <h3>
                        1.搜尋
                    </h3>
                    <p>
                        若發現問題比我們想像 的還要深奧，那肯定不 簡單。
                    </p>
                </div>
                <div>
                    <img src="imgs/searching.png" alt="">
                </div>
                <div>
                    <img src="imgs/calendar.png" alt="">
                </div>
                <div>
                    <h3>
                        2.預約
                    </h3>
                    <p>
                        若發現問題比我們想像 的還要深奧，那肯定不 簡單。
                    </p>
                </div>
            </div>
            <div class="x-home-page-step-1-2-img">

            </div>
        </div>
        <div class="x-home-page-step-2-4">
            <div class="x-home-page-step-1-2-txt">
                <div>
                    <img src="imgs/document.png" alt="">
                </div>
                <div>
                    <h3>
                        3.簽約
                    </h3>
                    <p>
                        若發現問題比我們想像 的還要深奧，那肯定不 簡單。
                    </p>
                </div>
                <div>
                    <img src="imgs/document.png" alt="">
                </div>
                <div>
                    <img src="imgs/pay-per-click.png" alt="">
                </div>
                <div>
                    <h3>
                        4.支付
                    </h3>
                    <p>
                        若發現問題比我們想像 的還要深奧，那肯定不 簡單。
                    </p>
                </div>
            </div>
            <div class="x-home-page-step-2-4-img">

            </div>
        </div>
    </div>
</div>
<!-- 瀑布流排版 -->
<div class="x-home-page-waterfall-img-out">
    <div class="container">
        <div class="x-home-page-waterfall-img">
            <div class="x-home-page-waterfall-img-left">
                <div class="x-home-page-waterfall-img-left-img">
                    <img class="x-home-page-waterfall-img-left-img-only" src="imgs/spacejoy-umAXneH4GhA-unsplash.jpg" alt="">
                    <div class="x-home-page-waterfall-img-left-img-hover">
                        <div class="x-home-page-waterfall-img-left-img-hover-txt">
                            <h3>
                                三重地段豪華套房
                            </h3>
                            <h3>
                                近三重國小捷運、旁有公園運動場
                            </h3>
                        </div>
                        <div class="x-home-page-waterfall-img-left-img-hover-img">
                            <img class="x-imgs-arrow" src="imgs/實心箭頭.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="x-home-page-waterfall-img-left-img">
                    <img class="x-home-page-waterfall-img-left-img-only" src="imgs/spacejoy-umAXneH4GhA-unsplash.jpg" alt="">
                    <div class="x-home-page-waterfall-img-left-img-hover">
                        <div class="x-home-page-waterfall-img-left-img-hover-txt">
                            <h3>
                                三重地段豪華套房
                            </h3>
                            <h3>
                                近三重國小捷運、旁有公園運動場
                            </h3>
                        </div>
                        <div class="x-home-page-waterfall-img-left-img-hover-img">
                            <img class="x-imgs-arrow" src="imgs/實心箭頭.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="x-home-page-waterfall-img-left-img-H">
                    <img class="x-home-page-waterfall-img-left-img-only" src="imgs/spacejoy-umAXneH4GhA-unsplash.jpg" alt="">
                    <div class="x-home-page-waterfall-img-left-img-hover">
                        <div class="x-home-page-waterfall-img-left-img-hover-txt">
                            <h3>
                                三重地段豪華套房
                            </h3>
                            <h3>
                                近三重國小捷運、旁有公園運動場
                            </h3>
                        </div>
                        <div class="x-home-page-waterfall-img-left-img-hover-img">
                            <img class="x-imgs-arrow" src="imgs/實心箭頭.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="x-home-page-waterfall-img-right">
                <div class="x-home-page-waterfall-img-right-img">
                    <img class="x-home-page-waterfall-img-right-img-only" src="imgs/spacejoy-umAXneH4GhA-unsplash.jpg" alt="">
                    <div class="x-home-page-waterfall-img-right-img-hover">
                        <div class="x-home-page-waterfall-img-right-img-hover-txt">
                            <h3>
                                三重地段豪華套房
                            </h3>
                            <h3>
                                近三重國小捷運、旁有公園運動場
                            </h3>
                        </div>
                        <div class="x-home-page-waterfall-img-right-img-hover-img">
                            <img class="x-imgs-arrow" src="imgs/實心箭頭.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="x-home-page-waterfall-img-right-img-H">
                    <img class="x-home-page-waterfall-img-right-img-only" src="imgs/spacejoy-umAXneH4GhA-unsplash.jpg" alt="">
                    <div class="x-home-page-waterfall-img-right-img-hover">
                        <div class="x-home-page-waterfall-img-right-img-hover-txt">
                            <h3>
                                三重地段豪華套房
                            </h3>
                            <h3>
                                近三重國小捷運、旁有公園運動場
                            </h3>
                        </div>
                        <div class="x-home-page-waterfall-img-right-img-hover-img">
                            <img class="x-imgs-arrow" src="imgs/實心箭頭.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="x-home-page-waterfall-img-right-img">
                    <img class="x-home-page-waterfall-img-right-img-only" src="imgs/spacejoy-umAXneH4GhA-unsplash.jpg" alt="">
                    <div class="x-home-page-waterfall-img-right-img-hover">
                        <div class="x-home-page-waterfall-img-right-img-hover-txt">
                            <h3>
                                三重地段豪華套房
                            </h3>
                            <h3>
                                近三重國小捷運、旁有公園運動場
                            </h3>
                        </div>
                        <div class="x-home-page-waterfall-img-right-img-hover-img">
                            <img class="x-imgs-arrow" src="imgs/實心箭頭.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . './part/footer.php'  ?>
<script>
    // 共生分租講解動畫 
    // Get the size of the device screen
    var screenWidth = screen.width;
    var screenHeight = screen.height;

    // Get the browser window size
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    // Get the size of the entire webpage
    const pageWidth = document.documentElement.scrollWidth;
    const pageHeight = document.documentElement.scrollHeight;


    var xIntroduceLeftElement = $('.x-introduce-left'),
        xIntroduceLeftQuantity = xIntroduceLeftElement.length;



    $(window).on('scroll', function() {

        window.requestAnimationFrame(function() {
            if (window.innerWidth > 376) {
                for (var i = 0; i < xIntroduceLeftQuantity; i++) {
                    var currentElement = xIntroduceLeftElement.eq(i);
                    var scrolled = $(window).scrollTop();


                    currentElement.css({
                        'transform': 'translate3d(0,' + scrolled * +0.1 + 'px, 0)'

                    })
                }
            }

        })
    })
    // 
    var xIntroduceRightElement = $('.x-introduce-right'),
        xIntroduceRightQuantity = xIntroduceRightElement.length;

    $(window).on('scroll', function() {

        window.requestAnimationFrame(function() {
            if (window.innerWidth > 376) {
                for (var i = 0; i < xIntroduceRightQuantity; i++) {
                    var currentElement = xIntroduceRightElement.eq(i);
                    var scrolled = $(window).scrollTop();

                    currentElement.css({
                        'transform': 'translate3d(0,' + scrolled * +0.1 + 'px, 0)'

                    })

                }
            }
        })
    })
    // scrolltop
    const scrollTopButton = document.getElementById('sc-top-js');
    const scrollFunc = () => {
        let y = window.scrollY;
        console.log(y);
        if (y > 0) {
            scrollTopButton.classList.add("top-link-show");
        } else {
            scrollTopButton.classList.remove("top-link-show");
        }
    };
    window.addEventListener("scroll", scrollFunc);

    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;

        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 10);
        }
    };

    scrollTopButton.onclick = function(e) {
        e.preventDefault();
        scrollToTop();
    }

    // 箭頭動畫
    $('#sc-top-js').mouseenter(function() {

        $('#sc-top-js').css('transform', 'translateY(-5px)')
    })
    $('#sc-top-js').mouseleave(function() {

        $('#sc-top-js').css('transform', 'translateY(5px)')
    })
</script>

<?php include __DIR__ . './part/javascript.php'  ?>