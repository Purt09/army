<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Vpr\TblStaffPenalty */
/* @var $form yii\widgets\ActiveForm */
/* @var $user \core\entities\User\TblStaff */

$this->title = 'Выдача взыскания: ' . $user->fio
?>

<div class="tbl-staff-penalty-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_penalty_type')->dropDownList(\core\entities\User\Vpr\TblPenaltyType::typeList()) ?>

    <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <?= $form->field($model, 'id_finish_penalty')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
