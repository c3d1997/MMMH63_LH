<?php include __DIR__ . './part/head.php'  ?>
<style>
    body {
        margin: 0px;
    }


    .c_container_stepbar {
        width: 100%;
        max-width: 1280px;
        margin: 160px auto 0 auto;
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
    .c_step-bar2 {
        width: 100%;
        max-width: 1280px;
        margin: auto;
        padding: 25px 25px;
    }

    .c_step-bar2 p {
        width: 100%;
        font-weight: normal;
        font-size: 32px;
        color: #0E2E3D;
        font-weight: bold;
    }

    .c_progress2 {
        width: 100%;
        margin-top: 30px;
        height: 2px;
        background-color: #E0F1F3;
    }

    .c_progress-bar2 {
        width: 66.64%;
        height: 2px;
        background-color: #f2ae00;
    }


    /* ---------------section sign------------- */
    .c_container_sign {
        width: 100%;
        max-width: 1280px;
        padding: 0 25px;
        margin: auto auto;
    }

    .c_sign_text::before {
        content: '簽名區 ( 你也可以上傳您的簽名 )';
        font-size: 20px;
        position: absolute;
        transform: translate(-50%);
        opacity: 0.3;
        /* display: none; */
    }

    .c_sign_box {
        max-width: 960px;
        height: 360px;
        background-color: #F1EDEA;
        margin: auto auto;
        position: relative;
        text-align: center;

    }

    .c_sign_text {
        width: 100%;
        text-align: center;
        position: absolute;
        top: 40%;
        opacity: 0.3;
    }


    /* ----------點此上傳----------------- */
    .c_upload_sign {
        width: 100%;
        max-width: 960px;
        padding: 0px 0px;
        margin: 5px auto;
        display: flex;
        justify-content: flex-end;
    }

    .c_upload_heretext {
        margin-left: 10px;
        color: #75BBE3;
    }

    a {
        text-decoration: none;
        color: #75BBE3;

    }

    /* ---------------------------button--------------------- */

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
        background-color: #F4F4F4;
    }

    .c_button_section {
        display: flex;
        justify-content: center;
        margin: 30px 0 60px 0;
    }

    .c_button_right {
        margin-left: 30px;
    }

    #nowimg {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
    }

    #mainUpload {
        display: none;
    }

    @media screen and (max-width:376px) {
        .z_progress {
            display: none;
        }

        .c_progress2 {
            display: none;

        }

        .c_step-bar2 p {
            text-align: center;
        }

        .c_container_stepbar {
            margin-top: 110px;
        }

        .c_container_sign {
            max-width: 375px;
            margin: auto;
            padding: 0 20px;

        }

        .c_sign_box {
            max-width: 375px;
            margin: auto;
            padding: 0 20px;
            background-color: #F1EDEA;
            position: relative;
            text-align: center;
        }

        .c_container_stepbar {
            margin: 110px auto 0 auto;
            width: 375px;
            padding: 0 20px;
        }

        .c_upload_sign {
            padding: 0 20px;
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

        .pc-button-F4F4F4-180 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #F1EDEA;
        }

        .c_button_section {
            display: flex;
            justify-content: space-between;
            margin: 30px auto 60px auto;
            padding: 0 20px;
        }

        .c_button_right {
            margin-left: 10px;
        }

        .container {
            width: 375px;
            margin: auto;
            padding: 0 20px;
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
<div class="c_step-bar2">
    <p>Step4. 契約簽名</p>
    <div class="c_progress2">
        <div class="c_progress-bar2"></div>
    </div>
</div>

<!---------------section sign---------------->

<div class="c_container_sign">
    <div class="c_sign_box">
        <canvas id="myCanvas" width="960" height="360"></canvas>
        <img src="" alt="" id="nowimg">
        <div class="c_sign_text">
        </div>
    </div>


    <!-- ---------------點此上傳------------ -->

    <div class="c_upload_sign">
        <div class="c_upload_icon">
            <a href="#"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.7143 10.9999V13C13.7143 13.5522 13.2025 14 12.5714 14H3.42857C2.7975 14 2.28571 13.5522 2.28571 13V10.9999C2.28571 10.4477 1.77393 9.99992 1.14286 9.99992C0.511786 9.99992 0 10.4477 0 10.9999V13C0 14.6569 1.535 16 3.42857 16H12.5714C14.465 16 16 14.6569 16 13V10.9999C16 10.4477 15.4882 9.99992 14.8571 9.99992C14.2261 9.99992 13.7143 10.4468 13.7143 10.9999ZM7.19286 0.292758L2.62143 4.29281C2.17464 4.68375 2.17536 5.31658 2.62143 5.70689C3.06786 6.09752 3.79107 6.09752 4.2375 5.70689L6.85714 3.41546V9.99992C6.85714 10.5527 7.36821 10.9999 8 10.9999C8.63179 10.9999 9.14286 10.5527 9.14286 9.99992V3.41546L11.7636 5.70861C12.21 6.09924 12.9332 6.09924 13.3796 5.70861C13.8261 5.31798 13.8261 4.68516 13.3796 4.29453L8.80821 0.294477C8.36071 -0.0978721 7.63929 -0.0978721 7.19286 0.292758Z" fill="#75BBE3" />
                </svg></a>
        </div>
        <form action="./contract05.php" method="post">
        <input type="file" id="mainUpload">
        <div class="c_upload_heretext">
            <a id="upload_btn">點此上傳</a>
        </div>
    </div>


    <!-- ---------------------------------點此上傳---------- -->
    
    <div class="c_button_section">
        <div class="c_button_left">
            <button type="button" onclick="clearCanvas()" class="pc-button-FEAC00-180">清除資料</button>
        </div>
        
            <div class="c_button_right">
                <button onclick="saveCanvas()" class="pc-button-F4F4F4-180">送出</button>
            </div>
        </form>
    </div>
    

    <?php include __DIR__ . './part/footer.php'  ?>
    <script>
        const myCanvas = document.querySelector('#myCanvas'),
            pColor = document.querySelector('#pColor'),
            pSize = document.querySelector('#pSize'),
            ctx = myCanvas.getContext('2d');
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';

        const mDown = event => {
            window.addEventListener('mouseup', mUp);
            myCanvas.addEventListener('mousemove', mMove);
            ctx.beginPath();
            ctx.moveTo(event.offsetX, event.offsetY);
        };
        const mUp = event => {
            window.removeEventListener('mouseup', mUp);
            myCanvas.removeEventListener('mousemove', mMove);
        };
        const mMove = event => {
            ctx.lineTo(event.offsetX, event.offsetY);
            ctx.stroke();
        };
        myCanvas.addEventListener('mousedown', mDown);

        // 設置畫筆大小顏色
        const setPen = () => {
            ctx.strokeStyle = black;
            ctx.lineWidth = pSize.value;
        };


        const clearCanvas = () => {
            ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
            $(".c_sign_text").css("display", "block")
            $("#nowimg").css("display", "none")

        };
        const saveCanvas = () => {
            const image = myCanvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
            const view = myCanvas.toDataURL("image/png")
            // location.href = image;

            let a = document.createElement('a');
            a.setAttribute('download', 'draw.png');
            a.setAttribute('href', image);
            a.click();
            localStorage.setItem("sign",JSON.stringify(view))
        };
        $("#myCanvas").mousedown(function() {
            $(".c_sign_text").css("display", "none")
        })


        $("#upload_btn").click(function() {
            $("#mainUpload").click()
            $("#nowimg").css("display", "block")
            $(".c_sign_text").css("display", "none")
        })
        $("#mainUpload").change(function() {
            console.log(this);
            readURL(this);
            $(".uploadimg_before").css("background", "#eef1f47c")
        });
        // smallcontainer = $(".smallimg")
        // console.log(smallcontainer); 

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#nowimg").attr('src', e.target.result);
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
        $(".z_close_icon").click(function() {
            $(this).next().removeAttr("src")
        })
    </script>
    <?php include __DIR__ . './part/javascript.php'  ?>