<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Science\TblStaffScienceConferenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Staff Science Conferences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-science-conference-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_science_conference',
            'id_staff',
            'id_conference_result_type',
            'result',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
