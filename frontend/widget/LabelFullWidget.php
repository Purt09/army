<?php


namespace frontend\widget;


use yii\base\Widget;
use Yii;

class LabelFullWidget extends Widget
{
    private $title = 'Факультет сбора и обработки информации';

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
                    $this->title = 'Кафедра оптико-электронных средств контроля';
                    break;
                case 'five-two':
                    $this->title = 'Технологии и средств геофизического обеспечения войск';
                    break;
                case 'five-free':
                    $this->title = 'Кафедра технических средств комплексного контроля ракетно-космических объектов';
                    break;
                case 'five-five':
                    $this->title = 'Кафедра космического радиоэлектронного контроля';
                    break;
            }

    }
}