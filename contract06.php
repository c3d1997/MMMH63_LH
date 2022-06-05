<?php
    require './part/connect-db.php';
?>
<?php include __DIR__ . './part/head.php'  ?>
<style>
body{
    margin: 0px;
}


.c_container_stepbar{
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
    transform:translateX(-50%);
    margin-top: 40px;
}
.z_radio {
    position: relative;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #b1b1b1;
    left: 50%;
    transform:translateX(-50%);
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
    background-color:#b1b1b1;
    bottom: 11px;
}
.z_progress_bar_step1 {
    z-index: -1;
    position: absolute;
    width: 10%;
    height: 1px;
    background-color:#ffae00;
    bottom: 11px;
}
.z_progress_bar_step2 {
    z-index: -1;
    position: absolute;
    width: 30%;
    height: 1px;
    background-color:#ffae00;
    bottom: 11px;
}
.z_progress_bar_step3 {
    z-index: -1;
    position: absolute;
    width: 52%;
    height: 1px;
    background-color:#ffae00;
    bottom: 11px;
}
.z_progress_bar_step4 {
    z-index: -1;
    position: absolute;
    width: 70%;
    height: 1px;
    background-color:#ffae00;
    bottom: 11px;
}
.z_progress_bar_step5 {
    z-index: -1;
    position: absolute;
    width: 100%;
    height: 1px;
    background-color:#ffae00;
    bottom: 11px;
}
.z_barcontainer {
    width: 100%;
    display: flex;
    justify-content: space-around;
}
/*---------step-bar2 --------*/
.c_step-bar2{
    width: 100%;
    max-width: 1280px;
    margin: auto;
    padding: 0px 25px; 
}

.c_step-bar2 p{
    width: 100%;
    font-weight: normal;
    font-size: 32px;
    color: #0E2E3D;
    font-weight: bold;
}
.c_progress2{
    width: 100%;
    margin-top: 30px;
    height: 2px;
    background-color: #E0F1F3;
}
.c_progress-bar2{
    width: 100%;
    height: 2px;
    background-color: #f2ae00;
}


/* ---------------section contract finish------------- */
.c_container_finish{
    
    width: 100%;
    padding: 0 25px;
    margin-top: 40px;
    text-align: center;
    
}
.c_finish_text{
    width: 100%;
    color: #0E2E3D;
    margin: auto;
    padding: 20px 20px;
    

}

/* ---------------------------button--------------------- */
.c_button_section{
    display: flex;
    margin: 40px auto 60px;
    justify-content: center;
}

.c_button_right{
    margin-left: 10px;
}
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
    
}


/* -----------------手機-------------- */
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
    .c_container_stepbar{
        margin-top: 110px;
    }

    .c_finish_text h3{
        font-size: 12px;
        color: #0E2E3D;
    }
    .c_button_right{
        margin-left: 0px;
    }
    .pc-button-FEAC00-180{
        width: 162.5px;
        height: 45px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 20px;
        border: none;
        background-color: #FEAC00;
    }
    .pc-button-F4F4F4-180{
        width: 162.5px;
        height: 45px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 20px;
        border: none;
        background-color: #F1EDEA;
    }
    .c_button_section {
        padding: 0 20px;
        justify-content: space-between;
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
    <p>Step6. 契約完成</p>
    <div class="c_progress2">
        <div class="c_progress-bar2"></div>
    </div>
</div>

<!---------------section finish---------------->
<div class="c_container_finish">
<div class="c_finish_text">
<h3>恭喜您 已完成契約流程 ! <br>
合約將於48小時內完成審核完畢。<br>
請耐心等候 ，契約完成後將會自動存入會員區， 您可會員區隨時查看進度。<br>如有任何問題請點擊如有任何問題請點擊聯絡客服</h3>
</div>
</div>

<!---------------------button------------------------->

<div class="c_button_section">
<div class="c_button_left">
<a href="contract05.php"><button class="pc-button-FEAC00-180" style="background-color:#F1EDEA;">返回</button></a>


</div>
<div class="c_button_right">
<a href="pay_way.php"style="text-decoration:none; color:#0E2E3D;"><button class="pc-button-FEAC00-180">前往付款</button></a>


</div>
</div>
<?php include __DIR__ . './part/footer.php'  ?>
<script>
        // 自己頁面的script
    </script>

<?php include __DIR__ . './part/javascript.php'  ?>