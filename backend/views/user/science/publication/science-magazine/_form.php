<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\Publication\TblScienceMagazine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-science-magazine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'is_ricc')->checkbox() ?>

    <?= $form->field($model, 'is_vak')->checkbox() ?>

    <?= $form->field($model, 'is_scopus')->checkbox() ?>

    <?= $form->field($model, 'is_shadow')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
