<?php


namespace frontend\modules\department\controllers;



use core\entities\Common\Article\Article;
use core\entities\Common\Article\ArticleCategories;
use frontend\modules\department\forms\ArticleSearch;
use Yii;

trait ArticleTrait
{
    public function actionArticle($unit_id, $category_id)
    {
        $category = ArticleCategories::findOne($category_id);
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('../common/article/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category
        ]);
    }

    public function actionArticleCreate($unit_id, $category_id)
    {
        $category = ArticleCategories::findOne($category_id);
        $model = new Article();

        return $this->render('../common/article/create', [
            'category' => $category,
            'model' => $model
        ]);
    }
}