<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\Books\BooksCategory */

$this->title = 'Update Books Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
