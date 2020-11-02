<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblStaffPenalty */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Staff Penalties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-staff-penalty-view">

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
            'unique_id',
            'last_update',
            'id',
            'id_io_state',
            'uuid_t',
            'rr_name',
            'r_icon',
            'record_fill_color',
            'record_text_color',
            'id_penalty_type',
            'id_staff',
            'id_order_owner',
            'order_date',
            'order_number',
            'id_finish_penalty',
            'notes:ntext',
        ],
    ]) ?>

</div>
