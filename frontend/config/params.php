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
                ['label' => 'Управление', 'icon' => 'star', 'url' => ['/department/common'],],
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
            'label' => 'Служба войск',
            'icon' => 'star',
            'url' => '#',
            'items' => [
                ['label' => 'Командование', 'icon' => 'star', 'url' => ['/site/army'],],
                ['label' => 'Рапорт ДФ', 'icon' => '', 'url' => ['/moodle/mod/wiki/view.php?id=1351'],],
                ['label' => 'Расход ДФ', 'icon' => '', 'url' => ['/moodle/mod/wiki/view.php?id=1511'],],
                ['label' => 'Оценки ДФ за сутки', 'icon' => '', 'url' => ['/moodle/mod/wiki/view.php?id=1543'],],
            ],
        ],
        [
            'label' => 'Расписание занятий',
            'icon' => 'pencil',
            'url' => '#',
            'items' => [
                ['label' => 'Учебные группы', 'icon' => 'star', 'url' => ['/list-lessons/cadet'],],
                ['label' => 'Сводное по кафедрам', 'icon' => '', 'url' => ['/list-lessons/common'],],
            ],
        ],
        [
            'label' => 'Задачи и приказания',
            'icon' => 'star',
            'url' => ['/tasks'],
        ],
        [
            'label' => 'Документы',
            'icon' => 'file',
            'url' => '#',
            'items' => [
                ['label' => 'Управление', 'icon' => 'file', 'url' => ['/moodle/mod/folder/view.php?id=1550'],],
                ['label' => '51 кафедра', 'icon' => 'file', 'url' => ['/moodle/mod/folder/view.php?id=1546'],],
                ['label' => '52 кафедра', 'icon' => 'file', 'url' => ['/moodle/mod/folder/view.php?id=1547'],],
                ['label' => '53 кафедра', 'icon' => 'file', 'url' => ['/moodle/mod/folder/view.php?id=1548'],],
                ['label' => '55 кафедра', 'icon' => 'file', 'url' => ['/moodle/mod/folder/view.php?id=1549'],],
            ],
        ],
        [
            'label' => 'ВПР',
            'icon' => 'star',
            'url' => ['/'],
            'items' => [
                ['label' => 'Бессмертный полк', 'icon' => 'user-secret', 'url' => ['/department/common/regiment'],],
                ['label' => 'Книги', 'icon' => 'book', 'url' => ['/'],],
            ],
        ],
        [
            'label' => 'Спортивная работа',
            'icon' => 'trophy',
            'url' => ['/education/sport/view'],
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
