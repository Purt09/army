<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MdlUser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mdl Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mdl-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Дейстивтельно удалить',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'auth',
            'confirmed',
            'policyagreed',
            'deleted',
            'suspended',
            'mnethostid',
            'username',
            'password',
            'idnumber',
            'firstname',
            'lastname',
            'email:email',
            'emailstop:email',
            'icq',
            'skype',
            'yahoo',
            'aim',
            'msn',
            'phone1',
            'phone2',
            'institution',
            'department',
            'address',
            'city',
            'country',
            'lang',
            'calendartype',
            'theme',
            'timezone',
            'firstaccess',
            'lastaccess',
            'lastlogin',
            'currentlogin',
            'lastip',
            'secret',
            'picture',
            'url:url',
            'description:ntext',
            'descriptionformat',
            'mailformat',
            'maildigest',
            'maildisplay',
            'autosubscribe',
            'trackforums',
            'timecreated:datetime',
            'timemodified:datetime',
            'trustbitmask',
            'imagealt',
            'lastnamephonetic',
            'firstnamephonetic',
            'middlename',
            'alternatename',
        ],
    ]) ?>

</div>
