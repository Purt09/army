<?php
/**
 * @var $this \yii\web\View
 */

$this->title = " Учебно-материальная база";

?>
<div class="col-sm-8 cafedra_block">
    <div class="col-sm-9 cafedra_title">
        <b>Зоны ответственности 511 учебной лаборатории:</b><hr>
        - эксплуатация и обслуживание аудиторий 508, 508-а, 510-в, 510-г;<br>
        - эксплуатация и обслуживание банка геопространственных данных (изделие 21Л420), учебно-тренажерного комплекса приема, регистрации и обработки данных ДЗЗ (УТК-В), специализированного учебного комплекса средств автоматизации (КСА-В);<br><hr>

    </div>
    <div class="col-sm-3 caferdra_emblema">
        <img src="/img/эмб51.png" alt="Эмблема" height="70px">
    </div>
    <div class="col-sm-12 karusel-umb">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>



            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <img src="/img/ymb/5111.png" alt="...">
                    <div class="carousel-caption">
                        <h4>Учебно-тренажерный комплекс приема, регистрации и обработки данных ДЗЗ (УТК-В)
                        </h4>
                    </div>
                </div>
                <div class="item active">
                    <img src="/img/ymb/5112.png" alt="...">
                    <div class="carousel-caption">
                        <h4>Банк геопространственных данных (изделие 21Л420)
                        </h4>
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
                        <img class="user_photo img-responsive" src="/img/ymb/нач511.png" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Капитан<br>Андрусенко<br>Артем Сергеевич</h3>
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
                Дата рождения – 15 мая 1988 года. Окончил ВУНЦ ВВС «Военно-воздушная Академия имени профессора Н.Е.Жуковского и Ю.А. Гагарина» (г. Москва) в 2010 году.<br>
                Специальность:инженер;<br>
                Специализация:Исследование природных ресурсов аэрокосмическими средствам;<br>

                Женат, воспитывает дочь.

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

            <td>Инженер отделения</td>
            <td>старший лейтенант</td>
            <td>Гиболевич Геннадий Алексеевич</td>
        </tr>
        <tr>
            <td>Техник 511 лаборатории учебной</td>
            <td>Гражданский персонал</td>
            <td>Тарасова Анна Аркадьевна</td>
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