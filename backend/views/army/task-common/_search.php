<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\TaskCommonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-common-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'order_date_finish') ?>

    <?= $form->field($model, 'date_finish') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'is_complete_cafedra_51')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_cafedra_52')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_cafedra_53')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_cafedra_55')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_course_51')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_course_52')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_course_53')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_course_54')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_course_55')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_manager_cv')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_manager_vpr')->checkbox() ?>

    <?php // echo $form->field($model, 'is_complete_manager_teacher')->checkbox() ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
