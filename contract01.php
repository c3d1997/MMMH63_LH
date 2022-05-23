<?php include __DIR__ . './part/head.php'  ?>
<style>
    .c_container_stepbar {
        width: 100%;
        max-width: 1280px;
        margin: 160px auto 0 auto;
        padding: 0px 25px;
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

    /*---------step-minder--------*/
    .step_mider {
        margin-top: 30px;
        text-align: center;
        color: #0E2E3D;
    }


    /*---------step-bar2 --------*/
    .step-bar2 {
        width: 100%;
        max-width: 1280px;
        margin: 30px auto;
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


    /* ---------------minder-------------- */
    .c-minder-wrap {
        display: flex;
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0px 25px;
    }

    .c-select_container {}

    .c-select {
        display: flex;
        margin-left: 20px;
    }

    input[type=radio] {
        text-align: center;
        margin: 15px 15px;
    }

    /* --- 表單地獄--------- */
    .section2 {
        width: 100%;
        max-width: 1280px;
        margin: 30px auto;
        padding: 0px 25px;
    }

    .container-form {
        margin: 30px auto;
        width: 100%;
        max-width: 1280px;
        padding: 0 25px;
        display: flex;
        justify-content: space-between;

    }

    .form-row2 {
        margin-left: 20px;
        width: 100%;
        max-width: 390px;
    }

    .cz_mb {
        margin-bottom: 30px;
    }

    .c-dropdown {
        background-color: #fff;
        width: 100%;
        height: 60px;
        padding: 0 15px;
        text-align: right;
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .c-dropdown_container {
        position: relative;
        width: 100%;
        background-color: #fff;
    }

    .c-dropdown_container>span {
        display: block;
        width: 100%;
        /* width: 390px; */
        height: 60px;
        background-color: #fff;
        padding: 0;

    }

    .dropdown_list {
        position: absolute;
        width: 100%;
        z-index: 1;
    }

    .testfrom1 {
        /* margin-top: 30px; */
    }

    .testfrom2 {
        /* margin-top: 30px; */
    }

    .form-row {
        max-width: 390px;
        width: 100%;
    }

    .form-row3 {
        margin-left: 20px;
        max-width: 390px;
        width: 100%;
    }

    input[type="text"],
    input[type="phone"] {
        display: block;
        width: 100%;
        max-width: 390px;

    }






    select {
        width: 400px;
        height: 50px;
        padding: 12px 20px;
        margin: 0 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .time {
        width: 100%;
        max-width: 1280px;
        padding: 20px 25px;
        margin: auto;
    }

    .cccc {
        /* display: flex; */
    }

    .z_time {
        /* width: 100%; */
        max-width: 1280px;
        padding: 20px 25px;
        margin: auto;

    }

    .z_time input {
        padding-left: 10px;
    }

    .z_time_container {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .z_time_begin_container>form {
        display: flex;
        /* justify-content: space-between; */
        /* align-items: center; */
    }

    .z_time_list {
        width: 30%;
    }

    .z_time_begin {
        width: 13%;
    }

    .z_b_to_e {
        top: 0;
        bottom: 0;
        margin: auto 40px;
    }

    /* --- 表單地獄--------- */


    /* ---------租屋期限 */
    .container-time {
        max-width: 1280px;
        padding: 0 25px;
        margin: auto;
        position: relative;
    }

    .ValidFrom-row2 {
        display: flex;

    }

    .testform2 {
        display: flex;

    }

    .form2 {
        margin-left: 20px;
    }

    .dropdown_container-short {}

    .dropdown_container-short>span {
        /* width: 158px; */
        height: 60px;
        background-color: #fff;
        padding: 0;
    }

    .time3 {
        display: flex;

        margin: 0 15px;
        align-items: center;
    }



    /* --------租屋期限止------- */



    /* ---------租屋期限 */


    .total_container {
        width: 100%;
        max-width: 1280px;
        padding: 0 25px;
        margin: auto;
    }

    .year {
        display: flex;
        align-items: center;
    }

    .year h3 {
        margin: 0 15px;
    }

    .year input {
        width: 100%;
        max-width: 158px;
    }

    .input-year {
        width: 100%;
        max-width: 158px;
    }

    .year-month {
        display: none;
    }

    /* ---------button---------- */

    .c_button_section {
        display: flex;
        justify-content: center;
        margin: 60px 0;
    }

    .c_button_right {
        margin-left: 30px;
    }

    .footer_container {
        margin-top: 60px;
    }

    .z_time_begintitle_phone {
        display: none;
    }

    .form-control {
        appearance: none;
    }

    .totalYear_container,
    .totalMonth_container {
        width: 100%;
        max-width: 160px;
        height: 60px;
        background-color: #fff;
        display: flex;
        align-items: center;
    }

    #totalYear,
    #totalMonth {
        padding-left: 15px;
    }

    @media screen and (max-width:376px) {
        .c_sample_block {
            display: none;
        }

        .c_upload_row {
            flex-direction: column;
        }

        .step_mider {
            display: none;
        }

        .c-minder-wrap {
            flex-direction: column;
        }

        .c-minder_text h3 {
            font-size: 20px;
            text-align: center;
        }

        .c-select {
            display: flex;
        }

        .c-select h3 {
            font-size: 20px;
        }

        .c-select {
            justify-content: space-around;
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

        .c_step-bar2 {
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

        .container-form {
            flex-direction: column;
        }

        .form-row2 {
            margin-left: 0px;
        }

        .form-row3 {
            margin-left: 0px;
        }


        input[type=radio] {
            text-align: center;
        }

        .c-select {
            flex-direction: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        .container-time {
            flex-direction: column;
        }

        .testfrom2 {
            flex-direction: column;
        }

        .time3 {
            display: none;
        }

        .container-time {
            width: 375px;
            margin: auto;
            padding: 0 20px;
        }

        .year-month {
            display: block;
        }

        .total_container {
            padding: 0 20px;
        }

        .total_container h3 {
            display: none;
        }

        .year {
            align-items: center;
            justify-content: space-between;
        }

        .z_time {
            padding: 0 20px;
            text-align: center;
        }

        .z_time_begin_container>form {
            flex-direction: column;
        }

        .z_time_list {
            width: 30%;
        }

        .z_phone-button-162 {
            width: 162.5px;
        }

        .c_button_right {
            margin-left: 10px;
        }

        .c_button_section {
            padding: 0 30px;
            /* justify-content: space-between; */
        }

        .time {
            text-align: center;
        }

        .z_b_to_e {
            display: none;
        }

        .c-dropdown {
            height: 45px;
        }

        .c-dropdown_container>span {
            height: 45px;
        }

        input[type=text] {
            height: 45px;
        }

        .z_time_begintitle {
            display: none;
        }

        .z_time_begintitle_phone {
            height: 24px;
            display: block;
        }

        .section2 {
            display: none;
        }

        .c-select_container {
            background-color: #fff;
        }

        .step-bar2 {
            text-align: center;
        }

        .c_container_stepbar {
            padding: 0 20px;
        }

        .container-form {
            padding: 0 20px;
        }

        .container-time {
            padding: 0 20px;
        }

        .c-minder-wrap {
            padding: 0 20px;
        }

        .c-minder_text {
            margin-bottom: 10px;
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
            <div class="z_progress_bar_step3"></div>
        </div>
    </div>
</section>


<!----step-minder--------------------->

<div class="step_mider">
    <h2>只需要六步驟， 即可快速完成簽約流程！</h2>
</div>

<!-------------------------step-bar2 ---------------->
<div class="step-bar2">
    <h3>Step1.契約資料填寫</h3>
    <div class="progress2">
        <div class="progress-bar2"></div>
    </div>
</div>
<!--------------- minder------------>
<section class="c-minder-wrap">
    <div class="c-minder_text">
        <h3>是否自動帶入已填寫之會員資料</h3>
    </div>
    <div class="c-select_container">
        <div class="c-select">
            <label for="">
                <h3>是</h3>
            </label>
            <input type="radio" name="gender" id="yes">

            <label for="">
                <h3>否</h3>
            </label>
            <input type="radio" name="gender" id="no">
        </div>
    </div>
</section>


<!-- -----------基本資料--------- -->

<section class="section2">
    <h3>基本資料</h3>
</section>
<!----------------- 表單地獄---------------------->
<div class="container-form">
    <!-----------------第一排 ---------------->
    <div class="form-row">
        <form class="form" action="#">
            <label for="person">
                <p>姓名</p>
            </label>
            <input type="text" name="Name" id="" placeholder="">
        </form>
        <p class="alert">格式錯誤</p>
        <form class="form" action="#"></form>
        <label for="phone">
            <p>英文姓名</p>
        </label>
        <input type="text" name="EngName" id="" placeholder="">
        </form>
        <p class="alert">格式錯誤</p>
        <form class="form" action="#"></form>
        <label for="phone">
            <p>身分證/護照號碼 擇一</p>
        </label>
        <input type="text" name="Id_number" id="" placeholder="">
        </form>
        <p class="alert">格式錯誤</p>
    </div>




    <!-----------------第2排 ---------------->
    <div class="form-row2 ">
        <div class="cz_mb">
            <form class="form" action="#">
                <label for="person">
                    <p>戶籍縣市</p>
                </label>
                <div class="c-dropdown_container">
                    <div class="c-dropdown">
                        <img src="../imgs/down-arrow.svg" alt="">
                    </div>
                    <div id="areaList" class="dropdown_list" hidden>
                        <p class="">台北市</p>
                        <p class="">新北市</p>
                        <p class="">基隆市</p>
                    </div>
                </div>
            </form>
        </div>
        <div class="testfrom1 cz_mb">
            <form class="form" action="#">
                <div class="testfrom">
                    <label for="person">
                        <p>行政區</p>
                    </label>

                    <div class="c-dropdown_container">
                        <span id="areaListBtn">
                            <div class="c-dropdown">
                                <img src="../imgs/down-arrow.svg" alt="">
                            </div>
                        </span>
                        <div id="areaList" class="dropdown_list" hidden>
                            <p class="">大安區</p>
                            <p class="">松山區</p>
                            <p class="">大同區</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="testfrom2 cz_mb">
            <form class="form" action="#">
                <label for="person">
                    <p>付款方式</p>
                </label>
                <div class="c-dropdown_container">
                    <span id="areaListBtn">
                        <div class="c-dropdown">
                            <img src="../imgs/down-arrow.svg" alt="">
                        </div>
                    </span>
                    <div id="areaList" class="dropdown_list" hidden>
                        <p class="">現金</p>
                        <p class="">匯款</p>
                        <p class="">信用卡</p>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-----------------第三排 ---------------->
    <div class="form-row3">
        <form class="form" action="#">
            <label for="person">
                <p>電子郵件</p>
            </label>
            <input type="text" name="Name" id="" placeholder="">
        </form>
        <p class="alert">格式錯誤</p>
        <form class="form" action="#">
            <label for="person">
                <p>手機
                </p>
            </label>
            <input type="text" name="Name" id="" placeholder="">
        </form>
        <p class="alert">格式錯誤</p>
        <form class="form" action="#">
            <label for="person">
                <p>職業</p>
            </label>
            <input type="text" name="Name" id="" placeholder="">
        </form>
        <p class="alert">格式錯誤</p>
    </div>
</div>

<!-------------- 表單地獄------------------->
<!---------------- 租屋期限------------------ -->
<div class="z_time">
    <h3>選擇租屋期限</h3>

    <input type="text" name="daterange" value="06/08/2022 - 06/08/2023" />
    <p id="record"></p>


    <!-- <div class="z_time_begin_container">
            <form action="" >
                <div class="z_time_container">
                    <div class="z_time_list">
                        <div class="z_time_begintitle">
                            <p>入住之年起/</p>
                        </div>
                        <div class="z_time_begintitle_phone">
                            <p></p>
                        </div>
                        <div class="c-dropdown_container">
                            <span id="areaListBtn">
                                <div class="c-dropdown">
                                    <img src="../imgs/down-arrow.svg" alt="">
                                </div>
                            </span>
                            <div id="areaList" class="dropdown_list" hidden>
                                <p class="">現金</p>
                                <p class="">匯款</p>
                                <p class="">信用卡</p>
                            </div>
                        </div>
                    </div>
                    <div class="z_time_list">
                        <div class="z_time_begintitle">
                            <p>入住之月起/</p>
                        </div>
                        <div class="z_time_begintitle_phone">
                            <p>入住起</p>
                        </div>
                        <div class="c-dropdown_container">
                            <span id="areaListBtn">
                                <div class="c-dropdown">
                                    <img src="../imgs/down-arrow.svg" alt="">
                                </div>
                            </span>
                            <div id="areaList" class="dropdown_list" hidden>
                                <p class="">現金</p>
                                <p class="">匯款</p>
                                <p class="">信用卡</p>
                            </div>
                        </div>
                    </div>
                    <div class="z_time_list">
                        <div class="z_time_begintitle">
                            <p>入住之日起/</p>
                        </div>
                        <div class="z_time_begintitle_phone">
                            <p></p>
                        </div>
                        <div class="c-dropdown_container">
                            <span id="areaListBtn">
                                <div class="c-dropdown">
                                    <img src="../imgs/down-arrow.svg" alt="">
                                </div>
                            </span>
                            <div id="areaList" class="dropdown_list" hidden>
                                <p class="">現金</p>
                                <p class="">匯款</p>
                                <p class="">信用卡</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="z_b_to_e">至</h3>
                <div class="z_time_container">
                    <div class="z_time_list">
                        <div class="z_time_begintitle">
                            <p>入住之年迄/</p>
                        </div>
                        <div class="z_time_begintitle_phone">
                            <p></p>
                        </div>
                        <div class="c-dropdown_container">
                            <span id="areaListBtn">
                                <div class="c-dropdown">
                                    <img src="../imgs/down-arrow.svg" alt="">
                                </div>
                            </span>
                            <div id="areaList" class="dropdown_list" hidden>
                                <p class="">現金</p>
                                <p class="">匯款</p>
                                <p class="">信用卡</p>
                            </div>
                        </div>
                    </div>
                    <div class="z_time_list">
                        <div class="z_time_begintitle">
                            <p>入住之月迄/</p>
                        </div>
                        <div class="z_time_begintitle_phone">
                            <p>入住迄</p>
                        </div>
                        <div class="c-dropdown_container">
                            <span id="areaListBtn">
                                <div class="c-dropdown">
                                    <img src="../imgs/down-arrow.svg" alt="">
                                </div>
                            </span>
                            <div id="areaList" class="dropdown_list" hidden>
                                <p class="">現金</p>
                                <p class="">匯款</p>
                                <p class="">信用卡</p>
                            </div>
                        </div>
                    </div>
                    <div class="z_time_list">
                        <div class="z_time_begintitle">
                            <p>入住之日迄/</p>
                        </div>
                        <div class="z_time_begintitle_phone">
                            <p></p>
                        </div>
                        <div class="c-dropdown_container">
                            <span id="areaListBtn">
                                <div class="c-dropdown">
                                    <img src="../imgs/down-arrow.svg" alt="">
                                </div>
                            </span>
                            <div id="areaList" class="dropdown_list" hidden>
                                <p class="">現金</p>
                                <p class="">匯款</p>
                                <p class="">信用卡</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div> -->

</div>



<div class="time">
    <h3>租屋期限共</h3>
    <h3 class="year-month">年/月</h3>
</div>


<!-------------------total time--------- -->
<div class="total_container">
    <div class="year">
        <div class="totalYear_container">
            <p id="totalYear"></p>
        </div>
        <h3>年</h3>
        <div class="totalMonth_container">
            <p id="totalMonth"></p>
        </div>
        <h3>月</h3>
    </div>
</div>

<!------------------button--------- -->
<div class="c_button_section">
    <div class="c_button_left">
        <button class="pc-button-FEAC00-180 z_phone-button-162">清除資料</button>
    </div>
    <div class="c_button_right">
        <button class="pc-button-F4F4F4-180 z_phone-button-162"><a href="contract02.php" style="text-decoration:none; color:#0E2E3D;">送出</a></button>
        
    </div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>



<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(".c-dropdown_container").click(function() {
        $(this).find(".dropdown_list").toggle()
        $(this).find("img").toggleClass("downArrow")
    })


    const $record = $('#record');

    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            // $record.text(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

            let firstDay = parseInt(start.format('DD'));
            let endDay = parseInt(end.format('DD'));

            let Year = parseInt(end.format('YYYY') - parseInt(start.format('YYYY')));
            let Month = parseInt(end.format('MM') - parseInt(start.format('MM')));
            // 當月大於0
            if (Month > 0) {
                // 判斷 迄日 是否大於 起日 (是否多天數)
                if (endDay > firstDay) {
                    // 若有月+1
                    Month = Month + 1;
                }
                // 有 輸出月+1       沒有 直接輸出月
                $("#totalMonth").text(Month)
            } else {
                // 當月小於0 還是算一個月 =1
                $("#totalMonth").text(1)
            }

            if (Year > 0) {
                $("#totalYear").text(Year)
            } else {
                $("#totalYear").text("")
            }
        });
    });
</script>

<?php include __DIR__ . './part/javascript.php'  ?>