<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\forms\auth\LoginForm
 */

?>


<?= $this->render('../common/_user_add', [
    'controller' => 'five-five',
    'title' => 'Добавление офицера в 55 кафедру',
    'model' => $model
]) ?>
