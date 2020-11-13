<?php

/* @var $this yii\web\View */
/* @var $searchModel core\entities\News\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = "Объявления"
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
<a href="<?= \yii\helpers\Url::to('create') ?>" class="btn btn-success">Добавить новое объявление</a>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function ($model) {
                    return substr($model->content, 0, 150);
                }
            ],
            [
                'attribute' => 'updated_at',
                'label' => 'Объявление активно до',
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDatetime($model->updated_at);
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' =>
                    [
                        'update' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url);
                        },
                        'delete' => function ($url, $model, $key) {
                            $url = '/news/delete?id=' . $model->id;
                            return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url);
                        },
                    ],
            ],
        ],
    ]); ?>


</div>
