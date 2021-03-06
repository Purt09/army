<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Science\TblScienceConferenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Научные конференции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-science-conference-index">

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
            'id',
            'id_conference_owner',
            'id_conference_rank',
            'name',
            'date_start',
            'date_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
