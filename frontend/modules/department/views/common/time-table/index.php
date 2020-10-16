<?php

use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Education\TimetableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timetable-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить расписание', ['time-table-create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'semester_id',
                'filter' => \core\entities\Education\Semester::typeList(),
                'value' => function ($model) {
                    return \core\entities\Education\Semester::typeLabel($model->semester_id);
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'unit_id',
                'filter' => \core\entities\User\TblMilUnit::typeShortList(),
                'value' => function ($model) {
                    return \core\entities\User\TblMilUnit::typeShortLabel($model->unit_id);
                },
                'format' => 'raw'
            ],
            'summary',

            [
                'class' => ActionColumn::className(),
                'template' => '{update}  {upload}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/time-table-update', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-pencil"></i>', $url, [
                            'title' => Yii::t('app', 'Редактировать'),
                        ]);
                    },
                    'upload' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/time-table-upload', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-download"></i>', $url, [
                            'title' => Yii::t('app', 'Загрузить новое расписание'),
                        ]);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
