<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\Sport */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="sport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'unit_id')->dropDownList(\core\entities\User\TblMilUnit::typeShortList()) ?>

    <?= $form->field($model, 'semester_id')->dropDownList(\core\entities\Education\Semester::typeList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
