<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            $items = [
                ['label' => 'ЛИЧНЫЙ КАБИНЕТ', 'options' => ['class' => 'header']],
                [
                    'label' => 'Рабочий стол',
                    'icon' => 'desktop',
                    'url' => ['desktop/index'],
                ],
                [
                    'label' => 'Редактировать профиль',
                    'icon' => 'wrench',
                    'url' => ['profile/setting', 'id' => Yii::$app->user->id],
                ],
                [
                    'label' => 'Посмотреть профиль',
                    'icon' => 'eye',
                    'url' => ['profile/view', 'id' => Yii::$app->user->id],
                ],
            ];
            $items = array_merge($items, Yii::$app->params['left_menu']);
            ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => $items,
            ]
        ) ?>
    </section>
</aside>