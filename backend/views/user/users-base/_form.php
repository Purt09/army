<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\UsersBase */
/* @var $form yii\widgets\ActiveForm */
/* @var $ranks array */
?>

<div class="users-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role_name')->textInput() ?>

    <?= $form->field($model, 'with_inheritance')->checkbox() ?>

    <?= $form->field($model, 'unique_id')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'id_rank')->dropDownList(\core\entities\User\Ranks::list()) ?>

    <?= $form->field($model, 'id_state')->dropDownList(\core\entities\User\UserState::list()) ?>

    <?= $form->field($model, 'id_maclabel')->dropDownList(\core\entities\Common\Maclabels::list()) ?>

    <?= $form->field($model, 'lastname')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput() ?>

    <?= $form->field($model, 'sirname')->textInput() ?>

    <?= $form->field($model, 'fio')->textInput() ?>

    <?= $form->field($model, 'insert_time')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'acc_right_num')->textInput() ?>

    <?= $form->field($model, 'acc_right_date')->textInput() ?>

    <?= $form->field($model, 'is_connected')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
