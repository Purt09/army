<?php

namespace core\repositories\news;

use core\entities\News\News;
use core\entities\News\NewsPublications;

class NewsRepository
{
    public static function getNewsByType($type)
    {
        switch ($type) {
            case 'main':
                $query = NewsPublications::find()->where(['main' => 1]);
                break;
            case 'course51':
                $query = NewsPublications::find()->where(['course51' => 1]);
                break;
            case 'course52':
                $query = NewsPublications::find()->where(['course52' => 1]);
                break;
            case 'course53':
                $query = NewsPublications::find()->where(['course53' => 1]);
                break;
            case 'course54':
                $query = NewsPublications::find()->where(['course54' => 1]);
                break;
            case 'course55':
                $query = NewsPublications::find()->where(['course55' => 1]);
                break;
            case '51_cafedra':
                $query = NewsPublications::find()->where(['51_cafedra' => 1]);
                break;
            case '52_cafedra':
                $query = NewsPublications::find()->where(['52_cafedra' => 1]);
                break;
            case '53_cafedra':
                $query = NewsPublications::find()->where(['53_cafedra' => 1]);
                break;
            case '54_cafedra':
                $query = NewsPublications::find()->where(['54_cafedra' => 1]);
                break;
            case 'announcement':
                $query = NewsPublications::find()->where(['announcement' => 1]);
                break;
        }
        return $query->with('articles')->orderBy('id desc');
    }
}
