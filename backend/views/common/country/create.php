<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\TblCountry */

$this->title = 'Добавить страну';
$this->params['breadcrumbs'][] = ['label' => 'Страны', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
