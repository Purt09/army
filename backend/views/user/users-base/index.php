<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\user\UsersBaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Bases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-base-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users Base', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'role_name',
            'with_inheritance:boolean',
            'unique_id',
            'last_update',
            //'id_rank',
            //'id_state',
            //'id_maclabel',
            //'lastname',
            //'firstname',
            //'sirname',
            //'fio',
            //'insert_time',
            //'email:email',
            //'acc_right_num',
            //'acc_right_date',
            //'is_connected:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
