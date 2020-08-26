<?php

use core\helpers\user\RbacHelpers;

?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?php
        $items = [
            ['label' => \frontend\widget\LabelEmblemaWidget::widget(), 'options' => ['class' => 'header']],
            [
                'label' => 'Главная кафедры',
                'icon' => 'star',
                'url' => ['index'],
            ],
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
            array_push($items, [
                'label' => 'ВПР(скоро)',
                'icon' => 'user',
                'url' => ['qweqwe'],
            ]);
        }
        $items = array_merge($items, Yii::$app->params['left_menu']);
        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => $items,
            ]
        ) ?>
    </section>
</aside>