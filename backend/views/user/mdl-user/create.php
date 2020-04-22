<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MdlUser */

$this->title = 'Create Mdl User';
$this->params['breadcrumbs'][] = ['label' => 'Mdl Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mdl-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
