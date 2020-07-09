<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */


backend\assets\AppAsset::register($this);
\frontend\assets\CalendarAsset::register($this);
dmstr\web\AdminLteAsset::register($this);

Yii::$app->name = '5 Факультет';

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="banner_main">
    <div style="">
        <div class="banner-left" style="position:absolute; ">
            <img src="images/logo.png" alt="logo" width="370" height="250">
    </div>
    <div class="banner-centr" style="padding-left:470px;  position:absolute">
            <div style="position:absolute; color:white; padding-top:45px">
                <h1 align="center"> ФАКУЛЬТЕТ СБОРА И ОБРАБОТКИ ИНФОРМАЦИИ</h1>
            </div>
            <img src="images/acad2.jpeg" alt="logo" width="600" height="250">
        </div> 
        <div>
            <img src="images/flogo.png" alt="logo" style="position: absolute; top: -24px; width: 230px; height: auto; left: 60%;">
        </div>
    </div>
</div>
   
<div class="wrapper">

    <?= $this->render(
        'header.php',
        ['directoryAsset' => $directoryAsset]
    ) ?>

    <?= $this->render(
        'left.php',
        ['directoryAsset' => $directoryAsset]
    )
    ?>

    <?= $this->render(
        'content.php',
        ['content' => $content, 'directoryAsset' => $directoryAsset]
    ) ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
