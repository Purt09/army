<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Evaluation */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $users array
 */

$result = [
    4 => 4,
    2 => 2,
    3 => 3,
    5 => 5,
];
?>

<div class="evaluation-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'result')->dropDownList($result) ?>

    <?= $form->field($model, 'semester_id')->dropDownList(\core\entities\Education\Semester::typeList()) ?>

    <?= $form->field($model, 'user_id')->widget(\kartik\select2\Select2::className(), [
        'data' => $users,
        ]) ?>

    <?= $form->field($model, 'subject_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \core\entities\Education\Subject::getList(),
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
