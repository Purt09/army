<?php
/**
 * @var $books Books[]
 * @var $this View
 * @var $category BooksCategory
 *
 */

use core\entities\Common\Books\Books;
use core\entities\Common\Books\BooksCategory;
use core\helpers\user\RbacHelpers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$this->title = "Книги:";

?>


<?php if (RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
    <?= Html::a('Добавить книгу', Url::to(['create', 'category_id' => $category->id]), ['class' => 'btn btn-success']) ?>
<?php endif; ?>

<div class="row">
    <?php foreach ($books as $book): ?>

        <div class="col-sm-3">
            <div class="thumbnail">
                <?php if (is_null($book->image) || empty($book->image)): ?>
                    <img src="/images/image_not_found.png" alt="">
                <?php else: ?>
                    <img src="<?= $book->image ?>" alt="">
                <?php endif; ?>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <small><?= $book->author ?> (<?= $book->pages ?> стр.) <?= substr($book->date,0,4) ?> г.</small></h4>
                    <p class="group inner list-group-item-text">
                        <?= $book->description ?>
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead"><?= $book->title ?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a download="" class="btn btn-success" href="/upload/<?= $book->mediaMain->file ?>">Загрузить <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
                <?php if (RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
                    <?= Html::a('Изменить', Url::to(['update', 'id' => $book->id]), ['class' => 'btn btn-success']) ?>
                <?php endif; ?>
                <?php if (RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
                    <?= Html::a('Загрузить книгу', Url::to(['file', 'id' => $book->id]), ['class' => 'btn btn-success']) ?>
                <?php endif; ?>
                <?php if (RbacHelpers::checkRole(RbacHelpers::$MANAGER)): ?>
                    <?= Html::a('Удалить', Url::to(['delete', 'id' => $book->id]), ['class' => 'btn btn-danger']) ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
