<?php
/**
 * @var $controller string
 * @var $title string
 */

$this->title = 'Управление кафедрой ' . $title;
?>
<div class="col-md-3 col-sm-6 col-xs-12">
    <a class="box_link" href="<?= \yii\helpers\Url::to("/department/$controller/create-news") ?>">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-align-left"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Добавить новость</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-align-left"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Управление новостями</span>
            <span class="info-box-number">Всего новостей: 0</span>

            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-user"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Добавить офицера</span>
            <span class="info-box-number">Всего офицеров: 0</span>

            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">График нарядов</span>
            <span class="info-box-number">?</span>

            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
        </div>
    </div>
</div>
