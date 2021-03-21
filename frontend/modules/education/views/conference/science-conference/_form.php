<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblScienceConference */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $users array
 */
?>

<div class="tbl-science-conference-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'description')->textarea() ?>

    <?php echo '<label class="control-label">Руководитель/Ответственный</label>';
    echo Select2::widget([
        'attribute' => 'responsible_id',
        'model' => $model,
        'data' => $users,
        'options' => [
            'placeholder' => 'Поиск ...',
        ],
    ]); ?>

    <?= $form->field($model, 'id_conference_owner')->dropDownList(\core\entities\User\Science\TblConferenceOwner::typeList()) ?>

    <?= $form->field($model, 'id_conference_rank')->dropDownList(\core\entities\User\Science\TblConferenceRank::typeList()) ?>


    <?= $form->field($model, 'date_start')->widget(\kartik\date\DatePicker::className(), [
        'pluginOptions' => [
            'autoclose'=> true,
            'format' => 'mm-dd-yyyy'
        ]]) ?>

    <?= $form->field($model, 'date_end')->widget(\kartik\date\DatePicker::className(), [
        'pluginOptions' => [
            'autoclose'=> true,
            'format' => 'mm-dd-yyyy'
        ]]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
