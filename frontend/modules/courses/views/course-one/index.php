<?php
/**
 * @var $this \yii\web\View
 * @var $content \bupy7\pages\models\Page
 * @var $news array
 * @var $users \core\entities\User\TblStaff[]
 */

$this->title = 'Главная 51 курса';
?>
<?php $main = '<section class="content">
    <div class="col-sm-6" style=" margin-top: 60px; background-color: white;border-radius: 20px;
        padding: 15px;box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
        ' . $content->content . '
    </div>
    <div class="col-sm-6">
        <div style="text-align: center;">
            <h2>КОМАНДОВАНИЕ КУРСА</h2>
        </div>
        <div>
            ';
if (isset($users)) {
    foreach ($users as $user) {
        $main .= '<div class="col-sm-6"> 
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        <div class="user_photo">
                            <img class="user_photo img-responsive" src="' . $user->foto . '" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"> ' . $user->firstname . ' ' . $user->lastname . ' <br> ' . $user->sirname . '</h3>

                        <p class="text-muted text-center">';

        $main .= $user->getPosition() . '</p>';


        $main .= ' <ul class="list-group list-group-unbordered">';

        $main .= \core\helpers\user\UserHelper::getScienceGraduates($user);
        $main .= \core\helpers\user\UserHelper::getScienceRanks($user);
        $main .= '<li class="list-group-item">';
        $main .= $user->getRank();
        $main .= '</li>';
        $main .= '</ul>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#staticBackdrop">
                            Узнать больше
                        </button>

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h5 class="modal-title" id="staticBackdropLabel">Биография</h5>
                                    </div>
                                    <div class="modal-body">
                                        Автобиография не заполнена
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Закрыть
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}

$main .= '
        </div>
    </div>
</section>' ?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget([
                'news' => $news,
                'role' => \core\helpers\user\RbacHelpers::$COURSE51]),
        ],
        [
            'label' => 'Главная 51 курса',
            'content' => $main,
        ],
    ],
]);
?>