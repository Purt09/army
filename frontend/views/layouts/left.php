
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'О факультете',
                        'icon' => 'star',
                        'url' => ['/'],
                    ],
                    [
                        'label' => 'Подразделения',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Управление', 'icon' => 'star', 'url' => ['/user/user'],],
                            ['label' => '51 кафедра', 'icon' => '', 'url' => ['/user/user'],],
                            ['label' => '52 кафедра', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                            ['label' => '53 кафедра', 'icon' => '', 'url' => ['/user-admin/role/'],],
                            ['label' => '54 кафедра', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                            ['label' => '55 кафедра', 'icon' => '', 'url' => ['/user/ranks'],],
                            ['label' => '51 курс', 'icon' => 'user', 'url' => ['/user/user'],],
                            ['label' => '52 курс', 'icon' => 'user', 'url' => ['/user-admin/assignment/'],],
                            ['label' => '53 курс', 'icon' => 'user', 'url' => ['/user-admin/role/'],],
                            ['label' => '54 курс', 'icon' => 'user', 'url' => ['/user-admin/permission/'],],
                            ['label' => '55 курс', 'icon' => 'user', 'url' => ['/user/ranks'],],
                        ],
                    ],
                    [
                        'label' => 'Расписание занятий',
                        'icon' => 'pencil',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Учебные группы', 'icon' => 'star', 'url' => ['/user/user'],],
                            ['label' => 'ППС', 'icon' => '', 'url' => ['/user/user'],],
                            ['label' => 'Сводное по кафедрам', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                        ],
                    ],
                    [
                        'label' => 'Выпускники',
                        'icon' => 'child',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Все', 'icon' => 'user-secret', 'url' => ['/user/user'],],
                            ['label' => '51 кафедры', 'icon' => '', 'url' => ['/user/user'],],
                            ['label' => '52 кафедры', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                            ['label' => '53 кафедры', 'icon' => '', 'url' => ['/user-admin/role/'],],
                            ['label' => '54 кафедры', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                            ['label' => 'Известные', 'icon' => 'star', 'url' => ['/user/user'],],
                        ],
                    ],
                    [
                        'label' => 'Документы',
                        'icon' => 'file',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Подразделений', 'file' => 'user-secret', 'url' => ['/user/user'],],
                            ['label' => 'Факультета', 'file' => 'user-secret', 'url' => ['/user/user'],],
                        ],
                    ],
                    [
                        'label' => 'ВПР',
                        'icon' => 'star',
                        'url' => ['/'],
                    ],
                    [
                        'label' => 'Расход',
                        'icon' => 'star',
                        'url' => ['/'],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
