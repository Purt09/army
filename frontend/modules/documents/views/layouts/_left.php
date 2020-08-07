<aside class="main-sidebar">
    <section class="sidebar">
            <?php
            $items = Yii::$app->params['left_menu'];
            ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => $items,
            ]
        ) ?>
    </section>
</aside>