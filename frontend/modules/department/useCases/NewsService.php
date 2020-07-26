<?php


namespace frontend\modules\department\useCases;


use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\services\MainService;
use RuntimeException;

class NewsService extends MainService
{
    public function createNews(News $news, NewsPublications $publications)
    {
        $news->status = News::STATUS_ACTIVE;
        $news->created_at = time();
        $news->updated_at = time();
        $this->transaction(function () use ($news, $publications) {
            if(!$publications->save())
                throw new RuntimeException('Сохранить не удалось данные где публиковать');
            $news->publications = $publications->id;
            if(!$news->save())
                throw new RuntimeException('Сохранить не удалось статью');
        });
    }
}