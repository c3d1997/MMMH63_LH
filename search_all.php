<?php
$pageName = 'searchpage';
$title = '搜尋畫面';
require './part/connect-db.php';

// $item = isset($_GET['item']) ? intval($_GET['item']) : 0 ;
// $parmas = [];

// $where = ' WHERE 1 ';
// if(!empty($item)){
//     $where .= "AND "
// }
// ?>

<?php include __DIR__ . './part/searchead.php'  ?>
<!-- 搜尋相關畫面全CSS -->
<style>
    /* 搜尋選單 */
    form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
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
            margin-top: 0px;
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
            width: 600%;
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
            display: flex;
            flex-direction: column;
            /* border: 1px solid red; */
        }

        .x-search-month-nice-object-product .S-lg-card-img {
            width: 100%;
            height: 100%;
            background: url(imgs/chairs-g9439200e7_1920.jpg) 70% center/ cover;
        }

        .x-search-month-nice-object-product .S-lg-card-info {
            display: flex;
            justify-content: space-between;
            padding: 9px 10px;
            /* border: 1px solid rgb(45, 95, 112); */
            background-color: #F1EDEA;
            margin: 0;
        }

        .x-search-month-nice-object-product .S-lg-card-info h4 {
            display: flex;
            flex-direction: column;
            margin: 0;
            font-size: 12px;
            font-weight: normal;
        }

        .x-search-month-nice-object-product .S-lg-card-info h4 span {
            font-size: 16px;
            font-weight: bold;
            padding-right: 10px;
            margin-bottom: 10px;
        }

        .x-search-month-nice-object-product .S-lg-card-info-2 {
            display: flex;
            margin-top: 30px;
            justify-content: right;
            align-items: flex-end;
        }

        .x-search-month-nice-object-product .S-lg-card-info p {
            display: none;
            margin: 0;
            font-size: 12px;
        }

        .x-search-month-nice-object-product .S-lg-card-info h3 {
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

        list-style: none;
    }

    .x-search-list-content-img-train img {
        width: 100%;
        height: 100%;
        object-fit: fill;
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
        width: 288px;
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
</style>

<!-- 搜尋 -->

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
            <form id="search_list_form" action="search_all_list.php" method="post">
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
                                <div class="x-search-ex-tag item_area-group">
                                    <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
                                        <button class="x-button-only" data-item_area="1" type="button">
                                            <p>
                                                新北
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-item_area="2" type="button">
                                            <p>
                                                台北
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-item_area="3" type="button">
                                            <p>
                                                台中
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-item_area="4" type="button">
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
                                <div class="x-search-ex-tag ">
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
                                <div class="x-search-ex-tag roomtype-group" >
                                    <div class="x-search-ex-tag-wrap">
                                        <button class="x-button-only rentaltype" data-roomtype="1" type="button" value="套房">
                                            <p>
                                                套房
                                            </p>
                                        </button>
                                        <button class="x-button-only rentaltype" data-roomtype="2" type="button" value="雅房">
                                            <p>
                                                雅房
                                            </p>
                                        </button>
                                        <button class="x-button-only rentaltype" data-roomtype="3" type="button" value="整層">
                                            <p>
                                                整層
                                            </p>
                                        </button>
                                        <button class="x-button-only rentaltype" data-roomtype="4" type="button" value="不限房型">
                                            <p>
                                                不限房型
                                            </p>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!-- 坪數---------------------------------------------------------------- -->
                            <div class="x-search-ex-both">
                                <div class="x-search-ex-title">
                                    <h3>
                                        坪數
                                    </h3>
                                </div>
                                <div class="x-search-ex-tag ping_number-group">
                                    <div class="x-search-ex-tag-wrap">
                                        <button class="x-button-only" data-ping_number="1" type="button">
                                            <p>
                                                1 - 5 坪
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-ping_number="2" type="button">
                                            <p>
                                                5 - 10 坪
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-ping_number="3" type="button">
                                            <p>
                                                10 - 15 坪
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-ping_number="4" type="button">
                                            <p>
                                                15 - 20 坪
                                            </p>
                                        </button>
                                        <button class="x-button-only" data-ping_number="5" type="button">
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
                                <div class="x-search-ex-tag equipment-group">
                                    <div class="x-search-ex-tag-wrap x-search-ex-tag-flex-start">
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
                        <button id="x-select-btn" class="pc-button-FEAC00-180" type="button">開始搜尋</button>
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
                    <img src="imgs/57 1.jpg" alt="">
                </div>
                <div class="x-search-month-best-content-txt">
                    <h3>
                        三重大樓
                    </h3>
                    <p>
                        新北市三重區碧華街 6 樓 3 房 2 廳 2 衛浴
                    </p>
                    <p>
                        若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。租屋的出現，重寫了人生的意義。既然，租屋，到底應該如何實現。租屋因何而發生？話雖如此，做好租屋這件事，可以說已經成為了民運動。奧維德說過一句發人省思的話，習慣是在習慣中
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
                    <img src="imgs/57 1.jpg" alt="">
                </div>
                <div class="x-search-month-best-content-txt ">
                    <h3>
                        三重大樓
                    </h3>
                    <p>
                        新北市三重區碧華街 6 樓 3 房 2 廳 2 衛浴
                    </p>
                    <p>
                        若發現問題比我們想像的還要深奧，那肯定不簡單。 所謂租屋，關鍵是租屋需要如何解讀。租屋的出現，重寫了人 生的意義。既然，租屋，到底應該如何實現。租屋因何而發生？ 話雖如此，做好租屋這件事，可以說已經成為了民運動。奧維德 說過一句發人省思的話，習慣是在習慣中
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
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>

                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="share-wrap">
                            <div class="share">
                                <div class="line">
                                    <img src="imgs/line-brands.svg" alt="">
                                </div>
                                <div class="fb">
                                    <img src="imgs/facebook-square-brands.svg" alt="">

                                </div>
                                <div class="ins">
                                    <img src="imgs/instagram-brands.svg" alt="">
                                </div>
                                <div class="link">
                                    <img src="imgs/link-solid.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="S-lg-card-wrap">
                        <div class="S-lg-share">
                            <!-- <img src="../imgs/分享.svg" alt=""> -->

                        </div>
                        <div class="S-lg-like">
                            <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="S-lg-card">
                            <div class="S-lg-card-img">
                                <img src="imgs/57 1.jpg">
                            </div>
                            <div class="S-lg-card-info ">
                                <h4>
                                    <span>三重大樓</span> 新北市三重區
                                </h4>
                                <div class="S-lg-card-info-2 ">
                                    <p>
                                        整層住家 6 樓 3房 2 廳 2衛浴
                                    </p>
                                    <h3>
                                        15,000/月
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
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
    // 房屋分類
    $(".rentaltype-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({rentaltype: $(this).attr('data-rentaltype')})
    })
    // 地區
    $(".item_area-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({item_area: $(this).attr('data-item_area')})
    })
    // 房屋類型
    $(".roomtype-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({roomtype: $(this).attr('data-roomtype')})
    })
    // 坪數
    $(".ping_number-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({ping_number: $(this).attr('data-ping_number')})
    })
    // 設備
    $(".equipment-group .x-button-only").click(function() {
        $(this).toggleClass('x-tag-on-click');
        $(this).siblings().removeClass('x-tag-on-click');

        console.log({equipment: $(this).attr('data-equipment')})
    })


    

    
    $(".x-button-more").click(function() {
        $(this).toggleClass('x-tag-on-click');

    })
    $(".x-button-clear").click(function() {
        $('button').removeClass('x-tag-on-click')
    })
    rentaltype-group
    // 


    if (window.innerWidth > 376) {
        $(".S-lg-share").mousedown(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.0)'

            })
        })
        $(".S-lg-share").mouseup(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.1)'

            })

        })
        $(".S-lg-share").mouseenter(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.1)'

            })

        })
        $(".S-lg-share").mouseleave(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.0)'

            })

        })
        $(".S-lg-like").mousedown(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.0)',

            })

        })
        $(".S-lg-like").mouseup(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.1)',

            })

        })
        $(".S-lg-like").mouseenter(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.1)'

            })

        })
        $(".S-lg-like").mouseleave(function() {
            $(this).css({
                'transform': 'translateY(0px)scale(1.0)'

            })

        })
    }
    $(".S-lg-svg").click(function() {
        console.log(1);
        $(this).toggleClass('x-svg-color')


    })
</script>
<script>

   
</script>


<?php include __DIR__ . './part/javascript.php'  ?>