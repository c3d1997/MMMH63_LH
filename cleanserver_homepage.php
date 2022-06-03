
<?php

// require './part/admin-required.php';
require './part/connect-db.php';
$pageName = 'cleanserver_homepage';

// echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__ . './part/head.php'  ?>

<style>
    .x-cleanserver {
        margin: auto;
        width: 100%;
        max-width: 1920px;
        height: 1080px;
        background: url(imgs/pillows-820149.jpg) no-repeat center/cover;
    }

    .x-cleanserver .container {
        text-align: center;
    }

    .x-cleanserver-slogn {
        padding-top: 350px;
    }

    .x-cleanserver-slogn h2,
    .x-cleanserver-slogn h3 {
        margin-bottom: 30px;
    }


    /* 預約看房 */

    .x-cleanserver-price-title {
        margin-top: 80px;
        margin-bottom: 30px;
        height: 60px;
        background: url(imgs/五大區域清潔.svg) no-repeat center/contain;
    }

    .x-cleanserver-price-content-object {
        width: 100%;
        max-width: 600px;
        height: 578px;
        margin-bottom: 30px;
    }

    .x-cleanserver-price-content-object-img {
        width: 100%;
        height: 355px;
    }

    .x-cleanserver-price-content-object-img img {
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .x-cleanserver-price-content-object-txt {
        background-color: #F1EDEA;
        padding: 21px 200px;
        text-align: center;
    }

    .x-cleanserver-price-content-object-txt h3,
    .x-cleanserver-price-content-object-txt p {
        margin-bottom: 10px;
    }

    .x-cleanserver-price-content {
        justify-content: space-between;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }


    /* 價目表 */

    @media screen and (max-width:376px) {
        .x-cleanserver {
            width: 100%;
            max-width: 375px;
            height: 667px;
            background: url(imgs/pillows-820149.jpg) no-repeat center/cover;

        }

        .x-cleanserver-price .container{
            padding: 0;
        }

        .x-cleanserver-slogn {
            padding-top: 200px;
        }

        .x-cleanserver-slogn h2,
        .x-cleanserver-slogn h3 {
            margin-bottom: 10px;
        }

        .x-cleanserver-slogn h2 {
            font-size: 24px;
        }

        .x-cleanserver-slogn h3 {
            font-size: 16px;
            font-weight: normal;
        }

        .pc-button-FEAC00-280 {
            width: 335px;
            height: 60px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
            margin-top: 30px;
        }

        /* 搜尋 */
        .x-cleanserver-price-title {
            margin-top: 40px;
            margin-bottom: 10px;
            height: 30px;
           
            background: url(imgs/五大區域清潔.svg) no-repeat center/contain;
        }

        .x-cleanserver-price-content-object {
            width: 100%;
            max-width: 375px;
            height: 479px;
            margin-bottom: 0px;
            padding: 0 -20px;
        }

        .x-cleanserver-price-content-object-img {
            width: 100%;
            height: 224px;
        }

        .x-cleanserver-price-content-object-img img {
            width: 100%;
            object-fit: cover;
            height: 100%;
        }

        .x-cleanserver-price-content-object-txt {
            padding: 40px 60px;
        }

        .x-cleanserver-price-content-object-txt h3,
        .x-cleanserver-price-content-object-txt p {
            margin-bottom: 10px;
        }

        .x-cleanserver-price-content-object-txt h3 {
            font-size: 20px;
        }

        .x-cleanserver-price-content {
            margin-bottom: 40px;
        }
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="x-cleanserver">
    <div class="container">
        <div class="x-cleanserver-slogn">
            <h2>
                定期清潔
            </h2>
            <h3>
                建立您個人的雲端服務紀錄
            </h3>
            <h3>
                建立您個人的雲端服務紀錄建立
            </h3>
            <h3>
                建立您個人的雲端服務紀錄
            </h3>
            <h3>
                建立您個人的雲端服務紀錄建立您
            </h3>
            <a href="cleaning_services.php"><button class="pc-button-FEAC00-280">預約清潔</button></a>
        </div>
    </div>
</div>
<div class="x-cleanserver-price">

    <div class="x-cleanserver-price-title">
    </div>
    <div class="container">
        <div class="x-cleanserver-price-content">
            <div class="x-cleanserver-price-content-object">
                <div class="x-cleanserver-price-content-object-img">
                    <img src="imgs/condo-3499679_1920.jpg" alt="">
                </div>
                <div class="x-cleanserver-price-content-object-txt">
                    <h3>
                        浴室
                    </h3>
                    <p>
                        實坪 5坪~10坪：5,500元
                    </p>
                    <p>
                        實坪10坪~15坪：5,500元
                    </p>
                    <p>
                        (上項視現場髒污程度計價)
                    </p>
                    <p>
                        (廚房用具清潔另計)
                    </p>
                </div>
            </div>
            <div class="x-cleanserver-price-content-object">
                <div class="x-cleanserver-price-content-object-img">
                    <img src="imgs/kitchen-2094707_1920.jpg" alt="">
                </div>
                <div class="x-cleanserver-price-content-object-txt">
                    <h3>
                        廚房
                    </h3>
                    <p>
                        實坪 5坪~10坪：5,500元
                    </p>
                    <p>
                        實坪10坪~15坪：5,500元
                    </p>
                    <p>
                        (上項視現場髒污程度計價)
                    </p>
                    <p>
                        (廚房用具清潔另計)
                    </p>
                </div>
            </div>
            <div class="x-cleanserver-price-content-object">
                <div class="x-cleanserver-price-content-object-img">
                    <img src="imgs/bedroom-6778193_1920.jpg" alt="">
                </div>
                <div class="x-cleanserver-price-content-object-txt">
                    <h3>
                        臥室
                    </h3>
                    <p>
                        實坪 5坪~10坪：5,500元
                    </p>
                    <p>
                        實坪10坪~15坪：5,500元
                    </p>
                    <p>
                        (上項視現場髒污程度計價)
                    </p>
                    <p>
                        (廚房用具清潔另計)
                    </p>
                </div>
            </div>
            <div class="x-cleanserver-price-content-object">
                <div class="x-cleanserver-price-content-object-img">
                    <img src="imgs/indoor-4148898_1920.jpg" alt="">
                </div>
                <div class="x-cleanserver-price-content-object-txt">
                    <h3>
                        客廳
                    </h3>
                    <p>
                        實坪 5坪~10坪：5,500元
                    </p>
                    <p>
                        實坪10坪~15坪：5,500元
                    </p>
                    <p>
                        (上項視現場髒污程度計價)
                    </p>
                    <p>
                        (廚房用具清潔另計)
                    </p>
                </div>
            </div>
            <div class="x-cleanserver-price-content-object">
                <div class="x-cleanserver-price-content-object-img">
                    <img src="imgs/building-4961642_1920.jpg" alt="">
                </div>
                <div class="x-cleanserver-price-content-object-txt">
                    <h3>
                        陽台
                    </h3>
                    <p>
                        實坪 5坪~10坪：5,500元
                    </p>
                    <p>
                        實坪10坪~15坪：5,500元
                    </p>
                    <p>
                        (上項視現場髒污程度計價)
                    </p>
                    <p>
                        (廚房用具清潔另計)
                    </p>
                </div>
            </div>
            <div class="x-cleanserver-price-content-object">
                <div class="x-cleanserver-price-content-object-img">
                    <img src="imgs/home-6469864_1920.jpg" alt="">
                </div>
                <div class="x-cleanserver-price-content-object-txt">
                    <h3>
                        樓梯
                    </h3>
                    <p>
                        實坪 5坪~10坪：5,500元
                    </p>
                    <p>
                        實坪10坪~15坪：5,500元
                    </p>
                    <p>
                        (上項視現場髒污程度計價)
                    </p>
                    <p>
                        (廚房用具清潔另計)
                    </p>
                </div>
            </div>
        </div>
    </div>



</div>

<?php include __DIR__ . './part/footer.php'  ?>

<script>
    // 自己頁面的script
</script>

<?php include __DIR__ . './part/javascript.php'  ?>