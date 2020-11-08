<?php
/**
 *
 * @var $staff \core\entities\User\TblStaff
 * @var $semester \core\entities\Education\Semester
 */

?>

<table class="table table-hover">
    <tbody>
    <tr>
        <th style="width: 20px">Оценка</th>
        <th>Дисциплина</th>
        <th>Действия</th>
    </tr>
    <?php if (isset($semester->evaluations)): ?>
        <?php foreach ($semester->evaluations as $evaluation): ?>
            <?php if ($evaluation->user_id == $staff->user->id): ?>
                <tr>
                    <td><?= $evaluation->result ?></td>
                    <td><?= $evaluation->subject->name ?></td>
                    <td></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td>Оценки еще не заполнены</td>
        </tr>
    <?php endif; ?>
    <tr>
        <td><a href="<?= \yii\helpers\Url::to('create?id=' . $staff->id . '&semester_id=' . $semester->id) ?>"
               class="btn btn-success">Добавить оценку в
                семестр "<?= $semester->title ?> "</a></td>
    </tr>
    </tbody>
</table>