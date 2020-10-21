<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Timetable */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Публикация сводного расписания'

?>

<div class="timetable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'semester_id')->dropDownList(\core\entities\Education\Semester::typeList()) ?>

    <?= $form->field($model, 'title')->textInput([
        'maxlength' => true,
        'placeholder' => 'Например, сводное расписание 55 кафедры'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить и перейти к загрузке файла', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
