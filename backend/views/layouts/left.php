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
                    ['label' => 'Файлы', 'icon' => 'file', 'url' => ['/common/file'],],
                    [
                        'label' => 'Пользователи',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/user/user'],],
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
                            ['label' => 'Должности', 'icon' => '', 'url' => ['/user/order-owner'],],
                            ['label' => 'Звания', 'icon' => '', 'url' => ['/user/tbl-military-rank'],],
                            ['label' => 'Приказы званий', 'icon' => '', 'url' => ['/user/tbl-staff-military-rank'],],
                        ],
                    ],
                    ['label' => 'Menu Yii12', 'options' => ['class' => 'header']],
                ],
            ]
        ) ?>

    </section>

</aside>
