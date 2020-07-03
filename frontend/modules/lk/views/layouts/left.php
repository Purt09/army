
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
                    [
                        'label' => 'Офицерский раздел',
                        'icon' => 'star',
                        'url' => ['/lk/desktop'],
                    ],
                    [
                        'label' => 'Курсантский раздел',
                        'icon' => 'child',
                        'url' => ['/lk/desktop'],
                    ],
                    [
                        'label' => 'Курсы',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => '51 курс', 'icon' => '', 'url' => ['/user/user'],],
                            ['label' => '52 курс', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                            ['label' => '53 курс', 'icon' => '', 'url' => ['/user-admin/role/'],],
                            ['label' => '54 курс', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                            ['label' => '55 курс', 'icon' => '', 'url' => ['/user/ranks'],],
                        ],
                    ],
                    [
                        'label' => 'Кафедры',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => '51 кафедра', 'icon' => '', 'url' => ['/user/user'],],
                            ['label' => '52 кафедра', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                            ['label' => '53 кафедра', 'icon' => '', 'url' => ['/user-admin/role/'],],
                            ['label' => '54 кафедра', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                            ['label' => '55 кафедра', 'icon' => '', 'url' => ['/user/ranks'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
