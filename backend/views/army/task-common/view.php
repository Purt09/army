<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\TaskCommon */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-common-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Реадактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'order_id',
            'order_date_finish',
            'date_finish',
            'name',
            'description:ntext',
            'is_complete_cafedra_51:boolean',
            'is_complete_cafedra_52:boolean',
            'is_complete_cafedra_53:boolean',
            'is_complete_cafedra_55:boolean',
            'is_complete_course_51:boolean',
            'is_complete_course_52:boolean',
            'is_complete_course_53:boolean',
            'is_complete_course_54:boolean',
            'is_complete_course_55:boolean',
            'is_complete_manager_cv:boolean',
            'is_complete_manager_vpr:boolean',
            'is_complete_manager_teacher:boolean',
            'created_at',
        ],
    ]) ?>

</div>
