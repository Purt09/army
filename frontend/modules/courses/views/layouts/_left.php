<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            $items = [
                ['label' => 'УПРАВЛЕНИЕ КУРСОМ', 'options' => ['class' => 'header']],
                [
                    'label' => 'Главная курса',
                    'icon' => 'star',
                    'url' => ['/courses/common'],
                ],
                [
                    'label' => 'Обновление данных',
                    'icon' => 'list',
                    'url' => ['/'],
                ],
                [
                    'label' => 'Кадровая работа',
                    'icon' => 'users',
                    'url' => ['/'],
                ],
                [
                    'label' => 'Списки вне казармы',
                    'icon' => 'user-plus',
                    'url' => ['/'],
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