<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblStaffJobAssignment */

$this->title = 'Create Tbl Staff Job Assignment';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Job Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-job-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
