<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblStaffDuty */

$this->title = 'Create Tbl Staff Duty';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Duties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-duty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
