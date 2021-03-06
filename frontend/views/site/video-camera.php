<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Просмотр камер';
?>
<div class="container">
    <ul class="list-unstyled video-list-thumbs row">
        <li class="col-lg-3 col-sm-4 col-xs-6">
            <a href="http://192.168.50.111" title="Камера №1">
                <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                <h2>Камера 1</h2>
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration label-warning">Не работает</span>
            </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
            <a href="http://192.168.50.114" title="Камера №2">
                <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                <h2>Камера 2</h2>
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration label-warning">Не работает</span>
            </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
            <a href="http://192.168.50.116" title="Камера №3">
                <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                <h2>Камера 3</h2>
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration label-warning">Не работает</span>
            </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
            <a href="http://192.168.50.118" title="Камера №4">
                <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                <h2>Камера 4</h2>
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration label-warning">Не работает</span>
            </a>
        </li>
    </ul>

</div>

<style>
    .video-list-thumbs{}
    .video-list-thumbs > li{
        margin-bottom:12px;
    }
    .video-list-thumbs > li:last-child{}
    .video-list-thumbs > li > a{
        display:block;
        position:relative;
        background-color: #111;
        color: #fff;
        padding: 8px;
        border-radius:3px
        transition:all 500ms ease-in-out;
        border-radius:4px
    }
    .video-list-thumbs > li > a:hover{
        box-shadow:0 2px 5px rgba(0,0,0,.3);
        text-decoration:none
    }
    .video-list-thumbs h2{
        bottom: 0;
        font-size: 14px;
        height: 33px;
        margin: 8px 0 0;
    }
    .video-list-thumbs .glyphicon-play-circle{
        font-size: 60px;
        opacity: 0.6;
        position: absolute;
        right: 39%;
        top: 31%;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
        transition:all 500ms ease-in-out;
    }
    .video-list-thumbs > li > a:hover .glyphicon-play-circle{
        color:#fff;
        opacity:1;
        text-shadow:0 1px 3px rgba(0,0,0,.8);
    }
    .video-list-thumbs .duration{
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 2px;
        color: #fff;
        font-size: 11px;
        font-weight: bold;
        left: 12px;
        line-height: 13px;
        padding: 2px 3px 1px;
        position: absolute;
        top: 12px;
        transition:all 500ms ease;
    }
    .video-list-thumbs > li > a:hover .duration{
        background-color:#000;
    }
    @media (min-width:320px) and (max-width: 480px) {
        .video-list-thumbs .glyphicon-play-circle{
            font-size: 35px;
            right: 36%;
            top: 27%;
        }
        .video-list-thumbs h2{
            bottom: 0;
            font-size: 12px;
            height: 22px;
            margin: 8px 0 0;
        }
    }
</style>
