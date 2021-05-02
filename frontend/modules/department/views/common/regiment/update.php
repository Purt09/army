<?php

/* @var $this yii\web\View */
/* @var $model core\entities\Army\Plan */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $category \core\entities\Army\PlanCategory
 */

use yii\helpers\Url;

$this->title = 'Редактирование';
?>


<?= $this->render('_form', [
    'category' => $category,
    'model' => $model
]) ?>


<a href="<?= Url::to(['graduate-delete', 'id' => $model->id]) ?>" class="btn btn-danger">Удалить</a>