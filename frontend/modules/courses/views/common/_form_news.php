<?php

use core\helpers\NewsHelpers;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use core\entities\News\NewsPublications;

/* @var $this yii\web\View */
/* @var $model core\entities\News\News */
/* @var $form yii\widgets\ActiveForm */
/* @var $publications NewsPublications; */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-6">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-sm-3">
        <?= $form->field($publications, 'main')->checkbox() ?>
        <?= $form->field($publications, '51_cafedra')->checkbox() ?>
        <?= $form->field($publications, '52_cafedra')->checkbox() ?>
        <?= $form->field($publications, '53_cafedra')->checkbox() ?>
        <?= $form->field($publications, '54_cafedra')->checkbox() ?>
        <?= $form->field($model, 'important')->checkbox() ?>
    </div>
    <div class="col-sm-3">
        <?= $form->field($publications, 'course51')->checkbox() ?>
        <?= $form->field($publications, 'course52')->checkbox() ?>
        <?= $form->field($publications, 'course53')->checkbox() ?>
        <?= $form->field($publications, 'course54')->checkbox() ?>
        <?= $form->field($publications, 'course55')->checkbox() ?>
    </div>
    <div class="col-sm-12">
        <?= $form->field($model, 'content')->widget(\stkevich\ckeditor5\EditorClassic::className(),
            [

            ])->label('Главная'); ?>

        <?= $form->field($model, 'status')->dropDownList(NewsHelpers::statusList()) ?>

        <?= $form->field($model, 'img')->widget(\kartik\widgets\FileInput::className(), [
            'pluginOptions' => [
                'maxFileSize' => 1000,
                'allowedFileExtensions'=>['jpg', 'jpeg', 'gif','png']
            ],
            'options' => ['multiple' => false]
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Создать', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
