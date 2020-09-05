<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Science\TblConferenceResultTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Conference Result Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-conference-result-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Conference Result Type', ['create'], ['class' => 'btn btn-success']) ?>
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
            'id_io_state',
            'uuid_t',
            //'rr_name',
            //'r_icon',
            //'record_fill_color',
            //'record_text_color',
            //'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
