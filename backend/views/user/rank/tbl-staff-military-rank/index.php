<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\TblStaffMilitaryRankSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Staff Military Ranks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-military-rank-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Staff Military Rank', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'unique_id',
//            'last_update',
            'id',
//            'id_io_state',
//            'uuid_t',
            //'rr_name',
            //'r_icon',
            //'record_fill_color',
            //'record_text_color',
            'id_military_rank',
            'id_order_owner',
            'id_staff',
            'order_date',
            'order_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
