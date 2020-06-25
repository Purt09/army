<?php


namespace backend\services\user;


use backend\forms\user\UserAddForm;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use core\repositories\user\UserRepository;
use core\services\api\UserApiService;

class UserServices
{
    private $repository;
    private $serviceAPI;

    public function __construct()
    {
        $this->serviceAPI = new UserApiService();
        $this->repository = new UserRepository();
    }

    /**
     * @param User $form
     * @return User
     * @throws \Exception
     */
    public function signup(User $models): User
    {
        $user = User::requestSignup(
            $models->username,
            $models->password
        );
        $this->repository->save($user);
        $this->serviceAPI->createUser($models->username, $models->password);
        return $user;
    }

    public function update(User $user, User $form): void{
        $user->username = $form->username;
        $user->email = $form->email;
        $user->status = $form->status;

        $user->requestPasswordReset();
        $user->resetPassword($form->password);

        $this->repository->save($user);
    }

}