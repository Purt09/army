<?php

use core\helpers\user\RbacHelpers;
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel core\entities\User\Science\TblStaffScienceConferenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $model core\entities\User\Science\TblScienceConference */

$this->title = 'Участники конференции: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Научные конференции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-science-conference-view">

    <?php if(RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
    <p>
        <?= Html::a('Добавить участника', ['user-add', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif; ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_staff',
                'value' => function (\core\entities\User\Science\TblStaffScienceConference $conference) {
                    return $conference->staff->fio;
                }
            ],
            [
                'attribute' => 'id_conference_result_type',
                'filter' => \core\entities\User\Science\TblConferenceResultType::typeList(),
                'value' => function (\core\entities\User\Science\TblStaffScienceConference $conference) {
                    return $conference->conferenceResultType->name;
                }
            ],
            'result',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '',
                'buttons' =>
                    [
                        'update' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url);
                        },
                        'users' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-user"></span>', $url);
                        },
                        'delete' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url);
                        },
                    ],
            ],
        ],
    ]); ?>


</div>
