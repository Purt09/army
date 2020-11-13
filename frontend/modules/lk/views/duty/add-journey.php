<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\entities\User\Duty\TblStaffDutyJourney
 * @var $staff \core\entities\User\TblStaff
 */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Добавление командировки " . $staff->fio;

?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Форма добавления наряда</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tbl-staff-military-rank-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_city')->dropDownList(\core\entities\Common\TblCity::typeList()) ?>

            <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

            <?= $form->field($model, 'order_number')->textInput() ?>

            <?= $form->field($model, 'organization')->textInput() ?>


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

            <?= $form->field($model, 'order_date')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>
            <div class="form-group">
                <?= Html::submitButton('Добавить командировку', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
