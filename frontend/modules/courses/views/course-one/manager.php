<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Обновление данных 51 курса';
?>

<div class="course-manager">

    <?= $this->render('../common/_manager', [
        'controllers' => 'course-one'
    ]) ?>

</div>