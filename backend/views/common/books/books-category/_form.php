<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\Books\BooksCategory */
/* @var $form yii\widgets\ActiveForm */

$categories = \core\entities\Common\Books\BooksCategory::find()->asArray()->all();
$categories = \yii\helpers\ArrayHelper::map($categories, 'id', 'title');
?>

<div class="books-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList($categories) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
