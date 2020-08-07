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
            $user = null;
            //throw new \DomainException('Неверное имя пользователя или пароль');
        }
        return $user;
    }

    /**
     * @param LoginForm $form
     * @return array|\yii\db\ActiveRecord|null
     */
    public function checkMoodle($form)
    {
        $userMoodle = $this->repository->findByUsernameInMoodle($form->username);
        if(password_verify($form->password, $userMoodle->password))
            throw new \DomainException('Ваш аккаунт найден в мудл, скоро вы будете зарегистрированы');
        else
            throw new \DomainException('Вы еще не зарегистрированы. Обратитесь к администратору');
    }

}