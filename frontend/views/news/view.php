<?php
/**
 * @var $this \yii\web\View
 * @var $news \core\entities\News\News
 */

$this->title = '';

?>

<div class="col-lg-8">
    <h1 class="mt-4"><?= $news->title ?></h1>
    <hr>
    <p><?= Yii::$app->formatter->asDatetime($news->created_at) ?></p>
    <hr>

    <!-- Post Content -->
    <?= $news->content ?>


</div>
<div class="col-lg-4">
    <img src="<?= $news->img ?>" alt="<?= $news->title ?>" style="max-width: 100%; max-height: 100%">
</div>