<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MilitaryRank\TblStaffMilitaryRank */

$this->title = 'Добавить приказ на звание';
$this->params['breadcrumbs'][] = ['label' => 'Приказы званий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-military-rank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
