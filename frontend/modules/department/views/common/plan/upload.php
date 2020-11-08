<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Timetable */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $category \core\entities\Army\PlanCategory
 */

$this->title = "Загрузить файл в план: '" . $model->title . "'";
?>

<a href="<?= \yii\helpers\Url::to(['plans', 'alias' => $category->alias]) ?>" class="btn btn-success">
    Вернуться к списку
</a>

<?= pantera\media\widgets\kartik\MediaUploadWidgetKartik::widget([
    'model' => $model,
    'bucket' => 'mediaMain',
    'urlUpload' => ['file-upload-plan', 'id' => $model->id],
    'urlDelete' => ['file-delete-plan'],
]) ?>
