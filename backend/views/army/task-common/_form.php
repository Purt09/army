<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\TaskCommon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-common-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_date_finish')->widget(\kartik\widgets\DatePicker::className()) ?>

    <?= $form->field($model, 'date_finish')->widget(\kartik\widgets\DatePicker::className()) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_complete_cafedra_51')->checkbox() ?>

    <?= $form->field($model, 'is_complete_cafedra_52')->checkbox() ?>

    <?= $form->field($model, 'is_complete_cafedra_53')->checkbox() ?>

    <?= $form->field($model, 'is_complete_cafedra_55')->checkbox() ?>

    <?= $form->field($model, 'is_complete_course_51')->checkbox() ?>

    <?= $form->field($model, 'is_complete_course_52')->checkbox() ?>

    <?= $form->field($model, 'is_complete_course_53')->checkbox() ?>

    <?= $form->field($model, 'is_complete_course_54')->checkbox() ?>

    <?= $form->field($model, 'is_complete_course_55')->checkbox() ?>

    <?= $form->field($model, 'is_complete_manager_cv')->checkbox() ?>

    <?= $form->field($model, 'is_complete_manager_vpr')->checkbox() ?>

    <?= $form->field($model, 'is_complete_manager_teacher')->checkbox() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
