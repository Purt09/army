<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\forms\auth\LoginForm
 */

?>


<?= $this->render('../common/_user_add', [
    'controller' => 'course-free',
    'title' => 'Добавление курсанта на 53 курс',
    'model' => $model
]) ?>
