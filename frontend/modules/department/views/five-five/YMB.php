<?php
/**
 * @var $this \yii\web\View
 */

$this->title = " Учебно-материальная база";

?>
<div class="col-sm-8 cafedra_block">
    <div class="col-sm-9 cafedra_title">

        <b>Зоны ответственности 551 учебной лаборатории:</b><hr>
        - эксплуатация и обслуживание систем наземного радиомониторинга;<br>
        - эксплуатация и обслуживание учебных аудиторий кафедры и размещенной в них специальной аппаратуры приема и обработки сигналов систем космического радиоэлектронного контроля;<br>
        - эксплуатация и поддержание в рабочем состоянии локальных сетей кафедры, обеспечение выполнения требований ЗГТ;<br><hr>


    </div>
    <div class="col-sm-3 caferdra_emblema">
        <img src="/img/эмб55.jpg" alt="Эмблема" height="70px">
    </div>
    <div class="col-sm-12 karusel-umb">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <img src="/img/ymb/5511.png" alt="...">
                    <div class="carousel-caption">
                        <h4>Система регистрации телеметрической  информации 11Н736
                        </h4>
                    </div>
                </div>
                <div class="item active">
                    <img src="/img/ymb/5512.png" alt="...">
                    <div class="carousel-caption">
                        <h4>Комплекс регистрации и анализа радиоэлектронной обстановки «Навигатор-П6»
                        </h4>
                    </div>
                </div>
                <div class="item">
                    <img src="/img/ymb/5513.png" alt="...">
                    <div class="carousel-caption">
                        <h4>Специализированный учебный класс обработки информации о радиоэлектронной обстановке УТК-Р «Афродита»</h4>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

</div>

<div class="col-sm-4">
    <div style="text-align: center;">
        <h2>НАЧАЛЬНИК ЛАБОРАТОРИИ</h2>
    </div>
    <div>
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="user_photo">
                        <img class="user_photo img-responsive" src="/img/ymb/нач551.png" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Капитан<br>ТОЛОКОННИКОВ<br>Андрей Валерьевич</h3>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#staticBackdrop2">
                        Подробнее
                    </button>



                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title" id="staticBackdropLabel2"></h5>
            </div>
            <div class="modal-body">
                Дата рождения – 15 июля 1984 года. Окончил Московский авиационный институт (государственный технический университет) в 2007 г.
                На кафедре с 2012 года.
                Женат.


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Закрыть
                </button>

            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 cafedra_prev">
    <b>Личный состав лабаратории:</b><br>

    <table class="table">
        <thead class="thead-inverse">
        <tr>

            <th>Должность</th>
            <th>Воинское звание</th>
            <th>ФИО</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>Старший инженер лаборатории</td>
            <td>капитан</td>
            <td>СМИРНОВ Даниил Николаевич</td>
        </tr>
        <tr>
            <td>Инженер лаборатории</td>
            <td>майор</td>
            <td>РАСТРОСА Владислав Валерьевич</td>
        </tr>
        <tr>
            <td>Инженер лаборатории</td>
            <td>капитан </td>
            <td>ЛИМАРЕВ Алексей Анатольевич</td>
        </tr>
        <tr>
            <td>Инженер лаборатории</td>
            <td>капитан </td>
            <td>БЕЛИХИН Евгений Николаевич </td>
        </tr>
        <tr>
            <td>Инженер лаборатории</td>
            <td>майор</td>
            <td>АЛТУХОВА Екатерина Сергеевна</td>
        </tr>

        </tbody>
    </table>


</div>
<style>
    .left.carousel-control{
        border-radius: 20px
    }
    .right.carousel-control{
        border-radius: 20px
    }
    .carousel div.carousel-inner{
        height: 450px;
        border-radius: 20px;
    }
    .table tbody{
        background-color: white;
        text-align: left;
    }
    .table thead{
        background-color: black;
        color: white;
        font-weight: 700;
        text-align: left;
    }
</style>