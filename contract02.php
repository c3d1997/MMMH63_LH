<?php
    require './part/connect-db.php';
?>
<?php include __DIR__ . './part/head.php'  ?>
<style>
    .c_container_stepbar {
        width: 100%;
        max-width: 1280px;
        margin: 160px auto 0px;
        padding: 0px 25px;
        /* background-color: blue; */
    }


    ul {
        list-style-type: none;
    }

    .z_radio_finish {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #FEAC00;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 40px;
    }

    .z_radio {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #b1b1b1;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 40px;
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
        background-color: #b1b1b1;
        bottom: 11px;
    }

    .z_progress_bar_step1 {
        z-index: -1;
        position: absolute;
        width: 10%;
        height: 1px;
        background-color: #ffae00;
        bottom: 11px;
    }

    .z_progress_bar_step2 {
        z-index: -1;
        position: absolute;
        width: 30%;
        height: 1px;
        background-color: #ffae00;
        bottom: 11px;
    }

    .z_progress_bar_step3 {
        z-index: -1;
        position: absolute;
        width: 52%;
        height: 1px;
        background-color: #ffae00;
        bottom: 11px;
    }

    .z_progress_bar_step4 {
        z-index: -1;
        position: absolute;
        width: 70%;
        height: 1px;
        background-color: #ffae00;
        bottom: 11px;
    }

    .z_progress_bar_step5 {
        z-index: -1;
        position: absolute;
        width: 100%;
        height: 1px;
        background-color: #ffae00;
        bottom: 11px;
    }

    .z_barcontainer {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    /*---------step-bar2 --------*/

    .step-bar2 {
        width: 100%;
        max-width: 1280px;
        margin: auto;
        padding: 25px 25px;
    }


    .step-bar2 p {
        width: 100%;
        font-weight: normal;
        font-size: 32px;
        color: #0E2E3D;
        font-weight: bold;
    }

    .progress2 {
        width: 100%;
        margin-top: 30px;
        height: 2px;
        background-color: #E0F1F3;
    }

    .progress-bar2 {
        width: 33.32%;
        height: 2px;
        background-color: #f2ae00;
    }

    /* --------section ready to upload imgs--------- */
    .c_container_upload {
        width: 100%;
        max-width: 1280px;
        margin: auto;
        padding: 25px 25px;
        display: flex;
        position: relative;
    }

    .c_upload_row {
        width: 60%;
        display: flex;
    }

    .c_idcard_wrap {
        width: 328px;
        height: 218px;
        border: 1px solid #0E2E3D;
        /* padding: 80px 50px; */
        display: flex;
    }



    .c_back_box {
        margin-left: 20px;

    }

    .c_upload_row_sample {
        width: 40%;
    }

    .c_sample_block {
        width: 506px;
        height: 486px;
        padding: 20px;
        justify-content: center;
        background-color: #F1EDEA;

    }

    .c_sample_wrap {
        margin: 30px 50px;
    }

    .c_sample_wrap1 {
        margin-left: 50px;
    }

    .c_sample_wrap2 {
        margin: 50px 50px;
        margin-top: 20px;
    }

    .c_sample_idcard {
        width: 215px;
        height: 143px;
        border: 1px solid #0E2E3D;

    }

    .c_sample_idcard img {
        width: 100%;
    }


    /* 點此上傳---------- */
    .c_upload_sign {
        width: 100%;
        padding: 0px 0px;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: baseline;
        z-index: 5;

    }

    .c_upload_heretext {
        margin-left: 10px;
        color: #75BBE3;

    }

    a {
        text-decoration: none;
        color: #75BBE3;
        font-family: 'Noto Sans TC', sans-serif;
    }

    /* --------- */

    .pc-button-FEAC00-180 {
        width: 180px;
        height: 60px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 24px;
        border: none;
        background-color: #FEAC00;
    }

    .pc-button-F4F4F4-180 {
        width: 180px;
        height: 60px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 24px;
        border: none;
        background-color: #F1EDEA;
    }

    .c_button_section {
        display: flex;
        justify-content: center;
        margin: 30px 0 50px 0;
        flex-direction: row-reverse;

    }

    .c_button_right {
        margin-left: 30px;
    }

    .footer_container {
        margin-top: 60px;
    }

    #pid_on,
    #pid_in,
    #hid_on,
    #hid_in {
        cursor: pointer;
    }

    .c_idcard_wrap input {
        display: none;
    }

    .con {
        position: relative;
    }

    .wrap_1,
    .wrap_2,
    .wrap_3,
    .wrap_4 {
        /* width: 100%; */
        position: relative;
    }

    .wrap_1 img,
    .wrap_2 img,
    .wrap_3 img,
    .wrap_4 img {
        width: 100%;
        height: 100%;
        position: absolute;
        /* height: 100%; */
        object-fit: cover;
        z-index: -1;
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
        z-index: 5;
    }


    @media screen and (max-width:376px) {
        .c_sample_block {
            display: none;
        }

        .c_upload_row {
            flex-direction: column;
        }

        .c_back_box {
            margin-left: 0px;
        }

        .c_button_right {
            margin-left: 0px;
        }

        .z_progress {
            display: none;
        }

        .progress2 {
            display: none;
        }

        .c_container_stepbar {
            margin-top: 110px;
        }

        .c_step-bar2 p {
            text-align: center;
        }

        .pc-button-FEAC00-180 {
            width: 162.5px;
            height: 45px;
            font-size: 20px;
        }

        .pc-button-F4F4F4-180 {
            width: 162.5px;
            height: 45px;
            font-size: 20px;
        }

        .c_button_section {
            flex-direction: row;
            justify-content: space-between;
        }

        .step-bar2 {
            text-align: center;
        }

    }
</style>
<?php include __DIR__ . './part/nav.php'  ?>
<section>
    <div class="c_container_stepbar">

        <div class="z_progress z_margin-center ">
            <div class="z_progress_text">
                <ul class="z_barcontainer">
                    <li>
                        <h3>選擇租屋</h3>
                        <div class="z_radio_finish"></div>
                    </li>
                    <li>
                        <h3>確定租屋資訊</h3>
                        <div class="z_radio_finish"></div>
                    </li>
                    <li>
                        <h3>線上合約</h3>
                        <div class="z_radio_finish"></div>
                    </li>
                    <li>
                        <h3>確認付款</h3>
                        <div class="z_radio"></div>
                    </li>
                    <li>
                        <h3>租屋完成</h3>
                        <div class="z_radio"></div>
                    </li>
                </ul>
            </div>
            <div class="z_progress_bar"></div>
            <div class="z_progress_bar_step1"></div>
            <div class="z_progress_bar_step2"></div>
            <div class="z_progress_bar_step3"></div>
        </div>
    </div>
</section>


<!-------------------------step-bar2 ---------------->

<div class="step-bar2">
    <p>Step2. 附件上傳</p>
    <div class="progress2">
        <div class="progress-bar2"></div>
    </div>
</div>


<!---------------section ready to upload imgs---------------->
<section>
    <div class="c_container_upload">
        <div class="c_upload_row">
            <div class="c_front_box">
                <div class="c_text_wrap1">
                    <p>身分證/護照(正面)</p>
                </div>
                <div class="c_idcard_wrap wrap_1">
                    <button class="z_close_icon" type="button"></button>
                    <img src="imgs\uploadbg.jpg" alt="" class="">
                    <img alt="" class="nowimg" id="">
                    <input type="file" name="" id="pid_on_true" accept="image/*">
                    <div class="c_upload_sign" id="pid_on">
                        <div class="c_upload_icon">
                            <a href=""> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7143 10.9999V13C13.7143 13.5522 13.2025 14 12.5714 14H3.42857C2.7975 14 2.28571 13.5522 2.28571 13V10.9999C2.28571 10.4477 1.77393 9.99992 1.14286 9.99992C0.511786 9.99992 0 10.4477 0 10.9999V13C0 14.6569 1.535 16 3.42857 16H12.5714C14.465 16 16 14.6569 16 13V10.9999C16 10.4477 15.4882 9.99992 14.8571 9.99992C14.2261 9.99992 13.7143 10.4468 13.7143 10.9999ZM7.19286 0.292758L2.62143 4.29281C2.17464 4.68375 2.17536 5.31658 2.62143 5.70689C3.06786 6.09752 3.79107 6.09752 4.2375 5.70689L6.85714 3.41546V9.99992C6.85714 10.5527 7.36821 10.9999 8 10.9999C8.63179 10.9999 9.14286 10.5527 9.14286 9.99992V3.41546L11.7636 5.70861C12.21 6.09924 12.9332 6.09924 13.3796 5.70861C13.8261 5.31798 13.8261 4.68516 13.3796 4.29453L8.80821 0.294477C8.36071 -0.0978721 7.63929 -0.0978721 7.19286 0.292758Z" fill="#75BBE3" />
                                </svg></a>
                        </div>

                        <div class="c_upload_heretext">
                            <a>點此上傳</a>
                        </div>
                    </div>
                </div>
                <div class="c_text_wrap1">
                    <p>身分證/護照(反面)</p>
                </div>
                <div class="c_idcard_wrap wrap_2">
                    <button class="z_close_icon" type="button"></button>
                    <img src="imgs\uploadbg.jpg" alt="" class="">
                    <img alt="" class="nowimg" id="">
                    <input type="file" name="" id="pid_in_true" accept="image/*">
                    <div class="c_upload_sign" id="pid_in">
                        <div class="c_upload_icon">
                            <a href=""> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7143 10.9999V13C13.7143 13.5522 13.2025 14 12.5714 14H3.42857C2.7975 14 2.28571 13.5522 2.28571 13V10.9999C2.28571 10.4477 1.77393 9.99992 1.14286 9.99992C0.511786 9.99992 0 10.4477 0 10.9999V13C0 14.6569 1.535 16 3.42857 16H12.5714C14.465 16 16 14.6569 16 13V10.9999C16 10.4477 15.4882 9.99992 14.8571 9.99992C14.2261 9.99992 13.7143 10.4468 13.7143 10.9999ZM7.19286 0.292758L2.62143 4.29281C2.17464 4.68375 2.17536 5.31658 2.62143 5.70689C3.06786 6.09752 3.79107 6.09752 4.2375 5.70689L6.85714 3.41546V9.99992C6.85714 10.5527 7.36821 10.9999 8 10.9999C8.63179 10.9999 9.14286 10.5527 9.14286 9.99992V3.41546L11.7636 5.70861C12.21 6.09924 12.9332 6.09924 13.3796 5.70861C13.8261 5.31798 13.8261 4.68516 13.3796 4.29453L8.80821 0.294477C8.36071 -0.0978721 7.63929 -0.0978721 7.19286 0.292758Z" fill="#75BBE3" />
                                </svg></a>
                        </div>

                        <div class="c_upload_heretext">

                            <a>點此上傳</a>
                        </div>
                    </div>
                </div>



            </div>
            <div class="c_back_box">
                <div class="c_text_wrap">
                    <p>健保卡(正面)</p>
                </div>
                <div class="c_idcard_wrap wrap_3">
                    <button class="z_close_icon" type="button"></button>
                    <img src="imgs\uploadbg.jpg" alt="" class="">
                    <img alt="" class="nowimg" id="">
                    <input type="file" name="" id="hid_on_true" accept="image/*">
                    <div class="c_upload_sign" id="hid_on">
                        <div class="c_upload_icon">
                            <a href=""> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7143 10.9999V13C13.7143 13.5522 13.2025 14 12.5714 14H3.42857C2.7975 14 2.28571 13.5522 2.28571 13V10.9999C2.28571 10.4477 1.77393 9.99992 1.14286 9.99992C0.511786 9.99992 0 10.4477 0 10.9999V13C0 14.6569 1.535 16 3.42857 16H12.5714C14.465 16 16 14.6569 16 13V10.9999C16 10.4477 15.4882 9.99992 14.8571 9.99992C14.2261 9.99992 13.7143 10.4468 13.7143 10.9999ZM7.19286 0.292758L2.62143 4.29281C2.17464 4.68375 2.17536 5.31658 2.62143 5.70689C3.06786 6.09752 3.79107 6.09752 4.2375 5.70689L6.85714 3.41546V9.99992C6.85714 10.5527 7.36821 10.9999 8 10.9999C8.63179 10.9999 9.14286 10.5527 9.14286 9.99992V3.41546L11.7636 5.70861C12.21 6.09924 12.9332 6.09924 13.3796 5.70861C13.8261 5.31798 13.8261 4.68516 13.3796 4.29453L8.80821 0.294477C8.36071 -0.0978721 7.63929 -0.0978721 7.19286 0.292758Z" fill="#75BBE3" />
                                </svg></a>
                        </div>

                        <div class="c_upload_heretext">

                            <a>點此上傳</a>
                        </div>
                    </div>
                </div>



                <div class="c_text_wrap">
                    <p>健保卡(反面)</p>
                </div>
                <div class="c_idcard_wrap wrap_4">
                    <button class="z_close_icon" type="button"></button>
                    <img src="imgs\uploadbg.jpg" alt="" class="">
                    <img alt="" class="nowimg" id="">
                    <input type="file" name="" id="hid_in_true" accept="image/*">
                    <div class="c_upload_sign" id='hid_in'>
                        <div class="c_upload_icon">
                            <a href=""> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7143 10.9999V13C13.7143 13.5522 13.2025 14 12.5714 14H3.42857C2.7975 14 2.28571 13.5522 2.28571 13V10.9999C2.28571 10.4477 1.77393 9.99992 1.14286 9.99992C0.511786 9.99992 0 10.4477 0 10.9999V13C0 14.6569 1.535 16 3.42857 16H12.5714C14.465 16 16 14.6569 16 13V10.9999C16 10.4477 15.4882 9.99992 14.8571 9.99992C14.2261 9.99992 13.7143 10.4468 13.7143 10.9999ZM7.19286 0.292758L2.62143 4.29281C2.17464 4.68375 2.17536 5.31658 2.62143 5.70689C3.06786 6.09752 3.79107 6.09752 4.2375 5.70689L6.85714 3.41546V9.99992C6.85714 10.5527 7.36821 10.9999 8 10.9999C8.63179 10.9999 9.14286 10.5527 9.14286 9.99992V3.41546L11.7636 5.70861C12.21 6.09924 12.9332 6.09924 13.3796 5.70861C13.8261 5.31798 13.8261 4.68516 13.3796 4.29453L8.80821 0.294477C8.36071 -0.0978721 7.63929 -0.0978721 7.19286 0.292758Z" fill="#75BBE3" />
                                </svg></a>
                        </div>

                        <div class="c_upload_heretext">

                            <a>點此上傳</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--------- sample-photo -->

        <div class="c_upload_row_sample">
            <div class="c_sample_block">

                <div class="c_sample_box">
                    <div class="c_sample_text_wrap">
                        <p>範例說明：<br>
                            租賃契約需要您提供身份資訊(身分證)以確保契約對象。
                            請在您簽署契約前，將以下資訊填寫完成，讓契約對雙方更有保障。 </p>
                    </div>
                </div>

                <div class="c_sample_wrap">
                    <div class="c_sample_wrap1">
                        <div class="c_sample_idcard">
                            <img src="./imgs/ROC_mibunsho.jpg" alt="">
                        </div>
                    </div>
                    <div class="c_sample_wrap2">
                        <div class="c_sample_idcard">
                            <img src="./imgs/ROC_mibunsho_ura.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------------------button------------------------->
<div class="container">
    <div class="c_button_section">
        <div class="c_button_right">
            <a href="contract03.php" style="text-decoration: none; color:#0E2E3D;"><button class="pc-button-FEAC00-180" >送出</button></a>

        </div>
        <div class="c_button_left">
            <button class="pc-button-F4F4F4-180">清除資料</button>
        </div>
    </div>
</div>
<?php include __DIR__ . './part/footer.php'  ?>

<script>
    $(".c_upload_sign").click(function() {
        console.log("hi");
        $(this).prev().click()
    })
    $("#pid_on_true").change(function() {
        $(this).prev().css("z-index", "2")
        readURL1(this);
    });

    function readURL1(input) {
        //   if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e) {
            $(".wrap_1 .nowimg").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
    $("#pid_in_true").change(function() {
        $(this).prev().css("z-index", "2")
        readURL2(this);
    });

    function readURL2(input) {
        //   if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e) {
            $(".wrap_2 .nowimg").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
    $("#hid_on_true").change(function() {
        $(this).prev().css("z-index", "2")
        readURL3(this);
    });

    function readURL3(input) {
        //   if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e) {
            $(".wrap_3 .nowimg").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
    $("#hid_in_true").change(function() {
        $(this).prev().css("z-index", "2")
        readURL4(this);
    });

    function readURL4(input) {
        //   if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e) {
            $(".wrap_4 .nowimg").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
    $(".z_close_icon").click(function() {
        $(this).next().css("z-index", "2")
        console.log($(this).next());
        $(this).next().next().removeAttr("src")
        console.log($(this).next().next())
        $(this).next().next().css("z-index", "-1")
    })

    
</script>
<?php include __DIR__ . './part/javascript.php'  ?>