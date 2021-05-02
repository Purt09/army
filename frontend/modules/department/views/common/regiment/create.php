<?php

/* @var $this yii\web\View */
/* @var $model core\entities\Army\Plan */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $category \core\entities\Army\PlanCategory
 */

$this->title = 'Добавление в ' . $category->name
?>


<?= $this->render('_form', [
    'category' => $category,
    'model' => $model
]) ?>

