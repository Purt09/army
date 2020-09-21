<?php

use core\entities\News\News;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$news = News::find()->where(['important' => true])->limit(5)->orderBy('id DESC')->all();

?>
<!--<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>-->
<link rel="stylesheet" type="text/css" href="/img/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/img/slick/slick-theme.css">
<script src="/img/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".variable").slick({

            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 3,
            autoplay: false,
            autoplaySpeed: 1500
        });
    });
</script>
<style type="text/css">
    html, body {
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }


</style>
<style>


    .btn-grd-danger,
    .btn-grd-disabled,
    .btn-grd-info,
    .btn-grd-inverse,
    .btn-grd-primary,
    .btn-grd-success,
    .btn-grd-warning,
    .btn-grd-warning {
        background-size: 100% auto;
        -webkit-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
        color: #fff;
    }

    .btn-grd-danger:hover,
    .btn-grd-disabled:hover,
    .btn-grd-info:hover,
    .btn-grd-inverse:hover,
    .btn-grd-primary:hover,
    .btn-grd-success:hover,
    .btn-grd-warning:hover,
    .btn-grd-warning:hover {
        background-position: right center;
    }

    .btn-grd-danger.hor-grd,
    .btn-grd-disabled.hor-grd,
    .btn-grd-info.hor-grd,
    .btn-grd-inverse.hor-grd,
    .btn-grd-primary.hor-grd,
    .btn-grd-success.hor-grd,
    .btn-grd-warning.hor-grd,
    .btn-grd-warning.hor-grd {
        background-size: auto 100%;
    }

    .btn-grd-danger.hor-grd:hover,
    .btn-grd-disabled.hor-grd:hover,
    .btn-grd-info.hor-grd:hover,
    .btn-grd-inverse.hor-grd:hover,
    .btn-grd-primary.hor-grd:hover,
    .btn-grd-success.hor-grd:hover,
    .btn-grd-warning.hor-grd:hover,
    .btn-grd-warning.hor-grd:hover {
        background-position: bottom center;
    }

    .btn-grd-primary {
        background-image: -webkit-gradient(linear, left top, right top, from(#77aaff), color-stop(51%, #0764ff), to(#77aaff));
        background-image: linear-gradient(to right, #77aaff 0%, #0764ff 51%, #77aaff 100%);
        position: absolute;
        margin-top: 8em;
        margin-left: -2em;
    }

    .slad {
        text-align: center;
        position: relative;
    }


</style>

<style>
    .carousel-caption {
        top: 0%;
    }

    .carousel-animate .carousel-indicators > li {
        margin: 0 2px;
        background-color: #fff;
        border-color: rgb(58, 36, 83);
        opacity: .7;
    }

    .carousel-animate .carousel-indicators > li.active {
        width: 10px;
        height: 10px;
        opacity: 1;
    }

    .carousel-animate .hero {
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.75);

    }

    @media screen and (max-width: 640px) {
        .hero h1 {
            font-size: 2em;
        }
    }

    .carousel-fade .carousel-inner .item {
        transition-property: opacity;
        height: 25vh;
    }

    .carousel-fade .carousel-inner .item,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        opacity: 0;
    }

    .carousel-fade .carousel-inner .active,
    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }

    .carousel-fade .carousel-inner .next,
    .carousel-fade .carousel-inner .prev,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        transform: translate3d(0, 0, 0);
    }

    .carousel-bg .carousel-inner .item {
        background-color: darkslategrey;
        background-size: cover;
        background-position: center;
        min-height: 100%;
    }
</style>
<div class="background_header">
    <div class="col-sm-2">
        <div style="text-align: left;">
            <?= \frontend\widget\EmblemaWidget::widget() ?>
        </div>

    </div>
    <?php /*
    <СЛАЙДЕР>
*/ ?>
    <section class="variable slider" style="margin-top: 0">
        <div class="slad slider col-sm-8" style="margin-top: 0">

            <button class="btn waves-effect waves-light btn-grd-primary ">Читать</button>

            <img src="/img/kar1.png" style="width: 250px; height: 180px">
        </div>
        <div class="slad">
            <button class="btn waves-effect waves-light btn-grd-primary ">Читать</button>

            <img src="/img/kar1.png" style="width: 250px; height: 180px">
        </div>
        <div class="slad">

            <button class="btn waves-effect waves-light btn-grd-primary">Читать</button>

            <img src="/img/kar1.png" style="width: 250px; height: 180px">
        </div>
        <div class="slad">

            <button class="btn waves-effect waves-light btn-grd-primary">Читать</button>

            <img src="/img/kar1.png" style="width: 250px; height: 180px">
        </div>
        <div class="slad">

            <button class="btn waves-effect waves-light btn-grd-primary">Читать</button>

            <img src="/img/kar1.png" style="width: 250px; height: 180px">
        </div>
    </section>
    <?php /*
<!СЛАЙДЕР>
*/ ?>
    <div class="col-sm-2">
        <div style="text-align: right; ">
            <img src="/img/эмбвка.png" style="  width: auto;  height: 25vh; position: relative;">
        </div>
    </div>
</div>

<div class="wrapper">
    <header class="main-header">

        <?= Html::a('<span class="logo-mini">Меню</span><span class="logo-lg"> Главная </span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>


        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu" style="float: left">

                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu" style="background-color: #cc00cc;">
                        <a href="/moodle/">
                            Онлайн обучение
                        </a>
                    </li>
                    <li class="dropdown messages-menu">
                        <a href="http://rashod.vka/">
                            Расход
                        </a>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Планы
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/time/plan/fakultet">
                                        План факультета на месяц
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/fakultet-year">
                                        План факультета на год
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/yms">
                                        Планы УМС
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/plan/academy">
                                        Планы академии на месяц
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Методическая деятельность
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/time/method/cel-academy">
                                        Целевые показатели академии
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/method/cel-fakultet">
                                        Целевые показатели факультета
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/method/pisp">
                                        План ПП и ПК на 2020
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/method/plans">
                                        Планы
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/method/pp">
                                        ПИСП
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            Научная работа
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/time/science/vno">
                                        ВНО
                                    </a>
                                </li>
                                <li>
                                    <a href="/time/science/pisp">
                                        ПИСП
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li class="dropdown messages-menu">
                            <a href="/login">
                                Вход
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="dropdown messages-menu">
                            <a href="/lk/profile/view?id=<?= Yii::$app->user->identity->base->id ?>">
                                Личный кабинет(<?= Yii::$app->user->identity->base->fio ?>)
                            </a>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="/logout">
                                Выход
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="dropdown messages-menu">
                        <a href="/time/instruction/instruction">
                            Инструкция
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


