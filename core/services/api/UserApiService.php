<?php


namespace core\services\api;


class UserApiService extends MainApiService
{
    public function createUser($username,$password,$email)
    {
        $param = [
            'users' => [
                '0' => [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'firstname' => '123',
                    'lastname' => '123'
                ]
            ]
        ];
        return $this->request('core_user_create_users', $param);
    }
}