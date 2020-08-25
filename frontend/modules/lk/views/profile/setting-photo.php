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
                <h3 class="box-title">Изменение фото</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">

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
    </div>form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>
