<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $models core\entities\User\User */

$this->title = 'Изменение пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'models' => $models,
    ]) ?>

</div>
