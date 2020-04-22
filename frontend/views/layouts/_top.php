<?php
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\Nav;
?>
<header>

    <form action="http://moodle5fak/autoauth.php" method="post" name="login">
        <input type="text" name="username" value="admin" />
        <input type="password" name="password" value="Fas123456!" />
        <input type="submit" value="Login" />
    </form>
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
        $menuItems[] = [
                            'label'=>'Олнайн обучение',
                            'url'=> Yii::$app->params['moodle_host_info'] . 'login/index.php?username=' . Yii::$app->user->identity->getUsername() . '&password=' . Yii::$app->user->identity->getPassword(),
                            'options'=>['id'=>'shater_li',],
                            'template' => '<a href="{url}" target="_blank">{label}</a>'
                        ];
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