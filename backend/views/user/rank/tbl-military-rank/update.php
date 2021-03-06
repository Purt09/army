<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MilitaryRank\TblMilitaryRank */

$this->title = 'Редактировать Tbl Military Rank: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Звания', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="tbl-military-rank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
