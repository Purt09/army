<?php
/**
 * @var $this \yii\web\View
 * @var $model \frontend\modules\courses\forms\CreateCadetForm
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Добавление курсанта';

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= \yii\bootstrap\Tabs::widget([
        'items' => [
            [
                'label' => 'Создать пользователя',
                'content' =>
                    $form->field($model, 'username')->textInput() .
                    $form->field($model, 'password')->textInput(['value' => 'asd123ASqwe*']) .
                    $form->field($model, 'email')->textInput() .
                    $form->field($model, 'firstName')->textInput() .
                    $form->field($model, 'lastName')->textInput() .
                    $form->field($model, 'sirName')->textInput(),
                'active' => true
            ],
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
