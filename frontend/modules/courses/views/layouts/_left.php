<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            $items = [
                ['label' => 'УПРАВЛЕНИЕ КУРСОМ', 'options' => ['class' => 'header']],
                [
                    'label' => 'Главная курса',
                    'icon' => 'star',
                    'url' => ['index'],
                ],
                [
                    'label' => 'Обновление данных',
                    'icon' => 'list',
                    'url' => ['manager'],
                ],
                [
                    'label' => 'Кадровая работа',
                    'icon' => 'users',
                    'url' => ['users'],
                ],
                [
                    'label' => 'Списки вне казармы',
                    'icon' => 'user-plus',
                    'url' => ['users-free'],
                ],
            ];
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