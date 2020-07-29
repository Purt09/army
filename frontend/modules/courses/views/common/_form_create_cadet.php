<?php
/* @var $this yii\web\View */

/* @var $models SignupUserForm */

use backend\forms\user\SignupUserForm;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'Добавить курсанта';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= \yii\bootstrap\Tabs::widget([
        'items' => [
            [
                'label' => 'Создать пользователя',
                'content' =>
                    $form->field($models, 'username')->textInput() .
                    $form->field($models, 'password')->textInput(['value' => 'asd123ASqwe*']) .
                    $form->field($models, 'email')->textInput() .
                    $form->field($models, 'firstName')->textInput() .
                    $form->field($models, 'lastName')->textInput() .
                    $form->field($models, 'sirName')->textInput() .
                    $form->field($models, 'passport')->widget(MaskedInput::className(), [
                        'mask' => '9999 999999',
                    ]) .
                    $form->field($models, 'mobile_phone')->widget(MaskedInput::className(), [
                        'mask' => '+7 (999) 999-99-99',
                    ])  .
                    $form->field($models, 'udl_number')->textInput() .
                    $form->field($models, 'birthday_date')->widget(DatePicker::className(), [
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true
                        ]
                    ]) .
                    $form->field($models, 'address')->textarea(),
                'active' => true
            ],
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
