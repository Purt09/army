<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\User */

$this->title = 'Профиль пользователя ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= \yii\bootstrap\Tabs::widget([
        'items' => [
            [
                'label' => 'Данные пользователя',
                'content' => DetailView::widget([
                        'model' => $model->base,
                        'attributes' => [
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
                        ],
                    ]) .
                    Html::a('Редактировать', ['user/tbl-staff/update?id=' . $model->base->id], ['class' => 'btn btn-success']) .
                    Html::a('Управлять ролями', ['user-admin/assignment/view?id=' . $model->id], ['class' => 'btn btn-success']),
                'active' => true
            ],
            [
                'label' => 'Данные с мудл',
                'content' => DetailView::widget([
                    'model' => $model->moodle,
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
                ]),
            ],
            [
                'label' => 'Технические данные пользователя',
                'content' => DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'username',
                        'auth_key',
                        'password',
                        'password_hash',
                        'status',
                        'created_at',
                        'updated_at',
                        'verification_token',
                        'user_moodle_id',
                        'user_base_id',
                    ],
                ]),
            ],
        ],
    ]);
    ?>

</div>
