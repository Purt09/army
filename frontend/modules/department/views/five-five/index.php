<?php
/**
 * @var $this \yii\web\View
 * @var $content Page
 * @var $history Page
 * @var $news NewsPublications
 */

use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;

$this->title = 'Кафедра 55';

?>

<?php $main = "<section class=\"content\">
    <div class=\"col-sm-6\" style=\" margin-top: 60px; background-color: white;border-radius: 20px;
        padding: 15px;box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);\">
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
                            <img class=\"user_photo img-responsive\" src=\"/img/нач55каф.jpg\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">АЛЁХИН СЕРГЕЙ <br> ГРИГОРЬЕВИЧ</h3>

                        <p class=\"text-muted text-center\">Начальник кафедры</p>

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
                                         Родился 20 марта 1980 года в г. Волгореченск, Костромской области. В 2002 году закончил Военно-инженерную космическую академию имени А.Ф. Можайского по специальности «Метеорология».
С 2002 по 2005 год проходил службу в войсках на должностях инженера метеорологической группы, затем инженера метеорологического бюро (в.ч. 13641, в.ч. 25522, г. Ключи-1, Камчатская обл.).
В … к.т.н.
В 2016 году присвоено ученое звание доцента по специальности 20.02.09 «Гидрометеорологическое и геодезическое обеспечение боевых действий войск».
В 2020 закончил докторантуру ВКА имени А.Ф.Можайского. 
С мая 2020 г. исполняет обязанности начальника кафедры. 
Область профессиональных интересов - Специалист в области информационного обеспечения высокоточного оружия, гидрометеорологической разведки. 



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
                            <img class=\"user_photo img-responsive\" src=\"/img/знк55.jpg\" alt=\"User profile picture\" id=\"foto_zn\" >
                        </div>

                        <h3 class=\"profile-username text-center\">КАЛМЫЧКОВ ИГОРЬ <br> ЕВГЕНЬЕВИЧ</h3>

                        <p class=\"text-muted text-center\">Заместитель начальника кафедры</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат технических наук</b>
                            </li>
                                                        <li class=\"list-group-item\">
                                <b>Преподаватель</b>
                            </li>
                            <li class=\"list-group-item\">
                                <b>Подполковник</b>
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
                                        Родился 11августа 1979 г., г. Сосногорск, республика Коми. В 2001 г. закончил Череповецкий военный инженерный институт радиоэлектроники.  С 2001 г. по 2008 г. проходил службу в частях на различных должностях (командир взвода войсковой части 41480, инженер отдела войсковой части 41480, помощник начальника отдела войсковой части 25137, инженер технической части войсковой части 25137, заместитель начальника технической части войсковой части 25137). 
В  2011 году закончил адъюнктуру при Военной академии МО РФ (филиал г. Череповец, Вологодской области). 
С февраля 2020 г. исполняет обязанности заместителя начальника кафедры.  
Область профессиональных интересов – совершенствование радиотехнических систем сбора и обработки информации

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
            'label' => 'Главная 55 кафедры',
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
