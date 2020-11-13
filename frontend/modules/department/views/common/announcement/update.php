<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \core\vendor\pages\models\Page */
/**
 * @var $title string
 * @var $isDate boolean
 */


$this->title = 'Изменить объявление';
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'content')->widget(\stkevich\ckeditor5\EditorClassic::className(), [
    ])->label('Главная'); ?>

    <?= $form->field($model, 'updated_at')->widget(\kartik\widgets\DateTimePicker::className(), [
    ])->label('Выберите время, когда объявление закончится'); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
