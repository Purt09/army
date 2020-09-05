<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Position\TblStaffMilPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Приказы должностей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-mil-position-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            [
                'attribute' => 'id_mil_unit',
                'filter' => \core\entities\User\TblMilUnit::typeList(),
                'value' => function (\core\entities\User\Position\TblStaffMilPosition $model) {
                    return $model->milUnit->name;
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'id_mil_position',
                'filter' => \core\entities\User\Position\TblMilPosition::typeList(),
                'value' => function (\core\entities\User\Position\TblStaffMilPosition $model) {
                    return $model->milPosition->name;
                },
                'format' => 'raw'
            ],
            'vus',
            'tarif',
            'is_military:boolean',
            [
                'attribute' => 'id_staff',
                'filter' => false,
                'value' => function (\core\entities\User\Position\TblStaffMilPosition $model) {
                    return $model->staff->fio;
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'id_order_owner',
                'filter' => \core\entities\User\TblOrderOwner::typeList(),
                'value' => function (\core\entities\User\Position\TblStaffMilPosition $model) {
                    return $model->orderOwner->name;
                },
                'format' => 'raw'
            ],
            'order_date',
            'order_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
