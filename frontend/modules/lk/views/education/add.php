<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\entities\User\Education\TblEducation
 * @var $staff \core\entities\User\TblStaff
 */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Добавление образования у " . $staff->fio;

?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Форма добавления образования</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tbl-staff-military-rank-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_edication_level')->dropDownList(\core\entities\User\Education\TblEducationLevel::typeList()) ?>

            <?= $form->field($model, 'id_univercity')->dropDownList(\core\entities\User\Education\TblUnivercity::typeList()) ?>

            <?= $form->field($model, 'datestart')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

            <?= $form->field($model, 'dateend')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]) ?>

            <?= $form->field($model, 'diplom_number')->textInput() ?>

            <?= $form->field($model, 'is_military')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Добавить образование', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
