<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\TaskCommon */

$this->title = 'Добавит задачу';
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-common-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
