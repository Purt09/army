<?php

namespace frontend\controllers;

use core\entities\Army\Plan;
use core\entities\Army\PlanCategory;
use core\entities\User\User;
use core\vendor\pages\models\Page;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\User\TblStaff;
use core\helpers\user\RbacHelpers;
use yii\helpers\ArrayHelper;
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
        $announcements = NewsPublications::find()->where(['announcement' => 1])->with('articles')->all();

        $news = NewsPublications::find()->where(['main' => 1])->with('articles')->orderBy('id DESC')->all();
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$MANAGER, RbacHelpers::$FAKULTET);

        return $this->render('index', [
            'news' => $news,
            'model' => $model,
            'users' => $users,
            'history' => $history,
            'announcements' => $announcements
        ]);
    }

    /**
     * @return mixed
     */
    public function actionContact()
    {
        $users = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$OFFICER);
        $users = User::find()->where(['id' => $users])->select('user_base_id')->asArray()->all();
        $users = ArrayHelper::map($users, 'user_base_id', 'user_base_id');
        $users = TblStaff::find()->where(['id' => $users])->indexBy('id')->all();
        $users = ArrayHelper::map($users, 'id', 'fio');

        $user = null;
        if(\Yii::$app->request->isPost) {
            $user = TblStaff::findOne(\Yii::$app->request->post('user'));
        }

        $info = Page::find()->where(['alias' => 'contacts-info'])->one();
        return $this->render('contact', [
            'info' => $info,
            'users' => $users,
            'user' => $user
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

    public function actionViewPlan($alias)
    {
        $category = PlanCategory::find()->where(['alias' => $alias])->one();
        $models = Plan::find()->where(['category_id' => $category->id])->limit(10)->orderBy('id DESC')->all();


        return $this->render('view-plans', [
            'models' => $models,
            'category' => $category
        ]);
    }
}