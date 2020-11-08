<?php
/**
 * @var $this \yii\web\View
 * @var $model TblStaffMilitaryRank
 * @var $staff \core\entities\User\TblStaff
 */

use core\entities\User\MilitaryRank\TblStaffMilitaryRank;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Обновление звания у " . $staff->fio;

?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Форма добавления звания</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tbl-staff-military-rank-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_military_rank')->dropDownList(\core\entities\User\MilitaryRank\TblMilitaryRank::typeList()) ?>

            <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

            <?= $form->field($model, 'order_date')->widget(\kartik\date\DatePicker::className(), [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

            <?= $form->field($model, 'order_number')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Обновить звание', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
