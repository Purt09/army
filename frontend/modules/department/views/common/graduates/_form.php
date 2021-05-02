<?php

use kartik\date\DatePicker;
use kartik\widgets\FileInput;
use stkevich\ckeditor5\EditorClassic;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\Plan */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $category \core\entities\Army\PlanCategory
 */

?>

<div class="plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label("Имя выпускника") ?>

    <?= $form->field($model, 'text')->widget(EditorClassic::className(), [])->label("Биография") ?>

    <?= $form->field($model, 'img')->widget(FileInput::className(), [
        'pluginOptions' => [
            'maxFileSize' => 1024 * 2,
            'allowedFileExtensions' => ['jpg', 'jpeg', 'gif', 'png']
        ],
        'options' => ['multiple' => false]
    ])->label("Фото выпускника") ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
