<?php 
$title = '單一物件';
require './part/connect-db.php';


// echo $_GET['sid']

?>



<?php include __DIR__ . './part/head.php'  ?>
<link rel="stylesheet" href="bar.css">
<style>
    /* 自己頁面的css */
    /* 主要區域 */


    section {
        position: relative;
        top: 180px;
        /* margin-top: 100px; */
    }

    .container {
        padding: 0 20px;
        position: relative;
    }

    .S-lg-d-none {
        display: none;
    }

    .S-FinalCheck-area {
        /* border: 1px solid red; */
        /* position: absolute; */
        margin-top: 240px;
        text-align: center;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        color: #0E2E3D;
    }

    .S-FinalCheck-area h2 {
        font-weight: 700;
        font-size: 32px;
        color: #0E2E3D;
    }

    .S-FinalCheck-area h3 {
        font-weight: 700;
        font-size: 24px;
        color: #0E2E3D;
    }

    .S-FinalCheck-title {
        font-weight: 900;
        font-size: 32px;
        padding: 0 0 30px 0;
    }

    .S-FinalCheck-img {
        width: 908px;
        height: 320px;
        overflow: hidden;
        /* background: url(imgs/bedroom-5646321_1920.jpg)center center/cover no-repeat; */
        /* border: #FEAC00 1px solid; */

    }
    .S-FinalCheck-img img{
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* object-fit: fill; */
        object-position: center;
        /* border: #FEAC00 1px solid; */
    }

    .S-FinalCheck-name {
        font-weight: 900;
        padding: 30px 0 10px 0;
    }

    .S-FinalCheck-location {
        padding: 0 0 30px 0;
    }


    /* --------------------------------btn---------------------------------------------------- */


    /* 電腦版長板按鈕 */

    .S-FinalCheck-btn {
        display: flex;
        justify-content: center;
        margin: 60px 0 140px;
    }

    .pc-button-F4F4F4-180 {
        margin-right: 30px;
    }

    .pc-button-F4F4F4-180 a,
    .pc-button-FEAC00-180 a {
        text-decoration: none;
        color: #0E2E3D;
    }

    #z_progress_bar {
        bottom: 32px;
    }

    #z_progress_bar_step2 {
        bottom: 32px;
    }

    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ */


    /* 手機版 小於375 */

    @media screen and (max-width:376px) {
        .S-xs-d-block {
            display: block;
        }

        .S-xs-d-none {
            display: none;
        }

        .S-FinalCheck-area {
            margin: auto;
            /* border: 1px solid red; */
            width: 100%;
            margin-top: 100px;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        /* .S-FinalCheck-area h2{
        width: 100%;
        font-weight: 700;
        font-size: 20px;
        color: #0E2E3D;
        color: red;
    
    }
    .S-FinalCheck-area h3{
        width: 100%;
        font-weight: 700;
        font-size: 16px;
        color: #0E2E3D;
    } */
        .S-FinalCheck-title {
            font-weight: 900;
            font-size: 32px;
            padding: 0 0 30px 0;
        }

        .S-FinalCheck-img {
            padding: 0 0px;
            margin: auto;
            width: 335px;
            height: 215px;
            overflow: hidden;
            /* background: url(imgs/bedroom-5646321_1920.jpg)center center/cover no-repeat; */
        }

        .S-FinalCheck-info {
            display: flex;
            flex-direction: column;
            /* justify-content: flex-start; */
            /* align-items: flex-start; */
        }

        .S-FinalCheck-price {
            font-size: 24px;
            padding: 20px 0 10px 0;
            text-align: left;
        }

        h2.S-FinalCheck-name {
            font-weight: 900;
            font-size: 20px;
            padding: 0px 0 10px 0;
            text-align: left;
        }

        h3.S-FinalCheck-location {
            font-size: 16px;
            padding: 0 0 10px 0;
            text-align: center;
            text-align: left;
        }

        h2.S-FinalCheck-date {
            font-size: 20px;
            /* padding: 0 0 0px 0; */
            text-align: center;
        }

        /* --------------------------------btn---------------------------------------------------- */
        /* 暫時版按鈕 */
        .S-FinalCheck-btn {
            display: flex;
            /* flex-direction: row-reverse; */
            justify-content: center;
            margin: 20px 0 40px;
        }

        .pc-button-FEAC00-180 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
        }

        .pc-button-F4F4F4-180 {
            margin-right: 10px;
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #F1EDEA;
        }

        .pc-button-F4F4F4-180 a,
        .pc-button-FEAC00-180 a {
            text-decoration: none;
            color: #0E2E3D;
        }
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<!-- 自己頁面的html -->
<div class="container">
    <div class="row">

        <!-- 以下是流程bar--------------------------------------------------- -->

        <section>
            <div class="z_container S-xs-d-none">
                <div class="z_progress z_margin-center ">
                    <div class="z_progress_text">
                        <ul class="z_barcontainer">
                            <li>
                                <span>選擇租屋</span>
                                <div class="z_radio_finish"></div>
                            </li>
                            <li>
                                <span>確定租屋資訊</span>
                                <div class="z_radio_finish"></div>
                            </li>
                            <li>
                                <span>線上合約</span>
                                <div class="z_radio"></div>
                            </li>
                            <li>
                                <span>確認付款</span>
                                <div class="z_radio"></div>
                            </li>
                            <li>
                                <span>租屋完成</span>
                                <div class="z_radio"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="z_progress_bar" id="z_progress_bar"></div>
                    <div class="z_progress_bar_step2" id="z_progress_bar_step2"></div>
                </div>

        </section>
        <!-- 以上是流程bar--------------------------------------------------- -->


        <div class="S-FinalCheck-area">
            <div class="S-title">
                <h1 class="S-FinalCheck-title">租屋資訊</h1>
            </div>
            <!-- 間距30px -->
            <div class="S-FinalCheck-wrap">
                <div class="S-FinalCheck">
                    <div class="S-FinalCheck-img">
                        <img src="" alt="">
                    </div>
                    <div class="S-FinalCheck-info">
                        <h3 class="S-FinalCheck-price S-lg-d-none S-xs-d-block"></h3>
                        <h2 class="S-FinalCheck-name"></h2>
                        <h3 class="S-FinalCheck-location">
                            <i class="fa-solid fa-location-dot"></i>
                            
                        </h3>
                        <h2 class="S-FinalCheck-price">
                        
                        </h2>
                    </div>
                </div>

                <div class="S-FinalCheck-btn">

                    <button class="pc-button-F4F4F4-180  mobile-button-F4F4F4-162"><a href="customer_service/customer_service.html">聯絡我們</a></button>
                    <a href="contract01.php"><button class="pc-button-FEAC00-180 mobile-button-FEAC00-162">確定租屋</button></a>
                    


                </div>
            </div>
        </div>
    </div>
</div>


<?php include __DIR__ . './part/footer.php'  ?>

<script>
    // 自己頁面的script
    let btn = document.querySelector("#show");
    let infoModal = document.querySelector("#infoModal");
    let close = document.querySelector("#close");
    let close2 = document.querySelector("#close2");
    // btn.addEventListener("click", function() {
    //     infoModal.showModal();
    // })
    // close.addEventListener("click", function() {
    //     infoModal.close();
    // })
    // close2.addEventListener("click", function() {
    //     infoModal.close();
    // })

    $(document).ready(function(){

        let itemName = JSON.parse(localStorage.getItem("itemName"));
        let itemAddress = JSON.parse(localStorage.getItem("itemAddress"));
        let itemPrice = JSON.parse(localStorage.getItem("itemPrice"));
        let itemImg = JSON.parse(localStorage.getItem("itemImg"));


        console.log(itemName);
        console.log(itemAddress);
        console.log(itemPrice);
        console.log(itemImg);
        $(".S-FinalCheck-name").text(itemName)
        $(".S-FinalCheck-location").text(itemAddress)
        $(".S-FinalCheck-price").text(itemPrice)
        $(".S-FinalCheck-img").children().attr("src",itemImg)
        
    })

</script>

<?php include __DIR__ . './part/javascript.php'  ?>