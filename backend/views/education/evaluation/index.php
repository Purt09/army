<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\Education\EvaluationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оценки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить оценку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'result',
            'semester_id',
            'user_id',
            'subject_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
