<?php
/**
 * @var $this \yii\web\View
 * @var $model \bupy7\pages\models\Page
 * @var $users array
 * @var $news \core\entities\News\NewsPublications[]
 * @var $history \bupy7\pages\models\Page
 * @var $announcement \bupy7\pages\models\Page
 */

$this->title = '5 факультет';
?>
<?php if(!empty($announcement->content) && time() > strtotime($announcement->updated_at)): ?>
    <div class="callout callout-info">
        <h4><i class="fa fa-info"></i> Объявление:</h4>

        <p>
            <?= $announcement->content ?>
        </p>
    </div>
<?php endif; ?>
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
            'label' => 'Новости 5 факультета',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget([
                'news' => $news,
                'role' => \core\helpers\user\RbacHelpers::$FAKULTET]),
        ],
        [
            'label' => 'О факультете',
            'content' => $main,
        ],
        [
            'label' => 'История факультета',
            'content' => $history->content,
        ],
    ],
]);
?>
