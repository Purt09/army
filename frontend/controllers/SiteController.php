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
        $content = Page::find()->where(['alias' => 'main'])->one();
        $history = Page::find()->where(['alias' => 'history-main'])->one();

        $news = NewsPublications::find()->where(['main' => 1])->with('articles')->all();

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
        $info = Page::find()->where(['alias' => 'contacts-info'])->one();
        return $this->render('contact',[
            'info' => $info,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionContactList()
    {
        $abonents = Page::find()->where(['alias' => 'contacts-abonent'])->one();
        return $this->render('contact-list',[
            'abonents' => $abonents,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionVideoCamera()
    {
        return $this->render('video-camera');
    }
}