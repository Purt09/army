<?php

use core\entities\News\News;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$news = News::find()->where(['important' => true])->limit(5)->orderBy('id DESC')->all();

?>
<div class="background_header">
    <div class="col-sm-2">
        <div style="text-align: left;">
            <?= \frontend\widget\EmblemaWidget::widget() ?>
        </div>

    </div>
    <?php /*
    <СЛАЙДЕР>
*/ ?>
    <div class="col-sm-8">

        <div>
            <div  class="carousel" data-ride="carousel" id="mySlider" data-interval="false">
                <div class="row carousel-inner center-block">
                    <?php foreach ($news as $new): ?>
                        <a href="<?= '/news/' . $new->id ?>">
                            <div class="col-md-4 item active">
                                <img src="<?= $new->img ?>" class="img-responsive center-block" style="height: 25vh;">
                                <div class="carousel-caption">
                                    <h3><?= mb_strimwidth($new->title, 0, 50, "..."); ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a class="left carousel-control" href="#mySlider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mySlider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
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


