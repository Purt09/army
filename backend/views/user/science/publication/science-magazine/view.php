<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\Publication\TblScienceMagazine */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Научные журналы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-science-magazine-view">

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
            'name',
            'is_ricc:boolean',
            'is_vak:boolean',
            'is_scopus:boolean',
            'is_shadow:boolean',
        ],
    ]) ?>

</div>
