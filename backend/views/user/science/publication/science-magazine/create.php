<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\User\Science\Publication\TblScienceMagazine */

$this->title = 'Create Tbl Science Magazine';
$this->params['breadcrumbs'][] = ['label' => 'Научные журналы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-science-magazine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
