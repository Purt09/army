<?php

namespace core\repositories\user;

use core\entities\User\User;

class UserRepository
{
    /**
     * @param array $roles
     * @return array
     */
    public function getByRole(array $roles): array
    {
        $user_ids = [];
        foreach ($roles as $role){
            $ids = \Yii::$app->authManager->getUserIdsByRole($role);
            $user_ids += [$role => User::find()->where(['id' => $ids])->all()];
        }
        return $user_ids;
    }


    public function save(User $user): void
    {
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    private function getBy(array $condition): User
    {
        if (!$user = User::find()->andWhere($condition)->limit(1)->one()) {
            throw new NotFoundException('User not found.');
        }
        return $user;
    }

}