<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\Sport */

$this->title = 'Добавит ведомость по фп';
$this->params['breadcrumbs'][] = ['label' => 'Ведомости по фп', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
