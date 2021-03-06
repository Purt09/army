<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblMilUnit */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Поразделения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-mil-unit-view">

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
            'id_parent',
            'number',
            'short_name',
            'name',
            'id_chief',
            'work_phone',
            'chief_phone',
            'item_is_leaf',
        ],
    ]) ?>

</div>
