<?php

namespace frontend\controllers;

use bupy7\pages\models\Page;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return mixed
     */
    public function actionIndex()
    {
//        $content = Page::find()->where(['alias' => 'main'])->one();
//        $history = Page::find()->where(['alias' => 'history-main'])->one();
//
//        $news = NewsPublications::find()->where(['main' => 1])->with('article')->all();

        return $this->render('index', [
            'content' => $content,
            'history' => $history,
            'news' => $news
        ]);
    }

    /**
     * @return mixed
     */
    public function actionContact()
    {
        $abonents = Page::find()->where(['alias' => 'contacts-abonent'])->one();
        $info = Page::find()->where(['alias' => 'contacts-info'])->one();
        return $this->render('contact',[
            'abonents' => $abonents,
            'info' => $info,
        ]);
    }
}