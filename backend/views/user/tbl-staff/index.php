<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\TblStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Staff', ['create'], ['class' => 'btn btn-success']) ?>
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
            'rr_name',
            'r_icon',
            'record_fill_color',
            'record_text_color',
            'id_current_mil_rank',
            'id_current_mil_position',
            'fio',
            'lastname',
            'firstname',
            'sirname',
            'passport_number',
            'email:email',
            'mobile_phone',
            'wife_mobile_phone',
            'home_phone',
            'work_phone',
            'address',
            'birthday_date',
            'udl_number',
            'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
