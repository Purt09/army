<?php

use common\components\column\ShowMoreColumn;
use core\entities\User\Science\TblConferenceOwner;
use core\entities\User\Science\TblConferenceRank;
use core\entities\User\Science\TblScienceConference;
use core\helpers\user\RbacHelpers;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Science\TblScienceConferenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/**
 * @var $rank TblConferenceRank
 */
if(isset($rank))
    $this->title = $rank->name;
else
    $this->title = 'Научные конференции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-science-conference-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif; ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_conference_owner',
                'filter' => TblConferenceOwner::typeList(),
                'value' => function (TblScienceConference $model) {
                    return $model->conferenceOwner->name;
                },
                'format' => 'raw'
            ],
            [
                'class' => ShowMoreColumn::className(),
                'size' => 100,
                'textMore' => 'Раскрыть',
                'textLow' => 'Скрыть',
                'attribute' => 'description',
                'label' => 'Описание',
                'format' => 'raw',
                'maxWidth' => 350,
            ],
            'name',
            [
                'attribute' => 'date_start',
                'filter' => false
            ],
            [
                'attribute' => 'date_start',
                'filter' => false
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {users} {delete}',
                'buttons' =>
                    [
                        'update' => function ($url, $model, $key) {
                            if (RbacHelpers::checkRole(RbacHelpers::$MANAGER))
                                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url);
                        },
                        'users' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-user"></span>', $url);
                        },
                        'delete' => function ($url, $model, $key) {
                            if (RbacHelpers::checkRole(RbacHelpers::$MANAGER))
                            return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url);
                        },
                    ],
            ],
        ],
    ]); ?>


</div>
