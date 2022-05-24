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


/* ---------------section content------------- */

.c_container_content {
    max-width: 1280px;
    width: 100%;
    padding: 0 10px;
    margin: 110px auto;
}

/* ---------------------------button--------------------- */

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
    .c_container_stepbar{
        margin-top: 110px;
    }

}
    </style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="c_container_content">
    <div class="c_content_box">
        <div class="c_scroll-object">

<h3>房屋租賃契約書</h3><br><br>
出 租 人：                                    (以下簡稱甲方)
立契約書人<br>
<br>
承 租 人：                                    (以下簡稱乙方) 


因房屋租賃事件，訂立本契約，雙方同意之條件如下： <br><br>
第一條：房屋所在地及使用範圍： 
房屋標示： __縣(市)__鄉（鎮、市、區）__街（路）__段__巷 __弄__號__樓。 
<br>
租賃範圍： （一）房屋□全部□部分：第__層   □房間，
面積__平方公尺
<br><br>
第二條：租賃期限：
租賃期間自西元   年   月   日起   至西元   年   月    日止。 
<br><br>

第三條：租金：
1、每月租金新台幣 元整，每月 日以前繳納。 

租金支付方式：□轉帳繳付：金融機構：____，戶 名：____，帳號：____。□其他：____。 

2、保證金(押金) 新台幣 元整，於租賃期滿交還房屋時無息返還。保證金（押金）由租賃雙方約定為___個月租金，
金額為           元整 (最高不得超過二個月房屋租金之總額)。
乙方應於簽訂本契約之同 時給付甲方。 前項保證金(押金) ，甲方應於租期屆滿或租賃契約終止，承租人交還房屋時返還之。

租金支付方式：□現金繳付□轉帳繳付：金融機構：____，戶 名：____，帳號：____。□其他：____。 
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
1、房屋之捐稅由甲方負擔；有關水電費、瓦斯費、大樓管理費及營業必須 繳納之捐稅，則由乙方自行負擔。 2、乙方遷出時，如遺留傢具雜物不搬者，視為放棄，應由甲方處理，費用 由乙方負擔。 3、雙方如覓有保證人，與被保證人負連帶保證責任。 4、契約租賃期限未滿，一方擬終止本合約時，應得他方同意，並應預先於 終止前壹個月以書面通知他方，並應賠償他方相當於壹個月租金額之損 害金。 5、甲、乙雙方就本合約有關履約事項之通知、催告送達或為任何意思表示， 均以本合約所載之地址為準，若有送達不到或退件者、悉以第一次郵寄 日期為合法送達日期，雙方均無異議。 6、乙方如將公司登記(或個人戶籍)遷入本租屋地址者，應於本租約屆滿時 自動遷出，否則，甲方得向主管機關申報其為空戶。 7、乙方應遵守本件租屋之住戶大樓管理規約及管理委員會之一切決議。<br><br>
立契約書人<br> 
出租人：<br> 
姓名(名稱)：  <br>
簽章：<br>
戶籍地址： <br>
通訊地址： <br>
聯絡電話： <br>
電子郵件信箱：<br> <br> 
 
承租人： <br>
姓名(名稱)： <br>
簽章 ：<br>
戶籍地址： <br>
通訊地址： <br>
聯絡電話： <br>
電子郵件信箱： <br><br> 

西元    年    月   日 

        </div>
    </div>
</div>
<?php include __DIR__ . './part/footer.php'  ?>

<?php include __DIR__ . './part/javascript.php'  ?>