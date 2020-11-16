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


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'text:ntext',
            [
                'attribute' => 'semester_id',
                'filter' => \core\entities\Education\Semester::typeList()
            ],
            [
                'attribute' => 'unit_id',
                'filter' => \core\entities\User\TblMilUnit::typeList()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
