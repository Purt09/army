<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\UserState */

$this->title = 'Update User State: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User States', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-state-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
