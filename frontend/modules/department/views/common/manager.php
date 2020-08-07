<?php
/**
 * @var $controller string
 * @var $title string
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление кафедрой ' . $title;
?>
<?= $this->render('_manager', [
    'controller' => 'five-free',
    'title' => 'факультета',
    'newsPublications' => $newsPublications
]) ?>

<div class="col-md-3 col-sm-6 col-xs-12">
    <a class="box_link" href="<?= \yii\helpers\Url::to("/department/common/contact-info") ?>">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-pencil"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"> </span>
                <span class="info-box-number">Управление контактами</span>
                <span class="info-box-number">факультета</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <a class="box_link" href="<?= \yii\helpers\Url::to("/department/common/contact-abonent") ?>">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-pencil"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"> </span>
                <span class="info-box-number">Управление списком</span>
                <span class="info-box-number">терминалов</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </a>
</div>
