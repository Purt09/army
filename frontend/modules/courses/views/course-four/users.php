<?php
/**
 * @var $this \yii\web\View
 * @var $users \core\entities\User\User[]
 */

$this->title = 'Управление 51 курсом';

use yii\helpers\Url;

?>

<a href="<?= Url::to('course-five/create-cadet') ?>" class="btn btn-success">
    Добавить курсанта
</a>
<br><br>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Список курсантов курса</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody><tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Группа</th>
                    <th>Действия</th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user->base->firstname ?></td>
                        <td><?= $user->base->lastname ?></td>
                        <td><?= $user->base->sirname ?></td>
                        <td><span class="label label-success">??</span></td>
                        <td>
                            <i class="fa fa-remove"></i>
                            <i class="fa fa-edit"></i>
                            <a href="/profile/<?= $user->id ?>"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody></table>
        </div>
    </div>
    <!-- /.box-body -->
</div>