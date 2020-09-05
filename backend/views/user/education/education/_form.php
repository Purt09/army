<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Education\TblEducation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unique_id')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'id_io_state')->textInput() ?>

    <?= $form->field($model, 'uuid_t')->textInput() ?>

    <?= $form->field($model, 'rr_name')->textInput() ?>

    <?= $form->field($model, 'r_icon')->textInput() ?>

    <?= $form->field($model, 'record_fill_color')->textInput() ?>

    <?= $form->field($model, 'record_text_color')->textInput() ?>

    <?= $form->field($model, 'id_edication_level')->textInput() ?>

    <?= $form->field($model, 'id_univercity')->textInput() ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

    <?= $form->field($model, 'datestart')->textInput() ?>

    <?= $form->field($model, 'dateend')->textInput() ?>

    <?= $form->field($model, 'diplom_number')->textInput() ?>

    <?= $form->field($model, 'is_military')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
