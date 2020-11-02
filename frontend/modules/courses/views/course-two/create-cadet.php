<?php
/**
 * @var $this \yii\web\View
 * @var $model \frontend\modules\courses\forms\CreateCadetForm
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Добавление курсанта';

?>

<div class="user-form">



    <?= $this->render('../common/_form_create_cadet', [
        'models' => $model,
    ]) ?>

</div>
