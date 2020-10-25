<?php

use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Army\PlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/**
 * @var $category \core\entities\Army\PlanCategory
 */

$this->title = $category->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-index">

    <p>
        <?= Html::a('Добавить план', ['create-plan', 'alias' => $category->alias], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'text:ntext',
            [
                'class' => ActionColumn::className(),
                'template' => '{update}  {upload} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/plan-update', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-pencil"></i>', $url, [
                            'title' => Yii::t('app', 'Редактировать'),
                        ]);
                    },
                    'upload' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/plan-upload', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-download"></i>', $url, [
                            'title' => Yii::t('app', 'Загрузить новый план'),
                        ]);
                    },
                    'deleete' => function ($url, $model) {
                        $url = \yii\helpers\Url::to(['/department/common/delete', 'id' => $model->id]);
                        return Html::a('<i class="fa fa-remove"></i>', $url, [
                            'title' => Yii::t('app', 'Удалить'),
                        ]);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
