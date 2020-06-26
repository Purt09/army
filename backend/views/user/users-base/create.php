<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\UsersBase */

$this->title = 'Create Users Base';
$this->params['breadcrumbs'][] = ['label' => 'Users Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-base-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
