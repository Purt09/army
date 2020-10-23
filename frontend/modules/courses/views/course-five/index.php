<?php
/**
 * @var $this \yii\web\View
 * @var $content \core\vendor\pages\models\Page
 * @var $news array
 */

$this->title = 'Главная 55 курса';
?>
<?php $main = '<section class="content">
    <div class="col-sm-6" style=" margin-top: 60px; background-color: white;border-radius: 20px;
        padding: 15px;box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
        ' . $content->content . '
    </div>
    <div class="col-sm-6">
        <div style="text-align: center;">
            <h2>КОМАНДОВАНИЕ КУРСА</h2>
        </div>
        <div>
            ';
if (isset($users)) {
    foreach ($users as $user) {
        $main .= \frontend\widget\UserInfoWidget::widget(['user' => $user]);
    }
}

$main .= '
        </div>
    </div>
</section>' ?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget([
                'news' => $news,
                'role' => \core\helpers\user\RbacHelpers::$COURSE55]),
        ],
        [
            'label' => 'Главная 55 курса',
            'content' => $main,
        ],
    ],
]);
?>