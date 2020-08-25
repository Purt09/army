<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\entities\User\TblStaff
 */

$this->title = 'Настройка профиля';

?>
<?= $this->render('_form_user', [
    'model' => $model
]) ?>
