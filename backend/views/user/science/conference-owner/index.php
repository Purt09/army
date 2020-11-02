<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Science\TblConferenceOwnerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Conference Owners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-conference-owner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Conference Owner', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'short_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
