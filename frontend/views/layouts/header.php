<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

?>


<style>
    .carousel-caption{
        top: 0%;
    }
    .carousel-animate .carousel-indicators > li {
        margin: 0 2px;
        background-color: #fff;
        border-color: rgb(58,36,83);
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
    <div class="col-sm-8">
        <div id="carousel-example-generic" class="carousel slide carousel-fade carousel-animate carousel-bg"
             data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image: url(/img/карусель1.png)">
                    <div class="carousel-caption">
                        <div class="hero">
                            <hgroup class="zoomInDown animated">
                                <h1>Факультет сбора и обработки информации</h1>
                            </hgroup>

                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(/img/карусель2.png)">
                    <div class="carousel-caption">
                        <div class="hero fadeInUp animated">
                            <hgroup>
                                <h1>Факультет сбора и обработки информации</h1>
                            </hgroup>

                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(/img/карусель3.png)">
                    <div class="carousel-caption">
                        <div class="hero rollIn animated">
                            <hgroup class="rotateInDownRight animated">
                                <h1>Факультет сбора и обработки информации</h1>

                            </hgroup>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Назад</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Вперёд</span>
            </a>
        </div>
    </div>
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
                </ul>
            </div>
        </nav>
    </header>
