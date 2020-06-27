<?php

namespace core\services\auth;

use core\entities\User\User;
use common\forms\auth\LoginForm;
use core\repositories\user\UserRepository;

class AuthService
{
    private $repository;
    private $helpers;

    public function __construct(UserRepository $users)
    {
        $this->repository = $users;
    }

    public function auth(LoginForm $form): User
    {
        $user = $this->repository->findByUsername($form->username);
        if (!$user || !$user->isActive() || !$user->validatePassword($form->password)) {
            throw new \DomainException('Неверное имя пользователя или пароль');
        }
        return $user;
    }

}