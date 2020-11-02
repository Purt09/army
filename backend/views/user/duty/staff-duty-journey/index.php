<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Duty\TblStaffDutyJourneySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Командировки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-duty-journey-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить командировку', ['create'], ['class' => 'btn btn-success']) ?>
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
            'id_staff',
            'date_start',
            'date_end',
            'id_city',
            'id_order_owner',
            'order_date',
            'order_number',
            'organization',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
