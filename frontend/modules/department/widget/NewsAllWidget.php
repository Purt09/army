<?php


namespace frontend\modules\department\widget;


use core\entities\User\TblStaff;
use core\entities\User\User;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use Carbon\Carbon;

class NewsAllWidget extends Widget
{
    public $news;
    public $role;

    public function run()
    {
        $users = \Yii::$app->authManager->getUserIdsByRole($this->role);
        $users = User::find()->where(['id' => $users])->select('user_base_id')->asArray()->all();
        $users = ArrayHelper::map($users, 'user_base_id', 'user_base_id');
        $users = TblStaff::find()->where(['id' => $users])->indexBy('id')->all();

        $today = Carbon::today();
        $result = [];
        for ($i = 0; $i <= 34; $i++) {
            foreach ($users as $user) {
                if($user->getDiffDay($today) == $i)
                    array_push($result, $user);
            }
        }

        return $this->render('news-all', [
            'news' => $this->news,
            'users' => $result,
        ]);
    }
}