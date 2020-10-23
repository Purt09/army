<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\vendor\pages\models\Page
 * @var $users array
 * @var $news \core\entities\News\NewsPublications[]
 * @var $history \core\vendor\pages\models\Page
 */

$this->title = '5 факультет';

?>

<?php $main = '<section class="content">
    <div class="col-sm-6" style=" margin-top: 60px; background-color: white;border-radius: 20px;
        padding: 15px;box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
        ' . $model->content . '
    </div>
    <div class="col-sm-6">
        <div style="text-align: center;">
            <h2>КОМАНДОВАНИЕ ФАКУЛЬТЕТА</h2>
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
            'label' => 'О факультете',
            'content' => $main,
        ],
        [
            'label' => 'Новости 5 факультета',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget([
                'news' => $news,
                'role' => \core\helpers\user\RbacHelpers::$FAKULTET]),
        ],
        [
            'label' => 'История факультета',
            'content' => $history->content,
        ],
    ],
]);
?>