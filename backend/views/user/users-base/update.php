<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\UsersBase */

$this->title = 'Update Users Base: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
