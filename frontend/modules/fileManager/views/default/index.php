<?php

use core\helpers\user\RbacHelpers;
use yii\grid\GridView;
use yii\helpers\Html;
use \frontend\modules\fileManager\models\Directory;

/** @var \yii\data\ArrayDataProvider $dataProvider */
/** @var Directory $directory */

$a = Yii::t('app', 'File manager');
$this->title = Yii::t('filemanager', 'File manager');

if (!isset($this->params['breadcrumbs'])) {
    $this->params['breadcrumbs'] = [];
}
$path = $directory->path;
?>
<div class="simple-filemanager">
    <p>
        <?php if(RbacHelpers::checkRole(RbacHelpers::$ADMIN)): ?>
        <?= Html::a('<i class="fa fa-folder fa-fw"></i> ' . Yii::t('filemanager', 'Create directory'),
            ['directory/create', 'path' => $directory->path],
            [
                'class' => 'btn btn-success',
                'data' => [
                    'method' => 'post'
                ]
            ]) ?>
        <?= Html::a('<i class="fa fa-upload fa-fw"></i> ' . Yii::t('filemanager', 'Upload files'),
            ['file/upload', 'path' => $directory->path],
            ['class' => 'btn btn-primary'])
        ?>
        <?php endif; ?>
    </p>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <?php try {
                    echo GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            [
                                'attribute' => 'name',
                                'label' => 'Название',
                                'value' => function ($item) use ($path) {
                                    if ($item['type'] == \core\entities\Common\File::TYPE_DIR)
                                        return Html::a(
                                            "<i class='fa  fa-folder'></i> " . $item['title'],
                                            ['index', 'path' => $item['path']]);
                                    if ($item['type'] == 'back')
                                        return Html::a($item['title'], ['index', 'path' => $item['path']]);

                                    $link = '/file_manager/' . \frontend\modules\fileManager\SimpleFilemanagerModule::BASE_DIR . str_replace("\\", "/", $item['path']);
                                    return Html::a($item['title'], $link);
                                },
                                'format' => 'html'
                            ],
                            [
                                'attribute' => 'user_id',
                                'label' => 'Опубликовал',
                            ],
                            [
                                'attribute' => 'create_at',
                                'value' => function ($item) {
                                    if ($item['type'] == \core\entities\Common\File::TYPE_DIR || $item['type'] == 'back')
                                        return '';

                                    return Yii::$app->formatter->asDatetime($item['create_at']);
                                },
                                'label' => 'Дата',
                            ],
                            [
                                'attribute' => 'size',
                                'value' => function ($item) {
                                    if ($item['type'] == \core\entities\Common\File::TYPE_DIR || $item['type'] == 'back')
                                        return '';

                                    return Yii::$app->formatter->asShortSize($item['size']);
                                },
                                'label' => 'Размер',
                            ],
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'headerOptions' => ['class' => 'col-xs-1'],
                                'urlCreator' => function ($action, $item) {
                                    return [
                                        $item['type'] . '/' . $action,
                                        'path' => $item['path'],
                                        'id' => $item['id'],
                                    ];
                                },
                                'buttonOptions' => [
                                    'data' => [
                                        'method' => 'post',
                                    ]
                                ],
                                'visibleButtons' => [
                                    'update' => function ($item) {
                                        return false;
                                        if ($item['block'])
                                            return false;
                                        return $item['type'] == 'directory';
                                    },
                                    'delete' => function ($item) {
                                        if(!RbacHelpers::checkRole(RbacHelpers::$ADMIN))
                                            return false;
                                        if ($item['block'])
                                            return false;
                                        else
                                            return true;
                                    },
                                ],
                                'template' => '{delete}{update}'
                            ],
//                            [
//                                'attribute' => 'path',
//                                'value' => function ($item) {
//                                    return Html::tag('code',
//                                        $item['type'] != 'directory' ? $item['url'] : '');
//                                },
//                                'format' => 'html'
//                            ],
//                            'time:datetime',

                        ],
                    ]);
                } catch (Exception $e) {
                    yii::$app->session->setFlash('error', $e->getMessage());
                } ?>
            </div>
        </div>


    </div>
</div>
