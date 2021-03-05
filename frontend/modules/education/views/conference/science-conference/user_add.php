<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\TblStaffScienceConference */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $users array
 */

$this->title = 'Добавление участника в конференцию';

?>

<div class="tbl-staff-science-conference-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo '<label class="control-label">Пользователь</label>';
    echo Select2::widget([
        'name' => 'staff_id',
        'data' => $users,
        'options' => [
            'placeholder' => 'Поиск пользователя ...',
        ],
    ]); ?>

    <?= $form->field($model, 'id_conference_result_type')->dropDownList(\core\entities\User\Science\TblConferenceResultType::typeList()) ?>

    <?= $form->field($model, 'result')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
