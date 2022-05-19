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
            padding: 0 65px;
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
        .z_select_dropdown_container{
            /* flex-grow: 1; */
            width: 100%;
            position: relative;
            display: flex;
        }
        .z_select_dropdown_half_container{
            /* flex-grow: 1; */
            width: 49%;
            position: relative;
            display: flex;
        }
        .z_select_dropdown_container select, .z_select_dropdown_half_container select{
            color: #0E2E3D;
            height: 60px;
            border: none;
            outline: none;
            appearance:none;
            width: 100%;
            font-size: 16px;
            padding-left: 15px;
        }
        .z_select_dropdown_container select option, .z_select_dropdown_half_container select option {
            font-size: 16px;

        }
        .z_select_dropdown_container .arrow_container {
            top:55%;
            transform: translateY(-50%);
            right: 2%;
            position: absolute;
            pointer-events: none;
        }
        .z_select_dropdown_half_container .arrow_container {
            top:55%;
            transform: translateY(-50%);
            right: 5%;
            position: absolute;
            pointer-events: none;
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
            .z_select_dropdown_half_container {
                width: 100%;
            }
            .z_select_dropdown_container .arrow_container {
                right: 5%;
            }
        }
    </style>

<?php include __DIR__ . './part/nav.php'  ?>

    <section>
        <div class="z_container">
            <div class="z_row">
                <div class="z_publish_container">
                    <div class="z_publish_phone_title">
                        <img src="../imgs/backcolor.svg" alt="">
                        <p>刊登物件</p>
                    </div>
                    <div class="z_step_title bold">step2.　房屋詳細資料</div>
                    <div class="z_publish_text_container">
                        <div class="z_input_row">
                            <div class="z_publish_input_twooption">
                                <p class="option_name">　　地址</p>
                                <div class="z_two_input">
                                    <div class="z_select_dropdown_half_container">
                                        <select id="areaSelect" name=”areaSelect” class="z_select_dropdown">
                                            <option value=””>請選擇縣市</option>
                                            <option value=””>台北市</option>
                                            <option value=””>新北市</option>
                                            <option value=””>基隆市</option>
                                        </select>
                                        <div class="arrow_container">
                                            <img src="imgs/down-arrow.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="input_alert z_input_alert z_display-b-phone z_display-n-pc" >
                                        <p class="alert" >！　請選擇縣市</p>
                                     </div>
                                    <div class="z_select_dropdown_half_container">
                                        <select id="distSelect" name=”distSelect” class="z_select_dropdown">
                                            <option value=””>請選擇行政區</option>
                                            <option value=””>大安區</option>
                                            <option value=””>信義區</option>
                                            <option value=””>松山區</option>
                                        </select>
                                        <div class="arrow_container">
                                            <img src="imgs/down-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　請選擇縣市與行政區</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name z_display-n-phone z_display-b-pc">　　　　</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="詳細地址">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">　　坪數</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="輸入坪數">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">　　樓層</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="輸入樓層">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">　　房型</p>
                                <div class="fullinput_container z_fullinput_container">
                                    <div class="z_select_dropdown_container">
                                        <select id="distSelect" name=”distSelect” class="z_select_dropdown">
                                            <option value=””>請選擇房型</option>
                                            <option value=””>共生</option>
                                            <option value=””>分租</option>
                                        </select>
                                        <div class="arrow_container">
                                            <img src="imgs/down-arrow.svg" alt="">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　請選擇房間類型</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">房間數量</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="輸入房間數量">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">物件名稱</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="輸入出租名稱">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">　　價格</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="輸入想收取的租金">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">託管時間</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="選擇想交由本公司代理出租的時間">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                            <div class="input_option">
                                <p class="option_name">出租時間</p>
                                <div class="fullinput_container z_fullinput_container">
                                        <input type="text" name="" id="" placeholder="欲讓房客使用時間">                        
                                </div>
                            </div>
                            <div class="input_alert z_input_alert">
                                <p class="alert">！　您的資料格式錯誤（不能為空）</p>
                             </div>
                        </div>
                        
                    </div>
                    <div class="z_twobtn">                      
                        <button class="pc-button-F4F4F4-180 z_publish_btnY z_phone_162">上一步</button>
                        <button class="pc-button-FEAC00-180 z_publish_btnY z_phone_162">下一步</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . './part/footer.php'  ?>

    <script>
        $(".z_select_dropdown").click(function(){
            $(this).next().find("img").toggleClass("downArrow")
        })

    </script>

<?php include __DIR__ . './part/javascript.php'  ?>