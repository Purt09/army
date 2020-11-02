<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\forms\auth\LoginForm
 */

?>


<?= $this->render('../common/_user_add', [
    'controller' => 'course-two',
    'title' => 'Добавление курсанта на 52 курс',
    'model' => $model
]) ?>
