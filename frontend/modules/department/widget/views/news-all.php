<?php
/**
 * @var $news NewsPublications[]
 */

use core\entities\News\NewsPublications;

?>
<div class="col-sm-9">
    <?php foreach ($news as $item): ?>
        <div class="row">
            <div class="col-md-3 blog_box">
                <a href="/news/<?= $item->articles->id ?>" class="mask">
                    <img src="<?= $item->articles->img ?>"
                         alt="<?= $item->articles->title ?>" class="img-responsive zoom-img"/>
                </a>
            </div>
            <div class="col-md-9">
                <h3 style="margin-top: 0px"><a href="/news/<?= $item->articles->id ?>"><?= $item->articles->title ?></a></h3>
                <div class="links">
                    <ul>
                        <li><i class="fa blog-icon fa-calendar"> </i><span><?= Yii::$app->formatter->asDate($item->articles->created_at, 'long' )?></span></li>
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
        <li><span>П-к Карин А.В.</span><em>26 июля 2020</em></li>
        <li><span>П-к Карин А.В.</span><em>28 июля 2020</em></li>
        <li><span>П-к Карин А.В.</span><em>30 июля 2020</em></li>
    </ul>
</div>