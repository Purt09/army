<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\entities\User\Science\TblStaffScienceGraduate
 * @var $staff \core\entities\User\TblStaff
 */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Обновление ученой степени у " . $staff->fio;

?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Форма добавления образования</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tbl-staff-military-rank-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_science_graduate')->dropDownList(\core\entities\User\Science\TblScienceGradiate::typeList()) ?>

            <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

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
                <?= Html::submitButton('Добавить ученую степень', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
