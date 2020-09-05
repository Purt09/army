<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblStaffPromotion */
/* @var $form yii\widgets\ActiveForm */
/* @var $user \core\entities\User\TblStaff */

$this->title = 'Выдача поощерения: ' . $user->fio

?>

<div class="tbl-staff-promotion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_promotion_type')->dropDownList(\core\entities\User\Vpr\TblPromotionType::typeList()) ?>

    <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

    <?= $form->field($model, 'order_date')->widget(\kartik\widgets\DateTimePicker::className()) ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
