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
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
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
                            ['label' => 'Управление правами', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                            ['label' => 'Роли', 'icon' => '', 'url' => ['/user-admin/role/'],],
                            ['label' => 'Права дотсупа', 'icon' => '', 'url' => ['/user-admin/permission/'],],
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
