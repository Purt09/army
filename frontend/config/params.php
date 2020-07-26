<?php
return [
    'adminEmail' => 'admin@example.com',
    'left_menu' =>  [
        ['label' => 'Главное', 'options' => ['class' => 'header']],
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
                ['label' => 'Управление', 'icon' => 'star', 'url' => ['/manager/'],],
                ['label' => '51 кафедра', 'icon' => '', 'url' => ['/department/five-one'],],
                ['label' => '52 кафедра', 'icon' => '', 'url' => ['/department/five-two'],],
                ['label' => '53 кафедра', 'icon' => '', 'url' => ['/department/five-free'],],
                ['label' => '55 кафедра', 'icon' => '', 'url' => ['/department/five-five'],],
                ['label' => '51 курс', 'icon' => 'user', 'url' => ['/courses/course-one'],],
                ['label' => '52 курс', 'icon' => 'user', 'url' => ['/courses/course-two'],],
                ['label' => '53 курс', 'icon' => 'user', 'url' => ['/courses/course-free'],],
                ['label' => '54 курс', 'icon' => 'user', 'url' => ['/courses/course-four'],],
                ['label' => '55 курс', 'icon' => 'user', 'url' => ['/courses/course-five'],],
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
];
