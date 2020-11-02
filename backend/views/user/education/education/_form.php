<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Education\TblEducation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_edication_level')->dropDownList(\core\entities\User\Education\TblEducationLevel::typeList()) ?>

    <?= $form->field($model, 'id_univercity')->dropDownList(\core\entities\User\Education\TblUnivercity::typeList()) ?>

    <?= $form->field($model, 'id_staff')->textInput() ?>

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
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
