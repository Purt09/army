<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \bupy7\pages\models\Page */
/**
 * @var $title string
 * @var $isDate boolean
 */

if(is_null($isDate))
    $isDate = false;

$this->title = $title;
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'content')->widget(\stkevich\ckeditor5\EditorClassic::className(), [
    ])->label('Главная'); ?>

    <?php if($isDate): ?>

        <?= $form->field($model, 'updated_at')->widget(\kartik\widgets\DateTimePicker::className(), [])->label('Выберите время, когда объявление закончится'); ?>

    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
