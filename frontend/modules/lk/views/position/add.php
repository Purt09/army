<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\entities\User\Position\TblStaffMilPosition
 * @var $staff \core\entities\User\TblStaff
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Обновление должности у " . $staff->fio;

?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Форма добавления должности</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tbl-staff-military-rank-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput() ?>

            <?= $form->field($model, 'id_mil_unit')->dropDownList(\core\entities\User\TblMilUnit::typeList()) ?>

            <?= $form->field($model, 'id_mil_position')->dropDownList(\core\entities\User\Position\TblMilPosition::typeList()) ?>

            <?= $form->field($model, 'vus')->textInput() ?>

            <?= $form->field($model, 'tarif')->textInput() ?>

            <?= $form->field($model, 'is_military')->checkbox() ?>

            <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

            <?= $form->field($model, 'order_date')->widget(\kartik\date\DatePicker::className(), [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

            <?= $form->field($model, 'order_number')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Обновить должность', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
