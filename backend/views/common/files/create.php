<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\FileLog */

$this->title = 'Create File Log';
$this->params['breadcrumbs'][] = ['label' => 'История действий с файлами', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
