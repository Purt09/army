<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblStaffScienceGraduate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-science-graduate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_science_graduate')->dropDownList(\core\entities\User\Science\TblScienceGradiate::typeList()) ?>

    <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

    <?= $form->field($model, 'order_date')->widget(DatePicker::className(), [
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'speciality_code')->textInput() ?>

    <?= $form->field($model, 'speciality')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
