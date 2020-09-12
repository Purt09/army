<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Education\TblUnivercitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Университеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-univercity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить университет', ['create'], ['class' => 'btn btn-success']) ?>
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
                    'attribute' => 'id_country',
                'value' => function ( \core\entities\User\Education\TblUnivercity $model) {
                    return $model->country->name;
                }
            ],
            [
                'attribute' => 'id_city',
                'value' => function ( \core\entities\User\Education\TblUnivercity $model) {
                    return $model->city->name;
                }
            ],
            'name',
            'title',
            'postcode',
            'phone',
            'fax',
            'email:email',
            'note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
