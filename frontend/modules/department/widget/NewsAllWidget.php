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
            ->orderBy('birthday_date')->indexBy('id')
            ->limit(10)->all();

        $user_birth = [];
        foreach ($users as $key => &$user) {
            array_push($user_birth, [
                'birth' => intval((int) substr($user->birthday_date, 5, 7) . substr($user->birthday_date, 8, 10)),
                'id' => $key
            ]);
        }
        ArrayHelper::multisort($user_birth, 'birth');

        return $this->render('news-all', [
            'news' => $this->news,
            'users' => $users,
            'user_birth' => $user_birth
        ]);
    }
}