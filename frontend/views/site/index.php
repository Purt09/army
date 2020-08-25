<?php
/**
 * @var $this View
 * @var $content Page
 * @var $history Page
 * @var $news News[]
 */

use bupy7\pages\models\Page;
use yii\web\View;
use core\entities\News\News;

$this->title = '5 факультет';

?>


<?php $main =
    "
<section class=\"content\">
    <div class=\"col-sm-6 cafedra_block\">
        $content->content
    </div>
    <div class=\"col-sm-6\">
        <div style=\"text-align: center;\">
            <h2>КОМАНДОВАНИЕ ФАКУЛЬТЕТА</h2>
        </div>
        <div>
            <div class=\"col-sm-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-body box-profile\">

                        <div class=\"user_photo\">
                            <img class=\"user_photo img-responsive\" src=\"img/начфак.png\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">КОТЕНОК АНДРЕЙ <br> АНАТОЛЬЕВИЧ</h3>

                        <p class=\"text-muted text-center\">Начальник Факультета</p><br>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат военных наук</b>
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
                                        Родился 29 апреля 1972 года в городе Ленинграде. В Вооруженных Силах с 1989 года. В
                                1989 году поступил в Одесское Высшее артиллерийское командное ордена В.И.Ленина
                                училище имени М.В.Фрунзе. В 1993 году окончил Санкт-Петербургское Высшее
                                артиллерийское командное училище. В 2006 году окончил Михайловскую военную
                                артиллерийскую академию.
                                В войсках служил в должностях командира тяжелого гаубичного артиллерийского взвода,
                                командира тяжелой гаубичной артиллерийской батареи, командира пушечной
                                самоходно-артиллерийской батареи, начальника штаба – заместителя командира тяжелого
                                гаубичного артиллерийского дивизиона.
                                С 2006 года преподаватель 55 кафедры Военно-космической академии имени
                                А.Ф.Можайского. С 2009 года старший преподаватель 55 кафедры Военно-космической
                                академии имени А.Ф.Можайского. С 2010 года Кандидат военных наук. С 2011 года
                                заместитель начальника факультета – начальник учебной части. С 2018 - начальник 5
                                факультета.
                                Женат. Воспитывает 2 сыновей.
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
                            <img class=\"user_photo img-responsive\" src=\"img/замначфак.jpg\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">КАЛИНИЧЕНКО СЕРГЕЙ <br> ВЛАДИМИРОВИЧ</h3>

                        <p class=\"text-muted text-center\">Заместитель начальника факультета - <br>начальник учебной части</p>

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
                                         Родился 18 февраля 1972 года в селе Родниковка, Черкасская области. В Вооруженных Силах с 1989 года. В 1994 г. окончил ВИККА имени А.Ф.Можайского по специальности «Автоматизация технологических процессов и производств». В период с 1994 г. по 2005 г. проходил службу на командных должностях частях и ВКА имени А.Ф.Можайского. С 2005 года преподаватель 27 кафедры Военно-космической академии имени А.Ф.Можайского. С 2011 года старший преподаватель 63 кафедры Военно-космической академии имени А.Ф.Можайского. С 2014 г – заместитель начальника 27 кафедры ВКА имени А.Ф. Можайского В 2013 г. защитил кандидатскую диссертацию, в 2018 г. присвоено ученое звание – доцент. С января 2020 г. исполняет обязанности заместитель начальника факультета – начальник учебной части факультета Сбора и обработки информации ВКА имени А.Ф.Можайского.
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
</section>
"; ?>

<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget(['news' => $news]),
        ],
        [
            'label' => 'Главная',
            'content' => $main,
        ],
        [
            'label' => 'История факультета',
            'content' => $history->content,
        ],
    ],
]);
?>
