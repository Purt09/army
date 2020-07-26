<?php
/**
 * @var $this View
 * @var $news NewsPublications[]
 * @var $content Page
 * @var $history Page
 */

use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;
use yii\web\View;

$this->title = 'Кафедра 55';

?>
<?php
$main = "
<section class=\"content\">
    <div class=\"col-sm-6 cafedra_block\">
        <div class=\"col-sm-9 cafedra_title\">
            <h2>
                 Кафедра космического радиоэлектронного контроля
            </h2>
            <span>
            Кафедра образована 1 декабря 1977 года и начинает свою историю с создания кафедры Радиотехнических средств контроля

            </span>
        </div>
        <div class=\"col-sm-3 caferdra_emblema\">
            <img src=\"/img/эмб53.jpg\" alt=\"Эмблема\" height=\"160px\">
        </div>
        <div class=\"col-sm-12 cafedra_prev\">
Кафедра осуществляет подготовку специалистов с высшим военно-специальным образованием (специалитет) по специальности:<br> 11.05.02 – Специальные радиотехнические системы, а также осуществляет подготовку научно-педогагических кадров по одной научной специальности.<br> Офицер- выпускник кафедры предназначен для прохождения службы в войско-вых частях ГУ ГШ ВС РФ.
       </div>
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

                        <h3 class=\"profile-username text-center\">АЛЁХИН СЕРГЕЙ ГРИГОРЬЕВИЧ</h3>

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

                        <h3 class=\"profile-username text-center\">КАЛМЫЧКОВ ИГОРЬ ЕВГЕНЬЕВИЧ</h3>

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
</section>";
?>
<?php
$news ="
    <div>
    <div class=\"col-sm-9\">
            <div class=\"row\">
            <div class=\"col-md-4 blog_box\">
                <a href=\"#\" class=\"mask\">
                    <img src=\"https://s0.rbk.ru/v6_top_pics/media/img/5/97/755795279287975.jpeg\" alt=\"IV ВСЕРОССИЙСКАЯ НАУЧНАЯ КОНФЕРЕНЦИЯ «ЭКОЛОГИЯ И КОСМОС» ИМ. АКАДЕМИКА К.Я. КОНДРАТЬЕВА»\" class=\"img-responsive zoom-img\">
                </a>
            </div>
            <div class=\"col-md-8\">
                <h3 style=\"margin-top: 0px\"><a href=\"single.html\">IV ВСЕРОССИЙСКАЯ НАУЧНАЯ КОНФЕРЕНЦИЯ «ЭКОЛОГИЯ И КОСМОС» ИМ. АКАДЕМИКА К.Я. КОНДРАТЬЕВА»</a></h3>
                <div class=\"links\">
                    <ul>
                        <li><i class=\"fa blog-icon fa-calendar\"> </i><span>23 июля 2020 г.</span></li>
                    </ul>
                </div>
                <p>В период с 16 по 18 сентября 2020 года Военно-космическая академия имени А.Ф.Можайского, г. Санкт-Петербург, проводит IV Всероссийскую научную конференцию «Экология и космос» имени академика К.Я. Кондратьева», посвященную 100-летию со дня его рождения.

На конференции органи...</p>
                <a href=\"#\" class=\"btn1 btn-8 btn-8c\">Читать</a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <hr>
    </div>
    <div class=\"col-md-3\">
    <ul class=\"menu\">
        <li>Дни рождения:</li>
        <li><span>П-к Карин А.В.</span><em>26 июля 2020</em></li>
        <li><span>П-к Карин А.В.</span><em>28 июля 2020</em></li>
        <li><span>П-к Карин А.В.</span><em>30 июля 2020</em></li>
    </ul>
</div>
    </div>
    ";
$history = "<section class=\"content\">
	<div class=\"col-sm-9 head-text\">
		<h2>История 55 кафедры</h2>
	</div>
		<div class=\"col-sm-3 head-text\">
	   <img src=\"/img/эмб55.jpg\" alt=\"Эмблема\" height=\"160px\">
	</div>

	<div class=\"col-sm-12 text_block\">
Кафедра образована 1 декабря 1977 года и начинает свою историю с создания кафедры Радиотехнических средств контроля. Первым начальником кафедры стал Заслуженный деятель науки и техники РСФСР доктор технических наук профессор полковник-инженер Логачев Евгений Георгиевич. В 80 - 90-е годы кафедра занималась подготовкой специалистов по космическому радиотехническому контролю. Кроме того, в это время окончательно сложилась научная школа, в рамках которой подготовлено 4 доктора и 39 кандидатов технических наук. В научной работы под руководством Логачева Е.Г. заложены теоретические основы космического радиоэлектронного контроля. В этот период огромный вклад в подготовку выпускников и развитие научной школы внесли Кисель В.В., Голубев В.А., Замарин А.И., Сайбель А.Г., Малибашев А.Б. Особое место в истории кафедры занимает период (2000 – 2010 г.г.), в котором под руководством кандидата технических наук доцента полковника Воронина А.В. разработаны новые учебные дисциплины, оперяющиеся на современные достижения в области радиотехники. Несомненно, преподавание таких дисциплин потребовало переоснащения кафедры новыми техническими средствами на основе современных приемных комплексов и компьютерной техники. За более чем сорокалетнюю историю на кафедре подготовлено свыше 500 высококлассных специалистов космического радиоэлектронного контроля (КРЭК). 
</div>


<div class=\"col-sm-12 text_block\">
    <div class=\"col-sm-4 text_block\">
    <img src=\"/img/155.png\" alt=\"\" height=\"300\" width=\"300\">
</div>
    <div class=\"col-sm-4 text_block\">
    <img src=\"/img/255.png\" alt=\"\" height=\"300\" width=\"300\">
</div>
    <div class=\"col-sm-4 text_block\">
    <img src=\"/img/355.png\" alt=\"\" height=\"300\" width=\"300\">
</div>



	</div>";
?>

<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Главная 55 кафедры',
            'content' => $main,
        ],
        [
            'label' => 'Новости',
            'content' => $news,
        ],
        [
            'label' => 'История кафедры',
            'content' => $history,
        ],
    ],
]);
?>

