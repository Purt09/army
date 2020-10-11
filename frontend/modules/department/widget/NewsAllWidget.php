<?php


namespace frontend\modules\department\widget;


use core\entities\User\TblStaff;
use core\entities\User\User;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class NewsAllWidget extends Widget
{
    public $news;
    public $role;

    public function run()
    {
        $users = \Yii::$app->authManager->getUserIdsByRole($this->role);
        $users = User::find()->where(['id' => $users])->select('user_base_id')->asArray()->all();
        $users = ArrayHelper::map($users, 'user_base_id', 'user_base_id');
        $users = TblStaff::find()->where(['id' => $users])
            ->orderBy('birthday_date')
            ->limit(10)->all();

        /**
         * Здесь надо отстортировать по дате рождения. но не учитывать год рождения
         */

        return $this->render('news-all', [
            'news' => $this->news,
            'users' => $users
        ]);
    }
}