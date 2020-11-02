<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\TblMilUnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Поразделения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-mil-unit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'id_parent',
                'filter' => \core\entities\User\TblMilUnit::typeList(),
                'value' => function (\core\entities\User\TblMilUnit $model) {
                    if(isset($model->id_parent))
                        return $model->parent->name;
                    else
                        return '-';
                },
                'format' => 'raw'
            ],
            'number',
            'short_name',
            'name',
            [
                'attribute' => 'id_chief',
                'filter' => false,
                'value' => function (\core\entities\User\TblMilUnit $model) {
                    if(isset($model->id_chief))
                        return $model->chief->fio;
                    else
                        return '-';
                },
                'format' => 'raw'
            ],
            'work_phone',
            'chief_phone',
            'item_is_leaf',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
