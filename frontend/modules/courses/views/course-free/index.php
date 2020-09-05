<?php
/**
 * @var $this \yii\web\View
 * @var $content \bupy7\pages\models\Page
 * @var $news array
 */

$this->title = 'Главная 53 курса';
?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget([
                'news' => $news,
                'role' => \core\helpers\user\RbacHelpers::$COURSE53]),
        ],
        [
            'label' => 'Главная 53 курса',
            'content' => $content->content,
        ],
    ],
]);
?>