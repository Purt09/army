<?php
/**
 *
 */

$this->title = "Загрузка книги " . $model->title;
?>


<?= pantera\media\widgets\kartik\MediaUploadWidgetKartik::widget([
    'model' => $model,
    'bucket' => 'mediaMain',
    'urlUpload' => ['file-upload', 'id' => $model->id],
    'urlDelete' => ['file-delete'],
]) ?>

