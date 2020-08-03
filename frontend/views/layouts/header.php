<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<div class="background_header">
    <div class="col-sm-3">
        <div style="text-align: left;">
            <img src="/img/эмбфак.png" width="150px" height=100%>
        </div>
    </div>
    <div class="col-sm-6">
        <div style="text-align: center; display: block; height: 100%;">
            <div style="position: absolute; text-align: center; ">
                <h1 style="color: white; border-color: #fff; margin: 40px;">
                    ФАКУЛЬТЕТ СБОРА И ОБРАБОТКИ ИНФОРМАЦИИ
                </h1>
            </div>
            <div>
                <img src="/img/1.gif" width="100%" height=100% style="border-radius: 50px; box-shadow: 0 0 20px #000;">
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="text-align: right; ">
            <img src="/img/эмбвка.png" width="150px" height=100%>
        </div>
    </div>
</div>

<div class="wrapper">
    <header class="main-header">

        <?= Html::a('<span class="logo-mini">Меню</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>


        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu" style="float: left">

                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu" style="background-color: brown;">
                        <a href="/moodle/">
                            MOODLE(Онлайн обучение)
                        </a>
                    </li>
                    <li class="dropdown messages-menu">
                        <a href="#">
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
                                    <a href="#">
                                        Аттестация
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Сессия
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
                                    <a href="#">
                                        Подготовка и повышение квалификации
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Планы
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Писп(РИР)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Индивиндуальные планы
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
                                    <a href="#">
                                        ВНО
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Конкурсы
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
