<?php
/**
 * @var $this \yii\web\View
 * @var $content Page
 * @var $history Page
 * @var $news NewsPublications
 * @var $main Page
 */

use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;

$this->title = 'Кафедра 53';

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
                            <img class=\"user_photo img-responsive\" src=\"/img/нк53.png\" alt=\"User profile picture\">
                        </div>

                        <h3 class=\"profile-username text-center\">СЕМЕНОВ КИРИЛЛ <br> ВЛАДИМИРОВИЧ</h3>

                        <p class=\"text-muted text-center\">Начальник кафедры</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат технических наук</b>
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
                                         Родился 3 января 1982 г. в г. Фрунзе Киргизской ССР. В 2004 г. закончил ВКА имени А.Ф.Можайского по специальности «Применение и эксплуатация средств ра-диоэлектронного контроля космических комплексов». В период с 2004 г. по 2007 г. проходил службу в войсковой части 33443 на должности инженера отдела.
В 2007 году поступил в очную адъюнктуру ВКА имени А.Ф.Можайского. По-сле окончания адъюнктуры назначен на должность преподавателя, а затем - старшего преподавателя 53 кафедры. Кандидат технических наук (2011г.). В 20016 году по-ступил в докторантуру и после ее окончания в июне 2020 года назначен на долж-ность начальника 53 кафедры. Женат, имеет четырех дочерей.
Область профессиональных интересов:
- технический анализ и обработка радиосигналов и цифровых потоков;
- обработка формализованных сообщений; 
- разработка и применение баз данных;
- разработка программ моделирования, анализа и обработки сигналов в средах: MS Visual Studio, QtCreator, Matlab.


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
                            <img class=\"user_photo img-responsive\" style='object-position: unset' src=\"/img/знк53.jpg\" alt=\"User profile picture\" id=\"foto_zn\" >
                        </div>

                        <h3 class=\"profile-username text-center\">СЕМЕНЮК СЕРГЕЙ <br>   СЕРГЕЕВИЧ</h3>

                        <p class=\"text-muted text-center\">Заместитель начальника кафедры</p>

                        <ul class=\"list-group list-group-unbordered\">
                            <li class=\"list-group-item\">
                                <b>Кандидат технических наук</b>
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
                                        Родился 8 октября 1983 г. в г. Рязань. В 2005 г. закончил ВКА имени А.Ф.Можайского по специальности «Применение и эксплуатация средств радиоэлек-тронного контроля космических комплексов». В период с 2005 г. по 2009 г. прохо-дил службу в войсковой части 33443 на должности инженера отдела.
В 2009 году поступил в очную адъюнктуру ВКА имени А.Ф.Можайского. По-сле окончания адъюнктуры назначен на должность преподавателя 53 кафедры. Кан-дидат технических наук (2012г.). На должность заместителя начальника 53 кафедры назначен в июне 2020г. Женат, имеет дочь.
Область профессиональных интересов:
- додетекторный анализ и обработка радиосигналов;  
- определение местоположения источников радиоизлучений; 
- разработка программ моделирования, анализа и обработки сигналов в средах: QtCreator, Matlab, Maple.
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
{$main->content}" ?>

<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => 'Новости',
            'content' => \frontend\modules\department\widget\NewsAllWidget::widget([
                'news' => $news,
                'role' => \core\helpers\user\RbacHelpers::$CAFEDRA53]),
        ],
        [
            'label' => 'Главная 53 кафедры',
            'content' => $main,
        ],
        [
            'label' => 'История кафедры',
            'content' => $history->content,
        ],
    ],
]);
?>