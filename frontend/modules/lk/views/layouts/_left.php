<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            use core\helpers\user\RbacHelpers;
            $items = [
                ['label' => 'ЛИЧНЫЙ КАБИНЕТ', 'options' => ['class' => 'header']],
                [
                    'label' => 'Редактировать профиль',
                    'icon' => 'wrench',
                    'url' => ['profile/setting', 'id' => Yii::$app->request->get('id')],
                ],
                [
                    'label' => 'Посмотреть профиль',
                    'icon' => 'eye',
                    'url' => ['profile/view', 'id' => Yii::$app->request->get('id')],
                ],
                [
                    'label' => 'Служебная карточка',
                    'icon' => 'star',
                    'url' => ['vpr/index', 'id' => Yii::$app->request->get('id')],
                ],
            ];
            $items = array_merge(Yii::$app->params['left_menu'], $items);
            $user = \core\entities\User\User::getByBaseId(Yii::$app->request->get('id'));
            if(RbacHelpers::checkRoleUser(RbacHelpers::$CADET, $user->id)){
                $menu = [
                    [
                        'label' => 'Зачетная книжка',
                        'icon' => 'book',
                        'url' => ['study/index', 'id' => Yii::$app->request->get('id')],
                    ],
                ];
                $items = array_merge($items, $menu);
            }
            ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => $items,
            ]
        ) ?>
    </section>
</aside>