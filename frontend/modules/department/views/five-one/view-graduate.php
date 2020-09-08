<?php
/**
 * @var $this \yii\web\View
 * @var $model \bupy7\pages\models\Page
 */

$this->title = 'Выпускники 51 кафедры';

?>

<?= $model->content ?>
<section class="content">
    <div class="">
        <div class="col-sm-12 head_inf">
            <div class="col-sm-9">
                <h2>ВЫДАЮЩИЕСЯ ВЫПУСКНИКИ 51 КАФЕДРЫ<h2>

            </div>
            <div class="col-sm-3 logo">
                <img src="/img/эмб.png" alt="\">
            </div>

        </div>
        <div class="col-sm-12 inf_block">

            <div>
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/вып151.png" alt="demo image 1">
                                <div style="text-align: center;">
                                    <h4> Генерал-лейтенант ШИРШОВ  Сергей Анатольевич</h4>
                                </div>
                            </div>
                            <div class="box-content">
                                <img src="/img/вып151.png" alt="demo image 2" style="width: 90px; height: auto">
                                <h4 class="title">Генерал-лейтенант ШИРШОВ  Сергей Анатольевич
                                </h4>
                                <p class="description">Окончил кафедру в 1974 году.
                                    Прошел путь от инженера в/ч 54023 до заместителя начальника ГРУ ГШ</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/-.png" alt="demo image 2">
                                <div style="text-align: center;">
                                    <h4> Генерал-майор КРАЙЛЮК Анатолий Дмитриевич</h4>
                                </div>

                            </div>
                            <div class="box-content">
                                <img src="/img/-.png" alt="demo image 2" style="width: 90px; height: auto">
                                <h4 class="title">Генерал-майор КРАЙЛЮК Анатолий Дмитриевич</h4>
                                <p class="description">
                                    Кандидат технических наук.
                                    Окончил кафедру 1984 году с золотой медалью.
                                    Прошел путь от инженера до заместителя начальника управления развития военных технологий ГШ ВС РФ </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/153.png" alt="demo image 3">
                                <div style="text-align: center;">
                                    <h4> Генерал-майор ЗАПОРОЖСКИЙ Андрей Васильевич</h4>
                                </div>
                            </div>
                            <div class="box-content">
                                <img src="/img/153.png" alt="demo image 2" style="width: 90px; height: auto">
                                <h4 class="title">Генерал-майор ЗАПОРОЖСКИЙ Андрей Васильевич</h4>
                                <p class="description">Окончил кафедру с отличием в 1983 году.
                                    Прошел путь от инженера до командира в/ч 54023 по н.в</p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-left: 25%;">
                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-img">
                                    <img src="/img/a.jpg" alt="demo image 3">
                                    <div style="text-align: center;">
                                        <h4> Полковник АЛТУХОВ Евгений<br>Витальевич</h4>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <img src="/img/a.jpg" alt="demo image 2" style="width: 90px; height: auto">
                                    <h4 class="title">Полковник АЛТУХОВ Евгений Витальевич</h4>
                                    <p class="description">Окончил кафедру с отличием  в 1983 году.
                                        Кандидат военных наук.
                                        Прошел путь от инженера до заместителя командира в/ч 54023</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-img">
                                    <img src="/img/a.jpg" alt="demo image 3">
                                    <div style="text-align: center;">
                                        <h4> Полковник ЗЕМСКОВ Владимир<br>Федорович</h4>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <img src="/img/a.jpg" alt="demo image 2" style="width: 90px; height: auto">
                                    <h4 class="title">Полковник ЗЕМСКОВ Владимир Федорович
                                    </h4>
                                    <p class="description">Окончил кафедру с отличием в 1979 году.
                                        Кандидат технических наук.
                                        Прошел путь от инженера до начальника управления в/ч 54023</p>
                                </div>
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
        min-height: 970px;
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
        height: 400px;
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
        height: 200px;
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