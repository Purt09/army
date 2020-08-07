<?php
/**
 * @var $this \yii\web\View
 * @var $model \bupy7\pages\models\Page
 * @var $title string
 */

$this->title = $title;
?>

<?= $this->render('../common/_form_main', [
    'model' => $model,
    'title' => $title
]) ?>