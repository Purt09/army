<?php
/**
 * @var $this \yii\web\View
 */

$this->title = " Учебно-материальная база";

?>
<?php
$one = '<div class="col-sm-8 cafedra_block">
        <div class="col-sm-9 cafedra_title">
            <h2>
                 511 учебная лаборатория
            </h2>

        </div>
        <div class="col-sm-3 caferdra_emblema">
            <img src="/img/ymb/эмб52.png" alt="Эмблема" height="70px">
        </div>
        <div class="col-sm-12 cafedra_prev">
<b>Зоны ответственности 511 учебной лаборатории:</b><hr>
- эксплуатация и обслуживание аудиторий 508, 508-а, 510-в, 510-г;<br>
- эксплуатация и обслуживание банка геопространственных данных (изделие 21Л420), учебно-тренажерного комплекса приема, регистрации и обработки данных ДЗЗ (УТК-В), специализированного учебного комплекса средств автоматизации (КСА-В);<br><hr>
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
                       <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#staticBackdrop2">
                            Подробнее
                        </button>

                        <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false"
                             tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
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



                    </div>
                </div>
            </div>

 </div>
 </div>            



 <div class="col-md-8 col-md-offset-2">
 <div id="carousel" class="carousel slide" data-interval="3000" data-ride="carousel">
 <div class="carousel-inner">
 <div class="item active">
 <img src="/img/ymb/Слайд1.png">
 </div>
 <div class="item">
 <img src="/img/ymb/Слайд2.png">
 </div>
 <div class="item">
<img src="/img/ymb/Слайд1.png">
 </div>
 <div class="item">
 <img src="/img/ymb/Слайд2.png">
 </div>


 </div>
 </div>
 <div class="clearfix">
 <div id="thumbcarousel" class="carousel slide" data-interval="12000" data-ride="carousel">
 <div class="carousel-inner">
 <div class="item active">
 <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="/img/ymb/Слайд1.png"></div>
 <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="/img/ymb/Слайд2.png"></div>
  <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="/img/ymb/Слайд1.png"></div>
 <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="/img/ymb/Слайд2.png"></div>

 </div>
 
 <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left"></span>
 </a>
 <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right"></span>
 </a>
 </div>
 </div>
 </div>



</div>



           
</div>



 </div>';
?>
<?= \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => '511 УЛ',
            'content' => $one,
        ],
    ],
]);
?>
<style type="text/css">
    .head-content{
        top: 0;
        left: 0;
        z-index: 0;
        width: 100%;
        overflow: hidden;
        overflow-x: hidden;
        overflow-y: hidden;
        display: block;
        margin: 0;
        padding: 0;
        outline: none;
        height: 15%;
        background-color: #1E90FF;
    }

    .text {
        height: 100%;
    }

    .text h2{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }


    .content-umb {
        position:relative;
        margin:0 auto;
        overflow:hidden;
        padding:5px;
        height:50px;

    }
    .list {
        position:absolute;
        left:0px;
        top:0px;
        min-width:3500px;
        margin-top:0px;
    }
    .list li{
        display:table-cell;
        position:relative;
        text-align:center;
        cursor:grab;
        cursor:-webkit-grab;
        color:#efefef;
        vertical-align:middle;
    }
    .scroller {
        text-align:center;
        cursor:pointer;
        display:none;
        padding:7px;
        padding-top:13px;
        white-space:no-wrap;
        vertical-align:middle;
        background-color:#fff;
    }
    .user_photo {
        border-radius: 12px;
        width: 220px;
        margin: auto;
        height: 280px;
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 0 0;
    }

    .cafedra_prev {
        text-align: center;
        font-size: 18px;
        font-style: italic;
    }

    .caferdra_emblema {
        text-align: right;

    }

    .cafedra_block {

        background-color: white;
        border-radius: 20px;
        padding: 15px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .cafedra_title {
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    .cafedra_title h2{
        color: #6b6c6d;
        font-style: italic;
        font-family: initial;
    }

    .cafedra_title span{
        color: gray;
    }
    .thead-inverse{
        background: black;

    }
    .thead-inverse tr{
        color: white;

    }

    .carousel {
        margin-top: 20px;
    }
    .item .thumb {
        width: 25%;
        cursor: pointer;
        float: left;
    }
    .item .thumb img {
        width: 100%;
        margin: 2px;
    }
    .item img {
        width: 100%;
    }
</style>

<script>
    var hidWidth;
    var scrollBarWidths = 40;

    var widthOfList = function(){
        var itemsWidth = 0;
        $('.list a').each(function(){
            var itemWidth = $(this).outerWidth();
            itemsWidth+=itemWidth;
        });
        return itemsWidth;
    };

    var widthOfHidden = function(){
        var ww = 0 - $('.wrapper').outerWidth();
        var hw = (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
        var rp = $(document).width() - ($('.nav-item.nav-link').last().offset().left + $('.nav-item.nav-link').last().outerWidth());

        if (ww>hw) {
            //return ww;
            return (rp>ww?rp:ww);
        }
        else {
            //return hw;
            return (rp>hw?rp:hw);
        }
    };

    var getLeftPosi = function(){

        var ww = 0 - $('.wrapper').outerWidth();
        var lp = $('.list').position().left;

        if (ww>lp) {
            return ww;
        }
        else {
            return lp;
        }
    };

    var reAdjust = function(){

        // check right pos of last nav item
        var rp = $(document).width() - ($('.nav-item.nav-link').last().offset().left + $('.nav-item.nav-link').last().outerWidth());
        if (($('.wrapper').outerWidth()) < widthOfList() && (rp<0)) {
            $('.scroller-right').show().css('display', 'flex');
        }
        else {
            $('.scroller-right').hide();
        }

        if (getLeftPosi()<0) {
            $('.scroller-left').show().css('display', 'flex');
        }
        else {
            $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
            $('.scroller-left').hide();
        }
    }

    reAdjust();

    $(window).on('resize',function(e){
        reAdjust();
    });

    $('.scroller-right').click(function() {

        $('.scroller-left').fadeIn('slow');
        $('.scroller-right').fadeOut('slow');

        $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){
            reAdjust();
        });
    });

    $('.scroller-left').click(function() {

        $('.scroller-right').fadeIn('slow');
        $('.scroller-left').fadeOut('slow');

        $('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
            reAdjust();
        });
    });
</script>
