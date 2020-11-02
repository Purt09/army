<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Position\TblStaffMilPositionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-mil-position-search">

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

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'id_mil_unit') ?>

    <?php // echo $form->field($model, 'id_mil_position') ?>

    <?php // echo $form->field($model, 'vus') ?>

    <?php // echo $form->field($model, 'tarif') ?>

    <?php // echo $form->field($model, 'is_military')->checkbox() ?>

    <?php // echo $form->field($model, 'id_staff') ?>

    <?php // echo $form->field($model, 'id_order_owner') ?>

    <?php // echo $form->field($model, 'order_date') ?>

    <?php // echo $form->field($model, 'order_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
