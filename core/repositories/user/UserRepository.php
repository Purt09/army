<?php

namespace core\repositories\user;

use core\entities\User\User;

class UserRepository
{
    public function findByUsername($username)
    {
        return User::find()->where(['username' => $username])->one();
    }

    /**
     * Возращает пользователей определенных ролей
     * @param array $roles
     * @return array
     */
    public function getByRole(array $roles)
    {
        $user_ids = [];
        foreach ($roles as $role){
            $ids = \Yii::$app->authManager->getUserIdsByRole($role);
            $user_ids += [$role => User::find()->where(['id' => $ids])->all()];
        }
        return $user_ids;
    }


    /**
     * @param $user
     */
    public function save($user)
    {
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    /**
     * @param array $condition
     * @return array|\yii\db\ActiveRecord|null
     */
    private function getBy(array $condition)
    {
        if (!$user = User::find()->andWhere($condition)->limit(1)->one()) {
            throw new NotFoundException('User not found.');
        }
        return $user;
    }

}