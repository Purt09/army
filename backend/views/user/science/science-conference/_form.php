<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblScienceConference */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-science-conference-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'unique_id')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'last_update')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'id_io_state')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'uuid_t')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'rr_name')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'r_icon')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'record_fill_color')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'record_text_color')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'id_conference_owner')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'id_conference_rank')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'date_start')->widget(\kartik\date\DatePicker::className()) ?>

    <?= $form->field($model, 'date_end')->widget(\kartik\date\DatePicker::className()) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
