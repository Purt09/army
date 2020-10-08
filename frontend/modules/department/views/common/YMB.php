<?php
/**
 * @var $this \yii\web\View
 */

$this->title = " Учебно-материальная база";

?>

<?php
$one = '<img src="/img/ymb/5.png" class="image" alt="1">';
$two = '<img src="/img/ymb/51.png" class="image" alt="2">';
$free = 'Не заполнено';
    $four = 'Не заполнено';
?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Факультет',
            'content' => $one,
        ],
        [
            'label' => '51 кафедра',
            'content' => $two,
        ],
        [
            'label' => '53 кафедра',
            'content' => $free,
        ],
        [
            'label' => '52 кафедра',
            'content' => $four,
        ],
    ],
]);
?>