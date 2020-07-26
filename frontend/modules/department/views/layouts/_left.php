<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            $items = [
                [
                    'label' => 'Главная кафедры',
                    'icon' => 'star',
                    'url' => ['index'],
                ],
                [
                    'label' => 'Управление',
                    'icon' => 'star',
                    'url' => ['manager'],
                ],
                [
                    'label' => 'Наряды',
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