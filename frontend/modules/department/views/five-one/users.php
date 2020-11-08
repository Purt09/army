<?php
/**
 * @var $controller string
 * @var $title string
 * @var $this \yii\web\View
 * @var $provider \yii\data\ArrayDataProvider
 */

use yii\grid\GridView;

$this->title = $title;

?>

<?= $this->render('../common/_users', [
    'controller' => $controller,
    'title' => $title,
    'provider' => $provider
]) ?>
