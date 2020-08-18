<?php
/**
 * @var $this \yii\web\View
 * @var $content \bupy7\pages\models\Page
 * @var $news array
 */

$this->title = 'Главная 52 курса';
?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget(['news' => $news]),
        ],
        [
            'label' => 'Главная 52 курса',
            'content' => $content->content,
        ],
    ],
]);
?>