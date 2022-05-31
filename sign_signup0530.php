<<<<<<< HEAD:sign_signup.php
<?php
// require './part/admin-required.php';
// require './part/connect-db.php';
$pageName = 'signin_signup';
?>

<?php include __DIR__ . './part/head.php'  ?>


<style>
    /* --------------------------------signin-card------------------------------------ */
    /* 卡片加大 card biger  */
    .card-wrap.card-biger {
        height: 450px;
    }

    .card-wrap.card-biger .input_option {
        margin: 0px 0;
    }



    /*  正常大小 */

    .card-wrap {
        position: relative;
        height: 345px;
        width: 502px;
        /* border: 1px solid red; */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #0E2E3D;
        box-shadow: 0px 6px 13px rgba(0, 0, 0, 0.18);
    }

    .card {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* text-align: center; */
        margin: auto;
    }

    .card-icon {
        font-size: 30px;
        text-align: center;
        margin: 10px 0;
    }

    .card h2 {
        text-align: center;
        font-weight: 900;
        margin-bottom: 10px;
    }


    /* XXXXXXXx */

    .card-x {
        width: 50px;
        height: 50px;
        background-color: #F1EDEA;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
        top: 5%;
        right: 5%;
        color: #0E2E3D;
    }

    .card-x i {
        font-size: 40px;
    }


    .input_option {
        margin: 20px 0;
        width: 70%;
        height: 100px;
    }



    .fullinput_container {
        height: 100%;
    }


    .card-wrap p {
        margin-bottom: 30px;
    }



    /* 電腦版短版按鈕 */

    button.pc-button-FEAC00-272 {
        height: 60px;
        width: 180px;
        font-size: 24px;
        font-weight: 900;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */


    /* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */


    /* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

    @media screen and (max-width: 376px) {



        .card-wrap {
            position: relative;
            height: 378px;
            width: 375px;
            /* border: 1px solid red; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #0E2E3D;
            box-shadow: 0px 6px 13px rgba(0, 0, 0, 0.18);
            padding: 20px 0 10px;
        }




        /* XXXXXXXx */

        .card-x {
            margin: 10px;
            width: 30px;
            height: 30px;

        }

        .card-x i {
            font-size: 40px;
        }


        /* 電腦版短版按鈕 */

        button.pc-button-FEAC00-272 {
            height: 60px;
            width: 70%;
            font-size: 24px;
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }












    .box_checked {}

    /* ------------------------------------- */
    /* 註冊區的alert */
    .alert {
        /* margin-left: 80px; */
        color: red;
    }

    /* 登入區域的alert */
    .signinForm .alert {
        margin-left: 50px;
        color: red;
    }

    /* ------------------------------------- */

    /* 自己頁面的css */
    .white {
        z-index: 0;
        position: absolute;
        /* top: 300px; */
        width: 100%;
        height: 100%;
        background-color: #fff;
        /* background: url(imgs/cut-patrick-perkins-3wylDrjxH-E-unsplash\ 3.jpg) center center/cover no-repeat; */
        opacity: .6;
    }

    .container-wrap {
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        transition: .5s;
        background: url(imgs/cut-patrick-perkins-3wylDrjxH-E-unsplash\ 3.jpg) center center/cover no-repeat;

    }

    /* .backdrop-blur{
    backdrop-filter: blur(5px);
} */

    .container1 {
        z-index: 1;
        position: relative;
        width: 1080px;
        height: 850px;
        margin-top: 180px;
        /* background-color: #fa0f; */

    }

    /* 藍色方框 */
    /* left:0 左 */
    /* left:50% 右 */
    .InfoBx {
        position: absolute;
        z-index: 8888;
        top: 0;
        left: 0%;
        width: 50%;
        height: 90%;
        background: #5D8DC1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .InfoBx h2 {
        color: #fff;
        padding: 10px 0;

    }

    .S-info-wrap {
        width: 100%;
        margin-top: 30px;
    }

    .InfoBx img {
        width: 50px;
        margin-right: 30px;
    }

    .S-info3 img {
        width: 40px;
    }

    .InfoBx .S-info {
        color: #fff;
        z-index: 1;
        color: #fff;
        display: flex;
        justify-content: center;
        padding: 20px 0;
        margin-left: 30px;
    }

    .S-info-word {
        color: #fff;
        width: 50%;
    }

    .S-info-word h3,
    .S-info-word p {
        color: #fff;
    }

    .blueBg {
        background: pink;
        position: absolute;
        top: 0;
        width: 100%;
        height: 764px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #F4F4F4;
        box-shadow: 0 5px 45px rgba(0, 0, 0, 0.15);
        /* padding: 60px 128px; */
    }

    .blueBg .box {
        /* background: rgb(252, 252, 146); */
        position: relative;
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        /* flex-direction: column; */
    }

    .signupBtn,
    .signinBtn {
        /* font-weight: 900;  */
        cursor: pointer;
        font-size: 32px;
        /* color: #0E2E3D; */
        color: rgba(0, 0, 0, 0.2);
        border: transparent;
        background: transparent;
        padding: 40px 50px 0px;
    }

    .blueBg .box button.S-blue {
        color: #0E2E3D;
    }

    .blueBg .box button.in-S-blue {
        color: rgba(0, 0, 0, 0.2);
    }

    .divfor_submit {
        text-align: center;
        margin-top: 30px;
    }

    #sign_up {
        height: 40px;
        width: 181px;
    }




    /* ----------------------buttom------------------------------------ */
    button.signinBtn {
        z-index: 999;
    }

    button.signupBtn {
        z-index: 999;

    }

    button.signinBtn:hover {
        color: #5D8DC1;
    }

    button.signupBtn:hover {
        color: #5D8DC1;
    }


    .formBx {
        position: absolute;
        top: 0;
        width: 50%;
        height: 85%;
        z-index: 998;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .5s ease-in-out;
    }

    .InfoBx.active {
        left: 50%;
        transition: .5s ease-in-out;
    }

    .InfoBx.inactive {
        left: 0%;
        transition: .5s ease-in-out;
    }



    /* body.active{
    background: #0E2E3D;
} */
    .formBx .form {
        position: absolute;
        left: 0;
        width: 100%;
        transition: .5s;
    }

    .formBx .signinForm {
        left: 100%;
        transition-delay: 0.25s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .formBx.active .signinForm {
        /* left: -100%; */
        transition-delay: 0s;
    }

    .S-phone {
        display: flex;
        align-items: center;
    }

    .S-phone p {
        width: 20%;
    }


    /* 註冊表格 */
    .formBx .signupForm {
        top: 15%;
        left: 0%;
        height: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition-delay: 0s;
    }

    .formBx.active .signupForm {
        left: 0;
        transition-delay: 0.25s;

    }

    .formBx .form form {
        /* border: 1px solid red; */
        width: 80%;
        display: flex;
        /* align-items: center; */
        flex-direction: column;
    }

    .signupForm #form1 {
        /* border: 1px solid #0E2E3D; */
        width: 80%;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .formBx .form form h3 {
        font-size: 32px;
        /* color: #0E2E3D; */
        color: #fff;
        margin-bottom: 20px;
        font-weight: 900;
    }

    .formBx .form form input {
        width: 100%;
        /* margin-bottom: 20px; */
        /* padding: 10px; */
        outline: none;
        font-size: 16px;
    }

    .CAPTCHA-g {
        display: flex;
        align-items: center;
        width: 100%;
    }

    p.option_name.m-left {
        flex-grow: 1;
        text-align: right;
    }

    .fullinput_container.grow-none {
        flex-grow: 0;
    }




    .formBx .form form input.CAPTCHA {
        width: 65%;
        margin-bottom: 20px;
        /* padding: 10px; */
        outline: none;
        font-size: 16px;
    }

    .formBx .form form button {
        /* font-weight: 900; */
        font-size: 20px;
        width: 45%;
        height: 48px;
        padding: 6px;
        margin-left: 10px;
        background: #FEAC00;
        border: none;
        color: #0E2E3D;
    }

    .formBx .form form input[type="submit"] {
        font-weight: 900;
        color: #FEAC00;
        border: none;
        max-width: 100px;
        cursor: pointer;
        margin-top: 20px;
    }

    .formBx.active .signupForm input[type="submit"] {
        font-weight: 900;
        color: #FEAC00;

    }

    /* 忘記密碼 */
    .formBx .form form .forgot {
        padding: 0 0 10px;
        text-align: right;
        color: #5D8DC1;
        text-decoration: none;
    }

    .input_option {
        height: 48px;
        width: 100%;
        margin: 15px 0;
    }

    .alert {
        text-align: start;

    }

    .signinForm .alert {
        margin-left: 50px;
    }

    .checkbox-info input {
        width: 10px;
    }

    .signupForm .pc-button-FEAC00-180 {
        height: 41px;
        margin: 0px 0 10px;

    }

    .signinForm .pc-button-FEAC00-180 {
        height: 60px;
        margin: 10px 0 10px;

    }




    /* 尚未註冊？點此註冊 */
    .formBx .font-color-blue {
        color: #0E2E3D;
        /* font-weight: 900; */
        text-decoration: underline;
    }


    /* --------------confirm bar----------------- */
    .c_confirm_bar {
        max-width: 1280px;
        width: 100%;
        /* padding: 0 25px; */
        margin: 0 auto 30px;
        text-align: center;
        margin-top: 25px;

    }



    input[type=text] {
        margin: 0;
        padding: 0;
        height: 48px;
        border: none;
        /* text-indent: 15px; */
        color: #0E2E3D;
    }

    input[type=email] {
        margin: 0;
        padding: 0;
        height: 48px;
        border: none;
        /* text-indent: 15px; */
        color: #0E2E3D;
    }

    input[type=checkbox] {
        display: none;
        color: #0E2E3D;
    }

    /* checkbox 未勾選 */
    input[type=checkbox]+span {
        cursor: pointer;
        display: inline-block;
        padding-left: 30px;
        background: url(imgs/unchecked.svg) no-repeat left center;
        user-select: none;
    }

    /* checkbox連結 */
    a {
        text-decoration: none;
        color: #75BBE3;
    }

    /* checkbox 已勾選 */
    input[type=checkbox]:checked+span {
        display: inline-block;
        padding-left: 30px;
        background-image: url(imgs/checked.svg);
    }


    /* --------------隱藏-------------- */
    /* --------------隱藏-------------- */
    /* --------------隱藏-------------- */
    /* --------------隱藏-------------- */
    .S-lg-d-none {
        display: none;
    }


    .fullinput_container {
        text-align: start;
    }







    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */



    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */


    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */







    @media screen and (max-width:376px) {

        /* ---------------------------註冊--------------------------- */

        .container-wrap {
            flex-direction: column;
            min-height: 0;
            background-color: #F1EDEA;
            /* margin-top: 40px; */
            background: #F1EDEA;
        }

        .container1 {
            max-width: 375px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0;
        }

        .container1 .blueBg {
            width: 100%;
            top: 0;
            height: 100%;
        }

        .formBx {
            margin-top: 60px;
            width: 100%;
            top: 0;
            box-shadow: none;
            align-items: flex-start;
        }


        .form {
            padding: 20px 0;
            /* border: #75BBE3 10px solid; */
        }

        input[type=checkbox]+span {

            background: url(imgs/unchecked.svg) no-repeat left top;

        }

        .c_confirm_bar {
            text-align: left;
        }

        /* ---------登入表單-------------------------------------------------- */

        .formBx .signinForm {
            top: 15%;
            width: 100%;
            left: 0%;
            /* background: #75BBE3; */
        }



        .blueBg {
            background: #F1EDEA;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0);
        }

        .blueBg .box {
            position: absolute;
            width: 100%;
            height: 150px;
            /* bottom: 0; */
        }

        .box.signin {
            top: 0;
        }

        .formBx.active {
            left: 0;
            top: 150px;
        }

        /* ---------註冊表單-------------------------------------------------- */
        .formBx .signupForm {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition-delay: 0s;
            /* background:#ffd069af ; */
        }




        /* 手機版 按鈕 */
        .mobil-Btn-g {
            display: flex;
            margin-bottom: 30px;
        }


        .mobile-signupBtn,
        .mobile-signinBtn {
            cursor: pointer;
            font-size: 32px;
            /* color: #0E2E3D; */
            color: rgba(0, 0, 0, 0.2);
            border: transparent;
            background: transparent;
            padding: 40px 50px 0px;
        }

        .mobil-Btn-g button.S-blue {
            color: #0E2E3D;
        }



        .alert {
            text-align: start;
        }

        .signinForm .alert {
            margin-left: 0px;
        }

        .z-all-center .input[type=checkbox] {
            background: url(imgs/unchecked.svg) no-repeat left top;
            border: 5px solid red;
        }


        /*.blueBg --------------隱藏-------------- */
        /* --------------隱藏-------------- */
        /* --------------隱藏-------------- */
        /* --------------隱藏-------------- */
        .option_name {
            display: none;
        }

        .S-d-none {
            display: none;
        }

        .form.S-d-new-none {
            display: none;
        }

        .S-d-block {
            display: block;
        }
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<!-- 自己頁面的html -->
<div class="container-wrap backdrop-blur">
    <div class="container1">
        <!-- info資訊板 -->
        <div class="InfoBx S-d-none">
            <h2>歡迎您來到</h2>
            <h2>Little House</h2>


            <div class="S-info-wrap">
                <div class="S-info S-info1">

                    <img src="imgs/search.svg" alt="">
                    <div class="S-info-word">
                        <h3>快速搜尋</h3>
                        <p>360° 忠實呈現，不必去看房</p>
                    </div>
                </div>
                <div class="S-info S-info2"><img src="imgs/fast.svg" alt="">
                    <div class="S-info-word">
                        <h3>方便快速</h3>
                        <p>不必出門，與紙本同等效力</p>
                    </div>
                </div>
                <div class="S-info S-info3"><img src="imgs/ring.svg" alt="">

                    <div class="S-info-word">
                        <h3>定時提醒</h3>
                        <p>定時提醒繳租，信用卡累積優惠</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- 大的切換button -->
        <div class="blueBg S-d-none">
            <div class="box signin">
                <!-- 左側註冊按鈕區 -->
                <button class="signinBtn mobile-signinBtn">登入</button>
                <button class="signupBtn mobile-signupBtn S-blue">註冊</button>
            </div>
            <div class="box signup">
                <!-- 右側註冊按鈕區 -->
                <button class="signinBtn S-d-none S-blue">登入</button>
                <button class="signupBtn S-d-none">註冊</button>
            </div>
        </div>



        <!-- 登入表格 -->
        <div class="formBx">
            <!-- 登入手機按鈕mobile-signinBtn -->
            <div class="mobil-Btn-g S-lg-d-none">
                <button class="mobile-signinBtn S-blue">登入</button>
                <button class="mobile-signupBtn">註冊</button>
            </div>
            <div class="form signinForm">
                <form action="" name="form2" id='form2' method="post" onsubmit="checkForm(); return false ;">
                    <!-- 標題+輸入框 -->
                    <div class="input_option">
                        <p class="option_name">手機</p>
                        <div class="fullinput_container ">
                            <input type="text" name="mobile" id="signin-mobile" placeholder="輸入您的帳號">
                            <div class="alert"></div>
                        </div>

                    </div>
                    <!-- 標題+輸入框 -->
                    <div class="input_option">
                        <p class="option_name">密碼</p>
                        <div class="fullinput_container ">
                            <input type="text" name="password" id="signin-password" placeholder="輸入您的密碼">
                        </div>
                    </div>
                    <div class="alert"></div>
                    <a href="#" class="forgot">忘記密碼</a>
                    <button type="submit" id="sign_in" class="pc-button-FEAC00-180 S-d-none">登入</button>
                </form>
                <a href="#" class="font-color-blue">尚未註冊？點此註冊</a>
            </div>



            <!-- 註冊表格 -->


            <div class="form signupForm S-d-new-none">
                <form action="" name="form1" id='form1' method="post" onsubmit="checkForm(); return false ;">
                    <!-- 註冊手機按鈕mobile-signinBtn -->
                    <div class="input_option">
                        <p class="option_name">真實姓名</p>
                        <div class="fullinput_container ">
                            <input type="text" name="name" id="signup-name" placeholder="請輸入您的姓名">
                            <div class="alert"></div>
                        </div>
                    </div>

                    <div class="input_option">
                        <p class="option_name">手機/帳號</p>
                        <div class="fullinput_container ">
                            <input type="text" name="mobile" id="signup-mobile" placeholder="請輸入您的手機">
                            <div class="alert"></div>
                        </div>
                    </div>

                    <div class="input_option">
                        <p class="option_name">電子郵件</p>


                        <input type="email" name="email" id="signup-email" placeholder="請輸入您的信箱">
                        <div class="alert"></div>
                    </div>



                    <div class="CAPTCHA-g">
                        <div class="input_option">
                            <p class="option_name m-left">驗證碼</p>
                            <div class="fullinput_container grow-none">
                                <input type="text" name="checked" id="signup-checked" placeholder="請輸入驗證碼">
                                <div class="alert"></div>
                            </div>
                        </div>
                        <!-- 驗證碼按鈕 -->

                        <button type="button" class="CAPTCHA-Btn S-d-none" onclick="getCode()">寄送驗證碼</button>
                    </div>

                    <div class="input_option">
                        <p class="option_name" style="margin-right: 16px;margin-left: 30px;">密碼</p>
                        <div class="fullinput_container ">
                            <input type="text" name="Password" id="signup-password" placeholder="請輸入您的密碼">
                            <div class="alert"></div>
                        </div>
                    </div>

                    <div class="input_option">
                        <p class="option_name">密碼確認</p>
                        <div class="fullinput_container">
                            <input type="text" name="passwordAgain" id="signup-passwordAgain" placeholder="請再次輸入您的密碼">
                            <div class="alert"></div>
                        </div>
                    </div>



                    <div class="checkbox-info">
                        <div class="c_confirm_bar">
                            <label>
                                <input type="checkbox" name="signup-checkbox" id="signup-checkbox">
                                <span class="z_all-center">我同意<a href="#"> 隱私條款 </a>與<a href="#">租客平台公約</a>,我已閱讀完<a href="#">租賃法.</a></span>
                            </label>
                        </div>
                    </div>
            <div class="divfor_submit">
                        <button type="submit" id="sign_up" class="pc-button-FEAC00-180">註冊</button>
                </form>
                <p>您已經註冊了嗎？<a href="#">由此進入</a></p>
            </div>
        </div>
    </div>

    <!-- 以下是"註冊成功" -->
    <dialog id="infoModal">
        <div class="card-wrap">
            <div class="card">
                <div class="card-icon">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <h2>註冊成功</h2>
                <h3>恭喜您獲得清潔優惠卷</h3>
                <h3>ABC-123456</h3>
                <p>可以前往會員區確認</p>
                <button class="pc-button-FEAC00-272 mobile-button-FEAC00-162" id="close">確認
            </div>
            <div class="card-x">
                <img src="./imgs/X.svg" alt="">
            </div>
        </div>
    </dialog>
    <!-- 以上是"註冊成功" -->

    <div class="white backdrop-blur S-d-none"></div>
    <!-- 以下是footer---------------------------------------------  -->
    <div class="footer_container S-lg-d-none S-d-block">
        <div class="footer">
            <div class="container">
                <div class="footer-up">
                    <div class="footer-left">
                        <div class="footer_phone_icon">
                            <img src="imgs/facebook-square-brands.svg" alt="">
                            <img src="imgs/instagram-brands.svg" alt="">
                            <img src="imgs/twitter-brands.svg" alt="">
                            <img src="imgs/youtube-brands.svg" alt="">
                        </div>
                        <div class="footer-left-up">
                            <p>
                                地址：台北市大安區市民大道9巷9樓
                            </p>
                            <p>
                                電話：02-2222-2222
                            </p>
                            <p>
                                信箱：csdas@gmail.com
                            </p>
                        </div>
                        <div class="footer-left-down">
                            <a href="#">免責聲明</a>
                            <a href="#">隱私權政策</a>
                            <a href="#">服務條款</a>
                        </div>
                    </div>
                    <div class="footer-right">
                        <img src="./imgs/people.png" alt="">
                    </div>
                </div>

            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="footer_icon">
                        <p>Follow us</p>
                        <img src="imgs/facebook-square-brands.svg" alt="">

                        <img src="imgs/instagram-brands.svg" alt="">
                        <img src="imgs/twitter-brands.svg" alt="">
                        <img src="imgs/youtube-brands.svg" alt="">
                    </div>
                    <div class="copyright">
                        <p>
                            Copyright © ICS COLLEGE OF ARTS. All rights reserved.
                        </p>
                    </div>
                    <div class="tw">
                        <p>
                            TW
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="phone_copyright">
            <p>
                Copyright © ICS COLLEGE OF ARTS. All rights reserved.
            </p>
        </div>
    </div>

    <!-- FOOTER--------------------------------------------------- -->


    <script src="js/jquery-3.6.0.js"></script>
    <script>
        // 自己頁面的script
        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        // const formBx = document.querySelector('.formBx');
        const InfoBx = document.querySelector('.InfoBx');
        const body = document.querySelector('body');
        const signupForm = document.querySelector('.signupForm');


        let signinClicked = $('.signinBtn').click();
        let signupClicked = $('.signupBtn').click();
        let $btnSendVerify = $('.CAPTCHA-Btn');



        // 桌機版註冊&登入
        $('.signupBtn').click(function() {
            console.log('hi signup');
            InfoBx.classList.add('active');
            InfoBx.classList.remove('inactive');
            signupBtn.classList.add('S-blue');
            signinBtn.classList.remove('S-blue');
        });

        $('.signinBtn').click(function() {
            console.log('hi signin');
            InfoBx.classList.add('inactive');
            InfoBx.classList.remove('active');
            signinBtn.classList.add('S-blue');
            signupBtn.classList.remove('S-blue');
        });




        // 手機板註冊&登入

        $('.mobile-signinBtn').click(function() {
            $('.signupForm').addClass('S-d-new-none');
            $('.signinForm').removeClass('S-d-new-none');
            $('.mobile-signinBtn').addClass('S-blue');
            $('.mobile-signupBtn').removeClass('S-blue');
        })

        $('.mobile-signupBtn').click(function() {
            $('.signinForm').addClass('S-d-new-none');
            $('.signupForm').removeClass('S-d-new-none');
            $('.mobile-signupBtn').addClass('S-blue');
            $('.mobile-signinBtn').removeClass('S-blue');
        })

















        // function checkForm() {
        //     // let isPass = true,
        //     //     $data = $(document.form1).serialize();

        //     // AJAX
        //     $.post('insert02.php', $(document.form1).serialize(), function(data) {
        //         console.log(data);
        //         if (data.success) {
        //             // alert('資料新增成功');
        //             // location.href = 'ab-list.php';
        //             $modal.find('#exampleModalLabel').html('資料新增成功');
        //             $modal.find('.modal-body').html('恭喜');
        //             modal.show();

        //         } else {
        //             //alert(data.error || '資料新增失敗');
        //             $modal.find('#exampleModalLabel').html('資料新增失敗');
        //             $modal.find('.modal-body').html('...');
        //             modal.show();
        //         }
        //     }, 'json');
        // }



        $('.CAPTCHA-Btn').click(function() {
            console.log($('#email').text());
        });

        $btnSendVerify.on('click', function() {
            document.cookie = "username=John Doe";
        });

        function getCode() {
            let email = $('#signup-email').val();
            $.get('contract/test0102.php', {
                email
            }, function(data) {
                alert('請至信箱收取驗證碼');
            });



        }
    </script>

    <script>
        // ------------驗證並彈出錯誤訊息------------------------------------------

        function validateEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zAZ]{2,}))$/;
            return re.test(email);
        }

        function validateMobile(m) {
            return /^09\d{2}-?\d{3}-?\d{3}$/.test(m);
        }

        // https://cloudlab.tw/wp/sampleFiles/RegExp/ 正規標示式
        function validatePassword(p) {
            return /(\d+[a-z]+|[a-z]+\d+)/.test(p);
        }

        const checkbox = $('#signup-checkbox');
        checkbox.click(function() {
            checkbox.toggleClass('box_checked');
            $('input[type=checkbox]+span').css('background-image', '');
        })



        function checkForm() {
            const $name = $('#signup-name');
            const $email = $('#signup-email');
            const $mobile = $('#signup-mobile');




            const msgFields = [$name, $email, $mobile];


            // 清除之前的檢查訊息start------------------------------------------------
            for (let f of msgFields) {
                f.css('border', '#CCCCCC 1px solid');
                f.next().html('');
            }
            // 清除之前的檢查訊息over------------------------------------------------


            // let isPass = true; //有沒有通過檢查(預設為通過，有一格沒填就不過)


            // ---註冊的判斷-------------------------------------------------
            if ($name.val().length < 2) {
                $name.next().html('請填寫正確資料');
                $name.css('border', 'red 1px solid');

                isPass = false;
            }

            if ($email.val() && !validateEmail($email.val())) {

                $email.next().html('請填寫正確的email');
                $email.css('border', 'red 1px solid');
                isPass = false;
            }

            if ($mobile.val() && !validateMobile($mobile.val())) {

                $mobile.next().html('請填寫正確的手機號碼');
                $mobile.css('border', 'red 1px solid');
                isPass = false;
            }
            const $signupChecked = $('#signup-checked');
            if ($signupChecked.val().length < 5) {

                $signupChecked.next().html('請填寫正確的驗證碼');
                $signupChecked.css('border', 'red 1px solid');
                isPass = false;
            }
            const $password = $('#signup-password');
            if (!$password.val() || !validatePassword($password.val())) {

                $password.next().html('請填寫16位元的密碼，至少一個英文一個數字');
                $password.css('border', 'red 1px solid');
                isPass = false;
            }
            const $passwordAgain = $('#signup-passwordAgain');
            if ($passwordAgain.val() != $password.val()) {
                $passwordAgain.next().html('需與前一次密碼相同');
                $passwordAgain.css('border', 'red 1px solid');
                isPass = false;
            }



            // if (!$checkbox.hasClass('box_checked')) {
            //     $('input[type=checkbox]+span').css('background-image', 'url(imgs/checkbox-warnning.svg)');
            //     isPass = false;
            // }




            // ---------註冊成功彈跳視窗---------------------------------------


            // 成功 彈出視窗

            let btn = document.querySelector("#sign_up");
            let infoModal = document.querySelector("#infoModal");
            let close = document.querySelector("#close");
            btn.addEventListener("click", function() {
                infoModal.showModal();
            })
            close.addEventListener("click", function() {
                console.log('close');
                infoModal.close();
            })


            // // ---登入的判斷-------------------------------------------------




            // const $inMobile = $('#signin-mobile');
            // if ($inMobile.val() && !validateMobile($inMobile.val())) {
            //     console.log('iambeauty');
            //     $mobile.next().html('! 帳號或密碼填寫錯誤');
            //     $mobile.css('border', 'red 1px solid');
            //     isPass = false;
            // }

            // const $inPassword = $('#signin-password');
            // // if (!$inPassword.val() || !validatePassword($inPassword.val())) {

            // //     $inPassword.next().html('! 帳號或密碼填寫錯誤');
            // //     $inPassword.css('border', 'red 1px solid');
            // //     isPass = false;
            // // }

            // // if (!$inMobile.val().trim() || !$inPassword.val().trim()) {
            // //     console.log('iambeauty');
            // //     $mobile.next().html('! 帳號或密碼填寫錯誤');
            // //     $mobile.css('border', 'red 1px solid');
            // //     isPass = false;

            // //     // alert('兩個欄位都要填寫');
            // // }




            // -------------------------------------------------------------------------------------
            // 註冊成功存入會員資料表
            if (isPass) {
                $.post('insert02.php', $(document.form1).serialize(),
                    function(data) {
                        console.log(data), 'json';
                    });
            }
        }
    </script>


=======
<?php
// require './part/admin-required.php';
// require './part/connect-db.php';
$pageName = 'signin_signup';
?>

<?php include __DIR__ . './part/head.php'  ?>


<style>
    /* --------------------------------signin-card------------------------------------ */
    /* 卡片加大 card biger  */
    .card-wrap.card-biger {
        height: 450px;
    }

    .card-wrap.card-biger .input_option {
        margin: 0px 0;
    }



    /*  正常大小 */

    .card-wrap {
        position: relative;
        height: 345px;
        width: 502px;
        /* border: 1px solid red; */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #0E2E3D;
        box-shadow: 0px 6px 13px rgba(0, 0, 0, 0.18);
    }

    .card {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* text-align: center; */
        margin: auto;
    }

    .card-icon {
        font-size: 30px;
        text-align: center;
        margin: 10px 0;
    }

    .card h2 {
        text-align: center;
        font-weight: 900;
        margin-bottom: 10px;
    }


    /* XXXXXXXx */

    .card-x {
        width: 50px;
        height: 50px;
        background-color: #F1EDEA;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
        top: 5%;
        right: 5%;
        color: #0E2E3D;
    }

    .card-x i {
        font-size: 40px;
    }

    /* 
    .input_option {
        margin: 20px 0;
        width: 70%;
        height: 100px;
    } */



    .fullinput_container {
        height: 100%;
    }


    .card-wrap p {
        margin-bottom: 30px;
    }



    /* 電腦版短版按鈕 */

    button.pc-button-FEAC00-272 {
        height: 60px;
        width: 180px;
        font-size: 24px;
        font-weight: 900;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */


    /* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */


    /* ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

    @media screen and (max-width: 376px) {



        .card-wrap {
            position: relative;
            height: 378px;
            width: 375px;
            /* border: 1px solid red; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #0E2E3D;
            box-shadow: 0px 6px 13px rgba(0, 0, 0, 0.18);
            padding: 20px 0 10px;
        }




        /* XXXXXXXx */

        .card-x {
            margin: 10px;
            width: 30px;
            height: 30px;

        }

        .card-x i {
            font-size: 40px;
        }


        /* 電腦版短版按鈕 */

        button.pc-button-FEAC00-272 {
            height: 60px;
            width: 70%;
            font-size: 24px;
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }












    .box_checked {}

    /* ------------------------------------- */
    /* 註冊區的alert */
    .alert {
        /* margin-left: 80px; */
        color: red;
    }

    /* 登入區域的alert */
    .signinForm .alert {
        /* margin-left: 50px; */
        color: red;
    }

    /* ------------------------------------- */

    /* 自己頁面的css */
    .white {
        z-index: 0;
        position: absolute;
        /* top: 300px; */
        width: 100%;
        height: 100%;
        background-color: #fff;
        /* background: url(imgs/cut-patrick-perkins-3wylDrjxH-E-unsplash\ 3.jpg) center center/cover no-repeat; */
        opacity: .6;
    }

    .container-wrap {
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        transition: .5s;
        background: url(imgs/cut-patrick-perkins-3wylDrjxH-E-unsplash\ 3.jpg) center center/cover no-repeat;

    }

    /* .backdrop-blur{
    backdrop-filter: blur(5px);
} */

    .container1 {
        z-index: 1;
        position: relative;
        width: 1080px;
        height: 850px;
        margin-top: 180px;
        /* background-color: #fa0f; */

    }

    /* 藍色方框 */
    /* left:0 左 */
    /* left:50% 右 */
    .InfoBx {
        position: absolute;
        z-index: 8888;
        top: 0;
        left: 0%;
        width: 50%;
        height: 90%;
        background: #5D8DC1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .InfoBx h2 {
        color: #fff;
        padding: 10px 0;

    }

    .S-info-wrap {
        width: 100%;
        margin-top: 30px;
    }

    .InfoBx img {
        width: 50px;
        margin-right: 30px;
    }

    .S-info3 img {
        width: 40px;
    }

    .InfoBx .S-info {
        color: #fff;
        z-index: 1;
        color: #fff;
        display: flex;
        justify-content: center;
        padding: 20px 0;
        margin-left: 30px;
    }

    .S-info-word {
        color: #fff;
        width: 50%;
    }

    .S-info-word h3,
    .S-info-word p {
        color: #fff;
    }

    .blueBg {
        background: pink;
        position: absolute;
        top: 0;
        width: 100%;
        height: 764px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #F4F4F4;
        box-shadow: 0 5px 45px rgba(0, 0, 0, 0.15);
        /* padding: 60px 128px; */
    }

    .blueBg .box {
        /* background: rgb(252, 252, 146); */
        position: relative;
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        /* flex-direction: column; */
    }

    .signupBtn,
    .signinBtn {
        /* font-weight: 900;  */
        cursor: pointer;
        font-size: 32px;
        /* color: #0E2E3D; */
        color: rgba(0, 0, 0, 0.2);
        border: transparent;
        background: transparent;
        padding: 40px 50px 0px;
    }

    .blueBg .box button.S-blue {
        color: #0E2E3D;
    }

    .blueBg .box button.in-S-blue {
        color: rgba(0, 0, 0, 0.2);
    }

    .divfor_submit {
        text-align: center;
        margin-top: 30px;
    }

    #sign_up {
        height: 40px;
        width: 181px;
    }




    /* ----------------------buttom------------------------------------ */
    button.signinBtn {
        z-index: 999;
    }

    button.signupBtn {
        z-index: 999;

    }

    button.signinBtn:hover {
        color: #5D8DC1;
    }

    button.signupBtn:hover {
        color: #5D8DC1;
    }


    .formBx {
        position: absolute;
        top: 0;
        width: 50%;
        height: 85%;
        z-index: 998;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .5s ease-in-out;
    }

    .InfoBx.active {
        left: 50%;
        transition: .5s ease-in-out;
    }

    .InfoBx.inactive {
        left: 0%;
        transition: .5s ease-in-out;
    }



    /* body.active{
    background: #0E2E3D;
} */
    .formBx .form {
        position: absolute;
        left: 0;
        width: 100%;
        transition: .5s;
    }

    .formBx .signinForm {
        left: 100%;
        transition-delay: 0.25s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .formBx.active .signinForm {
        /* left: -100%; */
        transition-delay: 0s;
    }

    .S-phone {
        display: flex;
        align-items: center;
    }

    .S-phone p {
        width: 20%;
    }


    /* 註冊表格 */
    .formBx .signupForm {
        top: 15%;
        left: 0%;
        height: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition-delay: 0s;
    }

    .formBx.active .signupForm {
        left: 0;
        transition-delay: 0.25s;

    }

    .formBx .form form {
        /* border: 1px solid red; */
        width: 80%;
        display: flex;
        /* align-items: center; */
        flex-direction: column;
    }

    .signupForm #form1 {
        /* border: 1px solid #0E2E3D; */
        width: 80%;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .formBx .form form h3 {
        font-size: 32px;
        /* color: #0E2E3D; */
        color: #fff;
        margin-bottom: 20px;
        font-weight: 900;
    }

    .formBx .form form input {
        width: 100%;
        /* margin-bottom: 20px; */
        /* padding: 10px; */
        outline: none;
        font-size: 16px;
    }

    .CAPTCHA-g {
        display: flex;
        align-items: center;
        width: 100%;
    }

    p.option_name.m-left {
        flex-grow: 1;
        text-align: right;
    }

    .fullinput_container.grow-none {
        flex-grow: 0;
    }




    .formBx .form form input.CAPTCHA {
        width: 65%;
        margin-bottom: 20px;
        /* padding: 10px; */
        outline: none;
        font-size: 16px;
    }

    .formBx .form form button {
        /* font-weight: 900; */
        font-size: 20px;
        width: 45%;
        height: 48px;
        padding: 6px;
        margin-left: 10px;
        background: #FEAC00;
        border: none;
        color: #0E2E3D;
    }

    .formBx .form form input[type="submit"] {
        font-weight: 900;
        color: #FEAC00;
        border: none;
        max-width: 100px;
        cursor: pointer;
        margin-top: 20px;
    }

    .formBx.active .signupForm input[type="submit"] {
        font-weight: 900;
        color: #FEAC00;

    }

    /* 忘記密碼 */
    .formBx .form form .forgot {
        padding: 0 0 10px;
        text-align: right;
        color: #5D8DC1;
        text-decoration: none;
    }

    .input_option {
        height: 48px;
        width: 100%;
        margin: 15px 0;
    }

    /* .input_option p{
        width: 30%;
    } */

    .alert {
        text-align: start;

    }



    .checkbox-info input {
        width: 10px;
    }

    .signupForm .pc-button-FEAC00-180 {
        height: 41px;
        margin: 0px 0 10px;

    }

    .signinForm .pc-button-FEAC00-180 {
        height: 60px;
        margin: 10px 0 10px;

    }




    /* 尚未註冊？點此註冊 */
    .formBx .font-color-blue {
        color: #0E2E3D;
        /* font-weight: 900; */
        text-decoration: underline;
    }


    /* --------------confirm bar----------------- */
    .c_confirm_bar {
        max-width: 1280px;
        width: 100%;
        /* padding: 0 25px; */
        margin: 0 auto 30px;
        text-align: center;
        margin-top: 25px;

    }



    input[type=text] {
        margin: 0;
        padding: 0;
        height: 48px;
        border: none;
        /* text-indent: 15px; */
        color: #0E2E3D;
    }

    input[type=email] {
        margin: 0;
        padding: 0;
        height: 48px;
        border: none;
        text-indent: 15px;
        color: #0E2E3D;
    }

    input[type=checkbox] {
        /* display: none; */
        color: #0E2E3D;
    }

    /* checkbox 未勾選 */
    input[type=checkbox]+span {
        cursor: pointer;
        display: inline-block;
        padding-left: 30px;
        background: url(imgs/unchecked.svg) no-repeat left center;
        user-select: none;
        color: #0E2E3D;

    }

    /* checkbox連結 */
    a {
        text-decoration: none;
        color: #75BBE3;
    }

    /* checkbox 已勾選 */
    input[type=checkbox]:checked+span {
        display: inline-block;
        padding-left: 30px;
        background-image: url(imgs/checked.svg);
    }


    /* --------------隱藏-------------- */
    /* --------------隱藏-------------- */
    /* --------------隱藏-------------- */
    /* --------------隱藏-------------- */
    .S-lg-d-none {
        display: none;
    }


    .fullinput_container {
        text-align: start;
    }







    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */



    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */


    /* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */







    @media screen and (max-width:376px) {

        /* ---------------------------註冊--------------------------- */

        .container-wrap {
            flex-direction: column;
            min-height: 0;
            background-color: #F1EDEA;
            /* margin-top: 40px; */
            background: #F1EDEA;
        }

        .container1 {
            max-width: 375px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0;
        }

        .container1 .blueBg {
            width: 100%;
            top: 0;
            height: 100%;
        }

        .formBx {
            margin-top: 60px;
            width: 100%;
            top: 0;
            box-shadow: none;
            align-items: flex-start;
        }


        .form {
            padding: 20px 0;
            /* border: #75BBE3 10px solid; */
        }

        input[type=checkbox]+span {

            background: url(imgs/unchecked.svg) no-repeat left top;

        }

        .c_confirm_bar {
            text-align: left;
        }

        /* ---------登入表單-------------------------------------------------- */

        .formBx .signinForm {
            top: 15%;
            width: 100%;
            left: 0%;
            /* background: #75BBE3; */
        }



        .blueBg {
            background: #F1EDEA;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0);
        }

        .blueBg .box {
            position: absolute;
            width: 100%;
            height: 150px;
            /* bottom: 0; */
        }

        .box.signin {
            top: 0;
        }

        .formBx.active {
            left: 0;
            top: 150px;
        }

        /* ---------註冊表單-------------------------------------------------- */
        .formBx .signupForm {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition-delay: 0s;
            /* background:#ffd069af ; */
        }




        /* 手機版 按鈕 */
        .mobil-Btn-g {
            display: flex;
            margin-bottom: 30px;
        }


        .mobile-signupBtn,
        .mobile-signinBtn {
            cursor: pointer;
            font-size: 32px;
            /* color: #0E2E3D; */
            color: rgba(0, 0, 0, 0.2);
            border: transparent;
            background: transparent;
            padding: 40px 50px 0px;
        }

        .mobil-Btn-g button.S-blue {
            color: #0E2E3D;
        }



        .alert {
            text-align: start;
        }

        .signinForm .alert {
            margin-left: 0px;
        }

        .z-all-center .input[type=checkbox] {
            background: url(imgs/unchecked.svg) no-repeat left top;
            border: 5px solid red;
        }


        /*.blueBg --------------隱藏-------------- */
        /* --------------隱藏-------------- */
        /* --------------隱藏-------------- */
        /* --------------隱藏-------------- */
        .option_name {
            display: none;
        }

        .S-d-none {
            display: none;
        }

        .form.S-d-new-none {
            display: none;
        }

        .S-d-block {
            display: block;
        }
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<!-- 自己頁面的html -->
<div class="container-wrap backdrop-blur">
    <div class="container1">
        <!-- info資訊板 -->
        <div class="InfoBx S-d-none">
            <h2>歡迎您來到</h2>
            <h2>Little House</h2>


            <div class="S-info-wrap">
                <div class="S-info S-info1">

                    <img src="imgs/search.svg" alt="">
                    <div class="S-info-word">
                        <h3>快速搜尋</h3>
                        <p>360° 忠實呈現，不必去看房</p>
                    </div>
                </div>
                <div class="S-info S-info2"><img src="imgs/fast.svg" alt="">
                    <div class="S-info-word">
                        <h3>方便快速</h3>
                        <p>不必出門，與紙本同等效力</p>
                    </div>
                </div>
                <div class="S-info S-info3"><img src="imgs/ring.svg" alt="">

                    <div class="S-info-word">
                        <h3>定時提醒</h3>
                        <p>定時提醒繳租，信用卡累積優惠</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- 大的切換button -->
        <div class="blueBg S-d-none">
            <div class="box signin">
                <!-- 左側註冊按鈕區 -->
                <button class="signinBtn mobile-signinBtn">登入</button>
                <button class="signupBtn mobile-signupBtn S-blue">註冊</button>
            </div>
            <div class="box signup">
                <!-- 右側註冊按鈕區 -->
                <button class="signinBtn S-d-none S-blue">登入</button>
                <button class="signupBtn S-d-none">註冊</button>
            </div>
        </div>



        <!-- 登入表格 -->
        <div class="formBx">
            <!-- 登入手機按鈕mobile-signinBtn -->
            <div class="mobil-Btn-g S-lg-d-none">
                <button class="mobile-signinBtn S-blue">登入</button>
                <button class="mobile-signupBtn">註冊</button>
            </div>
            <div class="form signinForm">
                <form action="" name="form2" id='form2' method="post" onsubmit="checkForm2(); return false ;">
                    <!-- 標題+輸入框 -->
                    <div class="input_option">
                        <p class="option_name">手機</p>
                        <div class="fullinput_container ">
                            <input type="text" name="mobile" id="signin-mobile" placeholder="輸入您的帳號">
                            <div class="alert"></div>
                        </div>

                    </div>
                    <!-- 標題+輸入框 -->
                    <div class="input_option">
                        <p class="option_name">密碼</p>
                        <div class="fullinput_container ">
                            <input type="text" name="password" id="signin-password" placeholder="輸入您的密碼">
                            <div class="alert"></div>
                        </div>
                    </div>
                    <a href="#" class="forgot">忘記密碼</a>
                    <button type="submit" id="sign_in" class="pc-button-FEAC00-180 S-d-none">登入</button>
                </form>
                <a href="#" class="font-color-blue">尚未註冊？點此註冊</a>
            </div>



            <!-- 註冊表格 -->


            <div class="form signupForm S-d-new-none">
                <!-- ------------------------------------------------------------------------------------------------------------------------------------onclick-------------------- -->
                <form action="" name="form1" id='form1' method="post" onsubmit="checkForm(); return false ;">
                    <!-- 註冊手機按鈕mobile-signinBtn -->
                    <div class="input_option">
                        <p class="option_name">真實姓名</p>
                        <div class="fullinput_container ">
                            <input type="text" name="name" id="signup-name" placeholder="請輸入您的姓名">
                            <div class="alert"></div>
                        </div>
                    </div>

                    <div class="input_option">
                        <p class="option_name">手機/帳號</p>
                        <div class="fullinput_container ">
                            <input type="text" name="mobile" id="signup-mobile" placeholder="請輸入您的手機">
                            <div class="alert"></div>
                        </div>
                    </div>

                    <div class="input_option">
                        <p class="option_name">電子郵件</p>
                        <div class="fullinput_container ">
                            <input type="email" name="email" id="signup-email" placeholder="請輸入您的信箱">
                            <div class="alert"></div>
                        </div>
                    </div>



                    <div class="CAPTCHA-g">
                        <div class="input_option">
                            <p class="option_name m-left">驗證碼</p>
                            <div class="fullinput_container grow-none">
                                <input type="text" name="checked" id="signup-checked" placeholder="請輸入驗證碼">
                                <div class="alert"></div>
                            </div>
                        </div>
                        <!-- 驗證碼按鈕 -->

                        <button type="button" class="CAPTCHA-Btn S-d-none" onclick="getCode()">寄送驗證碼</button>
                    </div>

                    <div class="input_option">
                        <p class="option_name" style="margin-right: 16px;margin-left: 30px;">密碼</p>
                        <div class="fullinput_container ">
                            <input type="text" name="Password" id="signup-password" placeholder="請輸入您的密碼">
                            <div class="alert"></div>
                        </div>
                    </div>

                    <div class="input_option">
                        <p class="option_name">密碼確認</p>
                        <div class="fullinput_container">
                            <input type="text" name="passwordAgain" id="signup-passwordAgain" placeholder="請再次輸入您的密碼">
                            <div class="alert"></div>
                        </div>
                    </div>



                    <div class="checkbox-info">
                        <div class="c_confirm_bar">
                            <label>
                                <input type="checkbox" name="signup-checkbox" id="signup-checkbox" style="display:none;" ;>
                                <span class="z_all-center">我同意<a href="#"> 隱私條款 </a>與<a href="#">租客平台公約</a>,我已閱讀完<a href="#">租賃法.</a></span>
                            </label>
                        </div>
                    </div>
                    <!-- <div class="divfor_submit"> -->
                    <button type="submit" id="sign_up" class="pc-button-FEAC00-180">註冊</button>
                </form>
                <p><a>您已經註冊了嗎？由此進入</p>
            </div>
        </div>
    </div>

    <!-- 以下是"註冊成功" -->
    <dialog id="infoModal">
        <div class="card-wrap">
            <div class="card">
                <div class="card-icon">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <h2>註冊成功</h2>
                <h3>恭喜您獲得清潔優惠卷</h3>
                <h3>ABC-123456</h3>
                <p>可以前往會員區確認</p>
                <button onclick="cleanstring()" class="pc-button-FEAC00-272 mobile-button-FEAC00-162 clear" id="close">確認
            </div>
            <div class="card-x clear" id="close2">
                <img src="./imgs/X.svg" alt="">
            </div>
        </div>
    </dialog>
    <!-- 以上是"註冊成功" -->

    <div class="white backdrop-blur S-d-none"></div>
    <!-- 以下是footer---------------------------------------------  -->
    <div class="footer_container S-lg-d-none S-d-block">
        <div class="footer">
            <div class="container">
                <div class="footer-up">
                    <div class="footer-left">
                        <div class="footer_phone_icon">
                            <img src="imgs/facebook-square-brands.svg" alt="">
                            <img src="imgs/instagram-brands.svg" alt="">
                            <img src="imgs/twitter-brands.svg" alt="">
                            <img src="imgs/youtube-brands.svg" alt="">
                        </div>
                        <div class="footer-left-up">
                            <p>
                                地址：台北市大安區市民大道9巷9樓
                            </p>
                            <p>
                                電話：02-2222-2222
                            </p>
                            <p>
                                信箱：csdas@gmail.com
                            </p>
                        </div>
                        <div class="footer-left-down">
                            <a href="#">免責聲明</a>
                            <a href="#">隱私權政策</a>
                            <a href="#">服務條款</a>
                        </div>
                    </div>
                    <div class="footer-right">
                        <img src="./imgs/people.png" alt="">
                    </div>
                </div>

            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="footer_icon">
                        <p>Follow us</p>
                        <img src="imgs/facebook-square-brands.svg" alt="">

                        <img src="imgs/instagram-brands.svg" alt="">
                        <img src="imgs/twitter-brands.svg" alt="">
                        <img src="imgs/youtube-brands.svg" alt="">
                    </div>
                    <div class="copyright">
                        <p>
                            Copyright © ICS COLLEGE OF ARTS. All rights reserved.
                        </p>
                    </div>
                    <div class="tw">
                        <p>
                            TW
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="phone_copyright">
            <p>
                Copyright © ICS COLLEGE OF ARTS. All rights reserved.
            </p>
        </div>
    </div>

    <!-- FOOTER--------------------------------------------------- -->


    <script src="js/jquery-3.6.0.js"></script>
    <script>
        // 自己頁面的script
        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        // const formBx = document.querySelector('.formBx');
        const InfoBx = document.querySelector('.InfoBx');
        const body = document.querySelector('body');
        const signupForm = document.querySelector('.signupForm');


        let signinClicked = $('.signinBtn').click();
        let signupClicked = $('.signupBtn').click();
        let $btnSendVerify = $('.CAPTCHA-Btn');



        // 桌機版註冊&登入
        $('.signupBtn').click(function() {
            console.log('hi signup');
            InfoBx.classList.add('active');
            InfoBx.classList.remove('inactive');
            signupBtn.classList.add('S-blue');
            signinBtn.classList.remove('S-blue');
        });

        $('.signinBtn').click(function() {
            console.log('hi signin');
            InfoBx.classList.add('inactive');
            InfoBx.classList.remove('active');
            signinBtn.classList.add('S-blue');
            signupBtn.classList.remove('S-blue');
        });




        // 手機板註冊&登入

        $('.mobile-signinBtn').click(function() {
            $('.signupForm').addClass('S-d-new-none');
            $('.signinForm').removeClass('S-d-new-none');
            $('.mobile-signinBtn').addClass('S-blue');
            $('.mobile-signupBtn').removeClass('S-blue');
        })

        $('.mobile-signupBtn').click(function() {
            $('.signinForm').addClass('S-d-new-none');
            $('.signupForm').removeClass('S-d-new-none');
            $('.mobile-signupBtn').addClass('S-blue');
            $('.mobile-signinBtn').removeClass('S-blue');
        })

        $('.CAPTCHA-Btn').click(function() {
            console.log($('#email').text());
        });

        $btnSendVerify.on('click', function() {
            document.cookie = "username=John Doe";
        });

        function getCode() {
            let email = $('#signup-email').val();
            $.get('contract/test0102.php', {
                email
            }, function(data) {
                alert('請至信箱收取驗證碼');
            });



        }
    </script>

    <script>
        // ------------驗證並彈出錯誤訊息------------------------------------------

        function validateEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zAZ]{2,}))$/;
            return re.test(email);
        }

        function validateMobile(m) {
            return /^09\d{2}-?\d{3}-?\d{3}$/.test(m);
        }

        // https://cloudlab.tw/wp/sampleFiles/RegExp/ 正規標示式
        function validatePassword(p) {
            return /(\d+[a-z]+|[a-z]+\d+)/.test(p);
        }


        // -------------------checkbocx地方-------------------
        const checkbox = $('#signup-checkbox');
        checkbox.click(function() {
            $(this).toggleClass('box_checked');
            $('input[type=checkbox]+span').css('background-image', '');
        })


        // ----------註冊的驗證-----------------------------------------
        function checkForm() {
            const $name = $('#signup-name');
            const $email = $('#signup-email');
            const $mobile = $('#signup-mobile');




            let isPass = true; //有沒有通過檢查(預設為通過，有一格沒填就不過)


            // ---註冊的判斷-------------------------------------------------
            if ($name.val().length < 2) {
                $name.next().html('請填寫正確資料');
                $name.css('border', 'red 1px solid');

                isPass = false;
            }

            if (!$email.val() && !validateEmail($email.val())) {

                $email.next().html('請填寫正確的email');
                $email.css('border', 'red 1px solid');
                isPass = false;
            }

            if (!$mobile.val() && !validateMobile($mobile.val())) {

                $mobile.next().html('請填寫正確的手機號碼');
                $mobile.css('border', 'red 1px solid');
                isPass = false;
            }
            const $signupChecked = $('#signup-checked');
            if ($signupChecked.val().length < 5) {

                $signupChecked.next().html('請填寫正確的驗證碼');
                $signupChecked.css('border', 'red 1px solid');
                isPass = false;
            }
            const $password = $('#signup-password');
            if (!$password.val() || !validatePassword($password.val())) {

                $password.next().html('請填寫8位元的密碼，至少一個英文一個數字');
                $password.css('border', 'red 1px solid');
                isPass = false;
            }
            const $passwordAgain = $('#signup-passwordAgain');
            if ($passwordAgain.val() != $password.val()) {
                $passwordAgain.next().html('需與前一次密碼相同');
                $passwordAgain.css('border', 'red 1px solid');
                isPass = false;
            }


            // ---------------------------------------------------------------------------------------------------checkbocx地方-------------------

            if (!checkbox.hasClass('box_checked')) {
                $('input[type=checkbox]+span').css('background-image', 'url(./imgs/checkbox_warnning.svg)');
                isPass = false;
            }







            // 註冊成功存入會員資料表
            if (isPass) {

                // ---------註冊成功彈跳視窗---------------------------------------
                // 成功 彈出視窗

                let btn = document.querySelector("#sign_up");
                let infoModal = document.querySelector("#infoModal");
                let close = document.querySelector("#close");
                let close2 = document.querySelector("#close2");
                btn.addEventListener("click", function() {
                    infoModal.showModal();
                })
                close.addEventListener("click", function() {
                    console.log('close');
                    infoModal.close();
                    $name.html('');
                })
                close2.addEventListener("click", function() {
                    console.log('close2');
                    infoModal.close();
                    $('input').html('');
                })


                console.log('恭喜註冊成功');

                // $Mobile.next().html('');
                // $Mobile.innerhtml('');
                // $Mobile.css('border', '#CCCCCC 1px solid');

                // $Password.next().html('');
                // $Password.innerhtml('');
                // $Password.css('border', '#CCCCCC 1px solid');


                $.post('insert02.php', $(document.form1).serialize(),
                    function(data) {
                        console.log(data), 'json';
                    });
            }

        }








        // ----------登入的驗證-----------------------------------------
        function checkForm2() {


            let isPassIn = true; //有沒有通過檢查(預設為通過，有一格沒填就不過)



            const $MobileIn = $('#signin-mobile');
            const $PasswordIn = $('#signin-password');


            if (!$MobileIn.val().trim() || !$PasswordIn.val().trim() || !validateMobile($MobileIn.val()) || !validatePassword($PasswordIn.val())) {

                $MobileIn.next().html('! 帳號或密碼填寫錯誤');
                $MobileIn.css('border', 'red 1px solid');

                $PasswordIn.next().html('! 帳號或密碼填寫錯誤');
                $PasswordIn.css('border', 'red 1px solid');
                isPassIn = false;

                // alert('兩個欄位都要填寫');

            }
            if (isPassIn) {
                console.log('恭喜登入成功');

                $MobileIn.next().html('');
                $MobileIn.html('');
                $MobileIn.css('border', '#CCCCCC 1px solid');

                $PasswordIn.next().html('');
                $PasswordIn.html('');
                $PasswordIn.css('border', '#CCCCCC 1px solid');


                // AJAX

                $.post('login-api.php', $(document.form2).serialize(), function(data) {
                    console.log(data);
                    if (data.success) {
                        // alert('登入成功');
                        location.href = 'home_page.php';
                        // $('').css();
                    } else {
                        // alert(data.error || '登入失敗');
                        $MobileIn.next().html('! 帳號或密碼填寫錯誤');
                        $MobileIn.css('border', 'red 1px solid');

                        $PasswordIn.next().html('! 帳號或密碼填寫錯誤');
                        $PasswordIn.css('border', 'red 1px solid');
                        isPassIn = false;
                    }

                }, 'json');






            }



        }
    </script>



>>>>>>> 3422588166499dde7a79afb246c9a4774fa3de94:sign_signup0530.php
    <?php include __DIR__ . './part/javascript.php'  ?>