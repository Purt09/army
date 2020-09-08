<?php
/**
 * @var $this \yii\web\View
 * @var $model \bupy7\pages\models\Page
 */

$this->title = 'Выпускники 55 кафедры';

?>

<?= $model->content ?>

<section class="content">
    <div class="">
        <div class="col-sm-12 head_inf">
            <div class="col-sm-9">
                <h2>ВЫДАЮЩИЕСЯ ВЫПУСКНИКИ 55 КАФЕДРЫ<h2>

            </div>
            <div class="col-sm-3 logo">
                <img src="/img/эмб55.jpg" alt="\">
            </div>

        </div>
        <div class="col-sm-12 inf_block">

            <div>
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/155.jpg" alt="demo image 1">
                                <div style="text-align: center;">
                                    <h4> генерал-лейтенант КЛИМЕНКО Николай Николаевич</h4>
                                </div>
                            </div>
                            <div class="box-content">
                                <img src="/img/155.jpg"alt="demo image 2" style="width: 90px; height: auto">
                                <h4 class="title">генерал-лейтенант КЛИМЕНКО Николай Николаевич
                                </h4>
                                <p class="description">Гордостью кафедры являются: Клименко Н.Н. – генерал-лейтенант запаса, кандидат технических наук, советник Министра обороны РФ, бывший командир Центра военно-технической информации, Замарин А.И. –доктор технических наук, профессор, председатель Диссертационного Совета академии, Жиганов А.Н. – доктор технических наук, начальник отдела проектирования бортовой аппаратуры, Сайбель А.Г. – доктор технических наук, заместитель генерального директора по научной работе организации, выполняющей заказы МО РФ и других силовых структур, руководство которой осуществляет бывший начальник кафедры, кандидат технических наук Зайцев И.Е., Чмиль В.Я. – кандидат технических наук, заместитель главы Республики Карелия, Данилов Д.Ю. – начальник управления Центра военно-технической информации, Долинин М.О. – офицер управления информации войсковой части 45807, Воронин А.В. – кандидат технических наук, доцент, доцент кафедры, Голубев В.В. – кандидат технических наук, доцент, старший научный сотрудник ВИ (НИ); Малиборский С.С. – кандидат технических наук, доцент кафедры.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <div class="box-img">
                                <img src="/img/255.jpg" alt="demo image 2">
                                <div style="text-align: center;">
                                    <h4> Дикарев Виктор Иванович</h4>
                                </div>

                            </div>
                            <div class="box-content">
                                <img src="/img/255.jpg" alt="demo image 2" style="width: 90px; height: auto">
                                <h4 class="title">Дикарев Виктор Иванович</h4>
                                <p class="description">
                                    На кафедре трудится Виктор Иванович  Дикарев – Заслуженный изобретатель РФ, Почетный изобретатель РФ, Почетный профессор Европейского Университета, Почетный изобретатель Европы, автор более 1100 изобретений, из которых 600 защищены патентами РФ в области радиоэлектроники, ультразвука, защиты объектов и информации от несанкционированного доступа, экологии, имеет 8 правительственных наград.</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</section>




<style type="text/css">

    .logo
    {
        height: 100px;
        text-align: right;
    }

    .logo img
    {
        height: 100%;
    }
    .head_inf{
        max-height: 300px;
        text-align: center;
        background: white;
        border-radius: 20px;
        padding: 15px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

    }

    .inf_block{
        background: #fff;
        border-style: outset;
        border-color: gold;
        padding: 5px;
        min-height: 500px;
    }


    .box{
        position: relative;
        perspective: 1000px;
        margin-top: 30px;

    }
    .box .box-img{
        transform: rotateY(0);
        transition: all 0.50s ease-in-out 0s;
        height: 400px;

    }
    .box:hover .box-img{
        transform: rotateY(-90deg);

    }
    .box .box-img img{
        width: 100%;
        height: 400px;
        object-fit: contain;

    }
    .box .box-content{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 60px 20px;
        text-align: center;
        background: rgba(0,0,0,0.7);
        transform: rotateY(90deg);
        transition: all 0.50s ease-in-out 0s;
    }
    .box:hover .box-content{
        transform: rotateY(0);
    }
    .box .title{
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
    }
    .box .description{
        overflow: auto;
        overflow-x: hidden;
        height: 100px;
        font-size: 14px;
        line-height: 24px;
        color: #fff;
    }
    .box .title:after,
    .box .description:after{
        content: "";
        width: 80%;
        display: block;
        border-bottom: 1px solid #fff;
        margin: 15px auto;
    }
    .box .social-links{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .box .social-links li{
        display: inline-block;
        margin: 0 10px;
    }
    .box .social-links li a{
        font-size: 20px;
        color: #a6a6a6;
    }
    .box .social-links li a:hover{
        text-decoration: none;
        color: #fff;
    }
    @media only screen and (max-width: 990px) {
        .box{ margin-bottom:20px; }
    }
    @media only screen and (max-width: 479px) {
        .box .box-content{ padding: 20px; }
    }
</style>