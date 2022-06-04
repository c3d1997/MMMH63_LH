<?php include __DIR__ . './part/head.php'  ?>

<style>
    body {
        background: #F4F4F4;
    }

    .n-nwod {
        width: 100%;
        /* height: 100%; */
        margin-top: 180px;
        margin-bottom: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* outline: 1px solid red; */
    }

    .n-nh1top {
        width: 100%;
        height: 60px;
        margin-bottom: 30px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        /* outline: 1px solid rgb(255, 136, 0); */
    }

    .n-nh1 {
        position: relative;
    }

    .n-nsvg {
        position: absolute;
        height: 47px;
        /* top: -2px; */
        /* right: -60px; */
        display: flex;
        flex-direction: row;
        align-items: center;
        /* outline: 1px solid yellow; */
    }


    /* --------------------------------------------- */

    .n-nhead {
        width: 100%;
        margin-bottom: 30px;
        text-align: center;
        /* outline: 1px solid green; */
    }


    /* --------------------------------------------- */

    .n-nhide {
        width: 100%;
        /* height: 60px; */
        /* margin-bottom: 30px; */
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* outline: 1px solid purple; */
        display: none;
    }


    /* --------------------------------------------- */

    .n-nframe {
        width: 100%;
        /* height: 544px; */
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        align-content: space-between;
        justify-content: space-between;
        /* outline: 1px solid  blue; */
    }

    .n-nframe .x-opc {
        opacity: 1;
    }

    .n-ncader {
        width: 395px;
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        background-color: black;
        transition: .5s;
        /* outline: 1px solid blueviolet; */
    }

    .n-npetur {
        width: 100%;
        height: 211px;
        opacity: .5;
        /* outline: 1px solid purple; */
        cursor: pointer;
    }

    .n-npetur img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .n-ncadrword {
        opacity: .75;
        width: 100%;
        height: 49px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F1EDEA;
        ;
    }


    /* --------------------------------------------- */

    .n-nformwod {
        /* height: 1473px; */
        width: 604px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-end;
        /* outline: 1px solid purple; */
    }

    .n-nformwod input {
        outline: none;
        border: none;
    }

    .n-nformwod input[placeholder] {
        padding-left: 10px;
    }

    .n-nmamu {
        width: 100%;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* outline: 1px solid purple; */
    }

    .n-nffont {
        margin-right: 15px;
    }


    /* 跳錯誤 */

    .n-nOh {
        width: 525px;
        height: 30px;
        font-size: 16px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        color: rgba(255, 0, 0, 1);
        /* outline: 1px solid rgb(197, 183, 55); */
    }


    /* 跳錯誤 */

    .n-inpupu {
        width: 525px;
        height: 60px;
    }

    .n-mmaps {
        width: 522px;
        height: 375px;
        margin-bottom: 10px;
    }

    .n-nmamutwo {
        width: 100%;
        /* height: 60px; */
        display: flex;
        align-items: center;
        /* justify-content: space-between; */
        justify-content: flex-end;
        /* outline: 1px solid purple; */
    }

    .n-nmamutwo input {
        height: 250px;
    }

    .n-nmamu .dropdown_container {
        width: 525px;
    }

    .dropdown_container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .n-nffont.two {
        width: 525px;
        height: 250px;
        margin-right: 0;
    }

    .pc-button-F4F4F4-180 {
        margin-right: 30px;
    }


    /* --------------------------------------------- */

    .n-ntwobutton {
        width: 390px;
        height: 60px;
        margin-top: 30px;
        display: flex;
        justify-content: center;
        justify-content: center;
        /* outline: 1px solid rgb(230, 13, 13); */
    }

    .n-ninb {
        width: 180px;
        height: 60px;
        font-size: 24px;
        border: none;
        list-style: none;
        cursor: pointer;
        background: rgba(254, 172, 0, 1);
        /* outline: 1px solid rgb(197, 183, 55); */
    }

    .n-ninb.nsu {
        background: #F1EDEA;
    }

    .n-nOh p {
        display: none;
    }
    .z_select_dropdown_container {
        flex-grow: 1;
        position: relative;
        display: flex;
    }
    select {
        color: #0E2E3D;
        height: 60px;
        border: none;
        outline: none;
        appearance: none;
        width: 100%;
        font-size: 16px;
        padding-left: 15px;
    }
    select option {
        font-size: 16px;

    }

    /* --------------------------------------------- */

    @media screen and (max-width:376px) {
        .n-nh1top {
            margin-bottom: 20px;
        }

        .n-nwod {
            margin-top: 110px;
        }

        .n-nsvg img {
            height: 30px;
        }

        .nh1 {
            font-size: 24px;
        }

        .n-nhead {
            margin-bottom: 10px;
        }

        .n-nhead h3 {
            font-size: 16px;
        }

        .n-nhide {
            display: block;
        }

        .n-nframe {
            display: none;
        }

        .n-nformwod {
            width: 100%;
        }

        .n-nmamu {
            width: 100%;
        }

        .n-nffont {
            display: none;
        }

        .n-inpupu {
            width: 100%;
            height: 45px;
        }

        .n-nOh {
            width: 100%;
        }

        .n-mmaps {
            width: 335px;
            height: 252px;
            margin-bottom: 10px;
        }

        .n-mmaps iframe {
            width: 335px;
            height: 252px;
        }

        .n-nmamutwo {
            width: 335px;
            height: 230px;
            margin-bottom: 20px;
            display: flex;
            align-items: unset;
            justify-content: unset;
            /* align-items: none; */
        }

        .n-nmamutwo input {
            width: 335px;
        }

        .pc-button-F4F4F4-180 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #F1EDEA;
            margin-right: 10px;
        }

        .pc-button-FEAC00-180 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
        }

        .n-ntwobutton {
            margin-top: 0px;
        }

        .n-nwod {
            margin-top: 100px;
            margin-bottom: 30px;
        }
    }

    .n-nffont.two {
        width: 100%;
        height: 230px;
        /* margin-right: 0; */
    }

    .n-ntwobutton {
        width: 100%;
    }

    .n-ninb {
        width: 162.5px;
    }

    .dropdown_container select {
        color: #0E2E3D;
        height: 60px;
        border: none;
        outline: none;
        appearance: none;
        width: 100%;
        font-size: 16px;
        padding-left: 15px;
    }

    .z_select_dropdown_container .arrow_container {
        top: 50%;
        transform: translateY(-50%);
        right: 15px;
        position: absolute;
        pointer-events: none;
    }
    .downArrow {
        transform: rotateX(180deg);
    }

    /* --------------------------------------------- */
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="container">
    <div class="n-nwod">

        <div class="n-nh1top">


            <div class="n-nsvg">
                <img src="imgs/預約清潔.svg" alt="">
            </div>

        </div>

        <div class="n-nhead">
            <h3>
                1.請先選擇區域（可複選）
            </h3>
        </div>
        <!-- hide -->
        <div class="n-nhide">
            <div class="dropdown_container">
                <button id="areaListBtn">
                    <div class="dropdown">
                        <span>清潔區域</span>
                        <img src="imgs/down-arrow.svg" alt="">
                    </div>
                </button>
                <div id="areaList" class="dropdown_list" hidden>
                    <p class="">廚房</p>
                    <p class="">浴室</p>
                    <p class="">客廳</p>
                    <p class="">臥室</p>
                    <p class="">陽台</p>
                    <p class="">樓梯</p>
                </div>
            </div>
            <div class="n-nOh">
                <p>！錯誤</p>
            </div>
        </div>
        <!-- hide -->
        <!--  -->
        <div class="n-nframe">

            <div class="n-ncader">
                <div class="n-npetur">
                    <img class="" src="imgs/kitchen-2094707_1920.jpg" alt="">
                </div>
                <div class="n-ncadrword">
                    <h3>
                        廚房
                    </h3>
                </div>
            </div>



            <div class="n-ncader">
                <div class="n-npetur">
                    <img class="" src="imgs/condo-3499679_1920.jpg" alt="">
                </div>
                <div class="n-ncadrword">
                    <h3>
                        浴室
                    </h3>
                </div>
            </div>



            <div class="n-ncader">
                <div class="n-npetur">
                    <img class="" src="imgs/indoor-4148898_1920.jpg" alt="">
                </div>
                <div class="n-ncadrword">
                    <h3>
                        客廳
                    </h3>
                </div>
            </div>


            <div class="n-ncader">
                <div class="n-npetur">
                    <img class="" src="imgs/bedroom-6778193_1920.jpg" alt="">
                </div>
                <div class="n-ncadrword">
                    <h3>
                        臥室
                    </h3>
                </div>
            </div>



            <div class="n-ncader">
                <div class="n-npetur">
                    <img class="" src="imgs/building-4961642_1920.jpg" alt="">
                </div>
                <div class="n-ncadrword">
                    <h3>
                        陽台
                    </h3>
                </div>
            </div>



            <div class="n-ncader">
                <div class="n-npetur">
                    <img class="" src="imgs/home-6469864_1920.jpg" alt="">
                </div>
                <div class="n-ncadrword">
                    <h3>
                        樓梯
                    </h3>
                </div>
            </div>



        </div>
        <!--  -->
        <div class="n-nhead">
            <h3>
                2.請選則大約範圍，並填寫詳細資訊
            </h3>
        </div>
        <!--  -->
        <div class="n-nformwod">

            <div class="n-nmamu">
                <p class="n-nffont">坪數大小</p>
                <div class="z_select_dropdown_container">
                    <select id="bankSelect" name=”bankSelect” class="z_select_dropdown">
                        <option selected disabled>--請選擇坪數--</option>
                        <option>1 - 5 坪</option>
                        <option>5 - 10 坪</option>
                        <option>10 - 15 坪</option>
                        <option>15 - 20 坪</option>
                        <option>20 坪以上</option>
                    </select>
                    <div class="arrow_container">
                        <img src="imgs/down-arrow.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <div class="n-nmamu">
                <p class="n-nffont">應繳訂金</p>
                <input class="n-inpupu" type="text" placeholder="應繳訂金" id='money'>
            </div>

            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <div class="n-nmamu">
                <p class="n-nffont">姓名</p>
                <input class="n-inpupu" type="text" placeholder="請填寫您的本名" value="小皇子">
            </div>

            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <div class="n-nmamu">
                <p class="n-nffont">手機</p>
                <input class="n-inpupu" type="text" placeholder="請填寫您的手機" value="0987666888">
            </div>

            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <div class="n-nmamu">
                <p class="n-nffont">地址</p>
                <input class="n-inpupu" type="text" placeholder="請填寫您的地址" value="台北市中正區重慶南路一段122號" id="address">
            </div>

            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <div class="n-mmaps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.825246449343!2d121.50976201432393!3d25.040003944206227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a90a8d497325%3A0x2876dc1b4d647f9!2z5Lit6I-v5rCR5ZyL57i957Wx5bqc!5e0!3m2!1szh-TW!2stw!4v1654287001679!5m2!1szh-TW!2stw" width="522" height="375" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="n-nmamutwo">
                <p class="n-nffont">詳細內容</p>
                <input class="n-inpupu" type="text" placeholder="可詳細描述清潔要求">

            </div>
            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <!--  -->
            <div class="n-nhead">
                <h3>
                    3.請選則繳費方式，並選擇預約日期
                </h3>
            </div>
            <!--  -->
            <div class="n-nmamu">
                <p class="n-nffont">預約日期</p>
                <div class="z_select_dropdown_container">
                    <select id="bankSelect" name=”bankSelect” class="z_select_dropdown">
                        <option selected disabled>--預約日期--</option>
                        <option>2022/06/09</option>
                        <option>2022/06/10</option>
                        <option>2022/06/11</option>
                        <option>2022/06/12</option>
                        <option>2022/06/13</option>
                        <option>2022/06/14</option>
                        <option>2022/06/15</option>
                        <option>2022/06/16</option>
                    </select>
                    <div class="arrow_container">
                        <img src="imgs/down-arrow.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

            <div class="n-nmamu">
                <p class="n-nffont">預約時間</p>
                <div class="z_select_dropdown_container">
                    <select id="bankSelect" name=”bankSelect” class="z_select_dropdown">
                        <option selected disabled>--預約時間--</option>
                        <option>上午9點到11點</option>
                        <option>下午1點到6點</option>
                    </select>
                    <div class="arrow_container">
                        <img src="imgs/down-arrow.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="n-nOh">
                <p>！錯誤</p>
            </div>

        </div>

        <div class="n-ntwobutton">
            <button class="pc-button-F4F4F4-180">清除資料</button>
            <button class="pc-button-FEAC00-180"><a href="cleanpay_way.php" style="text-decoration:none; color:#0E2E3D;">確認送出</a></button>
        </div>



    </div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>

<script>
    $("button").click(function() {
        $(this).next(".dropdown_list").toggle()
        $(this).find("img").toggleClass("downArrow")
    })
    $('.n-ncader').click(function() {
        console.log(1);
        $(this).find('.n-npetur').toggleClass('x-opc');
        $(this).find('.n-ncadrword').toggleClass('x-opc')
    })
    $('.n-ncader').mousedown(function() {
        $(this).css('transform', 'scale(0.95)')
    })
    $('.n-ncader').mouseup(function() {
        $(this).css('transform', 'scale(1)')
    })
    $('.n-ncader').mouseleave(function() {
        $(this).css('transform', 'scale(1)')
    })
    $("select").on({
        mouseleave: function() {
        $(this).next().children().removeClass("downArrow")
    },  
        click: function(){
        $(this).next().children().toggleClass("downArrow")
    }
    })

//  選擇坪數後自動顯示訂金金額
    $('#bankSelect').click(function(){
        $('#money').val('10000')
    })

</script>

<?php include __DIR__ . './part/javascript.php'  ?>