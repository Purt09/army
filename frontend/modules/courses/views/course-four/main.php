<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\vendor\pages\models\Page
 * @var $title string
 */

$this->title = $title;
?>

<?= $this->render('../common/_form_main', [
    'model' => $model,
    'title' => $title
]) ?>