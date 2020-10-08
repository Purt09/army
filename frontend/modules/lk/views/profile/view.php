<?php
/**
 * @var $this \yii\web\View
 * @var $roles array
 * @var $user \core\entities\User\TblStaff
 */

$this->title = 'Профиль';

?>
<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive" src="<?= $user->foto ?>"
                     alt="User profile picture" style="height: auto">

                <h3 class="profile-username text-center"><?= $user->firstname ?> <?= $user->sirname ?></h3>

                <p class="text-muted text-center"><?= $user->lastname ?></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Звание: </b>
                        <?php if (\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                            <a href="<?= \yii\helpers\Url::to(['rank/edit', 'id' => $user->id, 'rank_id' => $user->id_current_mil_rank]) ?>">
                                <?= $user->getRank() ?>
                            </a>
                        <?php else: ?>
                            <?= $user->getRank() ?>
                        <?php endif; ?>
                        <a href="<?= \yii\helpers\Url::to(['rank/history', 'id' => $user->id]) ?>">(История)</a>
                    </li>
                    <li class="list-group-item">
                        <b>Должность: </b>
                        <?php if (\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                            <a href="<?= \yii\helpers\Url::to(['position/edit', 'id' => $user->id, 'position_id' => $user->id_current_mil_position]) ?>">
                                <?= $user->getPosition() ?>
                            </a>
                        <?php else: ?>
                            <?= $user->getPosition() ?>
                        <?php endif; ?>
                        <a href="<?= \yii\helpers\Url::to(['position/history', 'id' => $user->id]) ?>">(История)</a>
                    </li>
                    <?= \core\helpers\user\UserHelper::getScienceGraduates($user) ?>
                    <?= \core\helpers\user\UserHelper::getScienceRanks($user) ?>

                </ul>
            </div>
            <div class="box-footer box-comments">
                <?php if (\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                    <b>Панель управления пользователем: </b>
                    <ul>
                        <li><a href="<?= \yii\helpers\Url::to(['rank/index', 'id' => $user->id]) ?>">Добавить звание</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['position/add', 'id' => $user->id]) ?>"> Добавить должность</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['science-graduate/add', 'id' => $user->id]) ?>">Добавить ученую степень</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['science-rank/add', 'id' => $user->id]) ?>">Добавить ученое звание </a></li>
                    </ul>
                <?php endif; ?>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">О пользователе</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-phone margin-r-5"></i> Номера телефонов:</strong>

                <p class="text-muted">
                    Мобильный: <?= $user->mobile_phone ?>
                </p>
                <p class="text-muted">
                    Домашний: <?= $user->home_phone ?>
                </p>
                <p class="text-muted">
                    Рабочий: <?= $user->work_phone ?>
                </p>
                <p class="text-muted">
                    Жена: <?= $user->wife_mobile_phone ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Место проживания</strong>

                <p class="text-muted"><?= $user->address ?></p>

                <hr>

                <?php if(isset($roles)):?>
                <strong><i class="fa fa-pencil margin-r-5"></i> Роли:</strong>

                <p>
                        <?php foreach ($roles as $role): ?>
                            <span class="label label-success"><?= $role->description ?></span>
                        <?php endforeach; ?>
                </p>

                <?php endif; ?>
                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Автобиография</strong>

                <p>???</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Личные данные</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php if (\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                    <a href="<?= \yii\helpers\Url::to(['education/add', 'id' => $user->id]) ?>" class="btn btn-info">Добавить
                        образование</a>
                    <br>
                <?php endif; ?>
                <?php if (count($user->tblEducations) != 0): ?>
                    <b>Образование:</b> <br>
                    <div class="row">
                        <?php foreach ($user->tblEducations as $education): ?>
                            <ul class="col-sm-4" style="list-style: none">
                                <li>Уровень: <?= $education->edicationLevel->name ?></li>
                                <li>Учебное заведение: <?= $education->univercity->name ?></li>
                                <li>Дата поступления: <?= Yii::$app->formatter->asDate($education->datestart) ?></li>
                                <li>Дата окончания: <?= Yii::$app->formatter->asDate($education->dateend) ?></li>
                                <li>Номер диплома: <?= $education->diplom_number ?></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>

                    <hr>
                <?php endif; ?>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Календарь</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php if (\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                    <a href="<?= \yii\helpers\Url::to(['duty/add', 'id' => $user->id]) ?>" class="btn btn-info">Добавить
                        наряд</a>
                    <a href="<?= \yii\helpers\Url::to(['vacation/add', 'id' => $user->id]) ?>" class="btn btn-info">Добавить
                        отпуск</a>
                    <a href="<?= \yii\helpers\Url::to(['duty/add-journey', 'id' => $user->id]) ?>" class="btn btn-info">Добавить
                        командировку</a>
                <?php endif; ?>
                <?php if (count($user->tblStaffDuties) != 0): ?>
                    <div class="col-sm-12">
                        <div class="row ">
                            <b>Наряды:</b> <br>
                            <?php foreach ($user->tblStaffDuties as $staffDuty): ?>
                                <ul class="col-sm-4" style="list-style: none">
                                    <li><b>Тип наряды:</b> <?= $staffDuty->dutyType->name ?></li>
                                    <li><b>Начало наряда:</b> <?= Yii::$app->formatter->asDate($staffDuty->date_start) ?></li>
                                    <li><b>Конец отпуска:</b> <?= Yii::$app->formatter->asDate($staffDuty->date_end) ?></li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (count($user->tblStaffVacations) != 0): ?>
                <div class="col-sm-12">
                    <div class="row ">
                    <b>Отпуска:</b> <br>
                        <?php foreach ($user->tblStaffVacations as $staffVacation): ?>
                            <ul class="col-sm-4" style="list-style: none">
                                <li><b>Тип отпуска:</b> <?= $staffVacation->vacationType->name ?></li>
                                <li><b>Начало отпуска:</b> <?= Yii::$app->formatter->asDate($staffVacation->date_start) ?></li>
                                <li><b>Конец отпуска:</b> <?= Yii::$app->formatter->asDate($staffVacation->date_end) ?></li>
                                <li><b>Приказ подписал:</b> <?= $staffVacation->orderOwner->name ?></li>
                                <li><b>Номер приказа:</b> <?= $staffVacation->order_number ?></li>
                                <li><b>Дата приказа:</b> <?= Yii::$app->formatter->asDate($staffVacation->order_date) ?></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (count($user->tblStaffDutyJourneys) != 0): ?>
                    <div class="col-sm-12">
                        <div class="row ">
                            <b>Командировки:</b> <br>
                            <?php foreach ($user->tblStaffDutyJourneys as $dutyJourney): ?>
                                <ul class="col-sm-4" style="list-style: none">
                                    <li><b>Город:</b> <?= $dutyJourney->city->name ?></li>
                                    <li><b>Начало командировки:</b> <?= Yii::$app->formatter->asDate($dutyJourney->date_start) ?></li>
                                    <li><b>Конец командировки:</b> <?= Yii::$app->formatter->asDate($dutyJourney->date_end) ?></li>
                                    <li><b>Приказ подписал:</b> <?= $dutyJourney->orderOwner->name ?></li>
                                    <li><b>Номер приказа:</b> <?= $dutyJourney->order_number ?></li>
                                    <li><b>Дата приказа:</b> <?= Yii::$app->formatter->asDate($dutyJourney->order_date) ?></li>
                                    <li><b>Организация:</b> <?= $dutyJourney->organization ?></li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <!-- /.col -->
</div>

