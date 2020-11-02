<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\forms\auth\LoginForm
 */

?>


<?= $this->render('../common/_user_add', [
    'controller' => 'course-one',
    'title' => 'Добавление курсанта на 51 курс',
    'model' => $model
]) ?>
