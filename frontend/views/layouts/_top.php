<?php

use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\Nav;

?>
<header>

    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/auth/signup/request']];
        $menuItems[] = ['label' => 'Авторизация', 'url' => ['/auth/auth/login']];
    } else {
        $menuItems[] = ''
            . '<li><form action="' . Yii::$app->params['moodle_host_info'] . 'autoauth.php" method="post">'
            . '<input type="text" name="username" value="' . Yii::$app->user->identity->username .'" style="display:none">'
            . '<input type="text" name="password" value="' . Yii::$app->user->identity->password .'" style="display:none">'
            . '<button type="submit" class="btn btn-link logout">Дистанционное обучение</button>'
            . '</form></li>';
        $menuItems[] = '<li>'
            . Html::beginForm(['/auth/auth/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>