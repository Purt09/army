<?php


namespace frontend\widget;


use yii\base\Widget;
use Yii;

class LabelEmblemaWidget extends Widget
{
    private $title = 'Факультет';

    public function run()
    {
        $url = Yii::$app->request->pathInfo;
        $url_array = explode("/", $url);

        $this->isDepartment($url_array);


        return $this->render('label-emblema', [
            'title' => $this->title
        ]);
    }

    private function isDepartment(array $url)
    {
        if ($url['0'] == 'department')
            switch ($url['1']){
                case 'five-one':
                    $this->title = '51 кафедра';
                    break;
                case 'five-two':
                    $this->title = '52 кафедра';
                    break;
                case 'five-free':
                    $this->title = '53 кафедра';
                    break;
                case 'five-five':
                    $this->title = '55 кафедра';
                    break;
            }

    }
}