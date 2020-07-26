<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<div class="banner_main">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-2">
        <img src="/img/emblema-vka.png" alt="logo" style="height: 240px;width: auto;">
    </div>
    <div class="col-sm-5 col-xlg-4">
        <img src="/images/acad2.jpeg" alt="logo" width="600" height="250">
        <div style="position:absolute; color:white; z-index: 99;top: 40px;width: 600px;">
            <h1 style="text-align: center"> ФАКУЛЬТЕТ СБОРА И ОБРАБОТКИ ИНФОРМАЦИИ</h1>
        </div>
    </div>
    <div class="col-sm-2">
        <img src="/images/flogo.png" alt="logo" style="position: absolute; top: -24px; width: 230px; height: auto; ">
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
                        Спортивно-массовая работа
                    </a>
                </li>
                <li class="dropdown messages-menu">
                    <a href="#">
                        Кадровая работа
                    </a>
                </li>
                <li class="dropdown messages-menu">
                    <a href="#">
                        УМБ
                    </a>
                </li>
                <li class="dropdown messages-menu">
                    <a href="<?= \yii\helpers\Url::to('/site/contact') ?>">
                        Контакты
                    </a>
                </li>
                <li class="dropdown messages-menu">
                    <a href="#">
                        Служба войск
                    </a>
                </li>
                <li class="dropdown messages-menu">
                    <a href="#">
                        Боевая готовность
                    </a>
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
                            Личный кабинет
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
