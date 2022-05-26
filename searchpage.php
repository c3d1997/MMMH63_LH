<!-- 關鍵字搜尋 -->
<div class="x-search">
    <div class="container">
        <div class="x-search-all">
            <div class="x-search-options">
                <button class="pc-button-FEAC00-272">關鍵字搜尋</button>
                <button class="pc-button-F4F4F4-272">進階搜尋</button>
            </div>
            <div class="x-search-keyword-input">
                <input class="x-search-input-setting" type="text" name="name" placeholder="關鍵字搜尋">

                <svg width="30" height="30" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.647 24.3125C20.1698 24.3125 24.647 19.8353 24.647 14.3125C24.647 8.78965 20.1698 4.3125 14.647 4.3125C9.12413 4.3125 4.64697 8.78965 4.64697 14.3125C4.64697 19.8353 9.12413 24.3125 14.647 24.3125Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M27.147 26.8125L21.7095 21.375" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
            <div action="" id="search_form" onchange="check()";>
                <div class="x-search-price-bar ">
                    <input type="text" class="js-range-slider" name="price" value="" data-type="double" data-min="5000" data-max="50000" data-step="500" />
                </div>
                <div class="x-search-price-switch ">
                    <div class="x-search-price-switch-onoff">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0" checked>
                        <label class="onoffswitch-label" for="myonoffswitch"></label>
                    </div>
                    <div>
                        <h3>彈性價錢</h3>
                    </div>
                </div>
                <div class="x-hidden-DisplayNone">
                    <form action="search_list.php" method="GET">
                        <div class="x-hidden-scroll-bar">
                            <div class="x-search-ex">

                                <!-- 租屋類型---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            租屋類型
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap">
                                            <button class="x-button-only" name="rentaltype" type="button">
                                                <p>
                                                    共生
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="rentaltype" type="button">
                                                <p>
                                                    分租
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="rentaltype" type="button">
                                                <p>
                                                    不限分類
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- 地區---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            地區
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                            <button class="x-button-only" name="area" type="button">
                                                <p>
                                                    新北
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="area" type="button">
                                                <p>
                                                    台北
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="area" type="button">
                                                <p>
                                                    台中
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="area" type="button">
                                                <p>
                                                    高雄
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- 詳細地區---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            詳細地區
                                            <span>(可複選)</span>
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    板橋區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    三重區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    中和區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    永和區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    新莊區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    新店區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    土城區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    蘆洲區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    樹林區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    汐止區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    鶯歌區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    三峽區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    淡水區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    瑞芳區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    五股區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    泰山區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    林口區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    深坑區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    石碇區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    坪林區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    三芝區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    石門區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    八里區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    平溪區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    雙溪區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    貢寮區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    金山區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    萬里區
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="dist" type="button">
                                                <p>
                                                    烏來區
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- 房型---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            房型
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap">
                                            <button class="x-button-only rentaltype" name="roomtype" type="button" value="套房">
                                                <p>
                                                    套房
                                                </p>
                                            </button>
                                            <button class="x-button-only rentaltype" name="roomtype" type="button" value="雅房">
                                                <p>
                                                    雅房
                                                </p>
                                            </button>
                                            <button class="x-button-only rentaltype" name="roomtype" type="button" value="整層">
                                                <p>
                                                    整層
                                                </p>
                                            </button>
                                            <button class="x-button-only rentaltype" name="roomtype" type="button" value="不限房型">
                                                <p>
                                                    不限房型
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- 房間數量---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            坪數
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap">
                                            <button class="x-button-only" name="ping_number" type="button">
                                                <p>
                                                    1 - 5 坪
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="ping_number" type="button">
                                                <p>
                                                    5 - 10 坪
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="ping_number" type="button">
                                                <p>
                                                    10 - 15 坪
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="ping_number" type="button">
                                                <p>
                                                    15 - 20 坪
                                                </p>
                                            </button>
                                            <button class="x-button-only" name="ping_number" type="button">
                                                <p>
                                                    不限坪數
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <!-- 特色---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            特色<span>(可複選)</span>
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                            <button class="x-button-more" name="feature" type="button">
                                                <p>
                                                    限女性
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="feature" type="button">
                                                <p>
                                                    可開伙
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="feature" type="button">
                                                <p>
                                                    可養寵物
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- 設備---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            設備
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                            <button class="x-button-only" name="equipment" type="button">
                                                <p>
                                                    有附傢俱
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- 公設---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            公設<span>(可複選)</span>
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                            <button class="x-button-more" name="postulate" type="button">
                                                <p>
                                                    陽台
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="postulate" type="button">
                                                <p>
                                                    電梯
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="postulate" type="button">
                                                <p>
                                                    交誼廳
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="postulate" type="button">
                                                <p>
                                                    廚房
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- 其他費用---------------------------------------------------------------- -->
                                <div class="x-search-ex-both">
                                    <div class="x-search-ex-title">
                                        <h3>
                                            額外費用<span>(可複選)</span>
                                        </h3>
                                    </div>
                                    <div class="x-search-ex-tag">
                                        <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                            <button class="x-button-more" name="" type="button">
                                                <p>
                                                    水電費
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="" type="button">
                                                <p>
                                                    網路費
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="" type="button">
                                                <p>
                                                    第四台
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="" type="button">
                                                <p>
                                                    清潔費
                                                </p>
                                            </button>
                                            <button class="x-button-more" name="" type="button">
                                                <p>
                                                    停車費
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="x-search-button">
                            <button class="pc-button-F4F4F4-180 x-button-clear" type="button">重選</button>
                            <button id="x-select-btn" class="pc-button-FEAC00-180" type="button" onchange="check()">開始搜尋</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>