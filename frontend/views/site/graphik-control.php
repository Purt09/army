<?php
/**
 *
 */

$this->title = "Графики контроля";
?>

<div class="plan-content">
    <div class="row ">
        <div class="col-sm-6">
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">График контроля Осень 21/22</h3>
                </div>
                <div class="pricingTable-signup">
                    <a href="/site/view-plan?alias=method_control_oc_21_22"><span>Открыть</span></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">График контроля Весна 20/21</h3>
                </div>
                <div class="pricingTable-signup">
                    <a href="/site/view-plan?alias=method_control_ves"><span>Открыть</span></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">График контроля Осень 20/21</h3>
                </div>
                <div class="pricingTable-signup">
                    <a href="/site/view-plan?alias=method_control_oc"><span>Открыть</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">


    .head-content {
        top: 0;
        left: 0;
        z-index: 0;
        width: 100%;
        overflow: hidden;
        overflow-y: hidden;
        display: block;
        margin: 0;
        padding: 0;
        outline: none;
        height: 15%;
        background-color: #1E90FF;
    }

    .text {
        height: 100%;
    }

    .text h2 {
        margin: 0;
        position: absolute;
        top: 30px;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }


    .pricingTable {
        border: 1px solid #e1e1e1;
        text-align: center;
        overflow: hidden;
        height: 100%;


    }

    .pricingTable .pricingTable-header {
        padding: 20px;
        color: #000;
    }

    .pricingTable .title {
        font-size: 18px;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 0 0 8px 0;
    }

    .pricingTable .price-value {
        font-size: 48px;
        font-weight: 700;
    }

    .pricingTable .pricing-content {
        padding: 50px 0;
        margin: 0;
        list-style: none;
        border-top: 1px solid #e1e1e1;
        color: #555;
        position: relative;
        transition: all 0.3s ease 0s;
        overflow-y: scroll;
        height: 450px;
    }

    .pricingTable:hover .pricing-content {
        background: #000;
        color: #fff;
        position: relative;

    }

    .pricingTable .pricing-content:before {
        content: attr(data-heading);
        width: 100%;
        height: 100%;
        color: #fff;
        font-size: 40px;
        font-weight: 700;
        letter-spacing: 4px;
        text-transform: uppercase;
        position: absolute;
        top: 0;
        left: -100px;
        opacity: 1;
        transform: rotate(-90deg);
        transition: all 0.3s ease 0s;
    }

    .pricingTable:hover .pricing-content:before {
        left: -30px;
        opacity: 1;
    }

    .pricingTable .pricing-content li {
        padding: 10px 0;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.7px;
    }

    .pricingTable .pricing-content li i {
        font-size: 15px;
        padding-right: 3px;
    }

    .pricingTable .pricingTable-signup {
        padding: 40px 0;
        border-top: 1px solid #e1e1e1;
        transition: all 0.3s ease 0s;
    }

    .pricingTable:hover .pricingTable-signup {
        background: #cf4d4d;
    }

    .pricingTable .pricingTable-signup a {
        display: inline-block;
        padding: 12px 50px;
        border: 1px solid #000;
        text-transform: uppercase;
        font-size: 16px;
        color: #000;
        position: relative;
        z-index: 1;
        transition: all 0.5s ease 0s;
    }

    .pricingTable:hover .pricingTable-signup a {
        border-color: #fff;
        color: #fff;
    }

    .pricingTable .pricingTable-signup a:hover {
        border-color: transparent;
        color: #fff;
    }

    .pricingTable .pricingTable-signup a:before,
    .pricingTable .pricingTable-signup a:after,
    .pricingTable .pricingTable-signup a span:before,
    .pricingTable .pricingTable-signup a span:after {
        content: "";
        width: 25.5%;
        height: 0;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all 0.5s ease 0s;
    }

    .pricingTable .pricingTable-signup a:after {
        top: auto;
        bottom: 0;
        left: 25%;
    }

    .pricingTable .pricingTable-signup a span:before {
        top: 0;
        left: auto;
        right: 25%;
    }

    .pricingTable .pricingTable-signup a span:after {
        top: auto;
        left: auto;
        bottom: 0;
        right: 0;
    }

    .pricingTable .pricingTable-signup a:hover:before,
    .pricingTable .pricingTable-signup a:hover:after,
    .pricingTable .pricingTable-signup a:hover span:before,
    .pricingTable .pricingTable-signup a:hover span:after {
        height: 100%;
        background: #000;
    }

    @media only screen and (max-width: 990px) {
        .pricingTable {
            margin-bottom: 40px;
        }
    }

    @media only screen and (max-width: 479px) {
        .pricingTable .pricing-content:before {
            font-size: 30px;
        }

        .pricingTable:hover .pricing-content:before {
            left: -15px;
        }
    }

    @media only screen and (max-width: 359px) {
        .pricingTable:hover .pricing-content:before {
            left: 0;
        }
    }

</style>