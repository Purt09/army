<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Education\TblUnivercity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-univercity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_country')->dropDownList(\core\entities\Common\TblCountry::typeList()) ?>

    <?= $form->field($model, 'id_city')->dropDownList(\core\entities\Common\TblCity::typeList()) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'postcode')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'fax')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
