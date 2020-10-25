<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Evaluation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evaluation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'result')->textInput() ?>

    <?= $form->field($model, 'semester_id')->dropDownList(\core\entities\Education\Semester::typeList()) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'subject_id')->dropDownList(\core\entities\Education\Subject::typeList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
