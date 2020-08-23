<?php
/**
 * @var $model \core\entities\User\TblStaff
 */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

?>

<?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Персональные данные</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?= $form->field($model, 'firstname')->textInput() ?>
                <?= $form->field($model, 'lastname')->textInput() ?>
                <?= $form->field($model, 'sirname')->textInput() ?>

                <div class="col-sm-6">
                    <?= $form->field($model, 'email')->textInput() ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'birthday_date')->widget(DatePicker::className(), [
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true
                        ]
                    ]) ?>
                </div>

                <?= $form->field($model, 'address')->textInput() ?>

                <div class="col-sm-4">
                    <img src="<?= $model->foto ?>" alt="avatar" style="width: 100%; height: auto">
                </div>
                <div class="col-sm-8">
                    <?= $form->field($model, 'foto')->widget(\kartik\widgets\FileInput::className(), [
                        'pluginOptions' => [
                            'maxFileSize' => 2800,
                        ],
                        'options' => ['multiple' => false]
                    ]) ?>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Номера телефонов</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= $form->field($model, 'mobile_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
                <?= $form->field($model, 'wife_mobile_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
                <?= $form->field($model, 'home_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
                <?= $form->field($model, 'work_phone')->widget(MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99',
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Паспортные данные</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= $form->field($model, 'passport_number')->widget(MaskedInput::className(), [
                    'mask' => '9999 999999',
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Военный билет</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= $form->field($model, 'udl_number')->widget(MaskedInput::className(), [
                    'mask' => 'AA9999999',
                ]) ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>