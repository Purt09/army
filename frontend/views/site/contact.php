<?php

/* @var $this yii\web\View */

/**
 * @var $abonents \core\vendor\pages\models\Page
 * @var $info \core\vendor\pages\models\Page
 * @var $users array
 * @var $user \core\entities\User\TblStaff
 */

use kartik\helpers\Html;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php if(isset($user)): ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Об офицере <?= $user->fio ?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <strong><i class="fa fa-phone margin-r-5"></i> Номера телефонов:</strong>

        <p class="text-muted">
            Мобильный: <?= $user->mobile_phone ?>
        </p>
        <p class="text-muted">
            Домашний: <?= $user->home_phone ?>
        </p>
        <p class="text-muted">
            Рабочий: <?= $user->work_phone ?>
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Место проживания</strong>

        <p class="text-muted"><?= $user->address ?></p>

        <hr>

        <strong><i class="fa fa-file-text-o margin-r-5"></i> Автобиография</strong>

        <p><?= $user->autobiography ?></p>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<?php endif; ?>

<?php $form = ActiveForm::begin(); ?>

<?php echo '<label class="control-label">Офицеры</label>';
echo Select2::widget([
    'name' => 'user',
    'data' => $users,
    'options' => [
        'placeholder' => 'Поиск офицера ...',
    ],
]); ?>
<div class="form-group">
    <?= Html::submitButton('Найти', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Контакты</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <?= $info->content ?>
    </div>
    <!-- /.box-body -->
</div>
