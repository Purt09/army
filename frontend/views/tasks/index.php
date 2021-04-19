<?php

use common\components\column\ShowMoreColumn;
use kartik\date\DatePicker;
use kartik\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Army\TaskCommonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи и приказания';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .datepicker {
        z-index: 1900 !important;
    }
</style>
<div class="task-common-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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
                        'format' => 'dd-mm-yyyy'
                    ]
                ]),
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->date_finish);
                }
            ],
            [
                'attribute' => 'date_finish',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'date_from_finish',
                    'attribute2' => 'date_to_finish',
                    'type' => DatePicker::TYPE_RANGE,
                    'separator' => '-',
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-mm-yyyy'
                    ]
                ]),
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->date_finish);
                }
            ],
            'name',
            [
                'class' => ShowMoreColumn::className(),
                'size' => 50,
                'textMore' => 'Раскрыть',
                'textLow' => 'Скрыть',
                'attribute' => 'description',
                'format' => 'raw',
                'maxWidth' => 350,
                'contentOptions' => [
                    'aria-label' => 'Содержимое покупки'
                ],
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