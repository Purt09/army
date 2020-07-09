<?php


namespace frontend\assets;


use yii\web\AssetBundle;

class CalendarAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'lib/calendar/main.css',
    ];
    public $js = [
        'lib/calendar/locales/ru.js',
        'lib/calendar/main.js',
    ];
}