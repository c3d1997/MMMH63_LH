<?php
$pageName = 'searchpage';
$title = '搜尋畫面';
require './part/connect-db.php';


$onesql = "SELECT * FROM items WHERE sid IN (1,2,3,4,5,6,7)";
$onestmts = $pdo->query($onesql);
$one = $onestmts->fetch();

$twosql = "SELECT * FROM items WHERE sid IN (8,9,10,11,12,14,15)";
$twostmts = $pdo->query($twosql);
$two = $twostmts->fetch();

$hresql = "SELECT * FROM items WHERE sid IN (16,17,18,19,20,21,22)";
$hrestmts = $pdo->query($hresql);
$hre = $hrestmts->fetch();
?>

<?php include __DIR__ . './part/searchead.php'  ?>
<!-- 搜尋相關畫面全CSS -->
<style>
    /* 搜尋選單 */
    .x-home-page-scroll-top {
        width: 80px;
        height: 80px;
        /* border: 1px solid; */
        position: fixed;
        right: 4%;
        bottom: 10%;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F4F4F4;
        /* border: 1px solid  #0E2E3D; */
        border-radius: 25%;
        cursor: pointer;
        transition: .5s;

    }


    .x-home-page-scroll-top img {
        object-fit: contain;
        width: 60%;
        transition: .5s;

    }

    .x-home-page-chat {
        width: 80px;
        height: 80px;
        /* border: 1px solid; */
        position: fixed;
        right: 4%;
        bottom: 22%;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F4F4F4;
        /* border: 1px solid  #0E2E3D; */
        border-radius: 25%;
        cursor: pointer;
        transition: .5s;
    }

    .x-home-page-chat a {
        width: 80px;
        height: 80px;
        /* border: 1px solid; */

        display: flex;
        align-items: center;
        justify-content: center;


    }

    .x-home-page-chat img {
        object-fit: contain;
        width: 60%;
        transition: .5s;

    }
    form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .x-search-keyword-input-form {
        flex-direction: row;
    }

    * a {
        text-decoration: none;
        color: #0E2E3D;
    }

    .x-search {
        width: 100%;
        max-width: 1920px;
        height: 100vh;
        max-height: 1080px;
        margin: auto;
        background: url(imgs/spacejoy-YI2YkyaREHk-unsplash\ 1.jpg) no-repeat center/cover;
        padding-top: 320px;
        transition: .5s;
    }

    .x-search-ex-ex {
        width: 100%;
        max-width: 1920px;
        height: 100vh;
        max-height: 1080px;
        margin: auto;
        background: url(imgs/spacejoy-YI2YkyaREHk-unsplash\ 1.jpg) no-repeat center/cover;
        padding-top: 35vh;
    }

    .x-search-all {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .x-search-all-ex {
        margin-top: -180px;
    }

    .x-search-keyword-input {
        border: none;
        width: 100%;
        max-width: 564px;
        height: 70px;
        display: flex;
        align-items: center;
        padding-right: 15px;
        background-color: white;
        margin-bottom: 20px;
        transition: .25s;
    }

    .x-search-options {
        width: 100%;
        max-width: 564px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .x-search-keyword-input input {
        border: none;
        outline: none;
        width: 100%;
        height: 70px;
        font-size: 24px;
        padding-left: 15px;
    }

    .x-search-keyword-input-ex {
        display: none;
    }

    ::placeholder {
        font-weight: bold;
        font-size: 24px;
        color: #0E2E3D;
        opacity: 50%;
    }

    .x-search-keyword-input svg {
        cursor: pointer;
    }

    .x-search-price-bar {
        height: 84px;
        /* border: 1px solid; */
        margin-top: 0px;
        width: 100%;
    }


    /* .x-search-price-bar  */

    .irs--round .irs-handle {
        top: 35px;
        width: 30px;
        height: 30px;
        border: 2px solid #FEAC00;
        background-color: #FEAC00;
        border-radius: 24px;
        box-shadow: 0 1px 3px rgba(0, 0, 255, 0.3);
        cursor: pointer;
    }

    .irs--round .irs-bar {
        top: 45px;
        height: 10px;
        background-color: #75BBE3;
    }

    .irs--round .irs-from,
    .irs--round .irs-to,
    .irs--round .irs-single {
        font-size: 24px;
        font-weight: bold;
        line-height: 1;
        text-shadow: none;
        padding: 4px 10px;
        background-color: #FEAC00;
        color: #0E2E3D;
        border-radius: 18px;
        top: 0px;
    }

    .irs--round .irs-line {
        top: 45px;
        height: 10px;
        background-color: #F2EBE8;
        border-radius: 4px;
    }

    .irs--round .irs-min,
    .irs--round .irs-max {
        color: #111111;
        font-family: 'raleway';
        font-size: 0px;
        top: 0px;
        padding: 3px 5px;
        background-color: rgba(6, 5, 5, 0);
        border-radius: 4px;
    }

    .irs--round .irs-from:before,
    .irs--round .irs-to:before,
    .irs--round .irs-single:before {
        position: absolute;
        display: block;
        content: "";
        bottom: -6px;
        left: 100%;
        width: 0;
        height: 0;
        margin-left: -3px;
        overflow: hidden;
        border: 3px solid transparent;
        border-top-color: #c6A554;
        opacity: 0;
    }

    .irs--round {
        margin: auto;
        width: 1175px;
    }

    @media screen and (max-width:376px) {
        .x-home-page-scroll-top {
            width: 60px;
            height: 60px;
            /* border: 1px solid; */
            position: fixed;
            right: 4%;
            bottom: 10%;
            z-index: 9;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F4F4F4;
            /* border: 1px solid  #0E2E3D; */
            border-radius: 25%;
            cursor: pointer;
            transition: .5s;

        }

        .x-home-page-chat {
            width: 60px;
            height: 60px;
            /* border: 1px solid; */
            position: fixed;
            right: 4%;
            bottom: 22%;
            z-index: 9;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F4F4F4;
            /* border: 1px solid  #0E2E3D; */
            border-radius: 25%;
            cursor: pointer;
            transition: .5s;
        }

        .x-home-page-chat a {
            width: 60px;
            height: 60px;
            /* border: 1px solid; */

            display: flex;
            align-items: center;
            justify-content: center;


        }
        .irs--round .irs-handle {
            top: 38px;
            width: 20px;
            height: 20px;
            border: 2px solid #FEAC00;
            background-color: #FEAC00;
            border-radius: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 255, 0.3);
            cursor: pointer;
        }

        .irs--round .irs-bar {
            top: 45px;
            height: 7px;
            background-color: #75BBE3;
        }

        .irs--round .irs-from,
        .irs--round .irs-to,
        .irs--round .irs-single {
            font-size: 16px;
            font-weight: bold;
            line-height: 1;
            text-shadow: none;
            padding: 4px 10px;
            background-color: #FEAC00;
            color: #0E2E3D;
            border-radius: 18px;
            top: 10px;
        }

        .irs--round .irs-line {
            top: 45px;
            height: 7px;
            background-color: #F2EBE8;
            border-radius: 4px;
        }

        .irs--round .irs-min,
        .irs--round .irs-max {
            color: #111111;
            font-family: 'raleway';
            font-size: 0px;
            top: 0px;
            padding: 3px 5px;
            background-color: rgba(6, 5, 5, 0);
            border-radius: 4px;
        }

        .irs--round .irs-from:before,
        .irs--round .irs-to:before,
        .irs--round .irs-single:before {
            position: absolute;
            display: block;
            content: "";
            bottom: -6px;
            left: 100%;
            width: 0;
            height: 0;
            margin-left: -3px;
            overflow: hidden;
            border: 3px solid transparent;
            border-top-color: #c6A554;
            opacity: 0;
        }

        .irs--round {
            margin: auto;
            width: 305px;
        }
    }


    /* .x-search-price-bar  */

    .x-search-price-switch {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -20px;
        margin-bottom: 10px;
    }

    .x-search-price-switch div h3 {
        font-weight: normal;
    }

    .x-search-price-switch-onoff {
        position: relative;
        width: 54px;
        margin-top: 3px;
        margin-right: 5px;
    }

    .onoffswitch-checkbox {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }

    .onoffswitch-label {
        display: block;
        overflow: hidden;
        cursor: pointer;
        height: 27px;
        padding: 0;
        line-height: 27px;
        border: 2px solid #E3E3E3;
        border-radius: 8px;
        background-color: #FFFFFF;
        transition: background-color 0.3s ease-in;
    }

    .onoffswitch-label:before {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        margin: 0px;
        background: #FFFFFF;
        position: absolute;
        top: 2;
        right: 25px;
        border: 2px solid #E3E3E3;
        border-radius: 27px;
        transition: all 0.3s ease-in 0s;
    }

    .onoffswitch-checkbox:checked+.onoffswitch-label {
        background-color: #75BBE3;
    }

    .onoffswitch-checkbox:checked+.onoffswitch-label,
    .onoffswitch-checkbox:checked+.onoffswitch-label:before {
        border-color: #75BBE3;
    }

    .onoffswitch-checkbox:checked+.onoffswitch-label:before {
        right: 2px;
        top: 1px;
    }

    .x-hidden-DisplayNone {
        height: 0px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: hidden;
        transition: .5s;
    }

    @media screen and (max-width:376px) {
        .x-search {
            width: 100%;
            max-width: 375px;
            height: 100vh;
            max-height: 667px;
            margin: auto;
            background: url(imgs/spacejoy-YI2YkyaREHk-unsplash\ 1.jpg) no-repeat center/cover;
            padding-top: 35vh;
        }

        .x-search-all-ex {
            margin-top: -140px;
        }

        .pc-button-FEAC00-272 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
        }

        .pc-button-F4F4F4-272 {
            width: 162.5px;
            height: 45px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #F1EDEA;
        }

        .x-search-options {
            margin-bottom: 10px;
        }

        .x-search-keyword-input {
            height: 45px;
            margin-bottom: 10px;
        }

        .x-search-keyword-input input {
            height: 45px;
        }

        .x-search-price-bar {
            height: 50px;
        }

        .x-search-price-switch {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .x-search-price-switch h3 {
            font-size: 16px;
            font-weight: normal;
        }

        .x-search-price-switch-onoff {
            width: 36px;
        }

        .onoffswitch-label {
            height: 20px;
            line-height: 20px;
            border-radius: 6px;
        }

        .onoffswitch-label:before {
            width: 14px;
            height: 14px;
            top: 1.0;
            right: 14px;
        }
    }


    /* 進階搜尋 */

    .x-hidden-scroll-bar {
        width: 100%;
        max-width: 910px;
        height: 460px;
        overflow: hidden;
    }

    .x-search-ex {
        width: 100%;
        max-width: 922px;
        margin-top: 0px;
        z-index: 5;
        height: 100%;
        overflow-y: scroll;
    }

    .x-search-ex::-webkit-scrollbar {
        width: 3px;
        background: #E0F1FC;
    }

    .x-search-ex::-webkit-scrollbar-thumb {
        background: #5D8DC1;
    }

    .x-search-ex::-webkit-scrollbar-thumb:hover {
        background: hsla(211, 45%, 56%, 0.766)
    }

    .x-search-ex-both {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .x-search-ex-both span {
        font-size: 16px;
    }

    .x-search-ex-title {
        background-color: #F4F4F4;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 922px;
        height: 60px;
    }

    .x-search-ex-tag-wrap {
        max-width: 520px;
        margin: 20px 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-start;
    }

    .x-search-ex-tag-wrap button {
        transition: .25s;
    }

    .x-search-ex-tag-wrap button:hover {
        transform: translateY(-2px)
    }

    .x-search-ex-tag {
        height: 100%;
        padding: 0px 0;
        display: flex;
        max-width: 922px;
        width: 100%;
        align-items: center;
        justify-content: center;
        background-color: white;
    }

    .x-search-ex-tag-wrap button {
        width: 120px;
        height: 40px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 24px;
        border: none;
        background-color: #F1EDEA;
        cursor: pointer;
        margin: 5px 5px;
    }

    .x-search-ex-tag-wrap button p {
        font-weight: normal;
    }

    .x-search-ex-tag-wrap .x-tag-on-click {
        background-color: #FEAC00;
    }

    .x-search-button {
        margin-top: 20px;
    }

    .x-search-button .pc-button-F4F4F4-180 {
        margin-right: 30px;
    }

    @media screen and (max-width:376px) {
        .x-hidden-scroll-bar {
            height: 300px;
        }

        .x-search-ex {
            height: 300px;
            overflow: auto;
            margin-top: 30px;
        }

        .x-search-ex::-webkit-scrollbar {
            background: #E0F1FC;
            width: 2px;
        }

        .x-search-ex::-webkit-scrollbar-thumb {
            background: #5D8DC1;
        }

        .x-search-ex::-webkit-scrollbar-thumb:hover {
            background: hsla(211, 45%, 56%, 0.766)
        }

        .x-search-ex-title {
            height: 45px;
        }

        .x-search-ex-title h3 {
            font-size: 16px;
        }

        .x-search-ex-tag {
            padding: 0px 0;
        }

        .x-search-ex-tag-wrap {
            margin: 15px 0;
            padding: 0px 0;
            width: 100%;
            max-width: 270px;
        }

        .x-search-ex-tag-wrap button {
            width: 80px;
            height: 30px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 16px;
            border: none;
            background-color: #F1EDEA;
            cursor: pointer;
            margin: 5px 5px;
        }

        .x-search-button {
            margin-top: 20px;
            display: flex;
        }

        .x-search-button .pc-button-FEAC00-180 {
            width: 162.5px;
            height: 60px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #FEAC00;
        }

        .x-search-button .pc-button-F4F4F4-180 {
            width: 162.5px;
            height: 60px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
            border: none;
            background-color: #F4F4F4;
            margin-right: 10px;
        }
    }

    /*  */
    .x-search-list {
        margin-top: 80px;
    }

    .x-search-list-state {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .x-search-list-state-left img {
        margin-right: 30px;
        cursor: pointer;
    }

    .x-search-list-state-right {
        display: flex;
        align-items: center;
    }

    .x-search-list-state-right img {
        width: 30px;
        height: 30px;
    }

    .x-search-list-state-right div {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .x-search-list-state-right div:nth-child(1),
    .x-search-list-state-right div:nth-child(2) {
        margin-right: 60px;
    }

    @media screen and (max-width:376px) {
        .x-search-list {
            margin-top: 30px;
        }

        .x-search-list-state-left {
            display: none;
        }

        .x-search-list-state-right h3 {
            font-size: 20px;
        }

        .x-search-list-state-right div:nth-child(1),
        .x-search-list-state-right div:nth-child(2) {
            margin-right: 22px;
        }
    }

    /* 本月本週精選 */

    .x-search-month-best {
        margin-bottom: 60px;
    }

    .x-search-month-best-title {
        background: url(imgs/本月精選.svg) no-repeat center/contain;
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
        margin-top: 60px;
        height: 47px;
    }

    .x-search-week-best-title {
        background: url(imgs/本週精選.svg) no-repeat center/contain;
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
        margin-top: 60px;
        height: 47px;
    }

    .x-search-month-best-content {
        width: 100%;
        display: flex;
    }

    .x-search-month-best-content-img {
        width: 100%;
        max-width: 674px;
        height: 100%;
        max-height: 460px;
    }

    .x-search-month-best-content-img img {
        width: 100%;
        height: 100%;
        height: 460px;
        object-fit: cover;
    }

    .x-search-month-best-content-txt {
        width: 100%;
        max-width: 556px;
        padding: 65px 70px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #F1EDEA;
    }

    .x-search-month-best-content-re {
        flex-direction: row-reverse;
    }

    .x-search-month-best-content-txt h3,
    .x-search-month-best-content-txt p {
        margin-bottom: 20px;
        text-align: justify;
    }

    .x-search-month-best-content-txt p:nth-child(2) {
        font-weight: bold;
    }

    @media screen and (max-width:376px) {
        .x-search-month-best {
            margin-bottom: 40px;
        }

        .x-search-month-best-title {
            background: url(imgs/本月精選.svg) no-repeat center/contain;
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
            margin-top: 40px;
            height: 36px;
        }

        .x-search-week-best-title {
            background: url(imgs/本週精選.svg) no-repeat center/contain;
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
            margin-top: 40px;
            height: 36px;
        }

        .x-search-month-best-content {
            flex-direction: column;
        }

        .x-search-month-best-content-txt {
            padding: 10px 0px 20px 0;
        }

        .x-search-month-best-content-txt h3,
        .x-search-month-best-content-txt p {
            margin-bottom: 15px;
        }

        .x-search-month-best-content-txt .pc-button-FEAC00-180 {
            width: 335px;
            height: 60px;
            color: #0E2E3D;
            font-weight: bold;
            font-size: 20px;
        }

        .x-search-month-best .container:nth-child(2),
        .x-search-month-best .container:nth-child(4) {
            background-color: #F1EDEA;
            padding-top: 20px;
        }

        .x-search-month-best-content-txt p:nth-child(3) {
            font-size: 12px;
        }
    }


    /* 精選房屋 */

    .x-search-month-nice-object {
        margin-bottom: 40px;
    }

    .x-search-month-nice-object-title {
        margin-bottom: 30px;
    }

    .S-lg-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .x-search-month-nice-object-product {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .S-lg-card-wrap {
        margin-bottom: 30px;
    }

    @media screen and (max-width:376px) {
        .x-search-month-nice-object {
            margin-bottom: 20px;
        }

        .x-search-month-nice-object-title {
            margin-bottom: 10px;
            text-align: center;
        }

        .x-search-month-nice-object-title h2 {
            font-size: 20px;
        }

        .x-search-month-nice-object-product {
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            width: 485%;
        }

        .x-search-month-nice-object-product-scroll {
            width: 100%;
            overflow: scroll;
        }

        .x-search-month-nice-object-product .S-lg-card-wrap {
            margin-top: 0px;
            margin-right: 20px;
            margin-bottom: 5px;
            width: 250px;
            height: 247px;
            overflow: hidden;
            position: relative;
            /* border: 1px solid blue; */
        }

        .x-search-month-nice-object-product .S-lg-share {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 1.2em;
            border-radius: 50%;
            position: absolute;
            top: 3%;
            right: 22%;
        }

        .x-search-month-nice-object-product .S-lg-share i {
            font-size: 1.2em;
        }

        .x-search-month-nice-object-product .S-lg-like {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 1.2em;
            border-radius: 50%;
            position: absolute;
            top: 3%;
            right: 3%;
        }

        .x-search-month-nice-object-product .S-lg-like svg {
            width: 40px;
            height: 40px;
        }

        .x-search-month-nice-object-product .S-lg-card {
            width: 100%;
            height: 100%;
            /* display: flex; */
            flex-direction: column;
            /* border: 1px solid red; */
        }

        .x-search-month-nice-object-product .S-lg-card-img {
            width: 100%;
            height: 175px;

        }

        .x-search-month-nice-object-product .S-lg-card-info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 9px 10px;
            /* border: 1px solid rgb(45, 95, 112); */
            background-color: #F1EDEA;
            margin: 0;
        }

        

        .x-search-month-nice-object-product .S-lg-card-info h4 span {
            font-size: 14px;
            font-weight: bold;
            padding-right: 10px;
            margin-bottom: 10px;
        }

        .x-search-month-nice-object-product .S-lg-card-info-2 {
            display: flex;
            margin-top: 0;
            justify-content: right;
            align-items: flex-end;
        }

        .x-search-month-nice-object-product .S-lg-card-info p {
            display: none;
            margin: 0;
            font-size: 12px;
        }

        .x-search-month-nice-object-product .S-lg-card-info h3 {
            width: 85px;
            margin: 0;
            font-size: 16px;
            font-weight: bold;
            display: inline;
        }
    }

    /* 以下是列表 */

    .x-search-list-content {
        display: flex;
        background-color: #F1EDEA;
    }

    .x-search-list-content-img {
        width: 320px;
        height: 250px;
        overflow: hidden;
        position: relative;
    }

    .x-search-list-content-img-train {
        width: 100%;
        height: 100%;
        object-fit: cover;
        list-style: none;
    }

    .x-search-list-content-img-train img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .x-right-arrow,
    .x-left-arrow {
        position: absolute;
        top: 0;
        right: 5px;
        bottom: 0;
        width: 10%;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .x-left-arrow {
        left: 5px;
        right: 0px;
    }

    .x-search-list-content-txt {
        width: 360px;
        padding: 42px 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .x-search-list-content-txt p,
    .x-search-list-content-txt h3 {
        display: flex;
        align-items: center;
    }

    .x-search-list-content-txt div {
        display: flex;
    }

    .x-search-list-content-txt div p {
        margin: 0;
    }

    .x-search-list-content-txt div p:nth-child(1) {
        margin-right: 35px;
    }

    .x-search-list-content-txt img {
        margin-right: 5px;
    }

    .x-search-list-content-icon {
        width: 345px;
        padding: 95px 0px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .x-search-list-content-icon div {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 72px;
        height: 60px;
    }

    .x-search-list-content-icon div img {
        width: 55%;
        height: 55%;
    }

    .x-search-list-content-price {
        padding: 15px 15px 15px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }

    .x-search-list-content-price-top {
        height: 50px;
        width: 120px;
        display: flex;
        justify-content: flex-end;
        margin-left: 20px;
    }

    .x-search-list-content-price-down div {
        display: flex;
        align-items: center;
    }

    .x-search-list-content-price-down div p {
        margin-left: 8px;
    }

    .x-search-list-content-price-down h3 {
        margin-left: 10px;
        width: 100%;
    }

    .x-search-list-content {
        margin-bottom: 30px;
    }

    .x-search-list-card {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .x-down {
        transform: rotate(0deg);
    }

    .x-up {
        transform: rotate(180deg);
    }

    .S-lg-card-wrap {
        width: 390px;
        height: 359px;
        margin-bottom: 30px;
    }

    .x-search-list-all .x-search-displaynone {
        display: none;
    }

    .x-content-list {
        transition: .5s;
    }

    .x-content-list:active {
        transform: scale(0.8);
    }

    .x-card-list {
        transition: .5s;
    }

    .x-card-list:active {
        transform: scale(0.8);
    }

    .x-search-list-content-price-top .S-lg-share,
    .x-search-list-content-price-top .S-lg-like {
        position: relative;
    }

    .S-lg-card-img img {
        width: 100%;
        height: 100%;
    }

    .S-lg-like,
    .irs-to,
    .irs-handle,
    .irs-from {
        cursor: pointer;
    }

    @media screen and (max-width:376px) {
        .x-search-list-all .x-search-displaynone {
            display: flex;
        }

        .x-search-list {
            margin-top: 30px;
        }

        .x-search-list-state-right h3 {
            font-size: 20px;
        }

        .x-search-list-state-right div:nth-child(1),
        .x-search-list-state-right div:nth-child(2) {
            margin-right: 22px;
        }

        .x-search-list-card {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .x-search-list-content-all {
            display: none;
        }
    }

    .S-lg-card-img {
        width: 100%;
        height: 75%;


    }

    .S-lg-card {
        display: block;
    }

    .S-lg-like svg.x-svg-color {
        fill: red;

    }

    .S-lg-like svg.x-svg-down {
        transition: .25s;
        transform: scale(0.8);
    }

    .S-lg-like svg.x-svg-up {
        transition: .25s;
        transform: scale(1);
    }
</style>
<?php include __DIR__ . './part/nav.php'  ?>
<!-- 搜尋 -->
<div class="x-home-page-scroll-top top-link-hide" id="sc-top-js">
        <img src="./imgs/arrow-up.svg" alt="">
    </div>
    <div class="x-home-page-chat " id="chat-js">
        <a href="customer_service.php"><img src="./imgs/support.png" alt=""></a>
    </div>
<div class="x-search">
    <div class="container">
        <div class="x-search-all">
            <div class="x-search-options">
                <button class="pc-button-FEAC00-272">關鍵字搜尋</button>
                <button class="pc-button-F4F4F4-272">進階搜尋</button>
            </div>
            <div class="x-search-keyword-input">

                <input class="x-search-input-setting" type="text" placeholder="關鍵字搜尋" id="se_chinese">
                <div onclick="datacheck()">
                    <svg width="30" height="30" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.647 24.3125C20.1698 24.3125 24.647 19.8353 24.647 14.3125C24.647 8.78965 20.1698 4.3125 14.647 4.3125C9.12413 4.3125 4.64697 8.78965 4.64697 14.3125C4.64697 19.8353 9.12413 24.3125 14.647 24.3125Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.147 26.8125L21.7095 21.375" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>








            </div>

        </div>
        <form id="search_list_form" action="search_all_list.php" method="post">
            <div class="x-search-price-bar ">
                <input type="text" class="js-range-slider" name="price" value="" data-type="double" data-min="5000" data-max="50000" data-step="500" />
            </div>

            <div class="x-hidden-DisplayNone">

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
                                <div class="x-search-ex-tag-wrap rentaltype-group">
                                    <button class=" x-button-only rentaltype" type="button" data-rentaltype="1">
                                        <p>
                                            共生
                                        </p>
                                    </button>
                                    <button class=" x-button-only rentaltype" type="button" data-rentaltype="2">
                                        <p>
                                            分租
                                        </p>
                                    </button>
                                    <button class=" x-button-only rentaltype" type="button" data-rentaltype="3">
                                        <p>
                                            不限分類
                                        </p>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- 地區---------------------------------------------------------------- -->
                        <div class="x-search-ex-both">
                            <div class="x-search-ex-title ">
                                <h3>
                                    地區
                                </h3>
                            </div>
                            <div class="x-search-ex-tag ">
                                <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start item_area-group">
                                    <button class="x-button-only" data-item_area="1" type="button">
                                        <p>
                                            新北市
                                        </p>
                                    </button>
                                    <button class="x-button-only" data-item_area="2" type="button">
                                        <p>
                                            台北市
                                        </p>
                                    </button>
                                    <button class="x-button-only" data-item_area="3" type="button">
                                        <p>
                                            台中市
                                        </p>
                                    </button>
                                    <button class="x-button-only" data-item_area="4" type="button">
                                        <p>
                                            高雄市
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
                            <div class="x-search-ex-tag ">
                                <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start item_dist-group">
                                    <button class="x-button-more" data-item_dist="1" type="button">
                                        <p>
                                            板橋區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="2" type="button">
                                        <p>
                                            三重區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="3" type="button">
                                        <p>
                                            中和區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="4" type="button">
                                        <p>
                                            永和區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="5" type="button">
                                        <p>
                                            新莊區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="6" type="button">
                                        <p>
                                            新店區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="7" type="button">
                                        <p>
                                            土城區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="8" type="button">
                                        <p>
                                            蘆洲區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="9" type="button">
                                        <p>
                                            樹林區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="10" type="button">
                                        <p>
                                            汐止區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="11" type="button">
                                        <p>
                                            鶯歌區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="12" type="button">
                                        <p>
                                            三峽區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="13" type="button">
                                        <p>
                                            淡水區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="14" type="button">
                                        <p>
                                            瑞芳區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="15" type="button">
                                        <p>
                                            五股區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="16" type="button">
                                        <p>
                                            泰山區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="17" type="button">
                                        <p>
                                            林口區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="18" type="button">
                                        <p>
                                            深坑區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="19" type="button">
                                        <p>
                                            石碇區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="20" type="button">
                                        <p>
                                            坪林區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="21" type="button">
                                        <p>
                                            三芝區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="22" type="button">
                                        <p>
                                            石門區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="23" type="button">
                                        <p>
                                            八里區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="24" type="button">
                                        <p>
                                            平溪區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="25" type="button">
                                        <p>
                                            雙溪區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="26" type="button">
                                        <p>
                                            貢寮區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="27" type="button">
                                        <p>
                                            金山區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="28" type="button">
                                        <p>
                                            萬里區
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-item_dist="29" type="button">
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
                            <div class="x-search-ex-tag ">
                                <div class="x-search-ex-tag-wrap roomtype-group">
                                    <button class="x-button-only " data-roomtype="1" type="button" value="套房">
                                        <p>
                                            套房
                                        </p>
                                    </button>
                                    <button class="x-button-only " data-roomtype="2" type="button" value="雅房">
                                        <p>
                                            雅房
                                        </p>
                                    </button>
                                    <button class="x-button-only " data-roomtype="3" type="button" value="整層">
                                        <p>
                                            整層
                                        </p>
                                    </button>
                                    <button class="x-button-only " data-roomtype="4" type="button" value="不限房型">
                                        <p>
                                            不限房型
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
                                <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start feature-group">
                                    <button class="x-button-more" data-feature="1" type="button">
                                        <p>
                                            限女性
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-feature="2" type="button">
                                        <p>
                                            可開伙
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-feature="3" type="button">
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
                            <div class="x-search-ex-tag ">
                                <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start equipment-group">
                                    <button class="x-button-only" data-equipment="1" type="button">
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
                                <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start postulate-group">
                                    <button class="x-button-more" data-postulate="1" type="button">
                                        <p>
                                            陽台
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-postulate="2" type="button">
                                        <p>
                                            電梯
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-postulate="3" type="button">
                                        <p>
                                            交誼廳
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-postulate="4" type="button">
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
                                <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start other_cost-group">
                                    <button class="x-button-more" data-other_cost="1" type="button">
                                        <p>
                                            水電費
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-other_cost="2" type="button">
                                        <p>
                                            網路費
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-other_cost="3" type="button">
                                        <p>
                                            第四台
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-other_cost="4" type="button">
                                        <p>
                                            清潔費
                                        </p>
                                    </button>
                                    <button class="x-button-more" data-other_cost="5" type="button">
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
                    <button class="pc-button-F4F4F4-180 x-button-clear" type="button" onclick="detare()">重選</button>
                    <button id="x-select-btn" class="pc-button-FEAC00-180" type="button" onclick="datacheck()">開始搜尋</button>
                </div>

            </div>
        </form>


    </div>
</div>
</div>



<!-- 搜尋結果 -->
<div id="search_all_all">
    <!--                                                        預設首頁                                                  -->
    <!-- 本月本週精選 -->
    <div class="x-search-month-best">
        <div class="container">
            <div class="x-search-month-best-title">

            </div>
        </div>
        <div class="container">
            <div class="x-search-month-best-content">
                <div class="x-search-month-best-content-img">
                    <img src="./imgs/items8/item0.jpg" alt="">
                </div>
                <div class="x-search-month-best-content-txt">
                    <h3>
                        三重大樓
                    </h3>
                    <p>
                        新北市三重區碧華街 6 樓 3 房 2 廳 2 衛浴
                    </p>
                    <p>
                        出捷運站後回家只需10秒鐘，24小時社區秘書管理 收送包裹 乾洗衣物免煩惱，社區設有游泳池 健身房 不用另外花錢去運動，臨近雙公園 全聯 超商
                        Ubike站，浴室乾濕分離並有大浴缸泡澡超舒適，家電ㄧ應俱全 ㄧ卡皮箱即可入住，配有電子鎖 出門不用帶一堆鑰匙。
                    </p>
                    <button class="pc-button-FEAC00-180">查看更多</button>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="x-search-week-best-title">

            </div>
        </div>
        <div class="container">
            <div class="x-search-month-best-content x-search-month-best-content-re">
                <div class="x-search-month-best-content-img">
                    <img src="./imgs/items19/item0.jpg" alt="">
                </div>
                <div class="x-search-month-best-content-txt ">
                    <h3>
                        木柵生活圈
                    </h3>
                    <p>
                        台北市文山區興隆路三段56號
                    </p>
                    <p>
                        鄰進信義區、信義快速道路，全新整修、使用杜邦無毒漆、防火建材，周邊非常..非常好停車，隨時有車位，對外窗採光佳。附近有公園綠地、學校。本房屋近博嘉國小公車站、木柵捷運捷運站。
                    </p>
                    <button class="pc-button-FEAC00-180">查看更多</button>
                </div>

            </div>
        </div>


    </div>

    <!-- 精選房屋 -->
    <div class="x-search-month-nice-object">
        <div class="container">
            <div class="x-search-month-nice-object-title">
                <h2>精選房屋</h2>
            </div>
            <div class="x-search-month-nice-object-product-scroll">
                <div class="x-search-month-nice-object-product">
                    <?php foreach ($onestmts as $i) : ?>
                        <div class="S-lg-card-wrap">
                            <div class="S-lg-share">
                                <!-- <img src="../imgs/分享.svg" alt=""> -->

                            </div>
                            <div class="S-lg-like" onclick="likeClick(event)" onmousedown="downClick(event)" onmouseup="upClick(event)">
                                <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                    <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>

                            <div class="S-lg-card">
                                <div class="S-lg-card-img">
                                    <img src="imgs/items<?= $i['sid'] ?>/item1.jpg">
                                </div>
                                <div class="S-lg-card-info ">
                                    <h4>
                                        <span><?= $i['item_name'] ?></span> <?= $i['item_area'] ?><?= $i['item_dist'] ?>
                                    </h4>
                                    <div class="S-lg-card-info-2 ">
                                        <p>
                                            <?= $i['floor'] ?>
                                        </p>
                                        <h3>
                                            $<?= number_format($i['price']) ?>/月
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <!-- 整層都是你家 -->
    <div class="x-search-month-nice-object">
        <div class="container">
            <div class="x-search-month-nice-object-title">
                <h2>整層都是你家</h2>
            </div>
            <div class="x-search-month-nice-object-product-scroll">
                <div class="x-search-month-nice-object-product">
                    <?php foreach ($twostmts as $i) : ?>
                        <div class="S-lg-card-wrap">
                            <div class="S-lg-share">
                                <!-- <img src="../imgs/分享.svg" alt=""> -->

                            </div>
                            <div class="S-lg-like" onclick="likeClick(event)" onmousedown="downClick(event)" onmouseup="upClick(event)" data-sid="12">
                                <svg class=" S-lg-svg " width=" 50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                    <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="S-lg-card">
                                <div class="S-lg-card-img">
                                    <img src="imgs/items<?= $i['sid'] ?>/item1.jpg">
                                </div>
                                <div class="S-lg-card-info ">
                                    <h4>
                                        <span><?= $i['item_name'] ?></span> <?= $i['item_area'] ?><?= $i['item_dist'] ?>
                                    </h4>
                                    <div class="S-lg-card-info-2 ">
                                        <p>
                                            <?= $i['floor'] ?>
                                        </p>
                                        <h3>
                                            $<?= number_format($i['price']) ?>/月
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <!-- 整層都是你家 -->
    <div class="x-search-month-nice-object">
        <div class="container">
            <div class="x-search-month-nice-object-title">
                <h2>經濟最佳選擇</h2>
            </div>
            <div class="x-search-month-nice-object-product-scroll">
                <div class="x-search-month-nice-object-product">
                    <?php foreach ($hrestmts as $i) : ?>
                        <div class="S-lg-card-wrap">
                            <div class="S-lg-share">
                                <!-- <img src="../imgs/分享.svg" alt=""> -->

                            </div>
                            <div class="S-lg-like" onclick="likeClick(event)" data-sid="12">
                                <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                    <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="S-lg-card">
                                <div class="S-lg-card-img">
                                    <img src="imgs/items<?= $i['sid'] ?>/item1.jpg">
                                </div>
                                <div class="S-lg-card-info ">
                                    <h4>
                                        <span><?= $i['item_name'] ?></span> <?= $i['item_area'] ?><?= $i['item_dist'] ?>
                                    </h4>
                                    <div class="S-lg-card-info-2 ">
                                        <p>
                                            <?= $i['floor'] ?>
                                        </p>
                                        <h3>
                                            $<?= number_format($i['price']) ?>/月
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include __DIR__ . './part/footer.php'  ?>

<!-- 搜尋相關全js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.js"></script>

<script>
    $(".js-range-slider").ionRangeSlider({
        skin: "round",
        from: 0,
    });

    $('.pc-button-F4F4F4-272').click(function() {
        $('.x-hidden-DisplayNone').css({
            'height': '540px',
            'width': '100%',
            'display': 'flex',
            'flex-direction': 'column',

            'align-items': 'center'
        })
        $('.pc-button-F4F4F4-272').css(
            'background-color', '#FEAC00'
        )
        $('.pc-button-FEAC00-272').css(
            'background-color', '#F1EDEA'
        )
        $('.x-search').css(
            'padding-top', '15vh'
        )
        $('.x-search-keyword-input').css({
            'height': '0px',
            'overflow': 'hidden'
        })
    })
    $('.pc-button-FEAC00-272').click(function() {
        $('.x-hidden-DisplayNone').css({
            'height': '0px',
            'width': '100%',
            'overflot': 'hidden'
        })
        $('.pc-button-F4F4F4-272').css(
            'background-color', '#F1EDEA'
        )
        $('.pc-button-FEAC00-272').css(
            'background-color', '#FEAC00'
        )
        $('.x-search').css(
            'padding-top', '40vh'
        )
        $('.x-search-keyword-input').css({
            'height': '70px',
            'overflow': 'hidden'
        })

    })


    // 搜尋送出按鈕

    function datacheck() {
        // 單選房屋分類
        // const typeBtns = $('.x-search-input-setting');
        // const typeSelected = typeBtns.find('type_search').text().trim();
        // const datatype = JSON.stringify(typeSelected);
        //關鍵字
        const searchtypeBtn = $('.x-search-input-setting');
        const searchtypeSelected = searchtypeBtn.val().trim();
        const dataSearchtype = JSON.stringify(searchtypeSelected)
        //價格
        const HpriceBtn = $('.x-search-price-bar');
        const LpriceBtn = $('.x-search-price-bar');
        const HpriceSelected = HpriceBtn.find('.irs-to').text().split(' ').join('');
        const LpriceSelected = LpriceBtn.find('.irs-from').text().split(' ').join('');
        // HpriceBtn.each(function(){
        //     HpriceSelected.push(HpriceBtn.find('.irs-to').text().trim());

        // });
        const dataHprice = JSON.stringify(HpriceSelected)

        // LpriceBtn.each(function(){
        //     LpriceSelected.push(LpriceBtn.find('.irs-from').text().trim());

        // });
        const dataLprice = JSON.stringify(LpriceSelected)

        // 複選詳細地區
        const itemDistBtns = $('.x-search-ex-tag > .item_dist-group .x-button-more');
        const itemDistSelected = [];
        itemDistBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                itemDistSelected.push(btn.find('p').text().trim());
            }
        });
        const dataItemDist = JSON.stringify(itemDistSelected);

        // 單選房屋分類
        const rentalBtns = $('.x-search-ex-tag > .rentaltype-group .x-button-only');
        const rentalSelected = [];
        rentalBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                rentalSelected.push(btn.find('p').text().trim());
            }
        });
        const dataRental = JSON.stringify(rentalSelected);
        // const dataRental = $('.x-tag-on-click').attr('data-rentaltype')
        // 單選地區
        const areaBtns = $('.x-search-ex-tag > .item_area-group .x-button-only');
        const areaSelected = [];
        areaBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                areaSelected.push(btn.find('p').text().trim());
            }
        });
        const dataArea = JSON.stringify(areaSelected);
        // 單選房型
        const roomBtns = $('.x-search-ex-tag > .roomtype-group .x-button-only');
        const roomSelected = [];
        roomBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                roomSelected.push(btn.find('p').text().trim());
            }
        });
        const dataRoom = JSON.stringify(roomSelected);
        // 復選特色
        const featureBtns = $('.x-search-ex-tag > .feature-group .x-button-more');
        const featureSelected = [];
        featureBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                featureSelected.push(btn.find('p').text().trim());
            }
        });
        const dataFeture = JSON.stringify(featureSelected);
        // 單選設備
        const equipBtns = $('.x-search-ex-tag > .equipment-group .x-button-only');
        const equipSelected = [];
        equipBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                equipSelected.push(btn.find('p').text().trim());
            }
        });
        const dataEquip = JSON.stringify(equipSelected);
        // 複選公設
        const postulateBtns = $('.x-search-ex-tag > .postulate-group .x-button-more');
        const postulateSelected = [];
        postulateBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                postulateSelected.push(btn.find('p').text().trim());
            }
        });
        const dataPostulate = JSON.stringify(postulateSelected);
        // 複選額外費用
        const otherCostBtns = $('.x-search-ex-tag > .other_cost-group .x-button-more');
        const otherCostSelected = [];
        otherCostBtns.each(function() {
            const btn = $(this);
            if (btn.hasClass('x-tag-on-click')) {
                otherCostSelected.push(btn.find('p').text().trim());
            }
        });
        const dataOtherCost = JSON.stringify(otherCostSelected);
        // 給API
        $.get('search_list.php', {
                dataHprice,
                dataLprice,
                dataRental,
                dataArea,
                dataItemDist,
                dataRoom,
                dataFeture,
                dataEquip,
                dataPostulate,
                dataOtherCost,
                dataSearchtype
            },
            // 回傳
            function(data) {
                $('#search_all_all').html(data);
            }, 'text');





        // $('#search_all_all').html(data);
        // $.get('search_list.php',function(data){
        //     $('#search_all_all').html(data);
        //     // document.getElementById("search_all_all").innerHTML = data;

        // })

    }
    // 單選區
    // 房屋分類

    $(".rentaltype-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log(
            // rentaltype: $(this).attr('data-rentaltype');
            $('.x-tag-on-click').attr('data-rentaltype')
        )
        // var dataRentaltype = $('.rentaltype').attr('data-rentaltype')
        // var dataRentaltype = $('.rentaltype').attr('data-rentaltype')

    })
    // 地區
    $(".item_area-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log(
            $('.x-tag-on-click').attr('data-item_area')
        )
    })
    // 房屋類型
    $(".roomtype-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({
            roomtype: $(this).attr('data-roomtype')
        })
    })
    // 坪數
    $(".ping_number-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({
            ping_number: $(this).attr('data-ping_number')
        })
    })
    // 設備
    $(".equipment-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({
            equipment: $(this).attr('data-equipment')
        })
    })
    // 複選區
    // 詳細地區
    $(".item_dist-group .x-button-more").click(function() {
        $(this).toggleClass('x-tag-on-click');
        console.log({
            item_dist: $(this).attr('data-item_dist')
        })

    })
    // 特色
    $(".feature-group .x-button-more").click(function() {
        $(this).toggleClass('x-tag-on-click');
        console.log({
            item_dist: $(this).attr('data-feature')
        })

    })
    // 公設
    $(".postulate-group .x-button-more").click(function() {
        $(this).toggleClass('x-tag-on-click');
        console.log({
            item_dist: $(this).attr('data-postulate')
        })

    })
    // 額外費用
    $(".other_cost-group .x-button-more").click(function() {
        $(this).toggleClass('x-tag-on-click');
        console.log({
            item_dist: $(this).attr('data-other_cost')
        })

    })
</script>
<script>
     // scrolltop
     const scrollTopButton = document.getElementById('sc-top-js');
    const scrollFunc = () => {
        let y = window.scrollY;
        console.log(y);
        if (y > 0) {
            scrollTopButton.classList.add("top-link-show");
        } else {
            scrollTopButton.classList.remove("top-link-show");
        }
    };
    window.addEventListener("scroll", scrollFunc);

    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;

        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 10);
        }
    };

    scrollTopButton.onclick = function(e) {
        e.preventDefault();
        scrollToTop();
    }
    // chat-js
    $('#chat-js').mouseenter(function() {
        $('#chat-js').css('transform', 'translateY(-5px)')

    })
    $('#chat-js').mouseleave(function() {
        $('#chat-js').css('transform', 'translateY(0px)')

    })
    $('#sc-top-js').mouseenter(function() {
        $('#sc-top-js').css('transform', 'translateY(-5px)')

    })
    $('#sc-top-js').mouseleave(function() {
        $('#sc-top-js').css('transform', 'translateY(0px)')

    })
    function likeClick(event) {
        const svg = $(event.currentTarget).find('.S-lg-svg');
        svg.toggleClass('x-svg-color');
    }

    function downClick(event) {
        const svg = $(event.currentTarget).find('.S-lg-svg');
        svg.removeClass('x-svg-up');
        svg.addClass('x-svg-down');

    }

    function upClick(event) {
        const svg = $(event.currentTarget).find('.S-lg-svg');
        svg.removeClass('x-svg-down');
        svg.addClass('x-svg-up');
    }

    function listonclick(event) {
        console.log(1);
        const list = $('.x-search-list-content-all');
        const card = $('.x-search-list-card');
        list.removeClass('x-search-displaynone');
        card.addClass('x-search-displaynone')
    }

    function cardonclick(event) {

        const list = $('.x-search-list-content-all');
        const card = $('.x-search-list-card');
        list.addClass('x-search-displaynone');
        card.removeClass('x-search-displaynone')
    }
    $('#se_chinese').keydown(function(event){
        if(event.keyCode == 13){
            datacheck();
        };
    });
</script>


<?php include __DIR__ . './part/javascript.php'  ?>