<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblOrderOwner */

$this->title = 'Создание должности';
$this->params['breadcrumbs'][] = ['label' => 'Должности', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-order-owner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
