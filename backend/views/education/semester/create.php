<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Semester */

$this->title = 'Добавить семестр';
$this->params['breadcrumbs'][] = ['label' => 'Семестры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semester-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
