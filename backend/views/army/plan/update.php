<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\Plan */

$this->title = 'Update Plan: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Планы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
