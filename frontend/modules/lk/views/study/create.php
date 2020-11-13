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

    <?= $form->field($model, 'subject_id')->widget(\kartik\select2\Select2::className(), [
        'data' => \core\entities\Education\Subject::getList(),
    ]) ?>

    <?= $form->field($model, 'result')->dropDownList($result) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
