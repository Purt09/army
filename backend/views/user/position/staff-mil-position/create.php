<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Position\TblStaffMilPosition */

$this->title = 'Create Tbl Staff Mil Position';
$this->params['breadcrumbs'][] = ['label' => 'Приказы должностей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-mil-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
