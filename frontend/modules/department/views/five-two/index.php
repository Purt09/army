<?php
/**
 * @var $this \yii\web\View
 * @var $content Page
 * @var $history Page
 * @var $news NewsPublications
 */

use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;

$this->title = 'Кафедра 52';

?>

<?php $main = "<section class=\"content\">
    <div class=\"col - sm - 6\" style=\" margin - top: 60px; background - color: white;border - radius: 20px;
        padding: 15px;box - shadow: 0 0 5px rgba(0, 0, 0, 0.1);\">
    $content->content
    </div>
    <div class=\"col-sm-6\">
        <div style=\"text-align: center;\">
            <h2>КОМАНДОВАНИЕ КАФЕДРЫ</h2>
        </div>
        <div>
            <div class=\"col-sm-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-body box-profile\">

                        <div class=\"user_photo\">
                            <img class=\"user_photo img-responsive\" src=\"/img/нк52.jpg\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">Готюр Иван <br> Алексеевич</h3>

                        <p class=\"text-muted text-center\">Начальник кафедры</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Доктор технических наук</b>
                            </li>
                            <li class=\"list-group-item\">
                                <b>Доцент</b>
                            </li>
                            <li class=\"list-group-item\">
                                <b>Полковник</b>
                            </li>
                        </ul>

                        <button type=\"button\" class=\"btn btn-primary btn-block\" data-toggle=\"modal\"
                                data-target=\"#staticBackdrop\">
                            Узнать больше
                        </button>

                        <div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\"
                             tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"staticBackdropLabel\"
                             aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Биография</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        Родился 20 апреля 1980 года. В 2002 году закончил ВКА имени
                                        А.Ф.Можайского по специальности «Геофизическое и гидрометеорологическое
                                        обеспечение войск (сил)». В период с 2002 по 2003 год проходил службу в
                                        в/ч 44326 на должности инженера метеорологической группы. В 2003 году
                                        поступил в очную адъюнктуру ВКА имени А.Ф.Можайского. После окончания
                                        адъюнктуры назначен на должность преподавателя 52 кафедры. В 2014 году
                                        защитил докторскую диссертацию, после окончания докторантуры назначен на
                                        должность начальника 52 кафедры. В 2017 году присвоено ученое звание
                                        доцент.


                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                            Закрыть
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-body box-profile\">
                        <div class=\"user_photo\">
                            <img class=\"user_photo img-responsive\" src=\"/img/знк52.jpg\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">Борсиов Алексей Анатольевич</h3>

                        <p class=\"text-muted text-center\">Заместитель начальника кафедры</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат технических наук</b>
                            </li>
                            <li class=\"list-group-item\">
                                <b>Преподаватель</b>
                            </li>
                            <li class=\"list-group-item\">
                                <b>Полковник</b>
                            </li>
                        </ul>
                        <button type=\"button\" class=\"btn btn-primary btn-block\" data-toggle=\"modal\"
                                data-target=\"#staticBackdrop2\">
                            Узнать больше
                        </button>
                        <div class=\"modal fade\" id=\"staticBackdrop2\" data-backdrop=\"static\"
                             data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"staticBackdrop2Label\">Биография</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        Родился 16 января 1972 года. В 1995 году закончил ВИКА имени
                                        А.Ф.Можайского по специальности «Геофизическое обеспечение». В
                                        период с 1995 по 1999 год проходил службу в в/ч 13973 на
                                        должности инженер отдела. В 1999 году поступил в очную
                                        адъюнктуру ВКА имени А.Ф.Можайского. После окончания адъюнктуры
                                        назначен на должность преподавателя 52 кафедры. В 2011 году
                                        присвоено ученое звание доцент. С ноября 2011 года исполняет
                                        обязанности заместителя начальника кафедры.
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\"
                                                data-dismiss=\"modal\">Закрыть
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>" ?>

<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Главная 52 кафедры',
            'content' => $main,
        ],
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget(['news' => $news]),
        ],
        [
            'label' => 'История кафедры',
            'content' => $history->content,
        ],
    ],
]);
?>
