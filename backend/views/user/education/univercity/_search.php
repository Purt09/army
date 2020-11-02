<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Education\TblUnivercitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-univercity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'unique_id') ?>

    <?= $form->field($model, 'last_update') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_io_state') ?>

    <?= $form->field($model, 'uuid_t') ?>

    <?php // echo $form->field($model, 'rr_name') ?>

    <?php // echo $form->field($model, 'r_icon') ?>

    <?php // echo $form->field($model, 'record_fill_color') ?>

    <?php // echo $form->field($model, 'record_text_color') ?>

    <?php // echo $form->field($model, 'id_country') ?>

    <?php // echo $form->field($model, 'id_city') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'postcode') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
