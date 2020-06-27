<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'Рабочий стол',
                        'icon' => 'desktop',
                        'url' => ['/lk/desktop'],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
