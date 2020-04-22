<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\user\MdlUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mdl Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mdl-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mdl User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            'firstname',
            'lastname',
            //'password',
            //'picture',
            //'suspended',
            //'mnethostid',
            //'idnumber',
            //'emailstop:email',
            //'icq',
            //'skype',
            //'yahoo',
            //'aim',
            //'msn',
            //'phone1',
            //'phone2',
            //'institution',
            //'department',
            //'address',
            //'city',
            //'country',
            //'lang',
            //'calendartype',
            //'theme',
            //'timezone',
            //'firstaccess',
            //'lastaccess',
            //'lastlogin',
            //'currentlogin',
            //'lastip',
            //'secret',
            //'url:url',
            //'description:ntext',
            //'descriptionformat',
            //'mailformat',
            //'maildigest',
            //'maildisplay',
            //'autosubscribe',
            //'trackforums',
            //'timecreated:datetime',
            //'timemodified:datetime',
            //'trustbitmask',
            //'imagealt',
            //'lastnamephonetic',
            //'firstnamephonetic',
            //'middlename',
            //'alternatename',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
