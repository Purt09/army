<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \core\vendor\pages\models\Page */
/**
 * @var $title string
 * @var $isDate boolean
 */


$this->title = $title;
?>
<<<<<<< HEAD
<!-- <script src="https://ckeditor.com/docs/ckeditor5/latest/features/assets/snippet.js"></script>
=======
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/assets/snippet.js"></script>
>>>>>>> 137fea962eb71a72fc6b334f36da150718de07db
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/build-image-source/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-toolbar/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-insert-via-url/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-style/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-style-presentational/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-resize/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-resize-buttons-dropdown/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-resize-buttons/snippet.js"></script>
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-resize-px/snippet.js"></script>
<<<<<<< HEAD
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-link/snippet.js"></script> -->
=======
<script src="https://ckeditor.com/docs/ckeditor5/latest/features/snippets/features/image-link/snippet.js"></script>
>>>>>>> 137fea962eb71a72fc6b334f36da150718de07db
<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'content')->widget(\stkevich\ckeditor5\EditorClassic::className(), [
    ])->label('Главная'); ?>

    <?php if (isset($isDate)): ?>
        <?php if ($isDate): ?>

            <?= $form->field($model, 'updated_at')->widget(\kartik\widgets\DateTimePicker::className(), [])->label('Выберите время, когда объявление закончится'); ?>

        <?php endif; ?>
    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
