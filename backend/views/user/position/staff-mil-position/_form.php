<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Position\TblStaffMilPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-mil-position-form">

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

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'id_mil_unit')->textInput() ?>

    <?= $form->field($model, 'id_mil_position')->textInput() ?>

    <?= $form->field($model, 'vus')->textInput() ?>

    <?= $form->field($model, 'tarif')->textInput() ?>

    <?= $form->field($model, 'is_military')->checkbox() ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

    <?= $form->field($model, 'id_order_owner')->textInput() ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
