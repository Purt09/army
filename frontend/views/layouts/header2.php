<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>


<div class="background_header">
    <div class="col-sm-2">
        <div style="text-align: left;">
            <?= \frontend\widget\EmblemaWidget::widget()?>
        </div>

    </div>
    <div class="col-sm-8">
        <div style="text-align: center; display: block; height: 25vh; margin: 0">
            <h1 style="color: white; z-index: 2; text-align: center; position: absolute; top: 40%; left: 50%; margin-right: -50%;
transform: translate(-50%, -50%);">
                <?= \frontend\widget\LabelFullWidget::widget()?>
            </h1>
            <div style="position: relative;text-align: center;width: auto;height: 20vw;">
                <img src="/img/1.gif" style="border-radius: 50px; position: inherit;width: 100%;height: 25vh;">
            </div>
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
                    <li class="dropdown messages-menu" style="background-color: #D81B60;">
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
                            Образовательная деятельность
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="menu">
                                <li>
                                    <a href="/education/main">
                                        Аттестация
                                    </a>
                                </li>
                                <li>
                                    <a href="/education/main">
                                        Сессия
                                    </a>
                                </li>
                                <li>
                                    <a href="/education/main">
                                        Учебный год
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
                                    <a href="/site/method">
                                        Подготовка и повышение квалификации
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/method">
                                        Планы
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/method">
                                        Писп(РИР)
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/method"">
                                    Индивиндуальные планы
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/method">
                                        Целевые показатели
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
                                    <a href="/site/nayka">
                                        ВНО
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/nayka">
                                        Конкурсы
                                    </a>
                                </li>
                                <li>
                                    <a href="/site/naykaa">
                                        Выставки
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
                            <a href="/lk/desktop">
                                Личный кабинет(<?= Yii::$app->user->identity->username ?>)
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
