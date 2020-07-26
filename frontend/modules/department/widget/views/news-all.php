<?php
/**
 * @var $news NewsPublications[]
 */

use core\entities\News\NewsPublications;

?>
<div class="col-sm-9">
    <?php foreach ($news as $item): ?>
        <div class="row">
            <div class="col-md-4 blog_box">
                <a href="#" class="mask">
                    <img src="<?= $item->article->img ?>"
                         alt="<?= $item->article->title ?>" class="img-responsive zoom-img"/>
                </a>
            </div>
            <div class="col-md-8">
                <h3 style="margin-top: 0px"><a href="single.html"><?= $item->article->title ?></a></h3>
                <div class="links">
                    <ul>
                        <li><i class="fa blog-icon fa-calendar"> </i><span><?= Yii::$app->formatter->asDate($item->article->created_at, 'long' )?></span></li>
                    </ul>
                </div>
                <p><?= mb_strimwidth($item->article->description, 0, 280, "...") ?></p>
                <a href="#" class="btn1 btn-8 btn-8c">Читать</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    <?php endforeach; ?>
</div>
<div class="col-md-3">
    <ul class="menu">
        <li>Дни рождения:</li>
        <li><span>П-к Карин А.В.</span><em>26 июля 2020</em></li>
        <li><span>П-к Карин А.В.</span><em>28 июля 2020</em></li>
        <li><span>П-к Карин А.В.</span><em>30 июля 2020</em></li>
    </ul>
</div>