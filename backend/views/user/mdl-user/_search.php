<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\forms\user\MdlUserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mdl-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'auth') ?>

    <?= $form->field($model, 'confirmed') ?>

    <?= $form->field($model, 'policyagreed') ?>

    <?= $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'suspended') ?>

    <?php // echo $form->field($model, 'mnethostid') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'idnumber') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'emailstop') ?>

    <?php // echo $form->field($model, 'icq') ?>

    <?php // echo $form->field($model, 'skype') ?>

    <?php // echo $form->field($model, 'yahoo') ?>

    <?php // echo $form->field($model, 'aim') ?>

    <?php // echo $form->field($model, 'msn') ?>

    <?php // echo $form->field($model, 'phone1') ?>

    <?php // echo $form->field($model, 'phone2') ?>

    <?php // echo $form->field($model, 'institution') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'lang') ?>

    <?php // echo $form->field($model, 'calendartype') ?>

    <?php // echo $form->field($model, 'theme') ?>

    <?php // echo $form->field($model, 'timezone') ?>

    <?php // echo $form->field($model, 'firstaccess') ?>

    <?php // echo $form->field($model, 'lastaccess') ?>

    <?php // echo $form->field($model, 'lastlogin') ?>

    <?php // echo $form->field($model, 'currentlogin') ?>

    <?php // echo $form->field($model, 'lastip') ?>

    <?php // echo $form->field($model, 'secret') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'descriptionformat') ?>

    <?php // echo $form->field($model, 'mailformat') ?>

    <?php // echo $form->field($model, 'maildigest') ?>

    <?php // echo $form->field($model, 'maildisplay') ?>

    <?php // echo $form->field($model, 'autosubscribe') ?>

    <?php // echo $form->field($model, 'trackforums') ?>

    <?php // echo $form->field($model, 'timecreated') ?>

    <?php // echo $form->field($model, 'timemodified') ?>

    <?php // echo $form->field($model, 'trustbitmask') ?>

    <?php // echo $form->field($model, 'imagealt') ?>

    <?php // echo $form->field($model, 'lastnamephonetic') ?>

    <?php // echo $form->field($model, 'firstnamephonetic') ?>

    <?php // echo $form->field($model, 'middlename') ?>

    <?php // echo $form->field($model, 'alternatename') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
