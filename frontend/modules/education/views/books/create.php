<?php
/**
 * @var $this View
 * @var $model Books
 */

use core\entities\Common\Books\Books;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

$this->title = "Добавление книги";

?>


<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pages')->textInput() ?>

    <?= $form->field($model, 'date')->widget(DatePicker::class, [
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'image')->widget(\kartik\widgets\FileInput::className(), [
        'pluginOptions' => [
            'maxFileSize' => 1000,
            'allowedFileExtensions' => ['jpg', 'jpeg', 'gif', 'png']
        ],
        'options' => ['multiple' => false]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
