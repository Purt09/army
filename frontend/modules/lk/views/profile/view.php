<?php
/**
 * @var $this \yii\web\View
 * @var $roles array
 * @var $user \core\entities\User\User
 */

$this->title = 'Профиль';

?>

<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="/img/user.png" alt="User profile picture">

                <h3 class="profile-username text-center"><?= $user->base->firstname ?> <?= $user->base->sirname ?></h3>

                <p class="text-muted text-center"><?= $user->base->lastname ?>r</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Звание: </b>
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
                <strong><i class="fa fa-book margin-r-5"></i> Образование</strong>

                <p class="text-muted">
                    ???
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Место проживания</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Роли</strong>

                <p>
                    <?php foreach ($roles as $role): ?>
                    <span class="label label-success"><?= $role->description ?></span>
                    <?php endforeach; ?>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Заметка</strong>

                <p>???</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
