<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\forms\auth\LoginForm
 */

?>


<?= $this->render('../common/_user_add', [
    'controller' => 'five-one',
    'title' => 'Добавление офицера в 51 кафедру',
    'model' => $model
]) ?>
