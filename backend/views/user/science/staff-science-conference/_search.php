<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblStaffScienceConferenceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-science-conference-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'unique_id') ?>

    <?= $form->field($model, 'last_update') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_io_state') ?>

    <?= $form->field($model, 'uuid_t') ?>

    <?php // echo $form->field($model, 'rr_name') ?>

    <?php // echo $form->field($model, 'r_icon') ?>

    <?php // echo $form->field($model, 'record_fill_color') ?>

    <?php // echo $form->field($model, 'record_text_color') ?>

    <?php // echo $form->field($model, 'id_science_conference') ?>

    <?php // echo $form->field($model, 'id_staff') ?>

    <?php // echo $form->field($model, 'id_conference_result_type') ?>

    <?php // echo $form->field($model, 'result') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
