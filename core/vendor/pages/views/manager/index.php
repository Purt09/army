<?php

use yii\helpers\Html;
use yii\grid\GridView;
use core\vendor\pages\Module;
use core\vendor\pages\models\Page;

/* @var $this yii\web\View */
/* @var $searchModel core\vendor\pages\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('MODULE_NAME');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<p>
    <?= Html::a(Module::t('CREATE'), ['create'], ['class' => 'btn btn-success']); ?>
</p>
<?= GridView::widget([
    'tableOptions' => [
        'class' => 'table table-striped',
    ],
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'title',
        'alias',
        'created_at:datetime',
        'updated_at:datetime',
        [
            'attribute' => 'published',
            'filter' => Page::publishedDropDownList(),
            'value' => function ($model) {
                return Yii::$app->formatter->asBoolean($model->published);
            },
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => "{update}\n{delete}",
        ],
    ],
]); ?>
