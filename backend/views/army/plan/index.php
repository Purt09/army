<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Army\PlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Планы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить план', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            'category_id',
            'unit_id',
            //'created_at',
            //'date',
            //'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
