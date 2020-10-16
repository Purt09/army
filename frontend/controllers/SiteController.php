<?php

namespace frontend\controllers;

use bupy7\pages\models\Page;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\User\TblStaff;
use core\helpers\user\RbacHelpers;
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
        $model = Page::find()->where(['alias' => 'main_fak_general'])->one();
        $history = Page::find()->where(['alias' => 'history-main'])->one();
        $announcement = Page::find()->where(['alias' => 'fakultet_announcement'])->one();

        $news = NewsPublications::find()->where(['main' => 1])->with('articles')->all();
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$MANAGER, RbacHelpers::$FAKULTET);

        return $this->render('index', [
            'news' => $news,
            'model' => $model,
            'users' => $users,
            'history' => $history,
            'announcement' => $announcement
        ]);
    }

    /**
     * @return mixed
     */
    public function actionContact()
    {
        $info = Page::find()->where(['alias' => 'contacts-info'])->one();
        return $this->render('contact', [
            'info' => $info,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionContactList()
    {
        $abonents = Page::find()->where(['alias' => 'contacts-abonent'])->one();
        return $this->render('contact-list', [
            'abonents' => $abonents,
        ]);
    }

    public function actionArmy()
    {
        return $this->render('army');
    }

    /**
     * @return mixed
     */
    public function actionVideoCamera()
    {
        return $this->render('video-camera');
    }

    /**
     * @return mixed
     */
    public function actionMethod()
    {
        return $this->render('method');
    }


    /**
     * @return mixed
     */
    public function actionNayka()
    {
        return $this->render('nayka');
    }

    /**
     * @return mixed
     */
    public function actionListLessons()
    {
        return $this->render('list-lessons');
    }
}