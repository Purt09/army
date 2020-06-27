<?php

/* @var $this yii\web\View */
/**
 * @var $users array
 */

use yii\helpers\Url;

$this->title = 'Рабочий стол админ панели';
?>
<div class="site-index">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="<?= Url::to('user/user') ?>" class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Пользователи</span>
                <span class="info-box-number">Курсанты: <?= count($users['cadet']) ?></span>
                <span class="info-box-number">Офицеры: <?= count($users['officer']) ?></span>
            </div>
        </a>
    </div>

</div>
