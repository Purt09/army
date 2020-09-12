<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \core\entities\User\Position\TblStaffMilPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/**
 * @var $staff \core\entities\User\TblStaff
 */

$this->title = 'История должностей у ' . $staff->fio;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-military-rank-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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
                'attribute' => 'id_order_owner',
                'filter' => \core\entities\User\TblOrderOwner::typeList(),
                'value' => function (\core\entities\User\Position\TblStaffMilPosition $model) {
                    return $model->orderOwner->name;
                },
                'format' => 'raw'
            ],
            'order_date',
            'order_number',
        ],
    ]); ?>


</div>
