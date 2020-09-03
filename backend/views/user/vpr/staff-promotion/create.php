<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblStaffPromotion */

$this->title = 'Create Tbl Staff Promotion';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-promotion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
