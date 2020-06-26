<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\user\RanksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ranks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ranks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'unique_id',
            'last_update',
            'id',
            'name',
            'short_name',
            //'code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
