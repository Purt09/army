<aside class="main-sidebar">
    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Страницы', 'icon' => 'list', 'url' => ['/pages/manager/index'],],
                    ['label' => 'Новости', 'icon' => 'list', 'url' => ['/news/index'],],
                    ['label' => 'Файлы', 'icon' => 'file', 'url' => ['/common/files'],],
                    [
                        'label' => 'Общие настройки',
                        'icon' => 'cog',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Страны', 'icon' => '', 'url' => ['/common/country'],],
                            ['label' => 'Города', 'icon' => '', 'url' => ['/common/city'],],
                        ],
                    ],
                    [
                        'label' => 'Служба войск',
                        'icon' => 'user-secret',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Планы',
                                'icon' => 'user-secret',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Все планы', 'icon' => '', 'url' => ['/army/plan'],],
                                    ['label' => 'Категори планов', 'icon' => '', 'url' => ['/army/plan-category'],],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Образование',
                        'icon' => 'graduation-cap',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Семестры', 'icon' => '', 'url' => ['/education/semester'],],
                            ['label' => 'Расписание', 'icon' => '', 'url' => ['/education/timetable'],],
                            [
                                'label' => 'Конференции',
                                'icon' => 'graduation-cap',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Конференции', 'icon' => '', 'url' => ['/user/science/science-conference'],],
                                    ['label' => 'Организаторы', 'icon' => '', 'url' => ['/user/science/conference-owner'],],
                                    ['label' => 'Уровень конференции', 'icon' => '', 'url' => ['/user/science/conference-rank'],],
                                    ['label' => 'Тип участия', 'icon' => '', 'url' => ['/user/science/conference-result-type'],],
                                ],
                            ],
                        ],
                    ],

                    [
                        'label' => 'Пользователи',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/user/user'],],
                            ['label' => 'Подразделения', 'icon' => 'user', 'url' => ['/user/mil-unit'],],
                            ['label' => 'Служебные задания', 'icon' => 'bars', 'url' => ['/user/tbl-staff-job-assignment'],],
                            [
                                'label' => 'Роли',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Управление правами', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                                    ['label' => 'Роли', 'icon' => '', 'url' => ['/user-admin/role/'],],
                                    ['label' => 'Права дотсупа', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                                ],
                            ],
                            [
                                'label' => 'ВПР',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Виды поощерений', 'icon' => '', 'url' => ['/user/vpr/promotion-type/'],],
                                    ['label' => 'Виды взысканий', 'icon' => '', 'url' => ['/user/vpr/penalty-type/'],],
                                    ['label' => 'Все поощерения', 'icon' => '', 'url' => ['/user/vpr/staff-promotion/'],],
                                    ['label' => 'Все взысканий', 'icon' => '', 'url' => ['/user/vpr/staff-penalty/'],],
                                ],
                            ],
                            [
                                'label' => 'Звания',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Звания', 'icon' => '', 'url' => ['/user/rank/tbl-military-rank/'],],
                                    ['label' => 'Приказы званий', 'icon' => '', 'url' => ['/user/rank/tbl-staff-military-rank'],],
                                ],
                            ],
                            [
                                'label' => 'Отпуска',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Виды отпусков', 'icon' => '', 'url' => ['/user/vacation/vacation-type'],],
                                    ['label' => 'Все отпуска', 'icon' => '', 'url' => ['/user/vacation/staff-vacation'],],
                                ],
                            ],
                            [
                                'label' => 'Наряды',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Типы нарядов', 'icon' => '', 'url' => ['/user/duty/duty-type'],],
                                    ['label' => 'Все наряды', 'icon' => '', 'url' => ['/user/duty/staff-duty'],],
                                    ['label' => 'Командировки', 'icon' => '', 'url' => ['/user/duty/staff-duty-journey'],],
                                ],
                            ],
                            [
                                'label' => 'Должности',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Должности', 'icon' => '', 'url' => ['/user/position/mil-position'],],
                                    ['label' => 'Приказы должностей', 'icon' => '', 'url' => ['/user/position/staff-mil-position'],],
                                    ['label' => 'Должностные лица', 'icon' => '', 'url' => ['/user/order-owner'],],
                                ],
                            ],
                            [
                                'label' => 'Образование',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Образование', 'icon' => '', 'url' => ['/user/education/education/'],],
                                    ['label' => 'Уровни', 'icon' => '', 'url' => ['/user/education/education-level'],],
                                    ['label' => 'Университеты', 'icon' => '', 'url' => ['/user/education/univercity'],],
                                ],
                            ],
                            [
                                'label' => 'Наука',
                                'icon' => 'graduation-cap',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Ученые степени', 'icon' => '', 'url' => ['/user/science/science-gradiate'],],
                                    ['label' => 'Ученые степени все', 'icon' => '', 'url' => ['/user/science/staff-science-graduate'],],
                                    ['label' => 'Ученые звания', 'icon' => '', 'url' => ['/user/science/science-rank'],],
                                    ['label' => 'Ученые звания все', 'icon' => '', 'url' => ['/user/science/staff-science-rank'],],
                                    ['label' => 'Конференции пользователей', 'icon' => '', 'url' => ['/user/science/staff-science-conference'],],
                                    [
                                        'label' => 'Публикации',
                                        'icon' => 'graduation-cap',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Все публикации', 'icon' => '', 'url' => ['/user/science/publication/staff-publication'],],
                                            ['label' => 'Журналы', 'icon' => '', 'url' => ['/user/science/publication/science-magazine'],],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    ['label' => 'Menu Yii12', 'options' => ['class' => 'header']],
                ],
            ]
        ) ?>

    </section>

</aside>
