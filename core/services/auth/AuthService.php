<?php

namespace core\services\auth;

use core\entities\User\User;
use common\forms\auth\LoginForm;
use core\repositories\user\UserRepository;

class AuthService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    /**
     * @param LoginForm $form
     * @return array|\yii\db\ActiveRecord|null
     */
    public function auth($form)
    {
        $user = $this->repository->findByUsername($form->username);
        if (!$user || !$user->isActive() || !$user->validatePassword($form->password)) {
            throw new \DomainException('Неверное имя пользователя или пароль');
        }
        return $user;
    }

}