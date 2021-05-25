<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\Books\BooksCategory */

$this->title = 'Create Books Category';
$this->params['breadcrumbs'][] = ['label' => 'Books Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
