<?php
require './part/connect-db.php';




$sql = "SELECT * FROM `members` WHERE `sid` = 11;";
$stmt = $pdo->query($sql);
$n = $stmt->fetch();





?>


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
    width: 49.98%;
    height: 2px;
    background-color: #f2ae00;
}


/* ---------------section content------------- */

.c_container_content {
    max-width: 1280px;
    width: 100%;
    padding: 0 25px;
    margin: auto;

}

.c_content_box {
    width: 1000px;
    height: 500px;
    background-color: white;
    margin: auto;
    padding: 20px 20px;
    overflow: hidden;
    overflow-y: scroll;
}

.c_scroll-object {
    color: #0E2E3D;
    padding: 20px 20px;
    font-size: 16px;
}

.c_content_box::-webkit-scrollbar {
    background: #E0F1FC;

}

.c_content_box::-webkit-scrollbar-thumb {
    background: #5D8DC1;
}

.c_content_box::-webkit-scrollbar-thumb:hover {
    background: hsla(211, 45%, 56%, 0.766)
}

@media screen and (max-width:376px) {
    .c_content_box::-webkit-scrollbar {
        width: 3px;
    }
}

/*---------------- button-------- */




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
    margin: 90px 0 60px 0;
}

.c_button_right {
    margin-left: 30px;
}

.footer_container {
    margin-top: 60px;
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
        padding: 10px 25px;
    }

    .c_scroll-object {
        word-break: break-all;
    }

    .c_content_box {
        width: auto;
    }

    .c_container_stepbar {
        margin-top: 110px;
    }

    .c_button_section {
        padding: 0 20px;
        width: 100%;
    }

    .c_button_left {
        width: 100%;
    }

    .z_full_btn {
        width: 100%;
    }

    .sign {
        width: 50%;
        height: 50%;
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
    <p>Step5. 契約預覽</p>
    <div class="c_progress2">
        <div class="c_progress-bar2"></div>
    </div>
</div>

<!---------------section content---------------->
<div class="c_container_content">
    <div class="c_content_box">
        <div class="c_scroll-object">
            房屋租賃契約書<br><br>
            出 租 人： Little House (以下簡稱甲方)
            <br>
            <br>
            承 租 人： 小皇子 (以下簡稱乙方)
            <br><br>
            因房屋租賃事件，訂立本契約，雙方同意之條件如下： <br><br>
            第一條：房屋所在地及使用範圍：
            房屋標示： 台北(市)_板橋_（鎮、市、區）__街_中山（路）一_段__巷__弄_161_號__樓。
            <br>
            租賃範圍： （一）房屋: 部分：第_3_層 房間_B_，
            面積 30 坪
            <br><br>
            第二條：租賃期限：
            租賃期間自西元 2022 年06 月08 日起 至西元 2023年07 月 08日止。
            <br><br>

            第三條：租金：
            1、每月租金新台幣 $20,000 元整，每月 10 日以前繳納。

            2、保證金(押金) 新台幣 元整，於租賃期滿交還房屋時無息返還。保證金（押金）由租賃雙方約定為_二_個月租金，
            金額為 $20,000 元整 (最高不得超過二個月房屋租金之總額)。
            乙方應於簽訂本契約之同 時給付甲方。 前項保證金(押金) ，甲方應於租期屆滿或租賃契約終止，承租人交還房屋時返還之。

            <br><br>
            第四條：使用租賃物之限制：
            房屋不得供非法使用，或存放危險物品影響公共安全。
            房屋有改裝之必要，乙方取得甲方之同意後得自行裝設，
            但不得損害原 有建築，乙方於交還房屋時並應負責回復原狀。
            <br><br>
            第五條：違約處罰：
            1、乙方違反約定方法使用房屋，或拖欠租金達兩個月以上，其租金約定於 每期開始支付者，並應於遲延給付二個月時，經甲方催告限期繳納仍不 支付時，不待期限屆滿，甲方得終止租約。
            2、乙方於終止租約或租賃期滿不交還房屋，自終止租約或租賃期滿之翌日 起，乙方應支付按房租壹倍計算之違約金。
            <br><br>
            第六條：其他特約事項：
            1、房屋之捐稅由甲方負擔；有關水電費、瓦斯費、大樓管理費及營業必須 繳納之捐稅，則由乙方自行負擔。 2、乙方遷出時，如遺留傢具雜物不搬者，視為放棄，應由甲方處理，費用 由乙方負擔。
            3、雙方如覓有保證人，與被保證人負連帶保證責任。 4、契約租賃期限未滿，一方擬終止本合約時，應得他方同意，並應預先於 終止前壹個月以書面通知他方，並應賠償他方相當於壹個月租金額之損 害金。
            5、甲、乙雙方就本合約有關履約事項之通知、催告送達或為任何意思表示， 均以本合約所載之地址為準，若有送達不到或退件者、悉以第一次郵寄 日期為合法送達日期，雙方均無異議。
            6、乙方如將公司登記(或個人戶籍)遷入本租屋地址者，應於本租約屆滿時 自動遷出，否則，甲方得向主管機關申報其為空戶。 7、乙方應遵守本件租屋之住戶大樓管理規約及管理委員會之一切決議。<br><br>
            立契約書人<br>
            出租人：Little House<br>
            姓名(名稱)： Little House <br>
            簽章：帝寶<br>
            戶籍地址： 台北市大安區仁愛路三段53號<br>
            通訊地址： 台北市大安區仁愛路三段53號<br>
            聯絡電話：02-2708-9215 <br>
            電子郵件信箱：littlehouse6302@gmail.com
            <br><br>

            承租人 <br>
            姓名(名稱)：小皇子<br>
            <div class="sign_container">
                <p>簽章 ：</p>
                <img src="" alt="" id="sign" style="width:30%;">
            </div>
            戶籍地址： 台北市中正區重慶南路一段122號<br>
            通訊地址： 台北市中正區重慶南路一段122號<br>
            聯絡電話： 0987666888<br>
            電子郵件信箱： littlehouse6302@gmail.com<br>

        </div>
    </div>
</div>

<!---------------------button------------------------->

<div class="c_button_section">
    <div class="c_button_left">
        <a href="contract06.php" style="text-decoration:none;color:#0E2E3D;"><button
                class="pc-button-FEAC00-180 z_full_btn">確認</button></a>

        <a href=""></a>
    </div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>

<script>
$(document).ready(function() {
    let data = localStorage.getItem("sign");
    data = JSON.parse(data);
    $("#sign").attr("src", data)
})
</script>

<?php include __DIR__ . './part/javascript.php'  ?>