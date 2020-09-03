<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblStaffPromotion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-promotion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_promotion_type')->textInput() ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

    <?= $form->field($model, 'id_order_owner')->textInput() ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
