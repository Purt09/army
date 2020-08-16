<?php

namespace core\services\auth;

use core\entities\User\MdlUser;
use core\entities\User\TblStaff;
use core\entities\User\User;
use common\forms\auth\LoginForm;
use core\repositories\user\UserRepository;
use core\services\MainService;

class AuthService extends MainService
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
        if (password_verify($form->password, $userMoodle->password))
            return $this->signupByMoodle($userMoodle, $form);
        else
            throw new \DomainException('Вы еще не зарегистрированы. Обратитесь к администратору. Или данные неверные');
    }

    /**
     * @param MdlUser $userMoodle
     * @param LoginForm $form
     */
    private function signupByMoodle(MdlUser $userMoodle, $form)
    {
        $user = User::requestSignup($form->username, $form->password);
        $this->transaction(function () use ($userMoodle, $user) {
            $staff = TblStaff::create($userMoodle->firstname,
                $userMoodle->lastname,
                'Пусто',
                '123123',
                '7991991991',
                'Спб',
                '2020-01-01',
                'АВ123123'
            );
            $staff->save();
            $user->user_base_id = $staff->id;;
            $user->user_moodle_id = $userMoodle->id;
            $user->save();
        });
        return $user;
    }

}