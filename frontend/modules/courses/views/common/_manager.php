<?php
/**
 * @var $controllers string
 */

?>


<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Страницы курса</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to("/courses/{$controllers}/edit-main-page") ?>">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-pencil"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Управление главной</span>
                        <span class="info-box-number">курса</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- /.box-body -->
</div>

