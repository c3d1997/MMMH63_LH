<?php include __DIR__ . './part/head.php'  ?>

<style>
    .c-world {
        display: flex;
        width: 100%;
        min-height: 911px;
        justify-content: space-between;
        padding-top: 180px;
    }


    /* 左邊選單開始 */

    .c-mylist {
        text-align: center;
    }

    .c-list {
        text-decoration: none;
        list-style: none;
        margin-bottom: 30px;
    }

    .c-list a {
        text-decoration: none;
        opacity: 0.5;
        color: #0E2E3D;
    }

    .c-list a:hover {
        text-decoration: none;
        opacity: 1;
    }


    /* 右邊標題開始 */

    .c-mytitle {
        max-width: 1053px;
        width: 100%;
    }

    .x-title-content-all {
        height: 600px;
        overflow-y: scroll;
        margin-top: 30px;
    }

    .x-title-icon {
        display: flex;
    }

    .x-title-right {
        display: flex;
        justify-content: space-between;
    }

    .x-title-icon div {
        width: 30px;
        height: 30px;
    }

    .x-title-icon div:nth-child(1) {
        margin-right: 30px;
    }

    .x-title-content {
        display: flex;
        width: 100%;
        max-width: 1053px;
        height: 250px;
        background-color: #F1EDEA;
        margin-bottom: 30px;
    }

    .x-title-content-img {
        width: 321px;
    }

    .x-title-content-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .x-title-content-txt h3,
    .x-title-content-txt p {
        margin-bottom: 15px;
    }

    .x-title-content-txt {
        width: 450px;
        padding: 30px 30px;
    }

    .x-title-content-txt p {
        display: flex;
        align-items: center;
    }

    .x-title-content-txt p img {
        margin-right: 5px;
    }

    .x-title-content-price {
        width: 280px;
        height: 250px;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-between;
        padding: 0px 0px 20px 50px;
    }

    .x-title-content-price-down div {
        display: flex;
    }

    .x-title-content-price-down div {
        margin-bottom: 5px;
    }

    .x-title-content-price-down div img {
        margin-right: 5px;
    }

    .x-title-content-price-down {
        width: 135px;
        margin-right: 30px;
    }

    .x-title-content-price-down h3 {
        display: flex;
        justify-content: flex-end;
    }

    .x-title-content-all::-webkit-scrollbar,
    .x-title-card-all::-webkit-scrollbar {
        width: 3px;
        background: #E0F1FC;
    }

    .x-title-content-all::-webkit-scrollbar-thumb,
    .x-title-card-all::-webkit-scrollbar-thumb {
        background: #5D8DC1;
    }

    .x-title-content-all::-webkit-scrollbar-thumb:hover,
    .x-title-card-all::-webkit-scrollbar-thumb:hover {
        background: hsla(211, 45%, 56%, 0.766)
    }

    .S-xs-card-wrap {
        margin-top: 0px;
        width: 331px;
        height: 317px;
        overflow: hidden;
        position: relative;
        /* border: 1px solid blue; */
        margin-bottom: 30px;
    }

    .S-xs-like {
        top: 7%;
        right: 5%;
    }

    .x-title-card-all {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        height: 600px;
        overflow-y: scroll;
        margin-top: 30px;
    }

    .footer_container {
        margin-top: 40px;
    }

    .x-dislplaynone {
        display: none;
    }

    .x-title-list {
        cursor: pointer;
    }

    .x-title-card {
        cursor: pointer;
    }

    .x-canser {
        cursor: pointer;
    }

    .x-displaynone-canser {
        display: none;
    }

    .x-canser-card {
        cursor: pointer;
    }

    .S-xs-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media screen and (max-width:376px) {
        .x-title-card-all {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            height: 600px;
            overflow-y: inherit;
            margin-top: 0;
        }

        .x-title-content-all {
            display: none;
        }

        .c-mylist {
            display: none;
        }

        .c-world {
            padding-top: 90px;
        }

        .x-title-icon {
            display: none;
        }

        .x-title-right {
            justify-content: center;
            margin-bottom: 10px;
        }

        .footer_container {
            display: none;
        }
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="container">
    <div class="c-world">
        <!-- 左邊選單 -->
        <div class="c-mylist">
            <ul>
                <li class="c-list">
                    <a href="">
                        <h3>會員資料</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>刊登物件</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>我的租屋</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>我的收藏</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>我的優惠</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>我的預約</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>租屋契約</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>租金支付</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="">
                        <h3>清潔服務</h3>
                    </a>
                </li>
            </ul>
        </div>
        <!-- 右邊內容 -->
        <div class="c-mytitle">
            <div class="x-title-right">
                <div class="x-title-txt">
                    <h3>我的收藏</h3>
                </div>
                <div class="x-title-icon">
                    <div>
                        <img class="x-title-list" src="imgs/橫列瀏覽.svg" alt="">
                    </div>
                    <div>
                        <img class="x-title-card" src="imgs/方塊瀏覽.svg" alt="">
                    </div>

                </div>
            </div>
            <div class="x-title-content-all ">
                <div class="x-title-content">
                    <div class="x-title-content-img">
                        <img src="imgs/57 1.jpg" alt="">
                    </div>
                    <div class="x-title-content-txt">
                        <h3>
                            士林夜市近士林劍潭捷運小套房
                        </h3>
                        <p>
                            <img src="imgs/捷運.svg" alt="">距離士林捷運站 500 公尺
                        </p>
                        <p>
                            <img src="imgs/位置.svg" alt=""> 新北市三重區碧華街 900 號
                        </p>
                        <div>
                            <p>
                                <img src="imgs/坪數.svg" alt=""> 30坪
                            </p>
                            <p>
                                <img src="imgs/格局.svg" alt=""> 整層住家 6 樓 3房 2 廳 2 衛浴
                            </p>
                        </div>
                    </div>
                    <div class="x-title-content-price">
                        <div class="x-title-content-price-top">

                            <img class="x-canser" src="imgs/取消.svg" alt="">

                        </div>
                        <div class="x-title-content-price-down">
                            <div>
                                <img src="imgs/瀏覽.svg" alt="">
                                <p>
                                    瀏覽量：8999
                                </p>
                            </div>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="x-title-content">
                    <div class="x-title-content-img">
                        <img src="imgs/57 1.jpg" alt="">
                    </div>
                    <div class="x-title-content-txt">
                        <h3>
                            士林夜市近士林劍潭捷運小套房
                        </h3>
                        <p>
                            <img src="imgs/捷運.svg" alt="">距離士林捷運站 500 公尺
                        </p>
                        <p>
                            <img src="imgs/位置.svg" alt=""> 新北市三重區碧華街 900 號
                        </p>
                        <div>
                            <p>
                                <img src="imgs/坪數.svg" alt=""> 30坪
                            </p>
                            <p>
                                <img src="imgs/格局.svg" alt=""> 整層住家 6 樓 3房 2 廳 2 衛浴
                            </p>
                        </div>
                    </div>

                    <div class="x-title-content-price">
                        <div class="x-title-content-price-top">

                            <img class="x-canser" src="imgs/取消.svg" alt="">

                        </div>
                        <div class="x-title-content-price-down">
                            <div>
                                <img src="imgs/瀏覽.svg" alt="">
                                <p>
                                    瀏覽量：8999
                                </p>
                            </div>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="x-title-content">
                    <div class="x-title-content-img">
                        <img src="imgs/57 1.jpg" alt="">
                    </div>
                    <div class="x-title-content-txt">
                        <h3>
                            士林夜市近士林劍潭捷運小套房
                        </h3>
                        <p>
                            <img src="imgs/捷運.svg" alt="">距離士林捷運站 500 公尺
                        </p>
                        <p>
                            <img src="imgs/位置.svg" alt=""> 新北市三重區碧華街 900 號
                        </p>
                        <div>
                            <p>
                                <img src="imgs/坪數.svg" alt=""> 30坪
                            </p>
                            <p>
                                <img src="imgs/格局.svg" alt=""> 整層住家 6 樓 3房 2 廳 2 衛浴
                            </p>
                        </div>
                    </div>
                    <div class="x-title-content-price">
                        <div class="x-title-content-price-top">

                            <img class="x-canser" src="imgs/取消.svg" alt="">

                        </div>
                        <div class="x-title-content-price-down">
                            <div>
                                <img src="imgs/瀏覽.svg" alt="">
                                <p>
                                    瀏覽量：8999
                                </p>
                            </div>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="x-title-content">
                    <div class="x-title-content-img">
                        <img src="imgs/57 1.jpg" alt="">
                    </div>
                    <div class="x-title-content-txt">
                        <h3>
                            士林夜市近士林劍潭捷運小套房
                        </h3>
                        <p>
                            <img src="imgs/捷運.svg" alt="">距離士林捷運站 500 公尺
                        </p>
                        <p>
                            <img src="imgs/位置.svg" alt=""> 新北市三重區碧華街 900 號
                        </p>
                        <div>
                            <p>
                                <img src="imgs/坪數.svg" alt=""> 30坪
                            </p>
                            <p>
                                <img src="imgs/格局.svg" alt=""> 整層住家 6 樓 3房 2 廳 2 衛浴
                            </p>
                        </div>
                    </div>
                    <div class="x-title-content-price">
                        <div class="x-title-content-price-top">

                            <img class="x-canser" src="imgs/取消.svg" alt="">

                        </div>
                        <div class="x-title-content-price-down">
                            <div>
                                <img src="imgs/瀏覽.svg" alt="">
                                <p>
                                    瀏覽量：8999
                                </p>
                            </div>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="x-title-content">
                    <div class="x-title-content-img">
                        <img src="imgs/57 1.jpg" alt="">
                    </div>
                    <div class="x-title-content-txt">
                        <h3>
                            士林夜市近士林劍潭捷運小套房
                        </h3>
                        <p>
                            <img src="imgs/捷運.svg" alt="">距離士林捷運站 500 公尺
                        </p>
                        <p>
                            <img src="imgs/位置.svg" alt=""> 新北市三重區碧華街 900 號
                        </p>
                        <div>
                            <p>
                                <img src="imgs/坪數.svg" alt=""> 30坪
                            </p>
                            <p>
                                <img src="imgs/格局.svg" alt=""> 整層住家 6 樓 3房 2 廳 2 衛浴
                            </p>
                        </div>
                    </div>
                    <div class="x-title-content-price">
                        <div class="x-title-content-price-top">

                            <img class="x-canser" src="imgs/取消.svg" alt="">

                        </div>
                        <div class="x-title-content-price-down">
                            <div>
                                <img src="imgs/瀏覽.svg" alt="">
                                <p>
                                    瀏覽量：8999
                                </p>
                            </div>
                            <h3>
                                15,000/月
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="x-title-card-all x-dislplaynone">

                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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
                <div class="S-xs-card-wrap">

                    <div class="S-xs-like">
                        <img class="x-canser-card" src="imgs/取消.svg" alt="">
                    </div>
                    <div class="S-xs-card">
                        <div class="S-xs-card-img">
                            <img src="imgs/57 1.jpg">
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

<script>
    $('.x-title-list').click(function() {
        console.log(1);
        $('.x-title-content-all').removeClass('x-dislplaynone')
        $('.x-title-card-all').addClass('x-dislplaynone')
    });
    $('.x-title-card').click(function() {
        console.log(1);
        $('.x-title-content-all').addClass('x-dislplaynone')
        $('.x-title-card-all').removeClass('x-dislplaynone')
    })
    $('.x-canser').click(function() {
        console.log(1);
        $(this).parentsUntil('.x-title-content-all').addClass('x-displaynone-canser')
    })
    $('.x-canser-card').click(function() {
        console.log(1);
        $(this).parentsUntil('.x-title-card-all').addClass('x-displaynone-canser')
    })
</script>

<?php include __DIR__ . './part/javascript.php'  ?>