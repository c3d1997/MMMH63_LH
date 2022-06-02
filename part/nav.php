<div class="nav">
    <div class="container">
        <ul>
            <div class="pc-link">
                <li class="x-log">
                    <a href="search_all.php">搜尋</a>
                </li>
                <li class="x-log">
                    <a href="publish_uploadimgx10.php">
                        刊登房屋
                    </a>
                </li>
            </div>
            <li class="x-log-img">
                <a href=""><img src="imgs/LOGO.svg" alt="">
                </a>
                <a href=""><img src="imgs/phone_logo.png" alt="">
                </a>
            </li>
            <li class="x-log-phone-title">
                <a href="">Little House</a>
            </li>
            <div class="phone-nav-link">
                <li class="x-log x-phone">
                    <a href="search_all.php">
                        搜尋
                    </a>
                </li>
                <li class="x-log x-phone">
                    <a href="publish_uploadimgx10.php">
                        刊登房屋
                    </a>
                </li>
                <li class="x-log">
                    <a href="cleaning_services.php">
                        清潔服務
                    </a>
                </li>

                <?php if (empty($_SESSION['member'])) : ?>
                    <li class="x-log S-nav-login">
                        <a href="sign_signup0530.php">
                            會員登入/註冊
                        </a>
                    </li>

                <?php else : ?>
                    <li class=" x-log" id="S-nav-logout">
                        <a href="personal-data.php">
                            <?= empty($_SESSION['member']['name']) ? $_SESSION['member']['EngName'] : $_SESSION['member']['name'] ?><img src="imgs/down-arrow.svg" alt="">
                            <!-- 個人頁面 -->
                        </a>

                    </li>
                    <div class="x-hidden-personaal x-hidden-click">
                        <a href="../personal-data.php">
                            會員資料
                        </a>
                        <a href="./house_post.php">
                            刊登物件
                        </a>
                        <a href="">
                            我的租屋
                        </a>
                        <a href="mycollection_list.php">
                            我的收藏
                        </a>
                        <a href="promo.php">
                            我的優惠
                        </a>
                        <a href="house_reserve.php">
                            我的預約
                        </a>
                        <a href="">
                            租金支付
                        </a>
                        <a href="">
                            清潔服務
                        </a>
                        <a href="">
                            租屋契約
                        </a>
                    </div>
                    <li class="x-log" id="S-nav-logout2">
                        <a href="logout.php">
                            登出
                        </a>
                    </li>
                <?php endif; ?>
            </div>


        </ul>
        <div class="x-log-show">
            <div class="x-log-show-navbar ">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


    </div>
</div>