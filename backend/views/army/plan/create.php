<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\Plan */

$this->title = 'Добавить план';
$this->params['breadcrumbs'][] = ['label' => 'Планы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
