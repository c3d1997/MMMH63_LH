<?php
$title = '付款方式'
?>

<?php include __DIR__ . './part/payhead.php'  ?>
<?php include __DIR__ . './part/nav.php'  ?>
    <section class="z_section">
        <div class="z_paycontainer">
            <div class="z_progress ">
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
                            <div class="z_radio"></div>
                        </li>
                    </ul>
                </div>
                <div class="z_progress_bar"></div>
                <div class="z_progress_bar_step4 "></div>
            </div>
            <div class="z_paydata_container ">
                <div class="z_paytitle_container">
                    <h3 class="paytitle bold">租金支付</h3>
                    <p class="z_paytitle_detail">我的租屋_XXXXXXXXX</p>
                </div>
                <div class="z_title_data_container">
                    <div class="z_chebox_intput">
                        <p class="z_checkbox_option ">付款方式</p>
                            <div class="z_check_container">
                                <div class="z_checkbox_container">
                                    <label class="option_bank_container">
                                        <input class="" type="checkbox" value="bank" name="" id="payBank" >
                                        <span>匯款</span>
                                    </label>
                                    <label class="option_card_container">
                                        <input class="" type="checkbox" value="creditcard" name="" id="payCard" >
                                        <span>信用卡</span>
                                    </label>
                                </div>
                            </div>  
                        <div class="z_payghost"></div>
                    </div>
                    <div class="z_pay_alert">
                        <p class="alert" >!　請選擇付款方式</p>
                    </div>
                    <div class="z_text_intput ">
                        <p class="z_checkbox_option ">付款金額</p>
                        <div class="z_input_container">
                            <input class="z_input_text"   type="text" name="" id="">
                        </div>
                        <div class="z_payghost"></div>
                    </div>
                    <div class="z_pay_alert">
                        <p class="alert" ></p>
                    </div>
                    <div class="z_text_intput ">
                        <p class="z_checkbox_option ">繳費日期</p>
                        <input class="z_input_text" type="text" name="" id=""  >
                        <div class="z_payghost"></div>
                    </div>
                    <div class="z_pay_alert">
                        <p class="alert" ></p>
                    </div>
                    <div class="bank_area" hidden>
                        <div class="z_text_intput ">
                            <p class="z_checkbox_option ">銀行行號</p>
                            <div class="z_paydropdown">
                                <span id="z_bankListBtn">
                                    <div class="z_bank_name">
                                        <span></span>
                                        <span>銀行行號</span> 
                                        <img src="../imgs/down-arrow.svg" alt="">
                                    </div>
                                </span>
                                <div id="z_bankList" class="banklist" hidden>
                                        <p class="" >001-中央信託</p>
                                        <p class="" >006-合庫商銀</p>
                                        <p class="" >007-第一銀行</p>
                                </div>
                            </div>
                            <div class="z_payghost"></div>
                        </div>
                        <div class="z_pay_alert">
                            <p class="alert" >!　請選擇銀行代碼</p>
                        </div>
                        <div class="z_text_intput_last">
                            <p class="z_checkbox_option ">銀行帳號</p>
                            <input class="z_input_text" type="text" name="" id="" placeholder="請輸入銀行帳號">
                            <div class="z_payghost"></div>
                        </div>
                        <div class="z_pay_alert">
                            <p class="alert" >!　銀行帳號格式錯誤</p>
                        </div>
                    </div>
                    <div class="card_area " hidden>
                    <div class="z_text_intput" >
                        <p class="z_checkbox_option ">信用卡號</p>
                        <div class="z_input_small_container">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                            <input class="z_input_small " type="text" name="" id="" placeholder="XXXX">
                        </div>
                        <img class="z_paycard_img" src="imgs/paycard.png" alt="">    
                    </div>
                    <p class="alert z_pay_alert ">!　信用卡號格式錯誤</p>
                    <div class="z_paycard_phone_img">
                        <img src="imgs/paycard.png" alt="">
                    </div>
                        <div class="z_text_intput ">
                            <p class="z_checkbox_option ">有效月年</p>
                            <div class="z_input_medium_container">
                                <input class="z_input_medium" type="text" name="" id="" placeholder="月">
                                <input class="z_input_medium" type="text" name="" id="" placeholder="年">
                            </div>
                            <div class="z_payghost"></div>
                        </div>
                        
                    <p class="alert z_pay_alert">!　有效月年格式錯誤</p>
                        <div class="z_text_intput ">
                            <p class="z_checkbox_option ">　末三碼</p>
                            <div class="z_input_container">
                                <input class="z_input_text" type="text" name="" id="" placeholder="XXX">
                            </div>
                            <img class="z_creditcard_img" src="imgs\creditcardback.png" alt="">
                        </div>

                    <p class="alert z_pay_alert ">!　末三碼格式錯誤</p>
                    <div class="z_creditcard_phone_img">
                        <img src="imgs\creditcardback.png" alt="">
                    </div>
                </div>
                </div>
                
                <div class="z_payagree">
                    <label>
                        <input type="checkbox" name="" id="">
                        <span class="z_all-center">請再次確認您的<a href="#"> 訂單資訊 </a>及<a href="#"> 付款資訊 </a>付款完成後小房子房屋將會發送通知信至您的E-mail信箱</span>  
                    </label>
                </div>
                <div class="z_pay_alert">
                    <p class="alert" >!　請勾選再確認選項</p>
                </div>
                <div class="z_twobtn">
                    <button class="pc-button-F4F4F4-180 z_phone_162 ">清除資料</button>
                    <button class="pc-button-FEAC00-180 z_phone_162 ">確認付款</button>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . './part/javascript_for_pay.php'  ?>
<?php include __DIR__ . './part/footer.php'  ?>