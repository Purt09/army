<?php
/**
 * @var $controller string
 * @var $title string
 * @var $this \yii\web\View
 * @var $provider \yii\data\ArrayDataProvider
 */

use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = $title;

?>

    <a href="<?= \yii\helpers\Url::to('add-user') ?>" class="btn btn-success">Добавить пользователя</a>


<?= GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'fio',
        'mobile_phone',
        'birthday_date',
        [
            'attribute' => 'foto',
            'value' => function ($model) {
                return "<img src='{$model->foto}' alt='Аватар не загружен' style='height: auto; width: 50px'>";
            },
            'format' => 'raw'
        ],
        [
            'class' => ActionColumn::className(),
            'template' => '{view}  {info}',
            'buttons' => [
                'view' => function ($url, $model) {
                    $url = \yii\helpers\Url::to(['/lk/profile/view', 'id' => $model->id]);
                    return Html::a('<i class="fa fa-eye"></i>', $url, [
                        'title' => Yii::t('app', 'Info'),

                    ]);

                },
                'info' => function ($url, $model) {
                    $url = \yii\helpers\Url::to(['/lk/profile/setting', 'id' => $model->id]);

                    return Html::a('<i class="fa fa-pencil"></i>', $url, [

                        'title' => Yii::t('app', 'Info'),

                    ]);

                }

            ],
        ],
    ],
]);
?>