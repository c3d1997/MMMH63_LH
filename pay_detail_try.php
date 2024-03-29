<?php 
$title = '租屋明細';
require './part/connect-db.php';

// 帶入會員資料
$msql = "SELECT * FROM `members` WHERE `sid` = 1;";
$stmt = $pdo->query($msql);
$m = $stmt->fetch();

// 帶入支付方式 pay
$psql = "SELECT * FROM `pay` WHERE `sid` = 1;";
$stmt = $pdo->query($psql);
$p = $stmt->fetch();


$sql = "SELECT *     FROM `items` WHERE `sid` = 1;";
$i = $pdo->query($sql)->fetch();
$sql = "SELECT *     FROM `items` WHERE `item_imgs`";
$img = $pdo->query($sql)->fetch();

?>


<?php include __DIR__ . './part/head.php'  ?>
    <style>
        * {
            margin: 0;
        }
        .z_ml-5 {
            margin-left: 5px;
        }
        .display-n {
            display: none;
        }
        .testborder {
            border: 1px solid green;
        }

        h1,h2,h3,p,span {
            margin: 0;
            color: #0E2E3D;
        }
        .bold {
            font-weight: bold;
        }
        h1 {
            font-weight: normal;
            font-size: 48px;
        }
        h2 {
            font-weight: normal;
            font-size: 32px;
        }
        h3 {
            font-weight: normal;
            font-size: 24px;
        }
        p {
            font-size: 16px;
        }
        span {
            font-size: 16px;
        }
        a, a:hover, a:visited, a:link, a:active {
            color: #0E2E3D;
            text-decoration:none;
            outline: none;
        }

        .small {
            font-size: 12px;
        }
        .slogan {
            font-size: 128px;
        }
        .time {
            font-size: 48px;
        }
        .alert {
            color: red;
        }
        ul {
            list-style-type: none;
        }
        button {
            cursor: pointer;
            border: none;
        }
        input[type=text]  {
            margin: 0;
            padding: 0;
            height: 60px;
            border: none;
            /* text-indent: 15px; */
        }
        input[type=checkbox] {
            display: none;
        }
        input[type=checkbox]+span {
            cursor: pointer;
            display: inline-block;
            padding-left: 30px;
            /* line-height: 24px; */
            background: url(../imgs/unchecked.svg) no-repeat left top;
            user-select: none;
        }
        input[type=checkbox]:checked+span {
            display: inline-block;
            padding-left: 30px;
            /* line-height: 24px; */
            background-image: url(../imgs/checked.svg);
        }

        .z_button_correct {
            width: 180px;
            height: 60px;
            background-color: #FEAC00;

        }
        .z_button_correct>p,.z_button_cancel>p {
            font-size: 24px;
            font-weight: bold;
        }
        .z_button_cancel {
            width: 180px;
            height: 60px;
            background-color: #F1EDEA;

        }

        .z_d_flex {
            display: flex;
        }
        .z_justify-content_center {
            justify-content: center;
        }

        .z_input_text {
            flex-grow: 1;
            text-indent: 15px;
        }
        .z_bank_name {
            width: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
        }

        .z_radio_finish {
            position: relative;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #FEAC00;
            left: 50%;
            transform:translateX(-50%);
            margin-top: 30px;
        }
        .z_radio {
            position: relative;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #b1b1b1;
            left: 50%;
            transform:translateX(-50%);
            margin-top: 30px;
        }

        .z_all-center {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }
        .z_margin-center {
            left: 0;
            right: 0;
            margin: auto;
        }
        body {
            margin: 0;
            background-color: #f4f4f4;
        }
        .z_section {
            margin-top: 160px;
            margin-bottom: 45px;
        }
        .z_paycontainer {
            margin: auto;
            max-width: 1280px;
            padding: 0 25px;
        }
        .z_input_container {
            flex-grow: 1;
        }
        .z_input_medium_container {
            display: flex;
            justify-content: space-between;
            flex-grow: 1;
        }
        .z_input_medium_container input[type=text]{
            width: 100%;
            max-width: 255px;
        }
        .z_input_small_container {
            display: flex;
            justify-content: space-between;
            flex-grow: 1;
        }
        .z_input_small_container  input[type=text]{
            width: 100%;
            max-width: 120px;
        }
        .z_input_container input[type=text]{
            width: 100%;
        }
        .z_progress {
            z-index: -1;
            position: relative;
            height: 100px;
            margin-bottom: 50px;
        }
        .z_progress_bar {
            z-index: -2;
            position: absolute;
            width: 100%;
            height: 1px;
            background-color:#b1b1b1;
            bottom: 22px;
        }
        .z_progress_bar_step1 {
            z-index: -1;
            position: absolute;
            width: 10%;
            height: 1px;
            background-color:#ffae00;
            bottom: 22px;
        }
        .z_progress_bar_step2 {
            z-index: -1;
            position: absolute;
            width: 30%;
            height: 1px;
            background-color:#ffae00;
            bottom: 22px;
        }
        .z_progress_bar_step3 {
            z-index: -1;
            position: absolute;
            width: 50%;
            height: 1px;
            background-color:#ffae00;
            bottom: 22px;
        }
        .z_progress_bar_step4 {
            z-index: -1;
            position: absolute;
            width: 70%;
            height: 1px;
            background-color:#ffae00;
            bottom: 22px;
        }
        .z_progress_bar_step5 {
            z-index: -1;
            position: absolute;
            width: 100%;
            height: 1px;
            background-color:#ffae00;
            bottom: 22px;
        }

        .z_barcontainer {
            width: 100%;
            display: flex;
            justify-content: space-around;
        }

        .z_paytitle_container {
            align-items: flex-end;
            display: flex;
            margin-bottom: 30px;
        }
        .z_paytitle_detail {
            margin-left: 50px;
        }
        .z_paydata_container {
            max-width: 730px;
            left: 0;
            right: 0;
            margin: 0 auto;
        }
        .z_chebox_intput {
            width: 100%;
            display: flex;
            align-items: center;
            height: 60px;
        }
        .z_text_intput {
            /* width: 100%; */
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
        }
        .z_text_intput_last {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .z_check_container {
            height: 60px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }
        .z_checkbox_container {
            width: 190px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .z_checkbox_option_container {
            display: flex;
            align-items: center;
        }
        .z_checkbox_option {
            width: 65px;
            margin-right: 10px;
        }
        .z_input_medium {
            text-align: center;
        }
        .z_input_small {
            text-align: center;
        }
        .z_paycard_img {
            width: 110px;
            height: 30px;
            top: 0;
            bottom: 0;
            margin: auto 0;
            margin-left: 20px;
        }
        .z_paycard_phone_img {
            display: none;  
            width: 110px;
            height: 30px;
            top: 0;
            bottom: 0;
            margin: auto auto;
            margin-left: 20px; 
        }
        .z_creditcard_img {
            width: 45px;
            height: 30px;
            top: 0;
            bottom: 0;
            margin: auto auto;
            margin-left: 20px;
            margin-right: 65px;
        }
        .z_creditcard_phone_img {
            display: none;
        }
        .z_payghost {
            width: 130px;
            /* height: 60px; */
            /* background-color: red; */
        }
        .z_paydropdown {
            flex-grow: 1;
            position: relative;
        }
        .z_paydropdown>span {
            
            width: 100%;
            height: 60px;
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #z_bankListBtn span {
            opacity: .7;
        }
        .banklist {
            width: 100%;
            background-color: #fff;
            position: absolute;
            text-align: center;
            cursor: pointer;
            color: green;
        }
        .z_pay_alert {
            height: 30px;
            margin-left: 75px;
            display: flex;
            align-items: center;
        }
        .z_payagree {
            display: flex;
            /* margin-bottom: 30px; */
        }
        .z_twobtn {
            max-width: 390px;
            margin: auto;
            margin-top: 30px;
            margin-bottom: 30px;
            justify-content: space-between;
            align-items: center;
            display: flex;
            
        }
        .z_pay_detail_title {
            margin-bottom: 40px;
            text-align: center;
            font-weight: bold;
        }
        .z_pay_success_container {
            margin-top: 255px;
            margin-bottom: 340px;
            text-align: center;
        }
        .z_pay_success_title {
            font-weight: bold;
            margin-bottom: 30px;
        }
        .z_pay_success_tip {
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 24px;
        }
        .z_pay_detail_container {
            display: flex;
            margin-bottom: 50px;
            max-height: 550px;
        }
        .z_people_info_container {
            order: 0;
            margin-top: 40px;
        }
        .z_pay_info_container {
            order: 0;
            margin-top: 40px;
        }
        .z_detail_info_container {
            order: 0;
            margin-top: 40px;
        }
        .z_detail_icon_items_center {
            display: flex;
            align-items: center;
        }
        .z_detail_mb {
            margin-bottom: 5px;
        }
        .z_pay_detail_img {
            width: 50%;
        }
        .z_pay_detail_img img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .z_pay_detail_text {
            margin-left: 75px;
        }
        .z_detail_items_name {
            font-size: 24px;
            font-weight: bold;
        }
        .z_detail_cost {
            font-size: 24px;
            display: inline;
            font-weight: bold;
        }
        .z_detail_cost_phone {
            display: none;
        }
        .z_pay_detail_text span {
            color: #0E2E3D;
        }
        .z_icon_type_mr {
            margin-right: 50px;
        }
        .downArrow {
            transform: rotateX(180deg);
        }

        .z_maxbtn {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card_area,.bank_area {
            display: none;
            
        }
        .z_select_dropdown_container{
            flex-grow: 1;
            position: relative;
            display: flex;
        }
        .bank_area select{
            
            height: 60px;
            border: none;
            outline: none;
            appearance:none;
            width: 100%;
            font-size: 16px;
            padding-left: 15px;
        }
        .bank_area select option {
            font-size: 16px;

        }
        .banklist p{
            margin-bottom: 10px
        }

        .z_select_dropdown_container .arrow_container {
            top:50%;
            transform: translateY(-50%);
            right: 15px;
            position: absolute;
            pointer-events: none;
        }

        @media screen and (max-width:376px) {

            input[type=text]  {
                margin: 0;
                padding: 0;
                height: 45px;
                border: none;
                /* text-indent: 15px; */
            }
            .z_section {
                margin-top: 110px;
                margin-bottom: 40px;
            }
            .z_button_correct>p,.z_button_cancel>p {
                font-size: 20px;
                font-weight: bold;
            }
            .z_container {
                width: 335px;
                margin-top: 110px;
                padding: 0;
            }
            .z_progress {
                display: none;
            }
            .z_paydata_container {
                width: 100%;
            }
            .z_paytitle_container {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .z_paytitle_detail {
                margin-left: 0;
            }
            .z_input_container {
                width: 100%;
            }
            .z_check_container {
                height: 45px;
            }
            .z_chebox_intput,.z_text_intput,.z_text_intput_last {
                width: 100%;
            }
            .z_chebox_intput>p {
                display: none;
            }
            .z_text_intput>p {
                display: none;
            }
            .z_text_intput_last>p {
                display: none;
            }
            .z_paydropdown>button {
                height: 45px;
                width: 100%;
            }
            .z_pay_alert {
                margin-left: 0;
                justify-content: flex-start;
            }
            .z_input_small {
                width: 75px;
            }
            .z_input_medium {
                width: 160px;
            }
            .z_paycard_img {
                display: none;

            }
            .z_paycard_phone_img {
                display: block;  
                height: 30px;

                margin-left: 0;
                margin: 0 auto;
                margin-bottom: 30px; 
            }
            .z_paycard_phone_img img {
                width: 110px;
            }
            .z_creditcard_img {
                display: none;
            }
            .z_creditcard_phone_img {
                display: block;
                height: 30px;
                margin-left: 0;
                margin: 0 auto;
                margin-bottom: 30px; 
                text-align: center;

            }
            .z_creditcard_phone_img img {
                width: 45px;
            }
            .z_pay_success_container {
                width: 335;
                margin-top: 40px;
                margin-bottom: 100px;
                text-align: center;
            }
            .z_pay_success_title {
                margin-bottom: 165px;
            }
            .z_pay_success_tip_container {
                margin-bottom: 190px;
            }
            .z_pay_success_tip {
                font-size: 20px;
                margin-bottom: 0;
            }
            .z_btn_reverse {
                display: flex;
                flex-direction: row-reverse;
            }
            .z_twobtn {
                width: 335px;
            }
            .z_button_cancel,.z_button_correct {
                width: 160px;
            }
            .z_pay_detail_container {
                display: block;
                max-height: none;
            }
            .z_pay_detail_img {
                width: 100%;
            }
            .z_pay_detail_text {
                margin-left: 0;
                display: flex;
                flex-direction: column;
            }
            .z_people_info_container {
                order: 0;
                margin-top: 40px;
            }
            .z_pay_info_container {
                order: 0;
                margin-top: 40px;
            }
            .z_detail_info_container {
                order: -1;
                margin-top: 15px;
            }
            .z_detail_items_name {
                font-size: 20px;
            }
            .z_detail_cost {
                display: none;
            }
            .z_detail_cost_phone {
                font-size: 20px;
                display: none;
                display: inline;
                font-weight: bold;
            }
            .z_icon_type_mr {
                margin-right: 30px;
            }
            .z_icon_type_nomr {
                margin: 0;
            }
            .z_maxbtn {
                width: 100%;
            }
            .z_phone_162 {
                width: 162.5px;
            }
            .z_payghost {
                display: none;
            }
        }
    </style>
<?php include __DIR__ . './part/nav.php'  ?>

    <section class="z_section">
        <div class="z_paycontainer ">
            <h2 class="z_pay_detail_title">租屋明細</h2>
            <div class="z_pay_detail_container">
                <div class="z_pay_detail_img">
                    <img src="myitem\upimg\1.jpg">

                </div>
                <div class="z_pay_detail_text">
                    <div class=" z_people_info_container">
                        <h3 class="bold z_detail_mb">租屋人資訊</h3>
                        <p class="z_detail_mb">姓名：小皇子</p>
                        <p class="z_detail_mb">手機：0987666888</p>
                        <p>身分證：A123456789</p>
                    </div>
                    <div class="z_pay_info_container">
                        <h3 class="bold z_detail_mb">付款資訊</h3>
                        <p class="z_detail_mb">付款方式：信用卡</p>
                    </div>
                    <div class="z_detail_info_container">
                        <p class="z_detail_cost_phone z_detail_mb ">$20,000/月</p>
                        <p class="z_detail_items_name z_detail_mb">近捷運板橋站，市中心生活圈</p>
                        <!-- <div class="z_detail_mb z_detail_icon_items_center">
                            <img class="z_mr-5" src="imgs/bus.svg" alt="">
                            <span class="z_detail_mb z_ml-5"><?= $i['close_station'] ?></span>
                        </div> -->
                        <div class="z_detail_mb z_detail_icon_items_center">
                            <img class="z_mr-5" src="imgs/position.svg" alt="">
                            <span class="z_detail_mb z_ml-5">新北市板橋區中山路一段161號</span>
                        </div>
                        <div class="z_detail_icon_items_center">
                            <img class="z_mr-5" src="imgs/ping.svg" alt="">
                            <span class="z_icon_type_mr z_ml-5">30坪</span>
                            <img src="imgs/type.svg" alt="">
                            <span class="z_icon_type_mr z_icon_type_nomr z_ml-5">整層住家,電梯大樓3F/12F</span>
                            <p class="z_detail_cost z_ml-5">$20,000/月</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="z_d_flex z_justify-content_center z_grow " >
                <a href="home_page.php"><button class="z_maxbtn pc-button-FEAC00-180 z_phone_162 ">完成租屋</button></a>
            </div>
        </div>
    </section>

<?php include __DIR__ . './part/footer.php'  ?>
<?php include __DIR__ . './part/javascript.php'  ?>
