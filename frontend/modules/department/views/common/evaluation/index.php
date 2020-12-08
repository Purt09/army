<?php

use core\entities\Education\Semester;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Education\EvaluationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оценки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить оценку', ['create-evaluation'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'result',
            [
                'attribute' => 'semester_id',
                'filter' => Semester::typeList(),
                'value' => function ($model) {
                    return $model->semester->title;
                }
            ],
            [
                'attribute' => 'user_id',
                'filter' => false,
                'value' => function ($model) {
                    return $model->user->base->fio;
                }
            ],
            [
                'attribute' => 'subject_id',
                'filter' => \core\entities\Education\Subject::typeList(),
                'value' => function ($model) {
                    return $model->subject->name;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' =>
                    [
                        'update' => function ($url, $model, $key) {
                            $url = '/department/common/update-evaluation?id=' . $model->id;
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url);
                        },
                        'delete' => function ($url, $model, $key) {
                            $url = '/department/common/delete-evaluation?id=' . $model->id;
                            return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url);
                        },
                    ],
            ],
        ],
    ]); ?>


</div>
