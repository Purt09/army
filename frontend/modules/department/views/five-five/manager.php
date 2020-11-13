<?php
/**
 * @var $this \yii\web\View
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление кафедрой';
?>

<?= $this->render('../common/_manager', [
    'controller' => 'five-five',
    'title' => '55',
    'newsPublications' => $newsPublications
]) ?>



<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Образование</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to("time-table") ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-list"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Управление расписанием</span>
                        <span class="info-box-number">кафедры</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!-- /.box-body -->
</div>
