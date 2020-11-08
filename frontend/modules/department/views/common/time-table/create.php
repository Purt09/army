<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Timetable */

$this->title = 'Добавить расписание';
$this->params['breadcrumbs'][] = ['label' => 'Расписание', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timetable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
