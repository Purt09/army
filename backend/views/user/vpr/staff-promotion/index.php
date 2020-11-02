<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Vpr\TblStaffPromotionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все поощерения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-promotion-index">

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
//            //'rr_name',
//            //'r_icon',
//            //'record_fill_color',
//            //'record_text_color',
            [
                'attribute' => 'id_promotion_type',
                'filter' => \core\entities\User\Vpr\TblPromotionType::typeList(),
                'value' => function ($model) {
                    return \core\entities\User\Vpr\TblPromotionType::typeLabel($model->id_promotion_type);
                },
                'format' => 'raw'
            ],
            'id_staff',
            'id_order_owner',
            'order_date',
            'order_number',
            'notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
