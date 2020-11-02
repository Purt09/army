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
            'label' => 'Расписание занятий',
            'icon' => 'pencil',
            'url' => '#',
            'items' => [
                ['label' => 'Учебные группы', 'icon' => 'star', 'url' => ['/list-lessons/cadet'],],
                ['label' => 'Сводное по кафедрам', 'icon' => '', 'url' => ['/list-lessons/common'],],
            ],
        ],
        [
            'label' => 'Служба войск',
            'icon' => 'star',
            'url' => ['/site/army'],
        ],
        [
            'label' => 'ВПР',
            'icon' => 'star',
            'url' => ['/department/common/immortal-regiment-view'],
        ],
        [
            'label' => 'Спортивная работа',
            'icon' => 'trophy',
            'url' => ['/sport/index'],
        ],
        [
            'label' => 'Документы',
            'icon' => 'file',
            'url' => '#',
            'items' => [
                ['label' => 'Факультета', 'icon' => 'file', 'url' => ['/elfinder/manager'], 'itemOptions' => ['target' => '_blank']],
                ['label' => 'Подразделений', 'icon' => 'file', 'url' => ['elfinder/manager'],],
                ['label' => 'Приказания', 'icon' => 'file', 'url' => ['elfinder/manager'],],
            ],
        ],
        [
            'label' => 'Выпускники',
            'icon' => 'child',
            'url' => '#',
            'items' => [
                ['label' => 'Все', 'icon' => 'users', 'url' => ['/department/common/view-graduate'],],
                ['label' => '51 кафедры', 'icon' => '', 'url' => ['/department/five-one/view-graduate'],],
                ['label' => '52 кафедры', 'icon' => '', 'url' => ['/department/five-two/view-graduate'],],
                ['label' => '53 кафедры', 'icon' => '', 'url' => ['/department/five-free/view-graduate'],],
                ['label' => '55 кафедры', 'icon' => '', 'url' => ['/department/five-five/view-graduate'],],
                ['label' => 'Выдающиеся', 'icon' => 'star', 'url' => ['/department/common/view-graduate-stars'],],
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
