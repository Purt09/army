<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\PlanCategory */

$this->title = 'Добавить категорию';
$this->params['breadcrumbs'][] = ['label' => 'Категории планов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
