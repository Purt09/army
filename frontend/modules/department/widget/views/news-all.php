<?php
/**
 * @var $news NewsPublications[]
 * @var $users \core\entities\User\TblStaff[]
 */

use Carbon\Carbon;
use core\entities\News\NewsPublications;


$today_year = \Carbon\Carbon::today()->year;
?>
<div class="col-sm-9">
    <?php foreach ($news as $item): ?>
        <?php if ($item->articles->status != \core\entities\News\News::STATUS_ACTIVE) {
            continue;
        } ?>
        <div class="row">
            <div class="col-md-2 blog_box">
                <a href="/news/<?= $item->articles->id ?>" class="mask">
                    <img src="<?= $item->articles->img ?>"
                         alt="<?= $item->articles->title ?>" class="img-responsive zoom-img"/>
                </a>
            </div>
            <div class="col-md-10">
                <h3 style="margin-top: 0px"><a href="/news/<?= $item->articles->id ?>"><?= $item->articles->title ?></a>
                </h3>
                <div class="links">
                    <ul>
                        <li>
                            <i class="fa blog-icon fa-calendar"> </i><span><?= Yii::$app->formatter->asDate($item->articles->created_at, 'long') ?></span>
                        </li>
                    </ul>
                </div>
                <p><?= mb_strimwidth($item->articles->description, 0, 280, "...") ?></p>
                <a href="/news/<?= $item->articles->id ?>" class="btn1 btn-8 btn-8c">Читать</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    <?php endforeach; ?>
</div>
<div class="col-md-3">
    <ul class="menu-birthday">
        <li>Дни рождения:</li>
        <?php if (isset($users)): ?>
            <?php $i = [
                'today' => 0,
                'tomorrow' => 0,
                'month' => 0
            ]; // Счетчик для вывода текста> ?>
            <?php foreach ($users as $user): ?>
            <?php $dr = Carbon::createFromDate(null, intval((int) substr($user->birthday_date, 5, 7)), substr($user->birthday_date, 8, 10)); ?>
                <?php if ($user->getDiffDay(\Carbon\Carbon::today()) == 0): ?>
                    <?php if ($dr->format("Y-m-d") == \Carbon\Carbon::today()->format("Y-m-d")): ?>
                        <?php if ($i['today'] == 0): ?>
                            <li style="color: #b35ede;" class="">Сегодня:</li>
                        <?php endif; ?>
                        <?php $i['today']++ ?>
                        <li><span><?= $user->fio ?></span>
                            <?php if ($today_year - intval((int)substr($user->birthday_date, 0, 4)) % 5 == 0): ?>
                                <em>Юбилей!</em>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                    <hr>
                <?php elseif ($user->getDiffDay(\Carbon\Carbon::tomorrow()) == 0): ?>
                    <?php if ($i['tomorrow'] == 0): ?>
                        <li style="color: #b35ede;" class="">Завтра:</li>
                    <?php endif; ?>
                    <?php $i['tomorrow']++ ?>
                    <li><span><?= $user->fio ?></span>
                        <em><?= Yii::$app->formatter->asDate($user->birthday_date) ?></em>
                    </li>
                    <hr>
                <?php else: ?>
                    <?php if ($i['month'] == 0): ?>
                        <li style="color: #b35ede;" class="">Ближайшие:</li>
                    <?php endif; ?>
                    <?php $i['month']++ ?>
                    <li><span><?= $user->fio ?> <i
                                    style="font-size: 12px">Осталось: <?= $user->getDiffDay(\Carbon\Carbon::today()) ?> дней</i></span>
                        <em><?= Yii::$app->formatter->asDate($user->birthday_date) ?></em>
                    </li>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>