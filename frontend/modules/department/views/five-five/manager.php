<?php
/**
 * @var $this \yii\web\View
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление кафедрой';
?>

<?= $this->render('../common/_manager', [
    'controller' => 'five-five',
    'title' => '55',
    'newsPublications' => $newsPublications
]) ?>