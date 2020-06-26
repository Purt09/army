<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\UserState */

$this->title = 'Create User State';
$this->params['breadcrumbs'][] = ['label' => 'User States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-state-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
