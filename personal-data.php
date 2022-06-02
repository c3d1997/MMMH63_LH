<?php 
    require './part/connect-db.php';

    

?>
<?php include __DIR__ . './part/head.php'  ?>

<style>
    .c-world {
        display: flex;
        width: 100%;
        justify-content: flex-start;
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
    .c-list-active{
            text-decoration: none;
            list-style: none;
            margin-bottom: 30px;
        }
    .c-list-active a{
            text-decoration: none;
            list-style: none;
            margin-bottom: 30px;
        }

    /* 右邊標題開始 */

    .x-personal-data-all {
        max-width: 1053px;
        width: 100%;
        margin-left: 80px;
    }

    .x-title-txt {
        margin-bottom: 30px;
    }

    .x-title-content div {
        height: 30px;
    }

    .x-title-content-all {
        width: 100%;
        max-width: 525px;
        display: flex;
        flex-direction: column;
        margin-left: 18%;
    }

    .x-title-content-all button {
        margin: auto;
    }

    .x-title-content input {
        margin-bottom: 0px;
        width: 100%;
    }

    .x-title-content-all .x-title-content:nth-child(4) input {
        height: 300px;
    }

    .x-title-content p {
        line-height: 30px;
        color: red;
    }

    .x-title-content input {
        color: #0E2E3D;
        text-indent: 15px;
        /* opacity: .5; */
    }

    .x-title-content-all-button-two {
        margin: auto;
        display: flex;
    }

    .x-title-content-all-button-two button {
        margin-right: 30px;
    }

    .footer_container {
        margin-top: 80px;
    }

    @media screen and (max-width:376px) {
        .c-mylist {
            display: none;
        }

        .x-personal-data-all {
            margin-left: 0px;
        }

        .x-title-txt {
            text-align: center;
            margin-bottom: 20px;
        }

        .c-world {
            height: auto;
            min-height: auto;
            padding-top: 90px;
        }

        .pc-button-FEAC00-180 {
            margin-top: 20px;
            width: 335px;
            height: 60px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
        }

        .x-title-content-all-button-two {
            display: flex;
            justify-content: space-between;
        }

        .x-title-content-all-button-two .pc-button-F4F4F4-180 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #F1EDEA;
        }

        .x-title-content-all-button-two .pc-button-FEAC00-180 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
        }

        .x-title-content-all {
            margin-left: 0%;
        }

        .x-title-content-all-button-two {
            margin: 0;
            justify-content: space-between;
        }

        .x-title-content-all-button-two button {
            margin: 0;
        }

        .footer_container {
            margin-top: 40px;
        }
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="container">
    <div class="c-world">
        <!-- 左邊選單 -->
        <div class="c-mylist">
            <ul>
                <li class="c-list-active">
                    <a href="personal-data.php">
                        <h3>會員資料</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="house_post.php">
                        <h3>刊登物件</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="myrent_house.php">
                        <h3>我的租屋</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="mycollection_list.php">
                        <h3>我的收藏</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="promo.php">
                        <h3>我的優惠</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="house_reserve.php">
                        <h3>我的預約</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="myrent_contract.php">
                        <h3>租屋契約</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="myrent_fee.php">
                        <h3>租金支付</h3>
                    </a>
                </li>
                <li class="c-list">
                    <a href="clean_reserve.php">
                        <h3>清潔服務</h3>
                    </a>
                </li>
            </ul>
        </div>
        <div class="x-personal-data-all">
            <div class="x-personal-data-title">
                <div class="x-title-txt">
                    <h3>我的基本資料</h3>
                </div>
                <div class="x-title-content-all">
                    <div class="x-title-content">
                        <input type="text" placeholder="請輸入欲修改姓名" value="<?=  $_SESSION['member']['name']?>" style="font-weight: bold;" >
                        <div>
                            
                        </div>

                    </div>
                    <div class="x-title-content">
                        <input type="text" placeholder="請輸入欲修改手機" value="<?= $_SESSION['member']['mobile'] ?>" style="font-weight: bold;">
                        <div>
                           
                        </div>
                    </div>
                    <div class="x-title-content">
                        <input type="text" placeholder="請輸入欲修改郵件" value="<?= $_SESSION['member']['email'] ?>" style="font-weight: bold;">
                        <div>
                            
                        </div>
                    </div>
                    <div class="x-title-content">
                        <input type="text" placeholder="請多多介紹您自己！（非必填）" value="" style="font-weight: bold;">
                        <div>
                            
                        </div>
                    </div>
                    <!-- <button class="pc-button-FEAC00-180">修改</button> -->
                    <div class="x-title-content-all-button-two">
                        <button class="pc-button-FEAC00-180">確認</button>
                        <button class="pc-button-F4F4F4-180">清除資料</button>
                    </div>

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