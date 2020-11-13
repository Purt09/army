<?php
/**
 * @var $this \yii\web\View
 * @var $title string
 * @var $controller string
 * @var $model \common\forms\auth\LoginForm
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $title;

?>


<div class="news-form">

    <div class="box box-warning">
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-sm-6">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'username')->textInput() ?>
                <?= $form->field($model, 'password')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-sm-6">
                <h3>Процесс добавления пользователя:</h3>
                <ol>
                    <li>Пользователь должен быть заранее зарегистрирован Администратором</li>
                    <li>Необходимо получить логин и пароль у Администратора</li>
                    <li>Вводим в форме слева логин и пароль</li>
                    <li>Если все прошло успешно, пользователь появится на странице "Кадровая работа"</li>
                    <li>Далее заполняем его данные на актуальные</li>
                </ol>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div>