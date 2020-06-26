<?php


namespace backend\services\user;


use backend\forms\user\SignupUserForm;
use backend\forms\user\UserAddForm;
use core\entities\User\User;
use core\entities\User\UsersBase;
use core\helpers\user\RbacHelpers;
use core\repositories\user\UserRepository;
use core\services\api\UserApiService;
use core\services\MainService;

class UserServices extends MainService
{
    private $repository;
    private $serviceAPI;

    public function __construct()
    {
        $this->serviceAPI = new UserApiService();
        $this->repository = new UserRepository();
    }

    /**
     * @param SignupUserForm $form
     * @return User
     */
    public function signup(SignupUserForm $form): User
    {
        $user = User::requestSignup(
            $form->username,
            $form->password
        );
        $this->transaction(function () use ($user, $form){
            $userBase = UsersBase::create(
                $form->firstName,
                $form->lastName,
                $form->sirName,
                'fio'
            );
            $user->user_base_id = $userBase->id;
            if($form->moodle_id == 0) {
                $user->user_moodle_id = 1;
                if(!$user->save())
                    throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные');
                $user_id = json_decode($this->serviceAPI->createUser(
                    $form->username,
                    $form->email,
                    $form->password,
                    $form->firstName,
                    $form->lastName
                ),1);
                if(!is_int($user_id[0]['id']))
                    throw new \RuntimeException('Данные не были отправлены на мудл. Пробуйте изменить данные');
                $user->user_moodle_id = $user_id[0]['id'];
            }
            else
                $user->user_moodle_id = $form->moodle_id;
            $this->repository->save($user);
        });
        return $user;
    }

    public function delete()
    {

    }

    public function update(User $user, User $form): void{
        $user->username = $form->username;
        $user->status = $form->status;

        $user->requestPasswordReset();
        $user->resetPassword($form->password);

        $this->repository->save($user);
    }
}