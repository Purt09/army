<?php

use core\helpers\user\RbacHelpers;

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
                'label' => 'ВПР',
                'icon' => 'user',
                'url' => ['immortal-regiment-view'],
            ]
        ];
        if (RbacHelpers::checkRole(RbacHelpers::$MANAGER) || RbacHelpers::checkRole(RbacHelpers::$ADMIN)) {
            array_push($items,[
                'label' => 'Обновление данных',
                'icon' => 'list',
                'url' => ['manager'],
            ]);
            array_push($items, [
                    'label' => 'Кадровая работа',
                    'icon' => 'users',
                    'url' => ['users'],
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