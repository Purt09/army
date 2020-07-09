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
                    [
                        'label' => 'Пользователи',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/user/user'],],
                            ['label' => 'Управление правами', 'icon' => '', 'url' => ['/user-admin/assignment/'],],
                            ['label' => 'Роли', 'icon' => '', 'url' => ['/user-admin/role/'],],
                            ['label' => 'Права дотсупа', 'icon' => '', 'url' => ['/user-admin/permission/'],],
                            ['label' => 'Звания', 'icon' => '', 'url' => ['/user/ranks'],],
                            ['label' => 'Статусы', 'icon' => '', 'url' => ['/user/state'],],
                        ],
                    ],
                    ['label' => 'Menu Yii12', 'options' => ['class' => 'header']],
                ],
            ]
        ) ?>

    </section>

</aside>
