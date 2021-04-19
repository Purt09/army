<?php
/**
 * @var $user \core\entities\User\TblStaff
 */

?>

<div class="col-sm-6">
    <div class="box box-primary">
        <div class="box-body box-profile">

            <div class="user_photo">
                <img class="user_photo img-responsive" src="<?= $user->foto ?>" alt="User profile picture">
            </div>

            <h3 class="profile-username text-center"> <?= $user->firstname ?> <?= $user->sirname ?>
                <br> <?= $user->lastname ?> </h3>

            <p class="text-muted text-center">

                <?= $user->getPosition() ?></p>


            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <?= $user->getRank(); ?>
                </li>

                <?= \core\helpers\user\UserHelper::getScienceGraduates($user); ?>
                <?= \core\helpers\user\UserHelper::getScienceRanks($user); ?>
            </ul>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#userInfo-<?= $user->id ?>">
                Узнать больше
            </button>

        </div>
    </div>
</div>
<div class="modal fade" id="userInfo-<?= $user->id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1"
     role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title" id="staticBackdropLabel">Биография</h5>
            </div>
            <div class="modal-body">
                <?= $user->autobiography ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Закрыть
                </button>
            </div>
        </div>
    </div>
</div>
