<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Semester */

$this->title = 'Изменить  Semester: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Семестры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить ';
?>
<div class="semester-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
