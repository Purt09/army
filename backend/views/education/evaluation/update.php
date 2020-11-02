<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Evaluation */

$this->title = 'Редактировать Evaluation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Оценки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="evaluation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
