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
<?php $main =
"
 <div class=\"row\">

 <div id=\"carousel-example-generic\" class=\"carousel slide carousel-fade carousel-animate carousel-bg\" data-ride=\"carousel\">
 <!-- Indicators -->
 <ol class=\"carousel-indicators\">
 <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
 <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
 <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
 </ol>
 <!-- Wrapper for slides -->
 <div class=\"carousel-inner\" role=\"listbox\">
 <div class=\"item active\" style=\"background-image: url(img/карусель1.png)\">
 <div class=\"carousel-caption\">
 <div class=\"hero\">
 <hgroup class=\"zoomInDown animated\">
 <h1 class=\"fadeInLeft animated\">Факультет сбора и обработки инфорации</h1>
 <h3 class=\"slideInRight animated\">Новости факульета</h3>
 </hgroup>
 <button class=\"btn btn-hero btn-lg bounceInUp animated\" role=\"button\">Читать</button>
 </div>
 </div>
 </div>
 <div class=\"item\" style=\"background-image: url(img/карусель2.png)\">
 <div class=\"carousel-caption\">
 <div class=\"hero fadeInUp animated\">
 <hgroup>
 <h1>Военно-политическая работа</h1>
 <h3>События факультета</h3>
 </hgroup>
 <button class=\"btn btn-hero btn-lg zoomIn animated\" role=\"button\">Читать</button>
 </div>
 </div>
 </div>
 <div class=\"item\" style=\"background-image: url(img/карусель3.png)\">
 <div class=\"carousel-caption\">
 <div class=\"hero rollIn animated\">
 <hgroup class=\"rotateInDownRight animated\">
 <h1>Учебно-научная деятельность</h1>
 <h3>События факультета</h3>
 </hgroup>
 <button class=\"btn btn-hero btn-lg\" role=\"button\">Читать</button>
 </div>
 </div>
 </div>
 </div>
 <!-- Controls -->
 <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
 <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
 <span class=\"sr-only\">Назад</span>
 </a>
 <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
 <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
 <span class=\"sr-only\">Вперёд</span>
 </a>
 </div>

</div>

<section class=\"content\">
    <div class=\"col-sm-6 cafedra_block\">
        <div class=\"col-sm-8 cafedra_title\">
            <h2>
                Факультет сбора и обработки информации
            </h2>
        </div>
        <div class=\"col-sm-3 caferdra_emblema\">
            <img src=\"img/1.png\" alt=\"Эмблема\" height=\"160px\">
        </div>
        <div class=\"col-sm\">
            Факультет проводит обучение курсантов по специальностям:
            <ul>
                <li>метеорология специального назначения (1 военная специальность);</li>
                <li>специальные радиотехнические системы (2 военные специальности);</li>
                <li>электронные и оптико-электронные приборы и системы специального назначения (1 военная
                    специальность).
                </li>
            </ul>
            
        <div class=\"col-sm\" id=\"u4\">
            Среди преподавательского состава факультета – 6 докторов технических и физико-математических
            наук, 6 профессоров, 22 кандидата военных, технических, физико-математических и географических
            наук, 19 доцентов, Заслуженный деятель науки Российской Федерации, Заслуженный работник высшей
            школы, Почетный профессор академии, Почетные работники высшего профессионального образования
            Российской Федерации, Почетные работники гидрометеослужбы России.
        </div>


        </div>
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

                        <h3 class=\"profile-username text-center\">КОТЕНОК АНДРЕЙ АНАТОЛЬЕВИЧ</h3>

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

                        <h3 class=\"profile-username text-center\">КАЛИНИЧЕНКО СЕРГЕЙ ВЛАДИМИРОВИЧ</h3>

                        <p class=\"text-muted text-center\">Заместитель начальника факультета-начальник учебной части</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат технических наук</b>
                            </li>
                            <li class=\"list-group-item\">
                                <b>Доцент</b>
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
<?php $history = "
<div class=\"col-sm-12\">
<p>Факультет «Сбора и обработки информации» был образован в 1977 году на базе факультета «Прикладной космофизики и метеорологии» Военного инженерного Краснознаменного института имени А.Ф.Можайского. Организационные мероприятия по формированию факультета прошли по директиве  Генерального Штаба Вооруженных Сил Советского Союза от 29 июля 1977 г. в период с 1 сентября по конец ноября.
</p>
<p><img src=\"/img/4.jpg\" alt=\"4.jpg\" width=\"600\" height=\"300\"><br>
</p>
<p><i>Учебный корпус факультета Сбора и обработки информации<br></i>
</p>
<p><i>    ВКА имени А.Ф.Можайского.</i>
</p>
<p>Командовать факультетом был назначен доктор технических наук профессор генерал-майор ЮСУПОВ Рафаэль Мидхатович – выдающийся ученый в области информатики, информационных технологий и теории управления, основатель и руководитель научных школ по теоретическим основам информатизации общества и по теории чувствительности сложных информационно-управляющих систем.
</p>
<p><img src=\"/img/5.png\" alt=\"4.jpg\" width=\"220\" height=\"300\"><br>
</p>
<p><i>Первый начальник факультета Сбора и обработки информации генерал-майор ЮСУПОВ Рафаэль Мидхатович, Заслуженный деятель науки и техники РСФСР, Почетный радист СССР, награжден орденами «За заслуги перед Отечеством» IV степени, «Красной звезды» и «Почета».</i>
</p>
<p>В целом же 5 факультет в составе нашего ВУЗа функционирует с 1956 года, тогда он назывался Метеорологическим факультетом. В истории 5 факультета можно выделить четыре основных периода, для каждого из которых были характерны свои особенности в организационном построении факультета и в основных направлениях деятельности его коллектива, свои успехи и достижения, проблемы и трудности.
    Первый из этих периодов - это этап становления нового коллектива метеорологического факультета в составе Ленинградской военно-воздушной академии имени А.Ф. Можайского с 1956 года по 1960 год. Начало второго периода связано с переводом академии в состав РВСН в 1960 году, что вызвало необходимость перестройки учебного процесса, изменения направлений научной деятельности и привело к расширению перечня специальностей, по которым факультет обеспечивал подготовку выпускников.
    Третий этап начался в 1977 году, когда была произведена коренная перестройка структуры факультета и коллектив факультета наряду с подготовкой инженеров-метеорологов начал обучение специалистов по системам сбора, анализа и обработки информации в интересах ГШ ВС СССР, РВСН и других видов ВС.
    Четвертый этап начался в трудный период реформирования Вооруженных сил и создания самостоятельного рода войск ВС РФ – Космических войск, когда Военный инженерно-космический университет был переведен из РВСН в состав Космических войск и преобразован в Военно-космическую академию имени А.Ф.Можайского.
    Под влиянием проходящей военной реформы, реформы высшего образования в стране (с 2016 года после последних реорганизаций – в составе четырёх специальных кафедр), факультет готовит высококвалифицированных специалистов для Воздушно-космических Сил, организаций Генерального штаба, Гидрометеорологической службы ВС РФ, Управления экологической безопасности ВС РФ и других силовых структур и ведомств. Профессиональное предназначение выпускников, начиная с первичных офицерских должностей, нацелено на обеспечение заинтересованных потребителей своевременной достоверной и точной информацией, полученной с помощью технических средств, в интересах национальной безопасности.
</p>
<p><img src=\"/img/6.png\" alt=\"4.jpg\" width=\"600\" height=\"300\"><br>
</p>
<p><i>Места службы выпускников факультета</i>
</p></div>"

?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Главная',
            'content' => $main,
        ],
        [
            'label' => 'Новости',
            'content' => $news,
        ],
        [
            'label' => 'История факультета',
            'content' => $history,
        ],
    ],
]);
?>
<style>

    .carousel-animate .carousel-indicators > li {
        margin: 0 2px;
        background-color: #fff;
        border-color: rgb(58,36,83);
        opacity: .7;
    }
    .carousel-animate .carousel-indicators > li.active {
        width: 10px;
        height: 10px;
        opacity: 1;
    }
    .carousel-animate .hero {
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.75);
    }
    .btn.btn-lg {
        padding: 10px 40px;
    }
    .btn.btn-hero,
    .btn.btn-hero:hover,
    .btn.btn-hero:focus {
        color: #fff;
        background-color: #694198;
        border-color: rgb(67,41,97);
        outline: none;
        margin: 20px auto;
    }
    @media screen and (max-width: 640px) {
        .hero h1 {
            font-size: 2em;
        }
    }
    .carousel-fade .carousel-inner .item {
        transition-property: opacity;
    }
    .carousel-fade .carousel-inner .item,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        opacity: 0;
    }
    .carousel-fade .carousel-inner .active,
    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }
    .carousel-fade .carousel-inner .next,
    .carousel-fade .carousel-inner .prev,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        transform: translate3d(0, 0, 0);
    }
    .carousel-bg .carousel-inner .item {
        background-color: darkslategrey;
        background-size: cover;
        background-position: center;
        min-height: 480px;
    }
</style>

