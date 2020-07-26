<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            $items = [
                [
                    'label' => 'Главная курса',
                    'icon' => 'star',
                    'url' => ['/courses/common'],
                ],
                [
                    'label' => 'Управление',
                    'icon' => 'star',
                    'url' => ['/'],
                ],
                [
                    'label' => 'Наряды',
                    'icon' => 'star',
                    'url' => ['/'],
                ],
                [
                    'label' => 'Успеваемость',
                    'icon' => 'star',
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