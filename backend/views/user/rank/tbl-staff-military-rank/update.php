<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MilitaryRank\TblStaffMilitaryRank */

$this->title = 'Редактировать Tbl Staff Military Rank: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Приказы званий', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="tbl-staff-military-rank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
