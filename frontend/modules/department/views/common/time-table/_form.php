<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Timetable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timetable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'semester_id')->dropDownList(\core\entities\Education\Semester::typeList()) ?>

    <?= $form->field($model, 'unit_id')->dropDownList(\core\entities\User\TblMilUnit::typeShortList()) ?>

    <?= $form->field($model, 'title')->textInput([
            'maxlength' => true,
            'placeholder' => 'Например 561 учебная группа'
        ]) ?>

    <?= $form->field($model, 'summary')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить и перейти к загрузке файла', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
