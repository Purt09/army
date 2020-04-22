<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\MdlUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mdl-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'auth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmed')->textInput() ?>

    <?= $form->field($model, 'policyagreed')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'suspended')->textInput() ?>

    <?= $form->field($model, 'mnethostid')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailstop')->textInput() ?>

    <?= $form->field($model, 'icq')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yahoo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calendartype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstaccess')->textInput() ?>

    <?= $form->field($model, 'lastaccess')->textInput() ?>

    <?= $form->field($model, 'lastlogin')->textInput() ?>

    <?= $form->field($model, 'currentlogin')->textInput() ?>

    <?= $form->field($model, 'lastip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descriptionformat')->textInput() ?>

    <?= $form->field($model, 'mailformat')->textInput() ?>

    <?= $form->field($model, 'maildigest')->textInput() ?>

    <?= $form->field($model, 'maildisplay')->textInput() ?>

    <?= $form->field($model, 'autosubscribe')->textInput() ?>

    <?= $form->field($model, 'trackforums')->textInput() ?>

    <?= $form->field($model, 'timecreated')->textInput() ?>

    <?= $form->field($model, 'timemodified')->textInput() ?>

    <?= $form->field($model, 'trustbitmask')->textInput() ?>

    <?= $form->field($model, 'imagealt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastnamephonetic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstnamephonetic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternatename')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
