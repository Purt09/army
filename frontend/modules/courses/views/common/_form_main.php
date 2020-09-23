<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \bupy7\pages\models\Page */
/**
 * @var $title string
 */

$this->title = $title;
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'content')->widget(\stkevich\ckeditor5\EditorClassic::className(),
        [

        ])->label('Главная'); ?>



    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
