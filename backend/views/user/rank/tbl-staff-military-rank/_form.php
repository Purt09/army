<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MilitaryRank\TblStaffMilitaryRank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-military-rank-form">

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

    <?= $form->field($model, 'id_military_rank')->dropDownList(\core\entities\User\MilitaryRank\TblMilitaryRank::typeList()) ?>

    <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

    <?= $form->field($model, 'order_date')->widget(\kartik\date\DatePicker::className()) ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
