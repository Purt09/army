<aside class="main-sidebar">
    <section class="sidebar">
            <?php

            use core\helpers\user\RbacHelpers;

            $items = [
                ['label' => 'УПРАВЛЕНИЕ КУРСОМ', 'options' => ['class' => 'header']],
                [
                    'label' => 'Главная курса',
                    'icon' => 'star',
                    'url' => ['index'],
                ],
            ];
            if (RbacHelpers::checkRole(RbacHelpers::$COURSE_MAIN) || RbacHelpers::checkRole(RbacHelpers::$ADMIN)) {
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