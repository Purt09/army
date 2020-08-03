<?php
/**
 * @var $this \yii\web\View
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление кафедрой';
?>

<?= $this->render('../common/manager', [
    'controller' => 'five-free',
    'title' => '53',
    'newsPublications' => $newsPublications
]) ?>