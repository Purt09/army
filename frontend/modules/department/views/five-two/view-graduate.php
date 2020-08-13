<?php
/**
 * @var $this \yii\web\View
 * @var $model \bupy7\pages\models\Page
 */

$this->title = 'Выпускники 52 кафедры';

?>

<?= $model->content ?>
<section class="content">
    <div class="">
        <div class="col-sm-12 head_inf">
            <div class="col-sm-9">
                <h2>ВЫДАЮЩИЕСЯ ВЫПУСКНИКИ 52 КАФЕДРЫ<h2>

            </div>
            <div class="col-sm-3 logo">
                <img src="/img/эмб52.png" alt="\">
            </div>

        </div>
        <div class="col-sm-12 inf_block">
            <div>
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/004.jpg" alt="demo image 1">
                                <div style="text-align: center;">
                                    <h4> генерал-полковник Григоров С.И.</h4>
                                </div>
                            </div>
                            <div class="box-content">
                                <img src="/img/004.jpg" alt="demo image 2" style="width: 90px; height: auto;">
                                <h4 class="title">генерал-полковник Григоров С.И.
                                </h4>
                                <p class="description">Высокого звания «Герой России» удостоен выпускник факультета Прикладной космофизики и метеорологии 1974г.,<br> лауреат Государственной премии, Заслуженный специалист Вооруженных сил, доктор технических наук профессор генерал-полковник Григоров С.И.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/002.jpg" alt="demo image 2">
                                <div style="text-align: center;">
                                    <h4> генерал-лейтенант Суворов С.С.</h4>
                                </div>

                            </div>
                            <div class="box-content">
                                <img src="/img/002.jpg" alt="demo image 2" style="width: 90px; height: auto;">
                                <h4 class="title">генерал-лейтенант Суворов С.С.</h4>
                                <p class="description">
                                    В 2007г. начальник 52 кафедры доктор физико-математических наук профессор Суворов С.С. был назначен на должность заместителя начальника академии по учебной и научной работе, а с 2009 по 2014 гг. возглавлял академию. В настоящее время генерал-лейтенант Суворов С.С. проходит службу в должности председателя Военно-научного комитета (ВНК) ВС РФ. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/001.jpg" alt="demo image 3">
                                <div style="text-align: center;">
                                    <h4> Генерал-майор Кулешов Ю.В.</h4>
                                </div>
                            </div>
                            <div class="box-content">
                                <img src="/img/001.jpg" alt="demo image 2" style="width: 90px; height: auto;">
                                <h4 class="title">Генерал-майор Кулешов Ю.В.</h4>
                                <p class="description">В период 2008-2014 гг. кафедру возглавлял доктор технических наук профессор генерал-майор Кулешов Ю.В., который в настоящее время является заместителем начальника академии по учебной и научной работе.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>




<style type="text/css">

    .logo
    {
        height: 100px;
        text-align: right;
    }

    .logo img
    {
        height: 100%;
    }
    .head_inf{
        max-height: 300px;
        text-align: center;
        background: white;
        border-radius: 20px;
        padding: 15px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

    }

    .inf_block{
        background: #fff;
        border-style: outset;
        border-color: gold;
        padding: 5px;
        min-height: 500px;
    }


    .box{
        position: relative;
        perspective: 1000px;
        margin-top: 30px;

    }
    .box .box-img{
        transform: rotateY(0);
        transition: all 0.50s ease-in-out 0s;
        height: 400px;

    }
    .box:hover .box-img{
        transform: rotateY(-90deg);

    }
    .box .box-img img{
        width: 100%;
        height: 100%;
        object-fit: contain;

    }
    .box .box-content{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 60px 20px;
        text-align: center;
        background: rgba(0,0,0,0.7);
        transform: rotateY(90deg);
        transition: all 0.50s ease-in-out 0s;
    }
    .box:hover .box-content{
        transform: rotateY(0);
    }
    .box .title{
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
    }
    .box .description{
        overflow: auto;
        overflow-x: hidden;
        height: 100px;
        font-size: 14px;
        line-height: 24px;
        color: #fff;
    }
    .box .title:after,
    .box .description:after{
        content: "";
        width: 80%;
        display: block;
        border-bottom: 1px solid #fff;
        margin: 15px auto;
    }
    .box .social-links{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .box .social-links li{
        display: inline-block;
        margin: 0 10px;
    }
    .box .social-links li a{
        font-size: 20px;
        color: #a6a6a6;
    }
    .box .social-links li a:hover{
        text-decoration: none;
        color: #fff;
    }
    @media only screen and (max-width: 990px) {
        .box{ margin-bottom:20px; }
    }
    @media only screen and (max-width: 479px) {
        .box .box-content{ padding: 20px; }
    }
</style>