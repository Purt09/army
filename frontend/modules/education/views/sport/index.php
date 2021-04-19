<?php

use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Common\SportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ведомости по фп';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sport-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'text:ntext',
            [
                'attribute' => 'semester_id',
                'filter' => \core\entities\Education\Semester::typeList(),
                'value' => function (\core\entities\Common\Sport $model) {
                    return $model->semester->title;
                }
            ],
            [
                'attribute' => 'unit_id',
                'filter' => \core\entities\User\TblMilUnit::typeShortList(),
                'value' => function (\core\entities\Common\Sport $model) {
                    return $model->unit->short_name;
                }
            ],

            [
                'class' => ActionColumn::className(),
                'template' => '{update}  {upload} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fa fa-pencil"></i>', $url, [
                            'title' => Yii::t('app', 'Редактировать'),
                        ]);
                    },
                    'upload' => function ($url, $model) {
                        return Html::a('<i class="fa fa-download"></i>', $url, [
                            'title' => Yii::t('app', 'Загрузить новый файл'),
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
