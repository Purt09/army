<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\forms\user\UsersBaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-base-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'role_name') ?>

    <?= $form->field($model, 'with_inheritance')->checkbox() ?>

    <?= $form->field($model, 'unique_id') ?>

    <?= $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'id_rank') ?>

    <?php // echo $form->field($model, 'id_state') ?>

    <?php // echo $form->field($model, 'id_maclabel') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'sirname') ?>

    <?php // echo $form->field($model, 'fio') ?>

    <?php // echo $form->field($model, 'insert_time') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'acc_right_num') ?>

    <?php // echo $form->field($model, 'acc_right_date') ?>

    <?php // echo $form->field($model, 'is_connected')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
