<?php

use core\helpers\NewsHelpers;
use mihaildev\ckeditor\CKEditor;
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
    </div>
    <div class="col-sm-3">
        <?= $form->field($publications, 'course51')->checkbox() ?>
        <?= $form->field($publications, 'course52')->checkbox() ?>
        <?= $form->field($publications, 'course53')->checkbox() ?>
        <?= $form->field($publications, 'course54')->checkbox() ?>
        <?= $form->field($publications, 'course55')->checkbox() ?>
    </div>
    <div class="col-sm-12">
        <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'content')->widget(CKEditor::className(),[
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]); ?>

        <?= $form->field($model, 'status')->dropDownList(NewsHelpers::statusList()) ?>

        <div class="form-group">
            <?= Html::submitButton('Создать', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
