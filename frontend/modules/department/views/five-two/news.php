<?php

/* @var $this yii\web\View */
/* @var $searchModel core\entities\News\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости 52 кафедры';
?>

 <?= $this->render('../common/_news', [
     'searchModel' => $searchModel,
     'dataProvider' => $dataProvider,
 ]) ?>
