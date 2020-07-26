<?php


namespace frontend\modules\department\widget;


use yii\base\Widget;

class NewsAllWidget extends Widget
{
    public $news;

    public function run()
    {
        return $this->render('news-all', [
            'news' => $this->news
        ]);
    }
}