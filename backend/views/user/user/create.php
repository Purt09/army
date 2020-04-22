<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $models \core\entities\User\User */
/* @var $roles array все роли, которые существуют */

$this->title = 'Создать пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'models' => $models,
        'roles' => $roles
    ]) ?>

</div>
