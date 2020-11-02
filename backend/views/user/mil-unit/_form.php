<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblMilUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-mil-unit-form">

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

    <?= $form->field($model, 'id_parent')->dropDownList(\core\entities\User\TblMilUnit::typeList()) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'short_name')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'id_chief')->textInput() ?>

    <?= $form->field($model, 'work_phone')->textInput() ?>

    <?= $form->field($model, 'chief_phone')->textInput() ?>

    <?= $form->field($model, 'item_is_leaf')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
