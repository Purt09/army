<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\entities\User\Education\TblEducation
 * @var $staff \core\entities\User\TblStaff
 */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Обновление ученного звания у " . $staff->fio;

?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Форма добавления образования</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tbl-staff-military-rank-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_science_rank')->dropDownList(\core\entities\User\Science\TblScienceRank::typeList()) ?>

            <?= $form->field($model, 'id_order_owner')->dropDownList(\core\entities\User\TblOrderOwner::typeList()) ?>

            <?= $form->field($model, 'order_date')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

            <?= $form->field($model, 'order_number')->textInput() ?>

            <?= $form->field($model, 'number')->textInput() ?>

            <?= $form->field($model, 'speciality')->textInput() ?>

            <?= $form->field($model, 'speciality_code')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Добавить ученое звание', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
