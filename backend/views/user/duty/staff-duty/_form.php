<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Duty\TblStaffDuty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-duty-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_duty_type')->dropDownList(\core\entities\User\Duty\TblDutyType::typeList()) ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

    <?= $form->field($model, 'date_start')->widget(DatePicker::className(), [
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'date_end')->widget(DatePicker::className(), [
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
