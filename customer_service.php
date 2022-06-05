<?php 

require './part/connect-db.php';

?>
<?php include __DIR__ . './part/head.php'  ?>

<style>
    /* 自己頁面的css */
    .S-customer_service-bg {
        z-index: 0;
        /* padding: 0 -50px; */
        /* margin: 0 -200px; */
        height: 1080px;
        width: 100%;
        background: url(imgs/living-room-1835923_1920.jpg)center center /cover no-repeat;
        /* background-color: black; */
        /* filter: brightness(.5); */
    }

    .S-wrap {
        margin-top: 100px;
        width: 100%;
        height: 1080px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .S-info {
        z-index: 1;
        color: #fff;
        width: 602px;
        height: 980px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-right: 38px;
    }

    .S-q {
        color: #fff;
        display: flex;
        padding: 60px 0;
    }

    .S-q img {
        margin-right: 20px;
    }

    .S-q1 img {
        margin-right: 40px;
    }

    .S-q-word h3,
    .S-q-word p {
        color: #fff;
        padding: 3px 0 0;
    }

    .S-list {
        padding: 40px 70px;
        width: 590px;
        height: 816px;
        background: #F1EDEA;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .S-list-title {
        /* padding: 30px 0 15px; */
        margin-bottom: 15px;
        height: 5%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .S-list img {
        width: 30px;
        margin-right: 10px;
        margin-top: 5px;
    }

    .CustomerService-x img {
        width: 50px;
        height: 50px;
        margin: 0;
    }

    .dropdown_container {
        padding: 15px 0;
    }

    .input_option.S-big input {
        width: 100%;
        height: 300px;
        /* line-height: 2rem; */
    }

    .input_option.S-big textarea {
        width: 100%;
        /* outline: none; */
        /* border: #75BBE3 1px solid; */
        font-size: 16px;
        /* line-height: 2rem; */
    }

    textarea[type=text] {
        margin: 0;
        padding: 0;
        height: 100px;
        border: none;
        outline: none;
        font-size: 16px;
    }


    .fullinput_container {
        margin-bottom: 15px;
    }


    .fullinput_container textarea[placeholder],
    .input_container textarea[placeholder] {
        font-size: 16px;
        padding: 20px;
        border: none;
    }

    textarea {
        outline: none;
    }

    .alert {
        text-align: left;
    }
    .z_upload_item_img_btn{
        display: flex;
        align-items: center;
        justify-content: end;

    }
    .z_upload_item_img_btn label{
        display: flex;
        align-items: center;
        cursor: pointer;
        
    }
    .z_upload_item_img_btn label img{
        width: 18px;
        margin-bottom: 4px;
        margin-right: 2px;
        
    }
    .z_upload_item_img_btn button {
        background: transparent;
    }

    .z_upload_item_img_btn img {
        width: 16px;
    }

    .z_upload_item_img_btn>button {
        font-size: 16px;
        font-weight: bold;
        color: #75BBE3;
    }

    .S-btn {
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }

    .pc-button-F4F4F4-272 {
        margin-right: 15px;
    }

    button.pc-button-FEAC00-272 {
        /* font-size: 16px; */
        /* width: 162.5px; */
        font-weight: 700;
    }

    .z_select_dropdown_container {
        flex-grow: 1;
        position: relative;
        display: flex;
        margin-bottom: 15px;
    }

    .bank_area select {
        color: rgb(118, 118, 118);
        height: 60px;
        border: none;
        outline: none;
        appearance: none;
        width: 100%;
        font-size: 16px;
        padding-left: 15px;
    }

    .bank_area select option {
        font-size: 16px;

    }

    .banklist p {
        margin-bottom: 10px
    }

    .z_select_dropdown_container .arrow_container {
        top: 50%;
        transform: translateY(-50%);
        right: 15px;
        position: absolute;
        pointer-events: none;
    }

    /* -----------------壓CSS---------------------------------- */
    .S-list {
        position: relative;
    }

    #infoModal {
        transform: translate(-50%, -50%);
        position: fixed;
        left: 50%;
        top: 50%;
    }

    .CustomerService h3 {
        font-weight: normal;
    }

    .mobile-button-F4F4F4-162 {
        background-color: #F4f4f4;
    }

    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

    @media screen and (max-width:376px) {




        .S-customer_service-bg {
            position: relative;
            top: 0px;
            height: 800px;
            width: 100%;
            background: #F4F4F4;
            background: url(imgs/living-room-1835923_1920.jpg)center center /cover no-repeat;
        }

        .S-wrap {
            margin-top: 0px;
            flex-direction: column;
        }

        .S-info {
            width: 100%;
            margin-top: 550px;
            /* background: url(imgs/living-room-1835923_1920.jpg)center center /cover no-repeat; */
            padding: 70px 40px;
        }

        .S-q {
            flex-direction: column;
            align-items: center;
            padding: 30px 0;
        }

        .S-q img {
            width: 50px;
            margin: 0;
        }

        .S-q1 img {
            margin: 0;
        }

        .S-q-word {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            text-align: center;
            margin-top: 10px;
        }

        .S-q-word h3 {
            font-size: 20px;
        }

        .S-q-word p {
            font-size: 16px;
        }

        .S-list {
            margin-top: 40px;
            padding: 40px 20px;
            width: 100%;
            height: 816px;
            background: #F4F4F4;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .S-list-title {
            font-size: 24px;
            /* padding: 30px 0 15px; */
            margin-bottom: 15px;
            height: 5%;
            display: flex;
            justify-content: center;
        }

        .input_option.S-big input {
            font-size: 12px;
        }

        .S-list img {
            width: 30px;
            margin-right: 10px;
        }

        .mobile-button-F4F4F4-162 {
            margin-right: 5px;
            font-size: 20px;
            background-color: #F1EDEA;
        }

        .S-list.button.pc-button-FEAC00-272 {
            /* margin: 0; */
            /* height: 60px; */
            border: 5px solid purple;
        }

        .button.pc-button-FEAC00-272.h60 {
            height: 60px;
            border: 5px solid purple;
        }

        .input_option {
            padding: 15px 0;
        }

        .dropdown_container {
            padding: 15px 0;
        }

        .input_option.S-big input {
            width: 100%;
            height: 300px;
            /* line-height: 2rem; */
        }

        /* .input_option.S-big input::placeholder{
        transform: translateX(-.5rem);
        white-space: normal;
    } */
        .z_upload_item_img_btn {
            text-align: right;
        }

        .z_upload_item_img_btn button {
            background: transparent;
        }

        .z_upload_item_img_btn img {
            width: 16px;
        }

        .z_upload_item_img_btn>button {
            font-size: 16px;
            font-weight: bold;
            color: #75BBE3;
        }

        .S-btn {
            margin-top: 10px;
            display: flex;
        }

        .footer_container {
            margin-top: 860px;
        }


    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<!-- 自己頁面的html -->
<div class="S-customer_service-bg">
    <div class="filter"></div>
    <div class="container">
        <div class="row">
            <!-- 滿版背景 -->

            <div class="S-wrap">

                <div class="S-info">
                    <div class="S-q S-q1">

                        <img src="imgs/q1.svg" alt="">
                        <div class="S-q-word">
                            <h3>無法搜尋到任何物件？</h3>
                            <p>建議您可以降低搜尋條件，已增加搜尋數量！</p>
                        </div>
                    </div>
                    <div class="S-q S-q2"><img src="imgs/q2.svg" alt="">
                        <div class="S-q-word">
                            <h3>付款時出現問題？</h3>
                            <p>建議您可以再次確認資料輸入無誤，或是與銀行確認是否有相關金流發生問題！</p>
                        </div>
                    </div>
                    <div class="S-q S-q3"><img src="imgs/q3.svg" alt="">

                        <div class="S-q-word">
                            <h3>對契約有所疑問？</h3>
                            <p>建議您可以將有疑問的部分提供給予我們，我們將會盡快回答您的所有問題！</p>
                        </div>
                    </div>
                </div>



                <div class="S-list">

                    <h2 class="S-list-title"><img src="imgs/conect.svg" alt="">聯絡我們</h2>


                    <!-- 請輸入您的姓名 -->
                    <div class="input_option">
                        <div class="fullinput_container ">
                            <input type="text" name="" id="name" placeholder="請輸入您的姓名">

                        </div>
                    </div>
                    <!-- 請輸入您的郵件 -->
                    <div class="input_option">
                        <div class="fullinput_container ">
                            <input type="text" name="" id="email" placeholder="請輸入您的郵件">

                        </div>
                    </div>
                    <!-- 請選擇您遭遇的問題分類 -->
                    <!-- 下拉選單 -->
                    <div class="bank_area">
                        <div class="z_select_dropdown_container ">
                            <select id="bankSelect" name="bankSelect" class="z_select_dropdown">
                                <option selected disabled value="">請選擇欲詢問的問題分類</option>
                                <option value="">搜尋問題</option>
                                <option value="">付款問題</option>
                                <option value="">契約問題</option>
                                <option value="">其他問題</option>
                            </select>
                            <div class="arrow_container">
                                <img src="imgs/down-arrow.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- 請詳細描述您的問題或是上傳相關圖片，
                                我們將會盡快已郵件回覆您 -->
                    <div class="input_option S-big">
                        <div class="fullinput_container" id="nowimg">
                            <textarea name="question" id="clean" cols="30" rows="10" placeholder="請詳細描述您的問題或是上傳相關圖片，我們將會盡快已郵件回覆您"></textarea>
                            <!-- <div class="alert">*錯誤
                            </div> -->
                        </div>
                    </div>
                    <div class="z_upload_item_img_btn">
                        <label class="" id="" for="filename"><img src="imgs/envelope-solid.svg" alt="">使用郵件寄送</label>
                        <input type="file" id="filename" class="" name="" style="display: none;">
                    </div>

                    <div class="S-btn">
                        <button type="button" onclick="cleantext()" class="pc-button-F4F4F4-272 mobile-button-F4F4F4-162">清除資料</button>
                        <!-- 行內元素 height:60px -->
                        <a href="mailto:littlehouse6302@gmail.com?subject=我有問題&body=Little_House 您好：我想問租金事宜%0D%0A回信請再次確認信箱" style="text-decoration: none">
                            <button class="pc-button-FEAC00-272 

                            mobile-button-FEAC00-162 h-60" style="width: 162.5px; height:60px;font-size: 20px;" id="show">送出</button>
                        </a>

                    </div>
                    <!-- 以下是"客服送出成功"CustomerService -->
                    <!-- <dialog id="infoModal">
                        <div class="CustomerService-wrap">
                            <div class="CustomerService">
                                <div class="CustomerService-icon">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                                <h3>送出成功<br>
                                    將會盡快以郵件回覆您</h3>

                                    
                                <button class="pc-button-FEAC00-272 mobile-button-FEAC00-162" id="close">返回</button>

                            </div>
                            <div class="CustomerService-x" id="close2">
                                <img src="imgs/X.svg" alt="">
                            </div>
                        </div>
                    </dialog> -->
                    <!-- 以上是"客服送出成功"ReservationSuccess -->

                </div>


            </div>

        </div>

    </div>
</div>
</div>



<?php include __DIR__ . './part/footer.php'  ?>
<!-- // 自己頁面的script -->
<script>
    $("#bankSelect").click(function() {
        $(".arrow_container img").toggleClass("downArrow")
    })

    // 客服送出成功 彈出視窗
    let btn = document.querySelector("#show");
    let infoModal = document.querySelector("#infoModal");
    let close = document.querySelector("#close");
    let close2 = document.querySelector("#close2");
    btn.addEventListener("click", function() {
        infoModal.showModal();
    })
    close.addEventListener("click", function() {
        infoModal.close();
    })
    close2.addEventListener("click", function() {
        infoModal.close();
    })
</script>

<script>
    const cleantext = () => {
        $("#clean").val("");
        $("#bankSelect").val("");
        $("#email").val("");
        $("#name").val("");
    };
</script>


<?php include __DIR__ . './part/javascript.php'  ?>