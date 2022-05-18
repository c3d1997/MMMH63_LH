<?php 
$title = '租屋明細';
require './part/connect-db.php';

?>

<?php include __DIR__ . './part/payhead.php'  ?>
<?php include __DIR__ . './part/nav.php'  ?>
    <section class="z_section">
        <div class="z_paycontainer ">
            <h2 class="z_pay_detail_title">租屋明細</h2>
            <div class="z_pay_detail_container">
                <div class="z_pay_detail_img">
                    <img src="imgs/item_example.png" alt="">
                </div>
                <div class="z_pay_detail_text">
                    <div class=" z_people_info_container">
                        <h3 class="bold z_detail_mb">租屋人資訊</h3>
                        <p class="z_detail_mb">姓名：里成溪</p>
                        <p class="z_detail_mb">手機：0912-345-678</p>
                        <p>身分證：F123456789</p>
                    </div>
                    <div class="z_pay_info_container">
                        <h3 class="bold z_detail_mb">付款資訊</h3>
                        <p class="z_detail_mb">付款方式：信用卡</p>
                    </div>
                    <div class="z_detail_info_container">
                        <p class="z_detail_cost_phone z_detail_mb">$15,000/月</p>
                        <p class="z_detail_items_name z_detail_mb">士林夜市近士林劍潭捷運小套房</p>
                        <div class="z_detail_mb z_detail_icon_items_center">
                            <img class="z_mr-5" src="imgs/bus.svg" alt="">
                            <span class="z_detail_mb">距離士林捷運站 500 公尺</span>
                        </div>
                        <div class="z_detail_mb z_detail_icon_items_center">
                            <img class="z_mr-5" src="imgs/position.svg" alt="">
                            <span class="z_detail_mb">新北市三重區碧華街 900 號</span>
                        </div>
                        <div class="z_detail_icon_items_center">
                            <img class="z_mr-5" src="imgs/ping.svg" alt="">
                            <span class="z_icon_type_mr z_mr-5">30 坪</span>
                            <img src="imgs/type.svg" alt="">
                            <span class="z_icon_type_mr z_icon_type_nomr z_mr-5">整層住家 6 樓 3房 2 廳 2衛浴</span>
                            <p class="z_detail_cost z_mr-5">$15,000/月</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="z_d_flex z_justify-content_center z_grow " >
                <button class="z_maxbtn pc-button-FEAC00-180 z_phone_162 ">繼續</button>
            </div>
        </div>
    </section>

<?php include __DIR__ . './part/javascript.php'  ?>
<?php include __DIR__ . './part/footer.php'  ?>