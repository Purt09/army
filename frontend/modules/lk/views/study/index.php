<?php
/**
 * @var $this \yii\web\View
 * @var $staff \core\entities\User\TblStaff
 * @var $semesters \core\entities\Education\Semester[]
 */

$this->title = 'Цифровая зачетная книжка у ' . $staff->fio;

$items = [];
foreach ($semesters as $semester) {
    array_push($items, [
        'label' => $semester->title,
        'content' => \frontend\modules\lk\widget\RecordBookWidget::widget([
            'semester' => $semester,
            'staff' => $staff
        ]),
    ]);
}
?>

<?= \yii\bootstrap\Tabs::widget([
    'items' => $items,
]);
?>