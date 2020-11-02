<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\Publication\TblStaffPublicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-publication-search">

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

    <?php // echo $form->field($model, 'id_staff') ?>

    <?php // echo $form->field($model, 'id_science_magazine') ?>

    <?php // echo $form->field($model, 'publication_name') ?>

    <?php // echo $form->field($model, 'pages') ?>

    <?php // echo $form->field($model, 'out_data') ?>

    <?php // echo $form->field($model, 'expert_zakl_number') ?>

    <?php // echo $form->field($model, 'scan_title') ?>

    <?php // echo $form->field($model, 'scan_expert') ?>

    <?php // echo $form->field($model, 'scan_magazine') ?>

    <?php // echo $form->field($model, 'scan_content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
