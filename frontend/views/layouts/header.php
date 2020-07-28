<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<div class="banner_main">
    <img src="/img/new_banner.jpg" style="width:100%;">
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
