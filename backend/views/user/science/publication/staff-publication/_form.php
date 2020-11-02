<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\Publication\TblStaffPublication */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-staff-publication-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_science_magazine')->dropDownList(\core\entities\User\Science\Publication\TblScienceMagazine::typeList()) ?>

    <?= $form->field($model, 'publication_name')->textInput() ?>

    <?= $form->field($model, 'pages')->textInput() ?>

    <?= $form->field($model, 'out_data')->textInput() ?>

    <?= $form->field($model, 'expert_zakl_number')->textInput() ?>

    <?= $form->field($model, 'scan_title')->textInput() ?>

    <?= $form->field($model, 'scan_expert')->textInput() ?>

    <?= $form->field($model, 'scan_magazine')->textInput() ?>

    <?= $form->field($model, 'scan_content')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
