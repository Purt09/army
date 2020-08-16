<?php


namespace frontend\widget;


use yii\base\Widget;
use Yii;

class EmblemaWidget extends Widget
{
    private $url;

    public function run()
    {
        $url = Yii::$app->request->pathInfo;
        $url_array = explode("/", $url);
        $this->url = '/img/1.png';

        $this->isDepartment($url_array);


        return $this->render('emblema', [
            'url' => $this->url
        ]);
    }

    private function isDepartment(array $url)
    {
        if ($url['0'] == 'department')
            switch ($url['1']){
                case 'five-one':
                    $this->url = '/img/эмб51.png';
                    break;
                case 'five-two':
                    $this->url = '/img/эмб52.png';
                    break;
                case 'five-free':
                    $this->url = '/img/эмб53.jpg';
                    break;
                case 'five-five':
                    $this->url = '/img/эмб55.gif';
                    break;
            }
    }
}