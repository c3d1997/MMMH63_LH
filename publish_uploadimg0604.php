<?php 
    // if(!empty(session_start()))
        // session_destroy();
    // session_start();
    
    require './part/connect-db.php';
    $sql = "SELECT COUNT(*) FROM `items`;";
    $stmt = $pdo->query($sql)->fetch();
    // echo $stmt['COUNT(*)'];
    $new_item = $stmt['COUNT(*)'] + 1;

    $_SESSION['item_c'] = $new_item;
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
            background: url(../imgs/unchecked.svg) no-repeat left top;
            user-select: none;
        }
        input[type=checkbox]:checked+span {
            display: inline-block;
            padding-left: 30px;
            /* line-height: 24px; */
            background-image: url(../imgs/checked.svg);
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
            position: relative;
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
        .uploadimg_before {
            position: absolute;
        }
        .uploadimg_before > *{
            margin-bottom: 10px;
            text-align: center;
        }
        #nowimg {
            width: 100%;
            height: 100%;
            object-fit: fill;
        }
        #mainUpload {
            display: none;
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
        .z_upload_item_img_btn > button {
            font-size: 16px;
            font-weight: bold;
            color: #75BBE3;
            background-color:transparent;
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
            justify-content: space-evenly;
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
            z-index: 5;
            top: 5px;
            right: 5px;
            width: 25px;
            height: 25px;
            background-color: rgba(255, 255, 255, 0);
            background-image: url(imgs/closeicon.svg);
            background-position: center;
        }
        .smallimg{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
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
        .bgimg {
            position:absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            background-image: url(imgs\uploadbg.jpg);
            z-index: 3;
        }
        #phone_upload_btn {
            display: none;
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
                margin-top: 0px;
                width: 950%;
                height: 100%;
                /* display: block; */
                flex-wrap: nowrap;
                justify-content:flex-start;
                /* align-content: space-between; */
            }
            .z_review_card {
                position: relative;
                width: 275px;
                height: 100%;
                background-color: #EEF1F4;
                outline: 3px solid #0E2E3D;
                margin-right: 40px;
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
                /* margin-left: 30px;  */
                /* width: 120%; */
                overflow:scroll;
                height: 300px;
                /* border: 3px solid #0E2E3D; */
                padding: 5px 0;
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
            #phone_upload_btn {
                display: block;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%);
                z-index: 5;
                color: #75BBE3;
                background-color: transparent;
                background: rgba(238, 241, 244, 0.486);
                padding: 5px;
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
                    <form action="publish_uploadimg-api_copy.php" method="post" enctype="multipart/form-data" name="form1"  onsubmit="return false;">
                        <div class="z_step_title bold">step1.　上傳房屋圖片</div>
                        <div class="z_img_reviewcontainer bold">
                            <div class="uploadimg_before">
                                <!-- <p>您可以拖拉圖片至此處</p> -->
                                <div class="z_upload_item_img_btn">
                                    <input type="file" accept="image/*" id="mainUpload" name="mainUpload[]" multiple >
                                    <button id="upload_btn" type="button"><img src="imgs/uploadicon.svg" alt="">點此上傳</button>
                                </div>
                                <p>提醒您！最多可以上傳10張照片，並且每張照片解析度請至少達到1280*920px</p>
                            </div>
                            <img  alt="" id="nowimg">
                        </div>
                        <div class="z_phone_view">
                            <div class="z_step1imgs_container">
<<<<<<< HEAD
                            <button id="phone_upload_btn" type="button"><img src="imgs/uploadicon.svg" alt="">點此上傳</button>
=======
                            <button id="phone_upload_btn" type="button" onclick="phoneClick()"><img src="imgs/uploadicon.svg" alt="">點此上傳</button>
>>>>>>> df8831ea280c9f6f4cc1f7711ee34969ff6bf258
                        </div>
                    </form>
                </div>
                <a href="publish_item_detail.php"><button class="pc-button-FEAC00-180 z_publish_btnY z_maxbtn" id="nextStep">下一步</button></a>
            </div>
        </div>
    </section>

<?php include __DIR__ . './part/footer.php'  ?>
        <script>
        const img_arr = new Array()
        $("#upload_btn").click(function(){
            $("#mainUpload").click()
        })
<<<<<<< HEAD
        $("#phone_upload_btn").click(function(){
            $("#mainUpload").click()
        })
=======
        // $("#phone_upload_btn").click(function(){
        //     $("#mainUpload").click()
        // })
        function phoneClick() {
            $("#mainUpload").click()
        }
>>>>>>> df8831ea280c9f6f4cc1f7711ee34969ff6bf258

        $("#mainUpload").change(function(){
            readURL(this);
            $(".uploadimg_before").css("background","#eef1f47c")
        });

        let i = 0
        function readURL(input){
            var reader = new FileReader();
            reader.onload = function (e) {
                let img_url = e.target.result
                $("#nowimg").attr('src', img_url);
            }
            reader.readAsDataURL(input.files[0]);
        }

        $(document).on("click",".z_close_icon",function(){
            $(this).parent().remove();
        });
        const btn = document.querySelector("#btn");
        const appendImg = document.querySelector(".z_step1imgs_container");
        const photos = document.form1.elements[0];
        <?php ?>
        const photoItem = (f) => {
            return `
            <div class="z_review_card"><button class="z_close_icon"></button><img class="smallimg" src="./imgs/items<?= $new_item ?>/${f}" alt=""  ><img  alt=""  class="bgimg"></div>`;

            };

        upLoad = document.querySelector("#mainUpload")
        upLoad.addEventListener("change", async function () {
            // 上傳表單
            const fd = new FormData(document.form1);
            const r = await fetch("upload-photos-api0604.php", {
                method: "POST",
                body: fd,
            });
            const obj = await r.json();
            console.log(obj);
            if (obj.filenames && obj.filenames.length) {
                appendImg.innerHTML += obj.filenames
                    .map((f) => photoItem(f))
                    .join("");
            }
            const photoAr = [];
            document.querySelectorAll(".photoItem").forEach((el) => {
                photoAr.push(el.getAttribute("data-f"));
            });
        });
        $("#nextStep").on("click",function(){
            console.log($(".smallimg"));
        })

        </script>

<?php include __DIR__ . './part/javascript.php'  ?>
