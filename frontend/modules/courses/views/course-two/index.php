<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Управление 52 курсом';

use yii\helpers\Url;

?>

<a href="<?= Url::to('course-two/create-cadet') ?>" class="btn btn-success">
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
                <tr>
                    <td>Александр</td>
                    <td>Пуртов</td>
                    <td>Николаевич</td>
                    <td><span class="label label-success">565</span></td>
                    <td>
                        <i class="fa fa-remove"></i>
                        <i class="fa fa-edit"></i>
                    </td>
                </tr>
                </tbody></table>
        </div>
    </div>
    <!-- /.box-body -->
</div>