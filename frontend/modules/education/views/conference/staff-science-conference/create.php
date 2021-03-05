<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblStaffScienceConference */

$this->title = 'Create Tbl Staff Science Conference';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Science Conferences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-science-conference-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
