<?php
/**
 * @var $controller string
 * @var $title string
 * @var $this \yii\web\View
 * @var $provider \yii\data\ArrayDataProvider
 */

$this->title = $title;

?>

<?= $this->render('../common/_users', [
    'controller' => $controller,
    'title' => $title,
    'provider' => $provider
]) ?>
