<?php


namespace core\services\api;


class UserApiService extends MainApiService
{
    public function createUser($username, $email, $password, $firstname, $lastname)
    {
        $param = [
            'users' => [
                '0' => [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'firstname' => $firstname,
                    'lastname' => $lastname
                ]
            ]
        ];
        return $this->request('core_user_create_users', $param);
}

    public function deleteUser($user_id)
    {
        $param = [
            'userids' => [
                '0' => $user_id
            ]
        ];
        return $this->request('core_user_delete_users', $param);
    }
}