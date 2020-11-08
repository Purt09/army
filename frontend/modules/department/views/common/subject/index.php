<?php

use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Education\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Предметы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить предмет', ['subject-create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description:ntext',
            [
                'attribute' => 'unit_id',
                'filter' => \core\entities\User\TblMilUnit::typeShortList(),
                'value' => function ($model) {
                    return \core\entities\User\TblMilUnit::typeShortLabel($model->unit_id);
                },
                'format' => 'raw'
            ],
            'special:boolean',

            [
                'class' => ActionColumn::className(),
                'template' => '{update}  {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/subject-update', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-pencil"></i>', $url, [
                            'title' => Yii::t('app', 'Редактировать'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/subject-delete', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-remove"></i>', $url, [
                            'title' => Yii::t('app', 'Удалить'),
                        ]);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
