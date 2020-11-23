<?php

use kartik\date\DatePicker;
use kartik\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Html;

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
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'date_from',
                    'attribute2' => 'date_to',
                    'type' => DatePicker::TYPE_RANGE,
                    'separator' => '-',
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd'
                    ]
                ]),
                'format' => ['date', 'php:Y-m-d']
            ],
            [
                'attribute' => 'date_finish',
                'filter' => false,
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

            [
                'class' => 'common\components\grid\CombinedDataColumn',
                'labelTemplate' => '{0}  | {1} | {2} | {3}',
                'valueTemplate' => '{0}  | {1} | {2} | {3}',
                'labels' => [
                    '51',
                    '52',
                    '53',
                    '55',
                ],
                'format' => 'raw',
                'filter' => '<span class="center-grid">Кафедры</span>',
                'attributes' => [
                    'is_complete_cafedra_51:boolean',
                    'is_complete_cafedra_52:boolean',
                    'is_complete_cafedra_53:boolean',
                    'is_complete_cafedra_55:boolean',
                ],
                'values' => [
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_cafedra_51;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_cafedra_52;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_cafedra_53;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_cafedra_55;
                    },
                ],
                'sortLinksOptions' => [
                    ['class' => 'text-nowrap'],
                    null,
                ],
            ],
            [
                'class' => 'common\components\grid\CombinedDataColumn',
                'labelTemplate' => '{0}  |  {1} | {2} | {3} | {4}',
                'valueTemplate' => '{0}  |  {1} | {2} | {3} | {4}',
                'labels' => [
                    '51',
                    '52',
                    '53',
                    '54',
                    '55',
                ],
                'format' => 'raw',
                'filter' => '<span class="center-grid">Курсы</span>',
                'attributes' => [
                    'is_complete_course_51:boolean',
                    'is_complete_course_52:boolean',
                    'is_complete_course_53:boolean',
                    'is_complete_course_54:boolean',
                    'is_complete_course_55:boolean',
                ],
                'values' => [
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_course_51;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_course_52;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_course_53;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_course_54;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_course_55;
                    },
                ],
                'sortLinksOptions' => [
                    ['class' => 'text-nowrap'],
                    null,
                ],
            ],
            [
                'class' => 'common\components\grid\CombinedDataColumn',
                'labelTemplate' => '{0}  |  {1} | {2}',
                'valueTemplate' => '{0}  |  {1} | {2}',
                'labels' => [
                    'СВ',
                    'ВПР',
                    'уч.часть',
                ],
                'format' => 'raw',
                'filter' => '<span class="center-grid">Управление</span>',
                'attributes' => [
                    'is_complete_manager_cv:boolean',
                    'is_complete_manager_vpr:boolean',
                    'is_complete_manager_teacher:boolean',
                ],
                'values' => [
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_manager_cv;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_manager_vpr;
                    },
                    function (\core\entities\Army\TaskCommon $model, $_key, $_index, $_column) {
                        return $model->is_complete_manager_teacher;
                    },
                ],
                'sortLinksOptions' => [
                    ['class' => 'text-nowrap'],
                    null,
                ],
            ],

            [
                'class' => ActionColumn::className(),
                'template' => '{update}  {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fa fa-pencil"></i>', $url, [
                            'title' => Yii::t('app', 'Редактировать'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<i class="fa fa-remove"></i>', $url, [
                            'title' => Yii::t('app', 'Удалить'),
                        ]);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
<style>
    .center-grid{
        width: 100%;
        display: block;
        font-weight: 700;
        text-align: center;
    }
</style>