<?php
/**
 * @var $this View
 */

use yii\web\View;

$this->title = "Общий рейтинг курсантов";

?>

<?=
\yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => '51 курс',
            'content' => 1,
        ],
        [
            'label' => '52 курс',
            'content' => 2,
        ],
        [
            'label' => '53 курс',
            'content' => 3,
        ],
        [
            'label' => '54 курс',
            'content' => 4,
        ],
        [
            'label' => '55 курс',
            'content' => 5,
        ],
    ],
]);
