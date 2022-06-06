<?php
require './part/connect-db.php';


$sql = "SELECT * FROM `members` WHERE `sid` = 11;";
$stmt = $pdo->query($sql);
$n = $stmt->fetch();


?>
<?php include __DIR__ . './part/head.php'  ?>

<style>
    .c-content-mobile {
        width: 100%;
        margin: 140px 0 60px 0;
        text-align: center;
    }

    .c-content {

        width: 100%;
        border: 2px solid black;
        align-items: center;
        display: flex;
        min-height: 400px;
        margin: 10px auto 20px;
    }

    .text {
        margin: 5px auto 5px;
        width: 100%;
        min-height: 354px;
        text-align: left;
    }

    .text p:nth-child(1) {
        margin: 20px auto 20px;
        text-align: center;
    }

    .c_button_section {
        margin-bottom: 60px;
        text-align: center;
    }
</style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="container">
    <div class="c-content-mobile">
        <h3>契約內容</h3>
        <div class="c-content">
            <div class="text">
                <p>服務條款</p>
                <p>
                    房屋租賃契約書<br><br>
                    出 租 人： (以下簡稱甲方)
                    <br>
                    立契約書人
                    <br>
                    承 租 人： (以下簡稱乙方)


                    因房屋租賃事件，訂立本契約，雙方同意之條件如下： <br><br>
                    第一條：房屋所在地及使用範圍：
                    房屋標示： 房屋標示： 台北(市)_板橋_（鎮、市、區）__街_中山（路）一_段__巷__弄_161_號__樓。
                    <br>
                    租賃範圍： 一）房屋: 部分：第_3_層 房間_B_， 面積 30 坪
                    面積__平方公尺
                    <br><br>
                    第二條：租賃期限：
                    租賃期間自西元 2022 年 06 月 08 日起 至西元 2023 年 07 月 08 日止。
                    <br><br>

                    第三條：租金：
                    1、每月租金新台幣 20 000 元整，每月10 日以前繳納。

                    2、保證金(押金) 新台幣 20 000 元整，於租賃期滿交還房屋時無息返還。保證金（押金）由租賃雙方約定為_二_個月租金，
                    金額為 元整 (最高不得超過二個月房屋租金之總額)。
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
                    6、乙方如將公司登記(或個人戶籍)遷入本租屋地址者，應於本租約屆滿時 自動遷出，否則，甲方得向主管機關申報其為空戶。
                    7、乙方應遵守本件租屋之住戶大樓管理規約及管理委員會之一切決議。<br><br>
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
                    <!-- 姓名(名稱)： <?= $n['name'] ?><br> -->
                <!-- <div class="sign_container">
                    <p>簽章 ：</p>
                    <img src="" alt="" id="sign" style="width:30%;">
                </div> -->
                戶籍地址： 台北市中正區重慶南路一段122號<br>
                通訊地址： 台北市中正區重慶南路一段122號<br>
                聯絡電話： 0987666888<br>
                <!-- 聯絡電話： <?= $n['mobile'] ?><br> -->
                電子郵件信箱： littlehouse6302@gmail.com<br>
                <!-- 電子郵件信箱： <?= $n['email'] ?><br> -->
                

                西元 2022 年 06 月 08 日
                </p>
            </div>
        </div>

    </div>
</div>