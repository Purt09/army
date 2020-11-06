<?php
/**
 * @var $controller string
 * @var $title string
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление кафедрой ' . $title;
?>
<?= $this->render('_manager', [
    'controller' => 'common',
    'title' => 'факультета',
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
                        <span class="info-box-number">факультета</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to("subjects") ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Управление предметами</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to("evaluations") ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Образовательная деятельность</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!-- /.box-body -->
</div>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Страницы факультета</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to("announcement") ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-info"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Управление объявлениями</span>
                        <span class="info-box-number">факультета</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to("contact-info") ?>">
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
            <a class="box_link" href="<?= \yii\helpers\Url::to("contact-abonent") ?>">
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
    </div>
    <!-- /.box-body -->
</div>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Планы</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'fak_plan_month']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Планы факультета</span>
                        <span class="info-box-number">на месяц</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'fak_plan_year']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Планы факультета</span>
                        <span class="info-box-number">на год</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'fak_plan_yms']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Планы факультета</span>
                        <span class="info-box-number">УМС</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'academy_plan_month']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Планы академии</span>
                        <span class="info-box-number">на месяц</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'learning_advice']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Планы учебного</span>
                        <span class="info-box-number">совета на год</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'VNO']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Планы ВНО</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'PISP']) ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">ПИСП</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!-- /.box-body -->
</div>