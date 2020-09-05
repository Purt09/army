<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblStaff */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
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
    ]) ?>

</div>
