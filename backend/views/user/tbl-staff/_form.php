<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\TblStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unique_id')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'id_io_state')->textInput() ?>

    <?= $form->field($model, 'uuid_t')->textInput() ?>

    <?= $form->field($model, 'rr_name')->textInput() ?>

    <?= $form->field($model, 'r_icon')->textInput() ?>

    <?= $form->field($model, 'record_fill_color')->textInput() ?>

    <?= $form->field($model, 'record_text_color')->textInput() ?>

    <?= $form->field($model, 'id_current_mil_rank')->textInput() ?>

    <?= $form->field($model, 'id_current_mil_position')->textInput() ?>

    <?= $form->field($model, 'fio')->textInput() ?>

    <?= $form->field($model, 'lastname')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput() ?>

    <?= $form->field($model, 'sirname')->textInput() ?>

    <?= $form->field($model, 'passport_number')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'mobile_phone')->textInput() ?>

    <?= $form->field($model, 'wife_mobile_phone')->textInput() ?>

    <?= $form->field($model, 'home_phone')->textInput() ?>

    <?= $form->field($model, 'work_phone')->textInput() ?>

    <?= $form->field($model, 'address')->textInput() ?>

    <?= $form->field($model, 'birthday_date')->textInput() ?>

    <?= $form->field($model, 'udl_number')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
