<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model core\entities\Education\Timetable */
/* @var $form yii\widgets\ActiveForm */

$this->title = "Загрузить файл в расписание: '" . $model->title . "'";
?>

<a href="<?= \yii\helpers\Url::to('time-table') ?>" class="btn btn-success">
    Вернуться к списку
</a>
<a href="<?= \yii\helpers\Url::to(['time-table-update', 'id' => $model->id]) ?>" class="btn btn-success">
    Редактировать текущее расписания
</a>

<?= pantera\media\widgets\kartik\MediaUploadWidgetKartik::widget([
    'model' => $model,
    'bucket' => 'mediaMain',
    'urlUpload' => ['file-upload-time', 'id' => $model->id],
    'urlDelete' => ['file-delete-time'],
]) ?>
