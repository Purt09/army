<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $models \backend\forms\user\SignupUserForm*/

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($models, 'username')->textInput() ?>

    <?= $form->field($models, 'password')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
