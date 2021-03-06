<?php

use core\helpers\user\RbacHelpers;
$url = Yii::$app->request->pathInfo;
$url_array = explode("/", $url);
if(count($url_array) == 3)
    $link = '';
else
    $link = $url_array[1] . '/';
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?php
        $items = [
            ['label' => \frontend\widget\LabelEmblemaWidget::widget(), 'options' => ['class' => 'header']],
            [
                'label' => 'УМБ',
                'icon' => 'pencil-square-o',
                'url' => ['ymb'],
            ],
            [
                'label' => 'Кадровая работа',
                'icon' => 'users',
                'url' => ['users'],
            ],
            [
                'label' => 'Выпускники',
                'icon' => 'star-half-o',
                'url' => ['graduates'],
            ],
            [
                'label' => 'Бессмертный полк',
                'icon' => 'shield',
                'url' => ['regiment'],
            ]
        ];
        if (RbacHelpers::checkRole(RbacHelpers::$MANAGER) || RbacHelpers::checkRole(RbacHelpers::$ADMIN)) {
            array_push($items,[
                'label' => 'Обновление данных',
                'icon' => 'list',
                'url' => [$link . 'manager'],
            ]);
        }
        $items = array_merge(Yii::$app->params['left_menu'], $items);
        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => $items,
            ]
        ) ?>
    </section>
</aside>