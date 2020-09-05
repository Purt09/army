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
                <img class="profile-user-img img-responsive img-circle" src="<?= $user->foto ?>" alt="User profile picture">

                <h3 class="profile-username text-center"><?= $user->firstname ?> <?= $user->sirname ?></h3>

                <p class="text-muted text-center"><?= $user->lastname ?>r</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Звание: </b>
                        <?= $user->currentMilRank->militaryRank->name ?>
                        <a href="<?= \yii\helpers\Url::to(['rank/history', 'id' => $user->id]) ?>">(История)</a>
                    </li>
                    <li class="list-group-item">
                        <b>Должность: </b>
                    </li>
                </ul>
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
                    <?= $user->mobile_phone ?>
                </p>
                <p class="text-muted">
                    <?= $user->home_phone ?>
                </p>
                <p class="text-muted">
                    <?= $user->work_phone ?>
                </p>
                <p class="text-muted">
                    <?= $user->wife_mobile_phone ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Место проживания</strong>

                <p class="text-muted"><?= $user->address ?></p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Роли:</strong>

                <p>
                    <?php foreach ($roles as $role): ?>
                    <span class="label label-success"><?= $role->description ?></span>
                    <?php endforeach; ?>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Автобиография</strong>

                <p>???</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
