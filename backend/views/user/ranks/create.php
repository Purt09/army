<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Ranks */

$this->title = 'Добавить звнаие';
$this->params['breadcrumbs'][] = ['label' => 'Звания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
