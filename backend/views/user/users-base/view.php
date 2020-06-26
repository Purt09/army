<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\UsersBase */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-base-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'role_name',
            'with_inheritance:boolean',
            'unique_id',
            'last_update',
            'id_rank',
            'id_state',
            'id_maclabel',
            'lastname',
            'firstname',
            'sirname',
            'fio',
            'insert_time',
            'email:email',
            'acc_right_num',
            'acc_right_date',
            'is_connected:boolean',
        ],
    ]) ?>

</div>
