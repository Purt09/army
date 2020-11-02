<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Evaluation */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $users array
 */
?>

<div class="evaluation-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'result')->textInput() ?>

    <?= $form->field($model, 'semester_id')->dropDownList(\core\entities\Education\Semester::typeList()) ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\select2\Select2::className(), [
        'data' => $users,
        ]) ?>

    <?= $form->field($model, 'subject_id')->dropDownList(\core\entities\Education\Subject::typeList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
