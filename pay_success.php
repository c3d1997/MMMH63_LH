<?php
$title = '付款成功'
?>

<?php include __DIR__ . './part/payhead.php'  ?>
<?php include __DIR__ . './part/nav.php'  ?>

<section class="z_section">
        <div class="z_paycontainer">
            <div class="z_progress">
                <div class="z_progress_text">
                    <ul class="z_barcontainer">
                        <li>
                            <h3 class="bold">選擇租屋</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">確定租屋資訊</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">線上合約</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">確認付款</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                        <li>
                            <h3 class="bold">租屋完成</h3>
                            <div class="z_radio_finish"></div>
                        </li>
                    </ul>
                </div>
                <div class="z_progress_bar"></div>
                <div class="z_progress_bar_step5"></div>
            </div>
            <div class="z_paydata_container z_margin-center ">
                <div class="z_pay_success_container">
                    <h1 class="z_pay_success_title">付款成功</h1>
                    <div class="z_pay_success_tip_container">
                        <p class="z_pay_success_tip">提醒您！付款成功後即可來店取鑰</p>
                        <p class="z_pay_success_tip">感謝您的租賃</p>
                    </div>
                    <div class="z_twobtn z_btn_reverse">
                        <button class="pc-button-F4F4F4-180 z_phone_162 ">返回</button>
                        <button class="pc-button-FEAC00-180 z_phone_162 ">查看明細</button>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include __DIR__ . './part/javascript.php'  ?>
<?php include __DIR__ . './part/footer.php'  ?>