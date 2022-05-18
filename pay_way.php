<?php
$title = '付款方式'

?>

<?php include __DIR__ . './part/head.php'  ?>

    <style>
        * {
        margin: 0;
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
            line-height: 20px;
            background: url(imgs/unchecked.svg) no-repeat left top;
            user-select: none;
        }
        input[type=checkbox]:checked+span {
            display: inline-block;
            padding-left: 30px;
            line-height: 20px;
            background-image: url(imgs/checked.svg);
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
            color: #0E2E3D;
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
        <div class="z_paycontainer">
            <div class="z_progress ">
                <div class="z_progress_text">
                    <ul class="z_barcontainer">
                        <li>
                            <h3 class="bold">選擇租屋</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">確定租屋資訊</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">線上合約</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">確認付款</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">租屋完成</h3>
                            <div class="z_radio"></div>
                        </li>
                    </ul>
                </div>
                <div class="z_progress_bar"></div>
                <div class="z_progress_bar_step4 "></div>
            </div>
            <div class="z_paydata_container ">
                <div class="z_paytitle_container">
                    <h3 class="paytitle bold">租金支付</h3>
                    <p class="z_paytitle_detail">我的租屋_XXXXXXXXX</p>
                </div>
                <div class="z_title_data_container">
                    <div class="z_chebox_intput">
                        <p class="z_checkbox_option ">付款方式</p>
                            <div class="z_check_container">
                                <div class="z_checkbox_container">
                                    <label class="option_bank_container">
                                        <input class="" type="checkbox" value="bank" name="" id="payBank" >
                                        <span>匯款</span>
                                    </label>
                                    <label class="option_card_container">
                                        <input class="" type="checkbox" value="creditcard" name="" id="payCard" >
                                        <span>信用卡</span>
                                    </label>
                                </div>
                            </div>  
                        <div class="z_payghost"></div>
                    </div>
                    <div class="z_pay_alert">
                        <p class="alert" id="payWay"></p>
                    </div>
                    <div class="z_text_intput ">
                        <p class="z_checkbox_option ">付款金額</p>
                        <div class="z_input_container">
                            <input class="z_input_text"   type="text" name="" id="">
                        </div>
                        <div class="z_payghost"></div>
                    </div>
                    <div class="z_pay_alert">
                        <p class="alert" ></p>
                    </div>
                    <div class="z_text_intput ">
                        <p class="z_checkbox_option ">繳費日期</p>
                        <input class="z_input_text" type="text" name="" id=""  >
                        <div class="z_payghost"></div>
                    </div>
                    <div class="z_pay_alert">
                        <p class="alert" ></p>
                    </div>
                    <div class="bank_area" hidden>
                        <div class="z_text_intput ">
                            <p class="z_checkbox_option ">銀行行號</p>
                            <div class="z_select_dropdown_container">
                                <select id="bankSelect" name=”bankSelect” class="z_select_dropdown">
                                    <option value=””>請選擇銀行</option>
                                    <option value=””>001-中央信託</option>
                                    <option value=””>006-合庫商銀</option>
                                    <option value=””>007-第一銀行</option>
                                </select>
                                <div class="arrow_container">
                                    <img src="imgs/down-arrow.svg" alt="">
                                </div>
                            </div>

                            
                            <div class="z_payghost"></div>
                        </div>
                        <div class="z_pay_alert">
                            <p class="alert" id="bankCode"></p>
                        </div>
                        <div class="z_text_intput_last">
                            <p class="z_checkbox_option ">銀行帳號</p>
                            <input class="z_input_text" type="text" name="" id="" placeholder="請輸入銀行帳號">
                            <div class="z_payghost"></div>
                        </div>
                        <div class="z_pay_alert">
                            <p class="alert" id="bankNumber"></p>
                        </div>
                    </div>
                    <div class="card_area " hidden>
                    <div class="z_text_intput" >
                        <p class="z_checkbox_option ">信用卡號</p>
                        <div class="z_input_small_container">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                        </div>
                        <img class="z_paycard_img" src="imgs/paycard.png" alt="">    
                    </div>
                    <p class="alert z_pay_alert " id="cardNumber"></p>
                    <div class="z_paycard_phone_img">
                        <img src="imgs/paycard.png" alt="">
                    </div>
                        <div class="z_text_intput ">
                            <p class="z_checkbox_option ">有效月年</p>
                            <div class="z_input_medium_container">
                                <input class="z_input_medium" type="text" name="" id="" placeholder="月">
                                <input class="z_input_medium" type="text" name="" id="" placeholder="年">
                            </div>
                            <div class="z_payghost"></div>
                        </div>
                        
                    <p class="alert z_pay_alert" id="yearDay"></p>
                        <div class="z_text_intput ">
                            <p class="z_checkbox_option ">　末三碼</p>
                            <div class="z_input_container">
                                <input class="z_input_text" type="text" name="" id="" placeholder="XXX">
                            </div>
                            <img class="z_creditcard_img" src="imgs\creditcardback.png" alt="">
                        </div>

                    <p class="alert z_pay_alert " id="lastThree"></p>
                    <div class="z_creditcard_phone_img">
                        <img src="imgs\creditcardback.png" alt="">
                    </div>
                </div>
                </div>
                
                <div class="z_payagree">
                    <label>
                        <input type="checkbox" name="" id="">
                        <span class="z_all-center">請再次確認您的<a href="#"> 訂單資訊 </a>及<a href="#"> 付款資訊 </a>付款完成後小房子房屋將會發送通知信至您的E-mail信箱</span>  
                    </label>
                </div>
                <div class="z_pay_alert">
                    <p class="alert" id="payCheck"></p>
                </div>
                <div class="z_twobtn">
                    <button class="pc-button-F4F4F4-180 z_phone_162 ">清除資料</button>
                    <button class="pc-button-FEAC00-180 z_phone_162 ">確認付款</button>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . './part/javascript_for_pay.php'  ?>
<?php include __DIR__ . './part/footer.php'  ?>