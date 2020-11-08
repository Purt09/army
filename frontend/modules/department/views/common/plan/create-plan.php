<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Army\Plan */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $category \core\entities\Army\PlanCategory
 */

$this->title = 'Добавление в ' . $category->name
?>

<div class="plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(\stkevich\ckeditor5\EditorClassic::className(), []) ?>

    <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Выберите необходимый месяц или год')],
        'pluginOptions' => [
            'autoclose' => true,
            'startView'=>'year',
            'minViewMode'=>'months',
            'format' => 'mm-yyyy'
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить и загрузить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
