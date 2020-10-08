<?php
/**
 * @var $model \core\entities\User\TblStaff
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<div class="col-sm-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Изменение пароля</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
                <?= $form->field($model, 'password')->textInput()->label('Текущий пароль') ?>
                <?= Html::submitButton('Сбросить пароль', ['class' => 'btn btn-success']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>
