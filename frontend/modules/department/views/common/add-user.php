<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\forms\auth\LoginForm
 */

?>


<?= $this->render('_user_add', [
    'controller' => 'common',
    'title' => 'Добавление офицера на факультет',
    'model' => $model
]) ?>
