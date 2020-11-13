<?php

/* @var $this yii\web\View */
/* @var $searchModel core\entities\News\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function ($model) {
                    return "<a href='/news/{$model->id}' >{$model->title}</a>";
                }
            ],
            [
                'attribute' => 'img',
                'format' => 'raw',
                'filter' => false,
                'value' => function ($model) {
                    return "<img src='{$model->img}' width='100px'>";
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' =>
                    [
                        'update' => function ($url, $model, $key) {
                            $url = '/news/update?id=' . $model->id;
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
