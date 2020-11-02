<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Vpr\TblStaffPenaltySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все взыскания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-penalty-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'attribute' => 'id_penalty_type',
                'filter' => \core\entities\User\Vpr\TblPenaltyType::typeList(),
                'value' => function ($model) {
                    return \core\entities\User\Vpr\TblPenaltyType::typeLabel($model->id_penalty_type);
                },
                'format' => 'raw'
            ],
            'id_staff',
            'id_order_owner',
            'order_date',
            'order_number',
            'id_finish_penalty',
            'notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
