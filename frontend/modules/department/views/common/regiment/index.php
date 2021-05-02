<?php
/**
 * @var $this View
 * @var $milUnit TblMilUnit
 * @var $regiments Plan[]
 */

use core\entities\Army\Plan;
use core\entities\User\TblMilUnit;
use core\helpers\user\RbacHelpers;
use yii\helpers\Url;
use yii\web\View;


$this->title = "Бессмертный полк: " . $milUnit->name
 ?>

<?php if(RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
    <a href="<?= Url::to('regiment-create') ?>" class="btn btn-success">Добавить</a>
<?php endif; ?>
<hr>
<?php foreach ($regiments as $regiment): ?>
<div class="row">
    <div class="col-md-3 blog_box">
        <a href="#" class="mask">
            <img src="<?= $regiment->img ?>"
                 alt="<?= $regiment->title ?>" class="img-responsive zoom-img"/>
        </a>
    </div>
    <div class="col-md-9">
        <h3 style="margin-top: 0px"><a href="#"><?= $regiment->title ?></a>
        </h3>
        <div class="links">
        </div>
        <p><?= $regiment->text ?></p>
        <?php if(RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
            <a href="<?= Url::to(['regiment-update', 'id' => $regiment->id]) ?>" class="btn btn-success">Редактировать</a>
        <?php endif; ?>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
<hr>
<?php endforeach; ?>
