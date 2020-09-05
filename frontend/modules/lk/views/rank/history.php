<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\MilitaryRank\TblStaffMilitaryRankSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'История званий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-military-rank-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id_military_rank',
                'filter' => false,
                'value' => function (\core\entities\User\MilitaryRank\TblStaffMilitaryRank $model) {
                    $rank = $model->militaryRank->name;
                    if(isset($rank))
                        return $model->militaryRank->name;
                    else
                        return 'Не задан';
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'id_order_owner',
                'filter' => \core\entities\User\TblOrderOwner::typeList(),
                'value' => function (\core\entities\User\MilitaryRank\TblStaffMilitaryRank $model) {
                    $order = $model->orderOwner->name;
                    if(isset($order))
                        return $model->orderOwner->name;
                    else
                        return 'Не задан';
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'order_date',
                'filter' => false,
            ],
            [
                'attribute' => 'order_number',
                'filter' => false,
            ],
        ],
    ]); ?>


</div>
