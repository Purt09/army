<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblConferenceResultType */

$this->title = 'Create Tbl Conference Result Type';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Conference Result Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-conference-result-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
