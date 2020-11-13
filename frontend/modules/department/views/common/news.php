<?php

/* @var $this yii\web\View */
/* @var $searchModel core\entities\News\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости факультета';
$this->params['breadcrumbs'][] = $this->title;
?>

 <?= $this->render('_news', [
     'searchModel' => $searchModel,
     'dataProvider' => $dataProvider,
 ]) ?>
