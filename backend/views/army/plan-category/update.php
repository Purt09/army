<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\PlanCategory */

$this->title = 'Update Plan Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Категории планов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plan-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
