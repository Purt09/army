<?php
return [
    'adminEmail' => 'admin@example.com',
    'left_menu' =>  [
        ['label' => 'Главная', 'options' => ['class' => 'header']],
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
            'label' => 'ВПР',
            'icon' => 'star',
            'url' => ['/'],
            'items' => [
                ['label' => 'Поощерения', 'icon' => 'star', 'url' => ['/user/user'],],
                ['label' => 'Безопасность', 'icon' => 'user-secret', 'url' => ['/user/user'],],
            ],
        ],
        [
            'label' => 'Спортивная работа',
            'icon' => 'trophy',
            'url' => ['/'],
        ],
        [
            'label' => 'Боевая готовность',
            'icon' => 'star',
            'url' => ['/'],
        ],
        [
            'label' => 'УМБ',
            'icon' => 'star',
            'url' => ['/'],
        ],
        [
            'label' => 'Кадровая работа',
            'icon' => 'pencil',
            'url' => '#',
            'items' => [
                ['label' => 'ШДК', 'icon' => 'star', 'url' => ['/user/user'],],
                ['label' => 'Списки вне казармы', 'icon' => 'list', 'url' => ['/user/user'],],
            ],
        ],
        [
            'label' => 'Документы',
            'icon' => 'file',
            'url' => '#',
            'items' => [
                ['label' => 'Подразделений', 'icon' => 'file', 'url' => ['/user/user'],],
                ['label' => 'Факультета', 'icon' => 'file', 'url' => ['/user/user'],],
                ['label' => 'Виды деятельности', 'icon' => 'file', 'url' => ['/user/user'],],
                ['label' => 'Приказания', 'icon' => 'file', 'url' => ['/user/user'],],
            ],
        ],
        [
            'label' => 'Выпускники',
            'icon' => 'child',
            'url' => '#',
            'items' => [
                ['label' => 'Все', 'icon' => 'users', 'url' => ['/user/user'],],
                ['label' => '51 кафедры', 'icon' => '', 'url' => ['/user/user'],],
                ['label' => '52 кафедры', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                ['label' => '53 кафедры', 'icon' => '', 'url' => ['/user-admin/role/'],],
                ['label' => '55 кафедры', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                ['label' => 'Достижения', 'icon' => 'star', 'url' => ['/user/user'],],
            ],
        ],
        [
            'label' => 'Контакты',
            'icon' => 'star',
            'url' => ['/'],
            'items' => [
                ['label' => 'Список абонентов академии', 'icon' => 'user-secret', 'url' => ['/site/contact-list'],],
                ['label' => 'Контакты факультета', 'icon' => 'phone', 'url' => ['/site/contact'],],
                ['label' => 'Видеокамеры', 'icon' => 'video-camera', 'url' => ['/site/video-camera'],],
            ],
        ],
    ],
];
