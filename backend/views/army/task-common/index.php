<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Army\TaskCommonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-common-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавит задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'order_id',
            [
                'attribute' => 'order_date_finish',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->order_date_finish);
                }
            ],
            [
                'attribute' => 'date_finish',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->date_finish);
                }
            ],
            'name',
            [
                'attribute' => 'description',
                'value' => function ($model) {
                    return mb_strimwidth($model->description,0,80);
                }
            ],
            //'is_complete_cafedra_51:boolean',
            //'is_complete_cafedra_52:boolean',
            //'is_complete_cafedra_53:boolean',
            //'is_complete_cafedra_55:boolean',
            //'is_complete_course_51:boolean',
            //'is_complete_course_52:boolean',
            //'is_complete_course_53:boolean',
            //'is_complete_course_54:boolean',
            //'is_complete_course_55:boolean',
            //'is_complete_manager_cv:boolean',
            //'is_complete_manager_vpr:boolean',
            //'is_complete_manager_teacher:boolean',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
