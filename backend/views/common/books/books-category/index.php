<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\common\BooksCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Books Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'parent_id',
                'label' => 'Родитель',
                'value' => function (\core\entities\Common\Books\BooksCategory $category) {
                    return $category->parent->title;
                }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
