<?php
/**
 * @var $this \yii\web\View
 * @var $content Page
 * @var $history Page
 * @var $news NewsPublications
 */

use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;

$this->title = 'Кафедра 51';

?>

<?php $main = "<section class=\"content\">
    <div class=\"col-sm-6\" style=\" margin-top: 60px; background-color: white;border-radius: 20px;
        padding: 15px;box-shadow: 0 0 5px rgba(0,0,0,0.1);\">
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
                            <img class=\"user_photo img-responsive\" src=\"/img/нк51.jpg\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">ГРИГОРЬЕВ АНДРЕЙ НИКОЛАЕВИЧ</h3>

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
                                         Родился 10 июля 1982 г. В 2004 г. закончил с отличием ВКА имени А.Ф.Можайского по специальности «Оптико-электронные приборы и системы». В период с 2004 г. по 2005 г. проходил службу в войсковой части 96434 на должно-сти инженера отделения обработки информации.
В 2005 году поступил в очную адъюнктуру ВКА имени А.Ф.Можайского. По-сле окончания адъюнктуры назначен на должность преподавателя 51 кафедры. В 2016 году защитил докторскую диссертацию, после окончания докторантуры назначен на должность доцента 51 кафедры. В 2019 г. присвоено ученое звание до-цент. С июня 2020 г. исполняет обязанности начальника кафедры.
Область профессиональных интересов – обработка геопространственных дан-ных дистанционного зондирования Земли с использованием технологий геоинфор-мационных систем, применение беспилотных авиационных систем для решения во-енно-прикладных задач, моделирование систем дистанционного зондирования Земли и результатов их функционирования.

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
                            <img class=\"user_photo img-responsive\" src=\"/img/знк51.jpg\" alt=\"User profile picture\" id=\"foto_zn\" >
                        </div>

                        <h3 class=\"profile-username text-center\">ДУДИН ЕВГЕНИЙ АЛЕКСАНДРОВИЧ</h3>

                        <p class=\"text-muted text-center\">Заместитель начальника кафедры</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат технических наук</b>
                            </li>
                                                        <li class=\"list-group-item\">
                                <b>Доцент</b>
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
                                        Родился 21 ноября 1982 г. В 2004 г. закончил ВКА имени А.Ф.Можайского по специальности «Оптико-электронные приборы и системы». В период с 2004 г. по 2006 г. проходил службу в войсковой части 96434 на должности инженера отделения обработки информации.
В 2006 году поступил в очную адъюнктуру ВКА имени А.Ф.Можайского. По-сле окончания адъюнктуры назначен на должность преподавателя 51 кафедры. В 2015 г. присвоено ученое звание доцент. С января 2018 г. исполняет обязанности заместителя начальника кафедры.
Область профессиональных интересов – обработка данных космической съем-ки земной поверхности с использованием специализированных программных средств, применение данных дистанционного зондирования Земли и геоинформаци-онных технологий при решении военно-прикладных задач информационного обес-печения войск.


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
            'label' => 'Главная 51 кафедры',
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
