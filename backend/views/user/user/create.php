<?php
/* @var $this yii\web\View */

/* @var $models \core\entities\User\User */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Создать пользователя';
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
                    $form->field($models, 'password')->textInput(['value' => Yii::$app->security->generateRandomString(10) . '*']) .
                    $form->field($models, 'email')->textInput() .
                    $form->field($models, 'firstName')->textInput() .
                    $form->field($models, 'lastName')->textInput() .
                    $form->field($models, 'sirName')->textInput(),
                'active' => true
            ],
            [
                'label' => 'Дополнительные настройки',
                'content' => $form->field($models, 'moodle_id')->textInput(['value' => 0]),
            ],
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
