<?php

use core\helpers\user\RbacHelpers;
use mihaildev\elfinder\InputFile;
use yii\grid\GridView;
use yii\helpers\Html;
use \frontend\modules\fileManager\models\Directory;

/** @var \yii\data\ArrayDataProvider $dataProvider */
/**
* @var Directory $directory
* @var string $breadCrumbs
*/

$a = Yii::t('app', 'File manager');
$this->title = Yii::t('filemanager', 'File manager');

if (!isset($this->params['breadcrumbs'])) {
    $this->params['breadcrumbs'] = [];
}
$path = $directory->path;
?>

<?php

echo InputFile::widget([
    'language'   => 'ru',
    'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'name'       => 'myinput',
    'value'      => '',
]);
?>
<div class="simple-filemanager">
    <p>
        <?php if(RbacHelpers::checkRole(RbacHelpers::$ADMIN)): ?>
        <?= Html::a('<i class="fa fa-folder fa-fw"></i> ' . Yii::t('filemanager', 'Create directory'),
            ['directory/create', 'id' => Yii::$app->request->get('id')],
            [
                'class' => 'btn btn-success',
                'data' => [
                    'method' => 'post'
                ]
            ]) ?>
        <?= Html::a('<i class="fa fa-upload fa-fw"></i> ' . Yii::t('filemanager', 'Upload files'),
            ['file/upload', 'id' => Yii::$app->request->get('id')],
            ['class' => 'btn btn-primary'])
        ?>
        <?php endif; ?>
    </p>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">
                <?= $breadCrumbs ?>
              </h3>
        </div>
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
                                            ['index', 'id' => $item['id']]);
                                    if ($item['type'] == 'back')
                                        return Html::a($item['title'], 'index?id=' . $item['parent_id']);

                                    $link = '/file_manager/' . \frontend\modules\fileManager\SimpleFilemanagerModule::BASE_DIR . str_replace("\\", "/", $item['path']);
                                    return Html::a($item['title'], $link);
                                },
                                'format' => 'html'
                            ],
                            [
                                'attribute' => 'user_id',
                                'value' => function ($item) {
                                    if ($item['type'] == 'back')
                                        return '';


                                    return $item['user']['base']['fio'];
                                },
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
