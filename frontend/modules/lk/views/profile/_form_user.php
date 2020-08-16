<?php
/**
 * @var $model \core\entities\User\TblStaff
 */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

?>


<div class="setting-form">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Данные</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php
            $form = ActiveForm::begin(); ?>

            <div class="col-sm-4">
                <?= $form->field($model, 'firstname')->textInput() ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'lastname')->textInput() ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'sirname')->textInput() ?>
            </div>

            <div class="col-sm-3">
                <?= $form->field($model, 'mobile_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'wife_mobile_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'home_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'work_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
            </div>


            <div class="col-sm-4">
                <?= $form->field($model, 'passport_number')->widget(MaskedInput::className(), [
                    'mask' => '9999 999999',
                ]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'email')->textInput() ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'udl_number')->widget(MaskedInput::className(), [
                    'mask' => 'AA9999999',
                ]) ?>
            </div>


            <div class="col-sm-6">
                <?= $form->field($model, 'address')->textInput() ?>
                <?= $form->field($model, 'birthday_date')->widget(DatePicker::className(), [
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true
                    ]
                ]) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'foto')->widget(\kartik\file\FileInput::className(), [
                    'pluginOptions' => [
                        'maxFileSize' => 2800
                    ],
                    'options' => ['multiple' => false]
                ]) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <!-- /.box-body -->
</div>

</div>


