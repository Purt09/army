<?php
/**
 * @var $this \yii\web\View
 * @var $model \core\vendor\pages\models\Page
 * @var $users array
 * @var $news \core\entities\News\NewsPublications[]
 * @var $history \core\vendor\pages\models\Page
 * @var $announcements \core\entities\News\NewsPublications[]
 */
$this->title = '5 факультет';
?>
<?php if (isset($announcements)): ?>
    <?php foreach ($announcements as $announcement): ?>
        <?php if (isset($announcement->articles)): ?>
            <?php if ($announcement->articles->updated_at > time()): ?>

                <div class="info-box bg-aqua">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-info"></i></span>

                    <div class="info-box-content ">
                        <?= $announcement->articles->content ?>
                    </div>
                </div>
                <style>
                    .announcement a {
                        color: #3c8dbc; !important;
                        text-shadow: none; !important;
                    }
                    .callout p {
                        font-weight: 300;
                        text-shadow: 1px 1px 2px black;
                    }

                </style>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<?php if (!empty($announcement->ar) && time() < $announcement->updated_at): ?>
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
                'role' => \core\helpers\user\RbacHelpers::$OFFICER]),
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
