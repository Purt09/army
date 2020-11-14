<?php

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

    <p>
        <?= Html::a('Добавит ведомость по фп', ['create'], ['class' => 'btn btn-success']) ?>
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
            'semester_id',
            'unit_id',
            //'created_at',
            //'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
