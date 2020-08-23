<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblStaffMilitaryRank */

$this->title = 'Update Tbl Staff Military Rank: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Military Ranks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-staff-military-rank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
