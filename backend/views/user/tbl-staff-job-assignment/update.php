<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblStaffJobAssignment */

$this->title = 'Редактировать Tbl Staff Job Assignment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Job Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="tbl-staff-job-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
