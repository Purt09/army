<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Education\TblUnivercity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-univercity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unique_id')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'id_io_state')->textInput() ?>

    <?= $form->field($model, 'uuid_t')->textInput() ?>

    <?= $form->field($model, 'rr_name')->textInput() ?>

    <?= $form->field($model, 'r_icon')->textInput() ?>

    <?= $form->field($model, 'record_fill_color')->textInput() ?>

    <?= $form->field($model, 'record_text_color')->textInput() ?>

    <?= $form->field($model, 'id_country')->textInput() ?>

    <?= $form->field($model, 'id_city')->textInput() ?>

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
