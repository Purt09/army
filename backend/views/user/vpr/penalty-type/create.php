<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblPenaltyType */

$this->title = 'Create Tbl Penalty Type';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Penalty Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-penalty-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
