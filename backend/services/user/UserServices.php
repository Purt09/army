<?php


namespace backend\services\user;


use backend\forms\user\SignupUserForm;
use backend\forms\user\UserAddForm;
use core\entities\User\MdlUser;
use core\entities\User\TblStaff;
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
    public function signup(SignupUserForm $form)
    {
        $user = User::requestSignup(
            $form->username,
            $form->password
        );
        $this->transaction(function () use ($user, $form){
            $staff = TblStaff::create(
                $form->firstName,
                $form->lastName,
                $form->sirName,
                $form->passport,
                $form->mobile_phone,
                $form->address,
                $form->birthday_date,
                $form->udl_number
            );
            if(!$staff->save())
                throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные(база)');
            $user->user_base_id = $staff->id;
            if($form->moodle_id == 0) {
                $user_id = $this->serviceAPI->createUser(
                    $form->username,
                    $form->email,
                    $form->password,
                    $form->firstName,
                    $form->lastName
                );
                if(!is_int($user_id[0]['id']))
                    throw new \RuntimeException('Данные не были отправлены на мудл. Пробуйте изменить данные(moodle)');
                $user->user_moodle_id = $user_id[0]['id'];
                if(!$user->save())
                    throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные(yii)');
            } else
                $user->user_moodle_id = $form->moodle_id;
            $this->repository->save($user);
        });
        return $user;
    }

    /**
     * @param User $user
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function delete($user)
    {
        $this->serviceAPI->deleteUser($user->user_moodle_id);
        MdlUser::findOne($user->user_moodle_id)->delete();
        $user->delete();
    }

    public function update(User $user, User $form){
        $user->username = $form->username;
        $user->status = $form->status;

        $user->requestPasswordReset();
        $user->resetPassword($form->password);

        $this->repository->save($user);
    }
}