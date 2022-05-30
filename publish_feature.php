<?php 
    require './part/connect-db.php';

    if(! empty($_POST)){
        $_SESSION['item_area'] = $_POST['item_area'];
        $_SESSION['item_dist'] = $_POST['item_dist'];
        $_SESSION['item_address'] = $_POST['item_address'];
        $_SESSION['ping_number'] = $_POST['ping_number'];
        $_SESSION['floor'] = $_POST['floor'];
        $_SESSION['roomtype'] = $_POST['roomtype'];
        $_SESSION['room_count'] = $_POST['room_count'];
        $_SESSION['item_name'] = $_POST['item_name'];
        $_SESSION['price'] = $_POST['price'];
        $_SESSION['contract'] = $_POST['contract'];
    }


?>
<?php include __DIR__ . './part/head.php'  ?>
    <style>
        .input_option {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .fullinput_container {
            flex-grow: 1;
        }
        .option_name {
            margin-right: 15px;
        }
        .input_alert {
            display: flex;
            align-items: center;
            margin-left: 75px;
            color: red;
            line-height: 30px;
        }
        .fullinput_container input,
        .input_container input {
            width: 100%;
            text-indent: 15px;
        }
        .dropdown {
            cursor: pointer;
            background-color: #fff;
            padding: 0 15px;
            display: flex;
            justify-content: space-between;
            height: 60px;
            align-items: center;
        }
        .dropdown span{
            opacity: .7;
        }
        .dropdown_container {
            width: 100%;
            position: relative;
        }
        .dropdown_container>span {
            display: block;
            width: 100%;
            height: 60px;
            background-color: #fff;
            padding: 0;
        }
        * {
            margin: 0;
        }
        .z_display-n-pc {
            display: none;
        }
        .z_display-b-pc {
            display: block;
        }
        .testborder {
            outline: 1px solid green;
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


        .slogan {
            font-size: 128px;
        }
        .time {
            font-size: 48px;
        }
        ul {
            list-style-type: none;
        }

        input[type=text]  {
            margin: 0;
            padding: 0;
            height: 60px;
            border: none;
            outline: none;
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
            background: url(imgs/unchecked.svg) no-repeat left top;
            user-select: none;
        }
        input[type=checkbox]:checked+span {
            display: inline-block;
            padding-left: 30px;
            /* line-height: 24px; */
            background-image: url(imgs/checked.svg);
        }
        body {
            margin: 0;
            background-color: #f4f4f4;
        }
        .z_container {
            margin: auto;
            max-width: 1280px;
            /* margin-bottom: 90px; */
            /* margin-top: 80px; */
        }
        .z_publish_container {
            padding: 0 50px;
            margin-top: 180px;
            margin-bottom: 90px;
        }
        .z_step_title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
            color: #0E2E3D;
        }
        .z_img_reviewcontainer {
            margin: auto;
            background-color: #EEF1F4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 550px;
            border: 3px solid #0E2E3D;
        }
        .z_img_reviewcontainer_02 {
            margin: auto;
            background-color: #EEF1F4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 550px;
            border: 3px solid #0E2E3D;
        }
        .uploadimg_before > *{
            margin-bottom: 10px;
            text-align: center;
        }
        .uploadimg_after {
            position: relative;
            width: 100%;
            height: 100%;
        }
        .uploadimg_after img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .z_upload_item_img_btn {
            background-color: #EEF1F4;
        }
        .z_upload_item_img_btn > button {
            font-size: 16px;
            font-weight: bold;
            color: #75BBE3;
        }
        .z_clickupload {
            font-size: 16px;
            font-weight: bold;
            color: #75BBE3;
        }
        .z_step1imgs_container {
            padding: 0 3px;
            margin-top: 30px;
            height: 450px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-content: space-between;
        }
        .z_review_card {
            position: relative;
            width: 18%;
            height: 46%;
            background-color: #EEF1F4;
            outline: 3px solid #0E2E3D;
        }
        .z_close_icon {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 25px;
            height: 25px;
            background-color: rgba(255, 255, 255, 0);
            background-image: url(imgs/closeicon.svg);
            background-position: center;
        }
        .z_review_card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .z_publish_btnY { 
            display: block;
            left: 0;
            right: 0;
            margin: 0 auto;
            margin-top: 30px;
        }
        .z_publish_text_container {
            width: 100%;
            margin: auto;
        }
        .z_publish_text_container textarea {
            width: 100%;
            height: 180px;
            resize: none;
            border: none;
            outline: none;
            margin-bottom: 30px;
        }

        .z_d_flex {
            display: flex;
        }

        .input_container {
            width: 525px;
            width: 49%;
            display: flex;
            justify-content: space-between;
        }
        .z_publish_input_option {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .z_publish_input_twooption {
            display: flex;
            align-items: center;
        }
        .z_two_input {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
        }
        .z_option_name {
            margin-right: 15px;
        }
        .z_fullinput_container input,.z_input_container input {
            width: 100%;
            text-indent: 15px;
        }
        .z_fullinput_container input[placeholder],.z_input_container input[placeholder] {
            font-size: 16px;
        }
        .z_publish_alert {
            margin-left: 75px;
        }
        .z_chebox_intput {
            width: 600px;
            align-items: center;
            justify-content: space-between;
            display: flex;
        }
        .z_text_intput {
            width: 600px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .z_text_intput_last {
            width: 600px;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }
        .z_check_container {
            width: 100%;
            height: 60px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .z_publish_check_container {
            min-height:20px;
            display: flex;
            align-items: center;
            padding: 10px 0 10px;
            padding-left: 15%;
            margin-bottom: 30px;
            flex-wrap: wrap;
            background-color: #fff;
        }
        .z_publish_check_container_s {
            min-height: 80px;
            display: flex;
            align-items: center;
            padding: 20px 0 20px;
            padding-left: 15%;
            margin-bottom: 30px;
            flex-wrap: wrap;
            background-color: #fff;
        }
        .z_publish_item_detail_title {
            font-size: 24px;
            font-weight: bold;
            color: #0E2E3D;
        }
        .z_flex_wrap {
            flex-wrap: wrap;
        }
        .z_publish_longer_check_container {
            min-height: 40px;
            background-color: #fff;
            display: flex;
            /* justify-content: space-between; */
            align-items: center;
            padding: 20px  10% 20px 15% ;
            /* padding-left: 10%; */
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .z_mb_0 {
            margin-bottom: 0;
        }
        .z_publish_check_container input[type=checkbox]+span, .z_publish_check_container_s input[type=checkbox]+span, .z_publish_longer_check_container input[type=checkbox]+span{
            padding-left: 20px;
            margin-right: 15px;
            line-height: 20px;
        }
        .z_publish_check_container input[type=checkbox]+span,.z_publish_check_container_s input[type=checkbox]+span {
            width: 100px;
        }
        .z_publish_longer_check_container input[type=checkbox]+span{
            width: 60px;
        }
        .z_checkbox_container {
            width: 190px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .z_input_medium {
            width: 255px;
            text-align: center;
        }
        .z_input_small {
            width: 120px;
            text-align: center;
        }

        .z_publish_dropdown_container {
            width: 100%;
            position: relative;
        }
        .z_publish_dropdown_container>span {
            width: 100%;
            height: 60px;
            background-color: #fff;
            padding: 0;
        }
        .z_publish_dropdown {
            padding: 0 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .z_publish_dropdown>span {
            opacity: .7;
        }
        .z_publish_dropdown_list {
            width: 100%;
            background-color: #fff;
            position: absolute;
            text-indent: 15px;
            z-index: 2;
        }
        .z_publish_dropdown_list  p{
            margin-bottom: 10px;
        }
        .z_publish_option_title {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            margin-bottom: 10px;
        }
        .z_pay_alert {
            height: 30px;
            margin-left: 75px;
            display: flex;
            align-items: center;
        }
        .z_payagree {
            display: flex;
            margin-bottom: 30px;
        }
        .z_twobtn {
            max-width: 390px;
            margin-top: 30px;
            margin-bottom: 30px;
            justify-content: space-between;
            align-items: center;
            display: flex;
            margin: auto;
        }
        .downArrow {
            transform: rotateX(180deg);
        }
        .z_checkbox a{
            color: #FEAC00;
        }
        .z_publish_phone_title {
            display: none;
        }
        .z_publish_phone_tip_container {
            display: none;
        }
        .z_phone_input_alert {
            display: none;
        }
        .z_publish_small {
            line-height: 25px;
        }
        .z_step4imgs_container {
            display: none;
        }
        .z_publish_checkbox_option_container {
            padding: 10px 0;
        }
        .z_publish_textarea_container {
            background-color: #fff;
            padding: 30px;
            margin-bottom: 30px;
        }





        @media screen and (max-width:376px) {
            .z_publish_container {
                margin-top: 90px;
                margin-bottom:160px;
            }
            input[type=text]  {
                height: 45px;
                width: 100%;
            }
            .dropdown_container>button {
                height: 45px;
            }
            .z_publish_phone_title {
                display: block;
                width: 35%;
                position: relative;
                margin: auto;
                margin-bottom: 20px;
            }
            .z_publish_phone_title p{
                font-size: 24px;
                font-weight: bold;
                text-align: center;
            }
            .z_publish_phone_title img{
                position:absolute;
                left: 18px;
                top: 10px;
                z-index: -2;
            }
            .z_step_title {
                font-size: 20px;
                margin-bottom: 20px;
            }
            .z_publish_container {
                padding: 0 20px;
            }
            .z_step1imgs_container {
                /* margin-top: 20px; */
                width: 950%;
                height: 200px;
                /* display: block; */
                flex-wrap: nowrap;
                justify-content: space-between;
                /* align-content: space-between; */
            }
            .z_review_card {
                position: relative;
                width: 275px;
                height: 250px;
                background-color: #EEF1F4;
                outline: 3px solid #0E2E3D;
            }
            .z_review_card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .z_img_reviewcontainer {
                display: none;
            }

            .z_phone_view {
                margin-left: 30px; 
                /* width: 120%; */
                overflow:scroll;
                height: 300px;
            }
            .z_publish_phone_tip_container {
                padding: 0 30px;
                display: block;
            }
            .z_publish_phone_tip_container>p:nth-child(1){
                text-align: center;
            }
            .z_maxbtn {
                width: 100%;
            }
            .z_publish_btnY { 
                margin-top: 20px;
            }
            .z_twobtn {
                width: 335px;
            }
            .z_phone_162 {
                width: 162.5px;
            }.input_option {
                flex-direction: column;
            }.z_fullinput_container {
                width: 100%;
            }
            .z_publish_input_twooption {
                flex-direction: column;
            }
            .z_two_input {
                width: 100%;
                flex-direction: column;
            }
            .z_input_container {
                width: 100%;
            }
            .z_phone_input_alert {
                display: block;
            }
            .z_display-n-phone {
                display: none;
            }
            .z_display-b-phone {
                display: block;
            }
            .z_input_alert {
                margin-left: 0;
            }
            .z_publish_check_container {
                min-height: 60px;
                display: flex;
                align-items: center;
                padding:0 ;
                padding-top: 15px;
                padding-left: 15%;
                margin-bottom: 30px;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .z_publish_check_container_s {
                min-height: 120px;
                display: flex;
                align-items: center;
                padding:0 ;
                padding-top: 15px;
                padding-left: 15%;
                margin-bottom: 30px;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .z_publish_check_container input[type=checkbox]+span, .z_publish_check_container_s input[type=checkbox]+span, .z_publish_longer_check_container input[type=checkbox]+span{
                padding-bottom: 15px;
            }
            .z_publish_check_container input[type=checkbox]+span,.z_publish_check_container_s input[type=checkbox]+span {
                width: 100px;
            }
            .z_publish_longer_check_container input[type=checkbox]+span {
                width: 60px;
            }
            .z_publish_item_detail_title {
                font-size: 16px;
            }
            .z_publish_small {
                font-size: 12px;
                line-height: 15px;
            }
            .z_otherinfo_flex {
                display: flex;
                flex-direction: column;
            }
            .z_otherinfo_order1 {
                order: -1;
            }
            .z_publish_longer_check_container {
                flex-wrap: wrap;
                justify-content: flex-start;
                padding: 20px 10% 20px 20%
            }
            .z_publish_text_container textarea {
                margin-bottom: 0;
            }
            .z_step4imgs_container {
                display: flex;
                justify-content: center;
            }
            .z_img_reviewcontainer_02 {
                width: 275px;
                height: 250px;
            }
            .z_publish_checkbox_option_container {
                padding:  0;
            }
            .z_publish_textarea_container  {
                margin-bottom: 0;
            }
        }
    </style>

<?php include __DIR__ . './part/nav.php'  ?>

    <section>
        <div class="z_container ">
            <div class="z_row ">
                <div class="z_publish_container">
                    <div class="z_publish_phone_title">
                        <img src="imgs/backcolor.svg" alt="">
                        <p>刊登物件</p>
                    </div>
                    <div class="z_step_title bold">step3.　選擇物件特色</div>
                    <div class="z_step_title z_display-n-phone">建議您盡可能填寫完整，以增加您房屋的曝光度！</div>
                    <div class="z_publish_text_container ">
                        <form action="publish_uploadcertificate.php" method="POST">
                        <div class="z_publish_option_title">
                            <div class="z_publish_item_detail_title">物件設備</div>
                            <p class="alert bold z_publish_small">（請至少填寫一項）</p>
                        </div>
                        <div class="z_publish_check_container_s equipment">
                            <label>
                                <div class="z_publish_checkbox_option_container ">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="飲水機">
                                    <span>飲水機</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="浴缸">
                                    <span>浴缸</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="電視">
                                    <span>電視</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="網路">
                                    <span>網路</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="床鋪">
                                    <span>床鋪</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_opti999999999on_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="桌椅">
                                    <span>桌椅</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="熱水器">
                                    <span>熱水器</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="冷氣">
                                    <span>冷氣</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="第四台">
                                    <span>第四台</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="衣櫃">
                                    <span>衣櫃</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="冰箱">
                                    <span>冰箱</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="瓦斯">
                                    <span>瓦斯</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="洗衣機">
                                    <span>洗衣機</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="equipment_detail[]" id="" value="沙發">
                                    <span>沙發</span>
                                </div>
                            </label>
                        </div>
                        <div class="z_publish_option_title">
                            <div class="z_publish_item_detail_title">物件安全設備</div>
                            <p class="alert bold z_publish_small">（請至少填寫一項）</p>
                        </div>
                        <div class="z_publish_check_container safety">
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="safety_equipment[]" id="" value="滅火器">
                                    <span>滅火器</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="safety_equipment[]" id="" value="自動灑水器">
                                    <span>自動灑水器</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="safety_equipment[]" id="" value="煙霧警報">
                                    <span>煙霧警報</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="safety_equipment[]" id="" value="安全門窗">
                                    <span>安全門窗</span>
                                </div>
                            </label>
                        </div>
                        <div class="z_publish_option_title">
                            <div class="z_publish_item_detail_title">物件特色</div>
                            <p class="alert bold z_publish_small">（非必填）</p>
                        </div>
                        <div class="z_publish_check_container feature">
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="feature[]" id="" value="可開伙">
                                    <span>可開伙</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="feature[]" id="" value="限女性">
                                    <span>限女性</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="feature[]" id="" value="可養寵物">
                                    <span>可養寵物</span>
                                </div>
                            </label>
                        </div>
                        <div class="z_publish_option_title">
                            <div class="z_publish_item_detail_title">周遭機能</div>
                            <p class="alert bold z_publish_small">（非必填）</p>
                        </div>
                        <div class="z_publish_check_container around">
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="百貨公司">
                                    <span>百貨公司</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="學校">
                                    <span>學校</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="市場">
                                    <span>市場</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="醫院">
                                    <span>醫院</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="超市">
                                    <span>超市</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="火車站">
                                    <span>火車站</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="高鐵站">
                                    <span>高鐵站</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="around[]" id="" value="捷運站">
                                    <span>捷運站</span>
                                </div>
                            </label>
                        </div>
                        <div class="z_publish_option_title">
                            <div class="z_publish_item_detail_title">物件公設</div>
                            <p class="alert bold z_publish_small">（非必填）</p>
                        </div>
                        <div class="z_publish_check_container postulate">
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="postulate[]" id="" value="電梯">
                                    <span>電梯</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="postulate[]" id="" value="客廳">
                                    <span>客廳</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="postulate[]" id="" value="陽台">
                                    <span>陽台</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="postulate[]" id="" value="廚房">
                                    <span>廚房</span>
                                </div>
                            </label>
                        </div>
                        <div class="z_publish_option_title">
                            <div class="z_publish_item_detail_title">物件其他費用</div>
                            <p class="alert bold z_publish_small">（非必填）</p>
                        </div>
                        <div class="z_publish_check_container other_cost">
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="other_cost[]" id="" value="水電費">
                                    <span>水電費</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="other_cost[]" id="" value="網路費">
                                    <span>網路費</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="other_cost[]" id="" value="第四台">
                                    <span>第四台</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="other_cost[]" id="" value="清潔費">
                                    <span>清潔費</span>
                                </div>
                            </label>
                            <label>
                                <div class="z_publish_checkbox_option_container">
                                    <input class="z_checkbox_option" type="checkbox" name="other_cost[]" id="" value="停車費">
                                    <span>停車費</span>
                                </div>
                            </label>
                        </div>
                        <div class="z_twobtn">                      
                            <a href="./publish_item_detail.php"><button type="button" class="pc-button-F4F4F4-180 z_publish_btnY z_phone_162">上一步</button></a>
                            <button class="pc-button-FEAC00-180 z_publish_btnY z_phone_162">下一步</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>

<?php include __DIR__ . './part/footer.php'  ?>

    <script>
        const data = <?=  empty($_SESSION) ? '[]' : json_encode($_SESSION, JSON_UNESCAPED_UNICODE) ?>;
        const group1 = $('.equipment input.z_checkbox_option');
        const group2 = $('.safety input.z_checkbox_option');
        const group3 = $('.feature input.z_checkbox_option');
        const group4 = $('.around input.z_checkbox_option');
        const group5 = $('.postulate input.z_checkbox_option');
        const group6 = $('.other_cost input.z_checkbox_option');


        group1.each(function(){
            const me = $(this);
            if(data.equipment_detail && data.equipment_detail.length){
                if(data.equipment_detail.includes(me.val())){
                    me.prop('checked', true);
                }
            }
        });
        group2.each(function(){
            const me = $(this);
            if(data.safety_equipment && data.safety_equipment.length){
                if(data.safety_equipment.includes(me.val())){
                    me.prop('checked', true);
                }
            }
        });
        group3.each(function(){
            const me = $(this);
            if(data.feature && data.feature.length){
                if(data.feature.includes(me.val())){
                    me.prop('checked', true);
                }
            }
        });
        group4.each(function(){
            const me = $(this);
            if(data.around && data.around.length){
                if(data.around.includes(me.val())){
                    me.prop('checked', true);
                }
            }
        });
        group5.each(function(){
            const me = $(this);
            if(data.postulate && data.postulate.length){
                if(data.postulate.includes(me.val())){
                    me.prop('checked', true);
                }
            }
        });
        group6.each(function(){
            const me = $(this);
            if(data.other_cost && data.other_cost.length){
                if(data.other_cost.includes(me.val())){
                    me.prop('checked', true);
                }
            }
        });

        

    // function itemFeature() {
    //     const item_area = $("#areaSelect").val()


    //     $.ajax({
    //         url:"publish_uploadimg-api.php",
    //         method: "post",
    //         data:{ 
    //             item_area:JSON.stringify(item_area),
    //             item_dist:JSON.stringify(item_dist),
    //             item_address:JSON.stringify(item_address),
    //             ping_number:JSON.stringify(ping_number),
    //             floor:JSON.stringify(floor),
    //             roomty:JSON.stringify(roomtype),
    //             room_count:JSON.stringify(room_count),
    //             item_name:JSON.stringify(item_name),
    //             contract:JSON.stringify(contract),
    //             contentType:'application/json;charset=UTF-8',
    //             success: function(){
    //                 console.log("成功")
    //                 console.log(data)
    //             }
    //         }
    //     })
    // }

    </script>

<?php include __DIR__ . './part/javascript.php'  ?>
