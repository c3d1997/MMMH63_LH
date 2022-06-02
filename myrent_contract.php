<?php include __DIR__ . './part/head.php'  ?>

    <style>
.c-world {
    display: flex;
    width: 100%;
    min-height: 911px;
    justify-content: space-between;
    margin-top: 190px;
    margin-bottom: 60px;

}

/* 左邊選單開始 */
.c-mylist {
    text-align: center;
}

.c-list {
    text-decoration: none;
    list-style: none;
    margin-bottom: 30px;
}

.c-list a {
    text-decoration: none;
    opacity: 0.5;
}

.c-list a:hover {
    text-decoration: none;
    opacity: 1;
}
.c-list-active{
            text-decoration: none;
            list-style: none;
            margin-bottom: 30px;
        }
.c-list-active a{
            text-decoration: none;
            list-style: none;
            margin-bottom: 30px;
        }
@media screen and (max-width:376px){
    .c-mylist{
        display: none;
    }
    
}
/* 左邊選單結束 */


/* 右邊標題開始 */
.c-mytitle {
    max-width: 1053px;
    width: 100%;
}

@media screen and (max-width:376px){
    .c-mytitle {
        max-width: 376px;
        text-align: center;
    }
    .c-mytitle h3 {
        margin-top: -110px;
        font-size: 20px; 
    }
    .c-table{
        display: none;
    }
}



/* --------------------我的租屋------------ */

.c-table {
    max-width: 1053px;
    width: 100%;
}

.content-table {
    border-collapse: collapse;
    margin: 30px 0px;
    width: 100%;
    max-width: 1053px;
    overflow: hidden;
    text-align: center;
}

.content-table thead tr {
    background-color: #FEAC00;
}

.content-table th,
.content-table td {
    padding: 25px 25px;
    width: 208px;

}

.content-table tbody tr {
    /* border-bottom: 1px solid #dddddd; */
}

.content-table tbody tr a{
    text-decoration: none;
}
.c-icon{
    margin-left: 5px;
}

.check{
    color:#FF0000;  
}

.content-table tbody tr:nth-of-type(odd) {
    background-color: #F1EDEA;
}

.content-table tbody tr:last-of-type {
    /* border-bottom: 2px solid #009879; */
}

.content-table tbody tr.active-row {
    /* font-weight: bold; */
}


/* 右邊標題結束 */

/* --------------------pages--------------- */
.c-pages {
    text-align: center;
}

ul.pagination {
    display: inline-block;
}

ul.pagination li {
    display: inline;
}
ul.pagination li a {
    color: black;
    float: left;
    padding: 10px 20px;
    text-decoration: none;
    opacity: 0.5;
}

ul.pagination li a:hover{
    opacity: 1;
}

/* --------------------pages---------------- */
@media screen and (max-width:376px){
    .c-pages{
        display: none;
    }
}


/* -----------------------手機板的下拉------- */

.flip {
    margin: 0px;
    padding: 10px;
    text-align: left;
    background: #F1EDEA;
    cursor: pointer;
    text-align: left;
    display: none;
}

.panel {
    margin: 0px;
    padding: 15px;
    text-align: center;
    background: #F1EDEA;
    border: solid 1px #000000;
    display: none;
}


@media screen and (max-width:376px){
    .flip{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 5px;
    }
    .panel{
        flex-direction: column;
        text-align: left;
    }
    .panel a{
        color: #5D8DC1;
        margin-left: 10px;
        text-decoration: none;
    }

    .panel span{
        color: red;
    }
    }

/* --------------------手機板的下拉------- */

    </style>

<?php include __DIR__ . './part/nav.php'  ?>

<div class="container">


<div class="c-world">

    <!-- 左邊選單開始 -->
    <div class="c-mylist">
        <ul>
            <li class="c-list">
                <a href="personal-data.php">
                    <h3>會員資料</h3>
                </a>
            </li>
            <li class="c-list"><a href="house_post.php">
                    <h3>刊登物件</h3>
                </a></li>
            <li class="c-list"><a href=""myrent_house.php">
                    <h3>我的租屋</h3>
                </a> </li>
            <li class="c-list"><a href="mycollection_list.php">
                    <h3>我的收藏</h3>
                </a></li>
            <li class="c-list"><a href="promo.php">
                    <h3>我的優惠</h3>
                </a> </li>
            <li class="c-list"><a href="house_reserve.php">
                    <h3>我的預約</h3>
                </a> </li>
            <li class="c-list-active"><a href="myrent_contract.php">
                    <h3>租屋契約</h3>
                </a></li>
            <li class="c-list"><a href="myrent_fee.php">
                    <h3>租金支付</h3>
                </a> </li>
            <li class="c-list"><a href="clean_reserve.php">
                    <h3>清潔服務</h3>
                </a> </li>
        </ul>
    </div>
    <!-- 左邊選單結束 -->


    <!-- 右邊開始 -->
    <div class="c-mytitle">
        <h3>租屋契約</h3>

        <!-- --------------手機板的下拉--- -->

        <div class="flip">
            <p>士林夜市近士林劍潭捷運小套房</p>
            <img src="../imgs/down-arrow.svg" alt="">

        </div>
        <div class="panel" hidden>
            <p>狀態 : <span>待審核</span>
            <p>合約內容 : <a href="myrent_contract02.php">點擊查看</a>
                <a href="">下載</a>
            </p>
        </div>


        <!-- 2 -->
        <div class="flip">
            <p>士林夜市近士林劍潭捷運小套房</p>
            <img src="../imgs/down-arrow.svg" alt="">

        </div>
        <div class="panel" hidden>
            <p>狀態 : <span>待審核</span></p>
            <p>合約內容 : <a href="myrent_contract02.php">點擊查看</a>
                <a href="">下載</a>
            </p>
        </div>

        <!-- 3 -->
        <div class="flip">
            <p>士林夜市近士林劍潭捷運小套房</p>
            <img src="../imgs/down-arrow.svg" alt="">

        </div>
        <div class="panel" hidden>
            <p>狀態 : <span>待審核</span>
            <p>合約內容 : <a href="myrent_contract02.php">點擊查看</a>
                <a href="">下載</a>
            </p>
        </div>


        <!-----------------------手機板的下拉-------- -->


        <div class="c-table">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>
                            <p>物件名稱</p>
                        </th>
                        <th>
                            <p>狀態</p>
                        </th>
                        <th>
                            <p>合約內容</p>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>士林夜市近士林劍潭捷運小套房</p>
                        </td>
                        <td>
                            <p class="check">待審核</p>
                        </td>
                        <td>
                                <iframe src="myrent_contract02.php" style="display:none;" name="frame"><img src="../imgs/print_icon.svg" alt=""></iframe>
                                <button type="button" onclick="frames['frame'].print()"><img src="./imgs/printer.svg" alt=""></button>
                        </td>
                    </tr>

                    <tr class="active-row">
                        <td>
                            <p>士林夜市近士林劍潭捷運小套房</p>
                        </td>
                        <td>
                            <p>已審核</p>
                        </td>
                        <td> 
                            <iframe src="myrent_contract02.php" style="display:none;" name="frame"><img src="../imgs/print_icon.svg" alt=""></iframe>
                            <button type="button" onclick="frames['frame'].print()"><img src="./imgs/printer.svg" alt=""></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>士林夜市近士林劍潭捷運小套房</p>
                        </td>
                        <td>
                            <p>已審核</p>
                        </td>
                        <td> 
                            <iframe src="myrent_contract02.php" style="display:none;" name="frame"><img src="../imgs/print_icon.svg" alt=""></iframe>
                            <button type="button" onclick="frames['frame'].print()"><img src="./imgs/printer.svg" alt=""></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!----------------pages------------------>
        <div class="c-pages">
            <ul class="pagination">
                <li><a href="tryit.asp-filename=trycss_ex_pagination_nav.html#">❮</a></li>

                <li><a href="#">1</a></li>
                <li><a class="active" href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>

                <li><a href="tryit.asp-filename=trycss_ex_pagination_nav.html#">❯</a></li>
            </ul>
        </div>

        <!--------------pages------------------->
    </div>
</div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>

<script>

// $(function () {
//     $(".flip").click(function () {
//         $(".panel").slideToggle("slow");
//         $(".xs1").toggle();
//         $(".xs2").toggle();
//     });
// });


// 改寫
$(function () {
    $(".flip").click(function () {
        console.log((this));
        $(this).next().slideToggle("slow");
        // $(".xs1").toggle();
        // $(".xs2").toggle();
    });
});
</script>

<?php include __DIR__ . './part/javascript.php'  ?>