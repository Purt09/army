<?php
/**
 * @var $this View
 * @var $model News;
 * @var $publications NewsPublications;
 */

use core\entities\News\News;
use core\entities\News\NewsPublications;
use yii\web\View;

$this->title = 'Добавление новости 55 курса';

?>

<?= $this->render('../common/_form_news', [
    'model' => $model,
    'publications' => $publications
]) ?>
