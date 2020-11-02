<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblPromotionType */

$this->title = 'Create Tbl Promotion Type';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Promotion Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-promotion-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
