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


<div class="row">

    <div id="carousel-example-generic" class="carousel slide carousel-fade carousel-animate carousel-bg"
         data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url(img/карусель1.png)">
                <div class="carousel-caption">
                    <div class="hero">
                        <hgroup class="zoomInDown animated">
                            <h1 class="fadeInLeft animated">Факультет сбора и обработки инфорации</h1>
                            <h3 class="slideInRight animated">Новости факульета</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg bounceInUp animated" role="button">Читать</button>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(img/карусель2.png)">
                <div class="carousel-caption">
                    <div class="hero fadeInUp animated">
                        <hgroup>
                            <h1>Военно-политическая работа</h1>
                            <h3>События факультета</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg zoomIn animated" role="button">Читать</button>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(img/карусель3.png)">
                <div class="carousel-caption">
                    <div class="hero rollIn animated">
                        <hgroup class="rotateInDownRight animated">
                            <h1>Учебно-научная деятельность</h1>
                            <h3>События факультета</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">Читать</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Назад</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Вперёд</span>
        </a>
    </div>

</div>
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
            'label' => 'Главная',
            'content' => $main,
        ],
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget(['news' => $news]),
        ],
        [
            'label' => 'История факультета',
            'content' => $history->content,
        ],
    ],
]);
?>
<style>

    .carousel-animate .carousel-indicators > li {
        margin: 0 2px;
        background-color: #fff;
        border-color: rgb(58, 36, 83);
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
        border-color: rgb(67, 41, 97);
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
