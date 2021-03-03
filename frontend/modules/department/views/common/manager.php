<?php
/**
 * @var $controller string
 * @var $title string
 * @var $unit_id integer
 * @var $newsPublications \core\entities\News\NewsPublications
 */

$this->title = 'Управление кафедрой ' . $title;
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Управление разделами верхнего меню</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="box box-success">
            <div class="box-header with-border border-left border-right">
                <h3 class="box-title">Планы</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body border">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a class="box_link" href="<?= \yii\helpers\Url::to(["common/task-common/index"]) ?>">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-tasks"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">Приказания</span>
                                <span class="info-box-number">и задачи</span> <br>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'fak_plan_month']) ?>">
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
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'fak_plan_year']) ?>">
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
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'fak_plan_yms']) ?>">
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
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'academy_plan_month']) ?>">
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
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'learning_advice']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> </span>
                                <span class="info-box-number">Планы учёного</span>
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

        <div class="box box-success">
            <div class="box-header with-border  border-left border-right">
                <h3 class="box-title">Образовательная деятельность</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body border">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to("/education/sport/create?unit_id=" . $unit_id) ?>">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-flag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Добавить ведомость фп</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to("/education/sport/index") ?>">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-flag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Все ведомости по фп</span>

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
            <div class="box-header with-border border-left border-right">
                <h3 class="box-title">Методическая деятельность</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body border">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'method_control_oc']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> </span>
                                <span class="info-box-number">График контроля </span>
                                <span class="info-box-number">Осень 20/21</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'method_control_ves']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> </span>
                                <span class="info-box-number">График контроля </span>
                                <span class="info-box-number">Весна 20/21</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link"
                       href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'method_open_lessons']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> </span>
                                <span class="info-box-number">Открытые и  </span>
                                <span class="info-box-number">показательные занятия</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to(["common/plan/plans", 'alias' => 'method_up_skill']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> </span>
                                <span class="info-box-number">Повышении  </span>
                                <span class="info-box-number">квалификации</span>
                            </div>
                        </div>
                    </a>
                </div>



            </div>
            <!-- /.box-body -->
        </div>


        <div class="box box-success">
            <div class="box-header with-border  border-left border-right">
                <h3 class="box-title">Научная работа</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body border">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to(["common/conference/science-conference", 'alias' => 'method_up_skill']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">Конференции </span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to(["common/conference/conference-owner", 'alias' => 'method_up_skill']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">Организаторы </span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to(["common/conference/conference-rank", 'alias' => 'method_up_skill']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">Уровень конференции </span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="box_link" href="<?= \yii\helpers\Url::to(["common/conference/conference-result-type", 'alias' => 'method_up_skill']) ?>">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number">Тип участия </span>

                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- /.box-body -->
        </div>


    </div>
    <!-- /.box-body -->
</div>

<?= $this->render('_manager', [
    'controller' => 'common',
    'title' => 'факультета',
    'unit_id' => $unit_id,
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
            <a class="box_link" href="<?= \yii\helpers\Url::to("semester/index") ?>">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> </span>
                        <span class="info-box-number">Управление семестрами</span>
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
                        <span class="info-box-number">Выставление или изменение оценок</span>
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

